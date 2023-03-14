<head>
<link rel="stylesheet" href="{{ asset('assets/css/mudag.css') }}">
</head>
<style>
 

*:before,
*:after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
a {
  position: relative;
  text-decoration: none;
}
a:before,
a:after {
  content: "";
  position: absolute;
  height: 3px;
  width: 0;
  background-color: #6d7072;
  transition: 0.5s;
}
a:after {
  left: 0;
  bottom: -2px;
}
a:before {
  right: 0;
  top: -2px;
}
a:hover {
  color: #ae00b3;
}
a:hover:after,
a:hover:before {
  width: 100%;
}
button a:after{
    position: absolute;
  height: 3px;
  width: 0;
  background-color: #6d7072;
  transition: 0.5s;
}

 </style>
 
 <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        
        <div class="container px-5">
        <img src="{{ asset('assets/img/Proyectos/logo-landing.png') }}"  style=" width: 280px;
height: 100px;"/>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="{{route('user.projects.mudag')}}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="{{route('user.projects.estadio2')}}">Estadio</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="{{route('user.projects.hotel2')}}">Hotel</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="{{route('user.projects.edificio')}}">Multipropósito</a></li>                       
                    <li class="nav-item"><a class="nav-link me-lg-3" href="{{route('user.projects.gastronomia')}}">Zona gastro</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="{{route('user.projects.urbanismo')}}">Urbanismo</a></li>
                </ul>
                <a href="https://www.contratos.gov.co/consultas/detalleProceso.do?numConstancia=22-19-13109290&g-recaptcha-response=03AGdBq27StjLP0h5b3LG3GQv8ZxYSUzeD2g-MuOaclZvugcbFHnCyQFzN70zJSty3Eu55AiXGySiJbZGa6KytE1ZP-m38QBy3MCUvgyfXFg108g3BkPRsBClneKfXkuO8X7oeBIOXp8drsTO-lsPeaC-26bAIaG6l_VnMdvazoXWT4D1rMtftC8TdnepDJMyYKtDXc8gaXZp0XW1DxtVb23ePPr9XOEoaBMFP2MvMoMDxLN42GrI6XBHJzcLSsntCxskp1k_Y-eFTBVUBt8vunhhFcs1x2DETJ4pDOCTPaO2wgqNJtdNB8s3vcFPXIBN-wHo92UlkZhqKiQdWhkztkyCfIoorIL51Mb3RLRLFAUIYO7WMYm-OA4PO3HTWfxXJrMJO-vo-bdqqb1mjOpgLV25ES6z9ZsFruecJdzCoPad4tLdKKWAFctFOg2ZKK0JMBEajm5FfP_KR6yllgKlLo5CLt-SK8bd6J8ZrTW0pIFSiZ9mOnlefuAA" target="_blank">
                <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0">
                   
                        <span class="d-flex align-items-center">
                        <i class="bi bi-hand-index me-2"></i>
                        <span class="small">Proyecto de pliegos</span>
                    </span>
                    
                </button>
                </a>
            </div>
        </div>
    </nav>