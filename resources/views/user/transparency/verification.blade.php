@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')

<style>

.accordion {
	font-family: "Jost", sans-serif !important;
}


</style>

<head>
<link rel="stylesheet" href="{{ asset('assets/css/transparency.css')}}">
</head>

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/transparen.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Transparencia</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="container mt-5 text-justify">
			<div class="section-title">
				<h2>Transparencia y acceso a la información pública</h2>
			</div>
			<p class="normal-text">Dando cumplimiento a la Ley 1712 del 6 de marzo de 2014, de Transparencia y acceso a la información pública, la resolución 3564 del 31 de diciembre de 2015, por la cual se reglamentan aspectos relacionados con la Ley de Transparencia y Acceso a la Información Pública, a continuación se listan los criterios mínimos a publicar, con sus respectivos enlaces (Para mejorar la búsqueda en este listado, pude oprimir en su teclado el juego de teclas Control + F y buscar por palabra clave).</p>
			<p class="normal-text">Directiva No. 026: Diligenciamiento de la información en el índice de transparencia y acceso a la información – ITA - de conformidad con las disposiciones del artículo 23 de la ley 1712 de 2014.</p>
		</div>
	</section>
	<div class="container mt-5">

	<!-- Collapsed 1 -->
	<button class="accordion active">1.  Información de la Entidad</button>
		<div class="panel" style="display: block">
			<H1 class="subt-m">1.1. Misión, visión, funciones y deberes</H1>
			<ul>
				<li><a href="{{route('user.about.mision')}}" target="_blank">Misión, visión, principios y valores >></a></li>
				<li><a href="{{route('user.about.functions')}}" target="_blank">Funciones >></a></li>
				<li><a href="{{asset('assets/pdf/PresentacionAgenciaAPP.pdf')}}" target="_blank">Presentación Agencia APP >></a></li>
			</ul>
			<br>
			<H1 class="subt-m">1.2. Estructura orgánica</H1>
			<ul>
				<li><a href="{{asset('assets/img/organigrama_app.png')}}" target="_blank">Organigrama >></a></li>
			</ul>
			<br>
			<H1 class="subt-m">1.3. Mapas y cartas descriptivas de procesos</H1>
			<ul>
				<li><a href="https://app.gov.co/assets/pdf/manual-de-procesos-y-procedimientos.pdf" target="_blank">Manual de Procesos y Procedimientos >></a></li>
			</ul>
			<H1 class="subt-m">1.4. Directorio institucional</H1>
			<ul>
				<li><a href="{{route('user.transparency.contact-us')}}" target="_blank">Ubicación sede principal, sedes alternas, horarios y días de atención al público, datos de contacto >></a></li>
			</ul>
			<br>
			<H1 class="subt-m">1.5. Directorio de servidores públicos y contratistas</H1>
			<ul>
				<li><a href="https://www1.funcionpublica.gov.co/web/sigep2/directorio" target="_blank">Directorio de información de servidores públicos y empleados:<br>
				Al ingresar al Sistema de la Función Pública, digite en el buscador Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Publico Privadas o el nombre de cada funcionario >>	
				</a></li>
				<li><a href="https://app.gov.co/assets/pdf/Directorio-Agencia-2024.pdf" target="_blank">Informe de contratos de prestación de servicios de personas naturales >></a></li>
				<li><a href="#" target="_blank">Correos y números de contacto de la entidad >></a></li>
				<li><a href="{{ asset('assets/pdf/Resolución-034-reajuste-incremento-salarial')}}" target="_blank">Escala salarial servidores públicos >></a></li>
				<li><a href="{{ asset('assets/pdf/Resolucion-002-tabla-de-honorarios')}}" target="_blank">Tabla de honorarios contratistas >></a></li>
			</ul>
			<br>
			<H1 class="subt-m">1.6. Directorio de entidades</H1>
			<ul>
				<li><a href="https://www.medellin.gov.co/es/gabinete/" target="_blank">Directorio de entidades >></a></li>
			</ul>
			<br>
			<H1 class="subt-m">1.7. Directorio de agremiaciones o asociaciones</H1>
			<ul>
				<li><a href="{{route('user.info.union_directory')}}" target="_blank">Directorio de agremiaciones, asociaciones y otros grupos de interés >></a></li>
			</ul>
			<br>
			<H1 class="subt-m">1.8. Servicio al público, normas, formularios y protocolos de atención</H1>
			<ul>
				<li><h5>1.8.1. Servicio al público</h5>
					<ul>
						<li><a href="{{asset('assets/pdf/Carta-de-trato-digno.pdf')}}" target="_blank">Carta de trato digno a la ciudadanía >></a></li>
						<li><a href="{{asset('assets/pdf/Manual-de-servicio-al-ciudadano.pdf')}}" target="_blank">Manual de servicios a la ciudadanía >></a></li>
					</ul>
				</li>
				<br>
				<li><h5>1.8.2. Normas</h5>
					<ul>
						<li><a href="https://www.medellin.gov.co/normograma/docs/astrea/herramientas_busqueda.html" target="_blank">ASTREA, Biblioteca Jurídica Virtual. Compendio normativo del Distrito de Medellín – Búsqueda de normatividad de la entidad o autoridad >></a></li>
						<li><a href="https://app.gov.co/assets/pdf/convocatorias/APP-2021.pdf" target="_blank">Glosario >></a></li>
						<li><a href="https://app.gov.co/assets/pdf/normograma.pdf" target="_blank">Normograma >></a></li>
					</ul>
				</li>
				<br>
				<li><h5>1.8.3. Formularios</h5>
					<ul>
						<li><a href="#" target="_blank">Proyecto de ocupación Aprovechamiento Económico del Espacio Público – (Categoría Mesas y Sillas) >></a></li>
						<li><a href="#" target="_blank">Aprobación intervenciones en inmuebles del Barrio Prado >></a></li>
						<li><a href="{{asset('assets/pdf/Checklist-APP-iniciativa-privada.pdf')}}" target="_blank">Requisitos APP de iniciativa privada en etapa de prefactibilidad >></a></li>
					</ul>
				</li>
			</ul>
			<br>
			<H1 class="subt-m">1.9. Procedimientos que se siguen para tomar decisiones</H1>
			<ul>
				<li><a href="https://app.gov.co/assets/pdf/manual-de-procesos-y-procedimientos.pdf " target="_blank">Manual de Procesos y Procedimientos >></a></li>
			</ul>
			<br>
			<H1 class="subt-m">1.10. Mecanismo de presentación de solicitudes, quejas y reclamos (PQRSD) >></H1>
			<ul>
				<li><a href="http://mercurioapp.medellin.gov.co/mercurio/inicialPqr.jsp" target="_blank">Portal de radicación de PQRSD >></a></li>
			</ul>
			<br>
			<H1 class="subt-m">1.11. Calendario de actividades y eventos</H1>
			<ul>
				<li><a href="https://app.powerbi.com/view?r=eyJrIjoiMDFiMWRkOTctMWZlYS00NjhhLWJmYzEtYjY1YmIzMWIzNmRjIiwidCI6ImZlNWQ1MzNlLWZiZmUtNDMxNy05ZDJlLWVlMjVhYzU0NmFiMyIsImMiOjR9" target="_blank">Calendario de actividades >></a></li>
			</ul>
			<br>
			<H1 class="subt-m">1.12. Información sobre decisiones que pueden afectar al público</H1>
			<ul>
				<li><h5>Planes de Ordenamiento Territorial – POT</h5>
					<ul>
						<li><a href="https://www.medellin.gov.co/normograma/docs/astrea/docs/a_conmed_0048_2014.htm" target="_blank">Acuerdo 48 de 2014 >></a></li>
						<li><a href="https://www.medellin.gov.co/normograma/docs/astrea/docs/a_conmed_0046_2006.htm" target="_blank">Acuerdo 46 de 2006 >></a></li>
						<li><a href="https://www.medellin.gov.co/normograma/docs/astrea/docs/A_CONMED_0062_1999.htm" target="_blank">Acuerdo 062 de 1999 >></a></li>
					</ul>
				</li>
				<br>
				<li><h5>Planes de Desarrollo Distrital</h5>
					<ul>
						<li><a href="https://www.medellin.gov.co/es/plan-de-desarrollo/" target="_blank"></a>Medellín Te Quiere 2024 – 2027 >></li>
					</ul>
				</li>
			</ul>
			<br>
			<H1 class="subt-m">1.13. Entes de control que vigilan al Distrito de Medellín</H1>
			<ul>
				<li><a href="https://www.medellin.gov.co/es/transparencia/entes-de-control-que-vigilan-al-distrito-de-medellin/" target="_blank">Entes de Control</a></li>
			</ul>
			<br>
			<H1 class="subt-m">1.14. Publicación de hojas de vida</H1>
			<ul>
				<li>Publicación de hojas de vida: No Aplica. | Esta publicación, según el Decreto Nacional 1083 de 2015 es para las entidades del Nivel Nacional. No existe regulación en igual sentido para las del nivel Territorial.</li>
			</ul>
			

<!-- 
			<table class="table table-bordered table-striped custom-table">
				<thead>
					<tr>
						<th>1.1. Misión, visión, funciones y deberes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Misión, visión, principios y valores</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.about.mision')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td width="65%">Funciones</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.about.functions')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.2. Estructura orgánica</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Organigrama</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/img/organjgrama_app.png')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.3. Mapas y cartas descriptivas de procesos</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Manual de Procesos y Procedimientos</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://app.gov.co/assets/pdf/manual-de-procesos-y-procedimientos.pdf" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.4. Directorio institucional</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Ubicación sede principal, sedes alternas, horarios y días de atención al público, datos de contacto</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.contact-us')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.5. Directorio de servidores públicos y contratistas</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Directorio de información de servidores públicos y empleados:<br>Al ingresar al Sistema de la Función Pública, digite en el buscador Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Publico Privadas o el nombre de cada funcionario.</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www1.funcionpublica.gov.co/web/sigep2/directorio" target="_blank">Ver directorio</a>
						</td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td width="65%">Informe de contratos de prestación de servicios de personas naturales.</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://app.gov.co/assets/pdf/Directorio-Agencia-2024.pdf" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td width="65%">Correos y números de contacto de la entidad.</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="#" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td width="65%">Escala salarial servidores públicos.</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{ asset('assets/pdf/Resolución-034-reajuste-incremento-salarial')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td width="65%">Tabla de honorarios contratistas.</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{ asset('assets/pdf/Resolucion-002-tabla-de-honorarios')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.6. Directorio de entidades</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Directorio de entidades</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.medellin.gov.co/es/gabinete/" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.7. Directorio de agremiaciones o asociaciones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Directorio de agremiaciones, asociaciones y otros grupos de interés</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.info.union_directory')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.8. Servicio al público, normas, formularios y protocolos de atención</th>
					</tr>
					<tr>
						<th>1.8.1. Servicio al público</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Carta de trato digno a la ciudadanía</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Carta-de-trato-digno.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td width="65%">Manual de servicios a la ciudadanía</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Carta-de-trato-digno.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.8.2. Normas</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">ASTREA, Biblioteca Jurídica Virtual. Compendio normativo del Distrito de Medellín – Búsqueda de normatividad de la entidad o autoridad</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.medellin.gov.co/normograma/docs/astrea/herramientas_busqueda.html" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>

				<tbody>
					<tr>
						<td width="65%">Glosario</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://app.gov.co/assets/pdf/convocatorias/APP-2021.pdf" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td width="65%">Normograma</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://app.gov.co/assets/pdf/normograma.pdf" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.8.3. Formularios</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Proyecto de ocupación Aprovechamiento Económico del Espacio Público – (Categoría Mesas y Sillas).</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="#" target="_blank">Ver formulario</a>
						</td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td width="65%">Aprobación intervenciones en inmuebles del Barrio Prado.</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="#" target="_blank">Ver formulario</a>
						</td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td width="65%">Requisitos APP de iniciativa privada en etapa de prefactibilidad.</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Checklist-APP-iniciativa-privada.pdf')}}" target="_blank">Ver formulario</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.9. Procedimientos que se siguen para tomar decisiones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Manual de Procesos y Procedimientos</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://app.gov.co/assets/pdf/manual-de-procesos-y-procedimientos.pdf " target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.10. Mecanismo de presentación de solicitudes, quejas y reclamos (PQRSD)</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Portal de radicación de PQRSD</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="http://mercurioapp.medellin.gov.co/mercurio/inicialPqr.jsp" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.11. Calendario de actividades y eventos</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Calendario de actividades</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://app.powerbi.com/view?r=eyJrIjoiMDFiMWRkOTctMWZlYS00NjhhLWJmYzEtYjY1YmIzMWIzNmRjIiwidCI6ImZlNWQ1MzNlLWZiZmUtNDMxNy05ZDJlLWVlMjVhYzU0NmFiMyIsImMiOjR9" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.12. Información sobre decisiones que pueden afectar al público</th>
					</tr>
					<tr>
						<th>Planes de Ordenamiento Territorial – POT</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Acuerdo 48 de 2014</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.medellin.gov.co/normograma/docs/astrea/docs/a_conmed_0048_2014.htm" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td width="65%">Acuerdo 46 de 2006</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.medellin.gov.co/normograma/docs/astrea/docs/a_conmed_0046_2006.htm" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td width="65%">Acuerdo 062 de 1999</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.medellin.gov.co/normograma/docs/astrea/docs/A_CONMED_0062_1999.htm" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>Planes de Desarrollo Distrital</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Medellín Te Quiere 2024 – 2027</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.medellin.gov.co/es/plan-de-desarrollo/" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.13. Entes de control que vigilan al Distrito de Medellín</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Entes de Control</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.medellin.gov.co/es/transparencia/entes-de-control-que-vigilan-al-distrito-de-medellin/" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.14. Publicación de hojas de vida</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Publicación de hojas de vida: No Aplica. | Esta publicación, según el Decreto Nacional 1083 de 2015 es para las entidades del Nivel Nacional. No existe regulación en igual sentido para las del nivel Territorial. </td>
					</tr>
				</tbody>
			
			</table>
			-->
		</div>
		<!-- Collapsed 1 -->

		<!-- Collapsed 2 -->
		<button class="accordion active">2. Normatividad de la Agencia APP</button>
		<div class="panel" style="display: block">
			<H1 class="subt-m">2.1. Normativa de la entidad</H1>
			<ul>
				<li><a href="{{asset('assets/pdf/normograma.pdf')}}" target="_blank">Normograma >></a></li>
				<li><a href="{{route('user.administrative-acts')}}" target="_blank">Actos Administrativos Propios >></a></li>
				<li><a href="{{route('user.administrative-acts')}}" target="_blank">Gaceta Oficial Distrito de Medellín >></a></li>
				<li><a href="#">Políticas, lineamientos y manuales >></a></li>
			</ul>
			<br>
			<H1 class="subt-m">2.2. Búsqueda de normas</H1>
			<ul>
				<li><a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://ad0112085c36a7718f46d9dba43bbe60" target="_blank">ASTREA - Biblioteca jurídica virtual del Distrito de Medellín >></a></li>
				<li><a href="https://www.suin-juriscol.gov.co/" target="_blank">Sistema Único de Información Normativa – SUIN >></a></li>
			</ul>
			<br>
			<H1 class="subt-m">2.3. Proyectos normativos para comentarios</H1>



			<!--
			<table class="table table-bordered table-striped custom-table">
				<thead>
					<tr>
						<th>2.1. Normativa de la entidad</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Normograma</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/normograma.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Actos administrativos</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.administrative-acts')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Gaceta Oficial Distrito de Medellín</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.administrative-acts')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>2.2. Búsqueda de normas</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Biblioteca jurídica virtual del Distrito de Medellín</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://ad0112085c36a7718f46d9dba43bbe60" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Sistema Único de Información Normativa – SUIN</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.suin-juriscol.gov.co/" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>2.3. Proyectos normativos para comentarios</th>
					</tr>
				</thead>
			</table>
			-->
		</div>
		<!-- Collapsed 2 -->

		<!-- Collapsed 3 -->
		<button class="accordion active">3. Contratación</button>
		<div class="panel" style="display: block">
			<h1 class="subt-m">3.1. Plan anual de adquisiciones</h1>
			<ul>
				<li><a href="{{route('user.transparency.annual_procurement_plan')}}" target="_blank">Plan Anual de Adquisiciones (PAA) >></a></li>
			</ul>
			<br>
			<h1 class="subt-m">3.2. Información contractual</h1>
			<ul>
				<li><a href="https://community.secop.gov.co/Public/App/AnnualPurchasingPlanManagementPublic/Index?currentLanguage=en&Page=login&Country=CO&SkinName=CCE" target="_blank">Enlace que direccione al PAA publicado en el SECOP >></a></li>
				<li><a href="https://www.colombiacompra.gov.co/secop/secop-i " target="_blank">SECOP I >></a></li>
				<li><a href="https://www.colombiacompra.gov.co/secop-ii" target="_blank">SECOP II >></a></li>
			</ul>
			<p><p>Consulta de compras a través de la Tienda Virtual del Estado Colombiano – Colombia Compra Eficiente, debe una vez ingrese al link digitar en el campo entidad estatal «Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Publico Privadas» y luego dar clic en buscar.</p></p>
			<br>
			<h1 class="subt-m">3.3. Publicación de la ejecución de contratos</h1>
			<ul>
			<li><a href="#" target="_blank">Ejecución de contratos 2025 >></a></li>
				<li><a href="{{asset('assets/pdf/8. Contratacion/RELACIÓN-DE-CONTRATOS-31-JULIO-2024.pdf')}}" target="_blank">Ejecución de contratos 2024 >></a></li>
				<li><a href="{{asset('assets/pdf/4. REPORTE CONTRATOS VIGENCIA 2023.pdf')}}" target="_blank">Ejecución de contratos 2023 >></a></li>
				<li><a href="{{asset('assets/pdf/3. REPORTE CONTRATOS VIGENCIA 2022.pdf')}}" target="_blank">Ejecución de contratos 2022 >></a></li>
				<li><a href="{{asset('assets/pdf/2. REPORTE CONTRATOS VIGENCIA 2021.pdf')}}" target="_blank">Ejecución de contratos 2021 >></a></li>
				<li><a href="{{asset('assets/pdf/1. REPORTE CONTRATOS VIGENCIA 2020.pdf')}}" target="_blank">Ejecución de contratos 2020 >></a></li>
				<li><a href="{{asset('assets/pdf/5. REPORTE CONVENIOS INTERADMINISTRATIVOS $0 (2020-2023).pdf')}}" target="_blank">Convenios interadministrativos (2020 - 2023) >></a></li>
			</ul>
			<br>
			<h1 class="subt-m">3.4. Manual de contratación, adquisición y compras</h1>
			<ul>
				<li><a href="https://drive.google.com/file/d/18ODbrvDcgM7pRVTUf0dOfsy6jONuEJ6X/view" target="_blank">Gestión contractual >></a></li>
				<li><a href="https://www.app.gov.co/assets/pdf/resolucion-015-5-de-febrero-de-2021.pdf" target="_blank">Resolución 015 - Febrero 5 de 2021 >></a></li>
				<li><a href="https://www.app.gov.co/assets/pdf/resolucion-015-2-de-febrero-de-2021.pdf">Resolución 015 - Febrero 2 de 2021 >></a></li>
			</ul>
			<br>
			<h1 class="subt-m">3.5. Modelos de contratos o pliegos tipo</h1>
			<ul>
				<li><a href="https://www.colombiacompra.gov.co/documentos-tipo/documentos-tipo" target="_blank">Documentos pliegos tipo que utiliza el proceso de gestión de compras públicas transparentes, Colombia Compra Eficiente >></a></li>
				<li><a href="https://consultaprocesos.colombiacompra.gov.co/Autenticar" target="_blank">Procesos por entidades y proveedores >></a></li>
				<li><a href="https://www.colombiacompra.gov.co/tienda-virtual-del-estado-colombiano/ordenes-compra" target="_blank">Ordenes de compra TVEC >></a></li>
			</ul>

			<!--
			<table class="table table-bordered table-striped custom-table">
				<thead>
					<tr>
						<th>3.1. Plan anual de adquisiciones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Plan Anual de Adquisiciones (PAA)</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.annual_procurement_plan')}}" target="_blank">Visitar sitio</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>3.2. Información contractual</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Enlace que direccione al PAA publicado en el SECOP</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://community.secop.gov.co/Public/App/AnnualPurchasingPlanManagementPublic/Index?currentLanguage=en&Page=login&Country=CO&SkinName=CCE" target="_blank">Visitar sitio</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>3.3. Publicación de la ejecución de contratos</th>
					</tr>
				</thead>
				<tbody>
				<tr>
						<td width="65%">Ejecución de contratos 2024</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/8. Contratacion/RELACIÓN-DE-CONTRATOS-31-JULIO-2024.pdf')}}" target="_blank">Visitar página</a>
						</td>
					<tr>
						<td width="65%">Ejecución de contratos 2023</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/4. REPORTE CONTRATOS VIGENCIA 2023.pdf')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Ejecución de contratos 2022</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/3. REPORTE CONTRATOS VIGENCIA 2022.pdf')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Ejecución de contratos 2021</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/2. REPORTE CONTRATOS VIGENCIA 2021.pdf')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Ejecución de contratos 2020</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/1. REPORTE CONTRATOS VIGENCIA 2020.pdf')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Convenios interadministrativos (2020 - 2023)</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/5. REPORTE CONVENIOS INTERADMINISTRATIVOS $0 (2020-2023).pdf')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>3.4. Manual de contratación</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Gestión contractual</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.hiring')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>3.5. Modelos de contratos o pliegos tipo</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Documentos pliegos tipo que utiliza el proceso de gestión de compras públicas transparentes, Colombia Compra Eficiente  </td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.colombiacompra.gov.co/documentos-tipo/documentos-tipo" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
			</table>
			-->
		</div>
		<!-- Collapsed 3 -->

		<!-- Collapsed 4 -->
		<button class="accordion active">4. Planeación, Presupuesto e Informes</button>
		<div class="panel" style="display: block">
			<h1 class="subt-m">4.1. Presupuesto general de ingresos, gastos e inversión</h1>
			<ul>
				<li><a href="https://app.gov.co/ejecuci%C3%B3n-presupuestal-hist%C3%B3rica-anual" target="_blank">Presupuesto general de ingresos, gastos e inversión de cada año fiscal >></a></li>
			</ul>
			<br>
			<h1 class="subt-m">4.2. Ejecución presupuestal</h1>
			<ul>
				<li><a href="{{route('user.transparency.financial_statements')}}" target="_blank">Ejecución presupuestal histórica anual >></a></li>
			</ul>
			<br>
			<h1 class="subt-m">4.3. Plan de acción</h1>
			<ul>
				<li><a href="{{route('user.transparency.planning.action_plan')}}" target="_blank">Plan de Acción Anual >></a></li>
				<li><a href="{{route('user.transparency.planning.indicativo')}}" target="_blank">Plan indicativo >></a></li>
				<li><a href="{{route('user.transparency.planning.strategic_plan')}}" target="_blank">Plan estratégico >></a></li>
			</ul>
			<br>
			<h1 class="subt-m">4.4. Proyectos de inversión</h1>
			<ul>
				<li><a href="{{route('user.projects.index')}}" target="_blank">Banco de proyectos >></a></li>
			</ul>
			<br>
			<h1 class="subt-m">4.5. Informes de empalme</h1>
			<ul>
				<li><a href="{{asset('assets/pdf/control/InformeGestión-GermanSchafer-2024.pdf')}}" target="_blank">Informe de Gestión 2024 - German Schafer >></a></li>
				<li><a href="{{asset('assets/pdf/control/Formato-Informe-de-Gestión-2020-2023-RODRIGO-FORONDA.pdf')}}" target="_blank">Informe de Gestión 2020 - 2023 Rodrigo Foronda >></a></li>
				<li><a href="{{asset('assets/pdf/planning/Empalme2019.pdf')}}" target="_blank">Presentación Empalme Agencia APP 2019 >></a></li>
			</ul>
			<br>
			<h1 class="subt-m">4.6. Información pública o relevante</h1>
			<ul>
				<li>Esta subcategoría no aplica para la Agencia APP.</li>
			</ul>
			<br>
			<h1 class="subt-m">4.7. Informes de gestión, evaluación y auditoría</h1>
			<ul>
				<li><h5>4.7.1. Plan Anual de Auditoria</h5>
					<ul>
						<li><a href="{{asset('assets/pdf/control/PlanAnualdeAuditorías.pdf')}}" target="_blank">2025 >></a></li>
						<li><a href="{{asset('assets/pdf/control/PLAN-ANUAL-DE-AUDITORIAS-2024.xlsx')}}" target="_blank">2024 >></a></li>
						<li><a href="#" target="_blank">2023 >></a></li>
						<li><a href="{{asset('assets/pdf/control/auditoriavigencia2022.pdf')}}" target="_blank">2022 >></a></li>
						<li><a href="{{asset('assets/pdf/control/plan-anual-de-auditoria-2021.pdf')}}" target="_blank">2021 >></a></li>
						<li><a href="{{asset('assets/pdf/control/audit/plan-anual-de-auditoria-2020.pdf')}}" target="_blank">2020 >></a></li>
						<li>2019</li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/audit/plan-anual-auditoria-vigencia-de-2019.pdf')}}" target="_blank">Plan anual de auditoría - Vigencia 2019 >></a></li>
						<li><a href="{{asset('assets/pdf/control/audit/acta-del-comite-coordinador-control-interno-modificacion-del-plan-anual-auditoria-vigencia-de-2019.pdf')}}" target="_blank">Acta Comité Coordinador Control Interno | Modificación al plan anual de auditoría - Vigencia 2019 >></a></li>
						<li><a href="{{asset('assets/pdf/control/audit/modificacion-del-plan-anual-auditoria-vigencia-de-2019.pdf')}}" target="_blank">Modificación al plan anual de auditoría - Vigencia 2019 >></a></li>
						</ul>
					</ul>
				</li>
			</ul>
			<!-- 
			<ul>
				<li><a href="{{route('user.transparency.control')}}" target="_blank">Informe enviado al Congreso/Asamblea/Concejo >></a></li>
				<li><a href="{{route('user.transparency.control')}}" target="_blank">Informe de rendición de la cuenta fiscal a la Contraloría General de la República o a los organismos de control territorial, según corresponda. Sección Rendición de cuentas >></a></li>
				<li><a href="{{route('user.transparency.cuentas')}}" target="_blank">Informe de rendición de cuentas a los ciudadanos, incluyendo la respuesta a las solicitudes realizadas por los ciudadanos, antes y durante el ejercicio de rendición >></a></li>
				<li><a href="{{route('user.transparency.control')}}" target="_blank">Informes a organismos de inspección, vigilancia y control. Sección Informes de auditoría interna >></a></li>
			</ul>
			-->
			
			<ul>
				<li><h5>4.7.2. Informes de Gestión</h5>
					<ul>
						<li><a href="https://www.app.gov.co/assets/pdf/planning/Empalme2019.pdf" target="_blank">Informe de Gestión 2016-2019 >></a></li>
						<li><a href="https://www.app.gov.co/assets/pdf/control/Formato-Informe-de-Gestio%CC%81n-2020-2023-RODRIGO-FORONDA.pdf" target="_blank">Informe de Gestión 2020-2023 >></a></li>
					</ul>
				</li>
			</ul>

			<ul>
				<li><h5>4.7.3. Informe de rendición de cuentas ante la Contraloría General de la República/ Medellín</h5>
					<ul>
						<li>2024</li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/Rendición_CuentaFiscal_2024.pdf')}}" target="_blank">Rendición de la cuenta fiscal >></a></li>
							<li><a href="{{asset('assets/pdf/control/ANEXOS_RENDICION_ANUAL2024.pdf')}}" target="_blank">Anexos rendición de la cuenta fiscal >></a></li>
						</ul>
						<li>2023</li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/INFORMEFISCALYFINANCIERO2023.pdf')}}" target="_blank">Rendición de la cuenta fiscal >></a></li>
							<li><a href="{{asset('assets/pdf/control/ANEXOSRENDICIONANUAL2023.pdf')}}" target="_blank">Anexos rendición de la cuenta fiscal >></a></li>
						</ul>
					</ul>
				</li>
			</ul>

			<ul>
				<li><h5>4.7.4. Informe de rendición de cuentas a los ciudadanos, incluyendo la respuesta a las solicitudes realizadas por los ciudadanos, antes y durante el ejercicio de rendición</h5>
					<ul>
						<li><a href="#" target="_blank">Estrategia de Rendición de cuentas >></a></li>
						<li><a href="#" target="_blank">Informe de rendición de cuentas >></a></li>
					</ul>
				</li>
			</ul>

			<ul>
				<li><h5>4.7.5. Informes a organismos de inspección, vigilancia y control</h5>
					<ul>
						<li><a href="#" target="_blank">Evaluación del Índice de Desempeño Institucional y del Sistema de Control Interno – MECI a través del Formulario Único de Reporte Administrativo de la Gestión – FURAG >></a></li>
						<li><a href="https://www.cdm.gov.co/cgm/Paginaweb/IP/Paginas/Informes-de-Auditor%C3%ADa.aspx" target="_blank">Informes de Auditoría por parte de la Contraloría >></a></li>
					</ul>
				</li>
			</ul>

			<ul>
				<li><h5>4.7.6. Planes de Mejoramiento</h5>
					<ul>
						<li>2024</li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/Seguimiento-Plan-de-Mejoramiento-Agencia-APP-2024.pdf')}}" target="_blank">Seguimiento Plan de Mejoramiento Agencia APP 2024 >></a></li>
						</ul>
						<li>2023</li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/contraloria-2023.pdf')}}" target="_blank">Plan de Mejoramiento Contraloría 2023 >></a></li>
							<li><a href="{{asset('assets/pdf/control/Documento-de-apoyo-plan-de-mejora-2023.pdf')}}" target="_blank">Plan de Mejoramiento Contraloría 2023 - Segundo seguimiento >></a></li>
						</ul>
						<li>2022</li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/PlandeMejoramientoSubdireccionAPP2022.xlsx')}}" target="_blank">Plan de Mejoramiento Subdirección APP 2022 >></a></li>
							<li><a href="{{asset('assets/pdf/control/PlandeMejoramientoAuditor%C3%ADaGH.pdf')}}" target="_blank">Plan de Mejoramiento Auditoría GH 2022 >></a></li>
						</ul>
						<li>2020 - 2021</li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/mejoramiento-2021.pdf')}}" target="_blank">Seguimiento al plan de mejoramiento 2021 - Auditoria financiera y de gestion, vigencia 2020 >></a></li>
						</ul>

						<li>2019</li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/seguimiento-al-plan-de-mejoramiento-ita-02-diciembre-de-2019.pdf')}}" target="_blank">Seguimiento al plan de mejoramiento ITA-02 - diciembre de 2019 >></a></li>
							<li><a href="{{asset('assets/pdf/control/seguimiento-al-plan-de-mejoramiento-auditoria-a-la-gestion-financiera-en-noviembre-2019.pdf')}}" target="_blank">Seguimiento al plan de mejoramiento - Auditoría a la gestión financiera en noviembre 2019 >></a></li>
							<li><a href="{{asset('assets/pdf/control/plan-de-mejoramiento-indice-de-transparencia-y-acceso-a-la-informacion-en-2019.pdf')}}" target="_blank">Plan de mejoramiento - Índice de transparencia y acceso a la información en 2019 >></a></li>
							<li><a href="{{asset('assets/pdf/control/plan-de-mejoramiento-auditoria-a-la-gestion-de-compras-en-noviembre-de-2019.pdf')}}" target="_blank">Plan de mejoramiento - Auditoría a la gestión de compras en noviembre de 2019 >></a></li>
							<li><a href="{{asset('assets/pdf/control/plan-de-mejoramiento-unico.pdf')}}" target="_blank">Plan de mejoramiento único >></a></li>
						</ul>
					</ul>
				</li>
			</ul>
			<br>
			<h1 class="subt-m">4.8. Informes de la oficina de control interno</h1>
			<ul>
				<li><h5>4.8.1. Informe pormenorizado del estado del control interno</h5>
					<ul>
						<li>2024</a></li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/INFORME-PORMENORIZADO-DE-CONTROL-INTERNO-ENERO- JUNIO-2024.pdf')}}" target="_blank">Informe Pormenorizado de Control Interno Enero - Junio >></a></li>
						</ul>
					</ul>

					<ul>
						<li>2023</a></li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/INFORME PORMENORIZADO AGENCIA APP 2023  - Corte Junio 30.pdf')}}" target="_blank">Informe pormenorizado de control interno Junio 30 2023 >></a></li>
						</ul>
					</ul>

					<ul>
						<li>2022</a></li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/AutoevaluacionSistemadeControlInternoVigencia2022.pdf')}}" target="_blank">Informe pormenorizado de control interno Diciembre 30 2022 >></a></li>
							<li><a href="{{asset('assets/pdf/control/APP2022-CorteJunio-30.pdf')}}" target="_blank">Informe pormenorizado de control interno Junio 30 2022 >></a></li>
						</ul>
					</ul>

					<ul>
						<li>2021</a></li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/INFORMEPORMENORIZADOAGENCIAAPP2021-CorteDiciembre30.pdf')}}" target="_blank">Informe pormenorizado de control interno diciembre 2021 >></a></li>
							<li><a href="{{asset('assets/pdf/control/INFORMEPORMENORIZADOAGENCIAAPP2021-CorteJunio30.pdf')}}" target="_blank">Informe pormenorizado de control interno al 30 de junio 2021 >></a></li>
							<li><a href="{{asset('assets/pdf/control/informe-pormenorizado-control-interno-enero-27-de-2021.pdf')}}" target="_blank">Informe pormenorizado de control interno al 27 de enero 2021 >></a></li>
						</ul>
					</ul>

					<ul>
						<li>2020</a></li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/informe-pormenorizado-control-interno-2020.pdf')}}" target="_blank">Informe pormenorizado de control interno 2020 >></a></li>
						</ul>
					</ul>

					<ul>
						<li>2019</a></li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/informe-pormenorizado-31-dic-2019.pdf')}}" target="_blank">Informe pormenorizado del 1 de noviembre al 31 de diciembre de 2019 >></a></li>
							<li><a href="{{asset('assets/pdf/control/informe-pormenorizado-12-nov-2019.pdf')}}" target="_blank">Informe pormenorizado al 12 de noviembre de 2019 >></a></li>
							<li><a href="{{asset('assets/pdf/control/informe-pormenorizado-control-interno-abril-2019.pdf')}}" target="_blank">Informe pormenorizado a abril de 2019 >></a></li>
						</ul>
					</ul>

					<ul>
						<li>2018</a></li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/informe-pormenorizado-iii-control-interno-2018.pdf')}}" target="_blank">Informe pormenorizado III de control interno - 2018 >></a></li>
							<li><a href="{{asset('assets/pdf/control/informe-pormenorizado-ii-control-interno-2018.pdf')}}" target="_blank">Informe pormenorizado II de control interno - 2018 >></a></li>
						</ul>
					</ul>

				</li>
			</ul>

			<ul>
				<li><h5>4.8.2. Informe de derechos de autor</h5>
					<ul>
						<li><a href="{{asset('assets/pdf/control/InformedeDerechodeAutordeSoftware-2024.pdf')}}" target="_blank">2024 - Informe de Derecho de Autor de Software >></a></li>
						<li><a href="{{asset('assets/pdf/control/INFORME-DE-SOFTWARE-LEGAL-2023.pdf')}}" target="_blank">2023 - Informe de Derecho de Autor de Software >></a></li>
					</ul>

				</li>
			</ul>

			<ul>
				<li><h5>4.8.3. Evaluación por dependencias</h5>
					<!-- 
					<ul>
						<li><a href="{{asset('assets/pdf/control/InformedeDerechodeAutordeSoftware-2024.pdf')}}" target="_blank">2024 - Informe de Derecho de Autor de Software >></a></li>
						<li><a href="{{asset('assets/pdf/control/INFORME-DE-SOFTWARE-LEGAL-2023.pdf')}}" target="_blank">2023 - Informe de Derecho de Autor de Software >></a></li>
					</ul>
					-->

				</li>
			</ul>

			<ul>
				<li><h5>4.8.4. Informe de austeridad en el gasto</h5>
					<ul>
						<li>2024</li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/austerity/Informe-de-austeridad-trimestre-3-2024.pdf')}}" target="_blank">Informe de Austeridad - Tercer Trimestre de 2024 >></a></li>
							<li><a href="{{asset('assets/pdf/control/austerity/Austeridad-en-el-gasto-segundo-trimestre-2024.pdf')}}" target="_blank">Informe de Austeridad - Segundo Trimestre de 2024 >></a></li>
							<li><a href="{{asset('assets/pdf/control/austerity/Austeridad-en-el-gasto-primer-trimestre-2024.pdf')}}" target="_blank">Informe de Austeridad - Primer Trimestre de 2024 >></a></li>
						</ul>
						<li>2022</li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/austerity/Tercer-trimestre-2022.pdf')}}" target="_blank">Informe de austeridad - Tercer trimestre de 2022 >></a></li>
							<li><a href="{{asset('assets/pdf/control/austerity/segundo-trimestre-de-2022.pdf')}}" target="_blank">Informe de austeridad - Segundo trimestre de 2022 >></a></li>
						</ul>
						<li>2021</li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/austerity/tercer-2021.pdf')}}" target="_blank">Informe de austeridad - Tercer trimestre de 2021 >></a></li>
							<li><a href="{{asset('assets/pdf/control/austerity/informedeausteridadenelgastosegundotrimestrede2021.pdf')}}" target="_blank">Informe de austeridad - Segundo trimestre de 2021 >></a></li>
							<li><a href="{{asset('assets/pdf/control/austerity/informe-de-austeridad-primer-trimestre-2021.pdf')}}" target="_blank">Informe de austeridad - Primer trimestre de 2021 >></a></li>
						</ul>
						<li>2020</li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/austerity/informe-de-austeridad-cuarto-trimestre-2020.pdf')}}" target="_blank">Informe de austeridad - Cuarto trimestre de 2020 >></a></li>
							<li><a href="{{asset('assets/pdf/control/austerity/informe-de-austeridad-tercer-trimestre-2020.pdf')}}" target="_blank">Informe de austeridad - Tercer trimestre de 2020 >></a></li>
							<li><a href="{{asset('assets/pdf/control/austerity/informe-de-austeridad-segundo-trimestre-2020.pdf')}}" target="_blank">Informe de austeridad - Segundo trimestre de 2020 >></a></li>
							<li><a href="{{asset('assets/pdf/control/austerity/informe-de-austeridad-primer-trimestre-2020.pdf')}}" target="_blank">Informe de austeridad - Primer trimestre de 2020 >></a></li>
						</ul>
						<li>2019</li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/austerity/informe-de-austeridad-en-el-gasto-de-octubre-diciembre-2019.pdf')}}" target="_blank">Informe de austeridad en el gasto de octubre a diciembre de 2019 >></a></li>
							<li><a href="{{asset('assets/pdf/control/austerity/informe-de-austeridad-en-el-gasto-de-julio-septiembre-2019.pdf')}}" target="_blank">Informe de austeridad en el gasto de julio a septiembre de 2019 >></a></li>
							<li><a href="{{asset('assets/pdf/control/austerity/informe-de-austeridad-en-el-gasto-de-enero-junio-2019.pdf')}}" target="_blank">Informe de austeridad en el gasto de enero a junio de 2019 >></a></li>
						</ul>
					</ul>

				</li>
			</ul>

			<ul>
				<li><h5>4.8.5. Mapas de riesgos</h5>
			</ul>
			
			
			<br>
			<h1 class="subt-m">4.9. Informe sobre defensa pública y prevención de daño antijurídico</h1>
			<ul>
				<li><a href="{{asset('assets/pdf/control/Informe-DefensaJudicial-2024.pdf')}}" target="_blank">2024 >></a></li>
				<li><a href="#" target="_blank">2022 >></a></li>
				<li><a href="{{asset('assets/pdf/control/informe-de-defensa-judicial-28-enero-2021.pdf')}}" target="_blank">2021 >></a></li>
				<li><a href="{{asset('assets/pdf/control/informe-de-defensa-judicial-15-de-octubre-de-2020.pdf')}}" target="_blank">2000 >></a></li>
				<li><a href="{{asset('assets/pdf/control/informede-defensa-judicial-vigencia-2016-a-2019.pdf')}}" target="_blank">2019 >></a></li>
			</ul>
			<br>
			<h1 class="subt-m">4.10. Informes trimestrales sobre acceso a la información, quejas y reclamos</h1>
			<ul>
				<li><h5>4.10.1. Informes de peticiones, quejas, reclamos y sugerencias - PQRS</h5>
					<ul>
						<li>2025</li>
						<ul>
							<li><a href="{{asset('assets/pdf/pqrs/InformedePQRSD-EneMar-2025.pdf')}}" target="_blank">Informe de PQRSD - Primer Trimestre de 2025 >></a></li>
						</ul>
						<li>2024</li>
						<ul>
							<li><a href="{{asset('assets/pdf/pqrs/Informe-de-PQRSD-Oct-Dic.pdf')}}" target="_blank">Informe de PQRSD - Cuarto Trimestre de 2024 >></a></li>
							<li><a href="{{asset('assets/pdf/pqrs/Informe-de-PQRSD-JulSept.pdf')}}" target="_blank">Informe de PQRSD - Tercer Trimestre de 2024 >></a></li>
							<li><a href="{{asset('assets/pdf/pqrs/Informe-de-PQRSD-AbrJun.pdf')}}" target="_blank">Informe de PQRSD - Segundo Trimestre de 2024 >></a></li>
							<li><a href="{{asset('assets/pdf/pqrs/Informe-de-PQRSD-PrimerTrismestre2024.pdf')}}" target="_blank">Informe de PQRSD - Primer Trimestre de 2024 >></a></li>
						</ul>
						<li>2023</li>
						<ul>
							<li><a href="{{asset('assets/pdf/pqrs/primer-trimestre-2023.pdf')}}" target="_blank">Informe de PQRSD - Primer trimestre de 2023 >></a></li>
						</ul>
						<li>2022</li>
						<ul>
							<li><a href="{{asset('assets/pdf/pqrs/cuarto-Trimestre-2022.pdf')}}" target="_blank">Informe de PQRSD - Cuarto trimestre de 2022 >></a></li>
							<li><a href="{{asset('assets/pdf/control/pqrs/InformePQRSD3%C2%B0Trimestre2022.pdf')}}" target="_blank">Informe de PQRSD - Tercer trimestre de 2022 >></a></li>
							<li><a href="{{asset('assets/pdf/control/pqrs/InformePQRSD2%C2%B0Trimestre2022.pdf')}}" target="_blank">Informe de PQRSD - Segundo trimestre de 2022 >></a></li>
							<li><a href="{{asset('assets/pdf/control/pqrs/InformePQRSD1%C2%B0Trimestre2022.pdf')}}" target="_blank">Informe de PQRSD - Primer trimestre de 2022 >></a></li>
						</ul>
						<li>2021</li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/pqrs/InformePQRSDcortesegundoSemestreJulio01al30Diciembre2021.pdf')}}" target="_blank">Informe de PQRSD - Segundo semestre de 2021 >></a></li>
							<li><a href="{{asset('assets/pdf/control/pqrs/InformePQRSDcortesegundotrimestre2021.pdf')}}" target="_blank">Informe de PQRSD - Segundo trimestre de 2021 >></a></li>
							<li><a href="{{asset('assets/pdf/control/pqrs/informe-enero-1-a-marzo-30-del-2021.pdf')}}" target="_blank">Informe de PQRSD - Primer trimestre de 2021 >></a></li>
						</ul>
						<li>2020</li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/pqrs/informe-enero-1-a-diciembre-30-del-2020.pdf')}}" target="_blank">Informe de PQRSD desde el 1 enero al 30 diciembre de 2020 >></a></li>
						</ul>
						<li>2019</li>
						<ul>
							<li><a href="{{asset('assets/pdf/control/pqrs/informe-de-estados-pqrsd-de-julio-a-diciembre-de-2019.pdf')}}" target="_blank">Informe de PQRSD - Segundo semestre de 2019 >></a></li>
							<li><a href="{{asset('assets/pdf/control/pqrs/informe-de-estados-pqrsd-primer-semestre-de-2019.pdf')}}" target="_blank">Informe de PQRSD - Primer semestre de 2019 >></a></li>
						</ul>
					</ul>

				</li>
			</ul>

			<ul>
				<li><h5>4.10.2. Registro Público PQRSD</h5>
					<ul>
						<li><a href="{{asset('assets/pdf/pqrs/Registro-publico-PQRSD-semestre-II-2024.xlsx')}}" target="_blank">Registro Publico PQRSD - Semestre II 2024 >></a></li>
						<li><a href="{{asset('assets/pdf/pqrs/Registro-publico-PQRSD-semestre-I-2024.xlsx')}}" target="_blank">Registro Publico PQRSD - Semestre I 2024 >></a></li>
					</ul>

				</li>
			</ul>



			<!-- 
			<table class="table table-bordered table-striped custom-table">
				<thead>
					<tr>
						<th>4.1. Presupuesto general de ingresos, gastos e inversión.</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Presupuesto general de ingresos, gastos e inversión de cada año fiscal</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://app.gov.co/ejecuci%C3%B3n-presupuestal-hist%C3%B3rica-anual" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>4.2. Ejecución presupuestal</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Ejecución presupuestal histórica anual</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.annual_budget')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>4.3. Plan de acción</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Plan de Acción Anual</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.planning.action_plan')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Plan indicativo</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.planning.indicativo')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>4.4. Proyectos de inversión</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Banco de proyectos</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.projects.index')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>4.5. Informes de empalme</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Informe de Gestión 2024 - German Schafer</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/InformeGestión-GermanSchafer-2024.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Informe de Gestión 2020 - 2023 Rodrigo Foronda</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/Formato-Informe-de-Gestión-2020-2023-RODRIGO-FORONDA.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Presentación Empalme Agencia APP 2019</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Empalme2019.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				<tbody>
				<thead>
					<tr>
						<th>4.6. Información pública o relevante</th>
						<th>Esta subcategoría no aplica para la Agencia APP. </th>
					</tr>
				</thead>
				<thead>
					<tr>
						<th>4.7. Informes de gestión, evaluación y auditoría</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Informe enviado al Congreso/Asamblea/Concejo</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.control')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Informe de rendición de la cuenta fiscal a la Contraloría General de la República o a los organismos de control territorial, según corresponda. <span class="text-dark"><em>Sección</em> <b>Rendición de cuentas</b></span></td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.control')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Informe de rendición de cuentas a los ciudadanos, incluyendo la respuesta a las solicitudes realizadas por los ciudadanos, antes y durante el ejercicio de rendición</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.cuentas')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Informes a organismos de inspección, vigilancia y control. <span class="text-dark"><em>Sección <b>Informes de auditoría interna</b></em></span></td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.control')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>4.8. Informes de la oficina de control interno</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Informe pormenorizado del estado del control interno de acuerdo al artículo 9 de la Ley 1474 de 2011. <span class="text-dark"><em>Sección <b>Informes pormenorizado del Estado de Control Interno</b></em></span></td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.control')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				
				<thead>
					<tr>
						<th>4.9. Informe sobre defensa pública y prevención de daño antijurídico</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">2024</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://app.gov.co/assets/pdf/control/Informe-DefensaJudicial-2024.pdf" target="_blank">Ver documento</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Historico</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://app.gov.co/transparencia/control" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>4.10. Informes trimestrales sobre acceso a la información, quejas y reclamos</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Tercer Trimestre de 2024</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://app.gov.co/assets/pdf/pqrs/Informe-de-PQRSD-JulSept.pdf" target="_blank">Ver documento</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Historico</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://app.gov.co/transparencia/control" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
			</table>
			-->
		</div>
		<!-- Collapsed 4 -->

		<!-- Collapsed 5 -->
		<button class="accordion active">5. Trámites y servicios</button>
		<div class="panel" style="display: block">
			<h1 class="subt-m">5.1. Información sobre trámites</h1>
			<ul>
				<li><a href="{{route('user.transparency.suit')}}" target="_blank">Normativa, procesos, costos y formatos >></a></li>
				<li><a href="http://app.test/preguntas-y-respuestas-frecuentes" target="_blank">Preguntas frecuentes >></a></li>
				<li><a href="https://www.app.gov.co/assets/pdf/control/tables/resolucion-105-de-2019.pdf" target="_blank">Costos de reproducción de la información pública >></a></li>
			</ul>
			


			<!--
			<table class="table table-bordered table-striped custom-table">
				<tbody>
					<tr>
						<td width="65%">Información sobre trámites (normativa, procesos, costos y formatos). </td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.suit')}}" target="_blank">Ver página</a>
						</td>
					</tr>
				</tbody>
			</table>
			-->
		</div>
		<!-- Collapsed 5 -->

		<!-- Collapsed 6 -->
		<button class="accordion active">6. Participa</button>
		<div class="panel" style="display: block">
			<h1 class="subt-m">6.1. Mecanismos de participación en la formulación de políticas y decisiones</h1>
			<p>Participa es la sección donde encontrará toda la información relacionada con los espacios, mecanismos y acciones que permiten la participación ciudadana en el ciclo de la gestión pública; diagnóstico, formulación, implementación, evaluación y seguimiento a través del sitio web de la Agencia APP, con el propósito de vincular a la ciudadanía y demás grupos de interés en las decisiones y acciones públicas, para fortalecer la incidencia, la promoción y garantía de la participación como derecho.</p>
			<ul>
				<li><a href="https://app.gov.co/participa" target="_blank">Para más información ingresa a Participa >></a></li>
			</ul>

			<!--
			<table class="table table-bordered table-striped custom-table">
			<thead>
					<tr>
						<th>6.1. Mecanismos de participación en la formulación de políticas y decisiones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Participa es la sección donde encontrará toda la información relacionada con los espacios, mecanismos y acciones que permiten la participación ciudadana en el ciclo de la gestión pública; diagnóstico, formulación, implementación, evaluación y seguimiento a través del sitio web de la Agencia APP, con el propósito de vincular a la ciudadanía y demás grupos de interés en las decisiones y acciones públicas, para fortalecer la incidencia , la promoción y garantía de la participación como derecho.  </td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://app.gov.co/participa" target="_blank">Ver página</a>
						</td>
					</tr>
				</tbody>
			</table>
			-->
		</div>
		<!-- Collapsed 6 -->

		<!-- Collapsed 7 -->
		<button class="accordion active">7. Datos Abiertos </button>
		<div class="panel" style="display: block">
			<h1 class="subt-m">7.1. Instrumentos de gestión de la información</h1>
			<ul>
				<li><a href="https://www.app.gov.co/assets/pdf/REGISTROACTIVOSINFORMACIONAGENCIAAPP2022.pdf" target="_blank">Registro de activos de información >></a></li>
				<li><a href="https://www.datos.gov.co/Trabajo/INDICE-DE-INFORMACI-N-CLASIFICADA-Y-RESERVADA/v9c3-nmht/about_data" target="_blank">Índice de información clasificada y reservada >></a></li>
				<li><a href="https://www.datos.gov.co/" target="_blank">Esquema de publicación de información >></a></li>
				<li><a href="https://www.app.gov.co/assets/pdf/Resolución063.pdf" target="_blank">Resolución 63 >></a></li>
				<li><a href="https://www.app.gov.co/assets/pdf/trdytvd.pdf" target="_blank">Acuerdo de tablas de retención >></a></li>
				<li><a href="https://www.app.gov.co/assets/pdf/ProgramadeGestiónDocumental.pdf" target="_blank">Programa de Gestión Documental</a></li>
				<li><h5>Tablas de Retención Documental</h5>
					<ul>
						<li><a href="{{route('user.transparency.info_management')}}" target="_blank">Listado de series, con sus correspondientes tipos documentales, a las cuales se asigna el tiempo de permanencia en cada etapa del ciclo vital de los documentos >></a></li>
						<li><a href="{{asset('assets/pdf/trdytvd.pdf')}}" target="_blank">Adoptadas y actualizadas por medio de acto administrativo o documento equivalente de acuerdo con el régimen legal al sujeto obligado, de conformidad con lo establecido por el acuerdo No. 004 de 2013 del Archivo General de la Nación >></a></li>
					</ul>
				</li>
			</ul>
			<br>
			<h1 class="subt-m">7.2. Sección de datos abiertos</h1>
			<ul>
				<li><a href="https://www.datos.gov.co/" target="_blank">Portal de Datos Abiertos >></a></li>
				<li><a href="https://app.gov.co/proyectos/AEEP" target="_blank">Monitoreo de las dinámicas y la gestión del Aprovechamiento Económico del Espacio Público en Medellín >></a></li>
				<li><a href="">Estudio de Arquitectura Moderna >></a></li>
			</ul>

			<!--
			<table class="table table-bordered table-striped custom-table">
				<thead>
					<tr>
						<th>7.1. Instrumentos de gestión de la información</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Registro de activos de información</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.datos.gov.co/login" target="_blank">Ver página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Índice de información clasificada y reservada</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.datos.gov.co/Trabajo/INDICE-DE-INFORMACI-N-CLASIFICADA-Y-RESERVADA/v9c3-nmht/about_data" target="_blank">Ver página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Esquema de publicación de información</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.datos.gov.co/" target="_blank">Ver página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>Tablas de Retención Documental</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Listado de series, con sus correspondientes tipos documentales, a las cuales se asigna el tiempo de permanencia en cada etapa del ciclo vital de los documentos</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.info_management')}}" target="_blank">Ver página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Adoptadas y actualizadas por medio de acto administrativo o documento equivalente de acuerdo con el régimen legal al sujeto obligado, de conformidad con lo establecido por el acuerdo No. 004 de 2013 del Archivo General de la Nación</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/trdytvd.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>7.2. Sección de datos abiertos</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%"> Portal de Datos Abiertos</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.datos.gov.co/" target="_blank">Ver página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Monitoreo de las dinámicas y la gestión del Aprovechamiento Económico del Espacio Público en Medellín.</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://app.gov.co/proyectos/AEEP" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
			</table>
			-->
		</div>
		<!-- Collapsed 7 -->

		<!-- Collapsed 8 -->
		<button class="accordion active">8. Información específica para grupos de interés</button>
		<div class="panel" style="display: block">
			<h1 class="subt-m">8.1. Información dirigida a niños, niñas y adolescentes</h1>
			<ul>
				<li><a href="https://www.medellin.gov.co/es/secretaria-de-inclusion-social-y-familia/subsecretaria-de-grupos-poblacionales/unidad-de-ninez/" target="_blank">Unidad de Niñez y Adolescencia – Secretaría de Inclusión Social y Familia >></a></li>
			</ul>
			<br>
			<h1 class="subt-m">8.2. Información para mujeres</h1>
			<ul>
				<li><a href="https://www.medellin.gov.co/es/secretaria-mujeres/" target="_blank">Secretaría de las Mujeres  >></a></li>
			</ul>


			<!--
			<table class="table table-bordered table-striped custom-table">
				<thead>
					<tr>
						<th>8.1. Información dirigida a niños, niñas y adolescentes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Unidad de Niñez y Adolescencia – Secretaría de Inclusión Social y Familia. </td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.medellin.gov.co/es/secretaria-de-inclusion-social-y-familia/subsecretaria-de-grupos-poblacionales/unidad-de-ninez/" target="_blank">Ver página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>8.2. Información para mujeres</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Secretaría de las Mujeres.</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.medellin.gov.co/es/secretaria-mujeres/" target="_blank">Ver página</a>
						</td>
					</tr>
				</tbody>
			</table>
			-->
		</div>
		<!-- Collapsed 8 -->

		<!-- Collapsed 9 -->
		<button class="accordion active">9. Obligaciones de reporte</button>
		<div class="panel" style="display: block">
			<h1 class="subt-m">9.1. Documentos y datos exigidos por normativa especial.</h1>
			<ul>
				<li><p>Esta subcategoría no aplica para la Agencia APP.<br>
				La totalidad de las normas se encuentran en el Normograma anteriormente publicado.<p></li>
			</ul>


			<!--
			<table class="table table-bordered table-striped custom-table">
				<thead>
					<tr>
						<th>9.1. Documentos y datos exigidos por normativa especial.</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Esta subcategoría no aplica para la Agencia APP.<br>La totalidad de las normas se encuentran en el Normograma anteriormente publicado. </td>
					</tr>
				</tbody>
			</table>
			-->
		</div>
		<!-- Collapsed 9 -->

		<!-- Collapsed 10 -->
		<button class="accordion active">10. Información tributaria (solo para entidades territoriales locales)</button>
		<div class="panel" style="display: block">
			<p>Esta subcategoría no aplica para la Agencia APP</p>

			<!--
			<table class="table table-bordered table-striped custom-table">
				<thead>
					<tr>
						<th>Esta subcategoría no aplica para la Agencia APP</th>
					</tr>
				</thead>
			</table>
			-->
		</div>
		<!-- Collapsed 10 -->


		<!-- 
		<button class="accordion">1. Mecanismos de contacto</button>
		<div class="panel">
			<table class="table table-bordered table-striped custom-table">
				<thead>
					<tr>
						<th>1.1. Mecanismo para la atención al ciudadano</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Correo institucional - info@app.gov.co</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.contact-us')}}" target="_blank">Visitar sitio</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Correo físico: carrera 55 # 42-180 Local 203. Edificio Plaza de La Libertad, Medellín Colombia</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.google.com/maps/@6.2455701,-75.5750733,3a,75y,135.03h,109.37t/data=!3m6!1e1!3m4!1sNEmW7NBAcdGgYD0smSe7Qw!2e0!7i13312!8i6656" target="_blank">Ver mapa</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Correo postal</td>
						<td class="text-center">050015</td>
					</tr>
					<tr>
						<td width="65%">Teléfonos fijos y móviles, líneas gratuitas y fax: 604 448 1740</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="tel:570344481740" target="_blank">Llamar</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Si tiene alguna solicitud, queja o reclamo, por favor diligencie el formulario</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="http://mercurioapp.medellin.gov.co/mercurio/inicialPqr.jsp" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.2. Localización física, sucursales o regionales, horarios y días de atención al público</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Ubicación sede principal, sedes alternas, horarios y días de atención al público, datos de contacto</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.contact-us')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.3. Correo electrónico para notificaciones judiciales</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Notificaciones judiciales: procesosjudiciales@app.gov.co</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="mailto:procesosjudiciales@app.gov.co" target="_blank">Contactar</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Atención al ciudadano: info@app.gov.co</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="mailto:info@app.gov.co" target="_blank">Contactar</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>1.4. Políticas de seguridad de la información del sitio web y protección de datos personales</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Políticas de seguridad</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.tyc')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div><button class="accordion">2. Información de interés</button>
		<div class="panel">
			<h6><span>2.1. Datos abiertos</span></h6>
			<table class="table table-bordered table-striped custom-table">
				<thead>
					<tr>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Página con los enlaces de datos abiertos</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.datos.gov.co/" target="_blank">Visitar sitio</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Aprovechamiento Economico del Espacio Público AEEP- AGENCIA APP</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.projects.aeep')}}" target="_blank">Visitar sitio</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Registro de activos de información</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.datos.gov.co/Funci-n-p-blica/REGISTRO-ACTIVOS-INFORMACION-AGENCIA-APP/3m89-hz4w" target="_blank">Visitar sitio</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Índice de información clasificada y reservada</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.datos.gov.co/Trabajo/INDICE-DE-INFORMACI-N-CLASIFICADA-Y-RESERVADA/v9c3-nmht" target="_blank">Visitar sitio</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>2.2. Estudios, investigaciones y otras publicaciones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Estudios, investigaciones y otras publicaciones</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.projects.index')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>2.3. Convocatorias</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Convocatorias</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.events.announcement')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>2.4. Preguntas y respuestas frecuentes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Preguntas y respuestas frecuentes</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.info.faq')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>2.5. Glosario</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Glosario</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/convocatorias/APP-2021.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>2.6. Noticias</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Noticias</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.boletin')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>2.7. Calendario de actividades</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Calendario de actividades</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.events.calendar')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>2.8. Información para niñas, niños y adolescentes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Video informativo para niñas, niños y adolescentes</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.youtube.com/watch?v=6fNrz0K1DLI" target="_blank">Ver video</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>2.9. Información adicional</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Código de integridad</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/codigointegridadapp.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>2.10. Entes de control que vigilan al Distrito de Medellín</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Entes de Control</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.medellin.gov.co/es/transparencia/entes-de-control-que-vigilan-al-distrito-de-medellin/" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div><button class="accordion">3. Estructura orgánica y talento humano</button>
		<div class="panel">
			<table class="table table-bordered table-striped custom-table">
				<thead></thead>
				<tbody>
					<tr>
						<td width="65%">Misión y Visión</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.about.mision')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>3.2. Funciones y deberes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Funciones</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.about.functions')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>3.3. Procesos y procedimientos</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Sistema integrado de gestión</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.processes')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>3.4. Organigrama</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Organigrama</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.about.organization_chart')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>3.5. Directorio de información de servidores públicos, contratistas y empleados</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Directorio de información de los servidores públicos y contratistas.</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Directorio-Agencia-2024.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>3.6. Directorio de entidades</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Directorio de entidades</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.info.entity_directory')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>3.7. Directorio de agremiaciones, asociaciones y otros grupos de interés</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Directorio de agremiaciones, asociaciones y otros grupos de interés</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.info.union_directory')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>3.8. Ofertas de empleo</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Ofertas de empleo</td>
						<td class="text-center">
							<a class="btn btn-danger btn-block" href="#" target="_blank">No hay ofertas de empleo</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th> 3.9 Manual de Procesos y Procedimientos </th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Manual de Procesos y Procedimientos</td>
						<td class="text-center">
							<a class="btn btn-danger btn-block" href="https://app.gov.co/assets/pdf/manual-de-procesos-y-procedimientos.pdf" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div><button class="accordion">4. Normatividad</button>
		<div class="panel">
			<table class="table table-bordered table-striped custom-table">
				<tbody>
					<tr>
						<td width="65%">Normograma</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/normograma.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Biblioteca juridica virtual del Distrito de Medellín</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://ad0112085c36a7718f46d9dba43bbe60" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Actos administrativos</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.administrative-acts')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Sistema Único de Información Normativa – SUIN</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.suin-juriscol.gov.co/" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Gaceta Oficial Distrito de Medellín</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.administrative-acts')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div><button class="accordion">5. Presupuesto</button>
		<div class="panel">
			<table class="table table-bordered table-striped custom-table">
				<thead>
					<tr>
						<th>5.1. Presupuesto general asignado</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Presupuesto e información financiera</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.annual_budget')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>5.2. Ejecución presupuestal histórica anual</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Ejecución presupuestal histórica anual</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.annual_budget')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>5.3. Estados financieros</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Información contable</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.financial_statements')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div><button class="accordion">6. Planeación</button>
		<div class="panel">
			<table class="table table-bordered table-striped custom-table">
				<thead>
					<tr>
						<th>6.1. Políticas, lineamientos y manuales</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Políticas y lineamientos sectoriales e institucionales</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.lineamientos')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Manual de procesos y procedimientos</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/manual-de-procesos-y-procedimientos.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Planes estratégicos, sectoriales e institucionales</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.planning.strategic_plan')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Plan de rendición de cuentas</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.cuentas')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Plan de servicio al ciudadano</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.planning.anti_corruption')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Plan antitrámites</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.planning.anti_corruption')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Plan anticorrupción y de atención al ciudadano de conformidad con el Art. 73 de Ley 1474 de 2011</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.planning.anti_corruption')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Contenido de toda decisión y/o política que haya adoptado y afecte al público, junto con sus fundamentos y toda interpretación autorizada de ellas</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.administrative-acts')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>6.2. Plan de acción</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Plan de acción</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.planning.action_plan')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Plan indicativo</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.planning.indicativo')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>6.3. Programas y proyectos en ejecución</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Banco de proyectos</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.projects.index')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>6.4. Metas, objetivos e indicadores de gestión y/o desempeño</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Plan de acción</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.planning.action_plan')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>6.5. Participación en la formulación de políticas</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Canales de atención</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.contact-us')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>6.6. Informes de empalme</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Informe de Gestión 2024 - German Schafer</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/InformeGestión-GermanSchafer-2024.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				<tbody>
					<tr>
						<td width="65%">Informe de Gestión 2020 - 2023 Rodrigo Foronda</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/Formato-Informe-de-Gestión-2020-2023-RODRIGO-FORONDA.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Presentación Empalme Agencia APP 2019</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Empalme2019.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div><button class="accordion">7. Control</button>
		<div class="panel">
			<table class="table table-bordered table-striped custom-table">
				<thead>
					<tr>
						<th>7.1. Informes de gestión, evaluación y auditoría</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Informe enviado al Congreso/Asamblea/Concejo</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.control')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Informe de rendición de la cuenta fiscal a la Contraloría General de la República o a los organismos de control territorial, según corresponda. <span class="text-dark"><em>Sección</em> <b>Rendición de cuentas</b></span></td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.control')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Informe de rendición de cuentas a los ciudadanos, incluyendo la respuesta a las solicitudes realizadas por los ciudadanos, antes y durante el ejercicio de rendición</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.cuentas')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Informes a organismos de inspección, vigilancia y control. <span class="text-dark"><em>Sección <b>Informes de auditoría interna</b></em></span></td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.control')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>7.2. Reportes de control interno</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Informe pormenorizado del estado del control interno de acuerdo al artículo 9 de la Ley 1474 de 2011. <span class="text-dark"><em>Sección <b>Informes pormenorizado del Estado de Control Interno</b></em></span></td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.control')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>7.3. Planes de mejoramiento</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Planes de Mejoramiento vigentes exigidos por entes de control internos o externos. De acuerdo con los hallazgos realizados por el respectivo organismo de control. <span class="text-dark"><em>Sección <b>Planes de Mejoramiento</b></em></span></td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.control')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Enlace al sitio web del organismo de control en donde se encuentren los informes que éste ha elaborado sobre la entidad</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.control')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>7.4. Entes de control que vigilan a la entidad y mecanismos de supervisión</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Relación de todas las entidades que vigilan al sujeto obligado</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.info.entity_directory')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Mecanismos internos y externos de supervisión, notificación y vigilancia pertinente al sujeto obligado</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.control')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>7.5. Información para población vulnerable</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Secretaría de Inclusión Social, Familia y Derechos Humanos</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=contenido/8466-Secretaria-de-Inclusion-Social-Familia-y-Derechos-Humanos" target="_blank">Visitar sitio</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Secretaría de Salud</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://10a75d24d37a79009a056c48a495a8fb" target="_blank">Visitar sitio</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Secretaría de las Mujeres</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.medellin.gov.co/portal_mujeres/" target="_blank">Visitar sitio</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Secretaría de Juventud</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.medellinjoven.com/" target="_blank">Visitar sitio</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>7.6. Defensa judicial</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Informe de defensa judicial. <span class="text-dark"><em>Sección <b>Informes de defensa judicial</b></em></span></td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.control')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div><button class="accordion">8. Contratación</button>
		<div class="panel">
			<table class="table table-bordered table-striped custom-table">
				<thead>
					<tr>
						<th>8.1. Publicación de la información contractual</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Procesos contractuales</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://community.secop.gov.co/Public/Tendering/ContractNoticeManagement/Index?currentLanguage=es-CO&Page=login&Country=CO&SkinName=CCE" target="_blank">Visitar sitio</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>8.2. Publicación de la ejecución de contratos</th>
					</tr>
				</thead>
				<tbody>
				<tr>
						<td width="65%">Ejecución de contratos 2024</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/8. Contratacion/RELACIÓN-DE-CONTRATOS-31-JULIO-2024.pdf')}}" target="_blank">Visitar página</a>
						</td>
					<tr>
						<td width="65%">Ejecución de contratos 2023</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/4. REPORTE CONTRATOS VIGENCIA 2023.pdf')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Ejecución de contratos 2022</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/3. REPORTE CONTRATOS VIGENCIA 2022.pdf')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Ejecución de contratos 2021</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/2. REPORTE CONTRATOS VIGENCIA 2021.pdf')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Ejecución de contratos 2020</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/1. REPORTE CONTRATOS VIGENCIA 2020.pdf')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Convenios interadministrativos (2020 - 2023)</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/5. REPORTE CONVENIOS INTERADMINISTRATIVOS $0 (2020-2023).pdf')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>8.3. Publicación de procedimientos, lineamientos y políticas en materia de adquisición y compras</th>
					</tr>
				</thead>
				<tbody>
				<tr>
						<td width="65%">Procesos por entidades y proveedores</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://consultaprocesos.colombiacompra.gov.co/Autenticar" target="_blank">Ver documento</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Ordenes de compra TVEC</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://www.colombiacompra.gov.co/tienda-virtual-del-estado-colombiano/ordenes-compra" target="_blank">Ver documento</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Resolución 014 de 2016</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Resolución-014-Febrero-8-2016.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Resolución 017 de 2016</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Resolución-017-2016.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Resolución 015 de 2020</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Resolucion-015-2020.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>8.4. Plan anual de adquisiciones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Plan Anual de Adquisiciones (PAA)</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.annual_procurement_plan')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Contratación</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.hiring')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Enlace que direccione al PAA publicado en el SECOP</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="https://community.secop.gov.co/Public/App/AnnualPurchasingPlanManagementPublic/Index?currentLanguage=en&Page=login&Country=CO&SkinName=CCE" target="_blank">Visitar sitio</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div><button class="accordion">9. Trámites y servicios</button>
		<div class="panel">
			<table class="table table-bordered table-striped custom-table">
				<tbody>
					<tr>
						<td width="65%">Trámites y servicios</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.suit')}}" target="_blank">Ver página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Manual de servicio a la ciudadania</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Manual-de-servicio-al-ciudadano.pdf')}}" target="_blank">Ver página</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div><button class="accordion">10. Instrumentos de gestión de información pública.</button>
		<div class="panel">
			<table class="table table-bordered table-striped custom-table">
				<thead>
					<tr>
						<th>10.2. Registro de Activos de Información</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Instrumentos de gestión de información pública.</td>
						<td class="text-center">
							
							 <a class="btn btn-primary btn-block" href="{{asset('assets/pdf/REGISTROACTIVOSINFORMACIONAGENCIAAPP2022.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Resolución 063</td>
						<td class="text-center">
						
							 <a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Resolución063.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>10.3. Índice de Información Clasificada y Reservada</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Instrumentos de gestión de información pública.</td>
						<td class="text-center">
					
							 <a class="btn btn-primary btn-block" href="{{asset('assets/pdf/INDICEDEINFORMACIÓNCLASIFICADAYRESERVADAAGENCIAAPP2022.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Resolución 063</td>
						<td class="text-center">
						
							 <a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Resolución063.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>10.4. Esquema de Publicación de Información</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Instrumentos de gestión de información pública.</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/ESQUEMAPUBLICACIONDELAINFORMACIONAPP2022.pdf')}}" target="_blank">Ver página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Resolución 063</td>
						<td class="text-center">
							
							 <a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Resolución063.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>10.5. Programa de Gestión Documental</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Plan para facilitar la identificación, gestión, clasificación, organización, conservación y disposición de la información pública, elaborado según lineamientos del Decreto 2609 de 2012, o las normas que lo sustituyan o modifiquen</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/ProgramadeGestiónDocumental.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Adoptado y actualizado por medio de acto administrativo o documento equivalente de acuerdo con el régimen legal al sujeto obligado, de conformidad con lo establecido por el acuerdo No. 004 de 2013 del Archivo General de la Nación</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/trdytvd.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>10.6. Tablas de Retención Documental</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Listado de series, con sus correspondientes tipos documentales, a las cuales se asigna el tiempo de permanencia en cada etapa del ciclo vital de los documentos</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.info_management')}}" target="_blank">Ver página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Adoptadas y actualizadas por medio de acto administrativo o documento equivalente de acuerdo con el régimen legal al sujeto obligado, de conformidad con lo establecido por el acuerdo No. 004 de 2013 del Archivo General de la Nación</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/trdytvd.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>10.7. Registro de publicaciones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Registro de publicaciones</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.verification')}}" target="_blank">Ver Página</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>10.8. Costos de reproducción</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Costos de reproducción de la información pública</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/tables/resolucion-105-de-2019.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Acto administrativo o documento equivalente donde se motive de manera individual el costo unitario de los diferentes tipos de formato a través de los cuales se puede reproducir la información</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/tables/resolucion-105-de-2019.pdf')}}" target="_blank">Ver documento</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>10.9. Mecanismos para presentar quejas y reclamos en relación con omisiones o acciones del sujeto obligado</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Información sobre los mecanismos para presentar quejas y reclamos en relación con omisiones o acciones del sujeto obligado, y la manera como un particular puede comunicar una irregularidad ante los entes que ejercen control sobre la misma.</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="http://mercurioapp.medellin.gov.co/mercurio/inicialPqr.jsp" target="_blank">Ver sitio</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>10.10. Informe de Peticiones, quejas, reclamos, denuncias y solicitudes de acceso a la información</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Informe de PQRSD</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.control')}}" target="_blank">Ver página</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div><button class="accordion">11. Transparencia pasiva</button>
		<div class="panel">
			<table class="table table-bordered table-striped custom-table">
				<thead>
					<tr>
						<th>11.1 Medios de seguimiento para la consulta del estado de las solicitudes de informacion publica</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="65%">Seguimiento a solicitudes de información publica</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{route('user.transparency.control')}}" target="_blank">Ver página</a>
						</td>
					</tr>
					<tr>
						<td width="65%">Recepción de solicitudes de información publica</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="http://mercurioapp.medellin.gov.co/mercurio/inicialPqr.jsp" target="_blank">Ver sitio</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div><button class="accordion">12. Accesibilidad Web</button>
		<div class="panel">
			<table class="table table-bordered table-striped custom-table">
				<tbody>
					<tr>
						<td width="65%">Este sitio web cuenta con una accesibilidad de categoria AA</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Certificado-Accesibilidad-Web-Firmado2024.pdf')}}" target="_blank">Ver certificado</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div><button class="accordion">13. Protección de datos personales</button>
		<div class="panel">
			<table class="table table-bordered table-striped custom-table">
				<tbody>
					<tr>
						<td width="65%">Políticas de seguridad</td>
						<td class="text-center">
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/pol%C3%ADtica-de-manejo-de-datos-personales.pdf')}}" target="_blank">Visitar página</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		-->




	</div>
	<footer class="vlt-single-post__footer">
		<!--Post Tags-->
		<!--Post Share-->
		
	</footer>

@endsection

@push('scripts')

<script src="{{ asset('assets/js/acordion.js')}}"></script>
@endpush
