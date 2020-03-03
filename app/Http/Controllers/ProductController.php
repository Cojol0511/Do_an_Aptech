<?php

namespace App\Http\Controllers;


use App\Product;
use App\Image;
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
        $products = Product::all();
        $comments = Comment::all();
  
        return view(
            'layouts.products.indexProduct',
            [
                'products' => $products,
                'comments' => $comments
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
        $request ->validate([
            'name' => 'required',
            'size' => 'required',
            'detail'=> 'required',
        ],[
            'name.required' => 'Bạn phải nhập tên sản phẩm',
            'size.reuqired' => 'Bạn chưa chọn size cho sản phẩm',
            'detail.required'=> 'Detail là bắt buộc',
        ]);

        if( $request->hasFile('yourfile') == 0 )
        {
            return redirect()->route('products.create');
        }
        else
        {
            $product = new Product;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->detail_product = $request->detail;
            $product->size = $request->size;
            $product->user_id = $request->user_id;
            //  $product->type = $request->type;
            $product->save();
            //lấy tên file gốc cộng thêm thời gian đang
            $yourfile = $request->yourfile;
            foreach ($yourfile as $image) {

                $filename = date('YmdHis') . "-" . $image->getClientOriginalName();

                //lưu file 
                $image->move('image', $filename);
                Image::insert([
                        'name_image' => $filename,
                        'product_id' => $product->id
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
    public function show($slug)
    {     
        $product = Product::whereSlug($slug)->first();
      
        return view('layouts.products.detailproduct',
         [
            'product' => $product
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
        
    }


}
