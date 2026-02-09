<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EtudiantController extends Controller
{
    public function create()
    {
        return view('Etudiant.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'bac_type' => 'required|in:marocain,international',
            'filiere' => 'required|in:SMI,SMA,SEG,PC',
        ]);

        ;

        return redirect()->route('Etudiant.create')
            ->with('success', 'L etudiant a été ajouté avec succès.');
    }
}