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
	background-image: url("{{ asset('assets/img/Proyectos/fiscales.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-2{
	background: url("{{ asset('assets/img/Proyectos/Oportunidades-inmobiliarias.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-3{
	
	background: url("{{ asset('assets/img/Proyectos/inmobiliarios.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-4{
	
	background: url("{{ asset('assets/img/Proyectos/Plaza-Mayor.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-5{
	
	background: url("{{ asset('assets/img/Proyectos/Olimpica.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-6{
	
	background:url("{{ asset('assets/img/Proyectos/Prado-Centro.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-7{
	
	background: url("{{ asset('assets/img/Proyectos/Museo.webp')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}

.post-img-8{
	
	background:url("{{ asset('assets/img/Proyectos/Aurora.webp')}}");
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
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">
		
							<h1 style="color:white;">
							Gestión Inmobiliaria
							</h1>
		
			</div>

		</div>
		
	</section>


			<body>
	<section class="post-list">

<div class="content">

<article class="post">
<div class="post-header">
	<div class="post-img-1"></div>
	</div>
	<div class="post-body">
		
		<h5>Gestión de bienes inmuebles fiscales</h5>
	<a href="{{ route('user.projects.bienes') }}" class="post-link">Información</a>
	
	</div>


</article>



<article class="post">
<div class="post-header">
	<div class="post-img-2"></div>
	</div>
	<div class="post-body">
		<span></span>
		<h5>Oportunidades inmobiliarias</h5>
	<a href="{{ route('user.projects.oportunidades') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-3"></div>
	</div>
	<div class="post-body">
		
		<h5>Estructuración de proyectos inmobiliarios</h5>
	<a href="{{ route('user.projects.inmobiliarios') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-4"></div>
	</div>
	<div class="post-body">
		
		<h5>Hotel y Centro de Negocios Plaza Mayor</h5>
	<a href="{{ route('user.projects.hotel') }}" class="post-link">Información</a>
	
	</div>


</article>



<article class="post">
<div class="post-header">
	<div class="post-img-5"></div>
	</div>
	<div class="post-body">
		<span></span>
		<h5>Hotel Deportivo Villa Olímpica</h5>
	<a href="{{ route('user.projects.olimpica') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-6"></div>
	</div>
	<div class="post-body">
		<span></span>
		<h5>Prado Centro</h5>
	<a href="{{ route('user.projects.prado') }}" class="post-link">Información</a>
	
	</div>


</article>



<article class="post">
<div class="post-header">
	<div class="post-img-7"></div>
	</div>
	<div class="post-body">
		<span></span>
		<h5>Expansión Museo de Antioquia</h5>
	<a href="{{ route('user.projects.museo') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-8"></div>
	</div>
	<div class="post-body">
		
		<h5>Centro de Comercios y Servicios La Aurora</h5>
	<a href="{{ route('user.projects.aurora') }}" class="post-link">Información</a>
	
	</div>


</article>



</div>

	</section>

	<script src="main.js"></script>
</body>


@endsection
