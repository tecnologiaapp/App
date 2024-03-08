@extends('layouts.app')
@section('body_color', '#ffffff;')
@push('styles')

@endpush
@section('content')
<head>
	<style>
		section {
	padding: 30px 0;
	overflow: hidden;
  }
  .disable-scroll {
    overflow: hidden;
    height: 100vh;
  }
	</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<section class="bannersHome" style="padding-top:125px; position: relative;">
		<div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
			<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
				<li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
				<li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
				<li data-slide-to="3" data-target="#carouselExampleIndicators"></li>
				</ol>
			<div class="carousel-inner">
			<div class="carousel-item active">
					<a href="https://www.youtube.com/watch?v=lh9yWdoMpDU&ab_channel=Alcald%C3%ADadeMedell%C3%ADn"><img class="d-block w-100" src="{{asset('assets/img/Banners/Medellin_somo_todos.jpg')}}"></a>
				</div>
			    <div class="carousel-item">
					<a href="{{asset('assets/pdf/Arquitectura-Moderna.pdf')}}"><img class="d-block w-100" src="{{asset('assets/img/Banners/Banner-web_Mesadetrabajo.jpg')}}"></a>
				</div>
			    <div class="carousel-item">
				    <a href="{{asset('assets/pdf/Resolución-030.pdf')}}"><img class="d-block w-100" src="{{asset('assets/img/Banners/Banner-horario-especial.jpg')}}"></a>
				</div>
			    <div class="carousel-item">
					<a href="{{route('user.projects.mudag')}}"><img class="d-block w-100" src="{{asset('assets/img/Banners/bannerHome1.jpg')}}"></a>
				</div>
				<div class="carousel-item">
					<a href="{{route('user.noticias.new50')}}"><img  class="d-block w-100" src="{{asset('assets/img/Banners/bannerHome2.jpg')}}"></a>
				</div>
			</div><button class="carousel-control-prev" data-slide="prev" data-target="#carouselExampleIndicators" onclick="disableScroll()" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></button> <button class="carousel-control-next" data-slide="next" data-target="#carouselExampleIndicators" onclick="disableScroll()" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></button>
		</div>
	</section>
	<section class="about" id="about">
		<div class="container aos-init aos-animate" data-aos="fade-up">
			<div class="section-title">
				<h2>Sobre nosotros</h2>
			</div>
			<div class="row content">
				<div class="col-center">
					<p>La Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas – APP-, es un ente con carácter descentralizado adscrito a la Alcaldía de Medellín; Una unidad administrativa especial, del orden municipal, con personería jurídica, autonomía administrativa, financiera, presupuestal y patrimonial, que hace parte del Presupuesto General del Distrito Especial de Ciencia, Tecnología e Innovación de Medellín con lo establecido en el artículo 3 del Decreto 006 de 1998.</p>
					<p>Tenemos como misión gestionar y promover acciones que den sostenibilidad al espacio público, al paisaje y al patrimonio. Además, responsables de promover la generación de recursos a través de la implementación de los instrumentos de financiación definidos en el Plan de Ordenamiento Territorial y fomentar la incorporación de capitales privados a proyectos de inversión para beneficio público.</p>
				</div>
			</div>
			<div class="section-title">
				<h2>¿Qué hacemos en la Agencia APP?</h2>
			</div>
			<div class="col-center listHome">
				<ul>
					<li><img alt="Icono" height="50px;" src="{{asset('assets/img/icon1.png')}}" width="50px;"> Desarrollamos Alianzas Público Privadas (APP) para entregarle a Medellín nuevas obras estratégicas y de alto impacto.</li>
					<li><img alt="Icono" height="50px;" src="{{asset('assets/img/icon2.png')}}" width="50px;"> Fomentamos la incorporación de capitales privadas a proyectos de inversión para beneficio público.</li>
					<li><img alt="Icono" height="50px;" src="{{asset('assets/img/icon3.png')}}" width="50px;"> Mejoramos el paisaje urbano con arte urbano, muros verdes, jardines verticales y pasos de fauna.</li>
					<li><img alt="Icono" height="50px;" src="{{asset('assets/img/icon4.png')}}" width="50px;"> Contribuimos al cuidado del patrimonio y de los Bienes de interés Cultural (BIC).</li>
					<li><img alt="Icono" height="50px;" src="{{asset('assets/img/icon5.png')}}" width="50px;"> Operamos el instrumento de Aprovechamiento Económico del Espacio Público (AEEP) para consolidar la reactivación económica y generar espacios de calidad para comerciantes y ciudadanos.</li>
					<li><img alt="Icono" height="50px;" src="{{asset('assets/img/icon6.png')}}" width="50px;"> Gestionamos bienes inmuebles del Distrito para proyectar nuevos usos.</li>
				</ul>
			</div>
		</div>
	</section><!-- ======= Counts Section ======= -->
	<section class="countas" id="countas">
		<div class="container">
			<div class="row counters position-relative">
				<div class="col-lg-4 col-6 text-center">
					<div align="center">
						<h2 class="counter-number" style="display: inline-block; margin: 15px 0; font-size: 35px; color: #ffffff;">29544</h2><span style="font-size:25px;padding-left: 5px;"><b>m²</b></span>
						<p><b>de nuevo arte urbano en Medellín.</b></p>
					</div>
				</div>
				<div class="col-lg-4 col-6 text-center">
					<div align="center">
						<h2 class="counter-number" style="display: inline-block; margin: 15px 0; font-size: 35px; color: #ffffff;">8337</h2><span style="font-size:25px;padding-left: 5px;"><b>m²</b></span>
						<p><b>de espacio público para el encuentro y el disfrute ciudadano.</b></p>
					</div>
				</div>
				<div class="col-lg-4 col-6 text-center">
					<div align="center">
						<h2 class="counter-number" style="display: inline-block; margin: 15px 0; font-size: 35px; color: #ffffff;">2</h2>
						<p><b>APP de iniciativa pública estructuradas y en proyecto de pliegos.</b></p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Counts Section -->
	<!-- ======= Features Section ======= -->
	<section class="features" id="features">
		<div class="container">
			<div class="section-title">
				<h2>Novedades</h2>
			</div>
			<div class="newsHome1 row gy-4 align-items-center features-item aos-init aos-animate" data-aos="fade-up">
				<div class="col-md-5">
					<a href="{{route('user.noticias.new50')}}" target="_blank"><img class="img-fluid" src="assets/img/Galeria/constelaciones/1.png"></a>
				</div>
				<div class="col-md-7">
					<h3 class="text-white">Constelaciones, el mural artístico más grande de Medellín, se potencia como nuevo destino turístico y cultural</h3>
					<p class="text-white">La Alcaldía de Medellín entregó a la ciudadanía el mural artístico más grande de la ciudad, Constelaciones, una obra de 14.819 metros cuadrados de nuevo arte urbano que comprende la intervención de más de 500 casas y 30 murales artísticos realizados por cuatro colectivos y dos artistas urbanos.</p>
				</div>
			</div><br>
			<div class="newsHome2 row gy-4 align-items-center features-item aos-init aos-animate" data-aos="fade-up">
				<div class="col-md-5 order-1 order-md-2">
					<a href="{{route('user.noticias.new49')}}" target="_blank"><img alt="" class="img-fluid" src="assets/img/Galeria/lleras/1.png"></a>
				</div>
				<div class="col-md-7 order-2 order-md-1">
					<h3>Ciudadanos y turistas en Medellín ya disfrutan del abrazo del Parque Lleras</h3>
					<p>El Parque Lleras, referente comercial y turístico de Medellín, está nuevamente al servicio de los habitantes de la ciudad y de los visitantes que a diario llegan a disfrutar de los atractivos de la capital antioqueña. La Administración Distrital realizó en este sitio una intervención integral que permitió la renovación de 12.859 m2 de espacio público para dar prioridad a la movilidad peatonal, a la cultura, a las zonas verdes y a los espacios para compartir.</p>
				</div>
			</div><br>
			<div class="newsHome3 row gy-4 align-items-center features-item aos-init aos-animate" data-aos="fade-up">
				<div class="col-md-5">
					<a href="{{route('user.noticias.new48')}}" target="_blank"><img alt="" class="img-fluid" src="assets/img/Galeria/nutibara/noticia.png"></a>
				</div>
				<div class="col-md-7">
					<h3 class="text-white">Con la entrega de la iluminación del Hotel Nutibara, el Distrito promueve el turismo y la seguridad en el Centro de Medellín</h3>
					<p class="text-white">En una apuesta por la transformación urbana, el mejoramiento del paisaje urbano y de la seguridad, y la cualificación de fachadas arquitectónicas del Centro tradicional de Medellín, el Distrito, a través de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas -Agencia APP-, entregó la iluminación del emblemático Hotel Nutibara.</p>
				</div>
			</div>
		</div>
	</section>

@endsection

@push('scripts')
<script>
$(document).ready(function() {
  $('.counter-number').each(function() {
    var countTo = parseInt($(this).text().replace(',', ''));
    $(this).prop('Counter', 0).animate({
      Counter: countTo
    }, {
      duration: 3000,
      easing: 'swing',
step: function(now) {
$(this).text(addCommas(Math.ceil(now)));
}
});
});

function addCommas(nStr) {
nStr += '';
var x = nStr.split('.');
var x1 = x[0];
var x2 = x.length > 1 ? '.' + x[1] : '';
var rgx = /(\d+)(\d{3})/;
while (rgx.test(x1)) {
x1 = x1.replace(rgx, '$1' + '.' + '$2');
}
return x1 + x2;
}
});
</script>
<script>
  function disableScroll() {
    // Desactivar el desplazamiento en el cuerpo del documento
    document.body.style.overflow = 'hidden';

    // Volver a habilitar el desplazamiento después de un breve retraso
    setTimeout(function() {
      document.body.style.overflow = '';
    }, 500); // Ajusta este valor según sea necesario para sincronizar con la duración de la animación del carrusel
  }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
@endpush
