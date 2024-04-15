@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('assets/css/pypa.css')}}">
</head>
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/BannersNuevos/BannerPaisajeyPatrimonio.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:black;">Gestión del Paisaje y Patrimonio</h1>
			</div>
		</div>
	</section>
	<div class="vlt-gap-60"></div>
	<section class="post-list">
		<div class="content">
			<article class="post">
				<div class="post-header">
					<div class="post-img-1"></div>
				</div>
				<div class="post-body">
					<h5>Plan Integral de Gestión de Prado</h5><a class="post-link" href="{{route('user.projects.gestion')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-2"></div>
				</div>
				<div class="post-body">
					<span></span>
					<h5>Edificio La Naviera</h5><a class="post-link" href="{{route('user.projects.naviera')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-3"></div>
				</div>
				<div class="post-body">
					<h5>Galería urbana a cielo abierto calle Barranquilla</h5><a class="post-link" href="{{route('user.projects.barranquilla')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-4"></div>
				</div>
				<div class="post-body">
					<span></span>
					<h5>Muros verdes</h5><a class="post-link" href="{{route('user.projects.muros')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-5"></div>
				</div>
				<div class="post-body">
					<span></span>
					<h5>Puentes y arte urbano</h5><a class="post-link" href="{{route('user.projects.puentes')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-6"></div>
				</div>
				<div class="post-body">
					<h5>Arte urbano en intercambio vial Bulerías</h5><a class="post-link" href="{{route('user.projects.bulerias')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-7"></div>
				</div>
				<div class="post-body">
					<span></span>
					<h5>Ciclorruta Norte - Sur</h5><a class="post-link" href="{{route('user.projects.cicloruta')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-8"></div>
				</div>
				<div class="post-body">
					<h5>Galería urbana calle 10, El Poblado</h5><a class="post-link" href="{{route('user.projects.poblado')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-9"></div>
				</div>
				<div class="post-body">
					<span></span>
					<h5>Parque Bolívar</h5><a class="post-link" href="{{route('user.projects.bolivar')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-10"></div>
				</div>
				<div class="post-body">
					<h5>Pasaje La Bastilla</h5><a class="post-link" href="{{route('user.projects.bastilla')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-11"></div>
				</div>
				<div class="post-body">
					<h5>Pasaje Junín</h5><a class="post-link" href="{{route('user.projects.junin')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-12"></div>
				</div>
				<div class="post-body">
					<h5>Avenida Jardín</h5><a class="post-link" href="{{route('user.projects.jardin')}}">Información</a>
				</div>
			</article>
			<article class="post">
				<div class="post-header">
					<div class="post-img-13"></div>
				</div>
				<div class="post-body">
					<h5>Aprovechamiento Económico del Espacio Público –AEEP–</h5><a class="post-link" href="{{route('user.projects.aeep')}}">Información</a>
				</div>
			</article>
		</div>
	</section>
	<script src="main.js">
	</script>
</body>


@endsection
