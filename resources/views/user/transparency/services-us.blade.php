@extends('layouts.app')
@section('body_color', '#white;')
@section('content')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerContactenos.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Servicio a la ciudadania Nueva</h1>
			</div>
		</div>
	</section>
	<div id="content"></div><!--About Us 02-->
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 position-relative">
					<!--Animation Block-->
					<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
						<!--Simple Image-->
						<div class="vlt-simple-image" style="width: 100%; height: 100%; object-fit: cover; object-position: center center;"><img alt="" style="width: 100%" src="{{asset('assets/img/Banners/naviera.webp')}}"></div>
					</div>
					<div class="vlt-gap-60--sm"></div>
				</div>
				<div class="col-md-5 offset-md-1">
					<!--Animation Block-->
					<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0"></div>
					<h3 class="vlt-first-color m-0" style="text-align: left">Canales de <span class="vlt-second-color tlt-black">atención</span></h3>
					<div class="vlt-gap-10"></div><!--Animation Block-->
					<div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
						<p style="text-align: left"><b>Sede principal:</b> carrera 50 Nº 52-25, Piso 8 - Edificio La Naviera, Medellín - Antioquia.</p>
						<p style="text-align: left"><b>Radicación AEEP:</b> calle 44 # 52-165, Sotano A - Alcaldía de Medellín. Taquillas 11 y 12.</p>
						<p style="text-align: left"><b>Teléfono:</b> (+57) 604 448 1740 Ext 100</p>
						<p style="text-align: left"><b>Correo Institucional:</b> <a href="mailto:info@app.gov.co">info@app.gov.co</a></p>
						<p style="text-align: left"><b>Correo notificaciones judiciales:</b> <a href="mailto:procesosjudiciales@app.gov.co">procesosjudiciales@app.gov.co</a></p>
						
						<h3 class="vlt-first-color m-0" style="text-align: left">Horario de atención</h3>
						<p style="text-align: left"><b>Lunes a jueves:</b> 7:30 a. m. a 12:30 p. m. y de 1:30 p. m. a 5:30 p. m.<br>
						<b>Viernes:</b> 7:30 a. m. a 12:30 p. m. y de 1:30 p. m. a 4:30 p. m.</p>

						<h3 class="vlt-first-color m-0" style="text-align: left">Contactos específicos de cada área</h3>
						<p style="text-align: left"><b>Atención al usuario de trámite Aprovechamiento Económico del Espacio Público.</b> Teléfono: (+57) 604 385 55 55 Ext 9477 ó 8800.</p>
						<p style="text-align: left"><b>Subdirección de Gestión de Alianzas Publico Privadas:</b> (+57) 604 448 1740 Ext 1201.</p>
						<p style="text-align: left"><b>Subdirección de Gestión Inmobiliaria:</b> (+57) 604 448 1740 Ext 1301.</p>
						<p style="text-align: left"><b>Subdirección de Gestión de Paisaje y Patrimonio:</b> (+57) 604 448 1740 Ext 1401.</p>

						<h3 class="vlt-first-color m-0" style="text-align: left">Dirección de correspondencia</h3>
						<p style="text-align: left">Carrera 50 Nº 52-25, Piso 8 - Edificio La Naviera, Medellín - Antioquia.</p>
					</div>
					<div class="vlt-gap-15"></div>
				</div>
			</div>
		</div>
		<div class="vlt-gap-0"></div>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/transparencia/contacto" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/transparencia/contacto" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection
