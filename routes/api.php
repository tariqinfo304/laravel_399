<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

use App\Http\Controllers\WebsiteController;


Route::get('login',[WebsiteController::class,"login"]);

Route::middleware(["api_session"])->group(function () {

	Route::get('get_data',[WebsiteController::class,"get_data"]);

});


