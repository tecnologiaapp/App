@extends('layouts.app')
@section('body_color', '#f3f5fa;')
@section('content')
<head>
<style>
	.carousel-control-prev-icon {

    background-color: black;

}
.carousel-control-next-icon {

background-color: black;

}
</style>
</head>
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">
				
						
				
							<h1 style="color:white;">
							Gestión de Asociaciones Público Privadas - Ley 1508 de 2012
							</h1>
							
						
				
			</div>

		</div>
		
	</section>
		<body>
		
		<div class="container">
		<article class="vlt-single-post">
		<div class="text-center">
		<div class="section-title" style="margin-top: 50px;">
          <h2>¿Que es una Asociación Público Privada?</h2>
        </div>
					<p style="text-align: justify;">Es un mecanismo de contratación donde el Estado vincula capital privado para la
construcción y el sostenimiento de infraestructura pública. Este tipo de asociaciones aportan
mayor eficiencia, sostenibilidad en la provisión del servicio, ya que cuenta con indicadores
de cumplimiento que se miden periódicamente por una interventoría y una supervisión;
además, permite el equilibrio en la distribución de riesgos, lo que genera grandes ahorros
para el sector público.</p>
				</div>

				<div class="section-subtitle text-center" style="margin-top: 50px;">
          <h3>La Subdirección de Gestión de Alianzas Público Privadas de la Agencia APP del Distrito de Medellín en la actualidad tiene el siguiente portafolio de proyectos de iniciativas públicas y privadas.</h3>
        </div>
			


				<div class="container">
    
	
				<div class="row" style="justify-content:center; height:500px;">

				<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
	<p align="center">Conoce más sobre las iniciativas públicas y privadas en las que estamos trabajando para la Medellín Futuro</p>
	<iframe src="{{ asset('assets/pdf/APP Español.pdf') }}" class="d-block w-100" style="height:500px;"></iframe>
	  
    </div>
    <div class="carousel-item" data-bs-interval="5000">
	<p align="center">Learn more about the public and private initiatives we are working on for Medellín Futuro</p>
	<iframe src="{{ asset('assets/pdf/APP-English.pdf') }}" class="d-block w-100" style="height:500px;"></iframe>
    </div>
  
  </div>

</div>


                </div>
				
  				</div>
				

				  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev" style="padding-right: 40px; width: 8%;">
    <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
    <span class="visually-hidden" style="background:black;" >Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next" style="padding-left: 40px; width: 8%;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden" style="background:black;">Next</span>
  </button>

			</article>

			<div class="row" style="justify-content:center;">

<div class="col-lg-6 col-md-6">
	<h4 align="center">Proyectos de iniciativa pública</h4>
	<ul>
		<li> <a href="{{ route('user.projects.mudag') }}">Modernización Unidad Deportiva Atanasio Girardot</a> </li>
		<li> <a href="{{ route('user.projects.LandingCarcel') }}"> Centro de Detención Preventiva para Sindicados</a></li>
	</ul>



</div>

<div class="col-lg-6 col-md-6">
<h4 align="center">Proyectos de iniciativa privada</h4>
<ul>
		<li> <a href="{{ route('user.projects.arena') }}"> Arena Medellín</a></li>
		<li> <a href="{{ route('user.projects.aiire') }}"> AIIRE</a></li>
		<li> <a href="{{ route('user.projects.saludable') }}"> Medellín Saludable</a></li>
	</ul>


</div>



</div>
			<div style="margin-bottom: 20px;"> 
            <iframe src="https://storymaps.arcgis.com/stories/e04199c603bf49fb8b036e9f49fd1a5e?cover=false" width="100%" height="700px" frameborder="0" allowfullscreen allow="geolocation"></iframe>
			</div>
		
		</div>
		

		</div>
		
		</body>
	

		

<!-- <div align="center">
<iframe src="https://storymaps.arcgis.com/stories/e04199c603bf49fb8b036e9f49fd1a5e" width="100%" height="700px" frameborder="0" allowfullscreen allow="geolocation"></iframe></div> -->

</body>


@endsection
