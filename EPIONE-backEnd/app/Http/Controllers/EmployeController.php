<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployeController extends Controller
{
    public function index()
    {   
        return Employe::get();  
    }
    public function store(Request $request)
    {
        $employe = new Employe;
        $employe->CIN = $request->CIN;
        $employe->lastName = $request->lastName;
        $employe->firstName = $request->firstName;
        $employe->typeEmploye = $request->typeEmploye;
        $employe->Salaire = $request->Salaire;
        $employe->userName = $request->userName;
        $employe->Password = $request->Password;
        $employe->save();
        
        return response()->json([
            'message'=>'Employe added successful'
        ]);
    }
    public function show(string $id)
    {
        $employe = Employe::findOrFail($id);
        return response()->json($employe);
    }
    public function Search(Request $request){
        $employe = Employe::where($request->all())->get();
   
        return response()->json([
            'message'=>'success',
            "Employe" => $employe
        ]);
    }
    public function update(Request $request, string $id)
    { 
        $employe = Employe::findOrFail($id);
        $employe->CIN = $request->CIN;
        $employe->lastName = $request->lastName;
        $employe->firstName = $request->firstName;
        $employe->typeEmploye = $request->typeEmploye;
        $employe->Salaire = $request->Salaire;
        $employe->userName = $request->userName;
        $employe->Password = $request->Password;
        $employe->save();
        return response()->json([
            'message'=>'Employe updated successful'
        ]);
    }
    public function destroy(string $id)
    {
        $employe = Employe::findOrFail($id);
        $employe->delete();
        return response()->json([
            'message'=>'You want to delete this employe'
        ]);
    }
}
