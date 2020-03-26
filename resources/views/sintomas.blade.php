@extends('layouts.app')
@section('title','Síntomas')
@section('content')
<div class="container" style="margin-top:70px;">
  <div class="card text-center">
<div class="card-header">
  <h3>Síntomas</h3>
</div>
<div class="card-body">
  <p class="card-text">En general, los síntomas principales de las infecciones por coronavirus pueden ser los siguientes. Dependerá del tipo de coronavirus y de la gravedad de la infección:</p>
  <p>- Tos</p>
  <p>- Dolor de garganta</p>
  <p>- Fiebre</p>
  <p>- Dificultad para respirar (disnea)</p>
  <p>- Dolor de cabeza</p>
  <p>- Escalofríos y malestar general</p>
  <p>- Secreción y goteo nasal</p>
  <p class="card-text">En espectro clínico de este tipo de infecciones varía desde la ausencia de síntomas hasta síntomas respiratorios leves o agudos. Esta tipología suele cursar con tos, fiebre y dificultades respiratorias. Es frecuente que haya neumonía y, en el caso del MERS, también se pueden registrar síntomas gastrointestinales, en especial, diarrea.</p>
  <p class="card-text">Tal y como ocurre con el virus de la gripe, los síntomas más graves (y la mayor mortalidad) se registra tanto en personas mayores como en aquellos individuos con inmunodepresión o con enfermedades crónicas como diabetes, algunos tipos de cáncer o enfermedad pulmonar crónica. En los casos más graves pueden ocasionar insuficiencia respiratoria.</p>
  <p class="card-text">En la pandemia de COVID-19 se ha constatado que en torno al 80% de las personas infectadas presentan síntomas leves.</p>
  <a href="https://www.google.com.mx/search?hl=es-419&ei=xSh9Xti9HaGV_QbYpaTYCQ&q=s%C3%ADntomas+del+coronavirus&oq=s%C3%ADntomas+del+coronavirus&gs_l=psy-ab.3..0i131l5j0l5.959222.963587..964877...0.0..0.882.5403.2-11j3j0j1j1......0....1..gws-wiz.......0i131i67j0i67j0i10.sWw_LCpNrSU&ved=0ahUKEwiYtP26lLnoAhWhSt8KHdgSCZsQ4dUDCAs&uact=5" class="btn btn-primary" target="_blank">Más búsquedas en Google</a>
</div>
<div class="card-footer text-muted">
  <img src="{{ asset('img/sintomas.jpg') }}" class="img-fluid" alt="Responsive image">
</div>
</div>
</div>
@endsection
