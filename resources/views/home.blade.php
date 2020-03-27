@extends('layouts.app')
@section('title','Inicio')
@section('content')
<div class="container" style="margin-top:70px;">
  <div class="card text-center">
<div class="card-header">
  <h3>¿Qué es el coronavirus?</h3>
</div>
<div class="card-body">
  <p class="card-text">Los coronavirus son una familia de virus que se descubrió en la década de los 60 pero cuyo origen es todavía desconocido. Sus diferentes tipos provocan distintas enfermedades, desde un resfriado hasta un síndrome respiratorio grave (una forma grave de neumonía).</p>
  <p class="card-text">Gran parte de los coronavirus no son peligrosos y se pueden tratar de forma eficaz. De hecho, la mayoría de las personas contraen en algún momento de su vida un coronavirus, generalmente durante su infancia. Aunque son más frecuentes en otoño o invierno, se pueden adquirir en cualquier época del año.</p>
  <p class="card-text">El coronavirus debe su nombre al aspecto que presenta, ya que es muy parecido a una corona o un halo. Se trata de un tipo de virus presente tanto en humanos como en animales.</p>
  <p class="card-text">En los últimos años se han descrito tres brotes epidémicos importantes causados por coronavirus:</p>
  <p class="card-text"><b>SRAS-CoV:</b> El síndrome respiratorio agudo y grave (SRAS, también conocido como SARS y SRAG) se inició en noviembre de 2002 en China, afectó a más de 8.000 personas en 37 países y provocó más de 700 muertes. La mortalidad del SRAS-Cov se ha cifrado en el 10% aproximadamente.</p>
  <p class="card-text"><b>MERS-CoV:</b> El coronavirus causante del síndrome respiratorio de Oriente Medio (MERS) fue detectado por primera vez en 2012 en Arabia Saudita. Se han notificado hasta octubre de 2019 más de 2.400 casos de infección en distintos países, con más de 800 muertes. La letalidad es, por tanto, del 35%.</p>
  <p class="card-text"><b>COVID-19:</b> A finales de diciembre de 2019 se notificaron los primeros casos de un nuevo coronavirus en la ciudad de Wuhan (China). Desde entonces el goteo de nuevos infectados por el virus SARS-CoV-2 (inicialmente llamado 2019nCoV), que provoca el COVID-19, ha sido continuo y su transmisión de persona a persona se ha acelerado. Los casos declarados de nemonía de Wuhan ya superan con creces a los de la epidemia de SRAS, pero la tasa de letalidad es más baja.</p>
  <p class="card-text">La Organización Mundial de la Salud (OMS) ha declarado la situación de pandemia. Hay personas infectadas en la mayoría de los países y los profesionales sanitarios insisten en la necesidad de seguir las medidas preventivas y evitar la alarma social.</p>
  <p class="card-text">En España y otros países se ha decretado el estado de alarma y las autoridades sanitarias insisten en la necesidad de permanecer en casa para contener la transmisión.</p>
  <a href="https://www.google.com/search?ei=aS99XsLcFdCp_Qa7mproBg&q=que+es+el+coronavirus&oq=que+es+el+coronavirus&gs_l=psy-ab.3.0.0i131l4j0l2j0i131j0l2j0i3.210846.213661..215746...0.0..0.440.3831.2-4j7j1......0....1..gws-wiz.QbfikMrb99w" class="btn btn-primary" target="_blank">Más búsquedas en Google</a>
</div>
<div class="card-footer text-muted">
  <img src="{{ asset('img/coronavirus.jpg') }}" class="img-fluid" alt="Responsive image">
</div>
</div>
</div>
@endsection
