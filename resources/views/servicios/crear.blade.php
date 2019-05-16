@extends('template')
@section('titulo','Crear Servicios')

@section('contenido')
	<h2>Crear un Servicio</h2>
	@include('secciones.errores')
	<form action="{{ route('servicios.store') }}" method="post">
		@csrf
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<div class="form-group">
			<label>Descripcion</label>
			<textarea name="descripcion" class="form-control"></textarea>
		</div>
		<div class="text-center">
			<a class="btn btn-danger" href="{{route('servicios.index')}}">Volver</a>
			<button type="submit" class="btn btn-success">Guardar Servicio</button>
		</div>
	</form>
@endsection