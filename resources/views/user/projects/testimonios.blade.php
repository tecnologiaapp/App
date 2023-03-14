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
    <div class="container d-flex align-items-center" style="margin-left: 2px;">

  
    <img class="logo me-auto" src="https://app.gov.co/assets/img/Proyectos/logo-landing.png"  style=" width: 200px;
    height: 90px;">

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
    
        <!-- Quote/testimonial aside-->
        <header class="masthead">
            <!-- <div class="container px-5">
                <div class="row gx-5 align-items-center">
             
                            <h6 class="display-1 lh-1 mb-3" style="font-size: 2rem;">Una pasión que se transforma</h6>
                            <p class="lead fw-normal text-muted mb-5">La Unidad Deportiva Atanasio Girardot es uno de los complejos deportivos de mayor importancia en Colombia, por su legado histórico, social, deportivo y para el entretenimiento. Cuenta con una ubicación estratégica, cercana a vías principales y conectado al sistema de transporte público, promueve el desarrollo urbanístico del sector Centro Occidental, tiene múltiples escenarios para las prácticas deportivas y ha albergado importantes eventos internacionales, como los Juegos Centroamericanos y del Caribe en 1978, los Juegos Suramericanos en 2010, la Copa Mundial de Fútbol Sub-20 de la FIFA en 2011 y conciertos de artistas como Madonna, Beyoncé, Bad Bunny, J Balvín y Maluma.</p>
                        
                </div>
            </div> -->
             <!-- ======= Features Section ======= -->
    <section id="features" class="features" style="padding-top: 20px;">
      <div class="container">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

          <div class="col-md-6">
          <iframe width="100%" height="300" src="https://www.youtube.com/embed/xbi0rNrBq-k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-6">
            <h4>¡Celebrar un gol en el Estadio Atanasio Girardot es una alegría!</h4>
            <p>Conoce la historia de Osvaldo Javier Giraldo, un hincha del fútbol que sueña con la transformación de la Unidad Deportiva Atanasio Girardot. </p>
          </div>
        </div>
            <br>
           
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-6 order-1 order-md-2">
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/0XzK7HJxyY8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 order-2 order-md-1">
            <h4>Una modernización para mejorar </h4>
            <p>Luz Marina Rodríguez es una comerciante que sueña con mejorar sus ventas y brindar productos de calidad a los usuarios de la Unidad Deportiva Atanasio Girardot. Conoce su historia. </p>
                <!-- <h3>ADN PRADO (Área de Desarrollo Naranja)</h3>
                <p>
                Las Áreas de Desarrollo Naranja (ADN), según la Ley 1955 de 2019, son espacios delimitados y reconocidos que operan como centros de actividad económica y creativa, contribuyen a la renovación urbana, fortalecen el emprendimiento, el empleo basado en la creatividad, el turismo y la recuperación del patrimonio cultural construido.
                </p>
                <p>El barrio Prado, gracias al aval del Ministerio de Cultura cuenta con el reconocimiento de ADN desde el 2021 y junto con los actores del territorio se ha venido desarrrollando el modelo de gobernanza que establezca las estrategias integrales para la promoción de las actividades económicas del sector creativo y cultural.</p> -->
            </div>
            </div>
            <br>
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-6">
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/rzx4U4MN4Xc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-6">
            <h4>La Unidad Deportiva Atanasio Girardot es integración, familia y deporte</h4>
            <p>Carlos Quintero Monsalve es un ciclista que vive el corazón deportivo de Medellín. Sueña con un espacio seguro y en constante transformación.</p>
          </div>
        </div>
        <br>
        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-6 order-1 order-md-2">
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/8lI8yiCWXP8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 order-2 order-md-1">
            <h4>"La unidad deportiva lo es todo"</h4>
            <p>Conrado Ibarra es uno de los venteros de la Unidad Deportiva Atanasio Girardot que, por muchos años, ha ofrecido sus productos a visitantes y turistas. Juntos, Agencia APP y comerciantes, seguimos trabajando para dignificar los espacios, mejorar las ventas, aumentar la competitividad y ampliar la oferta de productos y servicios.</p>
            </div>
            </div>
            <br>
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-6">
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/svW1d3P53eo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-6">
            <h4>¡Por una mejor calidad de vida!</h4>
            <p>Con la modernización de la Unidad Deportiva Atanasio Girardot nosotros y las futuras generaciones seguiremos disfrutando de este espacio para vivir nuevas experiencias alrededor del deporte, la cultura y el entretenimiento.</p>
          </div>
        </div>
      </div>

      </div>
    </section><!-- End Features Section -->
        </header>

        <!-- Footer-->
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