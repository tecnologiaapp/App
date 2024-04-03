@extends('layouts.app')
@section('content')
@section('body_color', '#ffffff;')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerGaleriaUrbana.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Galería urbana Calle 10 - El Poblado</h1>
			</div>
		</div>
	</section>
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
								<p>Entre las carreras 46 y 32d, alrededor del Parque de El Poblado y la avenida El Poblado, intervenimos de color 26.000 m2 con 40 murales, 60 cortinas metálicas y 7 muros verdes en medianeros. Es un proyecto de cualificación del paisaje urbano en un corredor estratégico para la ciudad que busca la intervención de las fachadas a través de su mejoramiento integral y la regulación de los avisos publicitarios bajo la modalidad de participación público-privado. 88 propietarios y artistas se vincularon, y fueron intervenidos 48 predios con beneficios como mejoramiento de la percepción de seguridad, crear un museo al aire libre de expresiones artísticas, atraer nuevos clientes a actividades comerciales y cumplir la norma en avisos y elementos de fachada.</p>
								<hr>
								<div align="center"><img alt="" src="{{asset('assets/img/Proyectos/imgGaleriaUrbana.png')}}"></div>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/proyectos/el_poblado" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/proyectos/el_poblado" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection