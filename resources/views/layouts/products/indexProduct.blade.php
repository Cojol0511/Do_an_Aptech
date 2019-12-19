@extends('layouts.header2')


@section('content')
<div class="container">
    <div class="row">
    @foreach($products as $product)
        <div class="col-lg-3 col-md-12 item-container mx-2 ">
            <form action="{{asset('products/'.$product->id)}}" method="get">
                <button type="submit" class=" w-100 btn btn-white">
                    <div class="w-100">
                        <img src="{{asset('image/'.$product->images[0]->name_image)}}" width="100%" height="170px">
                    </div>

                    <div class="d-flex justify-content-between my-1">
                        <span><b>{{$product -> price}}</b></span>
                        <span><small>by HolyFirst</small></span>
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

@endsection

