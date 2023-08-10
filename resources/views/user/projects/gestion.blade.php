@extends('layouts.app')
@section('content')
@section('body_color', '#FFFFFF;')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerPlanIntegralDeGestionDePrado.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Plan integral de gestión de prado</h1>
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
								<p>Sus grandes casonas, los diversos estilos arquitectónicos en las fachadas, las historias que reflejan las costumbres de una época, la riqueza natural, sus amplias vías y su nuevo parque hacen de Prado, en la comuna La Candelaria, uno de los barrios de Medellín con más cualidades para convertirse en un espacio para el encuentro ciudadano. Por ello, realizamos varias acciones: branding y marketing territorial para atraer la inversión pública y privada; diseño, gestión e intervención del espacio público en la carrera Palacé, entre las calles 58 y 67, con 11.800 m2 intervenidos, 34 árboles sembrados y 413 conservados, 501 plantas menores conservadas y nuevas zonas de estancia con mobiliario urbano; embellecimiento de fachadas y medianeros, en alianza con la Fundación Pintuco, de 114 inmuebles declarados y no declarados patrimoniales; e iluminación de 28 bienes de interés cultural localizados sobre la carrera Palacé.</p>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/proyectos/gestion_prado" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/proyectos/gestion_prado" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection