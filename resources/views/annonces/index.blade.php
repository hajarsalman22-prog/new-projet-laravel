@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Liste des annonces</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('annonces.create') }}" class="btn btn-primary mb-3">
        Ajouter une annonce
    </a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Ville</th>
            <th>Prix</th>
            <th>Photo</th>
            <th>Action</th>
        </tr>

        @foreach($annonces as $annonce)
        <tr>
            <td>{{ $annonce->id }}</td>
            <td>{{ $annonce->titre }}</td>
            <td>{{ $annonce->ville }}</td>
            <td>{{ $annonce->prix }}</td>
            <td>
                @if($annonce->photo)
                    <img src="{{ asset('storage/'.$annonce->photo) }}" width="80">
                @endif
            </td>
            <td>
                <a href="{{ route('annonces.show',$annonce->id) }}" class="btn btn-info btn-sm">
                    Afficher
                </a>

                <a href="{{ route('annonces.edit',$annonce->id) }}" class="btn btn-warning btn-sm">
                    Modifier
                </a>

                <form action="{{ route('annonces.destroy',$annonce->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Confirmer suppression ?')" class="btn btn-danger btn-sm">
                        Supprimer
                    </button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

</div>

@endsection