<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Agencia APP - Carcel</title>

	<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
	
  <!-- Template Main CSS File -->
	<link href="{{ asset('assets/css/landingcarcel.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/footer.css') }}" rel="stylesheet">
</head>
<body>
	<header class="fixed-top" id="header" style="position: absolute;">
		<div class="bg-primary">
			<div class="container-xl logo_menu_superior">
				<div class="header-govco d-flex align-items-center justify-content-between">
					<a href="https://www.gov.co/" target="blank" title="Ir al portal GOV.CO"><img alt="Imagen logo GovCo" class="img-fluid" src="https://www.mintic.gov.co/portal/715/channels-616_header_govco.png"></a> <!-- <div id="google_translate_element"></div> -->
				</div>
			</div>
		</div>
		<div class="container d-flex align-items-center" style="margin-left: 2px; justify-content: space-between;">
			<a href="{{url('/')}}"><img class="logo me-auto" src="https://app.gov.co/assets/img/Proyectos/logo-landing.png" style="width: 200px; height: 90px;"></a>
			<nav class="navbar" id="navbar">
				<ul>
					<li>
						<a class="nav-link scrollto active" href="#contexto"><span>Contexto</span></a>
					</li>
					<li>
						<a class="nav-link scrollto" href="#donde"><span>Modelo APP</span></a>
					</li>
					<li>
						<a class="nav-link scrollto" href="#proyecto"><span>El proyecto</span></a>
					</li>
					<li>
						<a class="nav-link scrollto" href="#beneficios"><span>Beneficios</span></a>
					</li>
					<li>
						<a class="nav-link scrollto" href="{{route('user.transparency.galeria.galery3')}}" target="_blank"><span>Recursos</span></a>
					</li>
					<li>
						<a class="getstarted scrollto" href="https://www.contratos.gov.co/consultas/detalleProceso.do?numConstancia=23-19-13468568&g-recaptcha-response=03AFY_a8VEiZSIA2iO5feV8iEeAHinJ8b0yMa17XKODavYIgZYR3hAjUcH2pZvbYrh6WMt9SFbbpZqMFE-t4Div8ITZzF8vHUf7Y-X6cEFC6FdSYoE6ee680GQH1y16kTLa2QHOdObvj19kJJvwfl69V5T665wNc063Bh99ZyfgcLUMQKKFiDtLt8bU_RPk_rk8GpPIl1hZg7f6YKQ5SpSEk3r02QKxZ-oB0ARJx-NnmUz2dFatmOX1k63hkwd84ZjdgAt0ZOkszciVa2R2GabRuYvm9h9S32NPoSkG0Eo02izRK97f_LwP4z_JhHuSXxkI5YZwyhJIxbSUv-bGoPO86yrQZe8wSnKpT7GC3VcQ65tZ-NMLcRxvTiyzFZ9Reb5qIP2nooWNMkO7c5gknRD1Visnv542NkRFOzKFTZE054dzqGjkSzGuY4F03wtHBnaqQ6oqvKmCmeiaTo-CarAhuUEUQ6OkpZNiy_vTpY8FlHFiEXjYSuU1RqSe3jaxpzehCLTMIgUV9rIQM_z7ooCF-IArejWJllilA" target="_blank"><span>Pliego definitivo</span></a>
					</li>
					<li>
						<a class="getstarted scrollto" href="{{asset('assets/pdf/OD_PROCESO_23-19.pdf')}}" target="_blank"><span>Aviso de licitación</span></a>
					</li>
				</ul><i class="bi bi-list mobile-nav-toggle"></i>
			</nav>
		</div>
	</header>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js">	</script>
</body>
</html>
