<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//////////////////////////
// routes LEcture # 12 //
//////////////////////////

Route::get('/welcome', function () { echo "Welcome"; });

/*
Route::get('/show_user', function () { echo "EVS Students"; });

Route::match(['get','put', 'post'], '/multi', function () {
    echo "multi";	
});


Route::any('/any',function(){
	echo "It will call on any HTTP methods";
});


//Route::redirect('/any', 'multi');

//Route::permanentRedirect('/any', 'multi');


/////////////////////////////
// Route Parameters //////////
/////////////////////////////

Route::get("/get_std/{id}",function($id_std){

	echo "Students REcord : ".$id_std;
});

Route::get("/get_std_record/{id}/{name}",function($id_std,$name){

	echo "Students Record : ".$id_std ."  & Name : " . $name;
});

//Optional Param //


Route::get("/get_record/{id?}",function($id_std=NULL){

	echo "Students REcord : ".$id_std;
});


Route::get("/get_project/{id}/admin/{name}",function($id_std,$name){

	echo "Project Record : ".$id_std ."  & Name : " . $name;
});


////////////////////////
//Regular Expression Constraints
///////////////////////

Route::get("get/{id}/{name}",function($id,$name){
	
	echo $id . " Name " . $name;

})->where(["id" => "[0-9]{4}" , "name" => "[a-z]{2}[A-Z]+"]);



//Global validation of param in App/Provider/RouteServiceProvider
Route::get("/global/{g_id}",function($g_id){

	echo $g_id;

});


Route::get("/search/{param}",function($param){

		echo $param;
})->where("param",".*");

////////////////////
// Named Routes ///
////////////////////


Route::get('user/profile/data', function () {
    echo "Profile NAme";
})->name('profile');


Route::get("profile_url",function(){


	return redirect()->route('profile');

	//$url = route('profile');
	//echo $url;
});		

*/

//////////////////////////
/// Controller lect # 13
/////////////////////////


use App\Http\Controllers\WelcomeController;
Route::get('/start_controller',[WelcomeController::class,"index"]);

//with param 
Route::get('/get_student/{id}/{name}/{age?}',[WelcomeController::class,"get_student_record"]);



/////////////////////////
////////Single Action Controllers //
/////////////////////

use App\Http\Controllers\SingleController;
Route::get("/single/{name?}",SingleController::class);


/////////////////////////////////
////////// Resource Controllers //
////////////////////////////////////

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

/*
Route::resource("student",StudentController::class);
Route::resource("teacher",TeacherController::class);
*/

Route::resources([
	"student" => StudentController::class,
	"teacher" => TeacherController::class
]);




///////
///Partial Resource Routes
///////////

/*

Route::resource('student', StudentController::class)->only([
    'index', 'show'
]);

Route::resource('student', StudentController::class)->except([
    'create', 'store', 'update', 'destroy'
]);


*/


//////////////////
//Naming Resource Routes
///////////////////

Route::resource('student', StudentController::class)->names([
    'create' => 'student.build'
]);

