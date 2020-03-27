@extends('layouts.app')
@section('title','Tipos')
@section('content')
<div class="container" style="margin-top:70px;">
  <div class="card text-center">
<div class="card-header">
  <h3>Tipos</h3>
</div>
<div class="card-body">
  <p class="card-text">En los coronavirus humanos, la gravedad puede variar sustancialmente entre un tipo y otro:</p>
  <b>Coronavirus del resfriado</b>
  <p class="card-text">Esta variante de coronavirus corresponde a los tipos 229E y OC43, que provocan los síntomas comunes de un resfriado, aunque en los casos más graves también pueden ocasionar una neumonía en personas de edad avanzada o en neonatos.</p>
  <b>Síndrome respiratorio agudo severo (SRAS)</b>
  <p class="card-text">Es una forma grave de neumonía. Provoca dificultad respiratoria y fiebre superior a los 38 grados. El brote de 2002 se extendió por todo el mundo, aunque su frecuencia siempre ha sido mayor en el este asiático.</p>
  <b>Síndrome respiratorio de Oriente Medio (MERS-CoV)</b>
  <p class="card-text">Causa graves problemas respiratorios, además de fiebre, tos y dificultad para respirar, aunque en un primer momento puede ser asintomático. En los casos más graves también se produce expectoración de sangre, diarrea y vómitos. Tuvo su primer brote en el año 2012 y desde entonces se han reportado muchos casos en Oriente Medio, aunque también ha llegado a Europa y Estados Unidos.</p>
  <b>Coronavirus COVID-19</b>
  <p class="card-text">El nuevo coronavirus detectado a finales de 2019, causante del COVID-19, en China muestra una secuencia genética que coincide con la del SRAS en un 80%. No obstante, en un principio parece menos virulento y con una tasa de letalidad inferior. En cambio, su transmisión ha sido muy superior, ya  ha causado varios miles de casos más que el SRAS y, como consecuencia, el número de fallecimientos también es mucho más elevado.</p>
  <a href="https://www.nationalgeographic.com.es/ciencia/7-tipos-coronavirus-que-infectan-humanos_15353" class="btn btn-primary" target="_blank">Algunos tipos más</a>
</div>
<div class="card-footer text-muted">
  <img src="{{ asset('img/tipos.png') }}" class="img-fluid" alt="Responsive image">
</div>
</div>
</div>
@endsection
