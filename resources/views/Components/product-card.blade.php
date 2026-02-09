<div class="card h-200" style="width:fit-content">
   <img src="{{ asset('images/' . $product['image']) }}" 
     class="card-img-top img-fluid"
     style="height: 200px; object-fit: cover  ">
    <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{ $product['title'] }}</h5>
        <p class="text-success fw-semibold">{{ $product['price'] }}</p>
        <a href="{{ route('products.show', $product['id']) }}" 
           class="btn btn-primary mt-auto">Voir</a>
    </div>
</div>

