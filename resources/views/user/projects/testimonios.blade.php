@include('includes.header.mudag')
<body id="page-top">
	<!-- Mashead header-->
	<section style="padding-bottom: 0rem;">
		<div style="padding-top:25px;">
			<picture><source media="(min-width: 800px)" srcset="{{ asset('assets/img/Proyectos/Hom.png') }}"> <source media="(min-width: 330px)" srcset="{{ asset('assets/img/Proyectos/MOBILE-1.png') }}"> <img alt="Ejemplo" src="{{asset('assets/img/Proyectos/Hom.png')}}" style="width:100%"></picture>
		</div>
	</section><!-- Quote/testimonial aside-->
	<header class="masthead">
		<!-- ======= Features Section ======= -->
		<section class="features" id="features" style="padding-top: 20px;">
			<div class="container">
				<div class="row gy-4 align-items-center features-item" data-aos="fade-up">
					<div class="col-md-6">
						<iframe allowfullscreen frameborder="0" height="300" src="https://www.youtube.com/embed/xbi0rNrBq-k" title="YouTube video player" width="100%"></iframe>
					</div>
					<div class="col-md-6">
						<h4>¡Celebrar un gol en el Estadio Atanasio Girardot es una alegría!</h4>
						<p>Conoce la historia de Osvaldo Javier Giraldo, un hincha del fútbol que sueña con la transformación de la Unidad Deportiva Atanasio Girardot.</p>
					</div>
				</div><br>
				<div class="row gy-4 align-items-center features-item" data-aos="fade-up">
					<div class="col-md-6 order-1 order-md-2">
						<iframe allowfullscreen frameborder="0" height="300" src="https://www.youtube.com/embed/0XzK7HJxyY8" title="YouTube video player" width="100%"></iframe>
					</div>
					<div class="col-md-6 order-2 order-md-1">
						<h4>Una modernización para mejorar</h4>
						<p>Luz Marina Rodríguez es una comerciante que sueña con mejorar sus ventas y brindar productos de calidad a los usuarios de la Unidad Deportiva Atanasio Girardot. Conoce su historia.</p>
					</div>
				</div><br>
				<div class="row gy-4 align-items-center features-item" data-aos="fade-up">
					<div class="col-md-6">
						<iframe allowfullscreen frameborder="0" height="300" src="https://www.youtube.com/embed/rzx4U4MN4Xc" title="YouTube video player" width="100%"></iframe>
					</div>
					<div class="col-md-6">
						<h4>La Unidad Deportiva Atanasio Girardot es integración, familia y deporte</h4>
						<p>Carlos Quintero Monsalve es un ciclista que vive el corazón deportivo de Medellín. Sueña con un espacio seguro y en constante transformación.</p>
					</div>
				</div><br>
				<div class="row gy-4 align-items-center features-item" data-aos="fade-up">
					<div class="col-md-6 order-1 order-md-2">
						<iframe allowfullscreen frameborder="0" height="300" src="https://www.youtube.com/embed/8lI8yiCWXP8" title="YouTube video player" width="100%"></iframe>
					</div>
					<div class="col-md-6 order-2 order-md-1">
						<h4>"La unidad deportiva lo es todo"</h4>
						<p>Conrado Ibarra es uno de los venteros de la Unidad Deportiva Atanasio Girardot que, por muchos años, ha ofrecido sus productos a visitantes y turistas. Juntos, Agencia APP y comerciantes, seguimos trabajando para dignificar los espacios, mejorar las ventas, aumentar la competitividad y ampliar la oferta de productos y servicios.</p>
					</div>
				</div><br>
				<div class="row gy-4 align-items-center features-item" data-aos="fade-up">
					<div class="col-md-6">
						<iframe allowfullscreen frameborder="0" height="300" src="https://www.youtube.com/embed/svW1d3P53eo" title="YouTube video player" width="100%"></iframe>
					</div>
					<div class="col-md-6">
						<h4>¡Por una mejor calidad de vida!</h4>
						<p>Con la modernización de la Unidad Deportiva Atanasio Girardot nosotros y las futuras generaciones seguiremos disfrutando de este espacio para vivir nuevas experiencias alrededor del deporte, la cultura y el entretenimiento.</p>
					</div>
				</div>
			</div>
		</section><!-- End Features Section -->
	</header><!-- Footer-->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 footer-contact">
						<h3>Agencia APP</h3>
						<p>Medellin / Antioquia<br>
						Carrera 55 # 42-180 Local 203 Edificio Plaza de La Libertad<br></p><a href="{{route('user.projects.mapa')}}">
						<p><strong>Mapa del sitio</strong></p></a>
					</div>
					<div class="col-lg-3 col-md-6 footer-contact">
						<h4>Contacto</h4>
						<p><strong>Telefono:</strong> +57 604 448 1740</p>
						<p><strong>Correo:</strong> info@app.gov.co</p>
						<p><strong>Información general:</strong> info@app.gov.co</p>
						<p><strong>Notificaciones judiciales:</strong> procesosjudiciales@app.gov.co</p>
					</div>
					<div class="col-lg-3 col-md-6 footer-contact">
						<h4>Horario de atención</h4>
						<p><strong>Lunes - Jueves:</strong> 7:30 AM - 5:30 PM</p>
						<p><strong>Viernes:</strong> 7:30 AM - 4:30 PM</p>
					</div>
					<div class="col-lg-3 col-md-6 footer-contact">
						<h4>Redes Sociales</h4>
						<p>Síguenos y enterate de todo</p>
						<div class="social-links mt-3">
							<a class="twitter" href="https://twitter.com/agenciaappmed?lang=es" target="_blank"><i class="bx bxl-twitter"></i></a> <a class="instagram" href="https://www.instagram.com/agenciaappmed/" target="_blank"><i class="bx bxl-instagram"></i></a> <a class="youtube" href="https://www.youtube.com/channel/UCV1jArK6Q8cgXX7ESNocJxA" target="_blank"><i class="bx bxl-youtube"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- End Footer -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
	</script> 
	<script src="js/scripts.js">
	</script> 
	<script src="https://cdn.startbootstrap.com/sb-forms-latest.js">
	</script> 
	<script src="{{asset('assets/js/mudag.js')}}">
	</script>
</body>
</html>