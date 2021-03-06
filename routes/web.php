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

Route::get('/', function () { echo "First Laravel Class"; });


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

//assigmnent like email,CNIC,RollNo. of your Univerysity,DOB



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
    echo "Profile Name";
})->name('profile');


Route::get("profile_url",function(){


	//return redirect()->route('profile');

	//$url = route('profile');
//	echo $url;
	echo URL("user/profile/data");
});		



//////////////////////////
/// Controller lect # 10
/////////////////////////



use App\Http\Controllers\HelloController;


Route::get("hello",[HelloController::class,"hello"]);
Route::get("param/{id}/{name}",
		[HelloController::class,"hello_param"]);




Route::get("req",[HelloController::class,"req"]);




use App\Http\Controllers\WelcomeController;
Route::get('/start_controller',[WelcomeController::class,"index"]);

//with param 
Route::get('/get_student/{id}/{name}/{age?}',[WelcomeController::class,"get_student_record"]);



/////////////////////////
////////Single Action Controllers //
/////////////////////


use App\Http\Controllers\HomeCallController;
Route::get("/call/{name?}",HomeCallController::class);

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

/*
Route::resources([
	"student" => StudentController::class,
	"teacher" => TeacherController::class
]);

*/


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

/*
Route::resource('student', StudentController::class)->names([
    'create' => 'student.build'
]);
*/



Route::resource('student.comments', StudentController::class)->parameters([
    'student' => 'admin_user'
]);



use App\Http\Controllers\RequestController;

Route::get('req/{id}',[RequestController::class,"index"]);



Route::get('view',[RequestController::class,"send_data_to_view"]);


Route::get('blade_1',[RequestController::class,"view_render"]);


//Eloquent Model
Route::get('model',[StudentController::class,"index"]);


Route::get('adv_model',[StudentController::class,"adv_select"]);



Route::get('blade_layout',[RequestController::class,"layout"]);


Route::get("adv_blade",[RequestController::class,"adv_blade"]);


Route::get('template_layout',[RequestController::class,"layout_template"]);

//Integrated HTML Template into Laravel Blade Template
use App\Http\Controllers\WebsiteController;


//Route::get('website',[WebsiteController::class,"home"])->middleware('test');
			//->middleware(['test:student']);
			//->middleware(['test','evs_group']);

//Route::get('product',[WebsiteController::class,"product_detail"]);
//Route::get('add_product',[WebsiteController::class,"add_product"]);

use App\Http\Controllers\ProductController;

/*
Route::middleware(["evs_group"])->group(function () {

	Route::get("product/{id}/delete",[ProductController::class,"delete_preview"]);
	
	Route::resource("product",ProductController::class);
		//->withoutMiddleware("evs_group");
});
*/


use App\Http\Controllers\ORMRelationController;

Route::get("orm_advance",[ORMRelationController::class,"index"]);


use App\Http\Controllers\QueryBuilderController;
Route::get("db",[QueryBuilderController::class,"index"]);

Route::get("db_page",[QueryBuilderController::class,"db_page"]);


//Login Middleware

use App\Http\Controllers\LoginController;

Route::get("login",[LoginController::class,"login"]);
Route::post("login",[LoginController::class,"do_login"]);
Route::get("register",[LoginController::class,"create_user"]);
Route::post("register",[LoginController::class,"add_user"]);

Route::middleware(["login"])->group(function(){

	Route::get('website',[WebsiteController::class,"home"]);
	Route::get("product/{id}/delete",[ProductController::class,"delete_preview"]);
	Route::resource("product",ProductController::class);
	Route::get("logout",[LoginController::class,"logout"]);
});





//API with AJAX

Route::get('api_call',[WebsiteController::class,"api_call"]);






