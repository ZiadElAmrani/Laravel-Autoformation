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

Route::get('posts/{post}', function ($slug) {
    //find a post by its slug and pass it to the view called "post
    $post = Post::find($slug);
    return view('post', [
        'post' => $post
    ]);
})->where('post', '[A-z_\-]+');
// ->wherealpha('post');
