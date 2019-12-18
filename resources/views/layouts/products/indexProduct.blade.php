@extends('layouts.header2')


@section('content')
ádads
<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-lg-3 col-md-6 border mx-2">
            <form action="{{asset('products/'.$product->id)}}" method="get">
                <button type="submit" class="btn btn-white">
                    <div>
                        <img src="{{asset('image/'.$images[$product->id -1]->image)}}" width="100%" height="150px">
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