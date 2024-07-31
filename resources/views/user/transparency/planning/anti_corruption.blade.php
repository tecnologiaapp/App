@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')
<head>
<link rel="stylesheet" href="{{ asset('assets/css/transparency.css')}}">
</head>
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerPlanAnticorrupcion2.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Plan anticorrupción y de atención al ciudadano</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container mt-5"><button class="accordion">Seguimiento 2024</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Seguimiento Plan anticorrupción y atención al ciudadano - Julio</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PLAN-ANTICORRUPCION-SEGUIMIENTO.xlsx')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<button class="accordion">Seguimiento 2022</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Seguimiento Plan anticorrupción y atención al ciudadano Diciembre 2022</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Seguimiento-Diciembre-2022.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Seguimiento Septiembre Plan anticorrupción y atención al ciudadano 2022</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Seguimiento-Septiembre-PAAC-2022.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Plan anticorrupción y atención al ciudadano 2022</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanAnticorrupci%C3%B3nydeAtenci%C3%B3nalCiudadano2022.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Seguimiento 2021</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Seguimiento plan anticorrupción y atención al ciudadano 2021</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/SeguimientoPlanAnticorrupci%C3%B3nydeAtenci%C3%B3nalCiudadanoCorteDiciembre2021.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Matriz seguimiento ley 1712 DE 2014 Revision Diciembre 15 2021</td>
							<td>
								<a class="btn btn-primary btn-block" href="https://docs.google.com/spreadsheets/d/1h9j017JgAEoLgLi0VTAgWEqKglJmhh_a/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Seguimiento al PAAC - Corte 30 de Agosto 2021</td>
							<td>
								<a class="btn btn-primary btn-block" href="https://docs.google.com/spreadsheets/d/1EWoDijn-CFtlM7DEvR_z_frOv0WQ1Fb6/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Resumen ejecutivo Seguimiento plan anticorrupción corte agosto 2021</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/ANTICORRUPCI%C3%93N-CORTE-Agosto-2021.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Plan anticorrupción y atención al ciudadano 2021</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-anticorrupcion-y-atencion-al-ciudadano-2021.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Seguimiento 2020</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Matriz de seguimiento de la Ley 1712 de 2014 - septiembre 10 de 2020</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/matriz-de-seguimiento-de-la-ley-1712-de-2014-septiembre-10-de-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Resumen ejecutivo del seguimiento al Plan Anticorrupción y Atención al Ciudadano - Corte 31 de agosto de 2020</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/resumen-ejecutivo-del-seguimiento-al-plan-anticorrupcion-y-atenci%C3%B3n-al-ciudadano-corte-31-de-agosto-de-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Seguimiento al PAAC 2020 - Corte 31 de agosto de 2020</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-al-paac-2020-corte-31-de-agosto-de-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Plan anticorrupción y atención al ciudadano 2020</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-anticorrupcion-y-atencion-al-ciudadano-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Resumen ejecutivo Seguimiento Plan Anticorrupción y Atención al Ciudadano - Corte 30 de abril de 2020</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/resumen-ejecutivo-seguimiento-plan-anticorrupcion-y-atencion-al-ciudadano-corte-30-de-abril-de-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Seguimiento de los riesgos de corrupción - Corte 30 de abril de 2020</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-de-los-riesgos-de-corrupcion-corte-30-de-abril-de-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Seguimiento al PAAC 2020 - Corte 30 de abril de 2020</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-al-paac-2020-corte-30-de-abril-de-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Seguimiento 2019</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Seguimiento al plan anticorrupcion y de atención al ciudadano - Corte a diciembre 31 de 2019</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-al-plan-anticorrupcion-y-de-atencion-al-ciudadano-corte-a-diciembre-31-de2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Seguimiento a los riesgos de corrupción #3 - Corte diciembre 2019</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-a-los-riesgos-de-corrupcion-3-corte-diciembre-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Seguimiento a la evaluación de efectividad en riesgos de corrupción - Agosto 31 de 2019</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-a-la-evaluacion-de-efectividad-en-riesgos-de-corrupcion-agosto-31-de-2019.xlsx')}}" target="_blank">Descargar</a>
							</td>
						</tr>
						<tr>
							<td>Seguimiento al plan anticorrupcion y de Atención al Ciudadano - Corte agosto 31 de 2019</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-al-plan-anticorrupcion-y-de-atencion-al-ciudadano-corte-agosto-31-de-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Seguimiento a la evaluación de efectividad e riesgos de corrupción - Corte abril 30 de 2019</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-a-la-evaluacion-de-efectividad-e-riesgos-de-corrupcion-corte-abril-30-de-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Seguimiento al plan anticorrupción y de atención al ciudadano - Corte abril 2019</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-al-plan-anticorrupcion-y-de-atencion-al-ciudadano-corte-abril-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Plan anticorrupción y de atención al ciudadano - Vigencia 2019</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-anticorrupcion-y-de-atenci%C3%B3n-al-ciudadano-vigencia-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Seguimiento 2018</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Seguimiento al plan anticorrupción y de atención al ciudadano - Corte abril de 2018</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-al-plan-anticorrupcion-y-de-atencion-al-ciudadano-corte-abril-de-2018.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Plan anticorrupción y de atención al ciudadano - Vigencia 2018</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-anticorrupcion-y-de-atenci%C3%B3n-al-ciudadano-vigencia-2018.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Seguimiento 2017</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Plan anticorrupción y de atención al ciudadano - Vigencia 2017</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-anticorrupcion-y-de-atenci%C3%B3n-al-ciudadano-vigencia-2017.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Seguimiento 2015</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Plan anticorrupción y de atención al ciudadano - Vigencia 2015</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-anticorrupcion-y-de-atenci%C3%B3n-al-ciudadano-vigencia-2015.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Seguimiento 2014</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Plan anticorrupción y de atención al ciudadano - Vigencia 2014</td>
							<td>
								<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-anticorrupcion-y-de-atenci%C3%B3n-al-ciudadano-vigencia-2014.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/plan-anticorrupci%C3%B3n-y-de-atenci%C3%B3n-al-ciudadano" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/plan-anticorrupci%C3%B3n-y-de-atenci%C3%B3n-al-ciudadano" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection

@push('scripts')
<script src="{{ asset('assets/js/acordion.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endpush