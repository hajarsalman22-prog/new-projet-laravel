@extends('layouts.layout')

@section('title')
{{$stagiare->title}}
@endsection
@section('content')

<div class="card">
    <div class="card-header">
        <h3>stagaire # {{$stagiare->title}}</h3>
    </div>
    <div class="card-body">
        <p>note : {{$stagiare->note}}</p>
        <p>action : {{$stagiare->action}}</p>
        <a href="{{route('stagiares.index')}}">Retour</a>
    </div>
</div>



@endsection