{!!Form::open(['url'=>$url, 'method'=>$method]) !!} 
	<div>
		<label for="title">Nombre</label>
		{{Form::text('title',$products->title,['class'=>'form-control','placeholder'=>'nombre','required'])}}	
	</div>
	<div>
		<label for="description">Descripcion</label>
		{{Form::textarea('descripction',$products->descripcion,['class'=>'form-control','placeholder'=>'Descripcion'])}}
	</div>
	<div>
		<label for="price">Precio</label>
		{{Form::number('price',$products->price,['class'=>'form-control','placeholder'=>'Precio', 'required'])}}
	</div>
	<div>
		<input type="submit" name="save" value="Guardar" class="btn btn-primary">
	</div>
{!!Form::close()!!}