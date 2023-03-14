@extends('layouts.app')
@section('content')
@section('body_color', '#FEF38F;')
	<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
				
							<h1 class="vlt-page-title-hero__title" style="text-transform: none;">
							Rendición de cuentas
							</h1>
							
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

				</div>
			</div>

		 <section class="mb-5 pb-5">

				<h4 class="text-center mb-5">Reglamento audiencia pública de rendición de cuentas</h4>

				<p>
					La Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas público Privadas (Agencia APP), en cumplimiento del mandato contenido en el artículo 33 de la Ley 489 de 1998 y lo establecido en el documento Conpes 3654 de 2010 y en la Ley 1757 de 2015, ha organizado una audiencia pública para presentar la rendición de cuentas correspondiente a la gestión del dr. Rodrigo Foronda Morales, director de la Agencia APP, para el periodo correspondiente de enero 2020 a diciembre de 2020.
				</p>

				<p>
					Para la Agencia APP la rendición de cuentas es un espacio de interlocución entre los servidores públicos y la ciudadanía, y tiene como finalidad generar transparencia, condiciones de confianza entre gobernantes y ciudadanos y garantizar el ejercicio del control social a la administración pública; sirviendo además de insumo para ajustar proyectos y planes de acción para su realización. Consiste en responder ante el ciudadano, como soberano, por deberes y obligaciones de la Administración Pública asignadas por la constitución y las leyes. La estrategia de rendición de cuentas se configura para la Agencia APP como el mecanismo de doble vía en el que el derecho a la información clara, contundente y precisa es vital para garantizar la transparencia en los procesos de dar cuenta ofreciendo las respuestas necesarias y la posibilidad de retroalimentar dichos procesos bajo el enfoque de mejora continua. La Agencia APP considera la rendición de cuentas como un espacio continuo, dinámico y un mecanismo de articulación entre la administración pública y la sociedad colombiana, buscando valor Agencia APP, con posibilidad de retroalimentación y respeto por las sugerencias de mejora.
				</p>

				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<iframe src="{{ asset('assets/pdf/reglamento-audiencia-publica.pdf') }}" width="100%" height="900px"></iframe>
						</div>
					</div>
				</div>	
			</section>

            </div>
			
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
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/rendición/de/cuentas/reglaments" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/rendición/de/cuentas/reglaments" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
			                     </div>
	                	</div>
	                 </div>
	                      <div class="vlt-gap-100"></div>   
              </section>						</footer>

		</div>

			
	</section>


@endsection