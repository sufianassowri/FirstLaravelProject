<?php

use App\Http\Controllers\HomeController;
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
// here you are routing url to HomeController in particuler to HomeIndex function iside it
//inside that controller we are to display user for using view Function
//name of database table customer_data
	 
Route::get('/', [HomeController::class,'HomeIndex']);
Route::post('dataInsert',[HomeController::class,'DataInsert']);
