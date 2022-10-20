<?php

use App\Http\Controllers\SingleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;

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



//Routes
Route::get('/', function () {
    return view('welcome');
});



//SingleController
Route::get('/single', SingleController::class)->name="single";
