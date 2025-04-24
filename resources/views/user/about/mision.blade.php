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
				<h2>Código de Integridad</h2>
			</div>
			<br>
			<h1 class="subt-m">Valores de los servidores públicos y colaboradores:</h1>
			<a href="https://app.gov.co/assets/pdf/codigointegridadapp.pdf" target="_blank">Ver documento >></a>
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