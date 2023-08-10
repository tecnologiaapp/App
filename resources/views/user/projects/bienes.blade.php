@extends('layouts.app')
@section('content')
@section('body_color', '#ffffff;')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerGestionDeBienesInmueblesFiscales.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Gestión de bienes inmuebles fiscales</h1>
			</div>
		</div>
	</section><!--Content-->
	<section>
		<div class="vlt-gap-0"></div>
		<div class="container">
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="text-justify">
								<div class="vlt-gap-15"></div>
								<hr>
								<p>Gestión de diferentes procesos para identificar y priorizar oportunidades dentro del inventario de bienes inmuebles fiscales propiedad del Municipio de Medellín y sus entidades descentralizadas (gestión económica de bienes inmuebles fiscales), para recomendar aquellos que pueden ser susceptibles de ser aprovechados económicamente a través de un contrato de arrendamiento y venta (bienes improductivos-plan de ventas) o ser incorporados a proyectos inmobiliarios (bienes productivos-plan rector inversión público privada), mediante el análisis, evaluación y estructuración de proyectos entre el sector público y el privado.</p>
								<hr>
								<div align="center"><img alt="" src="{{asset('assets/img/Proyectos/imgGestionDeBienesInmueblesFiscales.png')}}"></div>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/proyectos/inmuebles_fiscales" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/proyectos/inmuebles_fiscales" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection