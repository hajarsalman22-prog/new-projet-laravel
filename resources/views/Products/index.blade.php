@extends('layouts.app')

@section('title', 'Nos Produits')

@section('content')
    <h1 class="mb-5 text-center">Nos Produits</h1>
    <div class="row g-5 justify-content-center ">
        @foreach ($products as $product)
            <div class="col-auto d-flex justify-content-center ">
                <x-product-card :product="$product"  />
            </div>
        @endforeach
    </div>
@endsection