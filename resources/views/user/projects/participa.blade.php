@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')

<style>
.button {
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
	border-radius: 5px;
}

.button:hover {
    background-color: #b3348a;
    border: none;
    color: white;
}

ul li {
	text-align: left;
}

h5 {
	text-align: left;
}


</style>

<head>
<link  href="{{ asset('assets/css/noticia.css') }}" rel="stylesheet">
</head>

	<section> 
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerParticipa.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
			<h1 style="color:white;">Participa</h1>
			</div>
		</div>
	</section>

	<section style="margin-top: 50px">
		<div class="container">
			<h1 class="subt-m">Estrategia de Participación Ciudadana:</h1>
			<p>Participa es la sección donde encontrará toda la información relacionada con los espacios, mecanismos y acciones que permiten la participación ciudadana en el ciclo de la gestión pública: diagnóstico, formulación, implementación, evaluación y seguimiento, a través del portal web de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público-Privadas, con el propósito de vincular a la ciudadanía y demás grupos de interés en las decisiones y acciones públicas, para fortalecer la incidencia, la promoción y garantía de la participación como derecho.</p>
			<hr style="margin: 50px 0">
			<h1 class="subt-m">Mecanismos, espacios o instancias de participación ciudadana:</h1>
			<br>
			<ul>
				<li>
					<h5 style="text-align: left">Mecanismos de participación:</h5>
					<p>Los colombianos cuentan con varios mecanismos de participación ciudadana, los cuales dan la opción de ejercer el derecho a participar del poder político. Entre los mecanismos de participación se encuentran el plebiscito, el referendo, la consulta popular, el cabildo abierto, la iniciativa legislativa y la revocatoria del mandato.</p>
					<div style="display: flex; justify-content: star">
					<a class="button" href="https://registraduria.gov.co/-Mecanismos-de-participacion-664-.html#pagination1" target="_blank">Conoce los mecanismos de participación</a>
					</div>
				</li>
				<br>
				<li>
					<h5 style="text-align: left">Instancias de participación:</h5>
					<p>Son espacios de interlocución permanente, con diferentes niveles de incidencia, entre la ciudadanía y la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público-Privadas, respecto a temas específicos al objeto misional de la entidad.</p>
					<p>Las instancias de participación como escenario ciudadano o mixto consolidan la gestión pública participativa, mediante procesos deliberativos en los que la ciudadanía incide en los programas y proyectos, con el fin de aumentar la efectividad, transparencia, corresponsabilidad, gobernabilidad, cooperación y la garantía de los derechos.</p>
					<div style="display: flex; justify-content: star">
					<a class="button" href="#">Enlace</a>
					</div>
				</li>
			</ul>

			<hr style="margin: 50px 0">
			
			<h1 class="subt-m">Información general para la participación ciudadana:</h1>
			<ul>
				<li>Calendario de actividades año en curso</li>
				<li>Estrategia de Participación Ciudadana</li>
				<li>Estrategia Anual de Rendición de Cuentas</li>
				<li>Plan Anticorrupción y de Atención al Ciudadano (PAAC)</li>
				<li>Informes de rendición de cuentas generales</li>
				<li>Convocatorias para la participación de la ciudadanía y grupos de valor en los espacios, instancias o acciones que ofrece la entidad.</li>
				<li>Calendario de la estrategia anual de participación ciudadana</li>
				<li><a href="https://siciudadania.co/index.php/login/" target="_blank">Formulario de inscripción ciudadana a procesos de participación, instancias o acciones que ofrece la entidad - Distrito de Medellín >></a></li>
				<li>Formulario participación eventos - Agencia APP >></li>
				<li><a href="https://siciudadania.co/index.php/participa/" target="_blank">Canal de interacción deliberatoria para la participación ciudadana - Distrito de Medellín >></a></li>
			</ul>

			<hr style="margin: 50px 0">
				
			<h1 class="subt-m">1.Diagnóstico e identificación de problemas:</h1>
			<p>La participación para el diagnóstico e identificación de problemas es la vinculación de ciudadanos e interesados en el proceso de recolección y análisis de información para identificar y explicar los problemas que les afecta directa o indirectamente.</p>
			<h5>1.1. Publicación temas de interés:</h5>
			<ul>
				<li><a href="https://www.medellin.gov.co/es/plan-de-desarrollo/  ">Temas de interés - Distrito de Medellín >></a></li>
				<li><a href="https://www.medellin.gov.co/es/departamento-administrativo-de-planeacion/formulacion-plan-de-desarrollo-distrital-2024-2027/">Encuentros Territoriales para la formulación del Plan de Desarrollo Distrital >></a></li>
			</ul>

			<h5>1.2. Caja de Herramientas:</h5>
			<ul>
				<li><a href="#">Orientaciones para promover la participación ciudadana en los procesos de diagnóstico y planeación de la Gestión Pública >></a></li>
				<li><a href="https://agenciaapp.maps.arcgis.com/apps/dashboards/c4d6f9703d434fa88b6fd266ae8c3f70" target="_blank">Monitoreo de las dinámicas y la gestión del Aprovechamiento Económico del Espacio Público en Medellín (AEEP)</a></li>
			</ul>

			<h5>1.3. Herramientas de evaluación:</h5>

			<h5>1.4. Divulgar resultados</h5>
			<ul>
				<li><a href="https://www.medellin.gov.co/es/plan-de-desarrollo/" target="_blank">Plan de Desarrollo 2024-2027 >></a></li>
				<li><a href="#">Rendición de Cuentas 2024 – Agencia APP >></a></li>
			</ul>

			<hr style="margin: 50px 0">

			<h1 class="subt-m">2. Planeación y presupuesto participativo:</h1>
			<p>De acuerdo con el Decreto 883 de 2015, específicamente el artículo 143 numerales 1, 2 y el 7, la Secretaria de Participación Ciudadana, Subsecretaria de Planeación Local y Presupuesto Participativo tienen la función de articular los procesos participativos en el Distrito de Medellín.</p>
			<h5><a href="https://www.medellin.gov.co/es/secretaria-participacion-ciudadana/planeacion-local-y-presupuesto-participativo/conoce/" target="_blank">2.1. Porcentaje del presupuesto para el proceso >></a></h5>
			<h5><a href="https://www.medellin.gov.co/es/secretaria-participacion-ciudadana/planeacion-local-y-presupuesto-participativo/" target="_blank">2.2. Habilitar canales de interacción y caja de herramientas >></a></h5>
			<h5>2.3. Publicar la información sobre las decisiones</h5>
			<ul>
				<li><a href="https://www.medellin.gov.co/es/secretaria-participacion-ciudadana/planeacion-local-y-presupuesto-participativo/prioriza/" target="_blank">Publicar la información sobre las decisiones >></a></li>
				<li><a href="https://www.medellin.gov.co/ndesarrollo/" target="_blank">Planeación del desarrollo >></a></li>
			</ul>
			<h5><a href="https://www.medellin.gov.co/es/secretaria-participacion-ciudadana/planeacion-local-y-presupuesto-participativo/haz-seguimiento/" target="_blank">2.4. Visibilizar avances de decisiones y su estado (semáforo) >></a></h5>
			
			<hr style="margin: 50px 0">

			<h1 class="subt-m">3. Consulta ciudadana:</h1>
			<p>Son aquellos mecanismos que buscan conocer las opiniones, sugerencias, propuestas, comentarios y aportes de los usuarios, ciudadanos y grupos de interés con respecto a los proyectos, normas, políticas, programas o trámites adelantados por la Agencia APP.</p>
			<h5>3.1. Tema de consulta (normas, políticas, programas o proyectos) Servicio a la ciudadanía Agencia APP:</h5>
			<ul>
				<li>Tramites y servicios:
					<ul>
						<li><a href="https://app.gov.co/transparencia/contacto" target="_blank">Autorización de bienes de interés cultural en el Barrio Prado >></a></li>
						<li><a href="http://181.143.121.243:8001/search-contract" target="_blank">Certificados laborales >></a></li>
						<li><a href="https://app.gov.co/transparencia/contacto" target="_blank">Concepto de norma urbanística para el Barrio Prado >></a></li>
						<li><a href="https://www.gov.co/ficha-tramites-y-servicios/T87169" target="_blank">Estructuración de proyectos de asociación publico privada por agentes privados en etapa de prefactibilidad >></a></li>
						<li><a href="{{asset('assets/pdf/VERSIÓN-PREVIA-MANUAL-DE-CONTRATACIÓN-APP.pdf')}}" target="_blank">Manual de Contratacíon - Versión Preliminar >></a></li>
					</ul>
					<br>
					<p><p>"La Agencia APP publica para conocer opinión y recibir comentarios de cualquier interesado la versión previa del nuevo Manual de Contratación de la entidad y de esta manera fortalecer la transparencia en la gestión contractual que adelantamos.  La ciudadanía podrá enviar sus comentarios  o recomendaciones al correo info@app.gov.co  hasta el próximo 29 febrero  de 2025.".</p></p>
				</li>
				<br>
				<li><a href="https://app.gov.co/somos-app/historia" target="_blank">Información general de la Agencia APP >></a></li>
				<br>
				<li>Programas y proyectos de la Agencia APP (las subdirecciones van dentro de este apartado):
					<ul>
						<li><a href="https://app.gov.co/proyectos/gestion_alianzas_publico_privadas" target="_blank">Subdirección de Gestión de Alianzas Público-Privadas >></a></li>
						<li><a href="https://app.gov.co/proyectos/paisaje_patrimonio" target="_blank">Subdirección de Gestión de Paisaje y Patrimonio >></a></li>
						<li><a href="https://app.gov.co/proyectos/gestion_inmobiliaria" target="_blank">Subdirección de Gestión Inmobiliaria >></a></li>
					</ul>
				</li>
			</ul>
			<h5>3.2. Canales de consulta y caja de herramientas:</h5>
			<ul>
				<li><a href="">Convocatorias >></a></li>
				<li><a href="https://app.gov.co/proyectos" target="_blank">Mapa de proyectos >></a></li>
				<li><a href="https://www.sucop.gov.co/" target="_blank">Conocimiento y discusión de proyectos normativos del orden de nacional – (SUCOP – Sistema Único de Consulta Pública) >></a></li>
			</ul>
			<h5>3.3. Publicar observaciones y comentarios y las respuestas de proyectos normativos:</h5>
			<p>Pedir la justificación legal para este punto.</p>
			<h5>3.4. Sección Normativa:</h5>
			<ul>
				<li><a href="https://app.gov.co/assets/pdf/normograma.pdf" target="_blank">Normativa Agencia APP >></a></li>
				<li><a href="https://www.medellin.gov.co/normograma/docs/index.html" target="_blank">Astrea – Biblioteca Jurídica Virtual del Municipio de Medellín >></a></li>
			</ul>
			<h5>3.5. Herramienta de evaluación:</h5>
			<ul>
				<li><a href="">Formulario Nivel de Satisfacción del Ciudadano >></a></li>
			</ul>
			<h5>3.6. Plan Anticorrupción y de Atención al Ciudadano (PAAC):</h5>
			<ul>
				<li><a href="{{asset('assets/pdf/PAAC-2025.xlsx')}}">Plan Anticorrupción y de Atención al Ciudadano (PAAC)</a></li>
			</ul>

			<hr style="margin: 50px 0">
			
			<h1 class="subt-m">4. Colaboración e innovación abierta:</h1>
			<p>Es la búsqueda de soluciones a problemáticas públicas con el conocimiento y participación de los grupos de valor, para resolver los desafíos de la entidad y abrir canales para recibir ideas y propuestas de alternativas de solución.</p>
			<h5>4.1. Espacio para consulta sobre temas o problemática:</h5>
			<ul>
				<li><a href="https://agenciaapp.maps.arcgis.com/apps/dashboards/c4d6f9703d434fa88b6fd266ae8c3f70" target="_blank">Monitoreo de las dinámicas y la gestión del Aprovechamiento Económico del Espacio Público en Medellín (AEEP) >></a></li>
			</ul>
			<h5>4.2. Convocatoria a los retos:</h5>
			<p>No hay convocatorias vigentes.</p>
			<h5><a href="#">4.3. Informar sobre retos vigentes y reporte con la frecuencia de votaciones de soluciones en cada reto >></a></h5>
			<h5><a href="#">4.4. Publicación de propuestas elegidas y los criterios para su selección >></a></h5>
			<h5><a href="#">4.5. Divulgar el plan de trabajo para implementar la solución diseñada >></a></h5>
			<h5><a href="#">4.6. Publicar la información sobre los desarrollos o prototipos >></a></h5>

			<hr style="margin: 50px 0">

			<h1 class="subt-m">5. Rendición de cuentas:</h1>
			<h5>5.1. Divulgar el plan de trabajo para implementar la solución diseñada:</h5>
			<ul>
				<li><a href="#">Habilitar un espacio para que la ciudadanía postule temáticas >></a></li>
				<li><a href="#">formulario de rendición de cuentas 2024 >></a></li>
				<li><a href="#">Estrategia anual de rendición de cuentas >></a></li>
			</ul>
			<h5>5.2. Estrategia de comunicación para la rendición de cuentas:</h5>
			<ul>
				<li><a href="#">Histórico de Rendición de Cuentas desde el 2017 hasta el 2024 >></a></li>
				<li><a href="#">Estrategia de comunicación para la rendición de cuentas >></a></li>
				<li><a href="https://app.powerbi.com/view?r=eyJrIjoiMDFiMWRkOTctMWZlYS00NjhhLWJmYzEtYjY1YmIzMWIzNmRjIiwidCI6ImZlNWQ1MzNlLWZiZmUtNDMxNy05ZDJlLWVlMjVhYzU0NmFiMyIsImMiOjR9" target="_blank">Calendario de eventos Agencia APP >></a></li>
				<li><a href="#">Audiencia Pública de Rendición de Cuentas 2024 >></a></li>
				<li><a href="https://www.medellin.gov.co/es/eventos/" target="_bank">Eventos Distrito de Medellín >></a></li>
			</ul>

			<hr style="margin: 50px 0">

			<h1 class="subt-m">6. Control social:</h1>
			<p>El control social es el derecho y el deber de los ciudadanos a participar, de manera individual o a través de sus organizaciones, redes sociales e instituciones, en la vigilancia de la gestión pública y sus resultados de acuerdo con lo establecido en la regulación aplicable y correcta utilización de los recursos y bienes públicos. El concepto ampliado lo brindan los artículos 60, 61 y 63 de la Ley 1757 de 2015, Ley Estatutaria de Participación Ciudadana.</p>
			<h5>6.1. Informar las modalidades de control social:</h5>
			<ul>
				<li><a href="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/medellin/Temas/ParticipacionCiudadana/Programas_0/Shared%20Content/Documentos/2019/GuiaControlSocialGestionPublicaMedellin.pdf" target="_blank">Guía para el Control Social a la Gestión Pública en Medellín >></a></li>
				<li>
				Información procesos contractuales:
					<ul>
						<li><a href="https://www.colombiacompra.gov.co/secop/secop-i" target="_blank">SECOP I >></a></li>
						<li><a href="https://www.colombiacompra.gov.co/secop-ii" target="_blank">SECOP II >></a></li>
					</ul>
				</li>
				<li><a href="http://mercurioapp.medellin.gov.co/mercurio/inicialPqr.jsp" target="_blank">Si tienes alguna Petición, Queja, Reclamo, Sugerencia o Denuncia (ADJUNTAR EL ENLACE EN ESAS PALABRAS) por actos de corrupción te invitamos a leer las recomendaciones para que ejerzas tu derecho de interponer solicitudes ante la Entidad >></a></li>
			</ul>

			
		</div>
	</section>

<div class="vlt-single-post-wrapper vlt-single-post-wrapper--style-1">
		<div class="container">
			<article class="vlt-single-post">
				<div class="content">
					<article class="post">
						<div class="post-header">
							<div class="post-img"><img alt="" src="https://www.mintic.gov.co/portal/715/articles-162358_img_recuadro.thumb_recuadro.jpg"></div>
						</div>
						<div class="post-body">
							<h5>Participación para la identificación de problemas y diagnóstico de necesidades</h5><a href="{{route('user.projects.aeep')}}" target="_blank"><h6><b>Participa</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img"><img alt="" src="https://www.mintic.gov.co/portal/715/articles-162359_img_recuadro.thumb_recuadro.jpg"></div>
						</div>
						<div class="post-body">
							<h5>Planeación y/o presupuesto participativo</h5><a  href="{{route('user.transparency.planning.action_plan')}}" target="_blank"><h6><b>Participa</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img"><img alt="" src="https://www.mintic.gov.co/portal/715/articles-162360_img_recuadro.thumb_recuadro.jpg"></div>
						</div>
						<div class="post-body">
							<h5>Participación y consulta ciudadana de proyectos, normas, políticas o programas</h5><a  href="{{route('user.projects.index')}}" target="_blank"><h6><b>Participa</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img"><img alt="" src="https://www.mintic.gov.co/portal/715/articles-162361_img_recuadro.thumb_recuadro.jpg"></div>
						</div>
						<div class="post-body">
							<h5>Colaboración e innovación abierta</h5><a  href="https://agenciaapp.maps.arcgis.com/apps/dashboards/c4d6f9703d434fa88b6fd266ae8c3f70" target="_blank"><h6><b>Participa</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img"><img alt="" src="https://www.mintic.gov.co/portal/715/articles-162362_img_recuadro.thumb_recuadro.jpg"></div>
						</div>
						<div class="post-body">
							<h5>Rendición de cuentas</h5><a  href="https://app.gov.co/rendici%C3%B3n/de/cuentas/evaluacion" target="_blank"><h6><b>Participa</b></h6></a>
						</div>
					</article>
					<article class="post">
						<div class="post-header">
							<div class="post-img"><img alt="" src="https://www.mintic.gov.co/portal/715/articles-162363_img_recuadro.thumb_recuadro.jpg"></div>
						</div>
						<div class="post-body">
							<h5>Control ciudadano</h5><a  href="{{route('user.rendition.cuentas')}}" target="_blank"><h6><b>Participa</b></h6></a>
						</div>
					</article>
				</div>
			</article>
		</div>
	</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
@endsection