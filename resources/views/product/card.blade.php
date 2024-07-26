<div class="col-md-4 mb-4">
    <div class="card" style="width: 18rem;">
        <img src="https://geology.com/world/world-map.gif" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <a href="{{ route('products.show', $product->code) }}" class="btn btn-primary">Details</a>
        </div>
    </div>
</div>
