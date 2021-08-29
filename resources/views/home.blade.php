
<body background="http://localhost/empresa/public/images/fondo1.jpg">
@extends('layouts.app')


@section('content')



<!doctype html>
<html>
<head>
  <title>Prueba de Bootstrap 4</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container">   
    <div class="row mt-3">
      
      <div class="col-md">        
          <div class="card text-center">
            <div class="card-header">
              Cabecera
            </div>
            <div class="card-body">
              <h4 class="card-title">Titulo de la tarjeta</h4>
              <p class="card-text">Aqui podras administrar a gusto los clientes de tu empresa
                                    tempor vitae mattis malesuada, ornare sed erat. Pellentesque nulla dui, congue
                                    nec tortor sit amet, maximus mattis dui. </p>
              <a href="{{ url ('/clientes') }}" class="btn btn-primary">Clientes</a>
            </div>
            <div class="card-footer">
              Pie de tarjeta
            </div>
          </div>          
      </div>

      <div class="col-md">        
          <div class="card text-center">
            <div class="card-header">
              Cabecera
            </div>
            <div class="card-body">
              <h4 class="card-title">Titulo de la tarjeta</h4>
              <p class="card-text">Aqui podras trabajar con notas para recordar todos tus temas del dia o la semana, crear editar eliminar. Etiam lectus sem, 
                                    nec tortor sit amet, maximus mattis dui. </p>
              <a href="{{ url('/notas') }}" class="btn btn-primary">Notas</a>
            </div>
            <div class="card-footer">
              Pie de tarjeta
            </div>
          </div>          
      </div>

      <div class="col-md">        
          <div class="card text-center">
            <div class="card-header">
              Cabecera
            </div>
            <div class="card-body">
              <h4 class="card-title">Titulo de la tarjeta</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lectus sem, 
                                    tempor vitae mattis malesuada, ornare sed erat. Pellentesque nulla dui, congue
                                    nec tortor sit amet, maximus mattis dui. </p>
              <a href="#" class="btn btn-primary">Entrar</a>
            </div>
            <div class="card-footer">
              Pie de tarjeta
            </div>
          </div>          
      </div>
      
    </div>
  </div>
</body>
</html>

@endsection
