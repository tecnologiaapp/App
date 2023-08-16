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
				</div><button class="accordion">2021</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Acción MPAL - Formulación inicial 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/FormulacioninicialPlandeAcci%C3%B3nMunicipal2021.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandeAccionMPAL-seguimientoAGOSTOde2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento Junio de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandeAccionMPAL-seguimientoJUNIOde2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento Marzo de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandeAccionMPAL-seguimientoMARZOde2021.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandeAcci%C3%B3nMPAL-Formulacioninicial2020.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandeAccionMPAL-seguimientoOCTUBREde2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción MPAL - Seguimiento AGOSTO de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandeAccionMPAL-seguimientoAGOSTOde2020.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandeAccionMPAL-seguimientoOCTUBREde2019.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandeAccionMPAL-seguimientoMARZOde2019.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandeAcci%C3%B3nMPAL-Formulacioninicial2018.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2017PlandeAcci%C3%B3n.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción 2016</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2016PlandeAcci%C3%B3n.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción 2015</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2015PlandeAcci%C3%B3n.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Acción 2014</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/2014PlandeAcci%C3%B3n.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div><button class="accordion">PLAN DE ACCIÓN INTERNO AGENCIA APP</button>
			<div class="panel">
				<button class="accordion">2022</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Acción interno AGENCIA APP - Primer semestre 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="https://docs.google.com/spreadsheets/d/1DvXN7ROnqfcXrpXwiONXx7O_H_sJsJt9/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2021</button>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandeAcci%C3%B3nAGENCIAAPP-seguimientoJUNIO2021.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandeAcci%C3%B3nAGENCIAAPP-Formulacioninicial2020.pdf')}}" target="_blank">Ver documento</a>
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
				<button class="accordion">2023</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Bienestar Social e Incentivos</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandeBienestarSocialeIncentivos2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Trabajo Anual en Seguridad y Salud en el Trabajo</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandeTrabajoAnualenSeguridadySaludenelTrabajo2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Institucional de Capacitación</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanInstitucionaldeCapacitaci%C3%B3n2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Anual de adquisiciones</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanAnualdeAdquisiciones2023.xlsx')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Prevision de Recursos Humanos</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandePrevisi%C3%B3ndeRecursosHumanos2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Anticorrupción y de Atención al Ciudadano</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanAnticorrupci%C3%B3nydeatenci%C3%B3nalciudadano2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan estrategico de tecnologias de la información y las comunicaciones</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanEstrat%C3%A9gicodeTecnolog%C3%ADasdelaInformaci%C3%B3nylasComunicaciones2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Anual de Auditoria Vigencia 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanAnualdeAuditor%C3%ADaVigencia2023.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanEstrat%C3%A9gicodeTalentoHumano2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan Anual de Vacantes</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanAnualdeVacantes2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de seguridad y privacidad de la información</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandeSeguridadyPrivacidaddelaInformaci%C3%B3n2023.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanAnticorrupci%C3%B3nydeAtenci%C3%B3nalCiudadano2022.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/auditoriavigencia2022.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanInstitucionaldeCapacitaci%C3%B3n2022.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlandePrevisi%C3%B3ndeRecursosHumanos2022.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanEstrat%C3%A9gicodelTalentoHumano2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Politicas de Seguridad Informática AGENCIA APP</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PoliticasdeSeguridadInform%C3%A1ticaAGENCIAAPP.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/plan-de-formacion-y-capacitacion-2021.pdf')}}" target="_blank">Ver documento</a>
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
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/planning/PlanesintegradosApp2020.pdf')}}" target="_blank">Ver documento</a>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/plan-de-acci%C3%B3n" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/plan-de-acci%C3%B3n" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
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
