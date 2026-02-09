<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public $products = [ 
    [ 
        'id' => 1, 
        'title' => 'HP16D0195NF', 
        'price' => 'Intel i5 12th Gen', 
        'image' => 'HP16D0195NF.jpg', 
        'description' => 'Laptop polyvalent conçu pour la bureautique et 
multimédia.' 
    ], 
    [ 
        'id' => 2, 
        'title' => 'HP14424U3EA', 
        'price' => 'Intel i3 11th Gen', 
        'image' => 'HP14424U3EA.jpg', 
        'description' => 'Portable léger adapté aux tâches quotidiennes.' 
    ], 
    [ 
        'id' => 3, 
        'title' => 'HUA6901443442959', 
        'price' => 'Ryzen 5 4600H', 
        'image' => 'HUA6901443442959.jpg', 
        'description' => 'Bonne performance pour bureautique + montage 
léger.' 
    ], 
    [ 
        'id' => 4, 
        'title' => 'NXATHEF002', 
        'price' => 'Intel i7 10th Gen', 
        'image' => 'NXATHEF002.jpg', 
        'description' => 'Portable professionnel avec écran Full HD.' 
    ], 
]; 

      public function index()
{ 

    return view('products.index', ['products' => $this->products]);
}

public function show($id)
{
    $product = collect($this->products)->firstWhere('id', $id);

    if (!$product) {
        abort(404, 'Produit introuvable');
    }

    return view('products.show', compact('product'));
}

public function ajouter(){
    return view('product.create');
}
  public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:3',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string|min:10',
        ]);


        return redirect()->route('product.ajouter')
            ->with('success', 'Produit ajouté avec succès.');
    }
}