@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerEventosYconvocatorias2.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Eventos y convocatorias</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container">
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="text-justify">
								<div class="vlt-gap-45"></div><!--Animation Block-->
								<p>En esta sección puede encontrar todas las convocatorias de la Agencia APP.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mt-5">
				<div class="container card border-0 rounded-0" style="background: transparent;">
					<table class="table table-bordered table-striped custom-table">
						<thead>
							<tr>
								<th scope="col">Nombre</th>
								<th scope="col">Fecha de inicio y de finalización</th>
								<th scope="col">Año</th>
								<th scope="col">Detalle</th>
								<th scope="col">Documento</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Aviso de convocatoria - licitación pública</td>
								<td>Cuatro (4) meses contados a partir de la aprobación de las garantías</td>
								<td>2022</td>
								<td>Realizar intervenciones paisajísticas en bienes fiscales del municipio de Medellin, infraestructura pública e inmuebles privados.</td>
								<td>
									<a href="{{asset('assets/pdf/convocatorias/Aviso-P260LP2022.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Aviso de convocatoria - Infraestructura verde AMVA</td>
								<td>Hasta el 30 de diciembre</td>
								<td>2021</td>
								<td>Realizar intervenciones de paisajismo e infraestructura verde en el edificio del área metropolitana del valle de aburrá</td>
								<td>
									<a href="{{asset('assets/pdf/convocatorias/Avisodeconvocatoria-InfraestructuraverdeAMVA.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Aviso de convocatoria - Obras Civiles</td>
								<td>Hasta el 31 de diciembre</td>
								<td>2021</td>
								<td>Realizar obras civiles e intervenciones de mantenimiento y culificación de fachadas en bienes de interés cultural del municipio de medellin y/o sus zonas de influencia</td>
								<td>
									<a href="{{asset('assets/pdf/convocatorias/Aviso-convocatoria.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Aviso de convocatoria - Parque Olano</td>
								<td>Del 09 al 24 de junio de 2021</td>
								<td>2021</td>
								<td>Aviso de convocatoria para el proceso de selección P179LP2021</td>
								<td>
									<a href="{{asset('assets/pdf/convocatorias/aviso-de-convocatoria-parque-olano.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Adenda Convocatoria Superficies de Acción - Artistas individuales y colectivos</td>
								<td>Del 08 al 12 de noviembre de 2019</td>
								<td>2019</td>
								<td>Esta adenda tiene por objeto modificar el cronograma planteado, extendiendo la fecha de publicación de resultados para el martes 12 de noviembre de 2019, debido a que no fue posible contar con los permisos necesarios para las intervenciones en la totalidad de los muros a asignar a los artistas en los plazos establecidos.</td>
								<td>
									<a href="{{asset('assets/pdf/convocatorias/adenda-modificacion-artistas.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Adenda Convocatoria Superficies de Acción - Escuelas</td>
								<td>Del 08 al 12 de noviembre de 2019</td>
								<td>2019</td>
								<td>Esta adenda tiene por objeto modificar el cronograma planteado, extendiendo la fecha de publicación de resultados para el martes 12 de noviembre de 2019, debido a que no fue posible contar con los permisos necesarios para las intervenciones en la totalidad de las cortinas metálicas a asignar a las escuelas de arte urbano en los plazos establecidos.</td>
								<td>
									<a href="{{asset('assets/pdf/convocatorias/adenda-modificacion-escuelas.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Convocatoria Para Escuelas de Arte</td>
								<td>Del 18 al 31 de octubre de 2019</td>
								<td>2019</td>
								<td>Superficies de acción es una invitación a las escuelas de arte urbano del área metropolitana del Valle de Aburrá a proponer una conversación con el territorio a través de intervenciones gráficas y pictóricas en las cortinas metálicas de cerramiento de algunos locales comerciales designados por le proyecto Corredor estratégico de la calle 10 del poblado de la Agencia APP.</td>
								<td>
									<a href="{{asset('assets/pdf/convocatorias/convocatorias-para-escuelas-de-arte-urbano.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
							<tr>
								<td>Superficie de Acción 1</td>
								<td>Del 18 al 31 de octubre de 2019</td>
								<td>2019</td>
								<td>Superficies de acción es una invitación a las comunidades creativas del área metropolitana del Valle de Aburrá a proponer una conversación con el territorio a través de intervenciones gráficas y pictóricas en diferentes superficies designadas por le proyecto Zonas de Consolidación de la Agencia APP.</td>
								<td>
									<a href="{{asset('assets/pdf/convocatorias/convocatoria-para-artistas-muralistas-creativos-dise%C3%B1adores-graficos.pdf')}}" target="_blank">Ver documento</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
			<section class="mt-5">
				<ul>
					<li>
						<a href="{{asset('assets/pdf/convocatorias/formulario-personas-juridicas-convocatoria-superficies-de-accion.pdf')}}" target="_blank">Formulario personas juridicas - Convocatoria Superficies de Acción</a>
					</li>
					<li>
						<a href="{{asset('assets/pdf/convocatorias/formulario-personas-naturales-convocatoria-superficies-de-accion.pdf')}}" target="_blank">Formulario para persona natural - Convocatoria Superficies de Acción</a>
					</li>
					<li>
						<a href="{{asset('assets/pdf/convocatorias/formulario-para-grupos-convocatoria-superficies-de-accion.pdf')}}" target="_blank">Formulario para grupos constituidos - Convocatoria Superficies de acción</a>
					</li>
					<li>
						<a href="{{asset('assets/pdf/convocatorias/formulario-escuela-convocatoria-superficie-de-accion-escuelas.pdf')}}" target="_blank">Formulario escuela - Convocatoria Superficie de Acción - Escuelas</a>
					</li>
					<li>
						<a href="{{asset('assets/pdf/convocatorias/modelo-de-declaracion-extrajuicio-convocatoria-superficies-de-accion.pdf')}}" target="_blank">Modelo de declaración extrajuicio - Convocatoria Superficies de Acción</a>
					</li>
					<li>
						<a href="{{asset('assets/pdf/convocatorias/aclaratoria-convocatoria-superficies-de-accion.pdf')}}" target="_blank">Aclaratoria Convocatoria Superficies De Acción</a>
					</li>
					<li>
						<a href="{{asset('assets/pdf/convocatorias/informe-de-evaluacion-de-escuelas.pdf')}}" target="_blank">Informe de evaluación de escuelas</a>
					</li>
					<li>
						<a href="{{asset('assets/pdf/convocatorias/informe-de-evaluacion-de-artistas.pdf')}}" target="_blank">Informe de evaluación de artistas</a>
					</li>
				</ul>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/eventos/convocatorias" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/eventos/convocatorias" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection