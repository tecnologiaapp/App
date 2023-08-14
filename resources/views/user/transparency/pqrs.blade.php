@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/bg/5.jpg')}}">
			<div class="vlt-page-title-hero__content">
				<h1 style="color:white;">Informes de PQRS</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="vlt-gap-120"></div><!--Particle-->
		<div class="vlt-particle" data-jarallax-element="-100 0"><img alt="" src="{{asset('assets/img/root/particle-01--black.png')}}" width="200"></div><!--Particle-->
		<div class="container mt-5">
			<h5 class="mt-5 mb-5">Aquí encontrarás la información relacionada con los informes de PQRS de la Agencia APP</h5>
		</div>
		<div class="container mt-5">
			<div class="accordion" id="accordionExample" style="background-color: transparent;">
				<div class="card-body">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<th>Nombre del documento</th>
								<th>Ver documento</th>
							</tr>
							<tr>
								<td>Informe de PQRSD - Tercer trimestre de 2022</td>
								<td>
									<a class="btn btn-primary" href="{{asset('assets/pdf/control/pqrs/InformePQRSD3%C2%B0Trimestre2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de PQRSD - Segundo trimestre de 2022</td>
								<td>
									<a class="btn btn-primary" href="{{asset('assets/pdf/control/pqrs/InformePQRSD2%C2%B0Trimestre2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de PQRSD - Primer trimestre de 2022</td>
								<td>
									<a class="btn btn-primary" href="{{asset('assets/pdf/control/pqrs/InformePQRSD1%C2%B0Trimestre2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de PQRSD - Segundo semestre de 2021</td>
								<td>
									<a class="btn btn-primary" href="{{asset('assets/pdf/control/pqrs/InformePQRSDcortesegundoSemestreJulio01al30Diciembre2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de PQRSD - Segundo Trimestre 2021</td>
								<td>
									<a class="btn btn-primary" href="{{asset('assets/pdf/pqrs/InformedePQRSDSegundoTrimestre2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de PQRSD - Primer Trimestre 2021</td>
								<td>
									<a class="btn btn-primary" href="{{asset('assets/pdf/pqrs/InformedePQRSDPrimerTrimestre2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de PQRSD Enero 01 al 30 de Diciembre del 2020</td>
								<td>
									<a class="btn btn-primary" href="{{asset('assets/pdf/pqrs/informe-de-pqrs-enero-01-al-30-de-diciembre-del-2020.pdf')}}" target="_blank">Ver documento</a>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/transparencia/informes-de-pqrs" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/transparencia/informes-de-pqrs" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endpush