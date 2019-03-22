@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card padding">
		<header>
			<h4>Nuevo Producto</h4>
		</header>
		<div class="card-body" class="app-form">
			@include('products.form',['products'=>$products,'url'=>'/products','method'=>'POST'])
		</div>
	</div>
</div>
@endsection