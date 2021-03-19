<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public funtion blog(){
        return view('blog');
    }

    public function contact(){
        return view('contact');
    }

    public function element(){
        return view('element');
    }
    public function feature(){
        return view('feature');
    }
    public function index(){
        return view('index');
    }
    public function price(){
        return view('price');
    }

    public function single(){
        return view('single-blog');
    }
}
