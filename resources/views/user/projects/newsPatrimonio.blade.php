<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Noticias</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href= "{{ asset('assets/imagenes/favicon.png') }}" rel="icon"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href= "{{ asset('assets/imagenes/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link rel="stylesheet" href="{{ asset('assets/vend/aos/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vend/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vend/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vend/boxicons/css/boxicons.min.css') }}">  
  <link rel="stylesheet" href="{{ asset('assets/vend/glightbox/css/glightbox.min.css') }}"> 
  <link rel="stylesheet" href="{{ asset('assets/vend/swiper/swiper-bundle.min.css') }}">

  <!-- Template Main CSS File -->

  <link rel="stylesheet" href="{{ asset('assets/css/patrimonio.css') }}">

</head>
<style>
  .carousel-control-prev-icon,
.carousel-control-next-icon {
 background-color:black;
}

.a{
    color:black;
}

</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

    <a href="{{ url('/') }}">
        <img src="{{ asset('assets/img/Proyectos/logo-landing.png') }}"  style=" width: 200px;  padding-left: 25px;"/> </a>


      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="{{ route('user.projects.patrimonio') }}">Programación</a></li>
          <li><a class="nav-link scrollto active" href="{{ route('user.projects.newsPatrimonio') }}">Noticias</a></li>
          <!-- <li><a class="nav-link scrollto" href="">Galeria</a></li> -->
          <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section>
  <picture>
  <source media="(min-width: 800px)" srcset="https://i.ibb.co/xhRXpGB/CABEZOTE.png">
  <source media="(min-width: 330px)" srcset="https://i.ibb.co/Jqd1zcY/CABEZOTE-2.png">
  <img src="https://i.ibb.co/xhRXpGB/CABEZOTE.png" style="width:100% " alt="Ejemplo">
</picture>
  </section>
  <!-- End Hero -->

  <main id="main" style="background-color: #f1e8da;">

  <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

      <div class="row justify-content-center">
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <!-- <div><img src="{{ asset('assets/img/patrimonio/Activacion cultural.jpeg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div> -->
              <h6>Jueves 9 de septiembre</h6>
              <h3 class="title"><a href="">Así se trabaja para conservar el patrimonio de Medellín</a></h3>
              <p class="description">El discurso de progreso que fue característico en la capital antioqueña durante la segunda mitad del siglo XX, arrasó con gran parte de la historia de Medellín.</p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://www.centropolismedellin.com/asi-se-trabaja-para-conservar-el-patrimonio-de-medellin/"><b>Ver noticia</b></a></button></div>
            </div>
          </div>

  
        </div>

      <div class="row justify-content-center" style="margin-top: 30px;">
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <!-- <div><img src="{{ asset('assets/img/patrimonio/Activacion cultural.jpeg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div> -->
              <h6>Jueves 8 de septiembre</h6>
              <h3 class="title"><a href="">En Medellín 60 esculturas serán intervenidas en el marco de la Fiesta del Patrimonio 2022</a></h3>
              <p class="description">Medellín celebra la Fiesta del Patrimonio con una serie de actividades de restauración, difusión y encuentros para residentes y turistas enmarcadas en esta celebración.</p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://www.minuto30.com/medellin-60-esculturas-intervenidas-patrimonio/1362546/"><b>Ver noticia</b></a></button></div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <!-- <div><img src="{{ asset('assets/img/patrimonio/V2DHPN3OTNG7NKOKQWIWRPTCBA.webp')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div> -->
            <h6>Jueves 8 de septiembre</h6>
              <h3 class="title"><a href="">Septiembre es el mes del patrimonio</a></h3>
              <p class="description">Septiembre es el mes del patrimonio y como parte de la celebración se intervendrán más de 60 esculturas de la ciudad desgastadas o vandalizadas.</p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/3x7t0MQ"><b>Ver noticia</b></a></button></div>
             
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <!-- <div><img src="{{ asset('assets/img/patrimonio/olaya-herrera-750x375.jpeg')}}" class="menu-img img-fluid" style="margin-bottom: 10px; height: 162px;"></div> -->
            <h6>Jueves 8 de septiembre</h6>
              <h3 class="title"><a href="">Septiembre, mes del patrimonio</a></h3>
              <p class="description">En 24 recorridos temáticos, los habitantes de la ciudad podrán conocer las historias y los lugares patrimoniales del centro de Medellín.</p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/3eBtnc1"><b>Ver noticia</b></a></button></div>

            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <!-- <div><img src="{{ asset('assets/img/patrimonio/_0023_Atención a Medios Fiesta del Patrimonio 2022 “Historias por Contar”.- Astor (1).jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div> -->
              <h6>Jueves 8 de septiembre</h6>
              <h3 class="title"><a href="">La Fiesta del Patrimonio</a></h3>
              <p class="description">Más de 60 actividades acompañarán la Fiesta del Patrimonio, esta hora se realiza el lanzamiento de este evento que es invitación del centro de la ciudad y de la Secretaría de Cultura.</p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/3TXWoyQ"><b>Ver noticia</b></a></button></div>
            </div>
          

        </div>

      <div class="row justify-content-center" style="margin-top: 30px;">
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <!-- <div><img src="{{ asset('assets/img/patrimonio/Activacion cultural.jpeg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div> -->
              <h6>Jueves 1 de septiembre</h6>
              <h3 class="title"><a href="">La celebración de los 90 años del Aeropuerto Olaya Herrera</a></h3>
              <p class="description">Este jueves, 1 de septiembre, inició la Fiesta del Patrimonio 2022, Historias por Contar, con la que el Aeropuerto Olaya Herrera celebrará sus 90 años de existencia.</p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://vivirenelpoblado.com/la-celebracion-de-los-90-anos-del-aeropuerto-olaya-herrera/"><b>Ver noticia</b></a></button></div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <!-- <div><img src="{{ asset('assets/img/patrimonio/V2DHPN3OTNG7NKOKQWIWRPTCBA.webp')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div> -->
              <h6>Jueves 1 de septiembre</h6>
              <h3 class="title"><a href="">Medellín da inicio a la Fiesta del Patrimonio 2022 ‘Historias por Contar’</a></h3>
              <p class="description">La administración comenzará esta icónica celebración con un show de luces decorativas ornamentales en el edificio del aeropuerto Olaya Herrera, conmemorando su 90 aniversario</p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://www.infobae.com/america/colombia/2022/09/01/medellin-da-inicio-a-la-fiesta-del-patrimonio-2022-historias-por-contar/"><b>Ver noticia</b></a></button></div>
             
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <!-- <div><img src="{{ asset('assets/img/patrimonio/olaya-herrera-750x375.jpeg')}}" class="menu-img img-fluid" style="margin-bottom: 10px; height: 162px;"></div> -->
              <h6>Jueves 1 de septiembre</h6>
              <h3 class="title"><a href="">El Aeropuerto Olaya Herrera cumple 90 años y los celebrará con la Fiesta del Patrimonio 2022</a></h3>
              <p class="description">Expertos en Patrimonio participan de la celebración y hacen un reconocimiento al carácter e identidad del aeropuerto como actor clave en el desarrollo de la ciudad.</p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://elmetro.com.co/el-aeropuerto-olaya-herrera-cumple-90-anos/"><b>Ver noticia</b></a></button></div>

            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <!-- <div><img src="{{ asset('assets/img/patrimonio/_0023_Atención a Medios Fiesta del Patrimonio 2022 “Historias por Contar”.- Astor (1).jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div> -->
              <h6>Jueves 1 de septiembre</h6>
              <h3 class="title"><a href="">Este jueves inicia la Fiesta del Patrimonio 2022 “Historias por Contar”</a></h3>
              <p class="description">La Alcaldía de Medellín encenderá este 1 de septiembre una serie de luces decorativas ornamentales, contratadas con EPM, que exaltan el edificio del Aeropuerto Olaya Herrera, declarado Monumento Nacional en 1995.</p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://analisisurbano.org/este-jueves-inicia-la-fiesta-del-patrimonio-2022-historias-por-contar/233839/"><b>Ver noticia</b></a></button></div>
            </div>
          

        </div>

      </div>
    </section>

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

        
  <picture>
  <source media="(min-width: 800px)" srcset="https://i.ibb.co/KhZ0L6f/footer.png">
  <source media="(min-width: 330px)" srcset="https://i.ibb.co/MRY1jK6/PATA-2.png">
  <img src="https://i.ibb.co/KhZ0L6f/footer.png" style="width:100% ">
</picture>
          

  <footer id="footer">

    
    
    

    <div class="footer-top">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Agencia APP<span></span></h3>
            <p>
            Medellín / Antioquia <br>
            Carrera 55 # 42-180 Local 203.  <br>
            Edificio Plaza de La Libertad<br><br>
              <strong>Telefono:</strong> +57 604 448 1740<br>
              <strong>Correo:</strong> info@app.gov.co<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Redes sociales</h4>
            <p>Síguenos y entérate de todo lo que pasa con nosotros</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/agenciaappmed?lang=es" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.instagram.com/agenciaappmed/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCV1jArK6Q8cgXX7ESNocJxA" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
              
            </div>
          </div>

        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="{{ asset('assets/vend/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('assets/vend/aos/aos.js')}}"></script>
  <script src="{{ asset('assets/vend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vend/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets/vend/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/vend/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vend/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{ asset('assets/vend/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/man.js')}}"></script>

</body>

</html>