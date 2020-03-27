<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
        <title>Coronavirus</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-top">
      @guest
      <a class="navbar-brand" href="{{ url('/') }}" title="Inicio">
      <img src="{{ asset('img/logo.png') }}" height="30" width="30"> Coronavirus
      </a>
      @else
      <a class="navbar-brand" href="{{ url('/home') }}" title="Inicio">
      <img src="{{ asset('img/logo.png') }}" height="30" width="30"> Coronavirus
      </a>
      @endguest
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      </li>
      </ul>

      @guest
      @else
      <ul class="navbar-nav mr-auto" style="margin-left:5px;">
        <li class="nav-item">
          <a class="btn btn-dark nav-link" href="{{ url('sintomas') }}" title="Síntomas">
          Síntomas<span class="caret"></span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav mr-auto" style="margin-left:5px;">
        <li class="nav-item">
          <a class="btn btn-dark nav-link" href="{{ url('prevencion') }}" title="Prevención">
          Prevención<span class="caret"></span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav mr-auto" style="margin-left:5px;">
        <li class="nav-item">
          <a class="btn btn-dark nav-link" href="{{ url('tipos') }}" title="Tipos">
          Tipos<span class="caret"></span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav mr-auto" style="margin-left:5px;">
        <li class="nav-item">
          <a class="btn btn-dark nav-link" href="{{ url('informacion') }}" title="Mapa y más información">
          Mapa y más información<span class="caret"></span>
          </a>
        </li>
      </ul>
      @endguest


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
      <li class="nav-item dropdown">
      <a id="navbarDropdown" class="btn btn-dark nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false" v-pre title="{{ Auth::user()->name }}">
      <i class="fas fa-user-circle"></i> {{ Auth::user()->name }} <span class="caret"></span>
      </a>
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
      {{ __('Cerrar Sesión') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
      </form>
      </div>
      </li>
      </ul>
      </div>
      @endguest
      </div>
      </nav>

<div class="container" style="margin-top:70px;">
  <div class="card text-center">
<div class="card-header">
  <h3>Coronavirus</h3>
</div>
<div class="card-body">
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
<div class="card-footer text-muted">
  <a href="https://www.google.com/search?q=coronavirus&oq=coronavirus&aqs=chrome..69i57j69i60l3j0l3.5896j0j7&sourceid=chrome&ie=UTF-8" class="btn btn-primary" target="_blank">Más búsquedas en Google</a>
</div>
</div>





</div>
<br>

        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
