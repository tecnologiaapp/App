<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agencia App - MUDAG </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{ asset('assets/css/mudag.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/font-awesome.min.css')}}">
    </head>
    <style>
        .masthead {
    background-color: #f8f9fa;
    padding-top: 2.5rem;
    padding-bottom: 0rem;
}
.dropdown {
  position: relative;
}

.dropdown .submenu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #fff;
  padding: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.dropdown:hover .submenu {
  display: block;
}

.dropdown .submenu li {
  margin-bottom: 5px;
}

.dropdown .submenu li a {
  color: #333;
  text-decoration: none;
}
 </style>
   
        
<header id="header" class="fixed-top" style="position: absolute;">
<div class="bg-primary">
    <div class="container-xl logo_menu_superior">
      <div class="header-govco">
  <a href="https://www.gov.co/" target="blank" title="Ir al portal GOV.CO">
  <img src="https://www.mintic.gov.co/portal/715/channels-616_header_govco.png" alt="Imagen logo GovCo" class="img-fluid">
  <span class="sr-only">Logo Gobierno de Colombia</span>
  </a>
</div>
</div>
</div>
<div class="container d-flex align-items-center" style="margin-left: 2px; justify-content: space-between;">

    
<a href="{{ url('/') }}">
  <img class="logo me-auto" src="https://app.gov.co/assets/img/Proyectos/logo-landing.png"  style=" width: 200px;
 height: 90px;"></a>

      <nav id="navbar" class="navbar">
	  <ul>
		
		<li><a href="{{route('user.projects.mudag')}}">Inicio</a></li>
 

		<li>
		<a href="{{route('user.projects.estadio2')}}">
				   <span>Estadio</span>
			   </a>
		</li>
    <li>
		<a href="{{route('user.projects.hotel2')}}">
				   <span>Hotel</span>
			   </a>
		</li>
    <li>
		<a href="{{route('user.projects.edificio')}}">
				   <span>Multipropósito</span>
			   </a>
		</li>
    <li>
		<a href="{{route('user.projects.gastronomia')}}">
				   <span>Emprendimiento</span>
			   </a>
		</li>
    <li>
		<a href="{{route('user.projects.urbanismo')}}">
				   <span>Urbanismo</span>
			   </a>
		</li>
    <li>
		<a href="{{route('user.projects.testimonios')}}">
				   <span>Testimonios</span>
			   </a>
		</li>
    <li><a href="https://www.contratos.gov.co/consultas/detalleProceso.do?numConstancia=22-19-13109290&g-recaptcha-response=03AGdBq27StjLP0h5b3LG3GQv8ZxYSUzeD2g-MuOaclZvugcbFHnCyQFzN70zJSty3Eu55AiXGySiJbZGa6KytE1ZP-m38QBy3MCUvgyfXFg108g3BkPRsBClneKfXkuO8X7oeBIOXp8drsTO-lsPeaC-26bAIaG6l_VnMdvazoXWT4D1rMtftC8TdnepDJMyYKtDXc8gaXZp0XW1DxtVb23ePPr9XOEoaBMFP2MvMoMDxLN42GrI6XBHJzcLSsntCxskp1k_Y-eFTBVUBt8vunhhFcs1x2DETJ4pDOCTPaO2wgqNJtdNB8s3vcFPXIBN-wHo92UlkZhqKiQdWhkztkyCfIoorIL51Mb3RLRLFAUIYO7WMYm-OA4PO3HTWfxXJrMJO-vo-bdqqb1mjOpgLV25ES6z9ZsFruecJdzCoPad4tLdKKWAFctFOg2ZKK0JMBEajm5FfP_KR6yllgKlLo5CLt-SK8bd6J8ZrTW0pIFSiZ9mOnlefuAA" class="getstarted scrollto" target="_blank"><span>Proyecto de pliegos</span></a>

		</li>
    <li><a href="{{ asset('assets/pdf/Modernizacion.pdf')}}" class="getstarted scrollto" target="_blank"><span>Conoce más</span></a>

		</li>
    <!-- <li class="dropdown">
      <a href="">Lenguajes</a>
      <ul class="submenu">
        <li><a href="{{ url('locale/en') }}">English</a></li>
        <li><a href="{{ url('locale/es') }}">Español</a></li>
      </ul>
    </li> -->
		 
	  </ul>
	  
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>


    </div>
  </header>