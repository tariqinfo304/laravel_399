<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use Illuminate\Support\Facades\Http;
use App\Models\APISession;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        $res = ["status" => 200 , "data" => $data];
        return response()->json($res);
    }

    function api_call()
    {
        $response = Http::get('http://localhost/laravel_399/public/api/get_data');
       // dd($response);
        dd($response->body);
    }

    function login(Request $req)
    {
        $username = $req->input("username");
        $password = $req->input("password");


        if(empty($username) || empty($password))
        {
            return response()->json(["status" => "400" , "message" => "Username/Password is required"]);
        }


        $user = User::where("username",$username)->first();


        if(empty($user))
        {
            return response()->json(["status" => "400" , "message" => "Username/Password is invalid"]);
        }


        if(Hash::check($password,$user->password))
        {
            $token = Hash::make($user->username. "  " . $user->name . "  " . $user->created_at);

            $api = new APISession();
            $api->user_id = $user->id;
            $api->token = $token;
            $api->expiry_date = date("Y-m-d H:i:s", strtotime('+2 hours'));
            $api->save();


            return response()->json(["status" => 200 , "data" =>
                [
                    "username" => $user->username,
                    "name" => $user->name,
                    "token" => $api->token,
                    "expiry_date" => $api->expiry_date
                ]

            ]);

        }
        else
        {
            return response()->json(["status" => "400" , "message" => "Username/Password is invalid"]); 
        }
    }
}
