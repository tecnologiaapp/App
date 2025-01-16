@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')

<head>
<link  href="{{ asset('assets/css/noticia.css') }}" rel="stylesheet">
</head>

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerParticipa.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Participa la ciudadania</h1>
			</div>
		</div>
	</section>
<div class="vlt-single-post-wrapper vlt-single-post-wrapper--style-1">
		<div class="container">
			<article class="vlt-single-post">
				<div class="content">
					<article class="post">
						<div class="post-header">
							<div class="post-img"><img alt="" src="https://www.mintic.gov.co/portal/715/articles-162358_img_recuadro.thumb_recuadro.jpg"></div>
						</div>
						<div class="post-body">
							<h5>Participación para la identificación de problemas y diagnóstico de necesidades</h5><a href="{{route('user.projects.aeep')}}" target="_blank"><h6><b>Participa</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img"><img alt="" src="https://www.mintic.gov.co/portal/715/articles-162359_img_recuadro.thumb_recuadro.jpg"></div>
						</div>
						<div class="post-body">
							<h5>Planeación y/o presupuesto participativo</h5><a  href="{{route('user.transparency.planning.action_plan')}}" target="_blank"><h6><b>Participa</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img"><img alt="" src="https://www.mintic.gov.co/portal/715/articles-162360_img_recuadro.thumb_recuadro.jpg"></div>
						</div>
						<div class="post-body">
							<h5>Participación y consulta ciudadana de proyectos, normas, políticas o programas</h5><a  href="{{route('user.projects.index')}}" target="_blank"><h6><b>Participa</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img"><img alt="" src="https://www.mintic.gov.co/portal/715/articles-162361_img_recuadro.thumb_recuadro.jpg"></div>
						</div>
						<div class="post-body">
							<h5>Colaboración e innovación abierta</h5><a  href="https://agenciaapp.maps.arcgis.com/apps/dashboards/c4d6f9703d434fa88b6fd266ae8c3f70" target="_blank"><h6><b>Participa</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img"><img alt="" src="https://www.mintic.gov.co/portal/715/articles-162362_img_recuadro.thumb_recuadro.jpg"></div>
						</div>
						<div class="post-body">
							<h5>Rendición de cuentas</h5><a  href="{{ route('user.projects.surrender') }}" target="_blank"><h6><b>Participa</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img"><img alt="" src="https://www.mintic.gov.co/portal/715/articles-162363_img_recuadro.thumb_recuadro.jpg"></div>
						</div>
						<div class="post-body">
							<h5>Control ciudadano</h5><a  href="{{route('user.rendition.cuentas')}}" target="_blank"><h6><b>Participa</b></h6></a>
						</div>
					</article>
				</div>
			</article>
		</div>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
@endsection