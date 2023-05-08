@extends('layouts.app')
@section('body_color', '#f3f5fa;')
@section('content')

<head>
<link  href="{{ asset('assets/css/boleti.css') }}" rel="stylesheet">
</head>

	<div class="vlt-single-post-wrapper vlt-single-post-wrapper--style-1">
		<div class="container">

			<article class="vlt-single-post">
				<div class="vlt-animation-block mb-5 text-center" data-aos="fade" data-aos-delay="0">
					<h1 style="font-size: 4rem;" class="m-0"><span class="vlt-highlight">Participa</span></h1>
				</div>

				<div class="content">

				<article class="post">
                <div class="post-header">
	            <div class="post-img"><img src="https://www.mintic.gov.co/portal/715/articles-162358_img_recuadro.thumb_recuadro.jpg" alt=""></div>
             	</div>
             	<div class="post-body">
		       
		        <h5>Participación para la identificación de problemas y diagnóstico de necesidades</h5>
	            <a target="_blank" href="{{ route('user.projects.aeep') }}" class="post-link">Participa</a>
	
             	</div>
               </article>

               <article class="post">
                <div class="post-header">
	            <div class="post-img"><img src="https://www.mintic.gov.co/portal/715/articles-162359_img_recuadro.thumb_recuadro.jpg" alt=""></div>
             	</div>
             	<div class="post-body">
		       
		        <h5>Planeación y/o presupuesto participativo</h5>
	            <a target="_blank" href="{{ route('user.transparency.planning.action_plan') }}" class="post-link">Participa</a>
	
             	</div>
               </article>

               <article class="post">
                <div class="post-header">
	            <div class="post-img"><img src="https://www.mintic.gov.co/portal/715/articles-162360_img_recuadro.thumb_recuadro.jpg" alt=""></div>
             	</div>
             	<div class="post-body">
		       
		        <h5>Participación y consulta ciudadana de proyectos, normas, políticas o programas</h5>
	            <a target="_blank" href="{{ route('user.projects.index') }}" class="post-link">Participa</a>
	
             	</div>
               </article>

               <article class="post">
                <div class="post-header">
	            <div class="post-img"><img src="https://www.mintic.gov.co/portal/715/articles-162361_img_recuadro.thumb_recuadro.jpg" alt=""></div>
             	</div>
             	<div class="post-body">
		       
		        <h5>Colaboración e innovación abierta</h5>
	            <a target="_blank" href="https://agenciaapp.maps.arcgis.com/apps/dashboards/c4d6f9703d434fa88b6fd266ae8c3f70" class="post-link">Participa</a>
	
             	</div>
               </article>

               <article class="post">
                <div class="post-header">
	            <div class="post-img"><img src="https://www.mintic.gov.co/portal/715/articles-162362_img_recuadro.thumb_recuadro.jpg" alt=""></div>
             	</div>
             	<div class="post-body">
		       
		        <h5>Rendición de cuentas</h5>
	            <a target="_blank" href="{{ route('user.rendition.cuentas-2021') }}" class="post-link">Participa</a>
	
             	</div>
               </article>

			
               <article class="post">
                <div class="post-header">
	            <div class="post-img"><img src="https://www.mintic.gov.co/portal/715/articles-162363_img_recuadro.thumb_recuadro.jpg" alt=""></div>
             	</div>
             	<div class="post-body">
		       
		        <h5>Control ciudadano</h5>
	            <a target="_blank" href="{{ route('user.rendition.cuentas') }}" class="post-link">Participa</a>
	
             	</div>
               </article>


</div>


			</article>


					
			
		</div>

	</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	@endsection