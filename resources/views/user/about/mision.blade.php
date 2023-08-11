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
<div class="vlt-single-post-wrapper vlt-single-post-wrapper--style-1">
		<div class="container">
			<article class="vlt-single-post">
				<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
					<h1><span class="subt-m">Misión</span></h1>
				</div>
				<p>Contribuir al desarrollo del municipio de Medellín, mediante el sostenimiento, la cualificación del paisaje urbano y el embellecimiento del sistema público-colectivo, la puesta en valor del patrimonio arquitectónico; el aprovechamiento de oportunidades inmobiliarias y la estructuración de proyectos de ciudad, mediante sinergias entre los sectores público y privado.</p>
				<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
					<h1><span class="subt-m">Visión</span></h1>
				</div>
				<p>En 2025 seremos reconocidos en el departamento de Antioquia como un aliado estratégico para el desarrollo de proyectos de ciudad que buscan el mejoramiento del sistema público-colectivo a través del embellecimiento, la cualificación del paisaje urbano y la participación del sector privado.</p>
			</article>
		</div>
	</div>
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