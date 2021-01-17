<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Models\EmplyeeInfo;

use App\Models\Product;
use App\Models\Customer;

class ORMRelationController extends Controller
{
    function index()
    {
    	//one-to-one
    	/*
    	$emp = new Employee();

    	$emp = $emp->find(1);
    	
    	dd($emp->info);
    	*/

    	/*

    	//One-to-one inverse
    	$emp_info = new EmplyeeInfo();
    	$emp_info = $emp_info->find(1);

    	//dd($emp_info);

    	dd($emp_info->emp);

    	*/

    	//One-to-Many

    	/*
    	$p =  new Product();

    	$p = $p->find(3);

    	dd($p->images);
    	*/


    	//Many-to-Many

    	/*
    	$p = new Product();
    	$p = $p->find(3);
    	dd($p->customers_list);
    	*/

    	/*
    	$c = new Customer();
    	$c = $c->find(1);
    	dd($c->products_list);
		*/
		
    }
}
