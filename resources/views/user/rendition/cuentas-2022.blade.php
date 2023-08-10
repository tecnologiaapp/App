@extends('layouts.app')
@section('content')
@section('body_color', '#ffffff;')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/bg/5.jpg')}}">
			<div class="vlt-page-title-hero__content">
				<h1 style="color:white;">Rendición de cuentas</h1>
			</div>
		</div>
	</section><!--Content-->
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container">
			<section class="mb-5 pb-5">
				<div class="section-title">
					<h2>Rendición de cuentas 2022</h2>
				</div><iframe height="800px" src="{{asset('assets/pdf/informe-rendicion-de-cuentas-linea-1.pdf')}}" width="100%"></iframe>
				<div class="section-title pt-5">
					<h2>Rendición de cuentas Ecociudad</h2>
				</div><iframe height="800px" src="{{asset('assets/pdf/Informe-RPC-Linea-4-Ecociudad-1.pdf')}}" width="100%"></iframe>
				<div class="section-title pt-5">
					<h2>Rendición de cuentas Gobernanza</h2>
				</div><iframe height="800px" src="{{asset('assets/pdf/rendicion-publica-linea-de-gobernanza-y-gobernabilidad-.pdf')}}" width="100%"></iframe>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/rendici%C3%B3n/de/cuentas2021" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/rendici%C3%B3n/de/cuentas2021" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection