@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerActosAdministrativos2.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Actos administrativos</h1>
			</div>
		</div>
	</section>

	<!--Content-->
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container table-responsive">

			<table class="table table-bordered table-striped custom-table">
			
				<tbody>
					<tr>
						<td width="20%" class="align-middle">Resolución 098 de 2023</td>
						<td width="50%" class="align-middle">Por la cual se decreta el desistimiento tácito y el archivo de una petición</td>
						<td width="15%" class="align-middle">14 de Agosto de 2023</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/Resolucion-098-2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>
					<tr>
						<td width="20%" class="align-middle">Resolución 082 de 2023</td>
						<td width="50%" class="align-middle">Por medio de la cual se concede un día correspondiente a la segunda jornada semestral del año 2023, para que los servidores públicos de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas - APP, compartan con sus familias</td>
						<td width="15%" class="align-middle">05 de Julio de 2023</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/Resolución-082.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 025 de 2023</td>
						<td width="50%" class="align-middle">Por medio de la cual se modifica la jornada de trabajo para los días 03, 04 y 05 de abril de 2023 y se ordena una compensación</td>
						<td width="15%" class="align-middle">20 de Febrero de 2023</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/Resolución No. 025 Modificación jornada de trabajo (1).pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 001 de 2023</td>
						<td width="50%" class="align-middle">Por medio de la cual se establecen las cuantías para la contratación en la vigencia 2023 de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas</td>
						<td width="15%" class="align-middle">02 de Enero de 2023</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/RESOLUCIÓN 001 ENERO DE 2023 CUANTÍAS.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 016</td>
						<td width="50%" class="align-middle">Por medio de la cual se concede un día correspondiente a la segunda jornada semestral del año 2022, para que los servidores públicos de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas - APP, compartan con sus familias</td>
						<td width="15%" class="align-middle">28 de noviembre de 2022</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/Resolucion N° 016 2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 112</td>
						<td width="50%" class="align-middle">Por medio de la cual se resuelve el recurso de reposición interpuesto frente a la Resolución 111 del 18 de noviembre de mediante la cual se declaró el incumplimiento del contrato de suministro No 2020169SU, y se hizo efectiva la cláusula penal</td>
						<td width="15%" class="align-middle">18 de noviembre de 2022</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/Resolución 112 Recurso de reposición Virtual.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 111</td>
						<td width="50%" class="align-middle">Por medio de la cual se declara el incumplimiento parcial del contrato de suministro N° 2020169SU, celebrado con VIRTUAL S.A.S, se hace efectiva la cláusula penal, y se declara la ocurrencia del siniestro del amparo de cumplimiento respaldado en la póliza No 2738423-8 expedida por SURAMERICANA</td>
						<td width="15%" class="align-middle">18 de noviembre de 2022</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/Resolución 111 Incumplimiento Virtual.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 707 de 2018</td>
						<td width="50%" class="align-middle">Por medio de la cual se adopta el Reglamento Interno del Comité de Conciliación de la Agencia 
para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas - Agencia APP</td>
						<td width="15%" class="align-middle">20 de noviembre de 2018</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/Resolución-707-20nov2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 601 de 2018</td>
						<td width="50%" class="align-middle">Por medio de la cual se crea el Comité de Conciliación de la Agencia para la gestión del paisaje, el patrimonio y las alianzas público privadas</td>
						<td width="15%" class="align-middle">05 de octubre de 2018</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/resolucion-601-5oct2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 080 de 2015</td>
						<td width="50%" class="align-middle">Por medio de la cual se adopta la guía para la Administración del Riesgo para la Agencia para 
la Gestión del Paisaje, el Patrimonio y las Alianzas Público - Privadas -APP</td>
						<td width="15%" class="align-middle">23 de diciembre de 2015</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/Resolución-080.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 288 de 2018</td>
						<td width="50%" class="align-middle">Por medio de la cual se crea el Comité Institucional de Coordinación de Control Interno de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas APP</td>
						<td width="15%" class="align-middle">17 de mayo de 2018</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/Resolución-288.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

				    <tr>
						<td width="20%" class="align-middle">Resolución 026 de 2022</td>
						<td width="50%" class="align-middle">Por medio de la cual se modifica la jornada de trabajo para los días 11, 12 y 13 de abril de 2022 y se ordena una compensación</td>
						<td width="15%" class="align-middle">18 febrero de 2022</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/Resolución-No-026.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 041 de 2020</td>
						<td width="50%" class="align-middle">Por medio de la cual se adopta el Manual de Gestión de Cobro Persuasivo y Coactivo de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas</td>
						<td width="15%" class="align-middle">Agosto 10 de 2020</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/resolucion-041-de-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 029 de 2020</td>
						<td width="50%" class="align-middle">Por medio de la cual se establecen las cuantías para la contratación en la vigencia 2020 de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas</td>
						<td width="15%" class="align-middle">Marzo 29 de 2020</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/resolucion-029-de-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 015 de 2020</td>
						<td width="50%" class="align-middle">Por medio de la cual se modifican las Resoluciones 014 de 2016 y 017 de 2016</td>
						<td width="15%" class="align-middle">Febrero 05 de 2020</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/resolucion-015-de-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 003 de 2020</td>
						<td width="50%" class="align-middle">Por medio de la cual se fija el incremento salarial para los empleados públicos de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas</td>
						<td width="15%" class="align-middle">Enero 14 de 2020</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/resolucion-003-de-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 259 de 2019</td>
						<td width="50%" class="align-middle">Por medio de la cual se establece la Política de Austeridad en el gasto de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas</td>
						<td width="15%" class="align-middle">Noviembre 01 de 2019</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/resolucion-259-de-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 105 de 2019</td>
						<td width="50%" class="align-middle">Por medio de la cual se establece el costo de reproducción de documentos que se expidan por la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas</td>
						<td width="15%" class="align-middle">Julio 17 de 2019</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/resolucion-105-de-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 044 de 2019</td>
						<td width="50%" class="align-middle">Por medio de la cual se deja sin efectos la Resolución 714 de 2018 y se aprueba la actualización de las Tablas de Retención Documental - TDR y las Tablas de Valoración Documental - TVD de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas</td>
						<td width="15%" class="align-middle">Abril 25 de 2019</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/resolucion-044-de-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 043 de 2019</td>
						<td width="50%" class="align-middle">Por medio de la cual se modifica el Comité Institucional de Gestión y Desempeño del Modelo Integrado de Planeación y Gestión MIPG de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas</td>
						<td width="15%" class="align-middle">Abril 11 de 2019</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/resolucion-043-de-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Acuerdo 027 de 2019</td>
						<td width="50%" class="align-middle">Por medio del cual se modifica el manual específico de funciones de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas.</td>
						<td width="15%" class="align-middle">Enero 30 de 2019</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/acuerdo-027-modificacion-manual-de-funciones.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>



					<tr>
						<td width="20%" class="align-middle">Resolución 601 de 2018</td>
						<td width="50%" class="align-middle">Por medio de la cual se crea el Comité de Conciliación de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas</td>
						<td width="15%" class="align-middle">Octubre 05 de 2018</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/resolucion-601-de-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Manual de políticas contables</td>
						<td width="50%" class="align-middle">Por medio del cual se modifican los Estatutos Internos de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas</td>
						<td width="15%" class="align-middle">Enero 01 de 2018</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/manual-de-politicas-contables-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>
					

					

					<tr>
						<td width="20%" class="align-middle">Acuerdo 021 de 2017</td>
						<td width="50%" class="align-middle">Por medio del cual se modifican los Estatutos Internos de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas</td>
						<td width="15%" class="align-middle">Octubre 31 de 2017</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/acuerdo-021-de-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Política de seguridad y salud en el trabajo</td>
						<td width="50%" class="align-middle">La AGENCIA APP en la prestación de sus servicio se encuentra comprometida con la seguridad y salud de sus empleados propios y contratistas en el desarrollo de sus actividades. La AGENCIA APP, mediante la implementación, desarrollo y mejora continua de un Sistema de Gestión de la Seguridad y Salud en el Trabajo tiene como razón fundamental, velar por la prevención de incidentes, accidentes y enfermedades laborales</td>
						<td width="15%" class="align-middle">Agosto 22 de 2017</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/politica-de-seguridad-y-salud-en-el-trabajo.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 114 de 2016</td>
						<td width="50%" class="align-middle">Por medio de la cual se adopta y establece el Sistema de Gestión de Seguridad y Salud en el Trabajo de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas.</td>
						<td width="15%" class="align-middle">Diciembre 28 de 2016</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/resolucion-114-de-2016.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 017 de 2016</td>
						<td width="50%" class="align-middle">Por medio de la cual se crea el Comité de Contratación y apoyo a la Supervisión de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas.</td>
						<td width="15%" class="align-middle">Febrero 16 de 2016</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/resolucion-017-de-2016.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Resolución 014 de 2016</td>
						<td width="50%" class="align-middle">Por medio del cual se modifica la Resolución 039 del 19 de Agosto de 2015. Por medio de la cual se adopta el manual de contratación de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas.</td>
						<td width="15%" class="align-middle">Febrero 08 de 2016</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/resolucion-014-de-2016.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>

					<tr>
						<td width="20%" class="align-middle">Acuerdo 009 de 2015</td>
						<td width="50%" class="align-middle">Por medio del cual se adopta la Estructura Administrativa, el Manual Específico de Funciones y Requisitos, el Sistema de Nomenclatura, Clasificación, Códigos y Denominaciones de los Empleos y se fija la Escala Salarial para los Empleados de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas.</td>
						<td width="15%" class="align-middle">Junio 19 de 2015</td>
						<td width="15%" class="align-middle">
							<a href="{{ asset('assets/pdf/acuerdo-009-de-2015.pdf')}}" class="btn btn-primary btn-block" target="_blank">
								Ver documento
							</a>
						</td>
					</tr>
				</tbody>
			</table>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/actos-administrativos" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/actos-administrativos" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
		</footer>

</div>
</section>
@endsection