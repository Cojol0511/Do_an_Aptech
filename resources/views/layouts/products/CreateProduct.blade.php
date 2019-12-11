@extends('layouts.header2')

@section('content')

	  	<div class="container my-2">
	  		<div class="row">
			<form class="col-12"  action="{{route('products.store')}} " method="post" enctype="multipart/form-data">
	
					<input type="hidden" name="_token" value="{{csrf_token()}}">
						
					<label for=""><h5 class="text-dark">Tên Sản Phẩm :</h5></label>
					<input class="form-control w-25" type="text" name="name" 
					placeholder="Nhập Tên Sản Phẩm">

					<label for=""><h5> Chọn Hình Ảnh Của Sản Phẩm :</h5>
					</label>
					<input class="btn btn-success" type="file" name="yourfile">

					<hr>
					<label class="my-2" for=""><h5>Chọn Size :</h5></label>
					<select name="size" id="">
						<option value="S">S</option>
						<option value="M">M</option>
						<option value="L">L</option>
						<option value="XL">XL</option>
						<option value="XXL">XXL</option>
					</select><br>

					<label for=""><h5>Giá Của Sản Phẩm :</h5></label>
					<input class="form-control w-25" type="text" name="price" 
					placeholder="Nhập Giá Của Sản Phẩm">
				
					<!-- <label for=""><h5 class="text-dark my-2">Loại Hàng :</h5></label>
					<input class="form-control w-25" type="text" name="brand" placeholder="Nhập mô tả của bài đăng"> -->

					<label for=""><h5 class="text-dark my-2">Chi Tiết Sản Phẩm:</h5>
					</label>
				<textarea cols="40" rows="10" name="detail">
						Mô Tả Sản Phẩm Của Bạn
				</textarea><hr>
				<button class="btn btn-success" type="submit">Đăng Sản Phẩm 
				</button><br>
			</form>
			</div>			
		</div>
	<footer class="badge-dark" style="height: 200px">
		
	</footer>
	<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
	<script src="{{asset('ckfinder/ckfinder.js')}}"></script>
	<script>
		CKEDITOR.replace('detail',{
			   filebrowserBrowseUrl: "{{asset('ckfinder/ckfinder.html')}}",
 			   filebrowserUploadUrl: "{{asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&amp;type=Files')}}"});
	</script>
@endsection