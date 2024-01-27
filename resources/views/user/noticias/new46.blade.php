@extends('layouts.app')
@section('content')
@section('body_color', '#FFFFFF;')

<div class="content" style="padding-top: 80px;">

<div class="container">
 <div class="row">
    <div class="col-md-10 offset-md-1">
        <div class="text-justify">
        <div class="section-title" style="padding-top: 60px;">
          <h2> La transformación de Provenza ha logrado aumentar más de 4.600 empleos en el sector</h2>
        </div>

        <ul>
            <li>Provenza pasó de 1.200 empleos a 5.800 entre directos e indirectos, después de la intervención de sus calles.</li>
            <li>La comuna 14 El Poblado tiene 20.550 empresas.</li>
            <li>Esta zona es la preferida para hospedarse de turistas extranjeros, el 63% la escoge para pasar su estadía.</li>
        </ul>

       <p>El parque Lleras, en la comuna 14 El Poblado, se prepara para vivir una transformación en su espacio, con controles de acceso que harán de la zona un lugar más seguro para turistas y comerciantes, gracias a la estrategia de la Administración Distrital para abrazar esta zona de la ciudad. Se espera que el impacto sea igual al de Provenza, calle que pasó de 1.200 empleos a 5.800, entre directos e indirectos, gracias a la dinámica comercial que se vive en la zona.</p>

       <p>“Medellín continúa viviendo una gran transformación para beneficio de nuestros comerciantes y empresarios, como la que vivimos en Provenza, una de las calles más cool del mundo que con esta apropiación de las vías ha generado una dinámica empresarial que ha beneficiado a más de 240 negocios de la zona. También, lo que estamos viviendo en Plaza Botero, donde los turistas están viviendo toda nuestra oferta cultural. Ahorita se viene todo el aprovechamiento del parque Lleras que tiene todo el potencial de ser un gran centro a cielo abierto para que nuestros comerciantes puedan ofrecer a los turistas toda la oferta gastronómica, entretenimiento, entre otros” expresó el secretario de desarrollo económico, Mauricio Valencia.</p>

       <p>El último informe de la Asociación Hotelera y Turística de Colombia (COTELCO), para el mes de enero del 2023 el sector de Poblado tuvo una ocupación hotelera del 72,2%, aumentando 0,7% respecto al mismo mes del año anterior cuando la cifra fue 71,7%. El Poblado es la zona preferida para hospedarse de los turistas extranjeros, el 63% escoge este lugar para pasar su estadía. </p>

       <p>Uno de los objetivos misionales de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas -Agencia APP- es promover acciones que garanticen la sostenibilidad del sistema público y colectivo, a través de la operación de instrumentos de financiación como el Aprovechamiento Económico del Espacio Público -AEEP-, modelo ejecutado desde 2016.</p>

       <p>Este instrumento es un vehículo para la cualificación, sostenibilidad, mantenimiento y puesta en valor del espacio público. Además, es una herramienta de control y buenas prácticas para generar lugares de esparcimiento, encuentro y comercio, y una movilidad activa, dinámica e incluyente.</p>

       <p>Así, en en los sectores de Provenza, Manila y Astorga, en El Poblado, gracias al trabajo articulado con la Administración Distrital y los comerciantes, se han activado desde 2020 a la fecha 3.053 metros cuadrados de espacio público para el uso y disfrute de la ciudadanía, el fomento y la consolidación de la oferta comercial, la entrega de más de 300 millones de pesos de descuento en la tarifa de AEEP y la generación de más de 22.000 visitas promedio en semana y de más de 6.000 en días festivos.</p>

       <p>“Un ejemplo claro de peatonalización es la vía Provenza, donde se han generado un número incontable de empleos y donde el impacto a los comerciantes ha sido considerable. Pasamos ahora al abrazo que daremos al Parque Lleras. Después de la inversión cuantiosa en su infraestructura, de la mano de los comerciantes y diferentes entidades del Conglomerado, estamos empeñados en replicar el modelo de Provenza para que el Parque Lleras sea un sector vivo y dinámico que integre a los comerciantes, moradores y turistas alrededor de la consolidación económica”, dijo Rodrigo Foronda Morales, director general de la Agencia APP.</p>

       <p>Según datos de Fenalco, en la comuna 14 El Poblado hay 14.071 microempresas, 4.432 pequeñas empresas, 1.546 medianas empresas, 501 grandes empresas para un total de 20.550, representando un alto porcentaje de comercio en Medellín.</p>

       <p>“Provenza le ha producido a la ciudad gran cantidad de dinero, grandes empleos, esto es un tejido social grandísimo. Hacer esta calle la más famosa de Colombia, la número 15 del mundo, es algo para destacar. Esta es la transformación que debe tener Medellín, replicar esto en el Lleras es maravilloso porque es crear más espacios para que la gente nos camine”, dijo Juanita Cobollo, directora de la Corporación Provenza.</p>

       <p>Con este acompañamiento institucional en la zona, la Administración Municipal busca propiciar puntos de encuentro seguros, cualificar el paisaje y mejorar la economía del territorio.</p>

        </div>
        
        <div style="text-align:center;" class="col-sm-12 pt-4">
            <div id="carouselExampleControls" class="carousel slide justify-content-center align-items-center" data-bs-ride="carousel" style="height:450px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{ asset('assets/img/news/economico2.jpg')}}" class="mx-auto d-block" style="width:600px; height:450px;">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('assets/img/news/economico3.jpg')}}" class="mx-auto d-block" style="width:600px;  height:450px;">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('assets/img/news/economico5.jpg')}}" class="mx-auto d-block" style="width:600px;  height:450px;">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('assets/img/news/economico6.jpg')}}" class="mx-auto d-block" style="width:600px;  height:450px;">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        
        </div>
<br>
<h5 style="text-align:center; padding-top: 20px;">
Agencia App <br>
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
                                <a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/noticias/new46" rel="nofollow" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>

				            <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/noticias/new46" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
			                     </div>
	                	</div>
	                 </div>
	                    <div class="vlt-gap-100"></div>   
              </section>						
     </footer>
     @endsection