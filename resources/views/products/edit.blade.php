@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Modificar Producto</h4>
		</header>
		<div class="card-body" class="app-form">
			@include('products.form',['products'=>$products,'url'=>'/products/'.$products->id,'method'=>'PATCH'])
		</div>
	</div>
</div>
@endsection