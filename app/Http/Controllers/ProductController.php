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
        $country = Http::get($countryAPIUrl);
        $data = json_decode($country, true);
        $pretty_json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        return view('country', compact('pretty_json'));
    }
    public function showRegion($ip = null){
        $IpApiUrl = "http://127.0.0.1:8001/region/$ip";
        $regionIP = Http::get($IpApiUrl);
        $data = json_decode($regionIP, true);
        $pretty_json = json_encode($data,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        return view('ip', compact('pretty_json'));
    }
    public function showAreaCode($ac = null){
        $areaUrl = "http://127.0.0.1:8002/areacode/$ac";
        $areacode = Http::get($areaUrl);
        $data = json_decode($areacode, true);
        $pretty_json = json_encode($data,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}
