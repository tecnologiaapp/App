@extends('layouts.app')
@section('body_color', '#bcdcff40;')
@section('content')

<section>
	<!--Page Title Hero-->
	<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
		<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
		<div class="vlt-page-title-hero__content">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<h3 class="vlt-page-title-hero__title">Transparencia
						</h3>
						<h1 class="vlt-page-title-hero__title" style="text-transform: none;">Estructura orgánica y de talento humano
						</h1>
						<div class="vlt-post-meta vlt-display-1"><span>AGENCIA APP</span></div>
					</div>
				</div>
			</div>
		</div><a class="vlt-scroll-to-arrow" href="#content"><i class="leedo-download-arrow"></i></a>
	</div>
	<div id="content"></div>
</section>

<section>
	<div class="vlt-gap-120"></div>

	<!--Particle-->
	<div class="vlt-particle" data-jarallax-element="-500 10"><img src="{{ asset('assets/img/root/particle-01--black.png')}}" width="200" alt=""></div>
	<!--Particle-->

	<div class="container mt-5">
		<h5>Aquí encontrarás toda la información relacionada con nuestra estructura orgánica y de talento humano:</h5>

		<ul>
			<li>
				<a href="{{ route('user.about.history') }}">
					Historia
				</a>
			</li>

			<li>
				<a href="{{ route('user.about.team') }}">
					Funcionarios
				</a>
			</li>

			<li>
				<a href="{{ route('user.about.directory') }}">
					Directorio de información de servidores públicos y contratistas
				</a>
			</li>

			<li>
				<a href="{{ route('user.about.organization_chart') }}">
					Organigrama
				</a>
			</li>

			<li>
				<a href="{{ route('user.transparency.processes') }}">
					Procesos y procedimientos
				</a>
			</li>

			<li>
				<a href="{{ route('user.about.projects') }}">
					Banco de proyectos
				</a>
			</li>

			<li>
				<a href="{{ route('user.info.union_directory') }}" target="_blank">
					Directorio de agremiaciones,asociaciones y otros grupos de interés
				</a>
			</li>

			<li>
				<a href="{{ route('user.info.entity_directory') }}" target="_blank">
					Directorio de entidades de control
				</a>
			</li>
		</ul>

		<h5 class="mt-5 mb-5">Manual de funciones</h5>

		<embed src="{{ asset('assets/pdf/acuerdo-027-modificacion-manual-de-funciones.pdf') }}" height="380" type="application/pdf">

		
		<div class="mt-5">
			<p class="normal-text">
				La subdirección de Gestión de Paisaje y Patrimonio es la encargada de contribuir al cumplimiento del objeto de la Agencia APP, en lo que respecta a la gestión y promoción de acciones para la cualificación, sostenibilidad y mantenimiento del Sistema Público y Colectivo, el paisaje y el patrimonio; también es su responsabilidad promover la generación de recursos a través de los instrumentos de financiación del POT, en consonancia con el Decreto 883 de 2015.
			</p>

			<p class="normal-text">
				<a href="https://drive.google.com/file/d/1Wa1Otg5HPoLi2orha5Nh2AB6DlUn-Qv4/view?usp=sharing" target="_blank">
					Documento Proyectos Subdireccion de Paisaje y Patrimonio.
				</a>
			</p>
		</div>
	</div>
</section>


@include('includes.share')
@endsection