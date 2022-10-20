<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function show(){
        $name = "hello";
        return view('list',compact('name'));
    }
}
