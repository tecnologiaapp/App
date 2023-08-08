@extends('layouts.app')
@section('content')
@section('body_color', '#FFFFFF;')
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/Banners/BannerMedellinSaludable.jpg')}}" alt="">
				<div class="vlt-page-title-hero__content ocultPosition">

					<h1 style="color:white;">
					Medellín saludable
					</h1>
				</div>
			</div>
		</div>		
</section>
	<!--Content-->
	<section>
		<div class="vlt-gap-0"></div>
		<div class="container">
			<div class="row">
		
			</div>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="text-justify">
								<div class="vlt-gap-15"></div>

							

								<hr>
								<p>Medellín saludable consiste de la dotación de 100 módulos sanitarios para mujeres y
								hombres provistos de equipos y accesorios de última tecnología y automatizados; asimismo,
								suministro de agua pura refrigerada y filtrada para consumo humano a través de 240
								módulos dispensadores. El proyecto es una Asociación público Privada de Iniciativa Privada
								sin recursos públicos para el diseño, instalación, dotación, operación, mantenimiento,
								administración de Módulos Sanitarios Automatizados y Módulos Automatizados de Agua
								dispensada, en el área urbana de la ciudad de Medellín.
								</p>

								<p>El proyecto será financiado 100% con recursos privados, en un contrato de concesión de 30
								años. Actualmente la prefactibilidad se encuentra aprobada por la Agencia APP; y el
								originador se encuentra en fase de elaboración de factibilidad, que presentará en 2023, para
								evaluación y posterior Audiencia de terceros interesados.
								</p>
								<h3>Beneficios del proyecto:</h3>
								<p>Todos los habitantes de Medellín y posibles visitantes serán los beneficiados. Se estima que
								estos espacios presten un servicio los siete días a la semana y estén acompañados, entre
								otras características, de un programa de prevención en salud y de acceso a internet wifi.
								</p>

                                <hr>
								
                               <div align="center"> <img src="{{ asset('assets/img/Proyectos/MedellinSaludable.png')}}" alt=""></div>

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
		                 		<h5 class="vlt-display-1">Compártelo
		                              		</h5>
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/proyectos/medellin_saludable" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/proyectos/medellin_saludable" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
			                     </div>
	                	</div>
	                 </div>
	                      <div class="vlt-gap-100"></div>   
              </section>						</footer>
@endsection