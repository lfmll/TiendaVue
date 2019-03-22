@extends('layouts.app')
@section('content')
	<div class="container">
	<div class="">
	@yield('content')
		<products-component></products-component>	
	</div>
	
		<div class="row">
			@foreach($products as $pro)
			<div class="col-xs-12 col-sm-6" col-md-4>
				<div class="card padding">
					<header>
						<h2 class="card-title">{{$pro->title}}</h2>
						<h4 class="card-subtitle">{{$pro->price}}</h4>
					</header>
					<p class="card-text">{{$pro->description}}</p>
				</div>
			</div>
			@endforeach	
		</div>
		<div class="actions">
			{{$products->links()}}
		</div>		
	</div>
@endsection