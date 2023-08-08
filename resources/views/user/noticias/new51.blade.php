@extends('layouts.app')
@section('content')
@section('body_color', '#FFFFFF;')

<div class="content" style="padding-top: 80px;">

<div class="container">
 <div class="row">
    <div class="col-md-10 offset-md-1">
        <div class="text-justify">
        <div class="section-title" style="padding-top: 60px;">
          <h2>Arte y color en el parque Lleras consolidarán el turismo, la seguridad y la recuperación del espacio público </h2>
        </div>

        <ul>
            <li>Alrededor de 1.000 metros cuadrados de vías peatonalizadas del parque Lleras fueron intervenidos con nuevo arte urbano efímero. </li>
            <li>Las obras son de creadores y colectivos como Las Chicas que Pintan, Deúniti y Trash Art. </li>
            <li>Esta intervención acompaña a la estrategia Abrazo al Parque Lleras, para potenciar el turismo y el disfrute de la zona.   </li>
        </ul>

        <p>Con una intervención de arte urbano efímero de 978 metros cuadrados en el parque Lleras, el Distrito de Medellín consolida la estrategia de recuperación del espacio público, para mejorar la seguridad y fortalecer el turismo y el disfrute de esta zona de la comuna 14-El Poblado.</p>
        <p>Las obras, creadas por los artistas y colectivos de arte urbano Las Chicas que Pintan, Deúniti y Trash Art, son un homenaje a la cultura silletera de la región e invitan al disfrute y a la interacción con las calles peatonalizadas a través del arte. </p>
        <p>De acuerdo con el director de la Agencia APP, Rodrigo Foronda Morales, “estamos contribuyendo a que los artistas y los comerciantes convoquen a la ciudadanía, a los turistas internos y externos, para que el Parque Lleras vuelva a cobrar vida, que vuelva ser un lugar vibrante, un lugar para las familias”. </p>
        <p>Las Chicas que Pintan es un colectivo conformado por Carolina García Franco y Sara López Zapata, el cual surgió en 2019, gracias a su pasión por el muralismo. Desde 2020, realizan talleres interactivos de pintura utilizando técnicas como acuarela, acrílico, óleo e ilustración. </p>
        <p>“Nos encantan las flores y los colores, y queremos transmitir esa alegría en la ciudad, renovando este parque, que ha sido tan importante para Medellín”, dijo Sara López Zapata, integrante del colectivo Las Chicas que Pintan. </p>
        <p>El colectivo Deúniti, por su parte, nació en 2006 y con sus intervenciones propone conversaciones en el territorio, en espacios de arte y ciudad, por medio de obras gráficas, desarrollos culturales y procesos urbanos. Sus trabajos han pasado por el Museo de Antioquia, el Palacio de la Cultura de Antioquia y el Museo del Banco de la República, entre otros. En el Lleras participaron, en 2021, con su obra ‘El Goloso’, como parte de la reactivación económica de la pospandemia por la covid-19. </p>
        <p>“Estamos haciendo un laberinto. La idea es que la gente se apropie del espacio de otra manera, que pueda jugar e interactuar, recorrer las diferentes partes del laberinto y generar otras dinámicas en la zona”, afirmó Juan Esteban Naranjo,  miembro del colectivo Deúniti.</p>
        <p>Por último, la fundación Trash Art promueve reflexiones alrededor de la vida, los enfoques poblacionales y lo intercultural. La entidad nació en 2014 y sus obras más emblemáticas están ubicadas en el Museo Urbano de la Memoria del barrio Santo Domingo Savio, en donde se exponen las memorias de lucha y resistencia de quienes han construido y habitado ese lugar. </p>
        <p>“Le agradecemos a la Agencia APP que nos haya invitado para este tipo de intervenciones porque de esa manera nos alienta para continuar con los procesos de formación en arte urbano que tenemos en los barrios”, aseguró Daniel Urrego, integrante de la fundación Trash Art. </p>
        <p>Estas obras de arte urbano efímero apuestan por el disfrute del espacio público, el mejoramiento de la seguridad y la recuperación del parque Lleras, como centro del turismo local, nacional y extranjero. </p>
        <p>Con las vías peatonalizadas en el parque también se apoya la consolidación económica del sector, a través del aprovechamiento del espacio público, instrumento liderado por la Agencia APP con el que los comerciantes pueden hacer uso de la calle para extender sus negocios y generar más ventas, empleos y disfrute para el visitante.</p>
        <p>De acuerdo con Alejando Cristalino, comerciante de la zona, “estamos totalmente de acuerdo con la implementación que está realizando el alcalde, acá, en el parque Lleras, porque las ventas se han incrementado entre un 25 % y un 35 % hasta el momento. Se ha visto mucho flujo; bajar de los hoteles a las personas extranjeras; algo que había disminuido”. </p>
        <p>Con la reciente entrega del mural más grande de Medellín, Constelaciones, la Agencia APP, en su propósito de cualificar y mejorar el paisaje urbano, ha generado para la capital antioqueña más de 30.000 metros cuadrados de arte urbano en espacios como el puente de la 4 sur, la Galería Urbana a Cielo Abierto de la Calle Barranquilla, el intercambio vial Punto Cero, entre otros, superando así la meta del Plan de Desarrollo de ejecutar 14.300 metros cuadrados de renovación urbana a través del arte. </p>

        </div>
        
        <div style="text-align:center;" class="col-sm-12">
            <div id="carouselExampleControls" class="carousel slide justify-content-center align-items-center" data-bs-ride="carousel" style="height:450px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{ asset('assets/img/Galeria/lleras/5.jpg')}}" class="mx-auto d-block" style="width:600px; height:450px;">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('assets/img/Galeria/lleras/6.jpg')}}" class="mx-auto d-block" style="width:600px;  height:450px;">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('assets/img/Galeria/lleras/7.jpg')}}" class="mx-auto d-block" style="width:600px;  height:450px;">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('assets/img/Galeria/lleras/8.jpg')}}" class="mx-auto d-block" style="width:600px;  height:450px;">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black;"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        
        </div>
<br>



       
      </div>
                    <div style="text-align:center;" class="col-sm-12">
						<iframe src="{{ asset('assets/videos/new/Rodrigo38.mp4') }}" width="700" height="400"></iframe>
					</div>
      <div class="section-title" style="padding-top: 60px;">
          <h2>  Recursos</h2>
        </div>
        <table>
        
            <tbody>
             <tr>
                <td width="65%">
                Reel - Lleras
                </td>
                <td>
                <a href="https://drive.google.com/file/d/1stx2DhdGt84x-vH-YUg64X-egoahQ9Tq/view?usp=share_link" class="btn btn-primary btn-block" target="_blank">
									Visualizar
								</a>
                </td>
             </tr>
             <tr>
                <td width="65%">
                Testimonio - Caro Lopéz Zapata
                </td>
                <td >
                    <a href="https://drive.google.com/file/d/1jJDnvpBVjl5m4E04nArKKJQ9kfM86XrX/view?usp=share_link" class="btn btn-primary btn-block" target="_blank">
                    Visualizar
                    </a>
                </td>
             </tr>
            </tbody>
        </table>
      
    </div>
    
 </div>
</div>



	<footer class="vlt-single-post__footer">
			
							
				<section style="background-color: transparent;">
	                <div class="vlt-gap-100"></div>
	                   <div class="container">
	                  	<!--Animation Block-->
	                    	<div class="vlt-animation-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">
		             	<!--Social Share-->
		                    	<div class="vlt-social-share text-center">
		                 		<h5 class="vlt-display-1">Compártelo
		                              		</h5>
                                <a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/noticias/new51" rel="nofollow" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>

				            <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/noticias/new51" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
			                     </div>
	                	</div>
	                 </div>
	                    <div class="vlt-gap-100"></div>   
              </section>						
     </footer>