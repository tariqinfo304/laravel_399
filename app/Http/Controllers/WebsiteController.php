<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
