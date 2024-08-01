<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    
    
    public function index() {
        $products = [
            [
                'image' => 'calendar1.webp',
                'title' => 'Calendar API',
                'description' => 'Retrieve comprehensive data on holidays across the United States. With the input of a month and a date, the API will return accurate details about the holiday on that date.',
                'code' => 'calendar'
            ],
            [
                'image' => 'ipRegion.jpg',
                'title' => 'Regional IP API',
                'description' => 'Access detailed information about IP addresses, including geolocation data, and the absolute location with the input of a valid IP address.',
                'code' => 'ip2region'
            ],
            [
                'image' => 'crypto1.png',
                'title' => 'Cryptocurrency API',
                'description' => 'Get accurate and up-to-date data on any type of cryptocurrency and convert it to most currencies.',
                'code' => 'crypto'
            ],
            [
                'image' => 'currentIP.jpeg',
                'title' => 'Current IP Address API',
                'description' => 'This is a simple API that returns your current IP Address.',
                'code' => 'currentIP'
            ],
            [
                'image' => 'currencyexchange.jpeg',
                'title' => 'Currency Exchange API',
                'description' => 'This API converts any amount of any currency to its equivalent in USD. It will ask you for the currency type and the amount and it will calculate for you.',
                'code' => 'Cur-Ex'
            ],
            [
                'image' => 'zipcode.jpeg',
                'title' => 'Zip Code API',
                'description' => 'This API takes a 5-digit input as the zip code for the United States, and it will return the location of the zip code, including the locality and the state it is in.',
                'code' => 'zip-code'
            ],
            [
                'image' => 'shhhh.jpg',
                'title' => 'Profanity Eraser API',
                'description' => 'This API can filter out profanities in a large chunk of text, returning each profanity as **** to produce a safe environment.',
                'code' => 'profanity-eraser'
            ],
            [
                'image' => 'gender.jpeg',
                'title' => 'Gender Probability API',
                'description' => 'This API takes a first name or a full name and calculates the probability of the name being that gender.',
                'code' => 'gender'
            ],
            [
                'image' => 'dictionary.jpeg',
                'title' => 'Dictionary API',
                'description' => 'This API returns every definition of a word listed from 1 to n, and works for every English word.',
                'code' => 'dictionary'
            ],
            [
                'image' => 'fruits.jpeg',
                'title' => 'Fruit Nutrition API',
                'description' => 'This API outputs all the macro and micro nutrition data of all fruits, from domestic to tropical fruits. Data displayed includes calories, proteins, and more.',
                'code' => 'fruits'
            ],
            [
                'image' => 'advancedIP.jpeg',
                'title' => 'Advanced IP API',
                'description' => 'This API outputs the longitude and latitude of the IP entered, and also replies with the area code for the user\'s convenience.',
                'code' => 'advanced-ip'
            ],
            [
                'image' => 'covid.jpeg',
                'title' => 'COVID Cases API',
                'description' => 'This API outputs the total cases at a specific date in a specific state in the United States in 2020, showcasing how fast COVID spreads.',
                'code' => 'covid'
            ],
            [
                'image' => 'language.jpeg',
                'title' => 'Language Detector API',
                'description' => 'This API detects the input language type and returns a confidence factor on how much it thinks that its correct',
                'code' => 'languagedetector'
            ],
            [
                'image' => 'condenser.jpg',
                'title' => 'URL Condenser API',
                'description' => 'This API takes an unique URL and condenses to a brand new URL from users input',
                'code' => 'urlshortener'
            ],
            [
                'image' => 'airquality.jpeg',
                'title' => 'Air Quality API',
                'description' => 'This API takes in a city\'s name and return the air quality index of the day',
                'code' => 'air-quality'
            ],
            [
                'image' => 'weather.jpeg',
                'title' => 'Pollutants API',
                'description' => 'This API takes in a city\'s name and returns all the information on the amount of pollutants in the sky on the day of',
                'code' => 'air-pollutants'
            ],
            [
                'image' => 'currencyEx.jpeg',
                'title' => 'Currency Type API',
                'description' => 'This API returns the type of currency after the country is entered',
                'code' => 'currency'
            ],
            [
                'image' => 'country.jpeg',
                'title' => 'Country MetaData API',
                'description' => 'This API returns the meta data about the country of choice when entered by users',
                'code' => 'country'
            ],
            [
                'image' => 'marveldisney.jpg',
                'title' => 'Next Marvel Movie API',
                'description' => 'This API returns the date and the number of days until the next marvels movie and as well as the informations',
                'code' => 'marvel'
            ],
            [
                'image' => 'ageguesser.jpeg',
                'title' => 'Age Guesser API',
                'description' => 'This API uses existing database to estimate the age of a person based on a name input',
                'code' => 'age-guesser'
            ],
            [
                'image' => 'nationality.jpeg',
                'title' => 'Nationality Guesser API',
                'description' => 'This API uses existing database to estimate multiple possible nationality of a person based on a name input',
                'code' => 'nationality'
            ],
            [
                'image' => 'affirmation.jpeg',
                'title' => 'Affirmation Msg API',
                'description' => 'Feeling down? This API generates a quote to motivate you and brighten your day',
                'code' => 'affirmation'
            ],
            [
                'image' => 'sunrise.jpeg',
                'title' => 'Sunrise Sunset API',
                'description' => 'Shows the sunrise and sunset time for the location provided',
                'code' => 'sunrise'
            ],
            [
                'image' => 'colorpicker.gif',
                'title' => 'Color Code API',
                'description' => 'Transforms color from RGB to Hex, and HSL',
                'code' => 'colorpicker'
            ],
            [
                'image' => 'hello.jpeg',
                'title' => 'Hello API',
                'description' => 'This API translates hello and teaches you how to say hello in 50+ different languages',
                'code' => 'hello'
            ],
            [
                'image' => 'elevation.jpeg',
                'title' => 'Elevation API',
                'description' => 'This elevation API takes the input from a latitude and longitude and it returns the elevation of the absolute location',
                'code' => 'elevation'
            ],
            [
                'image' => 'lyrics.jpeg',
                'title' => 'Lyrics Getter API',
                'description' => 'This Lyrics API takes in an artist and the song title, if the song exists it\'ll output the song lyrics',
                'code' => 'lyrics'
            ],
            [
                'image' => 'kanye.webp',
                'title' => 'Kanye Quotes API',
                'description' => 'Famous artist kanye has out of pocket quotes usually, this API will randomly choose one to display to the user\'s humor',
                'code' => 'kanye'
            ],



        ];
    
        return view('product.index', compact('products'));
    }
    

    public function show($code)
    {
        // TODO: validation: what if $code is too short or too long
        // $product = Product::where('code', $code)->firstOrFail();
        
        if (in_array($code, ['currentIP',
                            'ip2region', 
                            'calendar',
                            'crypto',
                            'Cur-Ex',
                            'zip-code',
                            'profanity-eraser',
                            'dictionary',
                            'gender',
                            'fruits',
                            'advanced-ip',
                            'covid',
                            'languagedetector',
                            'urlshortener',
                            'air-quality',
                            'air-pollutants',
                            'currency',
                            'country',
                            'marvel',
                            'age-guesser',
                            'nationality',
                            'affirmation',
                            'sunrise',
                            'colorpicker',
                            'hello',
                            'elevation',
                            'lyrics',
                            'kanye'

                    ])) {
            return view("product.show", compact('code'));
        }

        return abort(404);
    }
}
