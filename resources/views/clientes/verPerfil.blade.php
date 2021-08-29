@extends('plantilla')

@section('seccion')

	<h1> Mi perfil :</h1>

	<h4> #id: {{ $users->id }}</h4>
	<h4> Nombre: {{ $users->nombre }}</h4>
	<h4> Apellido: {{ $clientes->apellido }}</h4>
	<h4> FechaNAC: {{ $clientes->fechaNac }}</h4>
	<h4> Email: {{ $clientes->email }}</h4>
	<h4> Direccion: {{ $clientes->direccion }}</h4>
	<h4> Telefono: {{ $clientes->telefono }}</h4>

@endsection