@extends('template')
@section('titulo','Crear Productos')

@section('contenido')
	<h2>Crear un Producto</h2>
	@include('secciones.errores')
	<form action="{{ route('guardar') }}" method="post">
		@csrf
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" class="form-control" name="nombre" required>
		</div>
		<div class="form-group">
			<label>Precio</label>
			<input type="number" class="form-control" name="precio" required>
		</div>
		<div class="form-group">
			<label>Fecha vencimiento</label>
			<input type="date" class="form-control" name="vencimiento" required>
		</div>
		<div class="text-center">
			<a class="btn btn-danger" href="{{route('listar')}}">Volver</a>
			<button type="submit" class="btn btn-success">Guardar</button>
		</div>
	</form>
@endsection