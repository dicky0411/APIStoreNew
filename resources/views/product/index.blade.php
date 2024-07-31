@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100">
                        <img src="images/{{ $product['image'] }}" class="card-img-top" alt="{{ $product['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['title'] }}</h5>
                            <p class="card-text">{{ $product['description'] }}</p>
                            <a href="{{ route('products.show', ['code' => $product['code']]) }}" class="btn btn-primary">Enter</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
