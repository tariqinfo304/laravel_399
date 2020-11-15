<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    function __invoke($param=NULL)
    {
    	//echo "called : " . $param;

    	if(!empty($param) && method_exists($this, $param))
    	{
    		$this->{$param}();
    	}
    }


    function show()
    {
    	echo "show";
    }
}
