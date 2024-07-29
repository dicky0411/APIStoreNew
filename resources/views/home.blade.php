@extends('layout.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container" id="main-content">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="https://sinay.ai/wp-content/uploads/2022/09/api-e1649279794668-scaled.webp"
                        class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500"
                        loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">API Store</h1>
                    <p class="lead">Welcome to APIStore, your one-stop destination for a wide array of publicly accessible
                        APIs.
                        Our platform offers seamless integration and easy access to various data sources,
                        empowering developers and businesses to build robust applications with real-time information.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                    </div>
                </div>
            </div>
        </div>

        <h2 style="margin-top: 1em">Recommended APIs</h2>

        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://collegeboreal.ca/wp-content/uploads/2023/03/pexels-leeloo-thefirst-5386754-scaled.jpg" class="card-img-top" alt="Calendars">
                        <div class="card-body">
                            <h5 class="card-title">Calendar API</h5>
                            <p class="card-text">Retrieve comprehensive data on holiday across united states, with the input of a 
                                month and a date, the API will return the accurdate detail about the holiday on that date
                            </p>
                                <a href="{{ route('products.show', ['code' => 'calendar']) }}"
                                class="btn btn-primary">Enter</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://miro.medium.com/v2/resize:fit:960/1*UTw_shVIFnBkuS5ngndXvw.jpeg"
                            class="card-img-top" alt="Regional IP API">
                        <div class="card-body">
                            <h5 class="card-title">Regional IP API</h5>
                            <p class="card-text">Access detailed information about IP addresses, including geolocation data,
                                and the absolute location of the location with the input of a valid IP address.</p>
                            <a href="{{ route('products.show', ['code' => 'ip2region']) }}"
                                class="btn btn-primary">Enter</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Map_of_the_telephone_area_codes_of_the_People%27s_Republic_of_China.png/450px-Map_of_the_telephone_area_codes_of_the_People%27s_Republic_of_China.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Area Code API</h5>
                            <p class="card-text">Get accurate and up-to-date data on area codes after a 6 digit area code is
                                entered,
                                allowing you to identify the geographical regions in China corresponding to the area code.
                            </p>
                            <a href="{{ route('products.show', ['code' => 'area-code']) }}"
                            class="btn btn-primary">Enter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
@endsection
