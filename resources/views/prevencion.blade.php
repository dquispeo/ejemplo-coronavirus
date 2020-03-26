@extends('layouts.app')
@section('title','Prevención')
@section('content')
<div class="container" style="margin-top:70px;">
  <div class="card text-center">
<div class="card-header">
  <h3>Prevención</h3>
</div>
<div class="card-body">
  <p class="card-text">Hasta la fecha no se dispone de vacuna alguna ni de tratamiento específico para combatir la infección por coronavirus.</p>
  <p class="card-text">Mantener una higiene básica es la forma más eficaz de evitar contraer este virus en los lugares en los que existe un mayor riesgo de transmisión, fundamentalmente las zonas en las que se han registrado casos. Es conveniente lavarse las manos con frecuencia y evitar el contacto con personas ya infectadas, protegiendo especialmente ojos, nariz y boca. A las personas infectadas (o que crean que pueden estarlo) se les aconseja el uso de mascarillas y usar pañuelos para cubrirse la nariz y la boca cuando se tose o se estornuda.</p>
  <p class="card-text">Las personas infectadas por el virus que causa el COVID-19 deben guardar cuarentena desde el diagnóstico de la enfermedad hasta 15 días después de ser dadas de alta. Así lo aconseja la OMS porque se ha observado que, aunque ya estén recuperadas, pueden seguir transmitiendo la infección.</p>
  <p class="card-text">La población general sana no necesita utilizar mascarillas, ya que ayudan a prevenir la transmisión del virus si las llevan las personas que están enfermas. El Ministerio de Sanidad advierte de que un uso inadecuado de mascarillas puede contribuir al desabastecimiento en aquellas situaciones para las que están indicadas.</p>
  <p class="card-text">Las medidas preventivas deben seguirlas especialmente aquellas personas que padezcan diabetes, insuficiencia renal, neumopatía crónica o inmunodepresión, ya que tienen más riesgo de padecer enfermedad grave en caso de infección por coronavirus.</p>
  <a href="https://www.google.com.mx/search?hl=es-419&source=hp&ei=uSh9XsysFqvv_Qbe47vICw&q=como+prevenir+el+coronavirus&oq=como+prevenir+el+co&gs_l=psy-ab.3.0.0i131j0l9.1895.10700..11660...6.0..2.596.8361.2j0j22j2j1j2......0....1..gws-wiz.....0..0i10.gjEQxkMflRk" class="btn btn-primary" target="_blank">Más búsquedas en Google</a>
</div>
<div class="card-footer text-muted">
  <img src="{{ asset('img/prevencion.png') }}" class="img-fluid" alt="Responsive image">
</div>
</div>
</div>
@endsection
