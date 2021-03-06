<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
    		

            //echo $input;

		});


        echo $req->name;
    }

    function send_data_to_view()
    {
    	$name="tariq";

    	//return view("first",["name_full" => $name]);

        /*
    	return view("first")
                    ->with(["name_full"=>$name])
                    ->with("name","evs")
                    ->with("html_var","<button>Click Me</button>");

        */

        /*
        //save html in a variable 
    	$res = view("first")
                    ->with(["name_full"=>$name])
                    ->with("name","evs")
                    ->with("html_var","<button>Click Me</button>")->render();

    	echo $res;
        */

        //Nested View Directories



       // return view("admin.list")->with("show","hi");

      //  return view("admin.user.user_list")->with("user","hi");

        //Creating The First Available View

    //return View::first(['admin.user.list1', 'admin.list'])->with("show","hiii");

        //Determining If A View Exists
        /*
        if(View::exists("admin.list"))
        {
            echo "yes";
        }
        else
        {
            echo "no";
        }*/

        return view("first",["name_full"=>"evs","name"=>"asd","html_var"=>"asd"]);
    }


    function view_render()
    {
        $arr = [1,2,3,4,5];
        return view("blade_1",[
                "name" => "admin",
                "arr" => $arr, 
                "error_no" => 201,
                "desc" => "Data not Found!"
            ]);
    }


    function adv_blade()
    {
        return view("test_blade");
    }

    function layout(Request $req)
    {
        $msg = "404 Error page not found!";
        return view("layout.layout" , 
            ["componentName" => $req->input("c") ?? "ads-slider"])
        ->with("message",$msg);
    }


    function layout_component()
    {
        return view("component_layout" , [

                                    "title" => "Component Layout Title",
                                    "arr" => [1,2,3,4,5,6]]
                    );
    }


    function layout_template()
    {
        //return view("layout._layout");
        return view("child");
    }
}
