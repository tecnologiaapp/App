@extends('layouts.app')
@section('content')
@section('body_color', '#FFFFFF;')

<div class="content" style="padding-top: 80px;">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<div class="text-justify">
						<div class="section-title" style="padding-top: 60px;">
							<h2>El 13 de marzo se adjudicará el contrato de interventoría para la construcción de la Cárcel Metropolitana para Sindicados</h2>
						</div>
						<ul class="list-constelaciones">
							<li>Medellín es la primera ciudad en acatar los fallos de las Altas Cortes que obligan a los municipios a tener un establecimiento carcelario de estas características.</li>
							<li>Hoy, se conocerá la evaluación de las propuestas. Los oferentes tendrán tres días hábiles para presentar sus observaciones.</li>
							<li>Las tres firmas proponentes son: Consorcio Metropol, Consorcio Intercárceles y Consorcio MZCJ 2024.</li>
						</ul>
						<section class="img-new">
							<a target="_blank"><img class="img-fluid img-border" src="{{asset('assets/img/Galeria/carcel/4.jpg')}}"></a>
						</section>
						<div class="section-title">
						<h2>Boletin de prensa # 93</h2>
						</div>
						<hr>
						<embed height="220" src="{{asset('assets/pdf/boletin-prensa-93.pdf')}}" type="application/pdf" width="300">
						<hr>
						<hr>
						<div class="section-title">
						<h3>Palabras del director general de la Agencia APP, German Schäfer</h3>
						</div>
					<br>                     				
                    <div style="text-align:center;"class="col-sm-12 pt-4">
						<iframe src="{{ asset('assets/img/Galeria/carcel/Video-2024-03-05.mp4') }}" width="700" height="400"></iframe>
					</div>
                   	<div class="col-sm-12 pt-4" style="text-align:center;">
					</div>
				</div><br>
	</div>
	</div>
	<footer class="vlt-single-post__footer">
		<section style="background-color: transparent;">
			<div class="vlt-gap-100"></div>
			<div class="container">
				<!--Animation Block-->
				<div class="vlt-animation-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">
					<!--Social Share-->
					<div class="vlt-social-share text-center">
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/noticias/new50" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/noticias/new50" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection