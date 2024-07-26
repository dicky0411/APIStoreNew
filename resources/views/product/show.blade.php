@extends('layout.app')

@section('content')
    <h1>{{ $product->name }}</h1>

    @if (file_exists(resource_path('views/livewire/' . $product->code . '.blade.php')))
        @livewire($product->code, ['product' => $product])
    @else
        @include('livewire.wild')
    @endif

    <h2 style="margin-top: 10em">Recommended Products</h2>

    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://geology.com/world/world-map.gif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk
                            of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://geology.com/world/world-map.gif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk
                            of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://geology.com/world/world-map.gif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk
                            of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection
