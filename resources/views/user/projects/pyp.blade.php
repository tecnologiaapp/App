@extends('layouts.app')
@section('body_color', '#f3f5fa;')
@section('content')

<style>
*{
	margin:0;
	padding:0;
	box-sizing:border-box;
}

.post-list{
	display:flex;
	min-height:100vh;
	align-items:center;
	justify-content:center;
	padding:100px 15px;
}

.content{
	display:grid;
	grid-template-columns: repeat(3,1fr);
	grid-gap:20px;
	max-width:1000px;
	margin:auto;
}

.post-img-1{    
	background-image: url("{{ asset('assets/img/Proyectos/Gestion-prado.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-2{
	background: url("{{ asset('assets/img/Proyectos/naviera.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-3{
	
	background: url("{{ asset('assets/img/Proyectos/Barranquilla.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-4{
	
	background: url("{{ asset('assets/img/Proyectos/Muros-verdes.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-5{
	
	background: url("{{ asset('assets/img/Proyectos/Puentes-urbano.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-6{
	
	background:url("{{ asset('assets/img/Proyectos/Bulerías.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-7{
	
	background: url("{{ asset('assets/img/Proyectos/Ciclorruta.jpeg')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-8{
	
	background:url("{{ asset('assets/img/Proyectos/El-Poblado.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-9{
	
	background: url("{{ asset('assets/img/Proyectos/Parque-Bolivar.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-10{
	
	background:url("{{ asset('assets/img/Proyectos/bastilla.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-11{
	
	background:url("{{ asset('assets/img/Proyectos/junin.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-12{
	
	background:url("{{ asset('assets/img/Proyectos/Avenida-Jardin.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-13{
	
	background:url("{{ asset('assets/img/Proyectos/AEEP.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post{
	box-shadow: 0 1px 6px 1px rgba(0,0,0, .1);
	transition: .2s;
	overflow:hidden;
}
.post:hover{
	transform:translateY(-4px);
	box-shadow: 0 1px 14px 1px rgba(0,0,0, .15);
}

.post-header{
	width:100%;
	height:200px;
	cursor:pointer;
	overflow:hidden;
}
.post:hover .post-img-1,
.post:hover .post-img-2,
.post:hover .post-img-3{
	transform: scale(1.1);
}

.post-body{
	padding:15px;
	text-align:center;
	font-size: 12px;
    font-weight: 300;
}

.post-body span{
	display:inline-block;
	color:#999;
	margin-bottom:10px;
}

.post-body h2{
	margin-bottom:15px;
}

.post-body p{
	line-height:1.5;
	margin-bottom:20px;
}

.post-body .post-link{
	display:block;
	text-decoration:none;
	padding:10px;
	background:#2b6ebb;
	color:#fff;
	width:50%;
	margin:auto;
	border-radius:20px;
	box-shadow:1px 2px 6px 1px rgba(0,0,0, .1);
	transition:.2s;
}

.post-body .post-link:hover{
	background:#3378c7;
	box-shadow:1px 2px 6px 1px rgba(0,0,0, .2);
	transform:translateY(-2px);
}

@media(max-width:840px){
	.content{
		grid-template-columns:repeat(2, 1fr);
	}

}

@media(max-width:600px){
	.content{
		grid-template-columns:repeat(1, 1fr);
	}

}
section{
		text-align:center;
	}

</style>
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/Banners/BannerGestionDelPaisaje.jpg')}}" alt="">
				<div class="vlt-page-title-hero__content ocultPosition">

					<h1 style="color:white;">
					Gestión del paisaje y patrimonio
					</h1>
				</div>
			</div>
		</div>		
</section>
		<div class="vlt-gap-60"></div>
		
			

			<body>
	<section class="post-list">

<div class="content">

<article class="post">
<div class="post-header">
	<div class="post-img-1"></div>
	</div>
	<div class="post-body">
		
		<h5>Plan Integral de Gestión de Prado</h5>
	<a href="{{ route('user.projects.gestion') }}" class="post-link">Información</a>
	
	</div>


</article>



<article class="post">
<div class="post-header">
	<div class="post-img-2"></div>
	</div>
	<div class="post-body">
		<span></span>
		<h5>Edificio La Naviera</h5>
	<a href="{{ route('user.projects.naviera') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-3"></div>
	</div>
	<div class="post-body">
		
		<h5>Galería urbana a cielo abierto calle Barranquilla</h5>
	<a href="{{ route('user.projects.barranquilla') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-4"></div>
	</div>
	<div class="post-body">
		<span></span>
		<h5>Muros verdes</h5>
	<a href="{{ route('user.projects.muros') }}" class="post-link">Información</a>
	
	</div>


</article>



<article class="post">
<div class="post-header">
	<div class="post-img-5"></div>
	</div>
	<div class="post-body">
		<span></span>
		<h5>Puentes y arte urbano</h5>
	<a href="{{ route('user.projects.puentes') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-6"></div>
	</div>
	<div class="post-body">
	
		<h5>Arte urbano en intercambio vial Bulerías</h5>
	<a href="{{ route('user.projects.bulerias') }}" class="post-link">Información</a>
	
	</div>


</article>



<article class="post">
<div class="post-header">
	<div class="post-img-7"></div>
	</div>
	<div class="post-body">
		<span></span>
		<h5>Ciclorruta Norte - Sur</h5>
	<a href="{{ route('user.projects.cicloruta') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-8"></div>
	</div>
	<div class="post-body">
	
		<h5>Galería urbana calle 10, El Poblado</h5>
	<a href="{{ route('user.projects.poblado') }}" class="post-link">Información</a>
	
	</div>


</article>



<article class="post">
<div class="post-header">
	<div class="post-img-9"></div>
	</div>
	<div class="post-body">
		<span></span>
		<h5>Parque Bolívar </h5>
	<a href="{{ route('user.projects.bolivar') }}" class="post-link">Información</a>
	
	</div>


</article>

<article class="post">
<div class="post-header">
	<div class="post-img-10"></div>
	</div>
	<div class="post-body">
	
		<h5>Pasaje La Bastilla</h5>
	<a href="{{ route('user.projects.bastilla') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-11"></div>
	</div>
	<div class="post-body">
	
		<h5>Pasaje Junín</h5>
	<a href="{{ route('user.projects.junin') }}" class="post-link">Información</a>
	
	</div>


</article>

<article class="post">
<div class="post-header">
	<div class="post-img-12"></div>
	</div>
	<div class="post-body">

		<h5>Avenida Jardín</h5>
	<a href="{{ route('user.projects.jardin') }}" class="post-link">Información</a>
	
	</div>


</article>

<article class="post">
<div class="post-header">
	<div class="post-img-13"></div>
	</div>
	<div class="post-body">
		<h5>Aprovechamiento Económico del Espacio Público –AEEP–</h5>
	<a href="{{ route('user.projects.aeep') }}" class="post-link">Información</a>
	
	</div>


</article>


</div>

	</section>

	<script src="main.js"></script>
</body>


@endsection
