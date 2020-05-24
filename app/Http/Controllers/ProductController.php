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
            'type'=>'required'
        ],[
            'name.required' => 'Bạn phải nhập tên sản phẩm',
            'size.reuqired' => 'Bạn chưa chọn size cho sản phẩm',
            'detail.required'=> 'Detail là bắt buộc',
            'type.required'=> 'Type là bắt buộc'
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
            $product->type = $request->type;
            $product->user_id = $request->user_id;
        
            $product->save();
           
            $yourfile = $request->yourfile;
            foreach ($yourfile as $image) {
                
                //lấy tên file gốc cộng thêm thời gian đang
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
    public function edit($slug)
    {   
        $product = Product::whereSlug($slug)->first();
        return view('layouts.products.editProduct',
         [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$slug)
    {
        $product = Product::whereSlug($slug)->first();

        $request ->validate([
            'name' => 'required',
            'size' => 'required',
            'detail'=> 'required',
            'type'=>'required'
        ],[
            'name.required' => 'Bạn phải nhập tên sản phẩm',
            'size.reuqired' => 'Bạn chưa chọn size cho sản phẩm',
            'detail.required'=> 'Detail là bắt buộc',
            'type.required'=> 'Type là bắt buộc'
        ]);

        if( $request->hasFile('yourfile') == 0 )
        {
            dd("Bạn Chưa Chọn File, Vui Quay Lai Trang Trước z");
        }
        else
        {
            $product->name           = $request->name;
            $product->price          = $request->price;
            $product->detail_product = $request->detail;
            $product->size           = $request->size;
            $product->type           = $request->type;
            $product->user_id        = $request->user_id;
        
            $product->save();
           
            $yourfile = $request->yourfile;
            foreach ($yourfile as $image) {
                
                //lấy tên file gốc cộng thêm thời gian đang
                $filename = date('YmdHis') . "-" . $image->getClientOriginalName();

                //lưu file 
                $image->move('image', $filename);
                Image::insert([
                        'name_image' => $filename,
                        'product_id' => $product->id
                    ]);
            }
            return redirect()->route('quanlysanpham');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id',$id)->first();

        $product -> delete ();
        return redirect() ->route('quanlysanpham');
    }

    public function type(){
        $products = Product::get()->where('type',$_GET['bongDa']);

        return view('layouts.products.indexProduct',
        [
               'products' => $products
        ]);
    }
    public function typedb(){
        $products = Product::all();
        return  $products;
    }
}
