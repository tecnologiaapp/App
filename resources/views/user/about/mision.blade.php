@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerMisionYvision.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Misíon y Visión</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="container mt-5 text-justify">
			<div class="section-title"  style="padding-bottom: 0">
				<h2>Misión</h2>
			</div>
			<p class="normal-text">Poner en valor el sistema público y colectivo de la ciudad, generando beneficio social y aumentando la inversión pública y privada.</p>
			<br>
			<div class="section-title" style="padding-bottom: 0">
				<h2>Visión</h2>
			</div>
			<p class="normal-text">En el año 2034 seremos la entidad de mayor CONFIANZA Y EFICIENCIA de Medellín, para realizar alianzas Público-Privadas en PROYECTOS de ciudad.</p>
			<br>
			<div class="section-title"  style="padding-bottom: 0">
				<h2>Principios de integridad</h2>
			</div>
			<p class="normal-text">La <b>transparencia</b> en todos sus actos, poniendo a disposición de los diferentes grupos de valor y de interés información clara, completa, veraz y oportuna sobre la gestión y ejecución de recursos.</p>
			<p class="normal-text"><b>Servicio oportuno</b> y de utilidad que facilita las actividades internas y satisface las necesidades de los usuarios.</p>
			<p class="normal-text">La <b>cooperación</b> entre la Agencia APP y sus aliados estratégicos; y en el trabajo en equipo, reconociendo y apreciando la singularidad de cada uno y de aquello que tiene para contribuir con los demás al esfuerzo común.</p>
			<br>
			<div class="section-title"  style="padding-bottom: 0">
				<h2>Valores institucionales</h2>
			</div>
			<h1 class="subt-m">Confianza:</h1>
			<p class="normal-text">Creemos firmemente en nosotros como equipo y en la importancia del trabajo colaborativo y participativo entre las entidades públicas, privadas y la sociedad.</p>
			<br>
			<h1 class="subt-m">Proactividad:</h1>
			<p class="normal-text">Creemos firmemente en nosotros como equipo y en la importancia del trabajo colaborativo y participativo entre las entidades públicas, privadas y la sociedad.  </p>
			<br>
			<h1 class="subt-m">Transparencia:</h1>
			<p class="normal-text">Actuamos con veracidad y transparencia, bajo parámetros éticos y de integralidad, propiciando el seguimiento y control por parte de las entidades que nos vigilan y la ciudadanía en general.</p>
		</div>
	</section>

	<footer class="vlt-single-post__footer">
		<!--Post Tags-->
		<!--Post Share-->
		<section style="background-color: transparent;">
			<div class="vlt-gap-100"></div>
			<div class="container">
				<!--Animation Block-->
				<div class="vlt-animation-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">
					<!--Social Share-->
					<div class="vlt-social-share text-center">
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/somos-app/mision-vision" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/somos-app/mision-vision" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection