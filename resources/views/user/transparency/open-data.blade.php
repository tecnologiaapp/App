@extends('layouts.app')
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
							<h1 class="vlt-page-title-hero__title" style="text-transform: none;">
							Datos abiertos
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
	<!--Content-->
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 offset-md-9">
					<div class="vlt-particle d-flex justify-content-center" data-jarallax-element="100 0"><img src="{{ asset('assets/img/root/particle-02.png')}}" alt=""></div>
				</div>
				<div class="col-md-8 offset-md-2">
					<div class="text-center">
						<!--Animation Block-->
						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
							{{-- <h5 class="m-0">Subdirección de Gestión APP</h5> --}}
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

			<section class="mb-5 pb-5">

				<h4 class="text-center mb-5">Información en conjunto de datos abiertos</h4>

				<div class="container mb-5 pb-5">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<ul>
								<li>
									<a href="https://drive.google.com/drive/folders/1qfK3sIz6TKoOZUlCK3-fNhmGQFfR5DIy?usp=sharing" target="_blank">
										Aprovechameinto Economico del Espacio Público AEEP- AGENCIA APP
									</a>
								</li>
								<li>
									<a href="https://www.datos.gov.co/Funci-n-p-blica/REGISTRO-ACTIVOS-INFORMACION-AGENCIA-APP/3m89-hz4w" target="_blank">
										Registro de activos de información
									</a>
								</li>
								<li>
									<a href="https://www.datos.gov.co/Trabajo/INDICE-DE-INFORMACI-N-CLASIFICADA-Y-RESERVADA/v9c3-nmht" target="_blank">
										Índice de información clasificada y reservada
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>	
			</section>
		</div>
	</section>
	
	@include('includes.share')
@endsection