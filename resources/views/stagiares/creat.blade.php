@extends('layouts.layout')

@section('title', 'creer')
@section('content')

@session('success')
    <p class="alert alert-success"> {{session('success')}} </p>
@endsession

<h3>Ajouter un Stagaire</h3>

<form action="{{ route('stagires.store') }}" method="post">
    @csrf
    @include('stagires.form')

    <button class="btn btn-primary w-100" type="submit">Ajouter</button>

</form>



@endsection