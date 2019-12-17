<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Product;
use App\image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $products = Product::all();
       $image = image::all();
         return view('layouts.posts.index', 
         [
            'posts' => $posts,
            'products' =>$products ,
            'images' => $image
        ]    
        );
    }
}
