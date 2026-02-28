@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Modifier annonce</h2>

    <form action="{{ route('annonces.update',$annonce->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Titre</label>
            <input type="text" name="titre" value="{{ $annonce->titre }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $annonce->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Prix</label>
            <input type="number" step="0.01" name="prix" value="{{ $annonce->prix }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Photo actuelle</label><br>
            @if($annonce->photo)
                <img src="{{ asset('storage/'.$annonce->photo) }}" width="150">
            @endif
        </div>

        <div class="mb-3">
            <label>Nouvelle photo</label>
            <input type="file" name="photo" class="form-control">
        </div>

        <button class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('annonces.index') }}" class="btn btn-secondary">Retour</a>

    </form>
</div>

@endsection