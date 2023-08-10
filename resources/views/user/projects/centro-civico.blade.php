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
							<h1 class="vlt-page-title-hero__title" style="text-transform: none;">Centro Cívico</h1>
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
								<p>Avanzamos en los estudios de prefactibilidad para consolidar el Centro Cívico de la ciudad como un área destinada a los negocios, las convenciones y el esparcimiento, apto para recibir grandes eventos internacionales y nacionales, y catalogar a Medellín como un territorio propicio para dinamizar la economía. Igualmente, buscamos conectar esta importante área con las dinámicas urbanas propias de otros proyectos estratégicos y de espacio público como Parques del Río Medellín y el Cerro Tutelar Nutibara.</p>
								<hr>
								<div align="center"><img alt="" src="{{asset('assets/img/Proyectos/Centro-civico.webp')}}"></div>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/proyectos/centro_civico" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/proyectos/centro_civico" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection