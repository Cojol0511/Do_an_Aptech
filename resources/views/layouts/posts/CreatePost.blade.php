@extends('layouts.header2')

@section('content')

	  	<div class="container my-2">
			<div class="row">

				<div class="col-12 ">
					
				<form action="{{route('posts.store')}} " method="post">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<label for=""><h5 class="text-dark">Tiêu Đề:</h5></label>
					<input class="form-control" type="text" name="title" placeholder="Nhập chủ đề mà bạn muốn đăng">
					<label for=""><h5 class="text-dark my-2">Mô tả:</h5></label>
					<input class="form-control" type="text" name="description" placeholder="Nhập mô tả của bài đăng">
					<label for=""><h5 class="text-dark my-2">Nội dung chính:</h5></label>
					<textarea cols="40" rows="10" name="content">
						Nhập toàn bộ nội dụng của bài đăng
					</textarea>
					<button class=" btn btn-success my-2" type="submit">
					<h6>Đăng Bài</h6>
					</button>
				</form>

				</div>

			</div>
	</div>
	<footer class="bg-light" style="height: 200px">
		
	</footer>
	<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
	<script src="{{asset('ckfinder/ckfinder.js')}}"></script>
	<script>
		CKEDITOR.replace('content',{
			   filebrowserBrowseUrl: "{{asset('ckfinder/ckfinder.html')}}",
 			   filebrowserUploadUrl: "{{asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&amp;type=Files')}}"});
	</script>
@endsection