<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\MyController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\PromotionController;

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

Route::get('/', function () {
    return view('welcome');
});


//Controlller route
Route::get("/test",[MyController::class,"show"]);

//SingleController

Route::get('/single', SingleController::class);

// Controller route with *  functions
Route::resource('/promotions', PromotionController::class);