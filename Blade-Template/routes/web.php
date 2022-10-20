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


//POSTS || ddd & dd & abort || where && wherealpha (constraints)||
Route::get('/posts', function () {
    return view('posts');
});

Route::get('posts/{post}', function($slug){
    //find a post by its slug and pass it to the view called "post
    $post = Post::find($slug);
    return view('post', [
        'post'=>$post
    ]);
    
    
    
})->where('post','[A-z_\-]+');
// ->wherealpha('post');


//Request
Route::get('/request', function(){
    return view('request');
});
Route::any('/user', function(Request $request){
    $name=$request->input("name");
    return $name;
});



//SingleController
Route::get('/single', SingleController::class)->name="single";



// DashBoard //
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('/blade',function(){
    return view('blade');
});