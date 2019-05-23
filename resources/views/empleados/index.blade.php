@extends('template')
@section('titulo','Listado de Empleados')

@section('contenido')
	<h1 class="text-center">Listado de Empleados</h1>
	<a class="btn btn-success" href="{{ route('empleados.create') }}">Crear nuevo</a>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Nombres</th>
				<th>Cédula</th>
				<th>salario</th>
				<th>Nacimiento</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($empleados as $empleado)
				<tr>
					<td>{{$empleado->nombres}}</td>
					<td>{{$empleado->cedula}}</td>
					<td>{{$empleado->salario}}</td>
					<td>{{$empleado->nacimiento}}</td>
					<th>
						
						<form action="{{ route('empleados.destroy',$empleado->id) }}" method="POST">
							@csrf
							@method('delete')
							<a class="btn btn-info" href="{{ route('empleados.edit',$empleado->id) }}">Editar</a>
							<button class="btn btn-danger">Borrar</button>
						</form>
					</th>
				</tr>
			@endforeach
		</tbody>
	</table>
	{{$empleados->links()}}
@endsection