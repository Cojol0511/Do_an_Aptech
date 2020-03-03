<?php


use App\Product;
use App\Image;
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
        $products = Product::all();
        $image = Image::all();
         return view
         ('layouts.products.indexProduct', 
             [
                   'products' =>$products ,
                   'images' => $image
               ]    
        );
       });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('users', 'UserController');

Route::resource('products', 'ProductController');

Route::resource('comments', 'CommentController');


Route::get('/profile',function(){
       $products = Product::get()->where('user_id',Auth::user()->id);
       return view('layouts.user.profile',
       [
              'products' => $products
       ]);
})->name('profile');


Route::get('/account',function(){
	return view('layouts.user.account');
}) ->name('account');



Route::get('/search',function(){
       $products = Product::get()->where('name',$_GET['search']);
       dd($products);
});




