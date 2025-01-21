@extends('layouts.app')
@section('content')
@section('body_color', '#FEF38F;')

<head>
<link  href="{{ asset('assets/css/noticia.css') }}" rel="stylesheet">
</head>

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerParticipa.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Rendición de cuentas</h1>
			</div>
		</div>
	</section>

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/bg/5.jpg')}}">
			<div class="vlt-page-title-hero__content">
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<h1 class="vlt-page-title-hero__title" style="text-transform: none;">Rendición de cuentas</h1>
						</div>
					</div>
				</div>
			</div><a class="vlt-scroll-to-arrow" href="#content"><i class="leedo-download-arrow"></i></a>
		</div>
		<div id="content"></div>
	</section><!--Content-->





	<div class="vlt-single-post-wrapper vlt-single-post-wrapper--style-1">
		<div class="container">
			<article class="vlt-single-post">
				<div class="content">
					<article class="post">
						<div class="post-body">
							<h5 style="font-size: 45px">2024</h5><a href="#" target="_blank"><h6><b>Consultar</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-body">
							<h5 style="font-size: 45px">2023</h5><a  href="https://issuu.com/agenciaappmed/docs/revista_rendici_n_de_cuentas_agencia_app" target="_blank"><h6><b>Consultar</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-body">
							<h5 style="font-size: 45px">2022</h5><a  href="{{ route('user.rendition.cuentas-2022') }}" target="_blank"><h6><b>Consultar</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-body">
							<h5 style="font-size: 45px">2021</h5><a  href="{{ asset('assets/pdf/Rendición-de-cuentas-2021.pdf')}}" target="_blank"><h6><b>Participa</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-body">
							<h5 style="font-size: 45px">2020</h5><a  href="{{ asset('assets/pdf/Rendicion-2020.pdf')}}" target="_blank"><h6><b>Consultar</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-body">
							<h5 style="font-size: 45px">2019</h5><a  href="{{ asset('assets/pdf/Rendicion-2019.pdf')}}" target="_blank"><h6><b>Consultar</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-body">
							<h5 style="font-size: 45px">2018</h5><a  href="{{ asset('assets/pdf/Rendicion-2018.pdf')}}" target="_blank"><h6><b>Consultar</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-body">
							<h5 style="font-size: 45px">2017</h5><a  href="{{ asset('assets/pdf/Rendicion-2017.pdf')}}" target="_blank"><h6><b>Consultar</b></h6></a>
						</div>
					</article>
				</div>
			</article>
		</div>
	</div>




	<section>
		<div class="vlt-gap-120"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 offset-md-9"></div>
			</div>
			<section>
				<h1>Evaluación de la rendición de cuentas</h1>
				<p>En este formulario podrás realizar la evaluación de la rendición de cuentas:&nbsp;<a href="https://forms.gle/rnjmKEwbqVMSbDa76" target="_blank">https://forms.gle/rnjmKEwbqVMSbDa76</a></p>
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
							<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/rendici%C3%B3n/de/cuentas/evaluacion" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/rendici%C3%B3n/de/cuentas/evaluacion" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
						</div>
					</div>
				</div>
				<div class="vlt-gap-100"></div>
			</section>
		</footer>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection