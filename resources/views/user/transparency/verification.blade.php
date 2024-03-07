@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')
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
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Contratos-2024.pdf')}}" target="_blank">Ver documento</a>
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
							<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/8. Contratacion/RELACION-DE-CONTRATOS-2024-CORTE-DE-FEBRERO.pdf')}}" target="_blank">Visitar página</a>
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
							<a class="btn btn-primary btn-block" href="https://www.medellin.gov.co/es/wp-content/uploads/2022/08/Manual-de-servicio-a-la-ciudadania-2020_compressed.pdf" target="_blank">Ver página</a>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/transparencia/general" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/transparencia/general" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection

@push('scripts')

<script src="{{ asset('assets/js/acordion.js')}}"></script>
@endpush
