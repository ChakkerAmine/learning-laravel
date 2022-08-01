<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){
        // return "home page";
        return view('welcome'); 
    }
    public function about(){
        return view('about');
    }
}
