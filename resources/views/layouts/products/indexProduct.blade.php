@extends('layouts.header2')


@section('content')
<style>
    .col-4 ul{
       
    }
.list-group-item a{
    text-decoration:none;
    color: black;
}
.list-group-item:hover{
    background-color: #EDF0F5;
}

</style>


<div class="container-fuild "  style="height:70px;background:#EDF0F5; ">
    <h4 style="margin-left: 100px;">Shop Thể Thao Giá Sinh Viên</h4>
</div>
<div class="container my-3">

    <div class="row">
        <div  class="col-0 col-md-4">
            <ul class="list-group">
                <li class="list-group-item bg-info">
                    <h5>Danh Mục Sản Phẩm</h5>
                </li>
                <li class="list-group-item">
                <a href="">Mẫu Áo Bóng Chuyền Thiết Kế Đẹp</a></li>
                <li class="list-group-item">
                <a href="">Mẫu Áo Bóng Đá Đẹp</a></li>
                <li class="list-group-item">
                <a href="">Mẫu Áo Bóng Đá Trẻ Em</a>
                </li>
                <li class="list-group-item">
                <a href="">Mẫu Áo Game thủ Esports</a>
                </li>
                <li class="list-group-item">
                <a href="">Mẫu Áo Phông Thể Thao</a></li>
                <li class="list-group-item">
                <a href="">Mẫu Quần Áo Bóng Rổ Thiết Kế Đẹp</a></li>
            </ul>
        </div>

        <div class="col-8 item-container2 d-flex">
            <div class="row">
               
              @foreach($products as $product)
                <div class="col-lg-4">
                    <form action="{{asset('products/'.$product->slug)}}" method="get">
                        <button type="submit" class=" w-100 btn btn-white">
                            <div class="w-100">
                                <img src="{{asset('image/'.$product->images[0]->name_image)}}" width="100%" height="170px">
                            </div>

                            <div class="d-flex justify-content-between my-1">
                                <span><b>{{$product -> price}}</b></span>
                                <span><small>by ShopSport</small></span>
                            </div>
                            <center>
                                <strong>{{$product -> name}}</strong>
                            </center>

                        </button>
                    </form>
                
                    </div>       
                @endforeach
                
            </div>

      </div>
    </div>
</div>

@endsection


