<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index()
    {
        $apis = Product::all();

        return view('welcome', compact('apis'));
    }

    public function showCountry($id = null)
    {
        $countryAPIUrl = "http://127.0.0.1:8000/json/$id";
        $response = Http::get($countryAPIUrl);
        $data = json_decode($response, true);
        $pretty_json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        return view('country', compact('pretty_json'));
    }
}
