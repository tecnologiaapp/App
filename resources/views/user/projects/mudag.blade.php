
  @include('includes.header.mudag')
  <body id="page-top">
	<!-- Mashead header-->
	<section style="padding-bottom: 0rem;">
		<div style="padding-top:25px;">
			<picture><source media="(min-width: 800px)" srcset="{{ asset('assets/img/Proyectos/Hom.png') }}"> <source media="(min-width: 330px)" srcset="{{ asset('assets/img/Proyectos/MOBILE-1.png') }}"> <img alt="Ejemplo" src="{{asset('assets/img/Proyectos/Hom.png')}}" style="width:100%"></picture>
		</div>
	</section>
	<header class="masthead">
		<div class="container px-5">
			<div class="row gx-5 align-items-center">
				<h6 class="display-1 lh-1 mb-3" style="font-size: 2rem;">@lang('messages.passion_transforms')</h6>
				<p class="lead fw-normal text-muted mb-5">@lang('messages.parrafo1')</p>
				<p class="lead fw-normal text-muted mb-5">@lang('messages.parrafo2')</p>
				<p class="lead fw-normal text-muted mb-5">@lang('messages.parrafo3')</p>
			</div>
		</div>
	</header><!-- Quote/testimonial aside-->
	<img src="{{asset('assets/img/Proyectos/banner-hom.png')}}" style=" width:100%;">
	<div class="container px-5">
		<div class="row gx-5 align-items-center" style="padding-top: 100px;">
			<p class="lead fw-normal text-muted mb-5">@lang('messages.parrafo4')</p>
			<p class="lead fw-normal text-muted mb-5">@lang('messages.parrafo5')</p>
		</div>
	</div><img src="{{asset('assets/img/Proyectos/banner2-home.png')}}" style=" width:100%;">
	<div class="masthead">
		<div class="container px-5">
			<div class="row gx-5 align-items-center">
				<p class="lead fw-normal text-muted mb-5">@lang('messages.parrafo6')</p>
				<p class="lead fw-normal text-muted mb-5">@lang('messages.parrafo7')</p>
			</div>
		</div>
	</div>
	<div class="container px-5">
		<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
			<div class="carousel-indicators">
				<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 4" data-bs-slide-to="3" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 5" data-bs-slide-to="4" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 6" data-bs-slide-to="5" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 7" data-bs-slide-to="6" data-bs-target="#carouselExampleIndicators" type="button"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active"><img alt="..." class="d-block w-100" src="https://i.ibb.co/7gqRQwr/mudag.jpg"></div>
				<div class="carousel-item"><img alt="..." class="d-block w-100" src="https://i.ibb.co/0CwY1pz/1.png"></div>
				<div class="carousel-item"><img alt="..." class="d-block w-100" src="https://i.ibb.co/HFqTMhz/2.jpg"></div>
				<div class="carousel-item"><img alt="..." class="d-block w-100" src="https://i.ibb.co/ZTVNJfF/3.jpg"></div>
				<div class="carousel-item"><img alt="..." class="d-block w-100" src="https://i.ibb.co/Zd4kM3g/mudag1.jpg"></div>
				<div class="carousel-item"><img alt="..." class="d-block w-100" src="https://i.ibb.co/71YrMmY/C26F2712.jpg"></div>
				<div class="carousel-item"><img alt="..." class="d-block w-100" src="https://i.ibb.co/ssL2bw1/C26F3111.jpg"></div>
				<div class="carousel-item"><img alt="..." class="d-block w-100" src="https://i.ibb.co/TMc5XmZ/C26F7902.jpg"></div>
			</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
		</div>
		<p>Imágenes de referencia sujetas a cambios.</p>
	</div>
	<div class="container px-5">
		<div class="row gx-5 align-items-center" style="padding-top: 100px;">
			<h4 class="display-1 lh-1 mb-3" style="font-size: 3rem;">@lang('messages.parrafo8')</h4>
			<p class="lead fw-normal text-muted mb-5">@lang('messages.parrafo9')</p><br>
			<img src="https://i.ibb.co/NmqWqZh/h1.png">
			<p>Imágenes de referencia sujetas a cambios.</p>
		</div>
	</div><img src="{{asset('assets/img/Proyectos/banner3-home.png')}}" style="width:100%; padding-top: 25px;">
	<div class="masthead">
		<div class="container px-5">
			<div class="row gx-5 align-items-center" style="padding-top: 10px;">
				<p class="lead fw-normal text-muted mb-5">@lang('messages.parrafo10')</p>
			</div>
		</div>
		<div class="container px-5">
			<div class="row gx-5 align-items-center" style="padding-top: 30px;">
				<h6 class="display-1 lh-1 mb-3" style="font-size: 2rem;">@lang('messages.parrafo11')</h6>
				<p class="lead fw-normal text-muted mb-5">@lang('messages.parrafo12')</p>
			</div>
		</div><!-- App features section-->
		<section id="features">
			<div class="container px-5">
				<div class="row gx-5 align-items-center">
					<div>
						<div class="container-fluid px-5">
							<h1 class="display-1 lh-1 mb-3 text-center">@lang('messages.parrafo13')</h1>
							<div class="row gx-5">
								<div class="col-md-6 mb-5">
									<!-- Feature item-->
									<div class="text-center">
										<i class="bi bi-cash-coin icon-feature text-gradient d-block mb-3"></i>
										<h3 class="font-alt">Inversión</h3>
										<p class="text-muted mb-0">@lang('messages.parrafo14')</p>
										<p class="text-muted mb-0">@lang('messages.parrafo15')</p>
									</div>
								</div>
								<div class="col-md-6 mb-5">
									<!-- Feature item-->
									<div class="text-center">
										<i class="bi bi-shop icon-feature text-gradient d-block mb-3"></i>
										<h3 class="font-alt">Espacio público</h3>
										<p class="text-muted mb-0"><b style="color: #5f1088;">6.000 m²</b> @lang('messages.parrafo16')</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 mb-5 mb-md-0">
									<!-- Feature item-->
									<div class="text-center">
										<i class="bi bi-shop icon-feature text-gradient d-block mb-3"></i>
										<h3 class="font-alt">Zonas para el encuentro</h3>
										<p class="text-muted mb-0"><b style="color: #5f1088;">102.000 m²</b> @lang('messages.parrafo17')</p>
									</div>
								</div>
								<div class="col-md-6">
									<!-- Feature item-->
									<div class="text-center">
										<i class="bi bi-people-fill icon-feature text-gradient d-block mb-3"></i>
										<h3 class="font-alt">Visitas</h3>
										<p class="text-muted mb-0">@lang('messages.parrafo18')</p>
										<p class="text-muted mb-0">@lang('messages.parrafo19')</p>
									</div>
								</div>
								<div class="col-md-6">
									<!-- Feature item-->
									<div class="text-center">
										<i class="bi bi-clouds icon-feature text-gradient d-block mb-3"></i>
										<h3 class="font-alt">Medio ambiente</h3>
										<p class="text-muted mb-0">@lang('messages.parrafo20')</p>
										<p class="text-muted mb-0">@lang('messages.parrafo21')</p>
									</div>
								</div>
								<div class="col-md-6">
									<!-- Feature item-->
									<div class="text-center">
										<i class="bi bi-building icon-feature text-gradient d-block mb-3"></i>
										<h3 class="font-alt">Turismo</h3>
										<p class="text-muted mb-0">@lang('messages.parrafo22')</p>
										<p class="text-muted mb-0">@lang('messages.parrafo23')</p>
									</div>
								</div>
								<div class="col-md-6">
									<!-- Feature item-->
									<div class="text-center">
										<i class="bi bi-globe icon-feature text-gradient d-block mb-3"></i>
										<h3 class="font-alt">Cultura</h3>
										<p class="text-muted mb-0">@lang('messages.parrafo24')</p>
									</div>
								</div>
								<div class="col-md-6">
									<!-- Feature item-->
									<div class="text-center">
										<i class="bi bi-graph-up icon-feature text-gradient d-block mb-3"></i>
										<h3 class="font-alt">Empleo</h3>
										<p class="text-muted mb-0">@lang('messages.parrafo25')</p>
									</div>
								</div>
								<div class="col-md-6">
									<!-- Feature item-->
									<div class="text-center">
										<i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
										<h3 class="font-alt">Formalidad</h3>
										<p class="text-muted mb-0">@lang('messages.parrafo26')</p>
										<p class="text-muted mb-0">@lang('messages.parrafo27')</p>
									</div>
								</div>
								<div class="col-md-6">
									<!-- Feature item-->
									<div class="text-center">
										<i class="bi bi-shield-check icon-feature text-gradient d-block mb-3"></i>
										<h3 class="font-alt">Seguridad</h3>
										<p class="text-muted mb-0">@lang('messages.parrafo28')</p>
										<p class="text-muted mb-0">@lang('messages.parrafo29')</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<section>
		<div class="container px-5">
			<div class="row gx-5 align-items-center">
				<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleControls">
					<div class="carousel-inner">
						<div class="carousel-item active"><img alt="..." class="d-block w-100" src="https://i.ibb.co/0cVzLZQ/mudag1.png"></div>
						<div class="carousel-item"><img alt="..." class="d-block w-100" src="https://i.ibb.co/Z2ff3Kn/mudag2.png"></div>
						<div class="carousel-item"><img alt="..." class="d-block w-100" src="https://i.ibb.co/zGSJdRS/mudag3.png"></div>
						<div class="carousel-item"><img alt="..." class="d-block w-100" src="https://i.ibb.co/Sm8TP8c/mudag4.png"></div>
					</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleControls" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleControls" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
				</div>
				<p>Imágenes de referencia sujetas a cambios.</p>
			</div>
		</div>
	</section>
	<section>
		<div class="container px-5">
			<div class="row" style="justify-content: space-around;">
				<div class="col-md-4">
					<div class="section-title">
						<h2>¿Tienes dudas, comentarios o sugerencias? Escríbenos</h2>
					</div>
					<div class="card" style="background-color:#a73e85cf;">
						<div class="card-body">
							@if(Session::has('enviar-message'))
							<div class="alert alert-success" role="alert">
								{{Session::get('enviar-message')}}
							</div>@endif
							<form action="{{route('contact.enviar')}}" enctype="multipart/form-data" method="post">
								@csrf
								<div class="form-group">
									<label for="name" style="color:white;">Nombre:</label> <input class="form-control" name="name" required="" type="text">
								</div>
								<div class="form-group">
									<label for="email" style="color:white;">Correo electrónico:</label> <input class="form-control" name="email" required="" type="email">
								</div>
								<div class="form-group">
									<label for="message" style="color:white;">Mensaje:</label> 
									<textarea class="form-control" name="msg" required=""></textarea>
								</div><button class="btn btn-primary float-end mt-1" style="background-color:#0082ff; border-color:#b3348a;" type="submit">Enviar mensaje</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="section-title">
						<h2>¿Te gustaría recibir noticias del proyecto o de la Agencia APP?</h2>
					</div>
					<div align="center" style="background-color:#a73e85cf; width:100%; height:290px; display: flex; justify-content: center; align-items: center; border-radius:20px;">
						<a class="btn btn-primary btn-block" href="https://docs.google.com/forms/d/e/1FAIpQLSdFFYVllywyhN0On6FTrODjpqgbKrIK_79oXORry-Qt2YPVTA/viewform" style="background-color:#0082ff; border-color:#b3348a;" target="_blank">Suscríbete</a>
					</div>
				</div>
			</div>
		</div>
	</section>
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