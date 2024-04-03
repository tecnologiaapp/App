@extends('layouts.app')
@section('content')
@section('body_color', '#ffffff;')

<style>
	li{
		text-align:inherit;
		color:#424242 ;
		font-size:17px;
	}
	b{
		color:black;
	}

	.button {
    justify-content: center;
    background-color: #ea5b67;
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
    background-color: #a34085;
    color: #ffffff;
}
</style>

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerAprovEconomicoDelEspacio.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Aprovechamiento Económico del Espacio Público -AEEP-</h1>
			</div>
		</div>
	</section>
	<!--Content-->
	<section>
		<div class="vlt-gap-0"></div>
		<div class="container">
			<div align="center">
				<iframe frameborder="0" height="1100px" scrolling="no" src="https://agenciaapp.maps.arcgis.com/apps/dashboards/c4d6f9703d434fa88b6fd266ae8c3f70" style="padding-bottom: 100px;padding-top: 60px;" width="1200px"></iframe>
			</div>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="text-justify">
								<div class="vlt-gap-15"></div>
								<div class="section-title">
									<h2>Qué es el AEEP</h2>
								</div>
								<hr>
								<p>Uno de los objetivos de la Agencia APP es operar los instrumentos financieros definidos en el Acuerdo 048 de 2014 del Plan de Ordenamiento Territorial –POT–. Uno de ellos es el Aprovechamiento Económico del Espacio Público –AEEP–, el cual establece que cualquier ciudadano que aproveche económicamente el espacio público debe pagar una tarifa que se direcciona para el sostenimiento y cualificación del paisaje urbano (infraestructura física, aseo y ornato, seguridad, comercio, cultura e interacción social sobre el espacio público).</p>
								<p>El instrumento del AEEP tiene aplicabilidad en todo el subsistema de espacios públicos, con una extensión total de 10,2 km², y está conformado por parques, plazas, franjas de amoblamiento y elemento complementarios como el antejardín en áreas de alta y media mixtura (zonas y corredores con predominancia económica y centralidades urbanas).</p>
								<hr>
							    {{-- <iframe allowfullscreen frameborder="0" height="315" src="https://www.youtube.com/embed/qFS_Gvyi2y8" title="YouTube video player" width="560"></iframe>--}}
								<div class="section-title">
									<h2>Beneficios del AEEP</h2>
								</div>
								
								<ul>
									<li type="circle">Garantizar los protocolos de bioseguridad y el distanciamiento social en los negocios.</li>
									<li style="list-style: none"><br></li>
									<li type="circle">Ampliar la capacidad de atención de los establecimientos comerciales para atraer más clientes, en el marco de la reactivación económica de Medellín.</li>
									<li style="list-style: none"><br></li>
									<li type="circle">Promover equidad en la regulación del uso y usufructo del espacio público construido, mediante formas de aprovechamiento que no atentan contra su integridad, uso común y libre acceso.</li>
									<li style="list-style: none"><br></li>
									<li type="circle">Favorecer la transformación y revitalización de los espacios públicos y el paisaje de lugares urbanos desprovistos de una dinámica urbana.</li>
									<li style="list-style: none"><br></li>
									<li type="circle">Fomentar el desarrollo económico en espacios urbanos.</li>
									<li style="list-style: none"><br></li>
									<li type="circle">Viabilizar la ejecución de proyectos de mejoramiento de las condiciones urbanas de los distintos corredores estratégicos.</li>
									<li style="list-style: none"><br></li>
									<li type="circle">Recuperar espacios públicos indebidamente ocupados y deteriorados.</li>
									<li style="list-style: none"><br></li>
								</ul>
								<hr>
								<div class="section-title">
									<h2>Formas y subcategorías</h2>
								</div>								
								<p>Las formas de aprovechamiento económico del espacio público establecidas en el artículo 542 del Acuerdo 48 de 2014 se definen así:</p>
								<ul>
									<li><b>Aprovechamiento económico transitorio del espacio público.</b> Para estos casos el permiso de ocupación del espacio público se otorgará por un lapso no mayor a 30 días calendario.</li>
									<li style="list-style: none"><br></li>
									<li><b>Aprovechamiento económico temporal del espacio público.</b> Uso con fines lucrativos del espacio público por un lapso superior a 30 días calendario e inferior a un año, sin perjuicio de que el contrato suscrito pueda renovarse, previos análisis y ajustes a nuevos valores, entre otros aspectos que establezca la comisión intersectorial reglamentada por el presente decreto.</li>
									<li style="list-style: none"><br></li>
								</ul>
								<hr>
								<div class="section-title">
									<h2>Actividades permitidas</h2>
								</div>								
								<ul>
									<li><b>Mesas y sillas.</b> En esta categoría el comerciante puede hacer extensión de su negocio con mesas y sillas en su antejardín. En casos excepcionales podrá realizarlo en las franjas de amoblamiento de forma transitoria.</li>
									<li style="list-style: none"><br></li>
									<li><b>Eventos ocasionales con fines económicos.</b> Ocupación del espacio público de forma transitoria con bazares, mercados rotatorios campesinos, festivales, espectáculos, competencias, maratones, entre otros. A partir del 23 de junio de 2021 estos se deberán tramitar a través de la Ventanilla Única Eventos en la página de la Alcaldía de Medellín: <b><a href="https://www.medellin.gov.co/eventos">Click aqui</a></b></li>
									<li style="list-style: none"><br></li>
									<li><b>Parques de diversiones no permanentes.</b> Atracciones instaladas en un sitio o ubicación de carácter no permanente. Para ello cuentan con una infraestructura de carácter temporal, por lo que pueden ser transportadas de un lugar a otro con facilidad. Estos parques tienen dentro de su oferta de entretenimiento juegos, saltarines, inflable escalador, barco pirata, rueda de caballos, toro mecánico, rueda panorámica o lona de brincos, piscina de pelotas, entre otras atracciones familiares e infantiles.</li>
									<li style="list-style: none"><br></li>
									<li><b>Unidades Económicas Móviles – UEM.</b> Vehículos motorizados, acondicionados para ejecutar actividades comerciales de bienes y servicios, permitidos en el espacio público. Una de las tipologías de UEM son los food truck. Las UEM no se constituyen como locales comerciales ni como elementos de amoblamiento urbano.</li>
									<li style="list-style: none"><br></li>
									<li><b>Valet parking.</b> Actividad en la cual una persona natural o jurídica en un sitio sobre la calzada, debidamente autorizada por la Administración Municipal, presta el servicio de recepción y entrega de un vehículo para el traslado y estacionamiento final del mismo en un parqueadero satélite autorizado.</li>
									<li style="list-style: none"><br></li>
									<li><b>Centros Logísticos de Transporte – CLT.</b> Bienes fiscales con características ideales para estacionar en su interior los vehículos de transporte público que no estén en servicio (en recorrido de ruta) o en el periodo nocturno.</li>
									<li style="list-style: none"><br></li>
									<li><b>Micromovilidad compartida.</b> Aprovechamiento Económico del Espacio Público con este sistema. Se genera por el desarrollo de la actividad económica que requiere la toma y entrega del vehículo ligero (patineta eléctrica o bicicleta) en el espacio público destinado para este fin.</li>
									<li style="list-style: none"><br></li>
									<li><b>Amoblamiento urbano e infraestructura de servicios públicos.</b> (con fines económicos) como módulos de venta estacionarios, baños públicos, surtidores de agua dispensada, ciclo-parqueaderos, entre otros.</li>
									<li style="list-style: none"><br></li>
									<li><b>Avisos publicitarios.</b> Medios masivos de comunicación destinados a informar o llamar la atención del público a través de elementos visuales, visibles desde las vías de uso o dominio público, bien sean peatonales o vehiculares, con un área inferior a 8 m².</li>
									<li style="list-style: none"><br></li>
								</ul>
								<hr>
								<div class="section-title">
									<h2>Espacios públicos susceptibles de ser aprovechados económicamente</h2>
								</div>								
								<p>El aprovechamiento económico se podrá realizar en los componentes del Subsistema de Espacio Público de Esparcimiento y Encuentro, y en el Subsistema de Movilidad, en particular sobre los siguientes componentes.</p>
								<ul>
									<li>En las franjas de amoblamiento de los andenes con una sección mínima de 5 metros donde la franja de amoblamiento posea una sección mínima de 3 metros y la franja de circulación, una sección mínima de 2.</li>
									<li style="list-style: none"><br></li>
									<li>Antejardines en corredores de alta mixtura y frente a vías arterias.</li>
									<li style="list-style: none"><br></li>
									<li>Zonas duras de espacios públicos como parques, plazas y plazoletas.</li>
									<li style="list-style: none"><br></li>
									<li>Calzadas que cuenten con su respectivo permiso de cierre parcial y transitorio.</li>
									<li style="list-style: none"><br></li>
								</ul>
								<div align="center"><img alt="Espacios públicos susceptibles de ser aprovechados económicamente" src="{{asset('assets/img/Proyectos/imgAprovEconomicoDelEspacio.png')}}" title="Espacios públicos susceptibles de ser aprovechados económicamente"></div><br>
								<hr>
								<div class="section-title">
									<h2>Cómo se implementa el AEEP</h2>
								</div>								
								<p>Las personas interesadas en desarrollar actividades bajo las subcategorías mencionadas con algún fin económico deben tener en cuenta el siguiente marco jurídico bajo el cual se rige el instrumento del AEEP.</p>
								<ul>
									<li type="circle">Acuerdo 048 de 2014 - Plan de Ordenamiento Territorial –POT–.</li>
									<li style="list-style: none"><br></li>
									<li type="circle">Decreto 113 de 2017 - Manual de Espacio Público –MEP–.</li>
									<li style="list-style: none"><br></li>
									<li type="circle">Acuerdo Municipal 050 de 2015 - Por medio del cual se establece la política pública para la administración, mantenimiento y aprovechamiento económico del espacio público en el Municipio de Medellín.</li>
									<li style="list-style: none"><br></li>
									<li type="circle">Decreto 2148 de 2015 - Por medio del cual se reglamenta el aprovechamiento económico del espacio público, se fijan las retribuciones por su utilización, se crean la Comisión Intersectorial Asesora del Espacio Público y el Comité Técnico.</li>
									<li style="list-style: none"><br></li>
									<li type="circle">Decreto 0400 de 2017 - Por el cual se reglamenta el funcionamiento, proceso contractual, registro e instalación de los relojes públicos e informadores electrónicos y digitales en el Municipio de Medellín y se dictan otras disposiciones.</li>
									<li style="list-style: none"><br></li>
									<li type="circle">Decreto 0288 de 2018 - Por el cual se reglamentan los avisos publicitarios en el Municipio de Medellín y se dictan otras disposiciones.</li>
									<li style="list-style: none"><br></li>
									<li type="circle">Decreto 0522 de 2018 - Por medio del cual se modifica y adiciona el Decreto 2148 de 2015.</li>
									<li style="list-style: none"><br></li>
									<li type="circle">Decreto 0471 de 2018 - Por medio del cual se expiden las normas reglamentarias de detalle aplicables las actuaciones y procesos de urbanización, parcelación, construcción, reconocimiento de edificaciones y demás actuaciones en el territorio municipal y se dictan otras disposiciones.</li>
									<li style="list-style: none"><br></li>
									<li type="circle">Decreto 2229 de 2019 –MAEEP–. Por medio del cual se adopta el Manual del Aprovechamiento Económico del Espacio Público en la ciudad de Medellín, se modifican los decretos municipales 2148 de 2015 y 471 de 2018, se deroga el Decreto Municipal 327 de 1997 y se dictan otras disposiciones.</li>
									<li style="list-style: none"><br></li>
									<li type="circle">Contrato interadministrativo 4600065746 de 2016 mediante un contrato interadministrativo entre Secretaría de Seguridad y Convivencia Ciudadana, Secretaría de Suministros y Servicios y la Agencia APP, se le designaron a la Agencia las funciones correspondientes a la protección de la integridad del espacio público y su destinación al uso común.</li>
									<li style="list-style: none"><br></li>
								</ul>
								<hr>
								<div class="section-title">
									<h2>Paso a paso</h2>
								</div>									
								<h4 style="text-align:center;">Procedimiento para la solicitud de los permisos de ocupación y Aprovechamiento Económico del Espacio Público</h4>
								<h4 style="text-align:left;">Mesas y sillas</h4>
								<ul>
									<li><b>Radicación.</b> Recibimiento del proyecto de ocupación del espacio público para eventos ocasionales e ingreso a bases de datos consecutivos de la Agencia APP y del Sistema de Gestión Documental Mercurio de la Alcaldía de Medellín.</li>
									<li style="list-style: none"><br></li>
									<li>
										<b>Revisión del proyecto.</b> Verificación del formato bien diligenciado y de todos los anexos necesarios para el trámite de mesas y sillas.
										<ol>
											<li type="circle"><b>Sí.</b> Cuando la documentación está completa se continúa con el trámite.</li>
											<li type="circle"><b>No.</b> Se realiza requerimiento solicitando la información. Este se hace con los términos de la Ley 1755 de 2015.</li>
											<li type="square">¿Se obtuvo respuesta al requerimiento en el término de tiempo?
												<ol>
													<li type="circle"><b>No.</b> Se decreta el desistimiento de la solicitud de conformidad al artículo 17 de la Ley 1755 de 2015, se notifica y archiva.</li>
													<li type="circle"><b>Sí.</b> Continúa el trámite.</li>
												</ol>
											</li>
										</ol>
									</li>
									<li style="list-style: none"><br></li>
									<li>
										<b>Revisión del comité técnico.</b> Recibimiento de los proyectos para realizar el análisis técnico, financiero, jurídico y geoespacial acorde a la categoría. Es el comité quien define que el proyecto cumple con la condición establecida por el instrumento de Aprovechamiento Económico del Espacio Público (AEEP).
										<ol>
											<li type="circle"><b>Aprobado.</b> El proyecto cumple con los parámetros técnicos y geoespaciales para el uso del espacio como extensión con mesas y sillas.</li>
											<li type="circle"><b>Negado.</b> El proyecto no cumple con los parámetros técnicos y geoespaciales para el uso del espacio como extensión con mesas y sillas, acorde al instrumento para el AEEP.</li>
										</ol>
									</li>
									<li style="list-style: none"><br></li>
									<li>
										<b>Emisión de concepto.</b> Entrega de concepto técnico y explicación a fondo de la decisión del comité, bien sea aprobada o negada, con o sin retribución económica.
										<ol>
											<li type="circle">Si el proyecto es aprobado por el comité técnico se realiza la preliquidación y se envía por medio del correo electrónico para la aprobación del solicitante.</li>
											<li type="circle">Si el proyecto es negado por el comité técnico pasamos al punto siguiente. (Paso 5)</li>
											<li type="circle"><b>Aceptación de la preliquidación.</b> Si el solicitante está de acuerdo con el valor arrojado por la ocupación del espacio se continúa con el trámite.</li>
											<li type="circle"><b>No aceptación de la preliquidación.</b> Si el solicitante no está de acuerdo con el valor arrojado por la ocupación del espacio pasamos al punto siguiente (paso 5).</li>
										</ol>
									</li>
									<li style="list-style: none"><br></li>
									<li>Traslado a la Subdirección de Espacio Público para emitir acto administrativo por medio del cual se otorga, niega o se declara desistida la solicitud y su posterior notificación.</li>
									<li style="list-style: none"><br></li>
									<li><b>Factura.</b> Expedición de la factura mediante la plataforma SAP y envío al correo electrónico al solicitante para su pago. Este deberá reenviar la constancia de pago al correo <b>solictudes@app.gov.co.</b></li>
									<li style="list-style: none"><br></li>
								</ul>
								<h5>Descarga aquí</h5><b><a href="{{asset('assets/pdf/aeep/FOGPP09003FORMATOPROYECTODEOCUPACIONAEEPMESASYSILLAS.docx.pdf')}}" target="_blank">PROYECTO DE OCUPACIÓN AEEP</a></b>
								<div class="section-title">
									<h2>Eventos ocasionales con fines económicos</h2>
								</div>
								
								<ul>
									<li><b>Comité de eventos.</b> Es liderado por la Subsecretaría de Gobierno Local y Convivencia, la cual está integrada por todas las entidades competentes para la autorización y control de los eventos y espectáculos públicos. Los interesados pueden solicitar este espacio para aclarar dudas y exponer el evento. Número de contacto: 385 55 55, extensión 8406.</li>
									<li style="list-style: none"><br></li>
									<li><b>Radicación.</b> Recibimiento del proyecto de ocupación del espacio público para eventos ocasionales. Ingresa a la página web de la Alcaldía de Medellín: <b><a href="https://www.medellin.gov.co/eventos">Click Aqui</a></b></li>
									<li style="list-style: none"><br></li>
									<li>
										<b>Revisión.</b> Análisis completo del proyecto y del diligenciamiento del formato. También se revisan todos los anexos necesarios para el trámite de mesas y sillas.
										<ol>
											<li type="circle"><b>Sí.</b> Cuando la documentación está completa se continúa con el trámite.</li>
											<li type="circle"><b>No.</b> Requerimiento solicitando la información. Este se hace con los términos de la Ley 1755 de 2015.</li>
											<li type="square">¿Se obtuvo respuesta al requerimiento en el término de tiempo?
												<ol>
													<li type="circle"><b>No.</b> Se decreta el desistimiento de la solicitud de conformidad al artículo 17 de la Ley 1755 de 2015, se notifica y archiva.</li>
													<li type="circle"><b>Sí.</b> Continúa el trámite.</li>
												</ol>
											</li>
										</ol>
									</li>
								</ul><br>
								<ul>
									<li>
										<b>Revisión del comité técnico.</b> Recibimiento de los proyectos para realizar el análisis técnico, financiero, jurídico y geoespacial acorde a su categoría. Es el comité quien define si el proyecto cumple con la condición establecida por el instrumento de Aprovechamiento Económico del Espacio Público (AEEP).
										<ol>
											<li type="circle"><b>Aprobado.</b> El proyecto cumple con los parámetros técnicos y geoespaciales para el uso del espacio público.</li>
											<li type="circle"><b>Negado.</b> El proyecto no cumple con los parámetros técnicos y geoespaciales para el uso del espacio público.</li>
										</ol>
									</li>
									<li style="list-style: none"><br></li>
									<li>
										<b>Emisión de concepto.</b> Descripción a fondo de la decisión tomada por el comité, bien sea aprobada o negada la solicitud, con o sin retribución económica.
										<ol>
											<li type="circle">Si el proyecto es aprobado por el comité técnico se realiza la preliquidación. Posteriormente, se envía la aprobación por correo electrónico.</li>
											<li type="circle">Si el proyecto es negado por el comité técnico pasamos al punto siguiente (Paso 5).</li>
											<li type="circle"><b>Aceptación de la preliquidación.</b> Si el solicitante está de acuerdo con el valor arrojado por la ocupación del espacio se continúa con el trámite.</li>
											<li type="circle"><b>No aceptación de la preliquidación.</b> Si el solicitante no está de acuerdo con el valor arrojado por la ocupación del espacio pasamos al punto siguiente (Paso 6).</li>
										</ol>
									</li>
									<li style="list-style: none"><br></li>
									<li><b>Factura.</b> Expedición de la factura mediante la plataforma SAP y envío al correo electrónico al solicitante para su pago. Este deberá reenviar la constancia de pago al correo: <b>solictudes@app.gov.co</b></li>
									<li style="list-style: none"><br></li>
									<li><b>Traslado.</b> A la Subsecretaría de Espacio Público para emitir el acto administrativo por medio del cual se otorga, niega o se declara desistida la solicitud.</li>
									<li style="list-style: none">
										<br>
										<div align="center">
											<a class="button" href="{{route('user.projects.aeep2')}}">Siguiente página</a>
										</div>
									</li>
								</ul>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/proyectos/AEEP" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/proyectos/AEEP" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>
@endsection