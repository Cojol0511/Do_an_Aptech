<?php

namespace App\Http\Controllers;

use App\Post;
use App\Product;
use App\image;
use App\Comment;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $products = Product::all();
        $comments = Comment::all();
        $image = image::all();
          $posts = Post::all();
          $products = Product::get();
            $images = image::all();
         return view('layouts.products.indexProduct', 
         [
            'posts' => $posts,
            'products' =>$products ,
            'images' => $image,
            'comments' =>$comments
        ]    
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('layouts.products.CreateProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        if($request->hasFile('yourfile') == 0 || 
            empty($request->name)            || 
            empty($request->detail)          || 
            empty($request->price)//||
            //empty($request->type)
             )
            {
                 return redirect()->route('products.create');
            }
        else
           {  
              $product = new Product;       
              $product->name = $request->name;
              $product->price = $request->price;
              $product->detail = $request->detail;
              $product->size = $request->size;
            //  $product->type = $request->type;
               $product->save(); 
              //lấy tên file gốc cộng thêm thời gian đang
               $yourfile = $request -> yourfile;
               foreach ($yourfile as $image) 
               {
                    
                $filename = date('YmdHis')."-" . $image->getClientOriginalName();    
               
                 //lưu file 
                  $image->move('image',$filename);          
                image::insert
                ([
                    'image' => $filename,
                    'product_id' => $product ->id
                ]);
                }
                return redirect()->route('products.index');
           }
              
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product_images = Product::find($id) ->image ;
        
        $product = Product::find($id);
         $images = image::all();
         //$comments = Comment::where('product_id', $id)->get();
         $comments = Comment::all();

       return view('layouts.products.DetailProduct',[
            'product' =>$product,
            'image' => $images,
            'comments' =>$comments

       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
