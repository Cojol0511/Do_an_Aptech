@extends('layouts.header2')

@section('content')
    <div class="container my-5">
         <div class="second-row flex-row mx-4">
            <div class="col-12 ">

                <div class="d-flex">
                    <div class=" large mr-4">
                        <img class=" rounded-circle" src="http://d2lllwtzebgpl1.cloudfront.net/d5db9edf31836704f148a4adcafc778a_file.jpeg" style="width:100px;height:100px">
                    </div>

                    <div class=" d-flex large mb-4 flex-column">

                        <div>
                            <h2>{{Auth::user()->name }}</h2>
                            <p class="text-secondary">{{Auth::user()->email}}</p>
                        </div>
                        <div>
                            <div class=" flex-row d-flex">
                                <div class="mr-2 flex-column">
                                    <span class="text-dark">0</span>
                                    <span class="field text-secondary">FOLLOWERS</span>
                                </div>
                                <div class="mx-2 flex-column">
                                    <span class="text-dark">11</span>
                                    <span class="field text-secondary">FOLLOWING</span>
                                </div>
                                <div class="ml-2 flex-column">
                                    <div class="flex-column ">
                                        <span class="text-dark">0</span>
                                        <span class="field text-secondary">REVIEWS</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-secondary mt-2">Da Nang,Viet Nam</p>
                 </div>

                </div>

            </div>

        </div>
        <div class="three-row mx-4 d-flex">
            <div class="col-6">
            	<form action="{{route('products.create')}}" method="get">
                    <button type="submit" class="btn btn-lg btn-block text-white btn-success ">
                    Đăng Sản Phẩm</button>
                 </form>   
            </div>
                <div class="col-6">
                    <button class="btn btn-lg btn-block text-dark btn-outline-secondary " >
                        <a style="text-decoration: none; color: black" 
                            href="http://localhost:8000/quanlysanpham" >
                            Sản Phẩm Đang Bán</a>
                    </button>
                </div>
            </div>         
        </div>
        <br>

@endsection