<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello()
    {
    	echo "hello";
    }

    public function hello_param(Request $req,$id,$name)
    {
    	echo $id;
    	echo "<br/>";
    	echo $name;
    }

    function req(Request $req)
    {
    	//dd($req->all());
    	//dd($req->input());

    	//echo $req->input("name");

    	echo $req->username;
    	
    	//dd($req);
    }
}
