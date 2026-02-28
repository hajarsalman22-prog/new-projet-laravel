@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Ajouter une annonce</h2>

    <form action="{{ route('annonces.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Titre</label>
            <input type="text" name="titre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label>Type</label>
            <select name="type" class="form-control">
                <option>Appartement</option>
                <option>Maison</option>
                <option>Villa</option>
                <option>Magasin</option>
                <option>Terrain</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Ville</label>
            <input type="text" name="ville" class="form-control">
        </div>

        <div class="mb-3">
            <label>Superficie</label>
            <input type="number" name="superficie" class="form-control">
        </div>

        <div class="mb-3">
            <label>Neuf</label>
            <select name="neuf" class="form-control">
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Prix</label>
            <input type="number" step="0.01" name="prix" class="form-control">
        </div>

        <div class="mb-3">
            <label>Photo</label>
            <input type="file" name="photo" class="form-control">
        </div>

        <button class="btn btn-success">Enregistrer</button>
        <a href="{{ route('annonces.index') }}" class="btn btn-secondary">Retour</a>

    </form>
</div>

@endsection