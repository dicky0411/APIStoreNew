@extends('layout.app')

@section('content')
    <div class="container text-center py-5 vintage-container">
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
            <h1 class="display-4 vintage-header">API Store</h1>
            <p class="lead vintage-subheader">Welcome to APIStore. Discover APIs for various needs.</p>
        </header>

        <h2 class="mb-4 vintage-header">Recommended APIs</h2>

        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="card vintage-card">
                    <img src="images/calendar1.webp" class="card-img-top vintage-card-img" alt="Calendar API">
                    <div class="card-body text-center">
                        <h5 class="card-title vintage-card-title">Calendar API</h5>
                        <a href="{{ route('products.show', ['code' => 'calendar']) }}" class="btn btn-primary vintage-btn">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card vintage-card">
                    <img src="images/ipRegion.jpg" class="card-img-top vintage-card-img" alt="Regional IP API">
                    <div class="card-body text-center">
                        <h5 class="card-title vintage-card-title">Regional IP API</h5>
                        <a href="{{ route('products.show', ['code' => 'ip2region']) }}" class="btn btn-primary vintage-btn">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card vintage-card">
                    <img src="images/crypto1.png" class="card-img-top vintage-card-img" alt="Cryptocurrency API">
                    <div class="card-body text-center">
                        <h5 class="card-title vintage-card-title">Cryptocurrency API</h5>
                        <a href="{{ route('products.show', ['code' => 'crypto']) }}" class="btn btn-primary vintage-btn">Enter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

