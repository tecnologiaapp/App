@extends('layouts.app')
@section('content')
	<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/8.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<h1 class="vlt-page-title-hero__title" style="text-transform: none;">Registro Bases de Datos-RNBD
							</h1>
							<div class="vlt-post-meta vlt-display-1"><span>AGENCIA APP</span></div>
						</div>
					</div>
				</div>
			</div><a class="vlt-scroll-to-arrow" href="#content"><i class="leedo-download-arrow"></i></a>
		</div>
		<div id="content"></div>
	</section>
	<!--Content-->
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 offset-md-9">
					<div class="vlt-particle d-flex justify-content-center" data-jarallax-element="100 0"><img src="{{ asset('assets/img/root/particle-02.png')}}" alt=""></div>
				</div>
				<div class="col-md-10 offset-md-1">
					<div class="text-center">
						<!--Animation Block-->
						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
							<p class="text-justify mt-5">
								Para consultar el Registro de Datos RNBD de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas-APP, realice la búsqueda en <a href="https://rnbd.sic.gov.co/sisi/consultaTitulares/consultas/">Sistema de la SIC para Bases de Datos</a>, y digite en el campo Nombre o Razón Social: “Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas-APP”, junto con el código de referencia.
							</p>
						</div>
						<div class="vlt-gap-45"></div>
					</div>

					<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
						<ul>
							<li>
								<a href="https://drive.google.com/file/d/11QEu6QzBxPUnIoXQbdI3p0gi0wYwZXw0/view" target="_blank">Reporte Base de datos Agencia APP</a>
							</li>

							<li>
								<a href="https://drive.google.com/file/d/1Ge_7aCBeLnQZHVq8xSQv0qsITDe_yzLC/view" target="_blank">Reporte Base de datos Agencia APP</a>
							</li>

							<li>
								<a href="https://drive.google.com/file/d/1O42NJDw1-cfvX2e_DRuYhHZBGzBtfzvc/view" target="_blank">Reporte Base de datos Agencia APP</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Share This 02-->
	@include('includes.share')
@endsection