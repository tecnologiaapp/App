@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')
<head>
<link rel="stylesheet" href="{{ asset('assets/css/transparency.css')}}">
</head>

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/adquisiciones.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Plan Anual de Adquisiciones</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container mt-5">
			<h5 class="mt-5 mb-5">Aquí encontrarás la información relacionada con los planes Anuales de adquisiciones de la Agencia APP</h5>
		</div>
		<div class="container mt-5">
		<button class="accordion">Plan Anual 2025</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>						
						<tr>
							<td>Plan Anual de Adquisiciones 2025</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/PAA2025_2025-04-29.xlsx')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Plan Anual 2024</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>						
						<tr>
							<td>Plan Anual de Adquisiciones 2024</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/PAA-2024-V13.xlsx')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<button class="accordion">Plan anual 2023</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>						
						<tr>
							<td>Plan anual de adquisiciones 2023 - Actualizado</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/AdquisicionesPAAV15.xlsx')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<button class="accordion">Plan anual 2022</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Plan anual de adquisiciones 2022 - Julio</td>
							<td>
								<a class="btn btn-primary" href="https://docs.google.com/spreadsheets/d/1ZZ93Azplf_N0pCT-MNrNXv5sP9S-2qQg/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Plan anual de adquisiciones 2022 - Actualizado</td>
							<td>
								<a class="btn btn-primary" href="https://docs.google.com/spreadsheets/d/1To-hRMGbD-5tTrDe3xcdl3H0CmL9EpGy/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Plan anual de adquisiciones 2022 - Enero</td>
							<td>
								<a class="btn btn-primary" href="https://docs.google.com/spreadsheets/d/1DeuXdPKC0V8hM9guGNf3aCjDHk6PQB-g/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Plan anual 2021</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Plan anual de adquisiciones 2021 - Actualización octubre</td>
							<td>
								<a class="btn btn-primary" href="https://docs.google.com/spreadsheets/d/18jcqfcaLWccXGsODWu6-1289i_ankRnk/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Plan anual de adquisiciones 2021 - SECOP II V6</td>
							<td>
								<a class="btn btn-primary" href="https://docs.google.com/spreadsheets/d/18jcqfcaLWccXGsODWu6-1289i_ankRnk/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Plan anual de adquisiciones 2021</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2021.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Plan anual de adquisiciones 2021 - SECOP I</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2021-secop-I.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Plan anual 2020</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Directiva 16 PGN - Contratación de emergencia (Abril 22 de 2020)</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/directiva-16-pgn-contratacion-de-emergencia-abril-22-de-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Plan anual de adquisiciones 2020</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Plan anual de adquisiciones 2020 - SECOP I V4</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2020-secop-i-v4.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Plan anual de adquisiciones 2020 - SECOP I V3</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2020-secop-i-v3.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Plan anual 2019</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Plan anual de adquisiciones 2019 - Actualización en diciembre</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2019-actualizacion-en-diciembre.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Plan anual de adquisiciones 2019 - Actualización en julio</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2019-actualizacion-en-julio.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Plan anual de adquisiciones 2019 - Actualización en abril</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2019-actualizacion-en-abril.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Plan anual de adquisiciones 2019</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Plan anual 2018</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Plan anual de adquisiciones 2018</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2018.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Plan anual 2017</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Plan anual de adquisiciones 2017</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2017.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Plan anual 2016</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Plan anual de adquisiciones 2016</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2016.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Plan anual 2015</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Plan anual de adquisiciones 2015</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2015.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Plan anual 2014</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Plan anual de adquisiciones 2014</td>
							<td>
								<a class="btn btn-primary" href="{{asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2014.pdf')}}" target="_blank">Ver documento</a>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/plan-anual-de-adquisiciones" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/plan-anual-de-adquisiciones" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
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
