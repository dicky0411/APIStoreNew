@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($products as $product)
                @include('product.card', ['product' => $product])
            @endforeach
        </div>
    </div>
@endsection
