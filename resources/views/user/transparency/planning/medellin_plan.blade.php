@extends('layouts.app')
@section('body_color', '#ffc6b3;')
@section('content')

<section>
	<!--Page Title Hero-->
	<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
		<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/4.jpg')}}" alt="">
		<div class="vlt-page-title-hero__content">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<h3 class="vlt-page-title-hero__title">Transparencia
						</h3>
						<h1 class="vlt-page-title-hero__title" style="text-transform: none;">Seguimiento al plan indicativo del Municipio de Medellín
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
	<div class="vlt-particle" data-jarallax-element="-100 0"><img src="{{ asset('assets/img/root/particle-01--black.png')}}" width="200" alt=""></div>
	<!--Particle-->

	<div class="container mt-5">
		<h5 class="mt-5 mb-5">Aquí encontrarás el seguimiento al plan indicativo del Municipio de Medellín.</h5>

		<div class="alert alert-danger text-center">
			La AGENCIA APP, se acoge al plan de <b>Desarrolo MEDELLÍN FUTURO 2020-2023</b>. <a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://ddddaaa89dac2b277befc10a93559c26" target="_blank">Ver plan de desarrollo</a>
		</div>
	</div>

	<div class="container mt-5">
		<div class="accordion" style="background-color: transparent;" id="accordionExample">
			<div class="card team border-0">
				<div class="card-header" id="headingOne">
					<h2 class="mb-0">
						<button class="btn btn-link btn-block text-left text-dark font-bold" type="button" data-toggle="collapse" data-target="#actionPlan" aria-expanded="true" aria-controls="actionPlan">
							Seguimientos al plan indicativo del Municipio de Medellín
						</button>
					</h2>
				</div>

				<div id="actionPlan" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						<table class="table table-bordered table-striped custom-table">
							<tbody>

								<tr>
									<td>Seguimiento al plan indicativo - Diciembre 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/medellin/seguimiento-al-plan-indicativo-diciembre-2020.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Seguimiento al plan indicativo - Octubre 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/medellin/seguimiento-al-plan-indicativo-octubre-2020.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Seguimiento al plan indicativo - Agosto 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/medellin/seguimiento-al-plan-indicativo-agosto-2020.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Seguimiento al plan indicativo - Diciembre 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/medellin/seguimiento-al-plan-indicativo-diciembre-2019.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Seguimiento al plan de acción municipal - Junio 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/medellin/seguimiento-al-plan-de-accion-junio-2019.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Seguimiento al plan de acción municipal - Diciembre 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/medellin/seguimiento-al-plan-de-accion-diciembre-2018.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Seguimiento al plan de acción municipal - Marzo 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/medellin/seguimiento-al-plan-de-accion-marzo-2018.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
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