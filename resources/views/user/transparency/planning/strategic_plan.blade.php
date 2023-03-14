@extends('layouts.app')
@section('body_color', '#f3f5fa;')
@section('content')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">

							<h1 style="color:white;">
							Plan estratégico
							</h1>
		
			</div>

		</div>
		
	</section>

<section>
	<div class="vlt-gap-120"></div>

	<!--Particle-->
	<div class="vlt-particle" data-jarallax-element="-100 0"><img src="{{ asset('assets/img/root/particle-01--black.png')}}" width="200" alt=""></div>
	<!--Particle-->

	<div class="container mt-5">
		<h5 class="mt-5 mb-5">Aquí encontrarás la formulación de programas, planes y estrategias que nos han permitido y permitirán alcanzar los objetivos trazados a corto, mediano y largo plazo:</h5>

	
	</div>

	<div class="container mt-5">
		<div class="row">

		<div class="col-md-10 offset-md-1">

		<div align="center">
		<h4>Plan estratégico de 2020 a 2025</h4>
		</div>
		<hr>
				
				<iframe src="{{ asset('assets/pdf/planning/estrategico-2020-2025.pdf') }}" width="100%" height="900px"></iframe>
			</div>

			<div class="col-md-10 offset-md-1">
				<hr>

<div align="center">
<h4>Plan estratégico de 2016 a 2019</h4>
</div>
				<hr>
				<iframe src="{{ asset('assets/pdf/planning/plan-estrategico-2016-2019.pdf') }}" width="100%" height="900px"></iframe>
			</div>

			<!-- <div class="col-md-10 offset-md-1 mt-5">
				<iframe src="{{ asset('assets/pdf/planning/seguimiento-al-plan-estrategico-dic31-16.pdf') }}" width="100%" height="900px"></iframe>
			</div>

			<div class="col-md-10 offset-md-1 mt-5">
				<iframe src="{{ asset('assets/pdf/planning/seguimiento-al-plan-estrategico-dic31-17.pdf') }}" width="100%" height="900px"></iframe>
			</div>

			<div class="col-md-10 offset-md-1 mt-5">
				<iframe src="{{ asset('assets/pdf/planning/encuesta-agencia-app-planeacion-estrategica.pdf') }}" width="100%" height="900px"></iframe>
			</div> -->
		</div>
	</div>
	<hr>



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
		                 		<h5 class="vlt-display-1">Compártelo
		                              		</h5>
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/plan-estratégico" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/plan-estratégico" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
			                     </div>
	                	</div>
	                 </div>
	                      <div class="vlt-gap-100"></div>   
              </section>						</footer>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endpush