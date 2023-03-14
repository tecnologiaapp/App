@extends('layouts.app')
@section('content')
@section('body_color', '#FFFFFF;')
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">
		
							<h1 style="color:white;">
							Centro de Detención Preventiva para Sindicados
							</h1>
		
			</div>

		</div>
		
	</section>
	<!--Content-->

	<section>
		<div class="vlt-gap-0"></div>
		<div class="container">
			<div class="row">

			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="text-justify">
								<div class="vlt-gap-15"></div>
								<!--Animation Block-->
                                                         <hr>
                                                         <p>
														 Un nuevo centro de detención preventiva para personas en calidad de sindicados del Valle
de Aburrá, que contará con capacidad para albergar 1.339 internos en cinco pabellones,
complementado con edificios especializados para la atención y tratamiento, administración
de justicia y sanidad. Es un Asociación público Privada de Iniciativa Pública para el diseño,
construcción, dotación, operación, mantenimiento y prestación de servicios
complementarios tales como alimentación, lavandería, aseo entre otros, en una Cárcel
Metropolitana para personas privadas de la libertad en condición de sindicados.
                                                         </p>
														 <ul>
															<li>Disminución del hacinamiento en estaciones de policía y centro de paso del Valle
de Aburrá.</li>
<li>Apoyo psicosocial a los internos y a las familias.</li>
<li>Disminución de los costos operativos al estado por traslados a centros de salud y
tribunales de justicia.</li>
<li>Espacios e infraestructura adecuada para las personas privadas de la libertad.
(PPL)</li>
<li>Reducción de demandas al estado por situación actual carcelaria.</li>
<li>Estudio, capacitación y trabajo para los internos.</li>

														 </ul>
														 <p>
El proyecto contempla 15 años de concesión en el que la entidad Pública a través de
vigencias futuras pagará al aliado privado bajo el cumplimiento de indicadores de calidad
establecidos en el contrato. Actualmente se encuentra finalizando la estructuración de la
fase de aprobaciones al interior del conglomerado y se espera publicar el proceso de
licitación pública en el primer trimestre del 2023 para adjudicar en el mes de junio del mismo
año.
</p>
														 <hr>
														 <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="{{ asset('assets/img/Proyectos/sack.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="{{ asset('assets/img/Proyectos/3.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item"  data-bs-interval="5000">
      <img src="{{ asset('assets/img/Proyectos/4.png')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item"  data-bs-interval="5000">
      <img src="{{ asset('assets/img/Proyectos/5.png')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item"  data-bs-interval="5000">
      <img src="{{ asset('assets/img/Proyectos/6.png')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item"  data-bs-interval="5000">
      <img src="{{ asset('assets/img/Proyectos/7.png')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
														 
							</div>
						</div>
					</div>
				</div>
			</section>

</div>
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
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/proyectos/centro_detencion" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/proyectos/centro_detencion" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
			                     </div>
	                	</div>
	                 </div>
	                      <div class="vlt-gap-100"></div>   
              </section>						</footer>
@endsection
