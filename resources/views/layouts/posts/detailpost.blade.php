@extends('layouts.header2')

@section('content')
		
	<div class="container">
		<div class="row">
			<div class="col">

				<h1 class="text-center">{{$posts->title}}</h1>
				<h4>{{$posts->description}}</h4>
				<br>
				<h6>{!!$posts->content!!}</h6>
				<p class="ml-auto">{{$posts->created_at}}</p>
			</div>
		</div>
	</div>
		

		<!-- //<h1>{{$posts}}</h1> -->


@endsection
