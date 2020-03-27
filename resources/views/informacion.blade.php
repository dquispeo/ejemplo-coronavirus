@extends('layouts.app')
@section('title','Mapa e información')
@section('content')
<div class="container" style="margin-top:70px;">
  <div class="card text-center">
<div class="card-header">
  <h3>Mapa e información</h3>
</div>
<div class="card-body">
  <a href="https://www.bing.com/covid" class="btn btn-primary" target="_blank">Ver mapa en vivo <i class="fas fa-map-marked-alt"></i></a>
  <a href="https://www.google.com/maps/d/u/0/viewer?mid=1S0vCi3BA-7DOCS13MomK7KebkPsvYl8C&ll=-21.094873968912186%2C-58.95622485079639&z=4" class="btn btn-primary" target="_blank">Ver mapa en vivo <i class="fas fa-map-marked-alt"></i></a>
  <br>
  <img src="{{ asset('img/mapa.png') }}" class="img-fluid" alt="Responsive image">
  <img src="{{ asset('img/elcomercio.PNG') }}" class="img-fluid" alt="Responsive image">
  <a href="https://elcomercio.pe/lima/sucesos/coronavirus-en-peru-en-vivo-ultimas-noticias-infectados-y-muertos-por-covid-19-hoy-jueves-26-de-marzo-del-2020-minuto-a-minuto-ultima-hora-martin-vizcarra-noticia/" class="btn btn-primary" target="_blank">Más noticias en el diario El Comercio <i class="fas fa-newspaper"></i></a>
</div>
<div class="card-footer text-muted">
</div>
</div>
</div>
@endsection
