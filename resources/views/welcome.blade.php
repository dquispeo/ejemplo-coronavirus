<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Coronavirus</title>
        <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="{{ url('/home') }}" title="Inicio">
      <img src="{{ asset('img/logo.png') }}" height="30" width="30"> Coronavirus
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

      </ul>
      @guest
      <ul class="navbar-nav">
      <li class="nav-item active">
      <a class="nav-link" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="{{ route('register') }}">Registrarse <span class="sr-only">(current)</span></a>
      </li>
      </ul>
      @else
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

      <ul class="navbar-nav">
      <li>
      <a class="btn btn-dark nav-link" href="{{ url('/licencias_vigentes') }}"
      title="Licencias vigentes">
      <i style="color:#40B537;" class="fas fa-bell"></i>
      </a>
      </li>
      </ul>
      <ul class="navbar-nav">
      <li>
      <a class="btn btn-dark nav-link" title="Notificaciones" href="{{ url('/notificaciones') }}">
      <!--  <i class="fas fa-bell"></i> <span class="badge badge-light">{ count($notificas) }}</span>
      <span class="badge badge-light"> </span> -->
      <i style="color:#CF1F0A;" class="fas fa-bell"></i>
      </a>
      </li>
      </ul>
      <ul class="navbar-nav">
      <li>
      <a class="btn btn-dark nav-link" data-toggle="modal" data-target=".bd-example-modal-xl-ajustes"
      title="Ajustes">
      Ajustes <i class="fas fa-tools"></i> <span class="caret"></span>
      </a>
      </li>
      </ul>

      <ul class="navbar-nav">
      <li class="nav-item dropdown">
        @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">Página principal</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Registrarse</a>
                @endauth
        @endif
      </li>
      </ul>
      </div>
      @endguest
      </div>
      </nav>

<div class="container" style="margin-top:70px;">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/inicio2.jpg') }}" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/inicio1.jpg') }}" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/inicio3.jpg') }}" class="d-block w-100">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>
<br>

        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
