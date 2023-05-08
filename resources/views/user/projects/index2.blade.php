@extends('layouts.app')
@section('body_color', '#FBFEE6;')
@section('content')

<head>
<link  href="{{ asset('assets/css/boleti.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
<link  href="{{ asset('assets/css/estilos.css') }}" rel="stylesheet">
</head>

	<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/4.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2" style="top: 9em;">
							<h3 class="vlt-page-title-hero__title">Proyectos
							</h3>
							
						</div>
					</div>
				</div>
			</div>
			<a class="vlt-scroll-to-arrow" href="#content"><i class="leedo-download-arrow"></i></a>
		</div>
	
	</section>
		<div class="vlt-gap-60"></div>
		
			


			<body>

		

	<section class="post-list">

<div class="content">





<article class="post">
<div class="post-header">
	<div class="post-img-11"></div>
	</div>
	<div class="post-body">
	
		<h5>Plan Integral de Gestión de Prado</h5>
	<a href="{{ route('user.projects.gestion') }}" class="post-link">Información</a>
	
	</div>


</article>



<article class="post">
<div class="post-header">
	<div class="post-img-12"></div>
	</div>
	<div class="post-body">
		<span></span>
		<h5>Edificio La Naviera</h5>
	<a href="{{ route('user.projects.naviera') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-13"></div>
	</div>
	<div class="post-body">
	
		<h5>Galería urbana a cielo abierto calle Barranquilla</h5>
	<a href="{{ route('user.projects.barranquilla') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-14"></div>
	</div>
	<div class="post-body">
		<span></span>
		<h5>Muros verdes</h5>
	<a href="{{ route('user.projects.muros') }}" class="post-link">Información</a>
	
	</div>


</article>



<article class="post">
<div class="post-header">
	<div class="post-img-15"></div>
	</div>
	<div class="post-body">
		<span></span>
		<h5>Puentes y arte urbano</h5>
	<a href="{{ route('user.projects.puentes') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-16"></div>
	</div>
	<div class="post-body">
		
		<h5>Arte urbano en intercambio vial Bulerías</h5>
	<a href="{{ route('user.projects.bulerias') }}" class="post-link">Información</a>
	
	</div>


</article>



<article class="post">
<div class="post-header">
	<div class="post-img-17"></div>
	</div>
	<div class="post-body">
		<span></span>
		<h5>Ciclorruta Norte - Sur</h5>
	<a href="{{ route('user.projects.cicloruta') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-18"></div>
	</div>
	<div class="post-body">

		<h5>Galería urbana calle 10, El Poblado</h5>
	<a href="{{ route('user.projects.poblado') }}" class="post-link">Información</a>
	
	</div>


</article>



<article class="post">
<div class="post-header">
	<div class="post-img-19"></div>
	</div>
	<div class="post-body">
	
		<h5>Parque Bolívar </h5>
	<a href="{{ route('user.projects.bolivar') }}" class="post-link">Información</a>
	
	</div>


</article>

<article class="post">
<div class="post-header">
	<div class="post-img-20"></div>
	</div>
	<div class="post-body">

		<h5>Pasaje La Bastilla</h5>
	<a href="{{ route('user.projects.bastilla') }}" class="post-link">Información</a>
	
	</div>


</article>




</div>

	</section>

	

    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center" style="padding-bottom: 40px;">
  <li class="page-item">
      <a class="page-link" href="javascript:history.back()">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="{{ route('user.projects.index') }}">1</a></li>
    <li class="page-item"><a class="page-link" href="{{ route('user.projects.index2') }}">2</a></li>
    <li class="page-item"><a class="page-link" href="{{ route('user.projects.index3') }}">3</a></li>
    <li class="page-item">
      <a class="page-link" href="{{ route('user.projects.index3') }}">Siguiente</a>
    </li>
  </ul>
</nav>

	
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
</body>

@endsection
