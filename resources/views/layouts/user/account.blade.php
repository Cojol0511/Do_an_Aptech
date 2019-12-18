@extends('layouts.header2')

@section('content')

    <div class="container">
        <div class="first-row flex-row mx-4">
            <div class="col-12 ">

                <div class="d-flex">
                    <div class=" large mr-4">
                        <img class=" rounded-circle" src="http://d2lllwtzebgpl1.cloudfront.net/465e4f7b065003e09d64a97fc0c53b10_picture.jpg" style="width:100px;height:100px">
                    </div>

                    <div class=" d-flex large mb-4 flex-column">

                        <div>
                            <h2>Supereme</h2>
                            <p class="text-secondary">@supereme</p>

                        </div>
                        <div>
                            <div class=" flex-row d-flex">
                                <div class="mr-2 flex-column">
                                    <span class="text-dark">85</span>
                                    <span class="field text-secondary">FOLLOWERS</span>
                                </div>
                                <div class="mx-2 flex-column">
                                    <span class="text-dark">110</span>
                                    <span class="field text-secondary">FOLLOWING</span>
                                </div>
                                <div class="ml-2 flex-column">
                                    <div class="flex-column ">
                                        <span class="text-dark">12</span>
                                        <span class="field text-secondary">REVIEWS</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-secondary mt-2">Ha Noi,Viet Nam</p>
		       </div>
                </div>
            </div>
        </div>

        <div class="three-row mx-4">
            <div class="d-flex">
                <div class="col-6 ">
                    <button class="btn btn-lg btn-block text-white btn-primary">Theo dõi</button>
                </div>
                <div class="col-6">
                    <button class="btn btn-lg btn-block text-dark btn-outline-secondary">Nhắn tin</button>
                </div>
            </div>

        </div>
        <div class="four-row mt-2">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button id="shop" type="button" class="btn d-block text-dark btn-outline-secondary">Mặt hàng</button>
                <button id="post" type="button" class="btn text-dark btn-outline-secondary">Bài viết</button>
            </div>
        </div>
        <hr>
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

@endsection