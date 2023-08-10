@extends('layouts.app')
@section('content')
@section('body_color', '#FFFFFF;')
	
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/bg/4.jpg')}}">
			<div class="vlt-page-title-hero__content">
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<h1 class="vlt-page-title-hero__title" style="text-transform: none;">Modernización Unidad Deportiva Atanasio Girardot</h1>
						</div>
					</div>
				</div>
			</div><a class="vlt-scroll-to-arrow" href="#content"><i class="leedo-download-arrow"></i></a>
		</div>
		<div id="content"></div>
	</section><!--Content-->
	<section>
		<div class="vlt-gap-0"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 offset-md-9">
					<div class="vlt-particle d-flex justify-content-center" data-jarallax-element="100 0"><img alt="" src="{{asset('assets/img/root/particle-02.png')}}"></div>
				</div>
			</div>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="text-justify">
								<div class="vlt-gap-15"></div>
								<hr>
								<p>Avanzamos en este importante proyecto que le entregará a la ciudad un escenario de talla mundial, donde se puedan realizar grandes eventos deportivos, prácticas saludables, esparcimiento y turismo. La etapa de factibilidad está liderada por un equipo de expertos, conocedores de la Unidad Deportiva que, por su trayectoria, se presentan como una garantía de calidad de esta obra de interés nacional. La renovación de este espacio contempla las necesidades actuales de los habitantes, por lo que brindará mayor accesibilidad, comodidad, seguridad y más zonas para el encuentro y el disfrute ciudadano con una completa oferta de servicios como parqueaderos, restaurantes, locales comerciales y zonas VIP, entre otras.</p>
								<hr>
								<h3>Proyecto de pliegos MUDAG</h3>
								<hr>
								<p>La Alcaldía de Medellín, a través de la Agencia APP, público el proyecto de pliegos para la modernización de la Unidad Deportiva Atanasio Girardot – MUDAG, que se da después del cierre exitoso de la etapa de factibilidad, bajo el esquema de Asociación Público Privada. De esta manera inicia la materialización de ese sueño que tiene Medellín hace tantos años de contar con una Unidad Deportiva que cumpla con estándares internacionales, que además sirva como espacio de encuentro familiar, deportivo y cultural. Entre los múltiples beneficios de este proyecto estratégico, se encuentran:</p>
								<ul>
									<li>• Aporta en la consolidación del turismo y las actividades creativas, culturales y comerciales como vocación productiva para Medellín y el Área Metropolitana.</li>
									<li>• Promueve la atracción de empresas nacionales e internacionales multisectoriales, dando prioridad al alto valor agregado e intensivo en conocimiento, experiencia y capacidad financiera.</li>
									<li>• Con el proyecto serán 283.600 metros cuadrados intervenidos, de los cuales 129.000 pertenecen al estadio Atanasio Girardot, infraestructura en la que está enfocada la intervención central del proyecto.</li>
									<li>• La Modernización de la Unidad Deportiva Atanasio Girardot contará con un Hotel Deportivo, en la actual Villa Deportiva Antonio Roldán, con una capacidad para alojar 520 personas.</li>
								</ul><a href="{{route('user.projects.mudag')}}" target="_blank">
								<h5>Click para conocer más del Proyecto MUDAG</h5></a>
								<hr>
								<img alt="" src="{{asset('assets/img/Proyectos/estadio.png')}}"><br>
							</div>
						</div>
					</div>
				</div>
			</section>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/proyectos/estadio" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/proyectos/estadio" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection