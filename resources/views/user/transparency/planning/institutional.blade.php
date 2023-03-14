@extends('layouts.app')
@section('body_color', '#b0f3b0;')
@section('content')

<section>
	<!--Page Title Hero-->
	<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
		<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/6.jpg')}}" alt="">
		<div class="vlt-page-title-hero__content">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<h3 class="vlt-page-title-hero__title">Transparencia
						</h3>
						<h1 class="vlt-page-title-hero__title" style="text-transform: none;">Plan estratégico institucional
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

	<div class="container mt-5">
		<div class="alert alert-danger text-center">
			La AGENCIA APP, se acoge al plan de <b>Desarrolo MEDELLÍN FUTURO 2020-2023</b>. <a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://ddddaaa89dac2b277befc10a93559c26" target="_blank">Ver plan de desarrollo</a>
		</div>
	</div>

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<h4>Plan estratégico institucional - AGENCIA APP 2020 (02) - 2025</h4>
				<iframe src="{{ asset('assets/pdf/planning/institutional/plan-estrategico-institucional-AGENCIA-APP-2020-(02)-2025.pdf') }}" width="100%" height="900px"></iframe>
				<div class="text-center">
					<a class="btn btn-primary mt-3" target="_blank" href="{{ asset('assets/pdf/planning/institutional/plan-estrategico-institucional-AGENCIA-APP-2020-(02)-2025.pdf') }}">
						Ver documento
					</a>
				</div>
			</div>
		</div>
	</div>
</section>


@include('includes.share')
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endpush