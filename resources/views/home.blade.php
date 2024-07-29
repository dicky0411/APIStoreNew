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
                    <img src="https://sinay.ai/wp-content/uploads/2022/09/api-e1649279794668-scaled.webp" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">API Store</h1>
                    <p class="lead">Welcome to APIStore, your one-stop destination for a wide array of publicly accessible APIs. 
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
                        <img src="https://geology.com/world/world-map.gif" class="card-img-top" alt="World Map">
                        <div class="card-body">
                            <h5 class="card-title">Country API</h5>
                            <p class="card-text">Retrieve comprehensive data on countries worldwide,
                                with an input of a country code, details like names, location, and other relevant 
                                information will be shown.</p>
                            <a href="#" class="btn btn-primary">Enter</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://miro.medium.com/v2/resize:fit:960/1*UTw_shVIFnBkuS5ngndXvw.jpeg" class="card-img-top" alt="Regional IP API">
                        <div class="card-body">
                            <h5 class="card-title">Regional IP API</h5>
                            <p class="card-text">Access detailed information about IP addresses, including geolocation data,
                                and the absolute location of the location with the input of a valid IP address.</p>
                            <a href="{{ route('ip.region.api') }}" class="btn btn-primary">Enter</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Map_of_the_telephone_area_codes_of_the_People%27s_Republic_of_China.png/450px-Map_of_the_telephone_area_codes_of_the_People%27s_Republic_of_China.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Area Code API</h5>
                            <p class="card-text">Get accurate and up-to-date data on area codes after a 6 digit area code is entered, 
                                allowing you to identify the geographical regions in China corresponding to the area code.</p>
                            <a href="#" class="btn btn-primary">Enter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-4 py-5" id="featured-3">
            <h2 class="pb-2 border-bottom">Features</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"></div>
                    <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                        and probably just keep going until we run out of words.</p>
                    <a href="#" class="icon-link">
                        Call to action
                    </a>
                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"></div>
                    <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                        and probably just keep going until we run out of words.</p>
                    <a href="#" class="icon-link">
                        Call to action
                    </a>
                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"></div>
                    <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                        and probably just keep going until we run out of words.</p>
                    <a href="#" class="icon-link">
                        Call to action
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
