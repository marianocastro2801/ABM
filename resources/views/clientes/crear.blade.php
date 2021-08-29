@extends('plantilla')

@section('seccion') 

<h1>Nuevo cliente:</h1>

@if ( session('mensaje') )  
    <div class="alert alert-success">{{ session('mensaje') }}</div>
@endif

<form method="POST" action="{{ route('clientes.crear') }}">
  @csrf

    @error('nombre')
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  El nombre es requerido
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@enderror @if ($errors->has('apellido'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  El apellido es requerido
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@enderror @if ($errors->has('fechaNac'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  La fecha de nac es requerida
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@enderror @if ($errors->has('email'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  El email es requerido
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@enderror @if ($errors->has('direccion'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  La direccion es requerida
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@enderror @if ($errors->has('telefono'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    El telefono es requerido
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


<h4>Nombre:
  <input type="text" name="nombre" placeholder="nombre" class="form-control mb-2" 
  value="{{old('nombre')}}">
</h4>
<h4>Apellido:
  <input type="text" name="apellido" placeholder="apellido" class="form-control mb-2" 
  value="{{old('apellido')}}">
  </h4>
<h4>Fecha de nacimiento:
  <input type="date" name="fechaNac" placeholder="fecha de nacimiento" class="form-control mb-2" 
  value="{{old('fechaNac')}}">
</h4>
<h4>Correo electrónico:
  <input type="text" name="email" placeholder="example@gmail.com" class="form-control mb-2" 
  value="{{old('email')}}">
</h4>
<h4>Dirección:
  <input type="text" name="direccion" placeholder="direccion" class="form-control mb-2" 
  value="{{old('direccion')}}">
</h4>
<h4>Teléfono/s:
  <input type="text" name="telefono" placeholder="telefono" class="form-control mb-2" 
  value="{{old('telefono')}}">
</h4>
  <button class="btn btn-warning btn-block" type="submit">Crear</button>
  
</form>
<a href="{{ url ('/clientes') }}"class="btn btn-primary btn-block">Volver</a>

  
 @endsection