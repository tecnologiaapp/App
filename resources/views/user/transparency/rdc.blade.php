@extends('layouts.app')
@section('content')

	<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/9.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<h3 class="vlt-page-title-hero__title">Transparencia
							</h3>
							<h1 class="vlt-page-title-hero__title" style="text-transform: none;">
							Rendición de cuentas 2020
							</h1>
							<div class="vlt-post-meta vlt-display-1">
								<span>AGENCIA APP</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class="vlt-scroll-to-arrow" href="#content"><i class="leedo-download-arrow"></i></a>
		</div>
		<div id="content"></div>
	</section>
	<!--Content-->

	

	@include('includes.share')
@endsection
