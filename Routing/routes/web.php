<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

// Basic Route
Route::get('/index', function () {
    return 'Hello World';
});

//Route whith parameters
Route::get('/param/{param1}', function($id){
    return "kda kda: $id";
});
Route::get('/param/{param1}/{param2}', function($id,$name){
    return "kda kda: $id, $name";
});

// route with view

Route::get('/request', function () {
    return view('request');
});
// route with request

Route::any('/user', function (Request $request) {
    $name = $request->input("name");
    return $name;
});

