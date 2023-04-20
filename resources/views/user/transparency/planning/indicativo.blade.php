@extends('layouts.app')
@section('body_color', '#f3f5fa;')
@section('content')
<head>
<style>
.accordion {
  background-color: transparent;
  color: #444;
  cursor: pointer;
  padding: 22px;
  width: 100%;
  border: 1px;
  text-align: left;
  outline: none;
  font-size: 14px;
  font-family:arial;
  font-weight: bold;
  transition: 0.4s;
  background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
	
  
}

.accordion:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  color: #777;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}

.active, .accordion:hover {
  background-color: rgba(0,0,0,.03); 
}

.panel {
  padding: 12px 20px;
  display: none;
  background-color: transparent;
  overflow: hidden;
}
</style>
</head>


<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">

							<h1 style="color:white;">
							Plan indicativo
							</h1>
		
			</div>

		</div>
		
	</section>

<section>
	<div class="vlt-gap-120"></div>


	<div class="container mt-5">


	<button class="accordion">PLANES INDICATIVOS</button>
	<div class="panel">

	<button class="accordion"> 2022 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>

	<tr>
									<td>Plan indicativo - Sexto bimestre 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Seguimiento-Plan_Indicativo-31diciembre2022_Definitivo.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								<tr>
									<td>Plan indicativo - Quinto bimestre 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Seguimiento PI 31 Octubre2022_Definitivo.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
	<tr>
									<td>Plan indicativo - Cuarto bimestre 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Seguimiento PI 31 Agosto2022_Definitivo_Dep.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
	<tr>
									<td>Plan indicativo - Tercer bimestre 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Seguimiento PI 30 Junio2022_Definitivo_Dependencia (2).pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan indicativo - Segundo bimestre 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Seguimiento PI 30 abril2022_Preliminar.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

                                <tr>
									<td>Plan indicativo - Primer bimestre 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Seguimiento-PI-28-febrero2022_Definitivo.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								</tbody> 
</table>
</div>

	<button class="accordion"> 2021 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>

	                            <tr>
									<td>Plan indicativo - Seguimiento Diciembre de 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan-indicativo-DICIEMBRE-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

	                            <tr>
									<td>Plan indicativo - Seguimiento Septiembre de 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan-indicativo-Seguimiento-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan indicativo - Seguimiento Agosto de 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Indicativo - seguimiento AGOSTO 2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan indicativo - Seguimiento Junio de 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Indicativo - seguimiento JUNIO 2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan indicativo - Seguimiento Marzo de 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Indicativo - seguimiento MARZO 2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								</tbody> 
</table>
</div>

<button class="accordion"> 2020 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>


    <tr>
									<td>Formulación Plan Indicativo 2020-2023</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Formulación Plan Indicativo 2020-2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>

								<tr>
									<td>Plan indicativo - Seguimiento DICIEMBRE de 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Indicativo - seguimiento DICIEMBRE 2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan indicativo - Seguimiento OCTUBRE de 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Indicativo - seguimiento OCTUBRE 2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan indicativo - Seguimiento AGOSTO de 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Indicativo - seguimiento AGOSTO 2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								</tbody> 
</table>
</div>


<button class="accordion"> 2016 - 2019 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>


    <tr>
									<td>Plan Indicativo - seguimiento DICIEMBRE 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Indicativo - seguimiento DICIEMBRE 2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>

								<tr>
									<td>Plan Indicativo - seguimiento DICIEMBRE 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Indicativo - seguimiento DICIEMBRE 2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan Indicativo - seguimiento DICIEMBRE 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Indicativo - seguimiento DICIEMBRE 2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan Indicativo - seguimiento DICIEMBRE 2016</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Indicativo - seguimiento DICIEMBRE 2016.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
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
		                 		<h5 class="vlt-display-1">Compártelo
		                              		</h5>
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/rendicion/plan_indicativo" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/rendicion/plan_indicativo" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
			                     </div>
	                	</div>
	                 </div>
	                      <div class="vlt-gap-100"></div>   
              </section>						</footer>


@endsection

@push('scripts')

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
@endpush
