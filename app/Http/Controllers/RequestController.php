<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    function index(Request $req,$user_id)
    {
    	//echo $user_id;
    	//dd($req);
    	//dd($req->all());
    	//echo $req->input("name");

    	//echo $req->name;

    	//echo $req->path();

    	//echo $req->url();
    	//echo $req->fullUrl();

    	/*$method = $req->method();
    	echo $method;

			if ($req->isMethod('get')) {
			    echo "YEs";
			}*/

		//echo $req->input("username","dummy");
		$req->whenHas('name', function ($input) {
    		echo $input;
		});
    }

    function send_data_to_view()
    {
    	$name="tariq";

    	//return view("first",["name_full" => $name]);

    	//return view("first")->with(["name_full"=>$name]);//->with("name","evs");


    	$res = view("first")->with(["name_full"=>$name])->render();

    	echo $res;
    }
}
