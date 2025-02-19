@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')
<head>
<link rel="stylesheet" href="{{ asset('assets/css/transparency.css')}}">
</head>

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerPlanDeAccion.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Plan de acción</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container mt-5">
			<button class="accordion">PLAN DE ACCIÓN MUNICIPAL</button>
			<div class="panel">
			<button class="accordion">2024</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
						    <tr>
								<td>Plan de Acción MPAL - Octubre 2024</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PLAN-DE-ACCION-DEFINITIVO-CORTE-OCTUBRE-2024.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						    <tr>
								<td>Plan de Acción MPAL - Agosto 2024</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Seguimiento_PA_31Agosto2024_Definitivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Julio 2024</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Seguimiento-PA_31julio-2024_Definitivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							</tbody>
					</table>
				</div>
				<button class="accordion">2023</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Acción MPAL - Primer bimestre 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{ asset('assets/pdf/planning/2023/Seguimiento-PA-28-Febrero-2023_Definitivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Segundo bimestre 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2023/Seguimiento Plan de Acción 30 de Abril de 2023 - Definitivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Tercer bimestre 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2023/Seguimiento PA_ 30Junio 2023_Definitivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Cuarto bimestre 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2023/Seguimiento PA_ 31Agosto 2023_Definitivo (1).pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Quinto bimestre 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2023/Seguimiento PA_ 31Octubre2023_Preliminar.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<!-- <tr>
								<td>Plan de Acción MPAL - Sexto bimestre 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/SeguimientoPA31Diciembre_2022_Defintivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr> -->
						</tbody>
					</table>
				</div>
				<button class="accordion">2022</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Acción MPAL - Primer bimestre 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Seguimiento-PA-28-Febrero2022_Definitivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Segundo bimestre 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/SeguimientoPA30Abril2022_Definitivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Tercer bimestre 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/SeguimientoPA30Junio2022_Definitivo(1).pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Cuarto bimestre 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/SeguimientoPA31Agosto2022_Definitivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Quinto bimestre 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/SeguimientoPA31Octubre2022_Definitivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Sexto bimestre 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/SeguimientoPA31Diciembre_2022_Defintivo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<button class="accordion">2021</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Acción MPAL - Formulación inicial 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/FormulacioninicialPlandeAcciónMunicipal2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento Diciembre de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/MPA-Seguimiento-DICIEMBRE-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento Septiembre de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/MPAL-Seguimiento-SEPTIEMBRE-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento Agosto de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan de Accion MPAL - seguimiento AGOSTO de 2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento Junio de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan de Accion MPAL - seguimiento JUNIO de 2021.pdf')}}" target="_blank">Ver documento</a>
								</td> 
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento Marzo de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan de Accion MPAL - seguimiento MARZO de 2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2020</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Acción MPAL - Formulación inicial 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan de Acción MPAL - Formulacion inicial 2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento DICIEMBRE de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-plan-de-accion-31-diciembre-2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento OCTUBRE de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan de Accion MPAL - seguimiento OCTUBRE de 2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento AGOSTO de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan de Accion MPAL - seguimiento AGOSTO de 2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2019</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento DICIEMBRE de 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-plan-de-accion-31-dic-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento OCTUBRE de 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan de Accion MPAL - seguimiento OCTUBRE de 2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento JUNIO de 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-junio-plan-de-accion-municipal-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento MARZO de 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan de Accion MPAL - seguimiento MARZO de 2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2018</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Acción MPAL - Formulación inicial 2018</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan de Acción MPAL - Formulacion inicial 2018.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento DICIEMBRE de 2018</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-diciembre-plan-de-accion-municipal-2018.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento MARZO de 2018</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-marzo-plan-de-accion-municipal-2018.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2014 -2017</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Acción 2017</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2017 Plan de Acción.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción 2016</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2016 Plan de Acción.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción 2015</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2015 Plan de Acción.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción 2014</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2014 Plan de Acción.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div><button class="accordion">PLAN DE ACCIÓN INTERNO AGENCIA APP</button>
			<div class="panel">
			<button class="accordion">2024</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Acción Interno Anual- AGENCIA APP 2024</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/Plandeacción-diciembre2024.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<button class="accordion">2023</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Acción interno AGENCIA APP - Primer semestre 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2023/Seguimiento PAI 1° Semestre 2023 Consolidado.xlsx')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción interno AGENCIA APP - 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2023/Plan de Acción Interno Consolidado Vigencia 2023.xlsx')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<button class="accordion">2022</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Acción interno AGENCIA APP - Segundo semestre 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2022/Seguimiento PAI Consolidado 2° Semestre 2022.xlsx')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción interno AGENCIA APP - Primer semestre 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="https://docs.google.com/spreadsheets/d/1DvXN7ROnqfcXrpXwiONXx7O_H_sJsJt9/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<button class="accordion">2021</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Acción AGENCIA APP - Diciembre 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-de-accion-diciembre-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción AGENCIA APP - Seguimiento Septiembre 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/septiembre.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción AGENCIA APP - Seguimiento Junio 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan de Acción AGENCIA APP - seguimiento JUNIO 2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción AGENCIA APP - Seguimiento Marzo 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-marzo-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción AGENCIA APP - Formulación inicial 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-de-accion-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2020</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Acción AGENCIA APP - Formulación inicial 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan de Acción AGENCIA APP - Formulacion inicial 2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción AGENCIA APP - Seguimiento DICIEMBRE 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-plan-de-accion-31-dic-2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción AGENCIA APP - Seguimiento SEPTIEMBRE 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-septiembre-2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción AGENCIA APP - Seguimiento JUNIO 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-junio-2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción AGENCIA APP - Seguimiento MARZO 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/seguimiento-marzo-2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2013 - 2019</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Acción AGENCIA APP - 2018</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-de-accion-2018.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción AGENCIA APP - 2017</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-de-accion-2017.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción AGENCIA APP - 2016</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-de-accion-2016.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción AGENCIA APP - 2015</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-de-accion-2015.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción AGENCIA APP - 2014</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-de-accion-2014.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción AGENCIA APP - 2013</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-de-accion-2013.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div><button class="accordion">PLANES INSTITUCIONALES</button>
			<div class="panel">
			<button class="accordion">2025</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Resolución 014 de 2025 - Planes Institucionales</td>
								<td>
									<a class="btn btn-primary btn-block" href="#" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td> Plan Anual de Adquisiciones</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2-Plan-Anual-de-Adquisiciones.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Anual de Vacantes y Previsión de Recursos Humanos</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/3.Plan-Anual-de-VacantesyPrevisión-de-Recursos-Humanos.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Estratégico de Talento Humano</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/5.Plan-Estratégico-de-Talento-Humano.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Institucional de Capacitación</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/6.PlanInstitucionaldeCapacitación.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Incentivos Institucionales</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/7.PlandeIncentivosInstitucionales.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Trabajo Anual en Seguridad y Salud en el Trabajo</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/8.PlandeTrabajoAnualenSeguridadySaludenelTrabajo.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Anticorrupción y de Atención al Ciudadano</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/9.PlanAnticorrupciónydeAtenciónalCiudadano.xlsx')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Estratégico de Tecnologías de la Información y las Comunicaciones - PETI</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/10.PlanEstratégicodeTecnologíasdelaInformaciónylasComunicaciones-PETI.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Tratamiento de Riesgos de Seguridad y Privacidad de la Información</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/11.PlandeTratamientodeRiesgosdeSeguridadyPrivacidaddelaInformación.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Politicas de Seguridad y Privacidad de la Informacion</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/12.PoliticasdeSeguridadyPrivacidaddelaInformacion.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<button class="accordion">2024</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
						<tr>
								<td>Resolucion 17 de 2024 Planes Institucionales</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/Resolucion-17-de-2024-PlanesInstitucionale.pdf')}}" target="_blank">Ver documento</a>
								</td>
							<tr>
								<td>Plan Institucional de archivos de la Entidad-PINAR</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/PlanInstitucionaldeArchivosPINAR2024.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Anual de adquisiciones</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/Plan-Anual-de-Adquisiciones-2024.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Anual de Vacantes</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/planningPlan-Anual-de-Vacantes2024.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Prevision de Recursos Humanos</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/Plan-de-Previsión-de-Recursos-Humanos-2024.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Estrategico de talento humano</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/Plan-Estratégico-de-Talento-Humano-2024.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Institucional de Capacitación</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/Plan-Institucional-de-Capacitación-2024.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Bienestar e Incentivos</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/Plan-de-Incentivos-Institucionales-2024.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							</tr>
								<td>Plan de Trabajo Anual en Seguridad y Salud en el Trabajo</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/Plan-de-Trabajo-Anual-en-Seguridad-y-Salud-en-el-Trabajo-2024.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Anticorrupción y de Atención al Ciudadano</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/Plan-Anticorrupción-y-de-atención-al-ciudadano-2024.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan estrategico de tecnologias de la información y las comunicaciones</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/Plan-Estrategico-de-la-Tecnologia-de-la-Informacion-y-las-comunicaciones-PETI-2024.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Tratamiento de Riesgo de Seguridad y Privavidad de la Información</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/Plan-de-tratamiento-de-riesgos-de-seguridad-de-la-informacion-2024.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Seguridad y Privacidad de la Informacion</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2024/Politicas-de-Seguridad-y-Privacidad-de-la-Informacion-2024.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							</tr>
						</tbody>
					</table>
					</div><button class="accordion">2023</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Bienestar Social e Incentivos</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan de Bienestar Social e Incentivos 2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Trabajo Anual en Seguridad y Salud en el Trabajo</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan de Trabajo Anual en Seguridad y Salud en el Trabajo 2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Institucional de Capacitación</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Institucional de Capacitación 2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Anual de adquisiciones</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Anual de Adquisiciones 2023.xlsx')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Prevision de Recursos Humanos</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan de Previsión de Recursos Humanos 2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Anticorrupción y de Atención al Ciudadano</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Anticorrupción y de atención al ciudadano 2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan estrategico de tecnologias de la información y las comunicaciones</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Estratégico de Tecnologías de la Información y las Comunicaciones 2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Anual de Auditoria Vigencia 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Anual de Auditoría Vigencia 2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Institucional de archivos PINAR</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanInstitucionaldeArchivosPINAR.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Estrategico de talento humano</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Estratégico de Talento Humano 2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Anual de Vacantes</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan Anual de Vacantes 2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de seguridad y privacidad de la información</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Plan de Seguridad y Privacidad de la Información 2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2022</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan anticorrupción y atención al ciudadano 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanAnticorrupciónydeAtenciónalCiudadano2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de acción interno 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/interno-2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Pinar 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PINARAPP2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan anual de adquisiciones 2022 - Enero</td>
								<td>
									<a class="btn btn-primary btn-block" href="https://docs.google.com/spreadsheets/d/1DeuXdPKC0V8hM9guGNf3aCjDHk6PQB-g/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>plan anual de auditoria 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/auditoria vigencia 2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>plan estrategico de las tecnologias de la información</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PETIAGENCIAAPP.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>plan anual de vacantes 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanAnualdeVacantes2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>plan de formacion y capacitacion 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanInstitucionaldeCapacitación2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>plan de bienestar e incentivos institucionales de 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandeBienestareIncentivos2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>plan de prevision de recursos humanos 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandePrevisióndeRecursosHumanos2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>plan de trabajo anual en seguridad y salud en el trabajo 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandeseguridadySaludenelTrabajo2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>plan estrategico de talento humano 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanEstratégicodelTalentoHumano2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Politicas de Seguridad Informática AGENCIA APP</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PoliticasdeSeguridadInformáticaAGENCIAAPP.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2021</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Pinar 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/pinar-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan anual de adquisiciones 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="https://docs.google.com/spreadsheets/d/18jcqfcaLWccXGsODWu6-1289i_ankRnk/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>plan anual de vacantes 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-anual-de-vacantes-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>plan de formacion y capacitacion 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-de-formacion-capacitacion-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>plan de incentivos institucionales de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-de-incentivos-institucionales-de-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>plan de prevision de recursos humanos 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-de-prevision-de-recursos-humanos-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>plan de trabajo anual en seguridad y salud en el trabajo 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-de-trabajo-anual-en-seguridad-y-salud-en-el-trabajo-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>plan de tratamiento de riesgos de seguridad y privacidad de la informacion 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-de-tratamiento-de-riesgos-de-seguridad-y-privacidad-de-la-informacion-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>plan estrategico de talento humano 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-estrategico-de-talento-humano-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2020</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Planes integrados App 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/Planes integrados App 2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Resolución 013 - integración planes institucionales 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/resolucion-013-2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/plan-de-acción" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/plan-de-acción" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
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
