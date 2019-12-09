@extends('layouts.header2')

@section('content')
	<div class="container">
		
			<div class="row my-5">
				
				<!-- slide hien thi cho san pham -->
		
		
				<div class="col-5">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
 					 <div class="carousel-inner">
 				   <div class="carousel-item active">
     			 <img src="{{asset('image/'.$image[1]->image)}}" class="d-block w-100" alt="...">
   			 </div>
   			 <div class="carousel-item">
   	   		<img src="{{asset('image/'.$image[2]->image)}}" class="d-block w-100" alt="...">
   		 </div>
   		 <div class="carousel-item">
   		   <img src="{{asset('image/'.$image[0]->image)}}" class="d-block w-100" alt="...">
  		  </div>
 			 </div>
 		 <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
 		   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
 		 </a>
 			 <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
 	   <span class="carousel-control-next-icon" aria-hidden="true"></span>
 		   <span class="sr-only">Next</span>
 		 </a>
			</div>
			<strong class="text-center">Hình Ảnh Của Sản Phẩm</strong>
		</div>
				<div class="col-1"></div>
				<div class="col-5">
					<h3>Tên Sản Phẩm :{{$product -> name}}</h3>
					<h5><b class="text-success">Giá :{{$product -> price}}</b></h5>
					<p class="border-dark">Size : {{$product -> size}}</p>
					<form action="" class="w-100 my-2">
						<button class="badge-dark w-100 btn btn">Mua</button>
					</form>
					<form action="" class="w-100">
						<button class=" w-100 btn btn-outline-success">Nhắn Tin</button>
					</form>
					<p>Lượt Thích</p>
					<p>Bình Luận</p>
					<hr>
					<b>Chi tiết sản phẩm:</b>
					<p>{!!$product -> detail!!}</p>
					<hr>
					<p class="text-muted">
						Đăng lúc : {{$product -> created_at}}</p>
					<hr>
					<b>Loại Hàng : {{$product -> type}}</b>
					<hr>
					
				</div>
				<div class="col-1"></div>
			</div>
		
		<div class="row">
			<div class="col-12">
				<b>Có Thể Bạn Cũng Thích</b>
			<div class="d-flex my-3">
				<form class="mx-4" action="">
					<img src="http://aothudong.com/upload/product/atd-054/ao-len-nam-co-tron-day-dep.jpg" height="120px" width="120px">
					<h6>Áo Thun Nam</h6>
					<b>5$</b>
				</form>
				<form class="mx-4" action="">
					<img src="http://aothudong.com/upload/product/atd-054/ao-len-nam-co-tron-day-dep.jpg" height="120px" width="120px">
					<h6>Áo Thun Nam</h6>
					<b>5$</b>
				</form>
				<form class="mx-4" action="">
					<img src="http://aothudong.com/upload/product/atd-054/ao-len-nam-co-tron-day-dep.jpg" height="120px" width="120px">
					<h6>Áo Thun Nam</h6>
					<b>5$</b>
				</form>
				<form class="mx-4" action="">
					<img src="http://aothudong.com/upload/product/atd-054/ao-len-nam-co-tron-day-dep.jpg" height="120px" width="120px">
					<h6>Áo Thun Nam</h6>
					<b>5$</b>
				</form>
				<form class="mx-4" action="">
					<img src="http://aothudong.com/upload/product/atd-054/ao-len-nam-co-tron-day-dep.jpg" height="120px" width="120px">
					<h6>Áo Thun Nam</h6>
					<b>5$</b>
				</form>
				
			</div>
		</div>
			</div>
	</div>
	
	<footer class="bg-light" style="height: 300px;">
		
	</footer>
@endsection