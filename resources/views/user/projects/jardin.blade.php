@extends('layouts.app')
@section('content')
@section('body_color', '#ffffff;')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/bg/5.jpg')}}">
			<div class="vlt-page-title-hero__content">
				<h1 style="color:white;">Avenida Jardín</h1>
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
								<p>Revitalizamos esta avenida, entre el primer y segundo parque de Laureles, y la avenida Nutibara, con un corredor verde y el mejoramiento del espacio público. Intervenimos 1.294 m2 de espacio público, impactamos la calidad de vida de 116.000 residentes y sembramos 5.000 plantas y 370 árboles. Asimismo, ejecutamos el mantenimiento, la reparación de los elementos arquitectónicos y la regulación de avisos de identificación en 13 predios vinculados.</p>
								<hr>
								<div align="center"><img alt="" src="{{asset('assets/img/Proyectos/Avenida-Jardin.webp')}}"></div>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/proyectos/avenida_jardin" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/proyectos/avenida_jardin" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection