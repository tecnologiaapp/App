@extends('layouts.app')
@section('content')
@section('body_color', '#FFFFFF;')

<style>

.buttom-img {
	max-width: 800px;
	width: 90%;
	content: url("{{asset('assets/img/boton_plan_integral_gestion_prado.svg')}}");
	cursor: pointer;
	display: block;
	margin: auto;
}

.buttom-img:hover {
	content: url("{{asset('assets/img/boton_plan_integral_gestion_prado_hover.svg')}}");
}
	
</style>

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerPlanIntegralDeGestionDePrado.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition" style="width: 100%">
				<h1 style="color:white;">Plan Integral de Gestión de Prado</h1>
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
								
								<p style="margin-top: 40px">El Plan Integral de Gestión busca aportar a la recuperación del barrio a partir de la puesta en valor de su patrimonio cultural, la conservación del uso tradicional residencial y la inserción de nuevas dinámicas económicas relacionadas con el arte, la cultura y el turismo. Para este plan se aplicó una estrategia de intervención para sectores patrimoniales basada en una metodología de participación y co-creación, que comprende el patrimonio como un saber colectivo, que se construye y reconstruye permanentemente; donde la cultura juega un rol protagónico, en la medida que se crean sentimientos de identidad y de pertenencia asociados a la idiosincrasia, elementos claves para la cohesión y organización social.
								</p>
								
								<div align="center"><img alt="" src="{{asset('assets/img/Proyectos/imgGestionDeBienesInmueblesFiscales.png')}}"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</section>


	<a href="{{asset('assets/pdf/PRESENTACIÓN-PLAN-INTEGRAL-DEL-BARRIO-PRADO-PIGP.pdf')}}" target="_blank">
	<div class="buttom-img"></div>
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