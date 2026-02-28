<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    $annonces = Annonce::all();
    return view('annonces.index', compact('annonces'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         return view('annonces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    if($request->hasFile('photo')){
        $path = $request->file('photo')->store('annonces','public');
    } else {
        $path = null;
    }

    Annonce::create([
        'titre' => $request->titre,
        'description' => $request->description,
        'type' => $request->type,
        'ville' => $request->ville,
        'superficie' => $request->superficie,
        'neuf' => $request->neuf,
        'prix' => $request->prix,
        'photo' => $path
    ]);

    return redirect()->route('annonces.index')
        ->with('success','Annonce ajoutée avec succès');
}



    /**
     * Display the specified resource.
     */
   public function show(Annonce $annonce)
{
    return view('annonces.show', compact('annonce'));
}

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Annonce $annonce)
{
    return view('annonces.edit', compact('annonce'));
}


    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, Annonce $annonce)
{
    $annonce->update($request->all());

    return redirect()->route('annonces.index')
        ->with('success', 'Annonce modifiée avec succès');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annonce $annonce)
    {
        $annonce->delete();

        return redirect()->route('annonces.index')
            ->with('success', 'Annonce supprimée avec succès');
    }
public function dashboard()
{
    $stats = [
        'total' => Annonce::count(),
        'prix_total' => Annonce::sum('prix'),
        'prix_moyen' => Annonce::avg('prix'),
        'surface_totale' => Annonce::sum('superficie'),
    ];

    return view('annonces.dashboard', compact('stats'));
}

}