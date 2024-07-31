@extends('layout.app')

@section('content')
    <div class="container text-center py-5">
        @if (session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger mb-4">
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1 class="mb-4">API Store</h1>
        <p class="mb-4">Welcome to APIStore. Discover APIs for various needs.</p>

        <div class="row justify-content-center mb-5">
            <div class="col-md-6">
                <img src="images/apistore.webp" class="img-fluid" alt="API Store" style="max-height: 200px; object-fit: cover;">
            </div>
        </div>

        <h2 class="mb-4">Recommended APIs</h2>

        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="card border-0">
                    <img src="images/calendar1.webp" class="card-img-top" alt="Calendar API">
                    <div class="card-body text-center">
                        <h5 class="card-title">Calendar API</h5>
                        <a href="{{ route('products.show', ['code' => 'calendar']) }}" class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card border-0">
                    <img src="images/ipRegion.jpg" class="card-img-top" alt="Regional IP API">
                    <div class="card-body text-center">
                        <h5 class="card-title">Regional IP API</h5>
                        <a href="{{ route('products.show', ['code' => 'ip2region']) }}" class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card border-0">
                    <img src="images/crypto1.png" class="card-img-top" alt="Cryptocurrency API">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cryptocurrency API</h5>
                        <a href="{{ route('products.show', ['code' => 'crypto']) }}" class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        body {
            background-color: #f5f5f5; /* Light grey background for minimalism */
        }

        .container {
            background-color: #fff; /* White background for the main content area */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Subtle shadow */
        }

        .card {
            border: none; /* Remove card border for a cleaner look */
        }

        .card-img-top {
            height: auto; /* Maintain aspect ratio */
            max-height: 150px; /* Limit image height */
            object-fit: cover;
        }

        .btn-primary {
            background-color: #007bff; /* Primary button color */
            border: none; /* Remove button border */
        }
    </style>
@endsection
