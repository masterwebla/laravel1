@extends('template')
@section('titulo','Editar Producto')

@section('contenido')
	<h2>Editar {{$producto->nombre}}</h2>
	<form action="{{route('actualizar',$producto->id)}}" method="post">
		@csrf
		<input type="hidden" name="_method" value="put">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" class="form-control" name="nombre" value="{{$producto->nombre}}">
		</div>
		<div class="form-group">
			<label>Precio</label>
			<input type="number" class="form-control" name="precio" value="{{$producto->precio}}">
		</div>
		<div class="form-group">
			<label>Fecha vencimiento</label>
			<input type="date" class="form-control" name="vencimiento" value="{{$producto->vencimiento}}">
		</div>
		<div class="text-center">
			<a class="btn btn-danger" href="{{route('listar')}}">Volver</a>
			<button type="submit" class="btn btn-success">Guardar</button>
		</div>
	</form>
@endsection