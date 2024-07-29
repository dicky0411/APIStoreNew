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
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Map_of_the_telephone_area_codes_of_the_People%27s_Republic_of_China.png/450px-Map_of_the_telephone_area_codes_of_the_People%27s_Republic_of_China.png" class="card-img-top" alt="Area Codes">
                    <div class="card-body">
                        <h5 class="card-title">Area Code API</h5>
                        <p class="card-text">Get accurate and up-to-date data on area codes after a 6 digit area code is entered, allowing you to identify the geographical regions in China corresponding to the area code.</p>
                        <a href="{{ route('products.show', ['code' => 'area-code']) }}"
                            class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
