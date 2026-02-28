@extends('layouts.layout')

@section('title', 'stagiares')
@section('content')

@session('success')
    <p class="alert alert-success"> {{session('success')}} </p>
@endsession

<div class="table-responsive">
    <h4 class="text-center mb-3">Liste des stagiares</h4>
    <a href="{{ route('stagires.create') }}" class="btn btn-primary mb-3">Ajouter</a>
    <table class="table table-stripted table-hover">
        <thead>
            <th>nom</th>
            <th>genre</th>
            <th>note</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($stagires as $stagire)

                <tr>
                    <td>{{$stagire->title}}</td>
                    <td>{{$stagire->price}}</td>
                    <td>{{$stagire->qt}}</td>
                    <td>
                        <a href="{{route('stagires.show', ['stagire' => $stagire->id])}}" class="btn btn-info">afficher</a>
                        <a href="{{route('stagires.edit',['stagire' => $stagire->id])}}" class="btn btn-secondary">Modifier</a>

                        <form onsubmit="return confirm('ok?')" class="d-inline" action="{{route('stagires.destroy',['stagire' => $stagire->id] )}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection