@extends('layouts.app')
@section('content')
	<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/3.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<h1 class="vlt-page-title-hero__title" style="text-transform: none;">Solicitud de información de bienes inmuebles de oportunidad
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
					<div class="vlt-particle d-flex justify-content-center" data-jarallax-element="100 0"><img src="{{ asset('assets/img/root/particle-01--black.png')}}" alt=""></div>
				</div>
				<div class="col-md-10 offset-md-1">
					<div class="text-center">
						<!--Animation Block-->
						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
							<h2 class="m-0"><span class="vlt-highlight"> Este servicio estará nuevamente habilitado en el primer trimestre de 2021</span></h2>

							<p class="text-justify mt-5">
								La Agencia APP, a través de la Subdirección de Gestión Inmobiliaria y en ejercicio de las funciones atribuidas en el Decreto 883 de 2015, brinda servicios inmobiliarios enfocados al aprovechamiento económico de los inmuebles propiedad del Municipio de Medellín, facilitando la vinculación de capital privado para la generación de recursos destinados a la cualificación, sostenibilidad y mantenimiento de los mismos. Por lo tanto, como apoyo a esta función, brinda información de los inmuebles propiedad de la Alcaldía de Medellín a las personas o entidades interesadas en gestionar proyectos en alianza con el Municipio.
							</p>

							<p class="text-justify">
								<del>A través del siguiente enlace puede realizar la solicitud de información de bienes fiscales de oportunidad según su necesidad:</del>
							</p>
						</div>
						<div class="vlt-gap-45"></div>

						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
							<h2 class="m-0"><span class="vlt-highlight">﻿Importante</span></h2>

							<p class="mt-5 mb-5">
								<ul class="text-left">
									<li>Los inmuebles de la Alcaldía de Medellín se transan por valores comerciales.</li>
									<li>Las formas de transacción pueden ser venta, arriendo o comodato. Esta última solo aplica para entidades sin ánimo de lucro y/o públicas.</li>
									<li>Para información de bienes de uso público y su aprovechamiento dirígete a la Subdirección de Paisaje y Patrimonio de la Agencia APP.</li>
									<li>Cualquier inquietud puedes comunicarte al teléfono +57 (4) 448-1740 ext. 103.</li>
								</ul>
							</p>
						</div>						
						<div class="vlt-gap-45"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Share This 02-->
	@include('includes.share')
@endsection