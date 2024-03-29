<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputerController;
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

Route::get('/',[StaticController::class,"index"] );
Route::get('/about',[StaticController::class,"about"]);

// Route::get('/computers',[ComputerController::class],"index");

// Route::get('/computer',[ComputerController::class,"index"] );


Route::resource('computers', ComputerController::class);

Route::get('/contact',[ComputerController::class,"contact"]);
// Route::resource('computers',[ComputerController::class]);

Route::get('post/{id}',[PostsController::class,"show_post"]);

// Route::get('/about',function (){
//     return "About Page"; 
// });

// Route::get('/contact',function (){
//     return "Contact Page"; 
// });

// Route::get('/post/{id}',function ($id){
//     return "this is post number " . $id; 
// });

// Route::get('admin/posts/example',array('as'=>'admin.home',function(){
//     $url = route('admin.home');
//     return "this is url of : ".$url;
// })); 

// Route::get('/post',[PostsController::class, 'index']); 
// Route::resource('posts','PostsController');


// Route::get('/store',function(){
//     $filter = request('style');
//     if(!isset($filter)){
//         return 'there is no category with that name';
//     }else{
//         return 'this page is viewing  <span style="color:red" >'.strip_tags($filter).'</span>';
//     }
    
// });



Route::get('/store/{category?}/{item?}',function($category=null,$item=null){
    if(isset($category)){
        if(isset($item)){
            return "<h1>{$item}<h1>";
        }else{
            return "<h1>{$category}<h1>";
        }
    }else{
        return "All Products";
    }
});


