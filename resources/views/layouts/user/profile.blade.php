@extends('layouts.header2')

@section('content')
    <div class="container">
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
                    <button class="btn btn-lg btn-block text-dark btn-outline-secondary " onclick="sanpham()">Sản Phẩm Đang Bán</button>
                </div>
            </div>

        <div id="taikhoan" class="four-row m-3 d-flex">
          
           <div class="five-row m-3 d-flex">
            <div class="col-4">
                <div class="card">
                    <img src="http://d2lllwtzebgpl1.cloudfront.net/4dd7c0209e20cf15530cb109197a842f_listingImg_Nfz0B1SHnG.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Off-White X Nike The Ten: Air Vapormax
                        </p>
                        <p>US 10.5 </p>
                        <p>$585</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="http://d2lllwtzebgpl1.cloudfront.net/7aa40f673445ea074039f858800ae158_listingImg_Nfz0B1SHnG.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Supreme Smoke Tee
                        </p>
                        <p>M </p>
                        <p>$85</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="http://d2lllwtzebgpl1.cloudfront.net/3798392f608ef48187642c13e0f2c92f_listingImg_Nfz0B1SHnG.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Supreme Realtree Camo Backpack
                        </p>

                        <p>$185</p>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>

  
    <script>
     
        jQuery(document).ready(function() {
            tab = $('.on image p p p');
            tab.on('click', function(event) {
                event.preventDefault();
                tab.removeClass('active');
                $(this).addClass('active');
                tab_content = $(this).attr('href');
                $('div[id$="tab-content"]').removeClass('active');
                $(tab_content).addClass('active');
            });
        });
    </script>
@endsection