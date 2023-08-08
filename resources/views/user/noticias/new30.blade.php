@extends('layouts.app')
@section('content')
@section('body_color', '#FFFFFF;')


<style>
	li{
		text-align:inherit;
		color:black;
        font-size:22px;
	}

	h5{

		justify-content:center;
	}
</style>
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">

							<h1 style="color:white;">
							Convocatoria Arte Urbano
							</h1>
		
			</div>

		</div>
		
	</section>

	<!--Content-->
	<section>
		<div class="vlt-gap-0"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 offset-md-9">
					<div class="vlt-particle d-flex justify-content-center" data-jarallax-element="100 0"><img src="{{ asset('assets/img/root/particle-02.png')}}" alt=""></div>
				</div>
		
			</div>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="text-justify">
								<div class="vlt-gap-15"></div>


<br>
                            <div style="text-align:center;" >    <img src="{{ asset('assets/img/news/1.jpeg')}}" alt=""></div>
<br>

<br>
                            <div style="text-align:center;" >    <img src="{{ asset('assets/img/news/2.jpeg')}}" alt=""></div>
<br>

<br>
                            <div style="text-align:center;" >    <img src="{{ asset('assets/img/news/3.jpeg')}}" alt=""></div>
<br>

                                								
<div style="text-align:center;"class="col-sm-12 pt-4">
						<iframe src="{{ asset('assets/videos/new/Arte.mp4') }}" width="700" height="400"></iframe>
					</div>
                              
								

                   
							</div>
						</div>
					</div>
				</div>
			</section>
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
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/noticias/new30" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/noticias/new30" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
			                     </div>
	                	</div>
	                 </div>
	                      <div class="vlt-gap-100"></div>   
              </section>						</footer>
@endsection