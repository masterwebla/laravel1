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
						<a class="btn btn-info" href="{{route('editar',$producto->id)}}">Editar</a>
						<a class="btn btn-danger" href="">Borrar</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection