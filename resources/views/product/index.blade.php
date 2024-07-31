@extends('layout.app')

@section('content')
    <style>
        /* General Container Styles */
        .container {
            background: linear-gradient(135deg, #0f0f0f, #1a1a1a); /* Dark gradient for depth */
            padding: 4rem 2rem;
            border-radius: 16px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(10px); /* Holographic effect */
            border: 1px solid rgba(255, 255, 255, 0.1); /* Subtle border */
        }

        /* Card Styles */
        .card {
            border: 2px solid #333;
            border-radius: 16px;
            background: rgba(34, 34, 34, 0.8); /* Semi-transparent dark background */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.4); /* Neon shadow */
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 255, 255, 0.1); /* Neon overlay */
            mix-blend-mode: screen;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .card:hover::before {
            opacity: 0.3;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.6);
        }

        .card-img-top {
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
            filter: brightness(0.7); /* Darker image effect */
        }

        /* Button Styles */
        .btn-custom {
            background: linear-gradient(90deg, #00aaff, #00ffff); /* Neon gradient */
            border: none;
            color: #fff;
            border-radius: 8px;
            transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            font-weight: bold;
            padding: 0.75rem 1.5rem;
            text-transform: uppercase;
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.7); /* Neon glow */
        }

        .btn-custom:hover {
            background: linear-gradient(90deg, #00ffff, #00aaff); /* Inverted gradient */
            transform: translateY(-2px);
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.9); /* Enhanced glow */
        }

        /* Title and Text Styles */
        .card-title {
            color: #00eaff; /* Bright cyan */
            font-family: 'Roboto', sans-serif;
            font-size: 1.5rem;
            letter-spacing: 1.5px;
            margin-bottom: 0.5rem;
        }

        .card-text {
            color: #b0b0b0; /* Light gray */
            font-family: 'Roboto', sans-serif;
            font-size: 1rem;
            line-height: 1.4;
        }
    </style>
    <div class="container mt-5">
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
