@extends('template')
@section('titulo','Crear Empleado')

@section('contenido')
	<h1>Crear Empleado</h1>
	@include('secciones.errores')
	<form action="{{ route('empleados.store') }}" method="POST">
		@csrf
		<div class="form-group">
			<label>Nombres</label>
			<input type="text" name="nombres" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Cédula</label>
			<input type="text" name="cedula" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Salario</label>
			<input type="text" name="salario" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Nacimiento</label>
			<input type="date" name="nacimiento" class="form-control">
		</div>
		<div class="form-group">
			<a class="btn btn-danger" href="{{ route('empleados.index') }}">Volver</a>
			<button class="btn btn-success">Guardar</button>
		</div>
	</form>

@endsection