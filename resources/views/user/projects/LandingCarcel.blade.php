<!DOCTYPE html>
<html lang="es">
<head>

	<style>
	     .row{
	           justify-content: space-around;

	       }

	       .btn-primary {
	         background-color:#b3348a;
	       }
	.count-box{
	   display: block;
	   align-items: center;
	   width: 100%;
	   background: #fff;
	   padding: 30px;
	   border-radius: 5px;
	   box-shadow: 0px 0 30px rgb(1 41 112 / 8%);
	   justify-content: center;
	}

	h2,span{
	   display: inline-block;
	   /* margin: 15px 0;
	   font-size: 30px;
	   color: #000; */
	}
	.count-box i {
	   font-size: 42px;
	   line-height: 0;
	   display:block;
	   color: #4154f1;
	}

	.video-responsive {
	   height: 0;
	   overflow: hidden;
	   padding-bottom: 56.25%;
	   padding-top: 30px;
	   position: relative;
	   }
	.video-responsive iframe, .video-responsive object, .video-responsive embed {
	   height: 100%;
	   left: 0;
	   position: absolute;
	   top: 0;
	   width: 100%;
	   }

	</style>
	<link href="{{ asset('assets/css/footer.css') }}" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js">
	</script>
	<title></title>
</head>
<body>
	@include('includes.header.LandingCarcel')
   <!-- ======= Hero Section ======= -->
	<section class="d-flex align-items-center" id="hero">
		<div class="container" style="padding-top:70px;">
			<div class="row">
				<div>
					<h1 style="color:black; text-align:center;">Cárcel Metropolitana para Sindicados</h1>
				</div>
			</div>
			<div class="video-responsive">
				<iframe allowfullscreen frameborder="0" src="https://www.youtube.com/embed/8vadSCij5Ew" title="YouTube video player"></iframe>
			</div>
		</div>
	</section><!-- End Hero -->
	<main id="main">
		<!-- ======= About Us Section ======= -->
		<section class="about" id="contexto">
			<div class="container" data-aos="fade-up">
				<div class="row content">
					<p>La Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas -Agencia APP-, a través de la Subdirección de Gestión de Alianzas Público Privadas, estructuró este proyecto de Asociación Público Privada (Ley 1508 de 2012), primero de su tipo en Colombia, en el que el Distrito de Medellín contará con un nuevo centro de detención preventiva para personas en calidad de sindicados, con capacidad para albergar hasta 1.339 internos en cinco pabellones y edificios especializados para la atención, tratamiento y administración de justicia y de sanidad.</p>
				</div><br>
				<div class="container-fluid" data-aos="fade-up">
					<div class="row">
						<div class="content">
							<div class="section-title">
								<h2>¿Por qué una cárcel para sindicados?</h2>
							</div>
							<p>La Cárcel Metropolitana para Sindicados es una necesidad de gran prioridad debido a la situación actual que desborda la capacidad del Sistema Penitenciario y Carcelario de Colombia pero, sobre todo, el estado crítico que tiene Medellín y el Área Metropolitana con un hacinamiento entre el 200% y el 250%, según cifras de la Secretaría de Seguridad y Convivencia con corte al 2022.</p>
							<p>Debido a la existencia de una serie de vulneraciones que han permeado el sistema carcelario del país y la Declaración del Estado de Cosas Inconstitucionales, la Corte Suprema de Justicia, mediante sentencias No. STP-14283 de 2019 y la No. SU-122 de 2022, ratificó la necesidad de garantizar y mejorar las condiciones físicas y materiales de la población en calidad de sindicada.</p>
							<p>Como resultado de esto, la Agencia APP, en convenio con la Secretaría de Seguridad y Convivencia del Distrito de Medellín, lideró la estructuración de este proyecto a través del mecanismo de Asociación Público Privada (Ley 1508 de 2012) que dará una respuesta viable y digna para albergar a las personas privadas de la libertad en condición de sindicados con una infraestructura de calidad que garantice el respeto de los derechos humanos. Con la Cárcel Metropolitana para sindicados se logrará:</p>
						</div>
					</div>
          <!-- ======= Features Section ======= -->
					<section class="features" id="features">
						<div class="container" data-aos="fade-up">
							<div class="section-subtitle" style="margin-top: 50px;">
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleControls">
										<div class="carousel-inner">
											<div class="carousel-item active"><img class="d-block w-100" src="assets/img/carcel/1.jpg"></div>
											<div class="carousel-item"><img class="d-block w-100" src="assets/img/carcel/2.png"></div>
											<div class="carousel-item"><img class="d-block w-100" src="assets/img/carcel/3.png"></div>
										</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleControls" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleControls" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
									</div>
								</div>
								<div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
									<div class="icon-box mt-0" data-aos="zoom-in" data-aos-delay="150">
										<i class="fa-sharp fa-solid fa-arrow-trend-up"></i>
										<p><b>Mejorar las condiciones</b> para la reclusión de los sindicados del Distrito y los indicadores de hacinamiento.</p>
									</div>
									<div class="icon-box mt-4" data-aos="zoom-in" data-aos-delay="150" style="padding-top:5px;">
										<i class="fa-regular fa-thumbs-up"></i>
										<p><b>Dar cumplimiento a las sentencias</b> STP-14283 de 2019 y SU-122 de 2022 de la Corte Constitucional de Colombia.</p>
									</div>
									<div class="icon-box mt-4" data-aos="zoom-in" data-aos-delay="150" style="padding-top:5px;">
										<i class="bi bi-person-check-fill"></i>
										<p style="padding-top:10px;"><b>Implementar procesos</b> de acompañamiento en población sindicada.</p>
									</div>
									<div class="icon-box mt-4" data-aos="zoom-in" data-aos-delay="150" style="padding-top:5px;">
										<i class="fa-solid fa-people-line"></i>
										<p><b>Reducir el hacinamiento</b> en Estaciones de Policía y Centros de Paso.</p>
									</div>
								</div>
							</div>
						</div>
					</section>
          <!-- End Features Section -->
				</div>
        <!-- ======= Counts Section ======= -->
				<section class="counts" id="counts">
					<div class="container" data-aos="fade-up">
						<div class="row gy-4">
							<div class="col-lg-3 col-md-6">
								<div class="count-box">
									<div align="center">
										<i class="bi bi-people" style="color: #ffc451;"></i>
										<h2 class="counter">1.900</h2><span><br></span>
										<p>Sindicados en estaciones de Policía del Valle de Aburrá en 2022.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="count-box">
									<div align="center">
										<i class="bi bi-building" style="color: #ffc451;"></i>
										<h2 class="counter">248</h2><span style="font-size:30px;">%</span>
										<p>Hacinamiento en Estaciones de Policía del Valle de Aburrá en 2022.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="count-box">
									<div align="center">
										<i class="bi bi-bank" style="color: #ffc451;"></i>
										<h2 class="counter">150</h2><span style="font-size:30px;">%</span>
										<p>Hacinamiento en Colombia en Centros Transitorios de Reclusión en 2022.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
        <!-- End Counts Section -->
				
			</div>
		</section>
    <!-- End About Us Section -->
		<section class="why-us" id="donde" style="padding-top: 20px; background-color:#f6f9fe;">
			<div class="container" data-aos="fade-up">
				<div class="section-title">
					<h2>¿Qué es una Asociación Público Privada (APP)?</h2>
				</div>
				<div class="row">
					<p>Es un mecanismo de contratación donde el Estado vincula capital privado para la construcción y el sostenimiento de infraestructura pública. Este tipo de asociaciones aportan mayor eficiencia, sostenibilidad en la provisión del servicio, al contar con indicadores de cumplimiento que se miden periódicamente por una interventoría y una supervisión; además, permite el equilibrio en la distribución de riesgos, lo que genera grandes ahorros para el sector público.</p>
					<p>La APP para la Cárcel Metropolitana para Sindicados cumplirá con estándares nacionales e internacionales y las condiciones adecuadas para el tratamiento y acompañamiento psicosocial de los sindicados y por supuesto, sus familias. Gracias a este modelo se logra:</p>
				</div>
			</div>
			<section class="features" id="features">
				<div class="container" data-aos="fade-up">
					<div class="row">
						<div class="col-lg-6" data-aos="fade-rigth" data-aos-delay="100" style="padding-right: 30px;">
							<div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
								<i class="fa-solid fa-magnifying-glass-arrow-right"></i>
								<p style="font-size:14px;"><b>Transferir los riesgos del proyecto</b> según las capacidades del actor más idóneo, sea público o privado.</p>
							</div>
							<div class="icon-box mt-2" data-aos="zoom-in" data-aos-delay="150">
								<i class="fa-solid fa-magnifying-glass-chart"></i>
								<p style="font-size:14px;"><b>Cumplir con los indicadores</b> de servicio para garantizar un centro de excelente calidad y promover la protección de los derechos humanos.</p>
							</div>
							<div class="icon-box mt-2" data-aos="zoom-in" data-aos-delay="150">
								<i class="fa-solid fa-person-chalkboard"></i>
								<p style="font-size:14px;"><b>Reducir los riesgos de retraso</b> en la construcción de la obra porque el Estado realiza el primer desembolso una vez la cárcel comience a operar.</p>
							</div>
							<div class="icon-box mt-2" data-aos="zoom-in" data-aos-delay="150">
								<i class="fa-solid fa-file-circle-plus"></i>
								<p style="font-size:14px;"><b>Garantizar materiales de alta calidad</b> y tecnología para mantener la infraestructura.</p>
							</div>
							<div class="icon-box mt-2" data-aos="zoom-in" data-aos-delay="150">
								<i class="fa-solid fa-people-arrows"></i>
								<p style="font-size:14px;"><b>Prevenir el hacinamiento</b> porque se establecen multas por el número de internos que estén por fuera de la capacidad de la cárcel.</p>
							</div>
							<div class="icon-box mt-2" data-aos="zoom-in" data-aos-delay="150">
								<i class="fa-solid fa-arrows-to-dot"></i>
								<p style="font-size:14px;"><b>Ser referente de innovación</b> al ser la primera Asociación Público Privada carcelaria de Colombia.</p>
							</div>
							<div class="icon-box mt-2" data-aos="zoom-in" data-aos-delay="150">
								<i class="fa-solid fa-person-circle-check"></i>
								<p style="font-size:14px;"><b>Garantizar la protección al máximo de los recursos públicos</b> al remunerar al concesionario privado, siempre y cuando se cumplan los indicadores de servicio y estándares de calidad del proyecto.</p>
							</div>
						</div>
						<div class="image col-lg-6"><img src="assets/img/carcel/7.jpg" style="width:100%; height:400px;"></div>
					</div>
				</div>
			</section>
		</section>
		<section class="about" id="proyecto">
			<div class="container" data-aos="fade-up">
				<div class="section-title">
					<h2>La nueva Cárcel Metropolitana para Sindicados</h2>
				</div>
				<div class="row content">
					<p>El centro de detención preventiva para personas en calidad de sindicados, Cárcel Metropolitana para Sindicados, ubicada en el corregimiento de San Cristóbal, en Medellín, contará con una capacidad para albergar 1.339 internos en cinco pabellones. Además, tendrá edificios especializados para la atención y tratamiento, y administración de justicia y sanidad. Esta estructura se desarrollará a través de un modelo de Asociación Público Privada (APP), de iniciativa pública, para diseñar, construir, dotar, operar, mantener y prestar servicios complementarios como alimentación, lavandería y aseo, entre otros.</p>
					<p>Esta cárcel será referente de Colombia, al ser la primera Asociación Público Privada carcelaria del país, lo que permitirá cumplir con el objetivo de servir como lugar de transición para las personas sindicadas y garantizar la protección de los derechos humanos; seguridad alimentaria; y eficiencia administrativa, operativa y económica.</p>
					<p><b>La nueva Cárcel Metropolitana para Sindicados será un ejemplo de administración eficiente, con infraestructura inclusiva, diversa y con el mayor grado de equidad. Además, será referente de la implementación de proyectos de infraestructura social a través del mecanismo de Asociación Público Privada en el país y en la región.</b></p>
				</div><br>
			</div>
		</section>
		<section class="why-us" id="beneficios">
			<div class="container">
				<div class="section-title">
					<h2>Beneficios</h2>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="box">
							<span>01</span>
							<h4 style="text-align:left;">Ser la primera Asociación Público Privada carcelaria del país.</h4>
						</div>
					</div>
					<div class="col-lg-4 mt-4 mt-lg-0">
						<div class="box">
							<span>02</span>
							<h4 style="text-align:left;">Disminuir el hacinamiento en Estaciones de Policía y Centros de Paso del Valle de Aburrá.</h4>
						</div>
					</div>
					<div class="col-lg-4 mt-4 mt-lg-0">
						<div class="box">
							<span>03</span>
							<h4 style="text-align:left;">Ofrecer un acompañamiento y tratamiento psicosocial a los sindicados y a sus familias.</h4>
						</div>
					</div>
					<div class="col-lg-4 mt-4 mt-lg-0">
						<div class="box">
							<span>04</span>
							<h4 style="text-align:left;">Generar espacios e infraestructura adecuada para promover el respeto y la garantía de los derechos humanos de los sindicados.</h4>
						</div>
					</div>
					<div class="col-lg-4 mt-4 mt-lg-0">
						<div class="box">
							<span>05</span>
							<h4 style="text-align:left;">Cumplir la sentencia judicial que exige al Distrito de Medellín la construcción de una cárcel para sindicados.</h4>
						</div>
					</div>
					<div class="col-lg-4 mt-4 mt-lg-0">
						<div class="box">
							<span>06</span>
							<h4 style="text-align:center;">Te invitamos a conocer el proyecto de pliegos publicado en SECOP I</h4>
							<div align="center">
								<a class="btn btn-primary btn-block" href="https://www.contratos.gov.co/consultas/detalleProceso.do?numConstancia=23-19-13468568&g-recaptcha-response=03AFY_a8VEiZSIA2iO5feV8iEeAHinJ8b0yMa17XKODavYIgZYR3hAjUcH2pZvbYrh6WMt9SFbbpZqMFE-t4Div8ITZzF8vHUf7Y-X6cEFC6FdSYoE6ee680GQH1y16kTLa2QHOdObvj19kJJvwfl69V5T665wNc063Bh99ZyfgcLUMQKKFiDtLt8bU_RPk_rk8GpPIl1hZg7f6YKQ5SpSEk3r02QKxZ-oB0ARJx-NnmUz2dFatmOX1k63hkwd84ZjdgAt0ZOkszciVa2R2GabRuYvm9h9S32NPoSkG0Eo02izRK97f_LwP4z_JhHuSXxkI5YZwyhJIxbSUv-bGoPO86yrQZe8wSnKpT7GC3VcQ65tZ-NMLcRxvTiyzFZ9Reb5qIP2nooWNMkO7c5gknRD1Visnv542NkRFOzKFTZE054dzqGjkSzGuY4F03wtHBnaqQ6oqvKmCmeiaTo-CarAhuUEUQ6OkpZNiy_vTpY8FlHFiEXjYSuU1RqSe3jaxpzehCLTMIgUV9rIQM_z7ooCF-IArejWJllilA" style="background-color:#b3348a; border-color:#b3348a;" target="_blank">Conócelo ahora</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="countas" id="countas">
			<div class="container">
				<div class="row counters position-relative">
					<div class="col-lg-3 col-6 text-center">
						<div align="center">
							<h2 class="counter" style=" display: inline-block; margin: 15px 0; font-size: 35px; color: #ffffff;">1.339</h2>
							<p><b>Personas privadas de la libertad.</b></p>
						</div>
					</div>
					<div class="col-lg-3 col-6 text-center">
						<div align="center">
							<h2 class="counter" style=" display: inline-block; margin: 15px 0; font-size: 35px; color: #ffffff;">4.000</h2><span style="font-size:25px;padding-left: 5px;"><b>m²</b></span>
							<p><b>De infraestructura de calidad.</b></p>
						</div>
					</div>
					<div class="col-lg-3 col-6 text-center">
						<div align="center">
							<h2 class="counter" style=" display: inline-block; margin: 15px 0; font-size: 35px; color: #ffffff;">30.000</h2><span style="font-size:25px;padding-left: 5px;"><b>m²</b></span>
							<p><b>Para la atención y acompañamiento psicosocial de los sindicados.</b></p>
						</div>
					</div>
					<div class="col-lg-3 col-6 text-center">
						<div align="center">
							<h2 class="counter" style=" display: inline-block; margin: 15px 0; font-size: 35px; color: #ffffff;">15</h2><span style="font-size:25px;padding-left: 5px;"><b>años</b></span>
							<p><b>Asociación Público Privada.</b></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<div class="section-title">
							<h2>¿Tienes dudas, comentarios o sugerencias? Escríbenos</h2>
						</div>
						<div class="card" style="background-color:#ffd178;">
							<div class="card-body">
								@if(Session::has('message_sent'))
								<div class="alert alert-success" role="alert">
									{{Session::get('message_sent')}}
								</div>@endif
								<form action="{{route('contact.send')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="form-group">
										<label for="name">Nombre:</label> <input class="form-control" name="name" required="" type="text">
									</div>
									<div class="form-group">
										<label for="email">Correo electrónico:</label> <input class="form-control" name="email" required="" type="email">
									</div>
									<div class="form-group">
										<label for="message">Mensaje:</label> 
										<textarea class="form-control" name="msg" required=""></textarea>
									</div><button class="btn btn-primary float-end mt-1" style="background-color:#b3348a; border-color:#b3348a;" type="submit">Enviar mensaje</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="section-title">
							<h2>¿Te gustaría recibir noticias del proyecto o de la Agencia APP?</h2>
						</div>
						<div align="center" style="background-color:#ffd178; width:100%; height:290px; display: flex; justify-content: center; align-items: center; border-radius:20px;">
							<a class="btn btn-primary btn-block" href="https://docs.google.com/forms/u/1/d/e/1FAIpQLSf4kgUoA-iOt07BfhnmdrrL2NNrEyy0VpoyyVMrrpgNH5zVZw/viewform?urp=gmail_link" style="background-color:#b3348a; border-color:#b3348a;" target="_blank">Suscríbete</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer id="footer">
			<div class="footer-top" style="text-align:left;">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 footer-contact">
							<h3>Agencia APP</h3>
							<p>Medellín / Antioquia<br>
							Carrera 55 # 42-180 Local 203 Edificio Plaza de La Libertad<br></p><a href="{{route('user.projects.mapa')}}">
							<p><strong>Mapa del sitio</strong></p></a>
						</div>
						<div class="col-lg-3 col-md-6 footer-contact">
							<h4>Contacto</h4>
							<p><strong>Teléfono:</strong> +57 604 448 1740</p>
							<p><strong>Correo:</strong> info@app.gov.co</p>
							<p><strong>Información general:</strong> info@app.gov.co</p>
						</div>
						<div class="col-lg-3 col-md-6 footer-contact">
							<h4>Redes sociales</h4>
							<p>Síguenos y entérate de todo</p>
							<div class="social-links mt-3">
								<a class="twitter" href="https://twitter.com/agenciaappmed?lang=es" target="_blank"><i class="bx bxl-twitter"></i></a> <a class="facebook" href="https://www.facebook.com/Agenciaappmede" target="_blank"><i class="bx bxl-facebook"></i></a> <a class="instagram" href="https://www.instagram.com/agenciaappmed/" target="_blank"><i class="bx bxl-instagram"></i></a> <a class="linkedin" href="https://co.linkedin.com/company/agencia-app-de-alcald%C3%ADa-de-medell%C3%ADn" target="_blank"><i class="bx bxl-linkedin"></i></a> <a class="youtube" href="https://www.youtube.com/channel/UCV1jArK6Q8cgXX7ESNocJxA" target="_blank"><i class="bx bxl-youtube"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 footer-contact">
							<div class="row" style="flex-wrap:nowrap;">
								<a href="{{url('/')}}" style="width: 174px; padding-top: 22px;" target="_blank"><img class="logo me-auto" height="110px;" src="assets/img/carcel/Logo-Agencia-APP-morado.png" style="padding-right: 45px;" width="240px;"></a> <a href="https://www.medellin.gov.co/" style="width: 174px" target="_blank"><img class="logo me-auto" height="150px;" src="assets/img/carcel/Distrito.png" style="padding-left: 10px; padding-right: 10px;" width="180px;"></a>
							</div>
						</div>
					</div>
				</div>
			</div><a class="back-to-top d-flex align-items-center justify-content-center" href="#"><i class="bi bi-arrow-up-short"></i></a>
		</footer>
    <!-- Vendor JS Files -->
		<script src="https://kit.fontawesome.com/5373575732.js">
		</script> 
		<script src="{{asset('assets/vendor/aos/aos.js')}}">
		</script> 
		<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}">
		</script> 
		<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}">
		</script> 
		<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}">
		</script> 
		<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}">
		</script> 
		<script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}">
		</script> 
		<script src="{{asset('assets/vendor/php-email-form/validate.js')}}">
		</script>
     <!-- Template Main JS File -->
		<script src="{{asset('assets/js/patrimonio.js')}}">
		</script> 
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
		</script> 
		<script src="js/scripts.js">
		</script> 
		<script src="https://cdn.startbootstrap.com/sb-forms-latest.js">
		</script> 
		<script src="{{asset('assets/js/mudag.js')}}">
		</script> 
		<script src="{{asset('assets/js/mein.js')}}">
		</script> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js">
		</script> 
		<script>
		      (function(e){"use strict";e.fn.counterUp=function(t){var n=e.extend({time:400,delay:10},t);return this.each(function(){var t=e(this),r=n,i=function(){var e=[],n=r.time/r.delay,i=t.text(),s=/[0-9]+,[0-9]+/.test(i);i=i.replace(/,/g,"");var o=/^[0-9]+$/.test(i),u=/^[0-9]+\.[0-9]+$/.test(i),a=u?(i.split(".")[1]||[]).length:0;for(var f=n;f>=1;f--){var l=parseInt(i/n*f);u&&(l=parseFloat(i/n*f).toFixed(a));if(s)while(/(\d+)(\d{3})/.test(l.toString()))l=l.toString().replace(/(\d+)(\d{3})/,"$1,$2");e.unshift(l)}t.data("counterup-nums",e);t.text("0");var c=function(){t.text(t.data("counterup-nums").shift());if(t.data("counterup-nums").length)setTimeout(t.data("counterup-func"),r.delay);else{delete t.data("counterup-nums");t.data("counterup-nums",null);t.data("counterup-func",null)}};t.data("counterup-func",c);setTimeout(t.data("counterup-func"),r.delay)};t.waypoint(i,{offset:"100%",triggerOnce:!0})})}})(jQuery);
		</script> 
		<script>
		      jQuery(document).ready(function($) {
		          $('.counter').counterUp({
		              delay: 10,
		              time: 1000
		          });
		      });

		</script>
    
	</main>
</body>
</html>