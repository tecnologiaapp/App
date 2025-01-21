@extends('layouts.app')
@section('content')
@section('body_color', '#ffffff;')

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




	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection