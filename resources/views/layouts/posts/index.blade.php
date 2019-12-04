@extends('layouts.header2')


@section('content')
   
    <div class="container">
         <div class="row">
           
            <div class="col-lg-3 col-md-6">
                 @foreach($posts as $post)
                    <form action="{{asset('posts/'.$post->id)}}" method="get">
                    <button class="btn btn-white">
                    <div>
                        <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?cs=srgb&dl=day-giay-gi-l-p-giay-cao-su-giay-dep-1598505.jpg&fm=jpg" style="width: 100%">
                    </div>
                    <div>
                        <div class="d-flex justify-content-between my-1">
                            <span><small>{{$post -> created_at}}</small></span>
                            <span><small>by HolyFirst</small></span>
                        </div>
                        <center>
                            <h3>{{$post -> title}}</h3>
                        </center>
                    </div>
                     </button>
                    </form> 
                 @endforeach                
            </div>
       
            <div class="col-lg-6">
                <div>
                    <img src="https://images.pexels.com/photos/593163/pexels-photo-593163.jpeg?cs=srgb&dl=c-u-thang-day-giay-giay-giay-dep-593163.jpg&fm=jpg" style="width: 100%">
                </div>
                <div>
                    <div class="d-flex justify-content-between my-1">
                        <span>March 10, 2019</span>
                        <span>by HolyFirst</span>
                    </div>
                    <h3>Cannellini Aglio e Olio with Salmon</h3>
                </div>
            </div>
                  
            <div class="col-lg-3 col-md-6">
                 @foreach($posts as $post)
                    <form action="{{asset('posts/'.$post->id)}}" method="get">
                    <button class="btn btn-white">
                    <div>
                        <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?cs=srgb&dl=day-giay-gi-l-p-giay-cao-su-giay-dep-1598505.jpg&fm=jpg" style="width: 100%">
                    </div>
                    <div>
                        <div class="d-flex justify-content-between my-1">
                            <span><small>{{$post -> created_at}}</small></span>
                            <span><small>by HolyFirst</small></span>
                        </div>
                        <center>
                            <h3>{{$post -> title}}</h3>
                        </center>
                    </div>
                     </button>
                    </form> 
                 @endforeach                
            </div>
       
        </div>
    </div>
@endsection
