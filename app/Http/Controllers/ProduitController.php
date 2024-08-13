<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\View\View;
class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $produits = Produit::all();
        return view('produits.index' )->with('produits',$produits);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input=$request->all();
        Produit::create($input);
        return redirect()->route('produit.index')->with('flash_message', 'Produit Added!');    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $produit=Produit::find($id);
        return view('produits.show')->with('produits',$produit);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $produit=Produit::find($id);
        return view('produits.edit')->with('produits',$produit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $produit=Produit::find($id);
        $input=$request->all();
        $produit->update($input);
        return redirect('produit')->with('flash_message','Produit Updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Produit::destroy($id);
        return redirect('produit')->with('flash_message','Produit Deleted !');
    }
}
