@extends('layouts.app')
@section('content')
@section('body_color', '#f3f5fa;')
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">

							<h1 style="color:white;">
							Políticas y lineamientos
							</h1>
		
			</div>

		</div>
		
	</section>
	<!--Content-->
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 offset-md-9">
	
				</div>
			</div>

            <section>
				<!-- <div class="text-center">
					<img alt="" class="img-fluid" height="600" src="https://qrcodes-digital.s3.us-east-2.amazonaws.com/Ecard+Rendicio%CC%81n+de+cuentas.png" width="600">
				</div> -->
<div align="center">
<h3>Políticas y lineamientos sectoriales e institucionales	
</h3>
</div>

<div align="center">
<h4>
    Resolución 2023
</h4>
</div>
<hr>   

				<embed src="{{ asset('assets/pdf/Resolucion 014 de 2023 Planes Institucionales.pdf') }}" height="220" width="300" type="application/pdf">

<hr>

<div align="center">
<h4>
    Resolución 2022
</h4>
</div>
<hr>   

				<embed src="{{ asset('assets/pdf/Resolucion-014-2022.pdf') }}" height="220" width="300" type="application/pdf">

<hr>


<div align="center">
<h4>
    Resolución 2021
</h4>
</div>
<hr>   

				<embed src="{{ asset('assets/pdf/planning/resolucion-014-del-29-de-enero-de-2021.pdf') }}" height="220" width="300" type="application/pdf">

<hr>



			<div align="center">
            <h4>
                     Resolución 2020
                 </h4>
            </div>
                 

				<hr>

				<embed src="{{ asset('assets/pdf/resolucion-013-integracion-planes.pdf') }}" height="220" width="300" type="application/pdf">

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
		                 		<h5 class="vlt-display-1">Compártelo
		                              		</h5>
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/rendicion/lineamientos" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/rendicion/lineamientos" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
			                     </div>
	                	</div>
	                 </div>
	                      <div class="vlt-gap-100"></div>   
              </section>						</footer>







		</div>

			
	</section>


@endsection