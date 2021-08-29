@extends('plantilla')

@section('seccion')
  <h1>Editar cliente: {{$cliente->id}}</h1>
  @if (session('mensaje'))
      <div class="alert alert-success">
          {{ session('mensaje') }}
      </div>
  @endif
  <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
    @method('PUT')
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
  <h4>Nombre <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{ $cliente->nombre }}"> </h4>

  <h4>Apellido<input type="text" name="apellido" placeholder="apellido" class="form-control mb-2" 
    value="{{ $cliente->apellido }}"> </h4> 

    <h4>Fecha de Nacimiento <input type="date" name="fechaNac" placeholder="fechaNacimiento" class="form-control mb-2" 
    value="{{ $cliente->fechaNac }}"> </h4>
    
    <h4> Correo eléctrónico
    <input type="text" name="email" placeholder="email" class="form-control mb-2" 
    value="{{ $cliente->email }}"> </h4>

    <h4> Direccion
    <input type="text" name="direccion" placeholder="direccion" class="form-control mb-2" 
    value="{{ $cliente->direccion }}"> </h4>
    
    <h4> Telefono
    <input type="text" name="telefono" placeholder="telefono" class="form-control mb-2" 
    value="{{ $cliente->telefono }}"> </h4>
    
    <button class="btn btn-warning btn-block" type="submit">Editar</button>
  </form>
  <a href="{{ url ('/clientes') }}"class="btn btn-primary btn-block">Volver</a>
@endsection