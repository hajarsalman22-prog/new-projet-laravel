@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h1 class="mb-4">Bienvenue sur notre Site de produits</h1>
<p>Choisissez parmi nos ordinateurs portables sélectionnés pour vous</p> 
 <a href="{{ route('products.index') }}" class="btn btn-primary">Trouver votre produit</a>
@endsection