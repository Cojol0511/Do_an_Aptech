@extends('layouts.header2')

@section('content')


	@if($errors -> any())
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				{{$error}}
			@endforeach

		</div>
	@endif
<div class="container-fuild "  style="height:70px;background:#EDF0F5; ">
    <h4 style="margin-left: 100px;">Đăng sản phẩm:</h4>
</div>
	  	<div class="container my-2">
	  		<div class="row">
				<form class="col-12"  
					action="{{route('products.store')}} "
					 method="post" 
					 enctype="multipart/form-data">
	
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
					<label for=""><h5 class="text-dark">Tên Sản Phẩm :</h5></label>
					<input class="form-control w-25" 
							type="text" name="name" 
							placeholder="Nhập Tên Sản Phẩm">
				
					<label for=""><h5> Chọn Hình Ảnh Của Sản Phẩm :</h5>
					</label>
					<input class="btn btn-success" type="file" name="yourfile[]" multiple>

					<hr>
					<div  class="my-2 d-flex" >
						<div>
							<label><h5>Chọn Size :</h5></label>
							<select name="size" id="">
								<option value="">...</option>
								<option value="S">S</option>
								<option value="M">M</option>
								<option value="L">L</option>
								<option value="XL">XL</option>
								<option value="XXL">XXL</option>
							</select>	
						</div>
						<div class="mx-5">
							<label ><h5>Loại Sản Phẩm</h5></label>
							<select name="type" id="">
								<option value="">...</option>
								<option value="bongDa">Bóng Đá</option>
								<option value="bongChuyen">Bóng Chuyền</option>
								<option value="bongRo">Bóng Rổ</option>
								<option value="game">Áo Game Thủ</option>
								<option value="aoPhong">Áo Phông</option>
								<option value="giay">Giày Thể Thao</option>
							</select>
						</div>
					</div>
					<br>

					<label for=""><h5>Giá Của Sản Phẩm :</h5></label>
					<input 
						class="form-control w-25" 
						type="text" name="price" 
						placeholder="Nhập Giá Của Sản Phẩm"
					>
				
					<!-- <label for=""><h5 class="text-dark my-2">Loại Hàng :</h5></label>
					<input class="form-control w-25" type="text" name="brand" placeholder="Nhập mô tả của bài đăng"> -->

					<label for=""><h5 class="text-dark my-2">Chi Tiết Sản Phẩm:</h5>
					</label>
				<textarea cols="40" rows="10" name="detail">
						Mô Tả Sản Phẩm Của Bạn
				</textarea><hr>
				<button class="btn btn-success" type="submit">
					Lưu
				</button><br>
			</form>
			</div>			
		</div>

	<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
	<script src="{{asset('ckfinder/ckfinder.js')}}"></script>
	<script>
	
		CKEDITOR.replace('detail',{
			   filebrowserBrowseUrl: "{{asset('ckfinder/ckfinder.html')}}",
 			   filebrowserUploadUrl: "{{asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&amp;type=Files')}}"});
	</script>
@endsection