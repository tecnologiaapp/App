@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/bg/5.jpg')}}">
			<div class="vlt-page-title-hero__content">
				<h1 style="color:white;">Trámites en el SUIT</h1>
			</div>
		</div>
	</section><!--Content-->
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 offset-md-9">
					<div class="vlt-particle d-flex justify-content-center" data-jarallax-element="100 0"><img alt="" src="{{asset('assets/img/root/particle-01--black.png')}}"></div>
				</div>
				<div class="col-md-10 offset-md-1">
					<div class="text-center">
						<!--Animation Block-->
						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
							<h2 class="m-0"><span class="vlt-highlight">Aprovechamiento Económico del Espacio Público</span></h2>
							<p class="text-justify mt-5">En el Acuerdo 48 de 2014 – Plan de Ordenamiento Territorial (POT) se encuentra consignado el Aprovechamiento Económico del Espacio Público, instrumento de financiación que permite al Municipio de Medellín generar recursos no tributarios para el sostenimiento y cualificación del Paisaje Urbano.</p>
						</div>
						<div class="vlt-gap-45"></div>
						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
							<h2 class="m-0"><span class="vlt-highlight">﻿Decreto 2148 de 2015</span></h2>
							<p class="text-justify mt-5 mb-5">"Por medio del cual, se reglamenta el aprovechamiento económico del espacio público, se fijan las retribuciones por su utilización, se crean la Comisión Intersectorial Asesora del Espacio Público y el Comité Técnico".</p>
						</div>
						<div>
							<embed height="380" src="{{asset('assets/pdf/decreto-2148-de-2015.pdf')}}" type="application/pdf">
						</div>
						<div class="vlt-gap-45"></div>
						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
							<p class="text-justify">Trámite en el Sistema Único de Información de Trámites-SUIT</p>
							<p class="text-justify mb-5">Para obtener autorización transitoria para la realización de una actividad económica, por un lapso no mayor a 30 días calendario, con fines lucrativos haz click <a href="http://visor.suit.gov.co/VisorSUIT/index.jsf?FI=27211" target="_blank">aquí</a> .</p>
						</div>
						<div>
							<embed height="380" src="{{asset('assets/pdf/formato-suit.pdf')}}" type="application/pdf">
						</div>
						<div class="vlt-gap-45"></div>
					</div>
				</div>
			</div>
		</div>
	</section><!--Share This 02-->
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/transparencia/tr%C3%A1mites-en-el-suit" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/transparencia/tr%C3%A1mites-en-el-suit" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection