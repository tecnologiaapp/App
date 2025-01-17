@extends('layouts.app')
@section('body_color', '#white;')
@section('content')

<style>
.buttom-whatsapp {
	width: 100%;
	height: auto;
	background-color: #25d366;
	padding: 10px 20px;
	text-align: center;
	color: #FFF;
	font-weight: bold;
	border-radius: 5px;
}

.buttom-whatsapp:hover {
	background-color:rgb(5, 150, 58);
}
</style>


<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerContactenos.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Servicio a la Ciudadanía</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="container mt-5 text-justify">
			<div class="section-title">
				<h3 class="vlt-first-color m-0" style="text-align: left">Tramites y servicios</h3>
			</div>
			<p>Encuentra aquí todos los trámites y servicios relacionados con la Agencia APP:</p>
			<ul>
				<li><a href="">Autorización de bienes de interés cultural en el Barrio Prado >></a></li>
				<li><a href="http://181.143.121.243:8001/search-contract" target="_blank">Certificados laborales >></a></li>
				<li><a href="">Concepto de norma urbanística para el Barrio Prado >></a></li>
				<li><a href="https://www.gov.co/ficha-tramites-y-servicios/T87169" target="_blank">Estructuración de proyectos de asociación publico privada por agentes privados en etapa de prefactibilidad >></a></li>
			</ul>

			<div class="container" style="margin: 60px 0 50px 0"><hr></div>

			<div class="section-title">
				<h3 class="vlt-first-color m-0" style="text-align: left">Preguntas frecuentes</h3>
			</div>
			<ul>
				<li><a href="http://app.test/preguntas-y-respuestas-frecuentes" target="_blank">Preguntas frecuentes Agencia APP</a></li>
			</ul>
		</div>
	</section>

	<div class="container" style="margin: 60px 0 70px 0"><hr></div>

	<div id="content"></div><!--About Us 02-->
	<section>
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
						<p style="text-align: left"><b>Radicación Aprovechamiento Económico del Espacio Público:</b> <br>Calle 44 # 52-165, Sotano A - Alcaldía de Medellín. <br>Taquillas 11 y 12.</p>
						<p style="text-align: left"><b>Teléfono:</b> (+57) 604 448 1740 Ext 100</p>
						<p style="text-align: left"><b>Correo Institucional:</b> <a href="mailto:info@app.gov.co">info@app.gov.co</a></p>
						<p style="text-align: left"><b>Correo notificaciones judiciales:</b> <a href="mailto:procesosjudiciales@app.gov.co">procesosjudiciales@app.gov.co</a></p>
						
						<h3 class="vlt-first-color m-0" style="text-align: left">Horario de atención</h3>
						<p style="text-align: left"><b>Lunes a jueves:</b> 7:30 a.m. a 12:30 p.m. y de 1:30 p.m. a 5:30 p.m.<br>
						<b>Viernes:</b> 7:30 a.m. a 12:30 p.m. y de 1:30 p.m. a 4:30 p.m.</p>

						<h3 class="vlt-first-color m-0" style="text-align: left">Contactos específicos de cada área</h3>
						<p style="text-align: left"><b>Atención al usuario de trámite Aprovechamiento Económico del Espacio Público.</b> <br>Teléfono: (+57) 604 385 55 55 Ext 9477 ó 8800.</p>
						<p style="text-align: left"><b>Subdirección de Gestión de Alianzas Publico Privadas:</b> <br>(+57) 604 448 1740 Ext 1201.</p>
						<p style="text-align: left"><b>Subdirección de Gestión Inmobiliaria:</b> <br>(+57) 604 448 1740 Ext 1301.</p>
						<p style="text-align: left"><b>Subdirección de Gestión de Paisaje y Patrimonio:</b> <br>(+57) 604 448 1740 Ext 1401.</p>

						<h3 class="vlt-first-color m-0" style="text-align: left">Dirección de correspondencia</h3>
						<p style="text-align: left">Carrera 50 Nº 52-25, Piso 8 - Edificio La Naviera, Medellín - Antioquia.</p>
						<hr>
						<a href="https://api.whatsapp.com/send/?phone=573022340175&text&type=phone_number&app_absent=0" target="_blank"><div class="buttom-whatsapp">Línea de atención WhatsApp - Agenda tu cita</div></a>
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
			<div class="container">
				<!--Animation Block-->
				
			</div>
		</section>
	</footer>
	



@endsection
