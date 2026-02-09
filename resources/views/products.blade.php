@extends('layouts.layout')

@section ('title ',' products')
@section ('content')

<h1> products</h1>

<div class="row">
@foreach ($products as $product)

    <div class="car shadow-sm col-3 m-3">
        <div calss ="card-body">
            <div class =" card-title"> {{$product['title']}}</div>
                <div class="fw-bold">{{$product['price']}}</div>
                    <button class=" btn-btn-proimary">voir </button>
    </div>
    </div>
@endforeach
</div>
@endsection