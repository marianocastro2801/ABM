 <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                <div class="container my-5">
      <a href="{{ url ('/') }}" class="btn btn-primary">Inicio</a>
      <a href="{{ url ('/notas') }}" class="btn btn-primary">Notas</a>
      <a href="{{ url ('/clientes') }}" class="btn btn-primary">Clientes</a>
      <a href="{{ url ('/publicaciones') }}" class="btn btn-primary">Publicaciones</a>
                </div>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('INGRESAR') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTRARSE') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    
                     <a class="dropdown-item" href=""> <img src="perfilDos.svg" width="25" height="14">  Mi Perfil </a>

                     <a class="dropdown-item" href=""> <img src="perfilDos.svg" width="25" height="14">home </a>
             

                                    
              <!-- MANEJO DE SOLAPA PERSONAL: PERFIL -->   

            


                    


                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                        <img src="2529508.jpg " width="25" height="14"> {{ __('Cerrar sesión') }}
                </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>





                            </div>
                        </li>
                    @endguest
                 </ul>
             </div>
         </div>
     </nav>
@yield('seccion')

    <main class="py-4">
         @yield('content') 
     </main>
    </div>
</body>
</html>





 
  
      


