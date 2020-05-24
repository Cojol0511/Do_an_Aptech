@extends('layouts.header2')

@section('content')
	
	<br><br>
	<div class="container">
		<h2>Danh Sách Tất Cả Sản Phẩm Đang Bán</h2>
		<br>
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Tên Sản Phẩm</th>
		      <th scope="col">Loại </th>
		      <th scope="col">Giá</th>
		      <th scope="col">Hành Động</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($products as $product)
			    <tr>
			      <th scope="row">{{$product -> id}}</th>
			      <td>{{$product -> name}}</td>
			       <td>{{$product -> type}}</td>
			      <td>{{$product -> price}}</td>
			      <td class="d-flex">
				      	<form action="{{asset('products/'.$product->slug)}}" method="GET">
	                         <button class="btn btn-info" type="submit">Chi Tiết</button>
	                   </form>
				      	<form class="mx-3" action="{{asset('products/'.$product->slug.'/edit')}}" method="GET">
                       		  <button class="btn btn-warning" type="submit">Sửa</button>
                 		 </form>
				      	<form  action="{{asset('products/'.$product->id)}}" method="post">
                              <input type="hidden" name="_token" value={{csrf_token()}}>
                              <input type="hidden" name="_method" value="DELETE">
                        	 <button class="btn btn-danger" type="submit">Xoá</button>
                  		</form>
			      </td>
			    </tr>
			@endforeach
		  </tbody>
		</table>
	</div>
	<br>
	<br>
	<br>
@endsection