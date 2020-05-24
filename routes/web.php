<?php


use App\Product;
use App\Image;

Route::get('/', 'ProductController@index');

Auth::routes();




Route::resource('users', 'UserController');

Route::resource('products', 'ProductController');

Route::resource('comments', 'CommentController');

Route::get('/type','ProductController@type');


Route::get('/typedb','ProductController@typedb');

Route::get('/quanlysanpham','UserController@quanlysanpham')->name('quanlysanpham');