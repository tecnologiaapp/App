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
							<div class="post-img-43"></div>
						</div>
						<div class="post-body">
							<span>02/12/2022</span>
							<h5>Socialización proyecto estadio</h5><a href="{{route('user.noticias.new43')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-42"></div>
						</div>
						<div class="post-body">
							<span>15/11/2022</span>
							<h5>Reducción en las tarifas de servicios públicos</h5><a href="{{route('user.noticias.new42')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-41"></div>
						</div>
						<div class="post-body">
							<span>04/11/2022</span>
							<h5>34 fachadas intervenidas en Alhambra</h5><a href="{{route('user.noticias.new41')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-40"></div>
						</div>
						<div class="post-body">
							<span>04/10/2022</span>
							<h5>Se potenciará el uso del espacio público</h5><a href="{{route('user.noticias.new40')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-39"></div>
						</div>
						<div class="post-body">
							<span>02/10/2022</span>
							<h5>Macromural artístico más grande de Medellín</h5><a href="{{route('user.noticias.new39')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-38"></div>
						</div>
						<div class="post-body">
							<span>30/09/2022</span>
							<h5>Prado, el único barrio patrimonial de Medellín</h5><a href="{{route('user.noticias.new38')}}" target="_blank">
							<h6><b>Leer más</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img-37"></div>
						</div>
						<div class="post-body">
							<span>08/09/2022</span>
							<h5>Intervención de la Fiesta del Patrimonio</h5><a href="{{route('user.noticias.new37')}}" target="_blank">
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
						<a class="page-link" href="{{route('user.noticias.index3')}}">Siguiente</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
@endsection