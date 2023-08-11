@extends('layouts.app')
@section('content')
@section('body_color', '#ffffff;')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerRendicionDeCuentas.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Rendición de cuentas</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 offset-md-9"></div>
			</div>
			<section>
				<div class="section-title">
					<h2>Rendición de cuentas 2020</h2>
				</div><embed height="220" src="{{asset('assets/pdf/Rendicion-2020.pdf')}}" type="application/pdf" width="300">
				<hr>
				<div class="section-title">
					<h2>Formato de inscripción de preguntas para la audiencia pública</h2>
				</div>
				<p class="text-center">Si tienes preguntas, propuestas o van a asistir, diligenciar el siguiente formulario</p>
			    <p class="text-center"><a class="link-cuentas" href="https://forms.gle/2JhpRm9Zui6CGwMY9" target="_blank">https://forms.gle/2JhpRm9Zui6CGwMY9</a></p>	
			</section>
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
							<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/rendici%C3%B3n/de/cuentas/cuentas" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/rendici%C3%B3n/de/cuentas/cuentas" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
						</div>
					</div>
				</div>
				<div class="vlt-gap-100"></div>
			</section>
		</footer>
	</section>

@endsection