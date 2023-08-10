@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerDireccionGeneral.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Dirección General</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="vlt-gap-40"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="text-center">
						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
							<h2 class="m-0" style="font-size: 4rem;"><span class="vlt-highlight">Rodrigo Foronda Morales</span></h2>
						</div>
						<p class="text-subtitulo text-dark mt-3">Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas</p>
						<div class="vlt-gap-45"></div>
					</div>
				</div>
			</div>
			<p style="text-align:justify;">Abogado, magíster en Derecho con énfasis en Derecho Administrativo y especialista en Derecho Constitucional. Se ha desempeñado como jefe de la Oficina Asesora Jurídica de Indeportes Antioquia; director de Servicios Generales delegado para la contratación del Politécnico Jaime Isaza Cadavid y jefe de la Oficina Jurídica del Fondo de Pasivo Social de Ferrocarriles Nacionales de Colombia.</p>
			<p style="text-align:justify;">Desde su actual cargo como director General de la Agencia APP es responsable de promover la generación de recursos a través de la implementación de los instrumentos financieros definidos en el Plan de Ordenamiento Territorial, fomentar la incorporación de capitales privados a proyectos de inversión para beneficio público, y gestionar y promover acciones que garanticen la cualificación, sostenibilidad y mantenimiento del Sistema Público y Colectivo de Medellín, con énfasis en el paisaje y el patrimonio.</p>
			<section>
				<div class="row marginTB">
					<div class="col-sm-12 col-md-3 offset-md-9">
						<div class="vlt-particle d-flex justify-content-center" data-jarallax-element="100 0"><img alt="" src="{{asset('assets/img/Banners/particle-01--black.png')}}"></div>
					</div>
					<div class="col-sm-12" style="text-align:center;">
						<iframe height="400" src="{{asset('assets/videos/RFM.mp4')}}" width="700"></iframe>
					</div>
				</div>
			</section>
			<div class="position-relative">
				<!--Particle-->
				<div class="vlt-particle" data-jarallax-element="-100 0" style="top: -70px; left: calc(-160px - 15px); max-width: 250px;"><img alt="" src="{{asset('assets/img/Banners/particle-01--black.png')}}"></div>
			</div>
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<!--Testimonial Item-->
					<div class="vlt-testimonial-item vlt-testimonial-item--style-1">
						<div class="icon" data-swiper-parallax="-420"></div>
						<div class="vlt-testimonial-item__content">
							<h2 data-swiper-parallax="-280"><span>"</span>Queremos llenar a Medellín de arte, magia y color"<span>.</span></h2>
						</div>
						<div class="vlt-testimonial-item__metas">
							<h3 style="color: purple;">Rodrigo Foronda Morales</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="vlt-gap-45"></div>
		</div>
	</section>

@endsection