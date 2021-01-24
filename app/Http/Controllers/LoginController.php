<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    
    function login()
    {
    	return view("website.login");
    }


    function create_user()
    {

    	//$hash = Hash::make("admin");

    	//echo $hash;

    	/*
    	if (Hash::check('admin', $hash)) {
		   	echo "correct";
		}
		else
		{
			echo "not-correct";
		}*/

	//	$crp = Crypt::encryptString("admin");

		//Crypt::decryptString($crp)
	//	echo $crp;	


    	//die();


    	return view("website.create_user");
    }

    function add_user(Request $req)
    {
    	$validated = $req->validate([
        	'username' => 'required|min:5',
        	'password' => 'required|min:5',
        	'name'		=> "required"
    	]);


    	$user = new User();
    	$user->name = $req->name;
    	$user->username = $req->username;
    	$user->password  = Hash::make($req->password);
    	$user->save();

    	return redirect("login");
    }

    function do_login(Request $req)
    {
    	//dd($req->all());
    	//validation//
    	$validated = $req->validate([
        	'username' => 'required|min:5',
        	'password' => 'required|min:5',
    	]);


    	$user = User::where(
    			[
    				"username" => $req->input("username")
    			])->first();

    	if(!empty($user))
    	{
    		
    		if(!empty($user->password) && Hash::check($req->password,$user->password))
    		{
    			session(['username' => $user->username]);
    			return redirect("website");
    		}
    	}

    	return back();
    }

    function logout(Request $req)
    {
    	$req->session()->forget('username');
		$req->session()->flush();

		return redirect("login");
    }
}	
