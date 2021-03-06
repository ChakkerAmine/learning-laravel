<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about',function (){
    return "About Page"; 
});

Route::get('/contact',function (){
    return "Contact Page"; 
});

Route::get('/post/{id}',function ($id){
    return "this is post number " . $id; 
});

Route::get('admin/posts/example',array('as'=>'admin.home',function(){
    $url = route('admin.home');
    return "this is url of : ".$url;
}));