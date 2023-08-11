@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('assets/css/inm.css')}}">
</head>

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerGestionInmobiliaria.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Gestión inmobiliaria</h1>
			</div>
		</div>
	</section>
	<section class="post-list">
		<div class="content">
			<article class="post">
				<div class="post-header">
					<div class="post-img-1"></div>
				</div>
				<div class="post-body">
					<h5>Gestión de bienes inmuebles fiscales</h5><a class="post-link" href="{{route('user.projects.bienes')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-2"></div>
				</div>
				<div class="post-body">
					<span></span>
					<h5>Oportunidades inmobiliarias</h5><a class="post-link" href="{{route('user.projects.oportunidades')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-3"></div>
				</div>
				<div class="post-body">
					<h5>Estructuración de proyectos inmobiliarios</h5><a class="post-link" href="{{route('user.projects.inmobiliarios')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-4"></div>
				</div>
				<div class="post-body">
					<h5>Hotel y Centro de Negocios Plaza Mayor</h5><a class="post-link" href="{{route('user.projects.hotel')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-5"></div>
				</div>
				<div class="post-body">
					<span></span>
					<h5>Hotel Deportivo Villa Olímpica</h5><a class="post-link" href="{{route('user.projects.olimpica')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-6"></div>
				</div>
				<div class="post-body">
					<span></span>
					<h5>Prado Centro</h5><a class="post-link" href="{{route('user.projects.prado')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-7"></div>
				</div>
				<div class="post-body">
					<span></span>
					<h5>Expansión Museo de Antioquia</h5><a class="post-link" href="{{route('user.projects.museo')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-8"></div>
				</div>
				<div class="post-body">
					<h5>Centro de Comercios y Servicios La Aurora</h5><a class="post-link" href="{{route('user.projects.aurora')}}">Información</a>
				</div>
			</article>
		</div>
	</section>
	<script src="main.js">
	</script>
</body>

@endsection
