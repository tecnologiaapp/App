@extends('layouts.app')
@section('content')
@section('body_color', '#ffffff;')
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerPoliticasYlineamientos.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Políticas y lineamientos</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 offset-md-9"></div>
			</div>
			<section>
				<div align="center">
					<h3>Políticas y lineamientos sectoriales e institucionales</h3>
				</div>
				<div align="center">
					<h4>Resolución 2023</h4>
				</div>
				<hr>
				<embed height="220" src="{{asset('assets/pdf/Resolucion014de2023PlanesInstitucionales.pdf')}}" type="application/pdf" width="300">
				<hr>
				<div align="center">
					<h4>Resolución 2022</h4>
				</div>
				<hr>
				<embed height="220" src="{{asset('assets/pdf/Resolucion-014-2022.pdf')}}" type="application/pdf" width="300">
				<hr>
				<div align="center">
					<h4>Resolución 2021</h4>
				</div>
				<hr>
				<embed height="220" src="{{asset('assets/pdf/planning/resolucion-014-del-29-de-enero-de-2021.pdf')}}" type="application/pdf" width="300">
				<hr>
				<div align="center">
					<h4>Resolución 2020</h4>
				</div>
				<hr>
				<embed height="220" src="{{asset('assets/pdf/resolucion-013-integracion-planes.pdf')}}" type="application/pdf" width="300">
				<hr>
			</section>
		</div>
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
							<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/rendicion/lineamientos" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/rendicion/lineamientos" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
						</div>
					</div>
				</div>
				<div class="vlt-gap-100"></div>
			</section>
		</footer>
	</section>

@endsection