@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')

<head>
<link  href="{{ asset('assets/css/boletin.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
<link  href="{{ asset('assets/css/estilos.css') }}" rel="stylesheet">
</head>
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/Banners/imgProyectos.jpg')}}" alt="">
				<div class="vlt-page-title-hero__content ocultPosition">

					<h1 style="color:white;">
					Proyectos
					</h1>
				</div>
			</div>
		</div>		
</section>

		<div class="vlt-gap-60"></div>
		
			
		

			<body>
<div class="container">
			<div align="center">
			<iframe src="https://storymaps.arcgis.com/stories/55aa962ad6f44735a7d0300fba02e3b2" width="100%" height="600px" frameborder="0" allowfullscreen allow="geolocation"></iframe></div>
				</div>
	
	
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
</body>

@endsection
