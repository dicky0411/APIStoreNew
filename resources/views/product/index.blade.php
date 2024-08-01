@extends('layout.app')

@section('content')
    <style>
        /* General Container Styles */
        .container {
            background: #f9f9f9; /* Light background */
            padding: 2rem 1rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            border: 1px solid #e0e0e0; /* Light border */
        }

        /* Card Styles */
        .card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            background: #ffffff; /* White background */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15); /* Slightly enhanced shadow */
        }

        .card-img-top {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            filter: brightness(0.9); /* Slightly darker image */
        }

        /* Button Styles */
        .btn-custom {
            background: #007bff; /* Blue button */
            border: none;
            color: #fff;
            border-radius: 4px;
            transition: background 0.3s ease, transform 0.3s ease;
            font-weight: bold;
            padding: 0.5rem 1rem;
            text-transform: uppercase;
        }

        .btn-custom:hover {
            background: #0056b3; /* Darker blue on hover */
            transform: translateY(-2px);
        }

        /* Title and Text Styles */
        .card-title {
            color: #333333; /* Darker text */
            font-family: 'Noto Serif', serif;
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .card-text {
            color: #666666; /* Gray text */
            font-family: 'Noto Serif', serif;
            font-size: 1rem;
            line-height: 1.4;
        }

        /* Header Styles */
        header h1, header p {
            color: #333333; /* Darker text for header */
        }

        h2 {
            color: #333333; /* Darker text for subheader */
        }
    </style>
    <div class="container mt-5">
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

        <!-- Minimalistic Header -->
        <header class="mb-5">
            <h1 class="display-4" style="font-family: 'Noto Serif', serif;">API Store</h1>
            <p class="lead" style="font-family: 'Noto Serif', serif;">Welcome to APIStore. Discover APIs for various needs.</p>
        </header>

        <h2 class="mb-4" style="font-family: 'Noto Serif', serif;">Recommended APIs</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100">
                        <img src="images/{{ $product['image'] }}" class="card-img-top" alt="{{ $product['title'] }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $product['title'] }}</h5>
                            <p class="card-text flex-grow-1">{{ $product['description'] }}</p>
                            <a href="{{ route('products.show', ['code' => $product['code']]) }}" class="btn btn-custom mt-auto">Enter</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
