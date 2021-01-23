<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Customer;

class QueryBuilderController extends Controller
{
    
    function index()
    {
    	/*
    	$p = DB::table("products")->get();
    	$p = DB::table("products")->where("price","123")->get();
		*/

    	/*
    	//one-to-one
		$p = DB::table("employees as e")
			->join("emp_info as i","e.id_id","=","i.emp_id")
			->select("e.name","i.street")
			->get();
		*/

		//one-to-many

			/*
		$p = DB::table("products as p")
			->join("product_images as i","p.id","=","i.product_id")
			
			->where("p.id",4)
			->get();
	*/

			//many-tomany

			/*
		$p = DB::table("products as p")
			->join("orders as o","p.id","=","o.product_id")
			->join("customers as c","c.id","=","o.customer_id")

			//->where("c.id",1)
			->get();


    	dd($p);
    	*/


    	//insert
    	/*
    	DB::table('customers')->insert([
		    'name' => 'abc',
		    'created_at' => "2021-01-19",
		    'updated_at' => "2021-01-19" 
		]);
		*/

		/*
		//update
		DB::table('customers')
              ->where('id', 3)
              ->update(['name' => "abc updated"]);
        */

              //delete
        //DB::table('customers')->where('id',3)->delete();

              //select

        //dd(DB::table("customers")->where("id",1)->get());
    }	


    //pagination
    function db_page()
    {
    	//$list = DB::table("customers")->paginate(5);
    	//$list = DB::table("customers")->simplePaginate(5);

    	$list = Customer::paginate(5);
    	dd($list);
    }


}
