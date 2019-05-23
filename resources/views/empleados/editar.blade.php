@extends('template')
@section('titulo','Editar Empleado')

@section('contenido')
	<h1>Crear Empleado {{$empleado->nombres}}</h1>
	<form action="{{ route('empleados.update',$empleado->id) }}" method="POST">
		@csrf
		@method('put')
		<div class="form-group">
			<label>Nombres</label>
			<input type="text" name="nombres" class="form-control" value="{{$empleado->nombres}}">
		</div>
		<div class="form-group">
			<label>Cédula</label>
			<input type="text" name="cedula" class="form-control" value="{{$empleado->cedula}}">
		</div>
		<div class="form-group">
			<label>Salario</label>
			<input type="text" name="salario" class="form-control" value="{{$empleado->salario}}">
		</div>
		<div class="form-group">
			<label>Nacimiento</label>
			<input type="date" name="nacimiento" class="form-control" value="{{$empleado->nacimiento}}">
		</div>
		<div class="form-group">
			<a class="btn btn-danger" href="{{ route('empleados.index') }}">Volver</a>
			<button class="btn btn-success">Actualizar</button>
		</div>
	</form>

@endsection