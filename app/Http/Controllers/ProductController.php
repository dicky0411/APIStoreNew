<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        // TODO: pagination

        return view('product.index', compact('products'));
    }

    public function show($code)
    {
        // TODO: validation: what if $code is too short or too long

        $product = Product::where('code', $code)->firstOrFail();

        return view("product.show", compact('product'));
    }

    public function showCountryJSON($id = null)
    {
        $countryAPIUrl = "http://127.0.0.1:8000/$id";
        $country       = Http::get($countryAPIUrl);
        $data          = json_decode($country, true);
        if (is_null($data)) {
            $pretty_json = json_encode(['error' => 'Country code not found'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            return view('country', compact('pretty_json'));
        } else {
            $pretty_json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            return view('country', compact('pretty_json'));
        }

    }
    public function showRegion($ip = null)
    {
        $IpApiUrl = "http://127.0.0.1:8001/$ip";
        $regionIP = Http::get($IpApiUrl);
        $data     = json_decode($regionIP, true);
        if (is_null($data)) {
            $pretty_json = json_encode(['error' => 'RegionIP not found'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            return view('ip', compact('pretty_json'));
        } else {
            $pretty_json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            return view('ip', compact('pretty_json'));
        }
    }
    public function showAreaCode($ac = null)
    {
        $areaUrl  = "http://127.0.0.1:8002/$ac";
        $areacode = Http::get($areaUrl);
        $data     = json_decode($areacode, true);
        if (is_null($data)) {
            $pretty_json = json_encode(['error' => 'Area Code not found'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            return view('areacode', compact('pretty_json'));
        } else {
            $pretty_json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            return view('areacode', compact('pretty_json'));
        }
    }
}
