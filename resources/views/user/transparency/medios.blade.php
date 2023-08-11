
@extends('layouts.app')
<head>
	<link rel="stylesheet" href="{{ asset('assets/css/medi.css') }}">
</head>
@section('body_color', '#ffffff;')
@section('content')

<body>
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerAppMedios.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">App en medios</h1>
			</div>
		</div>
	</section>
<section class="post-list">

	<div class="content">
		@foreach($medios as $medio)
		<article class="post">
			<div class="post-body">
				<span>{{ $medio->fecha }}</span>
				<h3>{{ $medio->titulo }}</h3>
				<p class="descripcion">{{ $medio->descripcion }}</p>
				<a href="{{ $medio->enlace }}" class="post-link" target="blank">Leer más...</a>			
			</div>
		</article>
		@endforeach
		
	</div>
	<div class="container text-center" style="display: flex; justify-content: center;">
			{{ $medios->links() }}
		</div>
</section>
	
	<script src="main.js"></script>
</body>

@endsection








