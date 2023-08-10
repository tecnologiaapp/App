@extends('layouts.app')
@section('content')
@section('body_color', '#ffffff;')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerHotelYcentroDeNegociosPlazaMayor.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Hotel y centro de negocios Plaza Mayor</h1>
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
								<div class="vlt-gap-15"></div>
								<hr>
								<p>Somos un aliado de Plaza Mayor Medellín Convenciones y Exposiciones S. A. para convertir a Medellín en un centro de eventos nacional e internacional que atraiga más recursos y talentos, que genere empleo y que promueva más visitas de personas del país y del extranjero que deseen conocer la transformación de la ciudad. Desde la Agencia APP ponemos toda nuestra capacidad humana, técnica y de conocimiento para liderar la realización de la estructuración integral–técnica, jurídica y financiera– de este proyecto inmobiliario de servicios hoteleros y centro de negocios, a través de la vinculación de capital privado. De acuerdo con la normatividad vigente proyectamos hasta 23 niveles con zonas comerciales y de servicios, áreas de coworking, oficinas y gastronomía, oficinas, habitaciones y un centro de convenciones con salas VIP.</p>
								<hr>
								<div align="center"><img alt="" src="{{asset('assets/img/Proyectos/imgHotelYcentroDeNegociosPlazaMayor.png')}}"></div>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/proyectos/plaza_mayor" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/proyectos/plaza_mayor" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection