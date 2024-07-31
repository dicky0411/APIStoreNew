@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100 border-primary border-3 shadow-sm">
                        <img src="images/{{ $product['image'] }}" class="card-img-top" alt="{{ $product['title'] }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-dark">{{ $product['title'] }}</h5>
                            <p class="card-text flex-grow-1 text-secondary">{{ $product['description'] }}</p>
                            <a href="{{ route('products.show', ['code' => $product['code']]) }}" class="btn btn-primary btn-custom mt-auto">Enter</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
