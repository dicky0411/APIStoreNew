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
                        <a href="{{ route('products.show', ['code' => 'calendar']) }}"class="btn btn-primary">Enter</a>
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
        </div>
        <div class="row">
            <div class="col">
            
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
        <div class="row">
            <div class="col">
            
                <div class="card" style="width: 18rem;">
                    <img src="images/shhhh.jpg" class="card-img-top" alt="shhhh">
                    <div class="card-body">
                        <h5 class="card-title">Profanity Eraser API</h5>
                        <ter class="card-text">This API is a simple, it has the ability to filter out profanities in a large chunk of text, it returns each profanity in ****, it'll produce a safe environment</p>
                        
                        <a href="{{ route('products.show', ['code' => 'profanity-eraser']) }}"
                            class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col">
           
                <div class="card" style="width: 18rem;">
                    <img src="images/gender.jpeg" class="card-img-top" alt="gender">
                    <div class="card-body">
                        <h5 class="card-title">Gender Probability API</h5>
                        <ter class="card-text">This API takes a first name or a full name and calculates the Probability of the name being that gender</p>
                        
                        <a href="{{ route('products.show', ['code' => 'gender']) }}"
                            class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col">
            
                <div class="card" style="width: 18rem;">
                    <img src="images/dictionary.jpeg" class="card-img-top" alt="dict">
                    <div class="card-body">
                        <h5 class="card-title">Dictionary API</h5>
                        <ter class="card-text">This API returns every definition of a word listed from 1 to n, works for every english word</p>
                        
                        <a href="{{ route('products.show', ['code' => 'dictionary']) }}"
                            class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
            
                <div class="card" style="width: 18rem;">
                    <img src="images/fruits.jpeg" class="card-img-top" alt="shhhh">
                    <div class="card-body">
                        <h5 class="card-title">Fruit Nutrition API</h5>
                        <ter class="card-text">This API outputs all the macro and micro nutrition data of all fruits, from domestic to tropical fruits, data displayed includes calories, proteins and more</p>
                        
                        <a href="{{ route('products.show', ['code' => 'fruits']) }}"
                            class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col">
            
                <div class="card" style="width: 18rem;">
                    <img src="images/advancedIP.jpeg" class="card-img-top" alt="Advanced IP">
                    <div class="card-body">
                        <h5 class="card-title">Advanced IP API</h5>
                        <ter class="card-text">This API outputs the Longitude and Latitude of the IP entered, and also replies with the area code for the user's convenience</p>
                        
                        <a href="{{ route('products.show', ['code' => 'advanced-ip']) }}"
                            class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col">
            
                <div class="card" style="width: 18rem;">
                    <img src="images/covid.jpeg" class="card-img-top" alt="covid">
                    <div class="card-body">
                        <h5 class="card-title">COVID Cases API</h5>
                        <ter class="card-text">This API outputs the total cases at xxxx date at xxx state in the United States in 2020, it showcases how fast covid spreads</p>
                        
                        <a href="{{ route('products.show', ['code' => 'covid']) }}"
                            class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
        </div>
     </div>
   
@endsection
