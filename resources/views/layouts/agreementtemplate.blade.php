<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Universidad de Macondo</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        #titulo_index_agreement {
          text-align: center;
          color: grey;
        }

    </style>
</head>
<body id="agreement-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/home') }}">
                    U. de Macondo
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Inicio</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/agreement') }}">Convenios</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/activity') }}">Actividad</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Ingresar</a></li>
                        <li><a href="{{ url('/register') }}">Registrarse</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- MENSAJES FLASH -->
    <div class="container">
    @if (Session::has('flash_message'))
      <div class="alert alert-success {{ Session::has('flash_message_important') ? 'alert-important' : '' }}">
      @if (Session::has('flash_message_important'))
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      @endif

        {{ session('flash_message') }}
      </div>
      @endif
    </div>



<div class="container">
<div class="row">

<!-- Menú para la vista de Agreements -->
  <div class="col-md-3">
    <div class="list-group">
<!-- list-group para menú de gestion de convenios -->
      <a href="{{url('/agreement')}}" class="list-group-item active">Gestión de Convenios</a>
      <div class="list-group-item">
        <ul class="">
          <li><a href="{{url('/agreement/create')}}">Registrar Convenios</a></li>      
		      <li><a href="{{url('/agreement/show')}}">Modificar Convenio</a></li>
          <li><a href="{{url('/agreement/show')}}">Eliminar Convenio</a></li>
        </ul>
      </div>
      <div class="list-group-item">
        <ul>
          <li><a href="{{url('/agreement/create')}}">Asociar Instituciones por Convenio</a></li>
        </ul>
      </div>
      <div class="list-group-item">
        <ul class="">
          <li><a href="{{url('/agreement/show')}}">Consultar Convenios</a></li>
          <li><a href="{{url('/')}}">Consultar Coordinadores</a></li>
        </ul>
      </div>

      <a href="{{url('/activity')}}" class="list-group-item active">Gestión de Actividades</a>
      <div class="list-group-item">
        <ul class="">
          <li><a href="{{url('/activity/show')}}">Visualizar Actividad</a></li>
          <li><a href="{{url('/activity/create')}}">Registrar Actividad</a></li>      
          <li><a href="{{url('/activity/show')}}">Modificar Actividad</a></li>
          <li><a href="{{url('/activity/show')}}">Eliminar Actividad</a></li>
        </ul>
      </div>
    </div>
  </div>
<!-- Fin vista Menú de Agreements -->



@yield('content')
</div>
</div>




    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script>
      $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
</body>
</html>
