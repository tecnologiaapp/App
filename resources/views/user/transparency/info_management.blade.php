@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">

							<h1 style="color:white;">
							Instrumentos de gestión de información pública
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
		<h5 class="mt-5 mb-5">Aquí encontrarás todos los instrumentos y mecanismos para la gestión de la información pública:</h5>
	</div>

	<div class="container mt-5">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Nombre del documento</th>
						<th scope="col">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Índice de informacion clasificada y reservada</th>
						<td>
							<a href="{{ asset('assets/pdf/INDICE DE INFORMACIÓN CLASIFICADA Y RESERVADA AGENCIA APP 2022.pdf')}}" class="btn btn-primary" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<th scope="row">Registro de activos de la información</th>
						<td>
							<a href="{{ asset('assets/pdf/REGISTRO ACTIVOS INFORMACION AGENCIA APP 2022.pdf')}}" class="btn btn-primary" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

			

					<tr>
						<th scope="row">Plan institucional de archivos-PINAR</th>
						<td> 
							<a href="{{ asset('assets/pdf/PINAR 2021.pdf')}}" class="btn btn-primary" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<th scope="row">Programa de gestión documental</th> 
						<td>
							<a href="{{ asset('assets/pdf/Programa de Gestión Documental.pdf')}}" class="btn btn-primary" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<th scope="row">Acto administrativo que adopta las TRD y TVD</th>  
						<td>
							<a href="{{ asset('assets/pdf/trd y tvd.pdf')}}" class="btn btn-primary" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>


					<tr>
						<th scope="row">Registro de publicaciones</th>
						<td>
							<a href="{{ route('user.transparency.verification') }}" class="btn btn-primary" target="_blank">
								Ver página
							</a>
						</td>
					</tr>				
				</tbody>
			</table>
		</div>
	</div>

	<div class="container mt-5">
		<div class="accordion" style="background-color: transparent;" id="extraInfo">
			<!--extraInfo-->
			<div class="card team border-0">
				<div class="card-header" id="headingOne">
					<h2 class="mb-0">
						<button class="btn btn-link btn-block text-left text-dark font-bold" type="button" data-toggle="collapse" data-target="#extraInfo" aria-expanded="true" aria-controls="extraInfo">
							Información adicional
						</button>
					</h2>
				</div>

				<div id="extraInfo" class="collapse show" aria-labelledby="headingOne" data-parent="#extraInfo">
					<div class="card-body">
						<table class="table table-bordered table-striped custom-table">
							<tbody>

								<tr>
									<td>Costos de reproducción de la información pública</td>
									<td>
										<a href="{{ asset('assets/pdf/control/tables/resolucion-105-de-2019.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Resolución 063</td>
									<td>
										<a href="{{ asset('assets/pdf/control/resolucion-063.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>								

								<tr>
									<td>Cuadro de clasificación documental</td>
									<td>
										<a href="{{ asset('assets/pdf/control/cuadro-de-clasificacion-documental-2018.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<th>
										Tablas de retención documental 2018
									</th>
								</tr>

								<tr>
									<td>Tablas de retención documental - APP dirección general</td>
									<td>
										<a href="{{ asset('assets/pdf/control/tables/tablas-de-retención-documental-1.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Tablas de retención documental - APP dirección técnica</td>
									<td>
										<a href="{{ asset('assets/pdf/control/tables/tablas-de-retención-documental-2.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Tablas de retención documental - Subdirección de las alianzas público privadas</td>
									<td>
										<a href="{{ asset('assets/pdf/control/tables/tablas-de-retención-documental-3.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Tablas de retención documental - Subdirección de paisaje y patrimonio</td>
									<td>
										<a href="{{ asset('assets/pdf/control/tables/tablas-de-retención-documental-4.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Tablas de retención documental - Subdirección inmobiliaria</td>
									<td>
										<a href="{{ asset('assets/pdf/control/tables/tablas-de-retención-documental-5.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<th>
										Resoluciones de aprobación TRD y TVD
									</th>
								</tr>

								<tr>
									<td>202010000430TRD</td>
									<td>
										<a href="{{ asset('assets/pdf/control/202010000430TRD.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>202010000431TVD</td>
									<td>
										<a href="{{ asset('assets/pdf/control/202010000431TVD.pdf')}}" class="btn btn-primary" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!--/extraInfo-->
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
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/transparencia/instrumentos-de-gestión-de-información-pública" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/transparencia/instrumentos-de-gestión-de-información-pública" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
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