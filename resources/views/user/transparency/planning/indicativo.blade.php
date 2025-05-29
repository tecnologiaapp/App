@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')
<head>
<link rel="stylesheet" href="{{ asset('assets/css/transparency.css')}}">
</head>

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/indicativo.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Plan indicativo</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container mt-5">
			<button class="accordion">PLANES INDICATIVOS</button>
			<div class="panel">
			<button class="accordion">2025</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
						    <tr>
								<td>Plan indicativo - Abril</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2025/PlanIndicativo-Abril2025.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						    <tr>
								<td>Plan indicativo - Febrero </td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2025/PlanIndicativo-Feb2025.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			<button class="accordion">2024</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
						    <tr>
								<td>Plan indicativo - Diciembre 2024</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/Planindicativo-diciembre2024.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						    <tr>
								<td>Plan indicativo - Octubre 2024</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/PLAN-INDICATIVO-DEFINITIVO-CORTE-OCTUBRE-2024.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						    <tr>
								<td>Plan indicativo - Agosto 2024</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/Seguimiento-Plan-Indicativo-Agosto31de2024-Dependencia.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Julio 2024</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/Seguimiento-Plan-Indicativo-Julio-31-de-2024-Preliminar.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			<button class="accordion">2023</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
						    <tr>
								<td>Plan indicativo - Diciembre 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2023/Plan-Indicativo-Diciembre-31-de-2023-Dependencia-Definitivo-Agencia-APP.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Quinto bimestre 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2023/indicativo/Seguimiento PI_Octubre31_Preliminar.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Cuarto bimestre 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2023/indicativo/Plan Indicativo Agosto31 - Definitivo (1).pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Tercer bimestre 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2023/indicativo/Seguimiento Plan Indicativo Junio 30 de 2023 - Definitivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Segundo bimestre 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2023/indicativo/Plan Indicativo 30 Abril 2023-Definitivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Primer bimestre 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2023/indicativo/Seguimiento-Plan_Indicativo-28Febrero2023_Definitivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
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
				</div>
				<button class="accordion">2021</button>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan-Indicativo-seguimiento-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Seguimiento Agosto de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Indicativo - seguimiento AGOSTO 2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Seguimiento Junio de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Indicativo - seguimiento JUNIO 2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Seguimiento Marzo de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Indicativo - seguimiento MARZO 2021.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/FormulaciónPlanIndicativo2020-2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Seguimiento DICIEMBRE de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Indicativo - seguimiento DICIEMBRE 2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Seguimiento OCTUBRE de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Indicativo - seguimiento OCTUBRE 2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan indicativo - Seguimiento AGOSTO de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Indicativo - seguimiento AGOSTO 2020.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Indicativo - seguimiento DICIEMBRE 2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Indicativo - seguimiento DICIEMBRE 2018</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Indicativo - seguimiento DICIEMBRE 2018.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Indicativo - seguimiento DICIEMBRE 2017</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Indicativo - seguimiento DICIEMBRE 2017.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Indicativo - seguimiento DICIEMBRE 2016</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Indicativo - seguimiento DICIEMBRE 2016.pdf')}}" target="_blank">Ver documento</a>
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
