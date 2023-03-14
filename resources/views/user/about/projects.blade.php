@extends('layouts.app')
@section('content')
<section>
	<div class="container-fluid p-0">
		<!--Projects Showcase-->
		<div class=" vlt-projects-showcase vlt-projects-showcase--style-1">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="vlt-projects-showcase__item p-5">
						<div class="vlt-projects-showcase__image">

							<video id="atanasio" muted loop>
								<source src="{{ asset('assets/videos/projects/lg/atanasio.mp4')}}" type="video/mp4">
							</video>

							<video id="atanasio-xl" muted loop>
								<source src="{{ asset('assets/videos/projects/xl/atanasio.mp4')}}" type="video/mp4">
							</video>

							{{-- <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div> --}}
						</div>
						<div class="vlt-projects-showcase__content">
							{{-- <h3 style="text-transform: none;"><a href="single-work-01.html">Estadio Atanasio Girardot</a>
							</h3><span class="vlt-display-1">Subdirección APP</span>
							<p>Intervención del Estadio Atanasio Girardot con el fin de convertirlo en un escenario de talla mundial maximizando la generación de ingresos.
							</p> --}}
							<h3>
								<a href="{{ route('user.projects.estadio') }}" class="view_more">
									<i class="leedo-right-arrow"></i>
									Ver más
								</a>
							</h3>
						</div>
					</div>
					<div class="vlt-projects-showcase__item">
						<div class="vlt-projects-showcase__image">
							<img id="puentes_verdes_img" class="swiper-lazy" data-src="{{ asset('assets/img/attachment-53.jpg')}}" alt="">

							<video id="puentes-verdes" muted loop>
								<source src="{{ asset('assets/videos/projects/lg/puentes-verdes.mp4')}}" type="video/mp4">
							</video>

							<video id="puentes-verdes-xl" muted loop>
								<source src="{{ asset('assets/videos/projects/xl/puentes-verdes.mp4')}}" type="video/mp4">
							</video>

							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
						<div class="vlt-projects-showcase__content">
							{{-- <h3 style="text-transform: none;"><a href="single-work-02.html">Puentes verdes</a>
							</h3><span class="vlt-display-1">Subdirección APP</span>
							<p>-
							</p> --}}
							<h3>
								<a href="{{ route('user.projects.puentes-verdes') }}">
									<i class="leedo-right-arrow"></i>
									Ver más
								</a>
							</h3>
						</div>
					</div>

					<div class="vlt-projects-showcase__item">
						<div class="vlt-projects-showcase__image">
							<img id="naviera_img" class="swiper-lazy" data-src="{{ asset('assets/img/attachment-53.jpg')}}" alt="">

							<video id="naviera" muted loop>
								<source src="{{ asset('assets/videos/projects/lg/naviera.mp4')}}" type="video/mp4">
							</video>

							<video id="naviera-xl" muted loop>
								<source src="{{ asset('assets/videos/projects/xl/naviera.mp4')}}" type="video/mp4">
							</video>

							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
						<div class="vlt-projects-showcase__content">
							{{-- <h3 style="text-transform: none;"><a href="single-work-04.html">Cárcel Agroindustrial</a>
							</h3><span class="vlt-display-1">Subdirección APP</span>
							<p>Cárcel para Medellín con implementación de áreas productivas que permitirá la resocialización y mejorar la calidad de vida de la población privada de su libertad.
							</p> --}}
							<h3>
								<a href="{{ route('user.projects.naviera') }}" class="text-white">
									<i class="leedo-right-arrow"></i>
									Ver más
								</a>
							</h3>
						</div>
					</div>

					<div class="vlt-projects-showcase__item">
						<div class="vlt-projects-showcase__image">
							<img id="naviera_img" class="swiper-lazy" data-src="{{ asset('assets/img/bg/10.jpg')}}" alt="">
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
						<div class="vlt-projects-showcase__content">
							<h3 style="text-transform: none;"><a href="{{ route('user.projects.index') }}">Ver más proyectos</a>
							</h3>
							<a href="#"><i class="leedo-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@push('scripts')
	<script type="text/javascript">

		document.getElementById("atanasio").play();
		document.getElementById("atanasio-xl").play();
	

		setTimeout(function(){
			document.getElementById("puentes_verdes_img").style.display = 'none';
	      document.getElementById("puentes-verdes").play();
	      document.getElementById("puentes-verdes-xl").play();
	   }, 1600);

	   setTimeout(function(){
	   	//document.getElementById("naviera_img").css('display', 'none');
	   	document.getElementById("naviera_img").style.display = 'none';
	      document.getElementById("naviera").play();
	      document.getElementById("naviera-xl").play();
	    }, 2200);
	</script> 
@endpush