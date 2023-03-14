@extends('layouts.app')
@section('body_color', '#bcdcff40;')
@section('content')

<section>
	<!--Page Title Hero-->
	<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
		<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
		<div class="vlt-page-title-hero__content">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<h3 class="vlt-page-title-hero__title">Transparencia
						</h3>
						<h1 class="vlt-page-title-hero__title" style="text-transform: none;">Manual de gestión de cobro persuasivo y coactivo
						</h1>
						<div class="vlt-post-meta vlt-display-1"><span>AGENCIA APP</span></div>
					</div>
				</div>
			</div>
		</div><a class="vlt-scroll-to-arrow" href="#content"><i class="leedo-download-arrow"></i></a>
	</div>
	<div id="content"></div>
</section>

<section>
	<div class="vlt-gap-120"></div>

	<!--Particle-->
	<div class="vlt-particle" data-jarallax-element="-500 10"><img src="{{ asset('assets/img/root/particle-01--black.png')}}" width="200" alt=""></div>
	<!--Particle-->

	<div class="container mt-5">

		<h5 class="mt-5 mb-5">Manual de gestión de cobro persuasivo y coactivo</h5>

		<embed src="{{ asset('assets/pdf/manual-de-gestion-de-cobro-persuasivo-y-coactivo.pdf') }}" height="380" type="application/pdf">

	</div>
</section>


@include('includes.share')
@endsection