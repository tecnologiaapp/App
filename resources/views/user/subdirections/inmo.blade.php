@extends('layouts.app')
@section('body_color', '#6abbe9;')
@section('content')

	<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/10.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<h3 class="vlt-page-title-hero__title">¿Qué hacemos en la
							</h3>
							<h1 class="vlt-page-title-hero__title" style="text-transform: none;">Subdirección de Gestión Inmobiliaria?
							</h1>
							<div class="vlt-post-meta vlt-display-1">
								<span>AGENCIA APP</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class="vlt-scroll-to-arrow" href="#content"><i class="leedo-download-arrow"></i></a>
		</div>
		<div id="content"></div>
	</section>

	<a href="{{ route('user.subdirections.landscape') }}" class="float-left">
		<img src="{{ asset('assets/img/landscape.png')}}" class="rounded-circle" width="60" alt="APP">
	</a>

	<a href="{{ route('user.subdirections.app') }}" class="float">
		<img src="{{ asset('assets/img/app.png')}}" class="rounded-circle" width="60" alt="Paisaje">
	</a>

	<!--Content-->
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 offset-md-9">
					<div class="vlt-particle d-flex justify-content-center" data-jarallax-element="100 0"><img src="{{ asset('assets/img/root/particle-01--black.png')}}" alt=""></div>
				</div>
				<div class="col-md-8 offset-md-2">
					<div class="text-center">
						<!--Animation Block-->
						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
							<h5 class="m-0">Subdirección de Gestión Inmobiliaria</h5>
						</div>

						<div class="vlt-animation-block mt-2" data-aos="fade" data-aos-delay="0">
							<h2 class="m-0 subdirector-name">
								<span class="vlt-highlight">Natacha</span>
							</h2>
							<h2 class="m-0 subdirector-name">
								<span class="vlt-highlight">Gómez Hoyos</span>
							</h2>
						</div>

						<!--Animation Block-->
						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">

							<small class="text-dark">
								<b>Compartir:</b>
								<a href="">Twitter</a>
								<a href="">Facebook</a>
								<a href="">Copiar enlace</a>
							</small>
						</div>
						<div class="vlt-gap-45"></div>
					</div>
				</div>
			</div>

			<section>
				<div class="row">
					<div class="col-sm-12 col-md-10 offset-md-1">
						<iframe src="{{ asset('assets/videos/nata.mp4') }}" width="100%" height="700"></iframe>
					</div>
				</div>
			</section>

			<section>
				<div class="vlt-particle d-flex justify-content-center" data-jarallax-element="100 0"><img src="{{ asset('assets/img/root/particle-02.png')}}" alt=""></div>
				<div class="vlt-gap-120"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="text-justify">
								<div class="vlt-gap-45"></div>
								<!--Animation Block-->

								<p>
									Buscando realizar una adecuada gestión de los bienes inmuebles fiscales propiedad del Municipio de Medellín, la Subdirección de Gestión Inmobiliaria brinda servicios inmobiliarios enfocados al aprovechamiento económico de los bienes inmuebles facilitando la vinculación de capital privado para la generación de recursos destinados a la cualificación, sostenibilidad y mantenimiento de los mismos. Algunos de los proyectos en los que trabajamos:
								</p>

								<ul class
								="mb-4">
									<li>
										<a href="https://www.medellin.gov.co/mapgis/" target="_blank">
											<strong><u>Gestión de bienes inmuebles</u></strong>
										</a>
									</li>
									{{-- <li>
										<a href="../barrio-prado-centro" target="_blank">
											<strong><u>Barrio Prado Centro</u></strong>
										</a>
									</li>

									<li>
										<a href="../centro-de-comercio-y-servicios-la-aurora" target="_blank">
											<strong><u>Centro de Comercio y Servicios La Aurora</u></strong>
										</a>
									</li>

									<li>
										<a href="../centro-de-comercio-y-servicios-local-lusitania" target="_blank">
											<strong><u>Centro de Comercio y Servicios Local Lusitania</u></strong>
										</a>
									</li>

									<li>
										<a href="../centro-de-mercado-local-la-aurora" target="_blank">
											<strong><u>Centro de Mercado Local La Aurora</u></strong>
										</a>
									</li>

									<li>
										<a href="../estrategias-inmobiliarias-para-el-transporte-público-de-medellín" target="_blank">
											<strong><u>Estrategias Inmobiliarias Para el Transporte Público de Medellín</u></strong>
										</a>
									</li>

									<li>
										<a href="../expansión-de-museo-de-antioquia" target="_blank">
											<strong><u>Expansión de Museo de Antioquia</u></strong>
										</a>
									</li>

									<li>
										<a href="../gestión-de-bienes-inmuebles-fiscales" target="_blank">
											<strong><u>Gestión de Bienes Inmuebles Fiscales</u></strong>
										</a>
									</li>

									<li>
										<a href="../investigación-de-mercado-usos-dotacionales" target="_blank">
											<strong><u>Investigación de Mercado Usos Dotacionales</u></strong>
										</a>
									</li>

									<li>
										<a href="../oportunidades-inmobiliarias" target="_blank">
											<strong><u>Oportunidades Inmobiliarias</u></strong>
										</a>
									</li>

									<li>
										<a href="../secretaría-de-movilidad" target="_blank">
											<strong><u>Secretaría de Movilidad</u></strong>
										</a>
									</li>

									<li>
										<a href="../terraza-cam" target="_blank">
											<strong><u>Terraza CAM</u></strong>
										</a>
									</li>

									<li>
										<a href="../unidad-hospitalaria-buenos-aires-–-etapa-3" target="_blank">
											<strong><u>Unidad Hospitalaria Buenos Aires – Etapa 3</u></strong>
										</a>
									</li> --}}
								</ul>

								<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
									<h2 class="m-0 mt-5">
										<span class="vlt-highlight">
											Banco de Proyectos de Gestión Inmobiliaria
										</span>
									</h2>
								</div>
								<div class="mt-5">
									<embed src="{{ asset('assets/pdf/banco-de-proyectos-alianzas-publico-privadas.pdf')}}" height="380" type="application/pdf">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</section>
	
	@include('includes.share')
@endsection