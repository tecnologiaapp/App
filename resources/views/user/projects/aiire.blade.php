@extends('layouts.app')
@section('content')
@section('body_color', '#FFFFFF;')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/BannerAiire.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">AIIRE</h1>
			</div>
		</div>
	</section>
	<!--Content-->
	<section>
		<div class="vlt-gap-0"></div>
		<div class="container">
			<div class="row"></div>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="text-justify">
								<div class="vlt-gap-15"></div>
								<hr>
								<p>El proyecto contempla la operación y mantenimiento de los 840 parqueaderos públicos de la ciudad más 100 nuevos durante la concesión y adicionalmente la construcción de infraestructura pública y amoblamiento urbano con el fin de mejorar la prestación del servicio público de transporte y ofrecer mayor comodidad a los ciudadanos.</p>
								<p>El proyecto será financiado 100% con recursos privados y ofreciendo un beneficio al municipio de Medellín, en un contrato de concesión de 20.5 años. Actualmente se encuentra en evaluación de la factibilidad por parte de la Agencia APP y empresa evaluadora, y al finalizar el año 2022 se definirá la Audiencia de terceros interesados.</p>
								<h3>Beneficios del proyecto:</h3>
								<p>Se benefician todos los usuarios del transporte público del municipio. Además, el uso del transporte público facilita la movilidad, contribuye a la reducción de emisión de partículas contaminantes, y conecta a los ciudadanos por medio de Wifi.</p>
								<p>Así mismo, se proyecta impactar a los ciclistas de la ciudad, que utilicen los econodos para el parqueadero de la bicicleta personal lo que permitirá disminución de emisiones contaminantes y disminución del tráfico de la ciudad.</p>
								<hr>
								<div align="center"><img alt="" src="{{asset('assets/img/Proyectos/imgAiire.png')}}"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</section>
	<footer class="vlt-single-post__footer">
		<!--Post Tags-->
		<!--Post Share-->
		<section style="background-color: transparent;">
			<div class="vlt-gap-100"></div>
			<div class="container">
				<!--Animation Block-->
				<div class="vlt-animation-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">
					<!--Social Share-->
					<div class="vlt-social-share text-center">
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/proyectos/AIIRE" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/proyectos/AIIRE" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection