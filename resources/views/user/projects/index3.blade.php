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
	<div class="post-img-21"></div>
	</div>
	<div class="post-body">
	
		<h5>Pasaje Junín</h5>
	<a href="{{ route('user.projects.junin') }}" class="post-link">Información</a>
	
	</div>


</article>

<article class="post">
<div class="post-header">
	<div class="post-img-22"></div>
	</div>
	<div class="post-body">
		<span></span>
		<h5>Avenida Jardín</h5>
	<a href="{{ route('user.projects.jardin') }}" class="post-link">Información</a>
	
	</div>


</article>

<article class="post">
<div class="post-header">
	<div class="post-img-23"></div>
	</div>
	<div class="post-body">
	
		<h5>Aprovechamiento Económico del Espacio Público –AEEP–</h5>
	<a href="{{ route('user.projects.aeep') }}" class="post-link">Información</a>
	
	</div>


</article>



<article class="post">
<div class="post-header">
	<div class="post-img-24"></div>
	</div>
	<div class="post-body">
		
		<h5>Gestión de bienes inmuebles fiscales</h5>
	<a href="{{ route('user.projects.bienes') }}" class="post-link">Información</a>
	
	</div>


</article>



<article class="post">
<div class="post-header">
	<div class="post-img-25"></div>
	</div>
	<div class="post-body">
		<span></span>
		<h5>Oportunidades inmobiliarias</h5>
	<a href="{{ route('user.projects.oportunidades') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-26"></div>
	</div>
	<div class="post-body">
		
		<h5>Estructuración de proyectos inmobiliarios</h5>
	<a href="{{ route('user.projects.inmobiliarios') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-27"></div>
	</div>
	<div class="post-body">
		
		<h5>Hotel y Centro de Negocios Plaza Mayor</h5>
	<a href="{{ route('user.projects.hotel') }}" class="post-link">Información</a>
	
	</div>


</article>



<article class="post">
<div class="post-header">
	<div class="post-img-28"></div>
	</div>
	<div class="post-body">
		
		<h5>Hotel Deportivo Villa Olímpica</h5>
	<a href="{{ route('user.projects.olimpica') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-29"></div>
	</div>
	<div class="post-body">
		
		<h5>Prado Centro</h5>
	<a href="{{ route('user.projects.prado') }}" class="post-link">Información</a>
	
	</div>


</article>



<article class="post">
<div class="post-header">
	<div class="post-img-30"></div>
	</div>
	<div class="post-body">

		<h5>Expansión Museo de Antioquia</h5>
	<a href="{{ route('user.projects.museo') }}" class="post-link">Información</a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-31"></div>
	</div>
	<div class="post-body">
	
		<h5>Centro de Comercios y Servicios La Aurora</h5>
	<a href="{{ route('user.projects.aurora') }}" class="post-link">Información</a>
	
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
    <!-- <li class="page-item">
      <a class="page-link" href="{{ route('user.projects.index3') }}">Siguiente</a>
    </li> -->
  </ul>
</nav>

	
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
</body>

@endsection
