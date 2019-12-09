<?php

namespace App\Http\Controllers;

use App\Post;
use App\Product;
use App\image;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        $products = Product::all();
        $image = image::all();
         return view('layouts.home.index', 
         [
            'posts' => $posts,
            'products' =>$products ,
            'images' => $image
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
        return view('layouts.posts.CreatePost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {dd($request->all());
        
        if($request->hasFile('yourfile') == 0 || 
            empty($request->title)            || 
            empty($request->description)      || 
            empty($request->content))
            {
                 return redirect()->route('posts.create');
            }
        else
           {  
              $post = new Post;       
              $post->title = $request->title;
              $post->description = $request->description;
              $post->content = $request->content;
               $post->save(); 
              //lấy tên file gốc cộng thêm thời gian đang
               $image = $request->yourfile;
                $filename = date('YmdHis')."-" . $image->getClientOriginalName();
              //lưu file 
              $image->move('image',$filename);          
                image::insert
                ([
                    'image' => $filename,
                    'post_id' => $post ->id
                ]);
                return redirect()->route('posts.index');
           }
              
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $posts = Post::find($id);
  
        return view('layouts.posts.detailpost', ['posts' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view(
            'posts.edit',
            ['post' => $post]
        );   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect()->route('posts.index');
    }
    public function detailpost()
    {

    }
}