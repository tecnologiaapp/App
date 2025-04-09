@extends('layouts.app')
@section('content')
@section('body_color', '#FFFFFF;')

<style>

.buttom-accion {
	max-width: 800px;
	width: 90%;
	cursor: pointer;
	display: block;
	margin: auto;
	background-color: #00a6b9;
	font-size: 25px;
	text-align: center;
	color: #FFF;
	padding: 20px;
	margin-bottom: 0;
	border-radius: 5px;
}

.buttom-accion h1 {
	font-family: "jost", sans-serif !important;
	font-weight: bold;
	font-size: 25px;
	text-align: center;
	color: #FFF;
	margin-bottom: 0;
}

.buttom-accion:hover {
	background-color: #089299;
}
	
</style>

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerPlanIntegralDeGestionDePrado.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition" style="width: 100%">
				<h1 style="color:white;">Laboratorio Vivo de Patrimonio Medellín</h1>
			</div>
		</div>
	</section><!--Content-->
	<section>
		<div class="vlt-gap-0"></div>
		<div class="container">
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="text-justify">
								
								<p style="margin-top: 40px">El Laboratorio Vivo es una metodología de innovación abierta centrada en el usuario para hacer investigación más cercana a la realidad. Se basa en la co-creación, la experimentación y la evaluación de soluciones innovadoras en entornos del mundo real. En la Agencia APP tenemos el objetivo de conformar un ecosistema creativo e inclusivo que impulse y revitalice los valores patrimoniales de Medellín, a través de la innovación abierta, la participación activa de las comunidades, y la gestión eficiente y sostenible de los recursos culturales de la ciudad. ​El laboratorio fomentará la co-creación entre actores locales, instituciones, y sectores creativos para generar soluciones innovadoras que promuevan la preservación, reinterpretación y aprovechamiento del patrimonio cultural como motor de desarrollo social, cultural y económico.​
								</p>
								
								<div align="center"><img alt="" src="{{asset('assets/img/Proyectos/IluminaciónHotelNutibara.jpeg')}}"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</section>

	<br><br>
	<a href="{{asset('assets/pdf/PresentaciónLivingPatLabMedellín.pdf')}}" target="_blank">
	<div class="buttom-accion">Haz clic aquí para conocer los detalles del<br><h1>LABORATORIO VIVO DE PATRIMONIO MEDELLÍN</h1></div>
	</a>

	<footer class="vlt-single-post__footer">
		<!--Post Tags-->
		<!--Post Share-->
		<section style="background-color: transparent;">
			
			<div class="container">
				<!--Animation Block-->
				<div class="vlt-animation-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">
					<!--Social Share-->
					
				</div>
			</div>
			
		</section>
	</footer>

@endsection