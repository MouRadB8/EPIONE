<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;
use app\Providers\AppServiceProvider;

class ProduitController extends Controller
{
    public function index()
    {   
        return Produit::get();  
    }
    public function store(Request $request)
    {
        $img1 = time().'.'.request()->img1->getClientOriginalExtension();
        request()->img1->move(public_path('img1'), $img1);
        $img2 = time().'.'.request()->img2->getClientOriginalExtension();
        request()->img2->move(public_path('img2'), $img2);
        $img3 = time().'.'.request()->img3->getClientOriginalExtension();
        request()->img3->move(public_path('img3'), $img3);
        $produit = new Produit;
        $produit->img1 = $img1;
        $produit->img2 = $img2;
        $produit->img3 = $img3;
        $produit->reference = $request->reference;
        $produit->name = $request->name;
        $produit->price = $request->price;
        $produit->description = $request->description;
        $produit->quantiteDisponible = $request->quantiteDisponible;
        $produit->save();
        
        return response()->json([
            'message'=>'Product added successful'
        ]);
    }
    public function show(string $id)
    {
        $produit = Produit::findOrFail($id);
        return response()->json($produit);
    }
    public function Search(Request $request){
        $produit = Produit::where($request->all())->get();
   
        return response()->json([
            'message'=>'success',
            "Product" => $produit
        ]);
    }
    public function update(Request $request, string $id)
    {  
        $img1 = time().'.'.request()->img1->getClientOriginalExtension();
        request()->img1->move(public_path('img1'), $img1);
        $img2 = time().'.'.request()->img2->getClientOriginalExtension();
        request()->img2->move(public_path('img2'), $img2);
        $img3 = time().'.'.request()->img3->getClientOriginalExtension();
        request()->img3->move(public_path('img3'), $img3);
        $produit = Produit::findOrFail($id);
        $produit->img1 = $img1;
        $produit->img2 = $img2;
        $produit->img3 = $img3;
        $produit->reference = $request->reference;
        $produit->name = $request->name;
        $produit->price = $request->price;
        $produit->description = $request->description;
        $produit->quantiteDisponible = $request->quantiteDisponible;
        $produit->save();
        return response()->json([
            'message'=>'Product updated successful'
        ]);
    }
    public function destroy(string $id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();
        return response()->json([
            'message'=>'You want to delete this product'
        ]);
    }
}
