<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use Illuminate\Support\Facades\Http;

class WebsiteController extends Controller
{
    function home()
    {
    	return view("website/home");
    }

    function product_detail()
    {
    	return view("website/product");
    }

    function add_product()
    {
    	return view("website/add_product");
    }

    function get_data()
    {
        $data = Product::all();
        return response()->json($data);
    }

    function api_call()
    {
        $response = Http::get('http://localhost/laravel_399/public/api/get_data');
       
       // dd($response);

        dd($response->body);
    }
}
