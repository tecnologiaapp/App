@extends('layouts.app')
@section('content')
@section('body_color', '#FFFFFF;')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/bg/5.jpg')}}">
			<div class="vlt-page-title-hero__content">
				<h1 style="color:white;">Audiencia pública para presentación de proyecto de factibilidad</h1>
			</div>
		</div>
	</section><!--Content-->
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
								<p>La Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas, se encuentra analizando la Factibilidad del proyecto de Asociación Publico Privada de iniciativa privada que tiene por objeto la “Operación y mantenimiento de paraderos públicos y mobiliario urbano y la construcción de infraestructura pública y amoblamiento urbano que permite mayor comodidad a los ciudadanos que se desplazan en bicicleta con servicios de parqueaderos gratuitos y talleres de mecánica básica para las bicicletas.</p>
								<hr>
								<a href="{{asset('assets/pdf/CONVOCATORIA-AUDIENCIA.pdf')}}" target="_blank">
								<div class="text-center"><img alt="" src="{{asset('assets/img/Proyectos/AudienciaP%C3%BAblica.jpeg')}}"></div></a>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/proyectos/factibilidad" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/proyectos/factibilidad" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection