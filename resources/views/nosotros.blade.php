@extends('template')
@section('titulo','Nosotros')

@section('contenido')
	<h1>Nosotros</h1>
	<p>Hola, {{$nombre}}</p>
	@if($edad>18)
		<p>Toda la información para mayores de edad</p>
	@else
		<p>Usted es menor de edad</p>
	@endif
@endsection