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

        <!-- Traditional Chinese Header -->
        <header class="mb-5">
            <h1 class="display-4" style="font-family: 'ZCOOL QingKe HuangYou', serif; color: #5a3e36;">API Store</h1>
            <p class="lead" style="font-family: 'Noto Serif', serif; color: #6d4c41;">Welcome to APIStore. Discover APIs for various needs.</p>
           
        </header>

        

        <h2 class="mb-4" style="font-family: 'ZCOOL QingKe HuangYou', serif; color: #5a3e36;">Recommended APIs</h2>

        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="card" style="border: 2px solid #d9b382; background-color: rgba(255, 255, 255, 0.9);">
                    <img src="images/calendar1.webp" class="card-img-top" alt="Calendar API" style="border-bottom: 2px solid #d9b382;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'ZCOOL QingKe HuangYou', serif; color: #5a3e36;">Calendar API</h5>
                        <a href="{{ route('products.show', ['code' => 'calendar']) }}" class="btn btn-primary" style="background-color: #6d4c41; border: none;">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="border: 2px solid #d9b382; background-color: rgba(255, 255, 255, 0.9);">
                    <img src="images/ipRegion.jpg" class="card-img-top" alt="Regional IP API" style="border-bottom: 2px solid #d9b382;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'ZCOOL QingKe HuangYou', serif; color: #5a3e36;">Regional IP API</h5>
                        <a href="{{ route('products.show', ['code' => 'ip2region']) }}" class="btn btn-primary" style="background-color: #6d4c41; border: none;">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="border: 2px solid #d9b382; background-color: rgba(255, 255, 255, 0.9);">
                    <img src="images/crypto1.png" class="card-img-top" alt="Cryptocurrency API" style="border-bottom: 2px solid #d9b382;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'ZCOOL QingKe HuangYou', serif; color: #5a3e36;">Cryptocurrency API</h5>
                        <a href="{{ route('products.show', ['code' => 'crypto']) }}" class="btn btn-primary" style="background-color: #6d4c41; border: none;">Enter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Serif&family=ZCOOL+QingKe+HuangYou&display=swap');

        body {
            background-color: #e8e4de; /* Light beige background */
            font-family: 'Noto Serif', serif; /* Elegant serif font */
            background-image: url('images/song_bg_pattern.jpg'); /* Traditional pattern */
            background-size: cover;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent white background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* More pronounced shadow */
            border: 2px solid #d9b382; /* Bamboo-like border */
        }

        .card {
            border: none;
        }

        .card-img-top {
            height: auto;
            max-height: 150px;
            object-fit: cover;
            border-radius: 8px 8px 0 0; /* Rounded top corners */
        }

        .btn-primary {
            background-color: #6d4c41; /* Earthy brown button color */
            border: none;
        }

        h1, h2, h3, h5 {
            font-family: 'ZCOOL QingKe HuangYou', serif; /* Traditional Chinese style font */
            color: #5a3e36; /* Darker earthy tone */
        }

        .alert {
            background-color: #fff3cd;
            border-color: #ffeeba;
            color: #856404;
        }

        .traditional-item {
            text-align: center;
            padding: 20px;
            border-radius: 8px;
            border: 2px solid #d9b382;
            background-color: rgba(255, 255, 255, 0.9);
            margin-bottom: 20px;
        }

        .traditional-item img {
            max-height: 100px;
            object-fit: cover;
            margin-bottom: 15px;
        }
    </style>
@endsection
