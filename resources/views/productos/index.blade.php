@extends('template')
@section('titulo','Listado de Productos')

@section('contenido')
	<h2 class="text-center">Listado de Productos</h2>
	<a class="btn btn-success" href="{{route('crear')}}">Crear producto</a>
	<br><br>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Fecha vencimiento</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($productos as $producto)
				<tr>
					<td>{{$producto->nombre}}</td>
					<td>${{$producto->precio}}</td>
					<td>{{$producto->vencimiento}}</td>
					<td>
						<form action="{{ route('eliminar',$producto->id) }}" method="post">
							@csrf
							<input type="hidden" name="_method" value="delete">
							<a class="btn btn-info" href="{{route('editar',$producto->id)}}">Editar</a>
							<button class="btn btn-danger" onClick="return confirm('Eliminar producto?')">Eliminar</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection