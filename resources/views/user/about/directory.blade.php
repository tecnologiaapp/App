@extends('layouts.app')
@section('body_color', '#bcdcff40;')
@section('content')

<section>
	<!--Page Title Hero-->
	<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
		<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
		<div class="vlt-page-title-hero__content">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<h1 class="vlt-page-title-hero__title" style="text-transform: none;">Directorio
						</h1>
						<div class="vlt-post-meta vlt-display-1"><span>AGENCIA APP</span><span>Actualizado en Febrero 12 de 2021</span></div>
					</div>
				</div>
			</div>
		</div><a class="vlt-scroll-to-arrow" href="#content"><i class="leedo-download-arrow"></i></a>
	</div>
	<div id="content"></div>
</section>

<section>
	<div class="vlt-gap-120"></div>
	<div class="container">
		<p>
			En cumplimiento a lo estipulado en la Ley de Transparencia, La Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas-APP pone a disposición de la ciudadanía el Directorio de Servidores Públicos y Contratistas, el cual podrá ser consultado a través del Sistema de Información y Gestión del Empleo Público – SIGEP.
		</p>

		<p>
			Consulte <a href="http://www.sigep.gov.co" target="_blank">www.sigep.gov.co</a>
		</p>

		<p>
			En el directorio podrá consultarse la información pública de los servidores, reportada por las instituciones al Sistema de Información y Gestión del Empleo Público – SIGEP.
		</p>
	</div>


	<!--Particle-->
	<div class="vlt-particle" data-jarallax-element="-100 0"><img src="{{ asset('assets/img/root/particle-01--black.png')}}" width="50" alt=""></div>
	<!--Particle-->

	<div class="container mt-5">
		<div class="accordion" style="background-color: transparent;" id="accordionExample">
			<div class="card team border-0">
				<div class="card-header" id="headingOne">
					<h2 class="mb-0">
						<button class="btn btn-link btn-block text-left text-dark font-bold" type="button" data-toggle="collapse" data-target="#generalDirection" aria-expanded="true" aria-controls="generalDirection">
							Dirección General 
						</button>
					</h2>
				</div>

				<div id="generalDirection" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body table-responsive">
						<table class="table table-bordered table-striped custom-table">
							<thead>
								<tr>
									<th>Nombre completo</th>
									<th>Formación académica</th>
									<th>Cargo</th>
									<th>Dependencia</th>
									<th>Correo electrónico institucional</th>
									<th>Teléfono Institucional</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Rodrigo Hernan Foronda</td>
									<td>Medellín, Antioquia - Colombia</td>
									<td>Abogado, Especialista en Derecho constitucional, Magíster en Derecho con énfasis en Derecho Administrativo</td>
									<td>Director General</td>
									<td>Dirección General</td>
									<td>rodrigo.foronda@app.gov.co</td>
									<td>4481740</td>
									
								</tr>

							
								<tr>
									<td>Alejandra María Torres</td>
									<td>-</td>
									<td>Profesional de apoyo a la gestión jurídica y contractual</td>
									<td>-</td>
									<td>Dirección General</td>
									<td>alejandra.torres@app.gov.co</td>
									<td>4481740 Ext. 110</td>
								
								</tr>

								<tr>
									<td>Angélica María Sánchez Álvarez</td>
									<td>-</td>
									<td>Profesional apoyo jurídico</td>
									<td>-</td>
									<td>Dirección General</td>
									<td>angelica.sanchez@app.gov.co</td>
									<td>4481740</td>
									
								</tr>

								<tr>
									<td>Laura Andrea Gómez Rodas</td>
									<td>-</td>
									<td>Profesional de apoyo seguimiento a los proyectos-asistencia a la Dirección General</td>
									<td>-</td>
									<td>Dirección General</td>
									<td>laura.gomez@app.gov.co</td>
									<td>4481740 Ext. 117</td>
								
								</tr>

								<tr>
									<td>Mónica Alejandra Gómez Yepes</td>
									<td>-</td>
									<td>Apoyo administrativo equipo de comunicaciones</td>
									<td>-</td>
									<td>Dirección General</td>
									<td>monica.gomez@app.gov.co</td>
									<td>4481740</td>
									
								</tr>

								

								<tr>
									<td>Nicolas Tieck</td>
									<td>-</td>
									<td>Apoyo comercial comunicacional</td>
									<td>-</td>
									<td>Dirección General</td>
									<td>nicolas.tieck@app.gov.co</td>
									<td>4481740</td>
									
								</tr>

								<tr>
									<td>Wilson de Jesús Osorno</td>
									<td>-</td>
									<td>Profesional especializado apoyo control interno</td>
									<td>-</td>
									<td>Dirección General</td>
									<td>wilson.osorno@app.gov.co</td>
									<td>4481740</td>
									
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			

			<div class="card team border-0">
				<div class="card-header" id="headingTwo">
					<h2 class="mb-0">
						<button class="btn btn-link btn-block text-left text-dark font-bold collapsed" type="button" data-toggle="collapse" data-target="#tecnicalDirection" aria-expanded="false" aria-controls="tecnicalDirection">
							Dirección Técnica
						</button>
					</h2>
				</div>
				<div id="tecnicalDirection" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					<div class="card-body">
						<table class="table table-bordered table-striped custom-table">
							<tbody>
								
							<tr>
									<td>Nathalia Gallego</td>
									<td>-</td>
									<td>Profesional apoyo Dirección General</td>
									<td>-</td>
									<td>Dirección General</td>
									<td>nathalia.gallego@app.gov.co</td>
									<td>4481740</td>
								
								</tr>

								<tr>
									<td>Andrés Moreno Álvarez</td>
									<td>-</td>
									<td>Apoyo a la gestión de tecnologías de la información y comunicaciones</td>
									<td>-</td>
									<td>Dirección Técnica</td>
									<td>tecnologia@app.gov.co</td>
									<td>4481740 Ext. 123</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Bibiana Andrea Torres Piedrahita</td>
									<td>-</td>
									<td>Apoyo a la gestión de Tesorería, activos fijos y seguros</td>
									<td>-</td>
									<td>Dirección Técnica</td>
									<td>bibiana.torres@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Brayan Angarita Rivera</td>
									<td>-</td>
									<td>Apoyo operación plataformas tecnológicas</td>
									<td>-</td>
									<td>Dirección Técnica</td>
									<td>brayan.angarita@app.gov.co	</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Catalina Pérez Mesa</td>
									<td>-</td>
									<td>Profesional apoyo en la gestión de compras y contratación</td>
									<td>-</td>
									<td>Dirección Técnica</td>
									<td>catalina.perez@app.gov.co</td>
									<td>4481740 Ext. 128</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Gladys Ortiz Sánchez</td>
									<td>-</td>
									<td>Profesional apoyo en la gestión de compras y contratación</td>
									<td>-</td>
									<td>Dirección Técnica</td>
									<td>gladys.ortiz@app.gov.co</td>
									<td>4481740 Ext. 128</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Juan Guillermo Salcedo Delgado</td>
									<td>-</td>
									<td>Apoyo a la gestión administrativa</td>
									<td>-</td>
									<td>Dirección Técnica</td>
									<td>gladys.ortiz@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Liliana María Arteaga Restrepo</td>
									<td>-</td>
									<td>Profesional apoyo a la gestión financiera y de planeación</td>
									<td>-</td>
									<td>Dirección Técnica</td>
									<td>liliana.torres@app.gov.c</td>
									<td>4481740 Ext. 113</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Liliana María Arteaga Restrepo</td>
									<td>-</td>
									<td>Profesional apoyo a la gestión financiera y de planeación</td>
									<td>-</td>
									<td>Dirección Técnica</td>
									<td>liliana.torres@app.gov.co</td>
									<td>4481740 Ext. 113</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Lina María Martínez Giraldo</td>
									<td>-</td>
									<td>Profesional apoyo a la gestión humana</td>
									<td>-</td>
									<td>Dirección Técnica</td>
									<td>lina.martinez@app.gov.co</td>
									<td>4481740 Ext. 108</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>María Alejandra Zapata Jaramillo</td>
									<td>-</td>
									<td>Apoyo a la gestión del servicio y procesos administrativos</td>
									<td>-</td>
									<td>Dirección Técnica</td>
									<td>maria.zapata@app.gov.co</td>
									<td>4481740 Ext. 100</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Mariluz Hidalgo Grisales</td>
									<td>-</td>
									<td>Profesional apoyo en la gestión de compras y contratación</td>
									<td>-</td>
									<td>Dirección Técnica</td>
									<td>mariluz.hidalgo@app.gov.co</td>
									<td>4481740 Ext. 107</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Miguel Ángel Castro Tarazona</td>
									<td>-</td>
									<td>Profesional apoyo planeación y procesos organizacionales</td>
									<td>-</td>
									<td>Dirección Técnica</td>
									<td>miguel.castro@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Mónica María Rendón Gaviria</td>
									<td>-</td>
									<td>Profesional apoyo a la gestión contable y tributaria</td>
									<td>-</td>
									<td>Dirección Técnica</td>
									<td>monica.rendon@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Ómar José Vanegas Tangarife</td>
									<td>-</td>
									<td>Auxiliar procesos operativos y de mensajería</td>
									<td>-</td>
									<td>Dirección Técnica</td>
									<td>omarconcejo2015@gmail.com</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="card team border-0">
				<div class="card-header" id="headingOne">
					<h2 class="mb-0">
						<button class="btn btn-link btn-block text-left text-dark font-bold" type="button" data-toggle="collapse" data-target="#subApp" aria-expanded="true" aria-controls="subApp">
							Subdirección de Gestión de Alianzas Público Privadas
						</button>
					</h2>
				</div>

				<div id="subApp" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						<table class="table table-bordered table-striped custom-table">
							<tbody>
								<tr>
									<td>Juan Manuel Mejía Salazar</td>
									<td>-</td>
									<td>Subdirector de Gestión de Alianzas Público Privadas</td>
									<td>-</td>
									<td>Subdirección de Gestión de Alianzas Público Privadas</td>
									<td>manuel.mejia@app.gov.com</td>
									<td>4481740 Ext. 106</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Astrid Rocío García Monsalve</td>
									<td>-</td>
									<td>Asistente gerencia encargada del estudio de factibilidad UDAG</td>
									<td>-</td>
									<td>Subdirección de Gestión de Alianzas Público Privadas</td>
									<td>astrid.garcia@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Catalina Escobar Gálvis</td>
									<td>-</td>
									<td>Profesional apoyo técnico en la gestión de proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión de Alianzas Público Privadas</td>
									<td>catalina.escobar@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Daniel Gómez Baraona</td>
									<td>-</td>
									<td>Profesional apoyo técnico en la gestión de proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión de Alianzas Público Privadas</td>
									<td>daniel.gomez@app.gov.co</td>
									<td>4481740 Ext. 127</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Fabián Gonzalo Marín Cortés</td>
									<td>-</td>
									<td>Acompañamiento desde el el componente jurídico proyecto modernización UDAG</td>
									<td>-</td>
									<td>Subdirección de Gestión de Alianzas Público Privadas</td>
									<td>fabian.marin@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Gilberto de Jesús Giraldo Buitrago</td>
									<td>-</td>
									<td>Coordinador Gerencia Estudio de Factibilidad Estadio Atanasio Girardot</td>
									<td>-</td>
									<td>Subdirección de Gestión de Alianzas Público Privadas</td>
									<td>gilberto.giraldo@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>John Hellman Bazurto Gil</td>
									<td>-</td>
									<td>Apoyo actividades sociales de sensibilización con comunidades</td>
									<td>-</td>
									<td>Subdirección de Gestión de Alianzas Público Privadas</td>
									<td>johnbazurto@une.net.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Juan Pablo Henao Restrepo</td>
									<td>-</td>
									<td>Apoyo actividades sociales de sensibilización con comunidades</td>
									<td>-</td>
									<td>Subdirección de Gestión de Alianzas Público Privadas</td>
									<td>juanpadim4@gmail.com</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Laura Vanessa Mouthon Toro</td>
									<td>-</td>
									<td>Apoyo jurídico</td>
									<td>-</td>
									<td>Subdirección de Gestión de Alianzas Público Privadas</td>
									<td>laura.mouthon@app.gov.co</td>
									<td>4481740 Ext. 118</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Luisa Fernanda Gutiérrez Maya</td>
									<td>-</td>
									<td>Profesional apoyo técnico en la gestión de proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión de Alianzas Público Privadas</td>
									<td>luisa.gutierrez@app.gov.co</td>
									<td>4481740 Ext. 118</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Sixto Naranjo</td>
									<td>-</td>
									<td>Profesional apoyo técnico en la gestión de proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión de Alianzas Público Privadas</td>
									<td>sixto.naranjo@app.gov.co</td>
									<td>4481740 Ext. 126</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="card team border-0">
				<div class="card-header" id="headingOne">
					<h2 class="mb-0">
						<button class="btn btn-link btn-block text-left text-dark font-bold" type="button" data-toggle="collapse" data-target="#subInmo" aria-expanded="true" aria-controls="subInmo">
							Subdirección de Gestión Inmobiliaria
						</button>
					</h2>
				</div>

				<div id="subInmo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						<table class="table table-bordered table-striped custom-table">
							<tbody>
								<tr>
									<td>Natacha Gómez Hoyos</td>
									<td>-</td>
									<td>Subdirectora de Gestión Inmobiliaria</td>
									<td>-</td>
									<td>Subdirección de Gestión Inmobiliaria</td>
									<td>natacha.gomez@app.gov.co</td>
									<td>4481740 Ext. 103</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Carolina Urrego Pontón</td>
									<td>-</td>
									<td>Profesional apoyo técnico en la gestión de proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión Inmobiliaria</td>
									<td>carolina@desingtherapy.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Diana Lucia Pérez</td>
									<td>-</td>
									<td>Profesional apoyo técnico en la gestión de proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión Inmobiliaria</td>
									<td>diana.perez@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Javier Antonio Barreto Bonilla</td>
									<td>-</td>
									<td>Profesional Especializado</td>
									<td>-</td>
									<td>Subdirección de Gestión Inmobiliaria</td>
									<td>javier.barreto@app.gov.co</td>
									<td>4481740 Ext. 114</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>José Daniel Cárdenas</td>
									<td>-</td>
									<td>Profesional apoyo técnico en la gestión de proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión Inmobiliaria</td>
									<td>jose.cardenas@app.gov.co</td>
									<td>4481740 Ext. 115</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Juan Carlos Restrepo Monsalve</td>
									<td>-</td>
									<td>Profesional apoyo técnico en la gestión de proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión Inmobiliaria</td>
									<td>juanca.restrepo22@gmail.com</td>
									<td>4481740 Ext. 115</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Juan Sebastián Parra Peláez</td>
									<td>-</td>
									<td>Profesional apoyo jurídico</td>
									<td>-</td>
									<td>Subdirección de Gestión Inmobiliaria</td>
									<td>sebastian.parra@app.gov.co</td>
									<td>4481740 Ext. 115</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Leonardo Correa Velásquez</td>
									<td>-</td>
									<td>Apoyo Técnico proyectos Hotel y Centro de Negocios Plaza Mayor y Hotel Villa Olímpica</td>
									<td>-</td>
									<td>Subdirección de Gestión Inmobiliaria</td>
									<td>leonardo.correa.velasquez@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Marcela Giraldo Romero</td>
									<td>-</td>
									<td>Profesional apoyo técnico en la gestión de proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión Inmobiliaria</td>
									<td>marcela.giraldo@app.gov.co	</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Martha Nelly Agudelo Vanegas</td>
									<td>-</td>
									<td>Apoyo Técnico y apoyo a la supervisión desde el componente de mercado</td>
									<td>-</td>
									<td>Subdirección de Gestión Inmobiliaria</td>
									<td>m_agudelo@corpoeco.org</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Oscar Oswaldo Manco López</td>
									<td>-</td>
									<td>Profesional especializado apoyo componente financiero de los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión Inmobiliaria</td>
									<td>oscar.manco@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Santiago Castro Hernández</td>
									<td>-</td>
									<td>Profesional apoyo técnico en la gestión de proyecto</td>
									<td>-</td>
									<td>Subdirección de Gestión Inmobiliaria</td>
									<td>santiago.castro@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Tatiana Carolina de los Ríos Osorio</td>
									<td>-</td>
									<td>Profesional apoyo técnico en la gestión de proyecto</td>
									<td>-</td>
									<td>Subdirección de Gestión Inmobiliaria</td>
									<td>tatiana.delosrios@app.gov.co</td>
									<td>4481740 Ext. 115</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>							
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="card team border-0">
				<div class="card-header" id="headingOne">
					<h2 class="mb-0">
						<button class="btn btn-link btn-block text-left text-dark font-bold" type="button" data-toggle="collapse" data-target="#subLandscape" aria-expanded="true" aria-controls="subLandscape">
							Subdirección de Gestión de Paisaje y Patrimonio
						</button>
					</h2>
				</div>

				<div id="subLandscape" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						<table class="table table-bordered table-striped custom-table">
							<tbody>

								<tr>
									<td>Daniel Madrigal Arango</td>
									<td>-</td>
									<td>Subdirector de Gestión del Paisaje y el Patrimonio</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>daniel.madrigal@app.gov.co</td>
									<td>4481740 Ext. 111</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>	

								<tr>
									<td>Adriana Patricia Oquendo Urrea</td>
									<td>-</td>
									<td>Profesional de apoyo técnico a los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>aoquedo22@gmail.com</td>
									<td>4481740 Ext. 111</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>	

								<tr>
									<td>Alejandra Ramírez Rico</td>
									<td>-</td>
									<td>Profesional apoyo levantamiento información técnica para los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>ou.alejandraarq@gmail.com</td>
									<td>4481740 Ext. 111</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>	

								<tr>
									<td>Alejandro Álvarez Espinal</td>
									<td>-</td>
									<td>Profesional apoyo gestión de los instrumentos del POT</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>alejandro.alvarez@app.gov.co</td>
									<td>4481740 Ext. 111</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>	

								<tr>
									<td>Ana Mileidy Holguín Pérez</td>
									<td>-</td>
									<td>Apoyo administrativo AEEP</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>ana.holguin@app.gov.co</td>
									<td>385 55 55 Ext. 9477</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>	

								<tr>
									<td>Ana Milena Zapata Sánchez</td>
									<td>-</td>
									<td>Profesional de apoyo componente social</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>ana.zapata@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>	

								<tr>
									<td>Andrea Sierra Uribe</td>
									<td>-</td>
									<td>Profesional de apoyo técnico a los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>andrea.sierra@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>	

								<tr>
									<td>Andrea Carolina Herreño Bahamón</td>
									<td>-</td>
									<td>Profesional de apoyo técnico a los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>carolina.herreno@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>	

								<tr>
									<td>Andrés Felipe Ospina Montoya</td>
									<td>-</td>
									<td>Tecnólogo apoyo actividades administrativas y operativas</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>andres.ospina@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>	

								<tr>
									<td>Angela María Góez Holguín</td>
									<td>-</td>
									<td>Profesional apoyo desarrollo de los instrumentos del POT</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>angela.goez@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Any Xiomara Calderón Vergara</td>
									<td>-</td>
									<td>Profesional de apoyo componente social</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>anny.calderon@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Campo Aníbal Olarte Valbuena</td>
									<td>-</td>
									<td>Profesional de apoyo técnico AEEP</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>anibal.olarte@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Carlos Andrés Restrepo Fergusson</td>
									<td>-</td>
									<td>Profesional apoyo a la gestión de los procesos y proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>carlos.restrepo@app.gov.co</td>
									<td>4481740 Ext. 122</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Carlos David Hurtado Ángel</td>
									<td>-</td>
									<td>Profesional de apoyo componente social</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>carhur16@gmail.com	</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Carlos Giovanni Pérez Pérez</td>
									<td>-</td>
									<td>Profesional de apoyo técnico a los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>cgiovanniperez@gmail.com</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>
			
								<tr>
									<td>Carolina Correa Jaramillo</td>
									<td>-</td>
									<td>Profesional de apoyo técnico</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>carolina.correa@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Carolina Márquez Cano</td>
									<td>-</td>
									<td>Profesional de apoyo técnico</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>cmc508@gmail.com</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Catalina Molina Sanín</td>
									<td>-</td>
									<td>Profesional apoyo técnico a los proyectos de la Agencia</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>catamolinasanin@gmail.com</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>César Augusto Ríos Novoa</td>
									<td>-</td>
									<td>Profesional apoyo levantamiento información técnica para los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>cesar.rios@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Christian Camilo Quintero Londoño</td>
									<td>-</td>
									<td>Profesional de apoyo técnico</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>christian.quintero@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Claudia María Gómez Ossa</td>
									<td>-</td>
									<td>Profesional de apoyo componente social</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>claugo.2@hotmail.com</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Daniela Suaza Saldarriaga</td>
									<td>-</td>
									<td>Profesional apoyo levantamiento información técnica para los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>danielasuaza28@gmail.com</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>David Cano Giraldo</td>
									<td>-</td>
									<td>Profesional de apoyo técnico estrategía AEEP</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>david.cano@app.gov.co</td>
									<td>4481740 Ext. 104</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Diana Catalina Arenas González</td>
									<td>-</td>
									<td>Profesional apoyo a los proyectos desde el componente ambiental</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>diana.arenas@app.gov.co	</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Diana Cecilia Vergara Ortiz</td>
									<td>-</td>
									<td>Profesional apoyo gestión social</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>diana.vergara@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Diana Marcela Sánchez</td>
									<td>-</td>
									<td>Apoyo estrategía acercamiento y vinculación proyectos paisaje</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>diana.sanchez@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Diego Mauricio Aguirre Mesa</td>
									<td>-</td>
									<td>Apoyo administrativo a los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>diegoaguirre_9@hotmail.com</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Edwin Traslaviña Rodriguez</td>
									<td>-</td>
									<td>Profesional antropólogo componente social</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>edwin.traslavina@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Elizabeth Cristina Goez Barrada</td>
									<td>-</td>
									<td>Profesional de apoyo componente social</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>elizabeth.goez@app.gov.co</td>
									<td>4481740 Ext. 104</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Erika Yulima Sánchez Alzate</td>
									<td>-</td>
									<td>Profesional apoyo desarrollo de los instrumentos del POT</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>erika.sanchez@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Germán Diego Jiménez López</td>
									<td>-</td>
									<td>Profesional de apoyo técnico a los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>german.gomez@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Gustavo Adolfo Aguirre Núñez</td>
									<td>-</td>
									<td>Profesional apoyo AEEP</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>tavoguirre@gmail.com</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Henderson Alberto López Orozco</td>
									<td>-</td>
									<td>Apoyo Aplicación Instrumentos del POT</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>henderson.lopez@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Iván Guillermo Arango Rodriguez</td>
									<td>-</td>
									<td>Profesional de apoyo técnico a los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>arangoivan251@gmail.com</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Jaime Eduardo Rave Galvis</td>
									<td>-</td>
									<td>Apoyo administrativo AEEP</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>jaime.rave@app.gov.co</td>
									<td>3855555 Ext. 8800</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Javier Ivan García González</td>
									<td>-</td>
									<td>Profesional de apoyo coordinación Instrumentos del POT</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>javier.garcia@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Johan Uriel Varon Giraldo</td>
									<td>-</td>
									<td>Profesional de apoyo técnico</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>johan.varon@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Jorge Alexánder Palacio Martínez</td>
									<td>-</td>
									<td>Profesional apoyo componente presupuestal y seguimiento a los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>alexander.palacio@app.gov.co</td>
									<td>4481740 Ext. 132</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>José David Gómez Jaramillo</td>
									<td>-</td>
									<td>Profesional apoyo componente técnico de los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>jose.gomez@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Juan Alberto Gallego Arango</td>
									<td>-</td>
									<td>Profesional de apoyo componente social</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>juan.gallego@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Juan Diego Marulanda Giraldo</td>
									<td>-</td>
									<td>Profesional apoyo técnico en la elaboración de imágenes tridimensionales</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>juan.marulanda@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Juan Lorenzo Villa Becerra</td>
									<td>-</td>
									<td>Profesional apoyo administrativo a los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>juan.villa@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Juan Pablo Ramos Gaviria</td>
									<td>-</td>
									<td>Profesional apoyo componente técnico de los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>juan.ramos@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Julián Hernández Valencia</td>
									<td>-</td>
									<td>Apoyo a la gestión AEEP</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>julian.hernandez@app.gov.co</td>
									<td>4481740 Ext. 121</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Julián Santiago Ossa Ospina</td>
									<td>-</td>
									<td>Profesional apoyo desarrollo de los instrumentos del POT</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>julian.ossa@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Jesús Leonardo Pérez Pérez</td>
									<td>-</td>
									<td>Profesional de apoyo técnico a los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>jesus.perez@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Lucas Cadavid Arango</td>
									<td>-</td>
									<td>Profesional de apoyo a la gestión jurídica de los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>lucas.cadavid@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Luis Fernando Giraldo Pérez</td>
									<td>-</td>
									<td>Profesional apoyo levantamiento información técnica para los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>luis.perez@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Manuela Zea Robledo</td>
									<td>-</td>
									<td>Profesional apoyo proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>manuela.zea@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>María Camila García Ortega</td>
									<td>-</td>
									<td>Profesional de apoyo técnico AEEP</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>camila.garcia@app.gov.co</td>
									<td>4481740 Ext. 132</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>María José Barrera Roldán</td>
									<td>-</td>
									<td>Apoyo a los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>-</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>María Victoria Naranjo Jaramillo</td>
									<td>-</td>
									<td>Profesional especializada apoyo técnico de los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>maria.naranjo@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Maryi Vallejo Ospina</td>
									<td>-</td>
									<td>Apoyo salud ocupacional</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>maryi011183@gmail.com</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Mauricio Alexander Toro</td>
									<td>-</td>
									<td>Apoyo Tramites AEEP</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>mauricio.toro@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Mauricio Correa Castrillón</td>
									<td>-</td>
									<td>Profesional apoyo AEEP</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>mauricio.correa@app.gov.co</td>
									<td>4481740 Ext. 105</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Mauricio Jaramillo Vásquez</td>
									<td>-</td>
									<td>Profesional apoyo componente ambiental de los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>mauricio.jaramillo@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Santiago Vélez Salamanca</td>
									<td>-</td>
									<td>Profesional apoyo componente urbano de los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>santiago.velez@app.gov.co</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>William Darío Londoño Álvarez</td>
									<td>-</td>
									<td>Profesional de apoyo técnico a los proyectos</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>constructorwilliamlondono@hotmail.com</td>
									<td>4481740</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>

								<tr>
									<td>Yormey Esteban Vásquez Zuleta</td>
									<td>-</td>
									<td>Profesional de apoyo técnico</td>
									<td>-</td>
									<td>Subdirección de Gestión del Paisaje y el Patrimonio</td>
									<td>yormey.vasquez@app.gov.co</td>
									<td>3855555 Ext. 8800</td>
									<td>Escala salarial</td>
									<td>Información del contrato</td>
								</tr>
							</tbody>
						</table> 
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="vlt-gap-120"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-3 offset-md-9">
				<div class="vlt-particle d-flex justify-content-center" data-jarallax-element="100 0"><img src="{{ asset('assets/img/root/particle-02.png')}}" alt=""></div>
			</div>
			<div class="col-md-10 offset-md-1">
				<div class="text-center">
					<!--Animation Block-->
					<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
						<h2 class="m-0"><span class="vlt-highlight">Relación de contratación 2020</span></h2>
					</div>
					<div class="vlt-gap-45"></div>
					<!--Animation Block-->
					<div>
						<embed src="{{ asset('assets/pdf/relacion-de-contratacion-2020.pdf')}}" height="380" type="application/pdf">
					</div>
					<div class="vlt-gap-45"></div>
				</div>
			</div>
		</div>
		<div class="vlt-gap-120"></div>
	</div>
</section>

<section>
	<div class="vlt-gap-120"></div>
	<div class="vlt-particle d-flex justify-content-center" data-jarallax-element="100 0"><img src="{{ asset('assets/img/root/particle-02.png')}}" alt=""></div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="text-center">
					<!--Animation Block-->
					<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
						<h2 class="m-0"><span class="vlt-highlight">Resolución 003 incrementos salarial 2020</span></h2>
					</div>
					<div class="vlt-gap-45"></div>
					<!--Animation Block-->
					<div>
						<embed src="{{ asset('assets/pdf/resolucion-003-incrementos-salarial-2020.pdf')}}" height="380" type="application/pdf">
					</div>
					<div class="vlt-gap-45"></div>
				</div>
			</div>
		</div>
	</div>
</section>
@include('includes.share')
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endpush