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
    <li class="dropdown btn-book-a-table"><a href="https://www.contratos.gov.co/consultas/detalleProceso.do?numConstancia=22-19-13109290&g-recaptcha-response=03AGdBq27StjLP0h5b3LG3GQv8ZxYSUzeD2g-MuOaclZvugcbFHnCyQFzN70zJSty3Eu55AiXGySiJbZGa6KytE1ZP-m38QBy3MCUvgyfXFg108g3BkPRsBClneKfXkuO8X7oeBIOXp8drsTO-lsPeaC-26bAIaG6l_VnMdvazoXWT4D1rMtftC8TdnepDJMyYKtDXc8gaXZp0XW1DxtVb23ePPr9XOEoaBMFP2MvMoMDxLN42GrI6XBHJzcLSsntCxskp1k_Y-eFTBVUBt8vunhhFcs1x2DETJ4pDOCTPaO2wgqNJtdNB8s3vcFPXIBN-wHo92UlkZhqKiQdWhkztkyCfIoorIL51Mb3RLRLFAUIYO7WMYm-OA4PO3HTWfxXJrMJO-vo-bdqqb1mjOpgLV25ES6z9ZsFruecJdzCoPad4tLdKKWAFctFOg2ZKK0JMBEajm5FfP_KR6yllgKlLo5CLt-SK8bd6J8ZrTW0pIFSiZ9mOnlefuAA" class="getstarted scrollto" target="_blank"><span>Proyecto de pliegos</span></a>

		</li>
    <li class="dropdown btn-book-a-table"><a href="{{ asset('assets/pdf/Modernizacion.pdf')}}" class="getstarted scrollto" target="_blank"><span>Conoce más</span></a>

		</li>
		 
	  </ul>
	  
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>


    </div>
  </header>
  <body id="page-top">
        <!-- Mashead header--> 
        <section style="padding-bottom: 0rem;">
        <div style="padding-top:25px;">
         <picture>
            <source media="(min-width: 800px)" srcset="{{ asset('assets/img/Proyectos/Hom.png') }}">
            <source media="(min-width: 330px)" srcset="{{ asset('assets/img/Proyectos/MOBILE-1.png') }}">
            <img src="{{ asset('assets/img/Proyectos/Hom.png') }}" style="width:100% " alt="Ejemplo">
        </picture>
        </div>
        <!-- <img src="{{ asset('assets/img/Proyectos/Hom.png') }}" style="position: relative; width:100%; height:700px; background-size: 100% 100%;" /> -->
        </section>
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                                         
                            <h6 class="display-1 lh-1 mb-3" style="font-size: 2rem;">Una pasión que se transforma</h6>
                            <p class="lead fw-normal text-muted mb-5">La Unidad Deportiva Atanasio Girardot es uno de los complejos deportivos de mayor importancia en Colombia, por su legado histórico, social, deportivo y para el entretenimiento. Cuenta con una ubicación estratégica, cercana a vías principales y conectado al sistema de transporte público, promueve el desarrollo urbanístico del sector Centro Occidental, tiene múltiples escenarios para las prácticas deportivas y ha albergado importantes eventos internacionales, como los Juegos Centroamericanos y del Caribe en 1978, los Juegos Suramericanos en 2010, la Copa Mundial de Fútbol Sub-20 de la FIFA en 2011 y conciertos de artistas como Madonna, Beyoncé, Bad Bunny, J Balvín y Maluma.</p>
                         

                            
                    
                        <p class="lead fw-normal text-muted mb-5">Con el propósito de seguir consolidando a Medellín como una ciudad moderna, con oportunidades para todos y conectada con el mundo, se proyecta la intervención integral de este equipamiento a través de una Asociación Público Privada de iniciativa pública (APP - Ley 1508 de 2012), para posicionar a la ciudad como un escenario de talla internacional. La iniciativa a su vez, busca promover la generación de empleo, el desarrollo económico, la promoción del turismo y nuevas y mejores oportunidades de calidad de vida.</p>
                   
                        <p class="lead fw-normal text-muted mb-5">La Unidad Deportiva Atanasio Girardot es un símbolo de Medellín que promueve más de treinta y cuatro disciplinas deportivas, recibe visitantes del mundo y es un punto de encuentro para la práctica del deporte, la convivencia y el esparcimiento. Este espacio seguirá siendo un lugar abierto para todos los habitantes de la ciudad y sus visitantes.</p>
                    
                </div>
            </div>
        </header>
        <!-- Quote/testimonial aside-->
        <img src="{{ asset('assets/img/Proyectos/banner-hom.png') }}" style=" width:100%;" />
        <div class="container px-5">
                <div class="row gx-5 align-items-center" style="padding-top: 100px;">
                    
                            <!-- <h6 class="display-1 lh-1 mb-3" style="font-size: 2rem;">Modernización Unidad Deportiva Atanasio Girardot, una pasión que se transforma</h6> -->
                            <p class="lead fw-normal text-muted mb-5">Es un mecanismo de contratación donde el Estado vincula capital privado para la construcción y el sostenimiento de infraestructura pública. Este tipo de asociaciones aportan mayor eficiencia, sostenibilidad en la provisión del servicio, ya que cuenta con indicadores de cumplimiento que se miden periódicamente por una interventoría y una supervisión; además, permite el equilibrio en la distribución de riesgos, lo que genera grandes ahorros para el sector público.</p>
                            <p class="lead fw-normal text-muted mb-5">La APP para la modernización de la Unidad Deportiva Atanasio Girardot no contempla  recursos públicos para su desarrollo, lo que quiere decir que todos los recursos para su implementación provienen del socio privado, quien además se encargará de la prestación del servicio y la operación y el mantenimiento de la infraestructura. El socio privado podrá realizar el aprovechamiento económico de las áreas concesionadas.</p>
                </div>
        </div>
        <img src="{{ asset('assets/img/Proyectos/banner2-home.png') }}" style=" width:100%;" />

        <div class="masthead">
        <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    
                            <!-- <h6 class="display-1 lh-1 mb-3" style="font-size: 2rem;">Modernización Unidad Deportiva Atanasio Girardot, una pasión que se transforma</h6> -->
                            <p class="lead fw-normal text-muted mb-5">Es el documento que incorpora las condiciones que se tendrán en cuenta en el proceso de selección del futuro contratista. Establece requisitos para habilitar a los proponentes y asignar puntajes, de acuerdo con su experiencia, capacidad financiera, presupuesto y equipo de trabajo.</p>
                            <p class="lead fw-normal text-muted mb-5">En esta etapa se reciben observaciones de los interesados y se ajustan los pliegos, en caso de ser necesario, para optimizarlos con la retroalimentación del sector privado.</p>
                </div>
        </div>
        </div>


      <div class="container px-5">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
  </div>
  <div class="carousel-inner">

  <div class="carousel-item active">
      <img src="https://i.ibb.co/7gqRQwr/mudag.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/0CwY1pz/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/HFqTMhz/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/ZTVNJfF/3.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="https://i.ibb.co/Zd4kM3g/mudag1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/71YrMmY/C26F2712.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/ssL2bw1/C26F3111.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/TMc5XmZ/C26F7902.jpg" class="d-block w-100" alt="...">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><p>Imágenes de referencia sujetas a cambios.</p>
      </div>
      

      
<div class="container" align="center" style="padding-top: 100px;">
<iframe width="100%" height="515" src="https://www.youtube.com/embed/_shrUjI9WWU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

      <div class="container px-5">
      <div class="row gx-5 align-items-center" style="padding-top: 100px;">
                    
                    <h4 class="display-1 lh-1 mb-3" style="font-size: 3rem;">Un sueño olímpico de siete décadas </h4>
                    <p class="lead fw-normal text-muted mb-5">La Unidad Deportiva Atanasio Girardot fue construida en 1953 bajo el Plan Piloto de Medellín, elaborado en 1950 por los arquitectos extranjeros Paul Wiener y Josep Lluís Sert.</p>
<br>

<img src="https://i.ibb.co/NmqWqZh/h1.png"/>
<p>Imágenes de referencia sujetas a cambios.</p>

        </div>
      </div>
      <img src="{{ asset('assets/img/Proyectos/banner3-home.png') }}" style="width:100%; padding-top: 25px;" />
        <div class="masthead">
        <div class="container px-5">
                <div class="row gx-5 align-items-center" style="padding-top: 10px;">
                    
                <p class="lead fw-normal text-muted mb-5">A través de las décadas siguientes, Medellín ha sido testigo de la transformación y la estimulación del deporte a través de las reformas y mejoramientos realizados a este escenario con el acondicionamiento del Parque Recreativo Atanasio Girardot y la remodelación más ambiciosa hasta entonces, antes de los IX Juegos Suramericanos en 2010, con la intervención del complejo de coliseos, el complejo acuático y zonas públicas y comerciales, consolidándose como uno de los mejores de Latinoamérica.</p>
                </div>
        </div>
        <div class="container px-5">
                <div class="row gx-5 align-items-center" style="padding-top: 30px;">
                    
                            <h6 class="display-1 lh-1 mb-3" style="font-size: 2rem;">Un escenario en transformación para Medellín Futuro</h6>
             
                            <p class="lead fw-normal text-muted mb-5">Hoy nace un nuevo capítulo para la historia de Medellín con la modernización de la unidad deportiva y el cumplimiento de mayores estándares de calidad para la realización de diversos eventos y el mejoramiento de la infraestructura y del espacio público. Con la modernización se proyecta, entre otros aspectos:</p>
                           
                </div>
                
        </div>
        <!-- App features section-->
        <section id="features">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div>
                        <div class="container-fluid px-5">
                        <h1 class="display-1 lh-1 mb-3 text-center">Beneficios</h1>
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-cash-coin icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Inversión</h3>
                                        <p class="text-muted mb-0">Una nueva gran inversión y</p>
                                        <p class="text-muted mb-0"> reinversión nacional y extranjera.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-shop icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Espacio público</h3>
                                        <p class="text-muted mb-0"> <b style="color: #5f1088;">6.000 m²</b>  de espacio público </p>
                                        <p class="text-muted mb-0">efectivo generado.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-shop icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Zonas para el encuentro</h3>
                                        <p class="text-muted mb-0"> <b style="color: #5f1088;"> 102.000 m²</b>  de espacio público mantenido.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-people-fill icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Visitas</h3>
                                        <p class="text-muted mb-0">Aumento de 15.000 a más de<b style="color: #5f1088;"> 17.000</b> visitas </p>
                                        <p class="text-muted mb-0">diarias a la unidad deportiva. </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-clouds icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Medio ambiente</h3>
                                        <p class="text-muted mb-0">Reducción de <b style="color: #5f1088;"> 314.000</b>  toneladas de CO₂ </p>
                                        <p class="text-muted mb-0">o gases de efecto invernadero. </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-building icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Turismo</h3>
                                        <p class="text-muted mb-0">Incremento del <b style="color: #5f1088;">  13% </b> de la ocupación </p>
                                        <p class="text-muted mb-0">hotelera de la ciudad.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-globe icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Cultura</h3>
                                        <p class="text-muted mb-0">Fomento del relevo generacional de las barras.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-graph-up icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Empleo</h3>
                                        <p class="text-muted mb-0">Generación de <b style="color: #5f1088;"> 6.300</b>  empleos anuales en eventos de gran formato, <b style="color: #5f1088;"> 17.850</b>  en partidos de fútbol y <b style="color: #5f1088;" > 157</b>  indirectos por comercio.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Formalidad</h3>
                                        <p class="text-muted mb-0">Aumento del <b style="color: #5f1088;"> 1,26%</b> en la tasa de</p>
                                        <p class="text-muted mb-0"> formalidad de Medellín.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-shield-check icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Seguridad</h3>
                                        <p class="text-muted mb-0">Disminución de los índices de hurto a personas,</p>
                                        <p class="text-muted mb-0"> de vehículos y de motocicletas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </section>
</div>
        </section>

        <section>
        <div class="container px-5">
                <div class="row gx-5 align-items-center">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.ibb.co/0cVzLZQ/mudag1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/Z2ff3Kn/mudag2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/zGSJdRS/mudag3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/Sm8TP8c/mudag4.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><p>Imágenes de referencia sujetas a cambios.</p>
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
                  </div>
                  @endif
                  <form method="POST" action="{{route('contact.enviar')}}"enctype="multipart/form-data" >
                      @csrf

                      <div class="form-group">
                          <label for="name" style="color:white;">Nombre:</label>
                          <input type="text"  name="name" class="form-control"  required>
                      </div>

                      <div class="form-group">
                          <label for="email" style="color:white;">Correo electrónico:</label>
                          <input type="email"  name="email" class="form-control" required>
                      </div>

                      <div class="form-group">
                          <label for="message" style="color:white;">Mensaje:</label>
                          <textarea name="msg" class="form-control" required></textarea>
                      </div>

                      <button type="submit" class="btn btn-primary float-end mt-1" style="background-color:#0082ff; border-color:#b3348a;">Enviar mensaje</button>
                  </form>
                </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="section-title">
                <h2>¿Te gustaría recibir noticias del proyecto o de la Agencia APP?</h2>
              </div>
              <div align="center" style="background-color:#a73e85cf; width:100%; height:290px;  display: flex; justify-content: center; align-items: center; border-radius:20px;">
              <a href="https://docs.google.com/forms/d/e/1FAIpQLSdFFYVllywyhN0On6FTrODjpqgbKrIK_79oXORry-Qt2YPVTA/viewform" class="btn btn-primary btn-block" style="background-color:#0082ff; border-color:#b3348a;" target="_blank">Suscríbete</a>
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
        <p>
        Medellin / Antioquia <br>
        Carrera 55 # 42-180 Local 203 Edificio Plaza de La Libertad<br></p>
       <a href="{{ route('user.projects.mapa') }}"><p><strong>Mapa del sitio</strong></p></a>
       

      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Contacto</h4>
        <p> <strong> Telefono: </strong> +57 604 448 1740</p>
         <p><strong>Correo:</strong> info@app.gov.co</p>
        <p> <strong>Información general:</strong>  info@app.gov.co</p>
        <p> <strong> Notificaciones judiciales:</strong> procesosjudiciales@app.gov.co</p>
     
      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Horario de atención</h4>
       <p> <strong> Lunes - Jueves: </strong> 7:30 AM - 5:30 PM</p>
       <p> <strong> Viernes: </strong> 7:30 AM - 4:30 PM</p>
     
      </div>

        

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Redes Sociales</h4>
        <p>Síguenos y enterate de todo</p>
        <div class="social-links mt-3">
          <a href="https://twitter.com/agenciaappmed?lang=es" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
          
          <a href="https://www.instagram.com/agenciaappmed/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
          
          <a href="https://www.youtube.com/channel/UCV1jArK6Q8cgXX7ESNocJxA" class="youtube" target="_blank"><i class="bx bxl-youtube"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

</footer><!-- End Footer -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   
        <script src="js/scripts.js"></script>
     
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="{{ asset('assets/js/mudag.js')}}"></script>
    </body>
</html>