@extends('layouts.app')
@section('content')
@section('body_color', '#f3f5fa;')
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">
		
							<h1 style="color:white;">
							Directorio de agremiaciones, asociaciones y otros grupos de interés
							</h1>
		
			</div>

		</div>
		
	</section>
	<!--Content-->
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container">
			<div class="row">
			
				<div class="col-md-8 offset-md-2">
					<div class="text-center">
						<!--Animation Block-->
						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
							{{-- <h5 class="m-0">Subdirección de Gestión APP</h5> --}}
						</div>

						
						<div class="vlt-gap-45"></div>
					</div>
				</div>
			</div>

			<section class="mb-5 pb-5">

				<h4 class="text-center mb-5">Listado de agremiaciones, cámaras de comercio y eventos</h4>

				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="table-responsive">
								<table class="table table-bordered">
									<h4>Agremiaciones</h4>
									<thead class="table-light">
										<tr>
											<td>Nombre</td>
											<td>Teléfono</td>
											<td>Dirección</td>
											<td>Sitio web</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>SAI</td>
											<td rowspan="2">(604) 264 0832</td>
											<td rowspan="2">Cra. 81A No. 48B - 44</td>
											<td rowspan="2"><a target="_blank" href="http://www.sai.org.co/">www.sai.org.co</a></td>
										</tr>
										<tr>
											<td>Sociedad Antioqueña de Arquitectos e ingenieros</td>
										</tr>
										<tr>
											<td>Asociación de Centros Comerciales de Medellín</td>
											<td>(604) 230 6783</td>
											<td>Cr 74 48-37 Of 1010</td>
											<td><a target="_blank" href="http://www.asocentros.com.co/">www.asocentros.com.co</a></td>
										</tr>
										<tr>
											<td>ASOBANCARIA</td>
											<td rowspan="2">(604) 326 6600</td>
											<td rowspan="2">Cr9 74-08 P-9 / Bogotá</td>
											<td rowspan="2"><a target="_blank" href="http://www.asobancaria.com/">www.asobancaria.com</a></td>
										</tr>
										<tr>
											<td>Asociación Bancaria y de Entidades Financieras de Colombia</td>
										</tr>
										<tr>
											<td>ANALDEX</td>
											<td>(571) 700 600</td>
											<td>Cra. 10 # 27-27 Interior 137</td>
											<td rowspan="2"><a target="_blank" href="http://www.analdex.org/">www.analdex.org</a></td>
										</tr>
										<tr>
											<td>Asociación Nacional de Exportadores</td>
											<td>Ext. 26 - 15</td>
											<td>Oficina 902. Bogotá</td>
										</tr>
										<tr>
											<td>ANATO</td>
											<td rowspan="2">(604)&nbsp;381 2299</td>
											<td>Cl. 34&nbsp; 43-66</td>
											<td rowspan="2"><a target="_blank" href="http://www.anato.org/">www.anato.org</a></td>
										</tr>
										<tr>
											<td>Asociación colombiana de agencias de viaje y turismo</td>
											<td>C.C. San Diego Of.218</td>
										</tr>
										<tr>
											<td>PROANTIOQUIA</td>
											<td rowspan="4">(604) 268 3000</td>
											<td>Cra 43 A # 1 - 50</td>
											<td rowspan="4"><a target="_blank" href="http://www.proantioquia.org.co/">www.proantioquia.org.co</a></td>
										</tr>
										<tr>
											<td>Fundación para el progreso de Antioquia</td>
											<td>San Fernando Plaza</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td>Torre 1 Piso 12</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td>Medellín</td>
										</tr>
										<tr>
											<td>CTA</td>
											<td rowspan="2">(604)&nbsp;512 2020</td>
											<td rowspan="2">Cr. 46&nbsp; 56-11 P.15</td>
											<td rowspan="2"><a target="_blank" href="http://www.cta.org.co/">www.cta.org.co</a></td>
										</tr>
										<tr>
											<td>Centro de Ciencia y Tecnología de Antioquia</td>
										</tr>
										<tr>
											<td>ANDI</td>
											<td rowspan="3">(604) 326 5100</td>
											<td>Cr. 43A No. 1-50</td>
											<td rowspan="3"><a target="_blank" href="http://www.andi.com.co/">www.andi.com.co</a></td>
										</tr>
										<tr>
											<td>Asociación Nacional de Empresarios de Colombia</td>
											<td>San Fernando Plaza</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td>Torre 2 "ANDI", Piso 9º</td>
										</tr>
										<tr>
											<td>ACOPI</td>
											<td rowspan="2">(604) 251 6815</td>
											<td>Cl. 52&nbsp; 47-28</td>
											<td rowspan="2"><a target="_blank" href="http://www.acopi.org.co/">www.acopi.org.co</a></td>
										</tr>
										<tr>
											<td>Asociación Colombiana de las Micro, Pequeñas y Medianas Empresas</td>
											<td>Ed. La Ceiba Of.617</td>
										</tr>
										<tr>
											<td>CAMACOL</td>
											<td rowspan="2">(604) 230 3308</td>
											<td rowspan="2">Cl. 49B&nbsp; 63-21 P.3 Of. 302</td>
											<td rowspan="2"><a target="_blank" href="http://www.camacol.org.co/">www.camacol.org.co</a></td>
										</tr>
										<tr>
											<td>Cámara Colombiana de la Construcción</td>
										</tr>
										<tr>
											<td>FENALCO</td>
											<td rowspan="2">(604) 444 6444</td>
											<td rowspan="2">Cl. 50&nbsp;42-54 P.2</td>
											<td><a target="_blank" href="http://www.fenalco.com.co/">www.fenalco.com.co</a></td>
										</tr>
										<tr>
											<td>Federación Nacional de Comerciantes</td>
											<td><a target="_blank" href="http://www.fenalcoantioquia.com/">www.fenalcoantioquia.com</a></td>
										</tr>
										<tr>
											<td>CCI</td>
											<td rowspan="2">(604) 288 7500</td>
											<td rowspan="2">Cl 79 Sur 47E-62 Apto 201 Sabaneta</td>
											<td rowspan="2"><a target="_blank" href="http://www.infraestructura.org.co/">www.infraestructura.org.co</a></td>
										</tr>
										<tr>
											<td>Cámara Colombiana de la Infraestructura</td>
										</tr>
										<tr>
											<td>Ministerio de Comercio Industria y Turismo</td>
											<td>(604) 251 5320</td>
											<td>Cl 50 50-21 Int 700</td>
											<td><a target="_blank" href="http://www.mincomercio.gov.co/">www.mincomercio.gov.co</a></td>
										</tr>
										<tr>
											<td>Lonja de Medellín</td>
											<td>(604) 251 2818</td>
											<td>Calle 52 No.49-28 Piso 8</td>
											<td><a target="_blank" href="http://www.lonja.org.co/">www.lonja.org.co</a></td>
										</tr>
										<tr>
											<td>ANIF</td>
											<td rowspan="2">(571) 310 1500 (571) 310 2041</td>
											<td rowspan="2">Calle 70 A No. 7-86. Bogotá</td>
											<td rowspan="2"><a target="_blank" href="http://www.anif.org/">www.anif.org</a></td>
										</tr>
										<tr>
											<td>Asociación Nacional de Instituciones Financieras</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="table-responsive mt-5">
								<table class="table table-bordered">
									<h4>Cámaras de Comercio</h4>
									<thead class="table-light">
										<tr>
											<td>Nombre</td>
											<td>Teléfono</td>
											<td>Dirección</td>
											<td>Sitio web</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Cámara de Comercio Aburrá Sur</td>
											<td>(604) 372 2344</td>
											<td>Calle 48 Nro 50 - 16</td>
											<td><a target="_blank" href="http://www.ccas.org.co/">www.ccas.org.co</a></td>
										</tr>
											<tr>
											<td>Cámara de Comercio del Oriente Antioqueño</td>
											<td>(604) 531 2514</td>
											<td>Calle 51 Nro 46 - 24</td>
											<td><a target="_blank" href="http://www.ccoa.org.co/">www.ccoa.org.co</a></td>
										</tr>
											<tr>
											<td rowspan="4">Cámara de Comercio Urabá</td>
											<td rowspan="4">(604) 828 0184</td>
											<td>Calle 109 No 100 – 41</td>
											<td rowspan="4"><a target="_blank" href="http://www.ccuraba.org.co/">www.ccuraba.org.co</a></td>
										</tr>
											<tr>
											<td>Barrio Vélez.</td>
										</tr>
											<tr>
											<td>Edificio Cámara de Comercio</td>
										</tr>
											<tr>
											<td>Apartadó - Antioquia</td>
										</tr>
									</tbody>
								</table>
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
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/directorio-de-agremiaciones-asociaciones-y-otros-grupos-de-interes" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/directorio-de-agremiaciones-asociaciones-y-otros-grupos-de-interes" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
			                     </div>
	                	</div>
	                 </div>
	                      <div class="vlt-gap-100"></div>   
              </section>						</footer>
@endsection