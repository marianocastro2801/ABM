@extends('plantilla')

@section('seccion')   
      

<nav class="navbar navbar-light bg-light">
  <abbr class="navbar-brand">Listado de clientes:</abbr>
  <form class="form-inline">
    <input class="form-control mr-sm-2" name="buscarpor" type="search" placeholder="Buscar por nombre" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>

 
 <a href="{{ url ('/crear') }}"class="btn btn-primary">+ Nuevo cliente</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">email</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>

    @foreach($clientes as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td> 
         <a href="{{ route ('clientes.detalle', $item)}}"> {{$item->nombre}}  </a>
         </td>
      <td>{{$item->apellido}}</td>

      <td>{{$item->email}}</td>
   

     <td> 
        <a href="{{ route ('clientes.editar', $item) }}" class="btn btn-warning -sm ">editar  </a>
          
         <form action="{{ route('clientes.eliminar', $item) }}" class="d-inline" method="POST">
              @method('DELETE')
              @csrf
        <button type="submit" class="btn btn-danger btn-sm">eliminar</button>
        </form>     

     </td>

    </tr>
   @endforeach()
  </tbody>
</table>

</nav>
           
{{$clientes->links()}}
          

@endsection   