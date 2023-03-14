@extends('layouts.app')
@section('content')
@section('body_color', '#FFFFFF;')
	<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/4.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<h1 class="vlt-page-title-hero__title" style="text-transform: none;">
							Plaza Minorista
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
		<div class="vlt-gap-0"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 offset-md-9">
					<div class="vlt-particle d-flex justify-content-center" data-jarallax-element="100 0"><img src="{{ asset('assets/img/root/particle-02.png')}}" alt=""></div>
				</div>
		
			</div>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="text-justify">
								<div class="vlt-gap-15"></div>

							

								
								<hr>
								<p>Renovación de la infraestructura actual de la central de abastos de la ciudad que busca garantizar el correcto acopio, la seguridad agroalimentaria y el acceso adecuado y de calidad a toda la población, así como aportar a la revitalización urbana de la zona norte del centro de la ciudad y dinamizar el turismo gastronómico. Con este proyecto se espera beneficiar a más de 12.000 comerciantes, productores y visitantes, mejorar las condiciones de los espacios, ser un atractivo turístico, gastronómico y contribuir a la renovación de las plazas de mercado del país. 
								</p>
                                <hr>
								
                               <div align="center"> <img src="{{ asset('assets/img/Proyectos/Minorista.webp')}}" alt=""></div>

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
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/proyectos/minorista" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/proyectos/minorista" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
			                     </div>
	                	</div>
	                 </div>
	                      <div class="vlt-gap-100"></div>   
              </section>						</footer>
@endsection