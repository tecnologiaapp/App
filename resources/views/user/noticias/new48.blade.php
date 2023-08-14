@extends('layouts.app')
@section('content')
@section('body_color', '#FFFFFF;')

<div class="content" style="padding-top: 80px;">

<div class="container">
 <div class="row">
    <div class="col-md-10 offset-md-1">
        <div class="text-justify">
        <div class="section-title" style="padding-top: 60px;">
          <h2> Con la entrega de la iluminación del Hotel Nutibara, el Distrito promueve el turismo y la seguridad en el Centro de Medellín</h2>
        </div>

        <ul>
            <li>1.500 metros cuadrados de fachada del Hotel Nutibara fueron iluminados con tecnologías amigables con el medio ambiente. </li>
            <li>Esta intervención exalta el valor patrimonial del Hotel Nutibara para integrarlo dentro del paisaje urbano nocturno del Centro tradicional.</li>
            <li>El Distrito de Medellín, a través de la Agencia APP, ha iluminado otros Bienes de Interés Cultural como La Naviera y 29 fachadas del único barrio patrimonial de Medellín, Prado.</li>
        </ul>

        <p>En una apuesta por la transformación urbana, el mejoramiento del paisaje urbano y de la seguridad, y la cualificación de fachadas arquitectónicas del Centro tradicional de Medellín, el Distrito, a través de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas -Agencia APP-, entregó la iluminación del emblemático Hotel Nutibara. </p>
        <p>Con esta iluminación, que consta de 16 proyectores tipo Agorá, seis proyectores tipo iPro y 62 metros lineales de cinta LED, se destacan las cualidades arquitectónicas del hotel, se renueva un espacio para el encuentro cultural, turístico y ciudadano, y se contribuye al cuidado del medio ambiente con tecnologías ecosostenibles.</p>
        <p>“Contribuimos así al abrazo de la Plaza Botero para que en las noches se llene de vida, arte, magia y color. Junto con la iluminación arquitectónica de La Naviera y con los edificios que vamos a iluminar próximamente en este mismo entorno seguimos construyendo una ciudad que ama su patrimonio, que lo pone en valor y lo cuida. Seguimos así protegiendo y acompañando uno de los mejores lugares turísticos de la ciudad, la Plaza Botero”, afirmó Rodrigo Foronda Morales, director general de la Agencia APP.</p>
        <p>Esta intervención, que se complementa con la realizada en el edificio La Naviera y el mejoramiento de fachadas de los edificios Palacé, Constain y Cárdenas, contribuye a proteger los corredores de usos mixtos estratégicos y con identidad histórica, recuperar el paisaje urbano y arquitectónico, fomentar la mejora y la conservación de edificaciones patrimoniales, valorizar la propiedad de edificios históricos y aportar a la renovación y seguridad del Centro tradicional de la ciudad.</p>
        <p>“Encendimos las luces arquitectónicas de un edificio icónico. Así, continuaremos con las puertas abiertas para toda la ciudad y para los visitantes que vienen a recorrer estas hermosas calles del Centro de la ciudad”, amplió el gerente del hotel, Andrés Felipe Angarita.</p>
        <p>La entrega de la iluminación arquitectónica del Hotel Nutibara contó con la participación de artistas, un conversatorio y un concierto de la agrupación Caneca Boys. Asimismo, hasta el 30 de mayo estará expuesto en el Pasaje Peatonal Junín el Museo de la Calle con 30 fotografías históricas e inéditas del lugar, entre ellas, la instalación de la primera subestación de energía, los reinados de belleza de la época y el antiguo auditorio. </p>
        <p>Para la ciudadana Soraya Devia, “en el Centro de la ciudad convergen arquitectura, patrimonio e historia. Con el evento de la iluminación del Hotel Nutibara se realiza una invitación a que la ciudadanía mire hacia arriba cuando transita el Centro y descubra que hay una gran riqueza arquitectónica para apropiarse”.</p>
        <p>Esta edificación, en sus 78 años de historia, ha recibido a miles de viajeros, turistas, aclamados artistas y personalidades. Hasta 1972, algunos de los presidentes de Colombia se hospedaron en él cuando venían a la capital antioqueña. El Hotel Nutibara fue el más alto de la ciudad por unos años y su estilo supo mezclar lo tradicional y lo californiano.</p>
        <p>Su diseño fue encargado al arquitecto norteamericano Paul Williams, famoso por trabajar en Hollywood haciendo mansiones para personalidades y hoteles como el Beverly Hills, el cual aparece en la portada del álbum Hotel California de The Eagles.</p>
        <p>Finalmente, entre el 26 de abril y el 3 de mayo, la Agencia APP y el Hotel Nutibara organizan un concurso de fotografía con dos categorías, Histórica y Nocturna. El reconocimiento será una noche de hospedaje, por pareja, en la suite presidencial del hotel. Toda la información de esta convocatoria está disponible en: <a href="https://app.gov.co/nutibara" target="_blank">https://app.gov.co/nutibara</a>. </p>
        </div>
        
        <div style="text-align:center;" class="col-sm-12 pt-4">
            <div id="carouselExampleControls" class="carousel slide justify-content-center align-items-center" data-bs-ride="carousel" style="height:450px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{ asset('assets/img/Galeria/nutibara/1.jpg')}}" class="mx-auto d-block" style="width:600px; height:450px;">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('assets/img/Galeria/nutibara/2.jpg')}}" class="mx-auto d-block" style="width:600px;  height:450px;">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('assets/img/Galeria/nutibara/3.jpg')}}" class="mx-auto d-block" style="width:600px;  height:450px;">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('assets/img/Galeria/nutibara/4.jpg')}}" class="mx-auto d-block" style="width:600px;  height:450px;">
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
      <div style="text-align:center;" class="col-sm-12 pt-4">
						<iframe src="{{ asset('assets/videos/new/Rodrigo37.mp4') }}" width="700" height="400"></iframe>
					</div>
      <div class="section-title" style="padding-top: 60px;">
          <h2>  Recursos</h2>
        </div>
        <table>
        
            <tbody>
             <tr>
                <td width="65%">
                Reel - Hotel Nutibara
                </td>
                <td>
                <a href="https://drive.google.com/file/d/1Wgvas4rVVHkbAeFZXJto8ZiAxOhgOUld/view?usp=share_link" class="btn btn-primary btn-block" target="_blank">
									Visualizar
								</a>
                </td>
             </tr>
             <tr>
                <td width="65%">
                Testimonio - Andrés Felipe Angarita
                </td>
                <td >
                    <a href="https://drive.google.com/file/d/1D308k2eMOQqVSihSDsYP0R7t9ItRY05J/view?usp=share_link" class="btn btn-primary btn-block" target="_blank">
                        Reproducir
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
                                <a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/noticias/new48" rel="nofollow" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>

				            <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/noticias/new48" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
			                     </div>
	                	</div>
	                 </div>
	                    <div class="vlt-gap-100"></div>   
              </section>						
     </footer>
     @endsection