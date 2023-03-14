@extends('layouts.app')
@section('content')

	<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/2.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<h3 class="vlt-page-title-hero__title">¿Qué hacemos en la
							</h3>
							<h1 class="vlt-page-title-hero__title" style="text-transform: none;">
							Subdirección de Gestión APP?
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

	<a href="{{ route('user.subdirections.inmo') }}" class="float-left">
		<img src="{{ asset('assets/img/inmo.png')}}" class="rounded-circle" width="60" alt="Paisaje">
	</a>

	<a href="{{ route('user.subdirections.landscape') }}" class="float">
		<img src="{{ asset('assets/img/landscape.png')}}" class="rounded-circle" width="60" alt="Inmobiliaria">
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
							<h5 class="m-0">Subdirección de Gestión APP</h5>
						</div>

						<div class="vlt-animation-block mt-2" data-aos="fade" data-aos-delay="0">
							<h2 class="m-0 subdirector-name">
								<span class="vlt-highlight">Juan Manuel</span>
							</h2>
							<h2 class="m-0 subdirector-name">
								<span class="vlt-highlight">Mejía Salazar</span>
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
						<iframe src="{{ asset('assets/videos/juan.mp4') }}" width="100%" height="700"></iframe>
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
									Con la necesidad de suplir la demanda de infraestructura, se hace necesario examinar los modelos convencionales mediante nuevos planteamientos que vinculen al sector público y privado para generar una adecuada prestación del servicio y garantizar su sostenibilidad. La Subdirección de Alianzas Público Privadas estructura, evalúa y promociona proyectos integrales que comprenden el diseño, construcción, financiación, operación y mantenimiento de infraestructura social y productiva.

									Algunos de los proyectos en los que trabajamos son: ﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿
								</p>

								<ul class="mb-4">
									<li>
										<a href="../alojamientos-universitarios" target="_blank">
											<strong><u>Alojamientos Universitarios</u></strong>
										</a>
									</li>

									<li>
										<a href="../cárcel-agroindustrial" target="_blank"><strong><u>Cárcel Agroindustrial</u></strong>
										</a>
									</li>

									<li>
										<a href="../conexión-vial-bajo-el-aeropuerto-olaya-herrera" target="_blank"><strong><u>Conexión Vial Oriente Occidente bajo el Aeropuerto Olaya Herrera</u></strong>
										</a>
									</li>

									<li>
										<a href="../estadio-atanasio-girardot" target="_blank"><strong><u>Estadio Atanasio Girardot</u></strong>
										</a>
									</li>

									<li>
										<a href="../inquilinatos-públicos" target="_blank"><strong><u>Inquilinatos Públicos</u></strong>
										</a>
									</li>

									<li>
										<a href="../instituciones-educativas-bajo-el-modelo-app" target="_blank"><strong><u>Instituciones Educativas bajo el modelo APP</u></strong>
										</a>
									</li>

									<li>
										<a href="../jardines-buen-comienzo" target="_blank"><strong><u>Jardines Buen Comienzo</u></strong>
										</a>
									</li>

									<li>
										<a href="../parqueaderos-satélites" target="_blank"><strong><u>Parqueaderos Satélites</u></strong>
										</a>
									</li>

									<li>
										<a href="../plaza-de-mercado-campo-valdés" target="_blank"><strong><u>Plaza de mercado Campo Valdés</u></strong>
										</a>
									</li>

									<li>
										<a href="../plaza-de-mercado-la-minorista" target="_blank"><strong><u>Plaza de mercado La Minorista</u></strong>
										</a>
									</li>

								</ul>

								<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
									<h2 class="m-0">
										<span class="vlt-highlight">
											Banco de Proyectos Alianzas Público Privadas
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