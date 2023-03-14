@extends('layouts.app')
@section('body_color', '#FEF38F;')
@section('content')

<section>
	<!--Page Title Hero-->
	<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
		<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
		<div class="vlt-page-title-hero__content">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<h1 class="vlt-page-title-hero__title" style="text-transform: none;">Estudios, investigación, y otras publicaciones
						</h1>
						
					</div>
				</div>
			</div>
		</div><a class="vlt-scroll-to-arrow" href="#content"><i class="leedo-download-arrow"></i></a>
	</div>
	<div id="content"></div>
</section>

<section>
	<div class="vlt-gap-120"></div>

	<!--Particle-->
	{{-- <div class="vlt-particle" data-jarallax-element="-100 0"><img src="{{ asset('assets/img/root/particle-01--black.png')}}" width="400" alt=""></div> --}}
	<!--Particle-->

	<div class="container mt-5">
		
		<p>
			La subdirección de Gestión de Paisaje y Patrimonio es la encargada de contribuir al cumplimiento del objeto de la Agencia APP, en lo que respecta a la gestión y promoción de acciones para la cualificación, sostenibilidad y mantenimiento del Sistema Público y Colectivo, el paisaje y el patrimonio; también es su responsabilidad promover la generación de recursos a través de los instrumentos de financiación del POT, en consonancia con el Decreto 883 de 2015.
		</p>

		<p>
			<b><a class="btn btn-link" href="https://drive.google.com/file/d/1Wa1Otg5HPoLi2orha5Nh2AB6DlUn-Qv4/view?usp=sharing" target="_blank">
				Documento Proyectos Subdireccion de Paisaje y Patrimonio.
			</a></b>
		</p>
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
		                 		<h5 class="vlt-display-1">Compártelo
		                              		</h5>
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/estudios-investigación-y-otras-publicaciones" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/estudios-investigación-y-otras-publicaciones" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
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