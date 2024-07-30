@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="images/calendar1.webp" class="card-img-top" alt="Calendar API">
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
                    <img src="images/ipRegion.jpg" class="card-img-top" alt="IP Geolocation">
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
                    <img src="images/crypto1.png" class="card-img-top" alt="Crypto">
                    <div class="card-body">
                        <h5 class="card-title">Cryptocurrency API</h5>
                        <p class="card-text">Get accurate and up-to-date data on any type of cryptocurrency and can be converted to most currencies.</p>
                        <br><br>
                    
                        <a href="{{ route('products.show', ['code' => 'crypto']) }}"
                            class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
            
            <div class="col">
            <br><br>
                <div class="card" style="width: 18rem;">
                    <img src="images/currentIP.jpeg" class="card-img-top" alt="currentIP">
                    <div class="card-body">
                        <h5 class="card-title">Current IP Address API</h5>
                        <p class="card-text">This is a simple API that returns your current IP Address</p>
                        
                        <a href="{{ route('products.show', ['code' => 'currentIP']) }}"
                            class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col">
            <br><br>
                <div class="card" style="width: 18rem;">
                    <img src="images/currencyexchange.jpeg" class="card-img-top" alt="curex">
                    <div class="card-body">
                        <h5 class="card-title">Currency Exchange API</h5>
                        <p class="card-text">This API converts any number of any currency to its equivalent in USD, it'll ask you for the currency type and the amount and it'll calculate for you</p>
                        
                        <a href="{{ route('products.show', ['code' => 'Cur-Ex']) }}"
                            class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col">
            <br><br>
                <div class="card" style="width: 18rem;">
                    <img src="images/zipcode.jpeg" class="card-img-top" alt="zip">
                    <div class="card-body">
                        <h5 class="card-title">Zip Code API</h5>
                        <p class="card-text">This API takes an 5 digit input as the zip code for united states, and it'll return the location of the zip code, including the local and the state that its in</p>
                        
                        <a href="{{ route('products.show', ['code' => 'zip-code']) }}"
                            class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
