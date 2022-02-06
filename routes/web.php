<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('', function () {
//     return "";
// });

// Route::get('/', 'App\Http\Controllers\HomeController@home');


Route::get('/', [HomeController::class, 'home']);
Route::get('about', [HomeController::class,'about']);
Route::get('service', [HomeController::class,'service']);
Route::get('contact', [HomeController::class,'contact']);
Route::get('login', [HomeController::class,'login']);

Route::get('employees',[HomeController::class,'employees']);
Route::get('employeelist',[HomeController::class,'employeelist']);
