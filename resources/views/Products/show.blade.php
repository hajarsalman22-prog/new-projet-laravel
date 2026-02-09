@extends('layouts.app')

@section('title', $product['title'])

@section('content')
    <h1>Produit </h1>
    <img src="{{ asset('images/img1.jpg') }}" alt="Produit 1">
    <div class="card shadow mx-auto" style="width:fit-content">
        
                <img src="{{ asset('images/' . $product['image']) }}" 
                     class=" card-img-top img-fluid rounded-start" 
                     style="height: 400px; object-fit: cover ">
                     
                         <div class="card-body">
                             <h2 class="card-title">{{ $product['title'] }}</h2>
                             <h4 class="text-success">{{ $product['price'] }}</h4>
                             <p class="card-text mt-4">{{ $product['description'] }}</p>
                         </div>
            
          
    </div>
@endsection
