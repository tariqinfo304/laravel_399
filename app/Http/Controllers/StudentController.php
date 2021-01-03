<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Employee;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

       // $student = new Student();
        
       // dd($student);

       // dd(Student::all());

      //  dd($student->all());

        /*
        foreach (Student::all() as $flight) {
            echo $flight->name;
        }*/


        /*
        $emp = new Employee();
        //dd($emp->all());


        //insert

        $emp->name = "Hasseb";
        $emp->age = 21;
        $emp->salary = 123213213;

        $is_save = $emp->save();

        */

       // dd(Employee::all());

        //update //

        /*
        $emp = Employee::find(2);
        //dd($emp);
        $emp->name = "Haseeb Updated";
        $is_updated = $emp->save();
        dd($is_updated);
        */
        /*
        $emp = Employee::where("name","Haseeb Updated")->first();
        //dd($emp);
        $emp->name = "Haseeb";
        $is_updated = $emp->save();
        dd($is_updated);
        */

        //Delete//

        /*
        $emp = Employee::find(2);
        $is_deleted = $emp->delete();
        dd($is_deleted);
        */

    }


    function adv_select()
    {
        //$emp_list = Employee::where("age","12")->get();
       // $emp_list = Employee::where(["age"=>"12","name"=>"Arif"])->get();

        /*
        $emp_list = Employee::where(["age"=>"12"])
                        //->where(["name"=>"Arif"])
                        ->orderBy("name","ASC") //
                        ->select("name","age")
                        ->take(2)
                        ->skip(2)
                        ->get();

        dd($emp_list);
        */
        /*
        foreach ($emp_list as $emp) {
            
            echo $emp->name. "<br/>";
        }
        */

        //Refreshing Models

        /*
        $emp = Employee::find(1);
        
       // dd($emp);
        sleep(10);
       
        $emp = $emp->fresh();
        dd($emp);
        */

        //Chunking Results
        /*
        Employee::chunk(2, function ($emp_list_chunk_wise) {
            
            foreach ($emp_list_chunk_wise as $emp) {
                
                echo $emp->name. "<br/>";
            }

            echo "Next Two Records <br/>";
        });
        */
        //Cursors

        foreach (Employee::where("age",12)->cursor() as $emp) {
            echo $emp->name."<br/>";   
        }


        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
