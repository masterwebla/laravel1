@extends('template')
@section('titulo','Editar Servicio')

@section('contenido')
	<h2>Editar {{$servicio->nombre}}</h2>
	@include('secciones.errores')
	<form action="{{route('servicios.update',$servicio->id)}}" method="post">
		@csrf
		<input type="hidden" name="_method" value="put">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" class="form-control" name="nombre" value="{{$servicio->nombre}}">
		</div>
		<div class="form-group">
			<label>Descripción</label>
			<textarea name="descripcion" class="form-control">{{$servicio->descripcion}}</textarea>
		</div>
		<div class="text-center">
			<a class="btn btn-danger" href="{{route('servicios.index')}}">Volver</a>
			<button type="submit" class="btn btn-success">Actualizar Servicio</button>
		</div>
	</form>
@endsection