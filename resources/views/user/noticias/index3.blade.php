@extends('layouts.app')
@section('body_color', '#FBFEE6;')
@section('content')

<head>
<link  href="{{ asset('assets/css/bolet.css') }}" rel="stylesheet">
<style>
	h6{
	color:blue;	
	}
</style>
</head>


	<div class="vlt-single-post-wrapper vlt-single-post-wrapper--style-1">
		<div class="container">
			<article class="vlt-single-post">
				<div class="vlt-animation-block mb-5 text-center" data-aos="fade" data-aos-delay="0">
					<h1 style="font-size: 8rem;" class="m-0"><span class="vlt-highlight">Noticias</span></h1>
				</div>

				<div class="content">



<article class="post">
<div class="post-header">
	<div class="post-img-5"></div>
	</div>
	<div class="post-body">
		<span>15/11/2020</span>
		<h5>Puentes verdes y jardines verticales</h5>
	<a target="_blank" href="{{ route('user.noticias.new5') }}"><h6>Leer más</h6></a>
	
	</div>


</article>

<article class="post">
<div class="post-header">
	<div class="post-img-6"></div>
	</div>
	<div class="post-body">
		<span>10/11/2020</span>
		<h5>Reactivación económica</h5>
	<a target="_blank" href="{{ route('user.noticias.new6') }}"><h6>Leer más</h6></a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-7"></div>
	</div>
	<div class="post-body">
		<span>04/11/2020</span>
		<h5>La Naviera iluminará el corazón de Medellín</h5>
	<a target="_blank" href="{{ route('user.noticias.new7') }}"><h6>Leer más</h6></a>
	
	</div>


</article>


<article class="post">
<div class="post-header">
	<div class="post-img-8"></div>
	</div>
	<div class="post-body">
		<span>14/10/2020</span>
		<h5>Modernización unidad deportiva</h5>
	<a target="_blank" href="{{ route('user.noticias.new8') }}"><h6>Leer más</h6></a>
	
	</div>


</article>

<article class="post">
<div class="post-header">
	<div class="post-img-9"></div>
	</div>
	<div class="post-body">
		<span>02/10/2020</span>
		<h5>Artistas llenarán de arte la Barranquilla</h5>
	<a target="_blank" href="{{ route('user.noticias.new9') }}"><h6>Leer más</h6></a>
	
	</div>


</article>

<article class="post">
<div class="post-header">
	<div class="post-img-10"></div>
	</div>
	<div class="post-body">
		<span>01/10/2020</span>
		<h5>Uso del espacio público</h5>
	<a target="_blank" href="{{ route('user.noticias.new10') }}"><h6>Leer más</h6></a>
	
	</div>


</article>

<article class="post">
<div class="post-header">
	<div class="post-img-11"></div>
	</div>
	<div class="post-body">
		<span>30/09/2020</span>
		<h5>Construcción del hotel plaza mayor</h5>
	<a target="_blank" href="{{ route('user.noticias.new11') }}"><h6>Leer más</h6></a>
	
	</div>


</article>

<article class="post">
<div class="post-header">
	<div class="post-img-12"></div>
	</div>
	<div class="post-body">
		<span>09/09/2020</span>
		<h5>Intervención artística en plaza de la libertad</h5>
	<a target="_blank" href="{{ route('user.noticias.new12') }}"><h6>Leer más</h6></a>
	
	</div>


</article>

<article class="post">
<div class="post-header">
	<div class="post-img-13"></div>
	</div>
	<div class="post-body">
		<span>14/08/2020</span>
		<h5>Transformación urbana de la calle Barranquilla</h5>
	<a target="_blank" href="{{ route('user.noticias.new13') }}"><h6>Leer más</h6></a>
	
	</div>


</article>








</div>





			</article>


					
            <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center" style="padding-bottom: 40px;">
  <li class="page-item">
      <a class="page-link" href="javascript:history.back()">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="{{ route('user.transparency.boletin') }}">1</a></li>
    <li class="page-item"><a class="page-link" href="{{ route('user.noticias.index2') }}">2</a></li>
    <li class="page-item"><a class="page-link" href="{{ route('user.noticias.index3') }}">3</a></li>
    <!-- <li class="page-item">
      <a class="page-link" href="javascript:history.forward()">Siguiente</a>
    </li> -->
  </ul>
</nav>
		
			
		</div>

	</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	@endsection