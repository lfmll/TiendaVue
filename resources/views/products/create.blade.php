@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card">
		<header>
			<h4>Nuevo Producto</h4>
		</header>
		<div class="card-body">
			@include('products.form')
		</div>
	</div>
</div>
@endsection