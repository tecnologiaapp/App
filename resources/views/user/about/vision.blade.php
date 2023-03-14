@extends('layouts.app')
@section('body_color', '#FEF38F;')
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
					<h1 style="font-size: 8rem;" class="m-0"><span class="vlt-highlight">Valores</span></h1>
				</div>

                <p>
								En proceso
							</p>

					

		



			</article>

		</div>

	</div>

	
	@endsection