@extends('layouts.header2')

@section('content')
<div class="container">

	<div class="row my-5">

		<!-- slide hien thi cho san pham -->

		<div class="col-5">
				<?php
					$images = $product->images;
				?>

				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						<?php
							$i =0;
						?>
						@foreach($images as $image)
							
							<li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"
							@if( $i == 0 )
							class="active"
							@endif
							>
							</li>

							<?php
								$i++;
							?>
						@endforeach
						</ol>
						<div class="carousel-inner">
						<?php
							$i =0;
						?>
						@foreach($images as $image)
							
							<div 
							@if($i ==0)
							class="carousel-item active"
							@else
							class="carousel-item "
							@endif
							>
							<img src="{{asset('image/'.$image->name_image)}}" class="d-block w-100" alt="...">
							</div>
							<?php
								$i++;
							?>
						@endforeach
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
						</div>
			<h1>Hình Ảnh Sản Phẩm</h1>
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
		
			<hr>
			<b>Chi tiết sản phẩm:</b>
			<p>{!!$product -> detail_product!!}</p>
			<hr>
			<p class="text-muted">
				Đăng lúc : {{$product -> created_at}}</p>
			<hr>

		</div>
		<div class="col-1"></div>
	</div>

	<div class="row">
		<div class="col-6  d-flex align-items-center">
			<form action="{{route('comments.store')}}" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="product_id" value="{{$product->id}}">
				<div class="form-group">
					<label for="email">Email: </label>
					<input required type="email" name="email" id="email" class="form-control" placeholder="Abc@gmail.com">
				</div>
				<div class="form-group">
					<label for="name">Name: </label>
					<input required type="text" name="name" id="name" class="form-control" placeholder="Nguyen A">
				</div>
				<div class="form-group">
					<label for="cm">Comment: </label>
					<textarea name="content" id="cm" class="form-control" cols="30" rows="2"></textarea>
				</div>
				<div class="form-group text-center">
					<button type="submit" class="btn btn-success">Send</button>
				</div>
			</form>
		</div>
		<div class="col-6">
			<h1>Commented</h1>
			<?php
				$comments = $product->comment;
				
			?>		
			@foreach($comments as $comment)
			<ul>
					<li>
						{{$comment->name}}
						<br>
						<span>{{$comment->created_at}}</span>
					</li>
					<li>
						{{$comment->content}}
					</li>
			</ul>
				<hr>
			@endforeach
		</div>
	</div>
	
</div>
<div class="container">
		<b >Có Thể Bạn Cũng Thích</b>
	<div class="row">
		<div class="col-12">
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
@endsection