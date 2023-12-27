@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')
<head>
<link rel="stylesheet" href="{{ asset('assets/css/transparency.css')}}">
</head>

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerControl.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Control interno</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="vlt-gap-120"></div><!--Particle-->
		<div class="vlt-particle" data-jarallax-element="-500 10"><img alt="" src="{{asset('assets/img/Banners/particle-01--black.png')}}" width="200"></div><!--Particle-->
		<div class="container mt-5">
			<h5>Aquí encontrarás los informes, planes de mejoramiento y mecanismos de control y supervisión:</h5>
		</div>
		<div class="container mt-5">
			<div aria-labelledby="headingOne" class="collapse show" data-parent="#controlAccordion" id="linksOfInterest">
				<div class="card-body">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<th>Entidades de control</th>
								<th>Sitio web</th>
							</tr>
							<tr>
								<td>Contraloría de Medellín</td>
								<td>
									<a class="btn btn-primary btn-block" href="https://www.cgm.gov.co/cgm/Paginaweb/SitePages/home.aspx" target="_blank">Ver sitio</a>
								</td>
							</tr>
							<tr>
								<td>Alcaldía de Medellín</td>
								<td>
									<a class="btn btn-primary btn-block" href="http://www.medellin.gov.co/irj/portal/medellin" target="_blank">Ver sitio</a>
								</td>
							</tr>
							<tr>
								<td>Concejo de Medellín</td>
								<td>
									<a class="btn btn-primary btn-block" href="https://www.concejodemedellin.gov.co/" target="_blank">Ver sitio</a>
								</td>
							</tr>
							<tr>
								<td>Departamento Nacional de Planeación</td>
								<td>
									<a class="btn btn-primary btn-block" href="https://www.dnp.gov.co/DNPN/Paginas/default.aspx" target="_blank">Ver sitio</a>
								</td>
							</tr>
							<tr>
								<td>Contaduría General de la Nación</td>
								<td>
									<a class="btn btn-primary btn-block" href="https://www.contaduria.gov.co/" target="_blank">Ver sitio</a>
								</td>
							</tr>
							<tr>
								<td>Procuraduría</td>
								<td>
									<a class="btn btn-primary btn-block" href="http://www.procuraduria.gov.co/portal/Antecedentes-disciplinarios.page" target="_blank">Ver sitio</a>
								</td>
							</tr>
							<tr>
								<td>Fiscalía</td>
								<td>
									<a class="btn btn-primary btn-block" href="https://www.fiscalia.gov.co/colombia/" target="_blank">Ver sitio</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div><button class="accordion">Informes de control</button>
			<div class="panel">
				<button class="accordion">2023</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
						<tr>
								<td>Informe de Gestión y comité de conciliación segundo semestre 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/Informe-de-gestion-SEGUNDO-SEMESTRE.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de Gestión y comité de conciliación primer semestre 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/conciliacion-primer-semestre.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan anual de auditoria 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/plan-auditoria-2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Mapa de riesgos de corrupción de 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/MapadeRiesgosdeCorrupción2023.xlsx')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2022</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan anual de auditoria</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/auditoriavigencia2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Mapa de riesgos de corrupción de 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/MapadeRiesgosdeCorrupción2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2021</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Acta No. 01 del comité institucional - Coordinador de control interno</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/control-interno.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de gestion control interno 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/InformedegestionCONTROLINTERNO2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Mapa de riesgos de corrupción de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/mapa-de-riesgos-de-corrupcion-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div><button class="accordion">Rendición de cuentas</button>
			<div class="panel">
				<button class="accordion">2022</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<!-- <tr>
                                    <td>Plan anual de auditoria</td>
                                    <td>
                                        <a href="{{ asset('assets/pdf/control/auditoria vigencia 2022.pdf') }}" class="btn btn-primary btn-block" target="_blank">
                                            Ver documento
                                        </a>
                                    </td>
                                </tr> -->
						</tbody>
					</table>
				</div><button class="accordion">2021</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe de Evaluación al Proceso de Rendición de Cuentas 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/InformedeEvaluaci%C3%B3nalProcesodeRendici%C3%B3ndeCuentas2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Rendición de cuentas 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Rendici%C3%B3n-de-cuentas-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2020</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Rendición de cuentas 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/Rendicion-2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div><button class="accordion">Informes pormenorizado del Estado de Control Interno</button>
			<div class="panel">
			<button class="accordion">2023</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe pormenorizado de control interno Junio 30 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/INFORME PORMENORIZADO AGENCIA APP 2023  - Corte Junio 30.pdf')}}" target="_blank">Ver documento</a>
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
								<td>Informe pormenorizado de control interno Diciembre 30 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/AutoevaluacionSistemadeControlInternoVigencia2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe pormenorizado de control interno Junio 30 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/APP2022-CorteJunio-30.pdf')}}" target="_blank">Ver documento</a>
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
								<td>Informe pormenorizado de control interno diciembre 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/INFORMEPORMENORIZADOAGENCIAAPP2021-CorteDiciembre30.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe pormenorizado de control interno al 30 de junio 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/INFORMEPORMENORIZADOAGENCIAAPP2021-CorteJunio30.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe pormenorizado de control interno al 27 de enero 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/informe-pormenorizado-control-interno-enero-27-de-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2020</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe pormenorizado de control interno 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/informe-pormenorizado-control-interno-2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2019</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe pormenorizado del 1 de noviembre al 31 de diciembre de 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/informe-pormenorizado-31-dic-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe pormenorizado al 12 de noviembre de 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/informe-pormenorizado-12-nov-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe pormenorizado a abril de 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/informe-pormenorizado-control-interno-abril-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2018</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe pormenorizado III de control interno - 2018</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/informe-pormenorizado-iii-control-interno-2018.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe pormenorizado II de control interno - 2018</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/informe-pormenorizado-ii-control-interno-2018.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div><button class="accordion">Informes de peticiones, quejas, reclamos y sugerencias - PQRS</button>
			<div class="panel">
				<button class="accordion">2023</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe de PQRSD - Primer trimestre de 2023</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/pqrs/primer-trimestre-2023.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2022</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe de PQRSD - Cuarto trimestre de 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/pqrs/cuarto-Trimestre-2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de PQRSD - Tercer trimestre de 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/pqrs/InformePQRSD3%C2%B0Trimestre2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de PQRSD - Segundo trimestre de 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/pqrs/InformePQRSD2%C2%B0Trimestre2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de PQRSD - Primer trimestre de 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/pqrs/InformePQRSD1%C2%B0Trimestre2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2021</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe de PQRSD - Segundo semestre de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/pqrs/InformePQRSDcortesegundoSemestreJulio01al30Diciembre2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de PQRSD - Segundo trimestre de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/pqrs/InformePQRSDcortesegundotrimestre2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de PQRSD - Primer trimestre de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/pqrs/informe-enero-1-a-marzo-30-del-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2020</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe de PQRSD desde el 1 enero al 30 diciembre de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/pqrs/informe-enero-1-a-diciembre-30-del-2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2019</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe de PQRSD - Segundo semestre de 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/pqrs/informe-de-estados-pqrsd-de-julio-a-diciembre-de-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de PQRSD - Primer semestre de 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/pqrs/informe-de-estados-pqrsd-primer-semestre-de-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div><button class="accordion">Informes de austeridad en el gasto</button>
			<div class="panel">
				<button class="accordion">2022</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe de austeridad - Tercer trimestre de 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/austerity/Tercer-trimestre-2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de austeridad - Segundo trimestre de 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/austerity/segundo-trimestre-de-2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2021</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe de austeridad - Tercer trimestre de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/austerity/tercer-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de austeridad - Segundo trimestre de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/austerity/informedeausteridadenelgastosegundotrimestrede2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de austeridad - Primer trimestre de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/austerity/informe-de-austeridad-primer-trimestre-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2020</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe de austeridad - Cuarto trimestre de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/austerity/informe-de-austeridad-cuarto-trimestre-2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de austeridad - Tercer trimestre de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/austerity/informe-de-austeridad-tercer-trimestre-2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de austeridad - Segundo trimestre de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/austerity/informe-de-austeridad-segundo-trimestre-2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de austeridad - Primer trimestre de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/austerity/informe-de-austeridad-primer-trimestre-2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2019</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe de austeridad en el gasto de octubre a diciembre de 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/austerity/informe-de-austeridad-en-el-gasto-de-octubre-diciembre-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de austeridad en el gasto de julio a septiembre de 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/austerity/informe-de-austeridad-en-el-gasto-de-julio-septiembre-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de austeridad en el gasto de enero a junio de 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/austerity/informe-de-austeridad-en-el-gasto-de-enero-junio-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div><button class="accordion">Plan anual de auditoría</button>
			<div class="panel">
				<button class="accordion">2022</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe de Gestión y comité de conciliación segundo semestre 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/INFORMEDEGESTI%C3%93NSEGUNDOSEMESTRE.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan anual de auditoria de 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/auditoriavigencia2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Presentación plan de auditorias de 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/PresentacionPlandeAuditorias2022AgenciaAPP.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2021</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan anual de auditoria de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/plan-anual-de-auditoria-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Informe de Gestión y de la ejecución de decisiones comité de conciliación</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/InformedeGestionydelaejecuciondedecisionescomitedeconciliacion.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Decreto 1716 de 2009</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/Decreto_1716_de_2009.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2020</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan anual de auditoria de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/audit/plan-anual-de-auditoria-2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2019</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Acta Comité Coordinador Control Interno | Modificación al plan anual de auditoría - Vigencia 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/audit/acta-del-comite-coordinador-control-interno-modificacion-del-plan-anual-auditoria-vigencia-de-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Modificación al plan anual de auditoría - Vigencia 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/audit/modificacion-del-plan-anual-auditoria-vigencia-de-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan anual de auditoría - Vigencia 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/audit/plan-anual-auditoria-vigencia-de-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div><button class="accordion">Planes de mejoramiento</button>
			<div class="panel">
				<button class="accordion">2022</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Plan de Mejoramiento Subdirección APP 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/PlandeMejoramientoSubdireccionAPP2022.xlsx')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de Mejoramiento Auditoría GH 2022</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/PlandeMejoramientoAuditor%C3%ADaGH.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr><!-- <tr>
                                    <td>Guia para la administración de riesgos 2022 </td>
                                    <td>
                                        <a href="{{ asset('assets/pdf/control/Resolución Guía Administración del Riesgo AGENCIA APP 2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
                                            Ver documento
                                        </a>
                                    </td>
                                </tr> -->
						</tbody>
					</table>
				</div><button class="accordion">2021 - 2020</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Seguimiento al plan de mejoramiento 2021 - Auditoria financiera y de gestion, vigencia 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/mejoramiento-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2019</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Seguimiento al plan de mejoramiento ITA-02 - diciembre de 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/seguimiento-al-plan-de-mejoramiento-ita-02-diciembre-de-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Seguimiento al plan de mejoramiento - Auditoría a la gestión financiera en noviembre 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/seguimiento-al-plan-de-mejoramiento-auditoria-a-la-gestion-financiera-en-noviembre-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de mejoramiento - Índice de transparencia y acceso a la información en 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/plan-de-mejoramiento-indice-de-transparencia-y-acceso-a-la-informacion-en-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de mejoramiento - Auditoría a la gestión de compras en noviembre de 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/plan-de-mejoramiento-auditoria-a-la-gestion-de-compras-en-noviembre-de-2019.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Plan de mejoramiento único</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/plan-de-mejoramiento-unico.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div><button class="accordion">Informes de defensa judicial</button>
			<div class="panel">
				<button class="accordion">2022</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<!-- <tr>
                                    <td>Guia para la administración de riesgos 2022 </td>
                                    <td>
                                        <a href="{{ asset('assets/pdf/control/Resolución Guía Administración del Riesgo AGENCIA APP 2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
                                            Ver documento
                                        </a>
                                    </td>
                                </tr> -->
						</tbody>
					</table>
				</div><button class="accordion">2021</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe de defensa judicial - 28 de enero de 2021</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/informe-de-defensa-judicial-28-enero-2021.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2020</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe de defensa judicial - 15 de octubre de 2020</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/informe-de-defensa-judicial-15-de-octubre-de-2020.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div><button class="accordion">2019</button>
				<div class="panel">
					<table class="table table-bordered table-striped custom-table">
						<tbody>
							<tr>
								<td>Informe de defensa judicial - Vigencia 2016 a 2019</td>
								<td>
									<a class="btn btn-primary btn-block" href="{{asset('assets/pdf/control/informede-defensa-judicial-vigencia-2016-a-2019.pdf')}}" target="_blank">Ver documento</a>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/transparencia/control" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/transparencia/control" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection

@push('scripts')
<script src="{{ asset('assets/js/acordion.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endpush
