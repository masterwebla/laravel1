@extends('template')
@section('titulo','Listado de Servicios')

@section('contenido')
	<h2 class="text-center">Listado de Servicios</h2>
	<a class="btn btn-success" href="{{route('servicios.create')}}">Crear servicio</a>
	<br><br>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($servicios as $servicio)
				<tr>
					<td>{{$servicio->nombre}}</td>
					<td>{{$servicio->descripcion}}</td>
					<td>
						<form action="{{ route('servicios.destroy',$servicio->id) }}" method="post">
							@csrf
							<input type="hidden" name="_method" value="delete">
							<a class="btn btn-info" href="{{route('servicios.edit',$servicio->id)}}">Editar</a>
							<button class="btn btn-danger" onClick="return confirm('Eliminar servicio?')">Eliminar</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{{ $servicios->links() }}
@endsection