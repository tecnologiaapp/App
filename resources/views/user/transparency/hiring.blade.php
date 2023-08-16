@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerContratacion.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Contratación</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="vlt-gap-120"></div><!--Particle-->
		<div class="vlt-particle" data-jarallax-element="-100 0"><img alt="" src="{{asset('assets/img/root/particle-01--black.png')}}" width="200"></div><!--Particle-->
		<div class="container mt-5">
			<h5 class="mt-5 mb-5">Aquí encontraras información relacionada con nuestra gestión contractual</h5>
		</div>
		<div class="container mt-5">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Nombre del documento</th>
							<th scope="col">Acciones</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Procesos contractuales SECOP. En entidad compradora buscar:<br>
							<b>AGENCIA PARA LA GESTIÓN DEL PAISAJE, EL PATRIMONIO Y LAS ALIANZAS PÚBLICO - PRIVADAS - MEDELLIN</b>.</th>
							<td>
								<a class="btn btn-primary btn-block" href="https://www.contratos.gov.co/consultas/inicioConsulta.do" target="_blank">Ver sitio web</a>
							</td>
						</tr>
						<tr>
							<th scope="row">Plan anual de adquisiones en SECOP I</th>
							<td>
								<a class="btn btn-primary btn-block" href="https://www.contratos.gov.co/consultas/consultarArchivosPAA2018.do" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="container mt-5">
			<div class="accordion" id="hiringManual" style="background-color: transparent;">
				<!--Annual Procurement Plan-->
				<div class="card team border-0">
					<div class="card-header" id="Manual">
						<h2 class="mb-0"><button aria-controls="annualProcurementPlan" aria-expanded="true" class="btn btn-link btn-block text-left text-dark font-bold" data-target="#annualProcurementPlan" data-toggle="collapse" type="button">Manual de contratación</button></h2>
					</div>
					<div aria-labelledby="headingOne" class="collapse show" data-parent="#hiringManual" id="annualProcurementPlan">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<th scope="row">Resolución 015 - Febrero 5 de 2021</th>
											<td>
												<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/resolucion-015-5-de-febrero-de-2021.pdf')}}" target="_blank">Ver documento</a>
											</td>
										</tr>
										<tr>
											<th scope="row">Resolución 015 - Febrero 2 de 2021</th>
											<td>
												<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/resolucion-015-2-de-febrero-de-2021.pdf')}}" target="_blank">Ver documento</a>
											</td>
										</tr>
										<tr>
											<th scope="row">Manual de contratación</th>
											<td>
												<a class="btn btn-primary btn-block" href="https://drive.google.com/file/d/18ODbrvDcgM7pRVTUf0dOfsy6jONuEJ6X/view" target="_blank">Ver documento</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!--/Annual Procurement Plan-->
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/transparencia/contrataci%C3%B3n" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/transparencia/contrataci%C3%B3n" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
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