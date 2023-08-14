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
					<article class="post">
						<div class="post-header">
							<div class="post-img-28"></div>
						</div>
						<div class="post-body">
							<span>02/12/2021</span>
							<h5>Entrega intervención puente 4 sur</h5><a href="{{route('user.noticias.new28')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-27"></div>
						</div>
						<div class="post-body">
							<span>26/11/2021</span>
							<h5>ADN del barrio patrimonial Prado</h5><a href="{{route('user.noticias.new27')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-26"></div>
						</div>
						<div class="post-body">
							<span>03/11/2021</span>
							<h5>La Naviera ilumina el Centro</h5><a href="{{route('user.noticias.new26')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-25"></div>
						</div>
						<div class="post-body">
							<span>02/11/2021</span>
							<h5>El corazón del Centro se llena de luz</h5><a href="{{route('user.noticias.new25')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-24"></div>
						</div>
						<div class="post-body">
							<span>01/11/2021</span>
							<h5>Convenio con Agencia APP</h5><a href="{{route('user.noticias.new24')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-23"></div>
						</div>
						<div class="post-body">
							<span>22/10/2021</span>
							<h5>Proyecto de arte urbano - punto cero</h5><a href="{{route('user.noticias.new23')}}" target="_blank">
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
						<a class="page-link" href="{{route('user.noticias.index7')}}">Siguiente</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
@endsection