<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FanigController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    public function blog()
    {
        return view('blog/index'); 
    }

}
