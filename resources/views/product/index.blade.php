@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://collegeboreal.ca/wp-content/uploads/2023/03/pexels-leeloo-thefirst-5386754-scaled.jpg" class="card-img-top" alt="World Map">
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
                    <img src="https://miro.medium.com/v2/resize:fit:960/1*UTw_shVIFnBkuS5ngndXvw.jpeg" class="card-img-top" alt="IP Geolocation">
                    <div class="card-body">
                        <h5 class="card-title">Regional IP API</h5>
                        <p class="card-text">Access detailed information about IP addresses, including geolocation data, and the absolute location of the location with the input of a valid IP address.</p>
                        <a href="{{ route('products.show', ['code' => 'ip2region']) }}"
                                class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://bs-uploads.toptal.io/blackfish-uploads/components/blog_post_page/4087184/cover_image/retina_500x200/Untitled-4e06fb2b6d487f6550add2b1a007847b.png" class="card-img-top" alt="Area Codes">
                    <div class="card-body">
                        <h5 class="card-title">Cryptocurrency API</h5>
                        <p class="card-text">Get accurate and up-to-date data on any type of cryptocurrency and can be converted to most currencies.</p>
                        <a href="{{ route('products.show', ['code' => 'crypto']) }}"
                            class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
