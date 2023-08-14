@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')

<head>
<link  href="{{ asset('assets/css/noticia.css') }}" rel="stylesheet">
</head>
	
<div class="vlt-single-post-wrapper vlt-single-post-wrapper--style-1">
		<section class="bannerT">
			<a target="_blank"><img class="img-fluid img-banner-t" src="{{asset('assets/img/Banners/Noticias.jpg')}}"></a>
		</section>
		<div class="container">
			<article class="vlt-single-post">
				<div class="vlt-animation-block mb-5 text-center" data-aos="fade" data-aos-delay="0">
					<h1 class="m-0 ocultPosition" style="font-size: 4rem;"><span class="vlt-highlight">Noticias</span></h1>
				</div>
				<div class="content">
					<article class="post">
						<div class="post-header">
							<div class="post-img-52"></div>
						</div>
						<div class="post-body">
							<span>14/08/2023</span>
							<h5>Entrega Muro Verde</h5><a href="{{route('user.noticias.new52')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-51"></div>
						</div>
						<div class="post-body">
							<span>24/05/2023</span>
							<h5>Arte en el Lleras</h5><a href="{{route('user.noticias.new51')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-50"></div>
						</div>
						<div class="post-body">
							<span>02/05/2023</span>
							<h5>Constelaciones, destino turístico y cultural</h5><a href="{{route('user.noticias.new50')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-49"></div>
						</div>
						<div class="post-body">
							<span>02/05/2023</span>
							<h5>Abrazo del Parque Lleras</h5><a href="{{route('user.noticias.new49')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-48"></div>
						</div>
						<div class="post-body">
							<span>27/04/2023</span>
							<h5>Iluminación Nutibara</h5><a href="{{route('user.noticias.new48')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-47"></div>
						</div>
						<div class="post-body">
							<span>16/03/2023</span>
							<h5>Aprobadas vigencias futuras para la cárcel</h5><a href="{{route('user.noticias.new47')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-46"></div>
						</div>
						<div class="post-body">
							<span>07/03/2023</span>
							<h5>Más de 4.600 empleos en el sector de Provenza</h5><a href="{{route('user.noticias.new46')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-45"></div>
						</div>
						<div class="post-body">
							<span>01/02/2023</span>
							<h5>Obra ganadora de Concéntrico en Medellín</h5><a href="{{route('user.noticias.new45')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
				
				</div>
			</article>
			<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-center" style="padding-bottom: 40px;">
					<li class="page-item">
						<a class="page-link" href="{{route('user.transparency.boletin')}}">1</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="{{route('user.noticias.index2')}}">2</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="{{route('user.noticias.index3')}}">3</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="{{route('user.noticias.index4')}}">4</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="{{route('user.noticias.index5')}}">5</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="{{route('user.noticias.index6')}}">6</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="{{route('user.noticias.index7')}}">7</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="{{route('user.noticias.index2')}}">Siguiente</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
@endsection