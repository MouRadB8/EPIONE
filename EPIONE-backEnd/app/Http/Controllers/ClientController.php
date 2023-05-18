<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {   
        return Client::get();  
    }
    public function store(Request $request)
    {
        $img = time().'.'.request()->img->getClientOriginalExtension();
        request()->img->move(public_path('img'), $img);
        $client = new Client;
        $client->CIN = $request->CIN;
        $client->lastName = $request->lastName;
        $client->firstName = $request->firstName;
        $client->dateNaissance = $request->dateNaissance;
        $client->adresse = $request->adresse;
        $client->phone = $request->phone;
        $client->username = $request->username;
        $client->email = $request->email;
        $client->password = $request->password;
        $client->img = $img;
        $client->save();
        
        return response()->json([
            'message'=>'Client added successful'
        ]);
    }
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return response()->json($client);
    }
    public function Search(Request $request){
        $client = Client::where($request->all())->get();
   
        return response()->json([
            'message'=>'success',
            "Client" => $client
        ]);
    }
    public function update(Request $request, string $id)
    {  
        $img = time().'.'.request()->img->getClientOriginalExtension();
        request()->img->move(public_path('img'), $img);
        $client = Client::findOrFail($id);
        $client->CIN = $request->CIN;
        $client->lastName = $request->lastName;
        $client->firstName = $request->firstName;
        $client->dateNaissance = $request->dateNaissance;
        $client->adresse = $request->adresse;
        $client->phone = $request->phone;
        $client->username = $request->username;
        $client->email = $request->email;
        $client->password = $request->password;
        $client->img = $img;
        $client->save();
        return response()->json([
            'message'=>'Client updated successful'
        ]);
    }
    public function destroy(string $id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return response()->json([
            'message'=>'You want to delete this client'
        ]);
    }
}
