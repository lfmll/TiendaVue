<form action="{{ url('/producto') }}">
	<div>
		<label for="title">Nombre</label>
		<input type="text" name="title" class="form-control">	
	</div>
	<div>
		<label for="price">Precio</label>
		<input type="number" name="price" class="form-control" value="0">
	</div>
	<div>
		<input type="submit" name="save" value="Guardar" class="btn btn-primary">
	</div>
</form>