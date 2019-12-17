<?php

use App\Post;
use App\Product;
use App\image;
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
	  $posts = Post::all();
        $products = Product::all();
        $image = image::all();
         return view('layouts.products.indexProduct', 
         [
            'posts' => $posts,
            'products' =>$products ,
            'images' => $image
        ]    
        );
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('users', 'UserController');

Route::resource('products', 'ProductController');

Route::resource('posts', 'PostController');

Route::resource('comments', 'CommentController');


Route::get('/profile',function(){
	return view('layouts.user.profile');
})->name('profile');

Route::get('/account',function(){
	return view('layouts.user.account');
}) ->name('account');

Route::resource('posts', 'PostController');   
route::get('/sale',function(){
    return view('sale');
});
route::get('/button',function(){
    return view('button');
});
Route::get('/detail',function(){
       return view('layouts.posts.index');  
});
