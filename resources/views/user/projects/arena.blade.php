@extends('layouts.app')
@section('content')
@section('body_color', '#FFFFFF;')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerArena.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Arena</h1>
			</div>
		</div>
	</section><!--Content-->
	<section>
		<div class="vlt-gap-0"></div>
		<div class="container">
			<div class="row"></div>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="text-justify">
							<div class="vlt-gap-15"></div>
							<hr>
							<p>Un espacio estratégico para consolidar a Medellín como un territorio de eventos que atraiga espectáculos de talla internacional, que dinamice y promueva la economía y el turismo. El proyecto consiste en la construcción de un centro de espectáculos con capacidad de albergar aproximadamente 16.000 espectadores. Arena Medellín es una Asociación público Privada de Iniciativa Privada sin desembolso de recursos públicos y será diseñada con características acústicas funcionales, contará con locales comerciales y parqueaderos. Por su condición multipropósito, estará en capacidad de albergar tanto eventos deportivos como culturales en la ciudad como: Ferias, Congresos, Charlas, Convenciones, Eventos religiosos, MMA, Boxeo, Freestyle Motocross, Skateboarding, Monster Truck.</p>
							<p>El proyecto será financiado 100% con recursos privados, en un contrato de concesión de 25 años. Actualmente la prefactibilidad se encuentra aprobada por la Agencia APP; y el originador se encuentra en fase de elaboración de factibilidad, que presentará en 2023, para Audiencia de terceros interesados.</p>
							<hr>
							<img alt="" src="{{asset('assets/img/Proyectos/Arena.png')}}"></div>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/proyectos/arena_medellin" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/proyectos/arena_medellin" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection