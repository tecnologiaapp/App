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
							<div class="post-img-36"></div>
						</div>
						<div class="post-body">
							<span>08/09/2022</span>
							<h5>Recorridos Fiesta del Patrimonio</h5><a href="{{route('user.noticias.new36')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-35"></div>
						</div>
						<div class="post-body">
							<span>17/08/2022</span>
							<h5>Cuidado del peatón en las vías</h5><a href="{{route('user.noticias.new35')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-34"></div>
						</div>
						<div class="post-body">
							<span>21/07/2022</span>
							<h5>Más de 1.500 empleos directos</h5><a href="{{route('user.noticias.new34')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-33"></div>
						</div>
						<div class="post-body">
							<span>07/07/2022</span>
							<h5>Bienal de la arquitectura</h5><a href="{{route('user.noticias.new33')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-32"></div>
						</div>
						<div class="post-body">
							<span>07/06/2022</span>
							<h5>Modernización del estadio</h5><a href="{{route('user.noticias.new32')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-31"></div>
						</div>
						<div class="post-body">
							<span>24/03/2022</span>
							<h5>Intercambiar conocimiento</h5><a href="{{route('user.noticias.new31')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-30"></div>
						</div>
						<div class="post-body">
							<span>23/03/2022</span>
							<h5>Convocatoria arte urbano</h5><a href="{{route('user.noticias.new30')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-29"></div>
						</div>
						<div class="post-body">
							<span>11/12/2021</span>
							<h5>Fachadas del Parque Olano</h5><a href="{{route('user.noticias.new29')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
				
				</div>
			</article>
			<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-center" style="padding-bottom: 40px;">
					<li class="page-item">
						<a class="page-link" href="javascript:history.back()">Anterior</a>
					</li>
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
						<a class="page-link" href="{{route('user.noticias.index4')}}">Siguiente</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
@endsection