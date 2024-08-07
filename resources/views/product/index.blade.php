@extends('layout.app')

@section('content')
    <style>
        /* General Container Styles */
        .container {
            background: #fdf6e3; /* Off-white background */
            padding: 2rem 1rem;
            border-radius: 12px; /* Rounded corners */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Soft shadow */
            border: 1px solid #d4b9a6; /* Vintage border color */
            color: #333; /* Dark text for readability */
        }

        /* Card Styles */
        .card {
            border: 1px solid #d4b9a6; /* Vintage border color */
            border-radius: 12px; /* Rounded corners */
            background: #fff; /* White background */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
        }

        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
        }

        .card-img-top {
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            filter: sepia(0.3) brightness(0.9); /* Sepia tone for vintage feel */
        }

        /* Button Styles */
        .btn-custom {
            background: #b59f7f; /* Vintage tan button */
            border: none;
            color: #fff;
            border-radius: 8px;
            transition: background 0.3s ease, transform 0.3s ease;
            font-weight: bold;
            padding: 0.75rem 1.5rem;
            text-transform: uppercase;
        }

        .btn-custom:hover {
            background: #a68a5b; /* Slightly darker tan on hover */
            transform: translateY(-2px);
        }

        /* Title and Text Styles */
        .card-title {
            color: #5a3e36; /* Darker brown text */
            font-family: 'Noto Serif', serif;
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .card-text {
            color: #6f4e28; /* Medium brown text */
            font-family: 'Noto Serif', serif;
            font-size: 1rem;
            line-height: 1.5;
        }

        /* Header Styles */
        header h1 {
            color: #5a3e36; /* Darker brown for header */
            font-family: 'ZCOOL QingKe HuangYou', serif;
        }

        header p {
            color: #6f4e28; /* Medium brown for subtitle */
            font-family: 'Noto Serif', serif;
        }

        h2 {
            color: #5a3e36; /* Darker brown for subheader */
            font-family: 'ZCOOL QingKe HuangYou', serif;
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

        <!-- Vintage Header -->
        <header class="mb-5">
            <h1 class="display-4">API Store</h1>
            <p class="lead">Welcome to APIStore. Discover APIs for various needs.</p>
        </header>

        <h2 class="mb-4">Recommended APIs</h2>

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
