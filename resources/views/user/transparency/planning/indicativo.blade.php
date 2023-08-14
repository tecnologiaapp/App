@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')
<head>
<link rel="stylesheet" href="{{ asset('assets/css/transparencia.css')}}">
</head>

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/bg/5.jpg')}}">
			<div class="vlt-page-title-hero__content">
				<h1 style="color:white;">Plan indicativo</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container mt-5">
			<button class="accordion">PLANES INDICATIVOS</button>
			<div class="panel">
				<button class="accordion">2022</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan indicativo - Sexto bimestre 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Seguimiento-Plan_Indicativo-31diciembre2022_Definitivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Quinto bimestre 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/SeguimientoPI31Octubre2022_Definitivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Cuarto bimestre 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/SeguimientoPI31Agosto2022_Definitivo_Dep.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Tercer bimestre 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/SeguimientoPI30Junio2022_Definitivo_Dependencia(2).pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Segundo bimestre 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/SeguimientoPI30abril2022_Preliminar.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Primer bimestre 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Seguimiento-PI-28-febrero2022_Definitivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2021</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan indicativo - Seguimiento Diciembre de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan-indicativo-DICIEMBRE-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Seguimiento Septiembre de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan-indicativo-Seguimiento-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Seguimiento Agosto de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanIndicativo-seguimientoAGOSTO2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Seguimiento Junio de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanIndicativo-seguimientoJUNIO2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Seguimiento Marzo de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanIndicativo-seguimientoMARZO2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2020</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Formulación Plan Indicativo 2020-2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Formulaci%C3%B3nPlanIndicativo2020-2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Seguimiento DICIEMBRE de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanIndicativo-seguimientoDICIEMBRE2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Seguimiento OCTUBRE de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanIndicativo-seguimientoOCTUBRE2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Seguimiento AGOSTO de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanIndicativo-seguimientoAGOSTO2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2016 - 2019</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan Indicativo - seguimiento DICIEMBRE 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanIndicativo-seguimientoDICIEMBRE2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Indicativo - seguimiento DICIEMBRE 2018</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanIndicativo-seguimientoDICIEMBRE2018.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Indicativo - seguimiento DICIEMBRE 2017</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanIndicativo-seguimientoDICIEMBRE2017.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Indicativo - seguimiento DICIEMBRE 2016</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanIndicativo-seguimientoDICIEMBRE2016.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/rendicion/plan_indicativo" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/rendicion/plan_indicativo" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection

@push('scripts')

<script src="{{ asset('assets/js/acordion.js')}}"></script>
@endpush
