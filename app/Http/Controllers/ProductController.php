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
        // $product = Product::where('code', $code)->firstOrFail();

        if (in_array($code, ['currentIP','ip2region', 'calendar','crypto','Cur-Ex'])) {
            return view("product.show", compact('code'));
        }

        return abort(404);
    }

   
    
   
}
