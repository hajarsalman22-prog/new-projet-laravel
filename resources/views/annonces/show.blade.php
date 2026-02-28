@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Détail de l'annonce</h2>

    <div class="card p-3">
        <h4>{{ $annonce->titre }}</h4>
        <p><strong>Description:</strong> {{ $annonce->description }}</p>
        <p><strong>Type:</strong> {{ $annonce->type }}</p>
        <p><strong>Ville:</strong> {{ $annonce->ville }}</p>
        <p><strong>Superficie:</strong> {{ $annonce->superficie }} m²</p>
        <p><strong>Neuf:</strong> {{ $annonce->neuf ? 'Oui' : 'Non' }}</p>
        <p><strong>Prix:</strong> {{ $annonce->prix }}</p>

        @if($annonce->photo)
            <img src="{{ asset('storage/'.$annonce->photo) }}" width="250">
        @endif
    </div>

    <a href="{{ route('annonces.index') }}" class="btn btn-secondary mt-3">
        Retour
    </a>

</div>

@endsection