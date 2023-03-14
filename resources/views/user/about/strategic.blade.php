@extends('layouts.app')

@section('content')

<section>
		
		<div class="embed-responsive embed-responsive-16by9">
			<div class="vlt-page-title-hero__overlay"></div>
			<video width="800" id="homeVideoMobile" playsinline autoplay muted loop>
				<source src="{{ asset('assets/videos/promo.mp4')}}" type="video/mp4">
			</video>
		</div>
		<div id="content"></div>


</section>


	<div class="vlt-single-post-wrapper vlt-single-post-wrapper--style-1">
		<div class="container">
			<article class="vlt-single-post">
				<div class="vlt-animation-block mb-5 text-center" data-aos="fade" data-aos-delay="0">
					<h1 style="font-size: 8rem;" class="m-0"><span class="vlt-highlight">Mapa estratégico.</span></h1>
				</div>

							<p>
								En la Agencia APP posibilitamos el desarrollo de proyectos sostenibles de ciudad, vinculando las fortalezas y el poder transformador de la unión entre el sector público y el privado, para contribuir a la felicidad y calidad de vida de su gente.
							</p>

					

		



			</article>

		</div>

	</div>

	
	@endsection