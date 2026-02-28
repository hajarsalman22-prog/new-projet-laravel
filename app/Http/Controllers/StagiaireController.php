<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagiaire::all();
        return view('stagiaires.index', compact('stagiaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stagiaires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Stagiaire::create($request->all());
        return redirect('/stagiaires');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stagiaire $stagiaire)
    {
         $stagiaire = Stagiaire::findOrFail($id);
        return view('stagiaires.show', compact('stagiaire'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire)
    {
        
        $stagiaire = Stagiaire::findOrFail($id);
        return view('stagiaires.edit', compact('stagiaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        $stagiaire = Stagiaire::findOrFail($id);
        $stagiaire->update($request->all());
        return redirect('/stagiaires');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagiaire $stagiaire)
    {
        Stagiaire::destroy($id);
        return redirect('/stagiaires');
    }
}
