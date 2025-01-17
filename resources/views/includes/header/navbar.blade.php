<style>

.top-bar-nav {
	display: flex;
	gap: 10px;
	align-items: center;
	justify-content: end;
}

.top-bar-nav p {
	color: #FFF;
	font-size: 14px;
	margin-bottom: 0;
}

.top-bar-nav p a {
	color: #FFF;
	font-size: 14px;
	margin-bottom: 0;
}

.top-bar-nav p a:hover {
	color: #000;
	font-size: 14px;
	margin-bottom: 0;
}

.separador-nav-top {
	width: 1px;
	height: 15px;
	background-color: #ffffff;
}
	
</style>

<header id="header" class="fixed-top" style="position: absolute;">
	<div class="bg-primary">
		<div class="container-xl logo_menu_superior">
			<div class="header-govco" style="display: flex; align-items: center; justify-content: space-between">
				<a href="https://www.gov.co/" target="blank" title="Ir al portal GOV.CO">
					<img src="https://www.mintic.gov.co/portal/715/channels-616_header_govco.png" alt="Imagen logo GovCo" class="img-fluid">
					<span class="sr-only">Logo Gobierno de Colombia</span>
				</a>
				<div class="top-bar-nav">
					<p><a href="{{ route('user.transparency.verification') }}">Transparencia</a></p>
					<span class="separador-nav-top"></span>
					<p><a href="{{ route('user.transparency.contact-us') }}">Servicio a la ciudadania</a></p>
					<span class="separador-nav-top"></span>
					<p><a href="{{ route('user.projects.participa') }}">Participa</a> </p>
					<span class="separador-nav-top"></span>
					<p><a href="http://mercurioapp.medellin.gov.co/mercurio/inicialPqr.jsp">PQRSD</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="container d-flex align-items-center" style="justify-content: space-between;">
		<a href="{{ url('/') }}">
			<img class="logo me-auto" src="https://app.gov.co/assets/img/Proyectos/logo-landing.png" style=" width: 200px; height: 90px;">
		</a>

		<nav id="navbar" class="navbar">
			<ul>
				<li><a href="{{ url('/') }}">Inicio</a></li>

				<li class="dropdown btn-book-a-table"><a href="#" class="getstarted scrollto"><span>Proyectos</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
					<ul>

						<li class="dropdown"><a href="{{ route('user.projects.app') }}"><span>Gestión - APP</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
							<ul>
								<li>
									<a href="{{ route('user.projects.app') }}">
										<span>Ver todo</span>
									</a>
								</li>
								<li>
									<a href="{{ route('user.projects.mudag') }}">
										<span>Modernización Unidad Deportiva Atanasio Girardot</span>
									</a>
								</li>
								<li>
									<a href="{{ route('user.projects.LandingCarcel') }}">
										<span>Carcel Metropolitana para Sindicados</span>
									</a>
								</li>
								<!-- <li>
				<a  href="{{ route('user.projects.factibilidad') }}">
				  <span>Proyecto de factibilidad</span>
			  </a>
				</li> -->
								<li>
									<a href="{{ route('user.projects.arena') }}">
										<span>Arena Medellín</span>
									</a>
								</li>
								<!-- <li>
				<a href="{{ route('user.projects.saludable') }}">
				  <span>Medellín Saludable</span>
			  </a>
				</li>

				<li>
				<a  href="{{ route('user.projects.aiire') }}">
				  <span>AIIRE</span>
			  </a>
				</li> -->

							</ul>
						</li>


						<li class="dropdown"><a href="{{ route('user.projects.pyp') }}"><span>Paisaje y Patrimonio</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
							<ul>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.pyp') }}">
										<span>Ver todo</span>
									</a>
								</li>
								<li>
									<a href="{{ route('user.projects.aeep') }}">
										<span>Aprovechamiento Económico del Espacio Público –AEEP–</span>
									</a>
								</li>
								<li>
									<a href="{{ route('user.projects.sig') }}">
										<span>SIG</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.gestion') }}">
										<span>Plan Integral de Gestión de Prado</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.naviera') }}">
										<span>Edificio La Naviera</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.barranquilla') }}">
										<span>Galería Urbana a Cielo Abierto calle Barranquilla</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.muros') }}">
										<span>Muros verdes</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.puentes') }}">
										<span>Puentes y arte urbano</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.bulerias') }}">
										<span>Arte urbano en intercambio vial Bulerías</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.cicloruta') }}">
										<span>Ciclorruta Norte-Sur</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.poblado') }}">
										<span>Galería urbana calle 10, El Poblado</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.bolivar') }}">
										<span>Parque Bolívar</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.bastilla') }}">
										<span>Pasaje La Bastilla</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.junin') }}">
										<span>Pasaje Junín</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.jardin') }}">
										<span>Avenida Jardín</span>
									</a>
								</li>
							</ul>
						</li>


						<li class="dropdown"><a href="{{ route('user.projects.inmo') }}"><span>Gestión Inmobiliaria</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
							<ul>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.inmo') }}">
										<span>Ver todo</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.bienes') }}">
										<span>Gestión de bienes inmuebles fiscales</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.oportunidades') }}">
										<span>Oportunidades inmobiliarias</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.inmobiliarios') }}">
										<span>Estructuración de proyectos inmobiliarios</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.hotel') }}">
										<span>Hotel y Centro de Negocios Plaza Mayor</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.olimpica') }}">
										<span>Hotel Deportivo Villa Olímpica</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.prado') }}">
										<span>Prado Centro</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.museo') }}">
										<span>Expansión Museo de Antioquia</span>
									</a>
								</li>
								<li>
									<a class="menu-sub-item" href="{{ route('user.projects.aurora') }}">
										<span>Centro de Comercios y Servicios La Aurora</span>
									</a>
								</li>

							</ul>
						</li>

						<li>
							<a class="menu-sub-item" href="{{ route('user.projects.index') }}"><span>Mapa de proyectos</span></a>
						</li>

						<!-- <li>
			<a href="{{ route('user.projects.sig') }}">
				   <span>SIG</span>
			   </a>
			</li> -->

					</ul>
				</li>

				</li>

				<li>
				<li class="dropdown"><a href="#"><span>Somos APP</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
					<ul>
						<li><a href="{{ route('user.about.history') }}">
								<span>Historia</span>
							</a></li>
						<li><a href="{{ route('user.about.mision')}}">
								<span>Misión y visión</span>
							</a></li>
						<li><a class="menu-sub-item" href="{{ route('user.about.functions')}}">
								<span>Funciones</span>
							</a>
						</li>
						<li class="dropdown"><a href="#"><span>Nuestro equipo</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
					<ul>
						<li>
							<a href="{{ route('user.about.team') }}">
								<span>Director General</span>
							</a>
						</li>
						<li>
							<a href="{{ route('user.subdirectors.app') }}">
								<span>Subdirector de Alianzas Público Privadas</span>
							</a>
						</li>
						<li>
							<a href="{{ route('user.subdirectors.landscape') }}">
								<span>Subdirector de Paisaje y Patrimonio</span>
							</a>
						</li>
						<li>
							<a href="{{ route('user.subdirectors.inmo') }}">
								<span>Subdirectora de Gestión Inmobiliaria </span>
							</a>
						</li>
						<li>
							<a href="{{ route('user.subdirectors.tecnical') }}">
								<span>Director Tecnico u Operativo</span>
							</a>
						</li>

					</ul>
				</li>


					</ul>
				</li>

				

				



				
                
				
              
				<li class="dropdown"><a href="#"><span>Sala de prensa</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
					<ul>
						<li>
							<a class="menu-sub-item" href="{{ route('user.transparency.boletin') }}">
								<span>Noticias</span>
							</a>
						</li>
						<li>
							<a class="menu-sub-item" href="{{ route('user.transparency.galery') }}">
								<span>Galería</span>
							</a>
						</li>
						<li>
							<a class="menu-sub-item" href="{{ route('user.transparency.medios') }}">
							{{--	<span>Agencia APP en medios</span>--}}
							</a>
						</li>

					</ul>
				</li>

				<li><a href="{{ route('user.transparency.contact-us') }}">Servicio a la ciudadania</a></li>

				
			</ul>

			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav>
		<!-- .navbar -->

	</div>
</header>