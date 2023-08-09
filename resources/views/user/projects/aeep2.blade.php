@extends('layouts.app')
@section('content')
@section('body_color', '#ffffff;')



<style>

    li{
        text-align:inherit;
        color:black;
        font-size:22px;
    }
    
	.button {
		justify-content:center;
    background-color: #008CBA; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button:hover {
    background-color: #A8F7FE  ; /* Green */
    color: black;
}
a{
    color:black;
}
</style>
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">
		
							<h1 style="color:white;">
							Aprovechamiento Económico del Espacio Público -AEEP-
							</h1>
		
			</div>

		</div>
		
	</section>

    <section>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="text-justify">
								<div class="vlt-gap-15"></div>


                                <h3 style="text-align:center;">
								Ventanilla Única
									
								</h3>
                                <div align="center">
                               <a target="_blank" href="https://www.medellin.gov.co/eventos">Ingresa aquí</a> 
                                </div>


                                <h3 style="text-align:center;">
								Cómo hacerlo
									
								</h3>
<p align="center">Mira el video instructivo</p>

<div align="center">

                               <a target="_blank" href="https://drive.google.com/file/d/1fiffTWgTL1FlApr4GcW1D7XJbWpUaoYD/view?usp=sharing"> Ingresa aquí </a> 
                              </div>

                                <h3 style="text-align:center;">
                                Parques de diversiones no permanentes
									
								</h3>

                                <ul>
                                    <li><b>Radicación. </b> Recibimiento del proyecto de ocupación del espacio público para eventos ocasionales e ingreso a bases de datos consecutivos de la Agencia APP y del Sistema de Gestión Documental Mercurio de la Alcaldía de Medellín. </li>
                              
                              <br>
                              <li><b>Revisión. </b> Análisis completo del proyecto y verificación de que contenga el formato bien diligenciado y que incluya todos los anexos necesarios para la ubicación de parques de diversiones no permanentes.
                            <ol>
                                <li type="circle"><b>Sí. </b>Cuando la documentación está completa se continúa con el trámite.</li>
                                <li type="circle"><b>No. </b>Requerimiento al comerciante solicitando la información. Este se hace bajo los términos de la Ley 1755 de 2015.</li>
                                <li type="square">¿Se obtuvo respuesta al requerimiento en el término de tiempo?

                                <ol>
                                    <li type="circle"><b>No. </b>Se decreta el desistimiento de la solicitud de conformidad al artículo 17 de la Ley 1755 de 2015, se notifica y archiva.</li>

                                    <li type="circle"><b>Sí. </b>Continúa el trámite.</li>
                                </ol>
                                </li>

                            </ol>
                            
                            
                            </li>
                              
                              
                                </ul>
<br>

<li><b>Comité técnico AEEP. </b>Recibimiento de los proyectos para realizar el análisis técnico, financiero, jurídico y geoespacial acorde a su categoría. Es el comité quien define si el proyecto cumple con la condición establecida por el instrumento de Aprovechamiento Económico del Espacio Público (AEEP).

<ol>
    <li type="circle"><b>Aprobado. </b>El proyecto cumple con los parámetros técnicos y geoespaciales para el uso del espacio público.</li>
    <li type="circle"><b>Negado. </b>El proyecto no cumple con los parámetros técnicos y geoespaciales para el uso del espacio público.</li>
</ol>
</li>


<li><b>Emisión de concepto. </b> Descripción a fondo de la decisión tomada por el comité, bien sea aprobada o negada la solicitud, con o sin retribución económica.
<ol>
    <li type="circle">Si el proyecto es aprobado por el comité técnico se realiza la preliquidación. Posteriormente, se envía por medio del correo electrónico para la aprobación por parte del solicitante.</li>
    <li type="circle">Si el proyecto es negado por el comité técnico pasamos al punto siguiente (Paso 5).</li>
    <li type="circle"><b>Aceptación de la Preliquidación.</b> Si el solicitante está de acuerdo con el valor arrojado por la ocupación del espacio se continua con el trámite.</li>
    <li type="circle"><b>No Aceptación de la Preliquidación.</b> Si el solicitante no está de acuerdo con el valor arrojado por la ocupación del espacio pasamos al punto siguiente (paso 6) </li>
   
</ol>


</li>
<br>
<li><b>Factura. </b> Se expide factura mediante la plataforma SAP y se envía al correo electrónico al solicitante para su pago. Este deberá reenviar la constancia de pago al correo <b> solictudes@app.gov.co</b></li>
         <br>
<li><b>Traslado. </b> Envío de la solicitud a la Subdirección de Espacio Público para emitir acto administrativo por medio del cual se otorga, niega o se declara desistida la solicitud y su posterior notificación.</li>

<h5>Descarga aquí</h5>

<a href="{{ asset('assets/pdf/aeep/FO GPP 09 002 FORMATO PROYECTO DE OCUPACION AEEP  EVENTOS OCASIONALES.docx.pdf')}}"  target="_blank">PROYECTO DE OCUPACIÓN AEEP </a>


<h3 style="text-align:center;">
Amoblamiento urbano
									
								</h3>

<p>Esta categoría es liderada por la Subsecretaría de Espacio Público, entidad que realiza todo el procedimiento desde la radicación hasta el estudio socioeconómico del solicitante. Una vez está aprobado, se da traslado a la Agencia APP para conceptualizar la ocupación del módulo en el espacio público.</p>


<h3 style="text-align:center;">
Avisos publicitarios 
									
								</h3>

<p>Este proceso es liderado por la Subsecretaría de Espacio Público. El ciudadano deberá radicar la solicitud en las instalaciones de la Subsecretaría ubicada en las Torres de Bombona, carrera 42 # 47 - 15.</p>


<h3 style="text-align:center;">
Plataformas
									
								</h3>
                                <p>Plataforma Isolucion - Alcaldía de Medellín</p>
                                <h5>
                            
<a target="blank" href="https://www.medellin.gov.co/Isolucion/Administracion/">Ingresa aquí</a>

                                
								</h5>           



<h3 style="text-align:center;">
Documentos de tu interés
									
								</h3>
<hr>
                                <h3 style="text-align:center;">
                                Tablero Informativo de Ocupación del AEEP 
									
								</h3>

                                <p>Sistema gerencial y de participación ciudadana para el monitoreo de las dinámicas y la gestión del aprovechamiento económico del espacio público en Medellín. Encuentras información general en cifra de indicadores y métricas mensuales, áreas del espacio público ocupadas con actividades, mapas de calor, entre otras.</p>

                                <h5>
                                 
                                 <a target="_blank"href="https://agenciaapp.maps.arcgis.com/apps/dashboards/135b9dce2374440cb2d16b272c22194d">Ingresa aquí</a>
								</h5>

                              <hr>

                                <h3 style="text-align:center;">

                                Decreto de reducción de la tarifa para el aprovechamiento económico del espacio público

									
								</h3>

                                <p>Por medio del cual se prorroga la medida de reducción temporal para la retribución por ocupación del espacio público y se permite autorizar temporalmente otras ocupaciones especiales de la actividad económica en el espacio público en el marco del instrumento Aprovechamiento Económico del Espacio Público y de las medidas de reactivación económica, establecida mediante Decreto 0967 de 2020.</p>

                                <h5>Descarga aquí</h5>

                                <a href="https://drive.google.com/file/d/1xUB4-b7KzVNk6JA8LGC5jhlBu775CREH/view?usp=sharing">Decreto 0502 de 2021</a>
 <hr>

                                <h3 style="text-align:center;">
                                Módulos de atención
									
								</h3>

                                <h4>
                                Presenciales
									
								</h4>

<ul>
    <li>Centro de Servicios a la Ciudadanía La Alpujarra. Centro Administrativo La Alpujarra, sótano A, taquilla 11 o 12.</li>
    <li>Edificio Plaza de la Libertad, calle 44 # 53A - 31, piso 1. Teléfonos. 385 55 55, ext. 9477 - 448 17 40, ext. 132 - 121. Móvil: 302 271 1560. </li>
</ul>



<h4>
Virtuales
									
								</h4>

                                <ul>
                                    <li>Correo electrónico: <b>solicitudes@app.gov.co</b> </li>
                                    <li>Taquilla virtual: <b> <a target="_blank" href="https://municipiodemedellinvirtual.sistemasentry.com.co/VisionWeb">Click aquí</a></b> </li>
                                </ul>



                                <h3 style="text-align:center;">
                                Reportes ciudadanos
								</h3>

<p> <b>ArcGIS Survey123</b> es una sencilla e intuitiva solución de captura de datos basada en formularios inteligentes. Con esta herramienta configuramos un formulario que puedes diligenciar instalando la aplicación, accediendo mediante el navegador web para recopilar datos e información geoespacial desde un teléfono inteligente o cualquier otro dispositivo móvil equipado con GPS. También se puede utilizar sin datos móviles.</p>


<p>Este aplicativo recibe reportes de la ciudadanía sobre el uso inadecuado del espacio público, nutriendo en tiempo real el Sistema gerencial de participación ciudadana para el monitoreo de las dinámicas y la gestión del Aprovechamiento Económico del Espacio Público para consolidar información y reorientar las acciones de control en el territorio. </p>

<p>Los datos son fundamentales para tomar decisiones y garantizar la correcta ocupación de  los espacios públicos. </p>

<p>Haz tu reporte del uso indebido del espacio público. <b> <a target="_blank" href="https://arcg.is/1zqPSO1">Click aquí</a> </b> y ayúdanos a cuidar lo que es de todos. </p>



<br>
<body>
	<div align="center">
<a class="button" href="{{ route('user.projects.aeep') }}">Página anterior</a>
</div>
</body>

</div>
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
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/proyectos/AEEP_P" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/proyectos/AEEP_P" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
			                     </div>
	                	</div>
	                 </div>
	                      <div class="vlt-gap-100"></div>   
              </section>						</footer>
@endsection