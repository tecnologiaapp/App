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
							Plan anual de adquisiciones
							</h1>
		
			</div>

		</div>
		
	</section>

<section>
	<div class="vlt-gap-120"></div>


	<div class="container mt-5">
		<h5 class="mt-5 mb-5">Aquí encontrarás la información relacionada con los planes Anuales de adquisiciones de la Agencia APP</h5>
	</div>

	<div class="container mt-5">
	<button class="accordion">Plan anual 2023 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>

	<tr>
							<td>Plan anual de adquisiciones 2023 - Actualizado</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/2023.xlsx')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>
	<tr>
							<td>Plan anual de adquisiciones 2023 - Enero</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/Plan Anual de Adquisiciones  2023.xlsx')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>

						
								</tbody> 
</table>
</div>


	<button class="accordion">Plan anual 2022 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>

	<tr>
							<td>Plan anual de adquisiciones 2022 - Julio</td>
							<td>
								<a href="https://docs.google.com/spreadsheets/d/1ZZ93Azplf_N0pCT-MNrNXv5sP9S-2qQg/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>

						<tr>
							<td>Plan anual de adquisiciones 2022 - Actualizado</td>
							<td>
								<a href="https://docs.google.com/spreadsheets/d/1To-hRMGbD-5tTrDe3xcdl3H0CmL9EpGy/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>

						<tr>
							<td>Plan anual de adquisiciones 2022 - Enero</td>
							<td>
								<a href="https://docs.google.com/spreadsheets/d/1DeuXdPKC0V8hM9guGNf3aCjDHk6PQB-g/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>
								</tbody> 
</table>
</div>

<button class="accordion">Plan anual 2021 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table"> 
	<tbody>
	<tr>
							<td>Plan anual de adquisiciones 2021 - Actualización octubre</td>
							<td>
								<a href="https://docs.google.com/spreadsheets/d/18jcqfcaLWccXGsODWu6-1289i_ankRnk/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>


						<tr>
							<td>Plan anual de adquisiciones 2021 - SECOP II V6</td>
							<td>
								<a href="https://docs.google.com/spreadsheets/d/18jcqfcaLWccXGsODWu6-1289i_ankRnk/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>

						<tr>
							<td>Plan anual de adquisiciones 2021</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2021.pdf')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>

						<tr>
							<td>Plan anual de adquisiciones 2021 - SECOP I</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2021-secop-I.pdf')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>
								</tbody>
</table>
</div>

<button class="accordion">Plan anual 2020 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
							<td>Directiva 16 PGN - Contratación de emergencia (Abril 22 de 2020)</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/directiva-16-pgn-contratacion-de-emergencia-abril-22-de-2020.pdf')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>

						<tr>
							<td>Plan anual de adquisiciones 2020</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2020.pdf')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>

						<tr>
							<td>Plan anual de adquisiciones 2020 - SECOP I V4</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2020-secop-i-v4.pdf')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>

						<tr>
							<td>Plan anual de adquisiciones 2020 - SECOP I V3</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2020-secop-i-v3.pdf')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>
								</tbody> 
</table>
</div>


<button class="accordion">Plan anual 2019 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
							<td>Plan anual de adquisiciones 2019 - Actualización en diciembre</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2019-actualizacion-en-diciembre.pdf')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>

						<tr>
							<td>Plan anual de adquisiciones 2019 - Actualización en julio</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2019-actualizacion-en-julio.pdf')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>

						<tr>
							<td>Plan anual de adquisiciones 2019 - Actualización en abril</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2019-actualizacion-en-abril.pdf')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>

						<tr>
							<td>Plan anual de adquisiciones 2019</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2019.pdf')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>
								</tbody> 
</table>
</div>


<button class="accordion">Plan anual 2018 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
							<td>Plan anual de adquisiciones 2018</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2018.pdf')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>
								</tbody> 
</table>
</div>

<button class="accordion">Plan anual 2017 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
							<td>Plan anual de adquisiciones 2017</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2017.pdf')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>
								</tbody> 
</table>
</div>
<button class="accordion">Plan anual 2016 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
							<td>Plan anual de adquisiciones 2016</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2016.pdf')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>
								
								</tbody> 
</table>
</div>
<button class="accordion">Plan anual 2015 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
							<td>Plan anual de adquisiciones 2015</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2015.pdf')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>
								
								</tbody> 
</table>
</div>
<button class="accordion">Plan anual 2014 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
							<td>Plan anual de adquisiciones 2014</td>
							<td>
								<a href="{{ asset('assets/pdf/annual_procurement_plan/plan-anual-de-adquisiciones-2014.pdf')}}" class="btn btn-primary" target="_blank">
									Ver documento
								</a>
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
		                 		<h5 class="vlt-display-1">Compártelo
		                              		</h5>
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/plan-anual-de-adquisiciones" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/plan-anual-de-adquisiciones" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endpush
