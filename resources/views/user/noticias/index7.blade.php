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
							<div class="post-img-22"></div>
						</div>
						<div class="post-body">
							<span>15/10/2021</span>
							<h5>Activación en el parque lleras</h5><a href="{{route('user.noticias.new22')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-21"></div>
						</div>
						<div class="post-body">
							<span>04/10/2021</span>
							<h5>Premio subdirección AEEP</h5><a href="{{route('user.noticias.new21')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-20"></div>
						</div>
						<div class="post-body">
							<span>30/09/2021</span>
							<h5>Incentivos bienes de interés cultural</h5><a href="{{route('user.noticias.new20')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-19"></div>
						</div>
						<div class="post-body">
							<span>26/09/2021</span>
							<h5>Portafolio de los artistas</h5><a href="{{route('user.noticias.new19')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-18"></div>
						</div>
						<div class="post-body">
							<span>23/09/2021</span>
							<h5>Clausura mes del patrimonio</h5><a href="{{route('user.noticias.new18')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-16"></div>
						</div>
						<div class="post-body">
							<span>04/09/2021</span>
							<h5>Arte urbano en el puente de la 4 sur</h5><a href="{{route('user.noticias.new16')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-17"></div>
						</div>
						<div class="post-body">
							<span>01/09/2021</span>
							<h5>Mes del patrimonio 2021</h5><a href="{{route('user.noticias.new17')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-14"></div>
						</div>
						<div class="post-body">
							<span>21/08/2021</span>
							<h5>Nominación Latam Smart City Awards</h5><a href="{{route('user.noticias.new14')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-1"></div>
						</div>
						<div class="post-body">
							<span>09/06/2021</span>
							<h5>Comerciantes tienen descuentos</h5><a href="{{route('user.noticias.new1')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-2"></div>
						</div>
						<div class="post-body">
							<span>25/03/2021</span>
							<h5>Entrega de jardines verdes</h5><a href="{{route('user.noticias.new2')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-3"></div>
						</div>
						<div class="post-body">
							<span>22/02/2021</span>
							<h5>Arena Medellín de talla mundial</h5><span></span> <a href="{{route('user.noticias.new3')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-4"></div>
						</div>
						<div class="post-body">
							<span>09/02/2021</span>
							<h5>Nuevos jardines verticales</h5><a href="{{route('user.noticias.new4')}}" target="_blank">
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
				</ul>
			</nav>
		</div>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
@endsection