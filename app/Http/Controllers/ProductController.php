<?php
// ExampleController.php

namespace App\Http\Controllers;

use App\Models\Product; // Adjust based on your model namespace
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $apis = Product::all(); // Fetch all APIs from the database

        return view('welcome', compact('apis'));
    }
    public function showCountry($id){
        $countryAPIUrl = "'http://127.0.0.1:8001/json/'.$id";
        $response = Country::get($countryAPIUrl);
        return view('welcome', [
            'country' => $response->en,
            'code' => $response->code,
            'tw' => $response->tw,
            'locale' => $response->locale,
            'zh' => $response->zh,
            'lat' => $response->lat,
            'lng' => $response->lng,
            'emoji' => $response->emoji,
        ]);
        

    }
}
