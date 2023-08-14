@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/bg/5.jpg')}}">
			<div class="vlt-page-title-hero__content">
				<h1 style="color:white;">Plan de rendición de cuentas</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="vlt-gap-120"></div><!--Particle-->
		<div class="vlt-particle" data-jarallax-element="-100 0"><img alt="" src="{{asset('assets/img/root/particle-01--black.png')}}" width="200"></div><!--Particle-->
		<div class="container mt-5">
			<div class="accordion" id="accordionExample" style="background-color: transparent;">
				<!--2013-->
				<div class="card team border-0">
					<div class="card-header" id="headingOne">
						<h2 class="mb-0"><button aria-controls="anti" aria-expanded="true" class="btn btn-link btn-block text-left text-dark font-bold" data-target="#anti" data-toggle="collapse" type="button">Plan de rendición de cuentas</button></h2>
					</div>
					<div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="anti">
						<div class="card-body">
							<table class="table table-bordered table-striped custom-table">
								<tbody>
									<tr>
										<td>Rendición de cuentas 2021</td>
										<td>
											<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Rendici%C3%B3n-de-cuentas-2021.pdf')}}" target="_blank">Ver documento</a>
										</td>
									</tr>
									<tr>
										<td>Rendición de cuentas 2020</td>
										<td>
											<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Rendicion-2020.pdf')}}" target="_blank">Ver documento</a>
										</td>
									</tr>
									<tr>
										<td>Rendición de cuentas 2019</td>
										<td>
											<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Rendicion-2019.pdf')}}" target="_blank">Ver documento</a>
										</td>
									</tr>
									<tr>
										<td>Rendición de cuentas 2018</td>
										<td>
											<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Rendicion-2018.pdf')}}" target="_blank">Ver documento</a>
										</td>
									</tr>
									<tr>
										<td>Rendición de cuentas 2017</td>
										<td>
											<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Rendicion-2017.pdf')}}" target="_blank">Ver documento</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div><!--/2013-->
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/rendicion/rendicion_cuentas" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/rendicion/rendicion_cuentas" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
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