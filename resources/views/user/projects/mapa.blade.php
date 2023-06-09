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
							Mapa del sitio
							</h1>
		
			</div>

		</div>
		
	</section>



<section>
	<div class="vlt-gap-120"></div>

	<!--Particle-->
	<div class="vlt-particle" data-jarallax-element="-100 0"><img src="{{ asset('assets/img/root/particle-01--black.png')}}" width="200" alt=""></div>
	<!--Particle-->

	<div class="container mt-5 text-justify">

	<div align="center">
	<h3 class="mt-5 mb-5">Mapa del sitio Web</h3>
	</div>
	</div>
 </section>

	<div class="container mt-5">


	<button class="accordion"> 1. Proyectos</button>
						                
				<div class="panel">  
						<table class="table table-bordered table-striped custom-table">
							<thead>
								<tr>
                              
                                <th>Todos nuestros proyectos</th>
								
								</tr>
							</thead>

							<tbody>

                            <tr>
							<td width="65%">Todos nuestros proyectos</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.index') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar sitio
								</a>
							</td>
						</tr>

						<thead>
								<tr>
                              
                                <th>Gestión  de Asociaciones Público Privadas - APP</th>
								
								</tr>
							</thead>

							<tbody>
							<tr>
							<td width="65%">Gestión  de Asociaciones Público Privadas - APP</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.app') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>

                        <tr>
							<td width="65%">Modernización Unidad Deportiva Atanasio Girardot</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.mudag') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>

                        <tr>
							<td width="65%">Proyecto de factibilidad</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.factibilidad') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>

                        <tr>
							<td width="65%">Arena Medellín</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.arena') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>

                        <tr>
							<td width="65%">Medellín Saludable</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.saludable') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>

                        <tr>
							<td width="65%">Centro de Detención Preventiva para Sindicados</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.carcel') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>

                        <tr>
							<td width="65%">AIIRE</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.aiire') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>
							</tbody>

							
						<thead>
								<tr>
                              
                                <th>   Paisaje y Patrimonio</th>
								
								</tr>
							</thead>
							<tbody>
                            <tr>
							<td width="65%">Paisaje y Patrimonio</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.pyp') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>
						<tr>
							<td width="65%">Plan Integral de Gestión de Prado</td>
						
							<td class="text-center">
								<a href="{{ route('user.projects.gestion') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>
                        <tr>
							<td width="65%">Edificio La Naviera</td>
						
							<td class="text-center">
								<a href="{{ route('user.projects.naviera') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>

                        <tr>
							<td width="65%">Galería Urbana a Cielo Abierto calle Barranquilla</td>
						
							<td class="text-center">
								<a href="{{ route('user.projects.barranquilla') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>

                        
                        <tr>
							<td width="65%">Muros verdes</td>
						
							<td class="text-center">
								<a href="{{ route('user.projects.muros') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>

                        
                        <tr>
							<td width="65%">Puentes y arte urbano</td>
						
							<td class="text-center">
								<a href="{{ route('user.projects.puentes') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>

                        <tr>
							<td width="65%">Arte urbano en intercambio vial Bulerías</td>
						
							<td class="text-center">
								<a href="{{ route('user.projects.bulerias') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>

                        <tr>
							<td width="65%">Ciclorruta Norte-Sur</td>
						
							<td class="text-center">
								<a href="{{ route('user.projects.cicloruta') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>

                        <tr>
							<td width="65%">Galería urbana calle 10, El Poblado</td>
						
							<td class="text-center">
								<a href="{{ route('user.projects.poblado') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>

                        <tr>
							<td width="65%">Parque Bolívar</td>
						
							<td class="text-center">
								<a href="{{ route('user.projects.bolivar') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>

                        <tr>
							<td width="65%">Pasaje La Bastilla</td>
						
							<td class="text-center">
								<a href="{{ route('user.projects.bastilla') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>

                        <tr>
							<td width="65%">Pasaje Junín</td>
						
							<td class="text-center">
								<a href="{{ route('user.projects.junin') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>

                        <tr>
							<td width="65%">Avenida Jardín</td>
						
							<td class="text-center">
								<a href="{{ route('user.projects.jardin') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>
							</tbody> 

							<thead>
								<tr>
                              
                                <th>Gestión Inmobiliaria</th>
								
								</tr>
							</thead>

							<tbody>
                            <tr>
							<td width="65%">Gestión Inmobiliaria</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.inmo') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						    </tr>		
                            
                            <tr>
							<td width="65%">Gestión de bienes inmuebles fiscales</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.bienes') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						    </tr>	

                            <tr>
							<td width="65%">Oportunidades inmobiliarias</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.oportunidades') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						    </tr>
                            
                            <tr>
							<td width="65%">Estructuración de proyectos inmobiliarios</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.inmobiliarios') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						    </tr>

                            <tr>
							<td width="65%">Hotel y Centro de Negocios Plaza Mayor</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.hotel') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						    </tr>

                            <tr>
							<td width="65%">Hotel Deportivo Villa Olímpica</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.olimpica') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						    </tr>

                            <tr>
							<td width="65%">Prado Centro</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.prado') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						    </tr>

                            <tr>
							<td width="65%">Expansión Museo de Antioquia</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.museo') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						    </tr>

                            <tr>
							<td width="65%">Centro de Comercios y Servicios La Aurora</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.aurora') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						    </tr>
						</tbody>
                        <thead>
								<tr>
                              
                                <th>Aprovechamiento Económico del Espacio Público –AEEP–</th>
								
								</tr>
							</thead>
                            <tbody>
                            <tr>
							<td width="65%">Aprovechamiento Económico del Espacio Público –AEEP–</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.aeep') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						    </tr>
                            </tbody>

								
							</tbody>
						</table>
						</div>


						
					
			<button class="accordion">2. Banco de artistas</button>
            <div class="panel"> 
				
						<table class="table table-bordered table-striped custom-table">
                        <thead>
						<tr>
                        <h6><span>Banco de artistas </span></h6>					
					
						</tr>
					    </thead>

						<tbody>
                            <tr>
							<td width="65%">ACTUALIZACIÓN E INSCRIPCIÓN DEL BANCO DE PORTAFOLIOS PARA LOS PROYECTOS DE ARTE URBANO 2022 - II</td>
						
							<td class="text-center">
								<a href="https://forms.gle/weBzN8E6FUxLkSuT8" class="btn btn-primary btn-block" target="_blank">
									Visitar sitio
								</a>
							</td>
						</tr>

						</tbody>

						</table>
					
			</div>			
			


			
					
<button class="accordion">3. Somos APP</button>
				
<div class="panel">
						<table class="table table-bordered table-striped custom-table">
                        <thead>
						<tr>
                              
                                <th>Historia</th>
								
								</tr>
					    </thead>

						<tbody>
						<tr>
							<td width="65%">Historia</td>
							
							<td class="text-center">
								<a href="{{ route('user.about.history') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>
                        
						<thead>
								<tr>
                              
                                <th>Misión y visión</th>
								
								</tr>
							</thead>

							<tbody>
						<tr>
							<td width="65%">Misión y visión</td>
						
							<td class="text-center">
								<a href="{{ route('user.about.mision')}}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>										
						</tbody>

						<thead>
								<tr>
                              
                                <th>Funciones </th>
								
								</tr>
							</thead>

							<tbody>
						<tr>
							<td width="65%">Funciones</td>
						
							<td class="text-center">
								<a href="{{ route('user.about.functions')}}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>										
						</tbody>
						
						</tbody>

						</table>

			</div>


		

						<button class="accordion"> 4. Nuestro equipo</button>
				
            <div class="panel">


				
						<table class="table table-bordered table-striped custom-table">
                       

						<thead>
								<tr>
                              
                                <th>Director general </th>
								
								</tr>
							</thead>

							<tbody>
						<tr>
							<td width="65%">Director general</td>
						
							<td class="text-center">
								<a href="{{ route('user.about.team') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>										
						</tbody>

                        <thead>
								<tr>
                              
                                <th>Subdirector de Alianzas Público Privadas</th>
								
								</tr>
							</thead>

							<tbody>
						<tr>
							<td width="65%">Subdirector de Alianzas Público Privadas</td>
						
							<td class="text-center">
								<a href="{{ route('user.subdirectors.app') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>										
						</tbody>

                        <thead>
								<tr>
                              
                                <th>Subdirector de Paisaje y Patrimonio</th>
								
								</tr>
							</thead>

							<tbody>
						<tr>
							<td width="65%">Subdirector de Paisaje y Patrimonio</td>
						
							<td class="text-center">
								<a href="{{ route('user.subdirectors.landscape') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>										
						</tbody>

                        <thead>
								<tr>
                              
                                <th>Subdirectora de Gestión Inmobiliaria</th>
								
								</tr>
							</thead>

							<tbody>
						<tr>
							<td width="65%">Subdirectora de Gestión Inmobiliaria</td>
						
							<td class="text-center">
								<a href="{{ route('user.subdirectors.inmo') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>										
						</tbody>

                        <thead>
								<tr>
                              
                                <th>Directora técnica</th>
								
								</tr>
							</thead>

							<tbody>
						<tr>
							<td width="65%">Directora técnica</td>
						
							<td class="text-center">
								<a href="{{ route('user.subdirectors.tecnical') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>										
						</tbody>

						</table>
				
			</div>

			
						
					<button class="accordion">5. Rendición de cuentas</button>

				<div class="panel"> 
						<table class="table table-bordered table-striped custom-table">
                        <thead>
						<tr>
							<th>
                            Rendición de cuentas 2021
							</th>
			
						
						</tr>
					    </thead>

						<tbody>
						<tr>
							<td width="65%">Rendición de cuentas 2021</td>
						
							<td class="text-center">
								<a href="{{ route('user.rendition.cuentas-2021') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>					
						
						<thead>
								<tr>
                              
                                <th>Rendición de cuentas 2020 </th>
								
								</tr>
							</thead>

							<tbody>
						<tr>
							<td width="65%">Rendición de cuentas 2020</td>
							
							<td class="text-center">
								<a href="{{ route('user.rendition.cuentas') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>								
						</tbody>

						<thead>
								<tr>
                              
                                <th>Rendición de cuentas 2019</th>
								
								</tr>
							</thead>

							<tbody>
						<tr>
							<td width="65%">Rendición de cuentas 2019</td>
							
							<td class="text-center">
								<a href="{{ asset('assets/pdf/Rendicion-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>							
						</tbody>

                        <thead>
								<tr>
                              
                                <th>Rendición de cuentas 2018</th>
								
								</tr>
							</thead>

							<tbody>
						<tr>
							<td width="65%">Rendición de cuentas 2018</td>
							
							<td class="text-center">
								<a href="{{ asset('assets/pdf/Rendicion-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>							
						</tbody>

                        <thead>
								<tr>
                              
                                <th>Rendición de cuentas 2017</th>
								
								</tr>
							</thead>

							<tbody>
						<tr>
							<td width="65%">Rendición de cuentas 2017</td>
							
							<td class="text-center">
								<a href="{{ asset('assets/pdf/Rendicion-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>							
						</tbody>


						</tbody>

						</table>
			
						</div>


			
						
				<button class="accordion">6. Sala de prensa </button>

				<div class="panel">

				
						<table class="table table-bordered table-striped custom-table">
                        <thead>
						<tr>
						<th>Noticias</th>
						
						</tr>
					    </thead>

						<tr>
							<td width="65%">Noticias</td>
						
							<td class="text-center">
								<a href="{{ route('user.transparency.boletin') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>					
						
						<thead>
								<tr>
                              
                                <th>Galeria </th>
								
								</tr>
							</thead>

							<tbody>
						<tr>
							<td width="65%">Galeria</td>
							
							<td class="text-center">
								<a href="{{ route('user.transparency.galery') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>				
								
						</tbody>

						<thead>
								<tr>
                              
                                <th> Agencia APP en medios</th>
								
								</tr>
							</thead>

							<tbody>
						<tr>
							<td width="65%">Agencia APP en medios</td>
						
							<td class="text-center">
								<a href="{{ route('user.transparency.medios') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>							
						</tbody>

						

						</tbody>

						</table>
				
			</div>

			
						
				<button class="accordion">7. Contactanos</button>

				<div class="panel">

				
						<table class="table table-bordered table-striped custom-table">
                        <thead>
						<tr>
					<th>	Contactanos</th>
						
						</tr>
					    </thead>

						<tbody>
						<tr>
							<td width="65%">Contactanos</td>
							
							<td class="text-center">
								<a href="{{ route('user.transparency.contact-us') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar página
								</a>
							</td>
						</tr>
	
						</tbody>

						</table>
				
			</div>


			
						
				<button class="accordion">8. Participa</button>

				<div class="panel">

				
						<table class="table table-bordered table-striped custom-table">
                        <thead>
						<tr>
						<th>Participa</th>
						
						</tr>
					    </thead>

						<tbody>
						<tr>
							<td width="65%">Participa</td>
							
							<td class="text-center">
								<a href="{{ route('user.projects.participa') }}" class="btn btn-primary btn-block" target="_blank">
									Visitar sitio
								</a>
							</td>
						</tr>			

						</tbody>
						</table>
				
			</div>		

			
		
				<button class="accordion">9. Transparencia</button>

				<div class="panel">

				
						<table class="table table-bordered table-striped custom-table">
                        <thead>
						<tr>
						<th>Transparencia</th>
						
						</tr>
					    </thead>

						<tbody>
						<tr>
							<td width="65%">Transparencia</td>
							
							<td class="text-center">
								<a href="{{ route('user.transparency.suit') }}" class="btn btn-primary btn-block" target="_blank">
									Ver página
								</a>
							</td>
						</tr>	

					
						</tbody>

						</table>
				
			</div>

	

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
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/mapa" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/mapa" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
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