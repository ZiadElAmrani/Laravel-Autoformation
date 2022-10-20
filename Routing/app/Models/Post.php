<?php


namespace App\Models;

class Post{
    public static function find($slug){
    
        $path = (__DIR__ . "/../resources/posts/{$slug}.html");
    if(!file_exists($path)){
        //abort(4O4);
        ddd('file does not exist');
        //dd('file does not exist');
        //return redirect('/posts');
    }

    return cache()->remember("posts.{slug}", 5  /* for minute we use : now()->addMinutes||addHours(minutes) */, 
    fn() => file_get_contents($path));
        //var_dump('file_get_contents');
        
    }

}








