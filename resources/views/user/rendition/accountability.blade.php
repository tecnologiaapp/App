@extends('layouts.app')
@section('content')
@section('body_color', '#FEF38F;')
	
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/bg/5.jpg')}}">
			<div class="vlt-page-title-hero__content">
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<h1 class="vlt-page-title-hero__title" style="text-transform: none;">Rendición de cuentas</h1>
						</div>
					</div>
				</div>
			</div><a class="vlt-scroll-to-arrow" href="#content"><i class="leedo-download-arrow"></i></a>
		</div>
		<div id="content"></div>
	</section><!--Content-->
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 offset-md-9">
					<div class="vlt-particle d-flex justify-content-center" data-jarallax-element="100 0"><img alt="" src="{{asset('assets/img/root/particle-02.png')}}"></div>
				</div>
			</div>
			<section class="mb-5 pb-5">
				<h4 class="text-center mb-5">Resolución 079 de 2019</h4>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<iframe height="900px" src="{{asset('assets/pdf/resolucion-079-de-junio-12-de-2019-rendicion-de-cuentas.pdf')}}" width="100%"></iframe>
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
								<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/rendici%C3%B3n/de/cuentas/accountability" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/rendici%C3%B3n/de/cuentas/accountability" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
							</div>
						</div>
					</div>
					<div class="vlt-gap-100"></div>
				</section>
			</footer>
		</div>
	</section>

@endsection