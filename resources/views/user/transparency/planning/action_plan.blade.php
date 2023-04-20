@extends('layouts.app')
@section('body_color', '#f3f5fa;')
@section('content')
<head>
<style>
.accordion {
  background-color: transparent;
  color: #444;
  cursor: pointer;
  padding: 22px;
  width: 100%;
  border: 1px;
  text-align: left;
  outline: none;
  font-size: 14px;
  font-family:arial;
  font-weight: bold;
  transition: 0.4s;
  background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
	
  
}

.accordion:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  color: #777;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}

.active, .accordion:hover {
  background-color: rgba(0,0,0,.03); 
}

.panel {
  padding: 12px 20px;
  display: none;
  background-color: transparent;
  overflow: hidden;
}
</style>
</head>


<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">

							<h1 style="color:white;">
							Plan de Acción
							</h1>
		
			</div>

		</div>
		
	</section>

<section>
	<div class="vlt-gap-120"></div>

	<div class="container mt-5">


	<button class="accordion">PLAN DE ACCIÓN MUNICIPAL</button>
	<div class="panel">

	<button class="accordion"> 2022 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>


								<tr>
									<td>Plan de Acción MPAL - Primer bimestre 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Seguimiento-PA-28-Febrero2022_Definitivo.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan de Acción MPAL - Segundo bimestre 2022</td>
									<td> 
										<a href="{{ asset('assets/pdf/planning/Seguimiento PA 30 Abril2022_Definitivo.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>


								<tr>
									<td>Plan de Acción MPAL - Tercer bimestre 2022</td>
									<td> 
										<a href="{{ asset('assets/pdf/planning/Seguimiento PA 30 Junio2022_Definitivo (1).pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								<tr>
									<td>Plan de Acción MPAL - Cuarto bimestre 2022</td>
									<td> 
										<a href="{{ asset('assets/pdf/planning/Seguimiento PA 31 Agosto2022_Definitivo.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								<tr>
									<td>Plan de Acción MPAL - Quinto bimestre 2022</td>
									<td> 
										<a href="{{ asset('assets/pdf/planning/Seguimiento PA 31 Octubre2022_Definitivo.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								<tr>
									<td>Plan de Acción MPAL - Sexto bimestre 2022</td>
									<td> 
										<a href="{{ asset('assets/pdf/planning/Seguimiento PA 31 Diciembre_2022_Defintivo.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

						

						
								</tbody> 
</table>
</div>


	<button class="accordion"> 2021 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>

                                <tr>
									<td>Plan de Acción MPAL - Formulación inicial 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Formulacion inicial Plan de Acción Municipal 2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan de Acción MPAL - Seguimiento Diciembre de 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/MPA-Seguimiento-DICIEMBRE-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan de Acción MPAL - Seguimiento Septiembre de 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/MPAL-Seguimiento-SEPTIEMBRE-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan de Acción MPAL - Seguimiento Agosto de 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Accion MPAL - seguimiento AGOSTO de 2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan de Acción MPAL - Seguimiento Junio de 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Accion MPAL - seguimiento JUNIO de 2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan de Acción MPAL - Seguimiento Marzo de 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Accion MPAL - seguimiento MARZO de 2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								</tbody> 
</table>
</div>

<button class="accordion"> 2020 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table"> 
	<tbody>
                                <tr>
									<td>Plan de Acción MPAL - Formulación inicial 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Acción MPAL - Formulacion inicial 2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan de Acción MPAL - Seguimiento DICIEMBRE de 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/seguimiento-plan-de-accion-31-diciembre-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan de Acción MPAL - Seguimiento OCTUBRE de 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Accion MPAL - seguimiento OCTUBRE de 2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Plan de Acción MPAL - Seguimiento AGOSTO de 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Accion MPAL - seguimiento AGOSTO de 2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								</tbody>
</table>
</div>

<button class="accordion"> 2019 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
									<td>Plan de Acción MPAL - Seguimiento DICIEMBRE de 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/seguimiento-plan-de-accion-31-dic-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								
	<tr>
									<td>Plan de Acción MPAL - Seguimiento OCTUBRE de 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Accion MPAL - seguimiento OCTUBRE de 2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

														
	<tr>
									<td>Plan de Acción MPAL - Seguimiento JUNIO de 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/seguimiento-junio-plan-de-accion-municipal-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

																
	<tr>
									<td>Plan de Acción MPAL - Seguimiento MARZO de 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Accion MPAL - seguimiento MARZO de 2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								</tbody> 
</table>
</div>


<button class="accordion"> 2018 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
									<td>Plan de Acción MPAL - Formulación inicial 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Acción MPAL - Formulacion inicial 2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								
	<tr>
									<td>Plan de Acción MPAL - Seguimiento DICIEMBRE de 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/seguimiento-diciembre-plan-de-accion-municipal-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

														
	<tr>
									<td>Plan de Acción MPAL - Seguimiento MARZO de 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/seguimiento-marzo-plan-de-accion-municipal-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>
								</tbody> 
</table>
</div>


<button class="accordion"> 2014 -2017 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
									<td>Plan de Acción 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/2017 Plan de Acción.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								
	<tr>
									<td>Plan de Acción 2016</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/2016 Plan de Acción.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

														
	<tr>
									<td>Plan de Acción 2015</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/2015 Plan de Acción.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>
										
<tr>
									<td>Plan de Acción 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/2014 Plan de Acción.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>
								</tbody> 
</table>
</div>



      </div>

	  <button class="accordion">PLAN DE ACCIÓN INTERNO AGENCIA APP</button>
	  <div class="panel">

	  <button class="accordion"> 2022 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>


								<tr>
									<td>Plan de Acción interno AGENCIA APP - Primer semestre 2022</td>
									<td>
										<a href="https://docs.google.com/spreadsheets/d/1DvXN7ROnqfcXrpXwiONXx7O_H_sJsJt9/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

                           

								</tbody> 
</table>
</div>


	  <button class="accordion"> 2021 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>

	<tr>
									<td>Plan de Acción AGENCIA APP - Diciembre 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/plan-de-accion-diciembre-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

	<tr>
									<td>Plan de Acción AGENCIA APP - Seguimiento Septiembre 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/septiembre.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

	<tr>
									<td>Plan de Acción AGENCIA APP - Seguimiento Junio 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Acción AGENCIA APP - seguimiento JUNIO 2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

	<tr>
									<td>Plan de Acción AGENCIA APP - Seguimiento Marzo 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/seguimiento-marzo-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>



	<tr>
									<td>Plan de Acción AGENCIA APP - Formulación inicial 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/plan-de-accion-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								


														
	
								</tbody> 
</table>
</div>


<button class="accordion"> 2020 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
									<td>Plan de Acción AGENCIA APP - Formulación inicial 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Acción AGENCIA APP - Formulacion inicial 2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								
	<tr>
									<td>Plan de Acción AGENCIA APP - Seguimiento DICIEMBRE 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/seguimiento-plan-de-accion-31-dic-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

														
	<tr>
									<td>Plan de Acción AGENCIA APP - Seguimiento SEPTIEMBRE 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/seguimiento-septiembre-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>

							
<tr>
									<td>Plan de Acción AGENCIA APP - Seguimiento JUNIO 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/seguimiento-junio-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>

			
<tr>
									<td>Plan de Acción AGENCIA APP - Seguimiento MARZO 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/seguimiento-marzo-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>
								</tbody> 
</table>
</div>

<button class="accordion"> 2013 - 2019 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
									<td>Plan de Acción AGENCIA APP - 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/plan-de-accion-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								
	<tr>
									<td>Plan de Acción AGENCIA APP - 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/plan-de-accion-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

														
	<tr>
									<td>Plan de Acción AGENCIA APP - 2016</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/plan-de-accion-2016.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>

							
<tr>
									<td>Plan de Acción AGENCIA APP - 2015</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/plan-de-accion-2015.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>

			
<tr>
									<td>Plan de Acción AGENCIA APP - 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/plan-de-accion-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>

		
<tr>
									<td>Plan de Acción AGENCIA APP - 2013</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/plan-de-accion-2013.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>
								</tbody> 
</table>
</div>

      


	  </div>

	  <button class="accordion">PLANES INSTITUCIONALES</button>
	  <div class="panel">

	  <button class="accordion">2023</button>
<div class="panel">

<table class="table table-bordered table-striped custom-table">
								<tbody>

								<tr>  
									<td>Plan de Bienestar Social e Incentivos</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Bienestar Social e Incentivos 2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>  
									<td>Plan de Trabajo Anual en Seguridad y Salud en el Trabajo</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Trabajo Anual en Seguridad y Salud en el Trabajo 2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>  
									<td>Plan Institucional de Capacitación</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Institucional de Capacitación 2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>  
									<td>Plan Anual de adquisiciones</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Anual de Adquisiciones  2023.xlsx')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>  
									<td>Plan de Prevision de Recursos Humanos</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Previsión de Recursos Humanos 2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>  
									<td>Plan Anticorrupción y de Atención al Ciudadano</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Anticorrupción y de atención al ciudadano 2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>  
									<td>Plan estrategico de tecnologias de la información y las comunicaciones</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Estratégico de Tecnologías de la Información y las Comunicaciones 2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>  
									<td>Plan Anual de Auditoria Vigencia 2023</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Anual de Auditoría Vigencia 2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>  
									<td>Plan Institucional de archivos PINAR</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Institucional de Archivos PINAR.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>  
									<td>Plan Estrategico de talento humano</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Estratégico de Talento Humano 2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>  
									<td>Plan Anual de Vacantes</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Anual de Vacantes 2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>  
									<td>Plan de seguridad y privacidad de la información</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Seguridad y Privacidad de la Información 2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
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
									<td>Plan de acción interno 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/interno-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>


	<tr>  
									<td>Pinar 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/PINAR APP 2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
							<td>Plan anual de adquisiciones 2022 - Enero</td>
							<td>
								<a href="https://docs.google.com/spreadsheets/d/1DeuXdPKC0V8hM9guGNf3aCjDHk6PQB-g/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" class="btn btn-primary btn-block" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>

								<tr>
									<td>plan anual de auditoria 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/control/auditoria vigencia 2022.pdf') }}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>plan estrategico de las tecnologias de la información</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/PETI AGENCIA APP.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								
	<tr>
									<td>plan anual de vacantes 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Anual de Vacantes 2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

														
	<tr>
									<td>plan de formacion y capacitacion 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Institucional de Capacitación 2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>

							
<tr>
									<td>plan de bienestar e incentivos institucionales de 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Bienestar e Incentivos 2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>

			
<tr>
									<td>plan de prevision de recursos humanos 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de Previsión de Recursos Humanos 2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>

		
<tr>
									<td>plan de trabajo anual en seguridad y salud en el trabajo 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan de seguridad y Salud en el Trabajo 2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>



<tr>
									<td>plan estrategico de talento humano 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Plan Estratégico del Talento Humano 2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>

<tr>
									<td>Politicas de Seguridad Informática AGENCIA APP</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Politicas de Seguridad Informática AGENCIA APP.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
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
									<td>Pinar 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/pinar-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								
								<tr>
							<td>Plan anual de adquisiciones 2021</td>
							<td>
								<a href="https://docs.google.com/spreadsheets/d/18jcqfcaLWccXGsODWu6-1289i_ankRnk/edit?usp=sharing&ouid=104733248520379142858&rtpof=true&sd=true" class="btn btn-primary btn-block" target="_blank">
									Ver documento
								</a>
							</td>
						</tr>


								
	<tr>
									<td>plan anual de vacantes 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/plan-anual-de-vacantes-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

														
	<tr>
									<td>plan de formacion y capacitacion 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/plan-de-formacion- y-capacitacion-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>

							
<tr>
									<td>plan de incentivos institucionales de 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/plan-de-incentivos-institucionales-de-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>

			
<tr>
									<td>plan de prevision de recursos humanos 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/plan-de-prevision-de-recursos-humanos-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>

		
<tr>
									<td>plan de trabajo anual en seguridad y salud en el trabajo 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/plan-de-trabajo-anual-en-seguridad-y-salud-en-el-trabajo-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>

<tr>
									<td>plan de tratamiento de riesgos de seguridad y privacidad de la informacion 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/plan-de-tratamiento-de-riesgos-de-seguridad-y-privacidad-de-la-informacion-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>

<tr>
									<td>plan estrategico de talento humano 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/plan-estrategico-de-talento-humano-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
</tr>
								</tbody> 
</table>
</div>


<button class="accordion">2020</button>
<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
									<td>Planes integrados App 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/Planes integrados App 2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								
	<tr>
									<td>Resolución 013 - integración planes institucionales 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/planning/resolucion-013-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								</tbody> 
</table>
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
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/plan-de-acción" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/plan-de-acción" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
			                     </div>
	                	</div>
	                 </div>
	                      <div class="vlt-gap-100"></div>   
              </section>						</footer>


@endsection

@push('scripts')

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
@endpush
