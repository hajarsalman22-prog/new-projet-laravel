@extends('layouts.layout')

@section('title', 'edit')
@section('content')

@session('success')
 <p class="alert alert-success"> {{session('success')}} </p>
@endsession

<h3>Modifier un stagiare</h3>

<form action="{{ route('stagiares.update' , ['stagiare'=> $stagiare->id ]) }}" method="post">
    @csrf
    @method('PUT')
    @include('stagiares.form')
    <button class="btn btn-primary w-100" type="submit">Enerigistre</button>

</form>



@endsection