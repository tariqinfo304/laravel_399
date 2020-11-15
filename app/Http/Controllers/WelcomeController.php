<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index()
    {
    	echo "Welcome to First Lecture of Controller";
    }

    function get_student_record($id,$name,$age=NULL)
    {
    	echo "Student : " . $id . " : " . $name. "  : " . $age;
    }
}
