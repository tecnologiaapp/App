@extends('layouts.app')
@section('body_color', '#ff9c61;')
@section('content')

	<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/8.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<h3 class="vlt-page-title-hero__title">¿Qué hacemos en la
							</h3>
							<h1 class="vlt-page-title-hero__title">Subdirección de Paisaje y Patrimonio?
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

	<a href="{{ route('user.subdirections.app') }}" class="float-left">
		<img src="{{ asset('assets/img/app.png')}}" class="rounded-circle" width="60" alt="APP">
	</a>

	<a href="{{ route('user.subdirections.inmo') }}" class="float">
		<img src="{{ asset('assets/img/inmo.png')}}" class="rounded-circle" width="60" alt="Inmobiliaria">
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
							<h5 class="m-0">Subdirección de Paisaje y Patrimonio</h5>
						</div>

						<div class="vlt-animation-block mt-2" data-aos="fade" data-aos-delay="0">
							<h2 class="m-0 subdirector-name">
								<span class="vlt-highlight">Daniel</span>
							</h2>
							<h2 class="m-0 subdirector-name">
								<span class="vlt-highlight">Madrigal Arango</span>
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
					<div class="vlt-particle d-flex justify-content-center" data-jarallax-element="100 0"><img src="{{ asset('assets/img/root/particle-02.png')}}" alt=""></div>
					<div class="col-sm-12 col-md-10 offset-md-1">
						<iframe src="{{ asset('assets/videos/daniel.mp4') }}" width="100%" height="700"></iframe>
					</div>
				</div>
			</section>

			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="text-justify">
								<div class="vlt-gap-45"></div>
								<!--Animation Block-->

									<p>
										Ante la importancia de garantizar la cualificación, sostenibilidad y mantenimiento del sistema público y colectivo, la Subdirección de Paisaje y Patrimonio opera algunos instrumentos de financiación del Plan de Ordenamiento Territorial (POT) y genera iniciativas de intervención del paisaje urbano en los que hay una inversión compartida entre el sector público y el privado. Algunos de los proyectos en los que trabajamos:
									</p>

									<ul>
										<li>
											<a href="../áreas-de-revitalización-económica-are" target="_blank">
												<strong><u>Áreas de Revitalización Económica (ARE)</u></strong>
											</a>
										</li>

										<li>
											<a href="../avenida-jardín" target="_blank">
												<strong><u>Avenida Jardín</u></strong>
											</a>
										</li>

										<li>
											<a href="../consolidación-junín" target="_blank">
												<strong><u>Consolidación Junín</u></strong>
											</a>
										</li>

										<li>
											<a href="../corredor-calle-10" target="_blank">
												<strong><u>Corredor calle 10</u></strong>
											</a>
										</li>

										<li>
											<a href="http://app.gov.co/articulos/paisaje-bolvar" target="_blank">
												<strong><u>Parque Bolívar</u></strong>
											</a>
										</li>

										<li>
											<a href="../pasaje-la-bastilla" target="_blank">
												<strong><u>Pasaje La Bastilla</u></strong>
											</a>
										</li>

										<li>
											<a href="../plan-integral-de-gestión-de-prado" target="_blank">
												<strong><u>Plan Integral de Gestión de Prado</u></strong>
											</a>
										</li>

										<li>
											<a href="../uva-ilusión-verde" target="_blank">
												<strong><u>Uva Ilusión Verde</u></strong>
											</a>
										</li>
									</ul>

									<p>
										Algunos de los instrumentos en los que trabajamos:
									</p>

									<ul>
										<li>
											<a href="../aeep" target="_blank">
												<strong><u>Aprovechamiento Económico del Espacio Público</u></strong>
											</a>
											<a href="../aeep" target="_blank">
												<strong><u>&nbsp;(AEEP)</u></strong>
											</a>
										</li>

										<li>
											<a href="../instrumentos-de-paisaje-y-patrimonio" target="_blank">
												<strong><u>Transferencia de Derechos de Construcción y Desarrollo Patrimonial</u></strong>
											</a>
										</li>

										<li>
											<a href="../plan-maestro-de-publicidad" target="_blank">
												<strong><u>Plan Maestro de Publicidad</u></strong>
											</a>
										</li>

										<li>
											<a href="../instrumentos-de-gestión-del-pot" target="_blank">
												<strong><u>Instrumentos de Gestión del POT</u></strong>
											</a>
										</li>
									</ul>

									<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
										<h2 class="m-0 mt-5">
											<span class="vlt-highlight">
												Banco de Proyectos de Paisaje y patrimonio
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