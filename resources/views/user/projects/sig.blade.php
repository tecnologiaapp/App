

<!DOCTYPE html>
<html lang="es">



<body>

@include('includes.header.navsig')



  <section id="hero" class="d-flex align-items-center" style="padding-top: 120px;">

    <!-- <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Agencia APP</h1>
          <h2>Medellín, Colombia</h2>
      
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
          
        </div>
      </div>
    </div> -->
    <section id="why-us" class="why-us section-bg" style="padding-top: 120px;">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Sistema de información geografico</h3>
       
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>¿Qué es el sistema de información geográfico (SIG) de la Agencia APP?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                  Es el conjunto de herramientas que recopilan, analizan y representan visualmente información que pueda ser referenciada de manera geográfica mediante planos y mapas virtuales e interactivos para distintas temáticas (Aprovechamiento Económico del Espacio Público, Patrimonio, Arte Urbano, Instrumentos de gestión del suelo, muros verdes, estrategias sociales, etc.) de fuentes variadas (propias, Catastro, POT, Movilidad, DAP.)
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>¿Para que sirve? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    El SIG integra en la información geográfica de interés para el distrito con el fin de servir como base para la toma de decisiones, diseño de políticas públicas y la planeación de la ciudad a corto, mediano y largo plazo. Así como mostrar la huella geográfica de la entidad en el territorio distrital.

                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>Caracteristicas <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                   Herramientas interactivas tales como; Geovisores, Story Maps, Aplicativos Móviles, Tours Maps, Dashboards, Formularios Inteligentes, Mapas Web, Colecciones de Layers, entre otras, dispuestas para que ciudadanos y entidades pueden explorar intuitivamente y descargar de forma libre.

                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img">
          <img src="{{ asset('assets/img/fon.png')}}" class="img-fluid animated" alt="">
          </div>
        </div>

      </div>
    </section>

  </section>

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <!-- <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sobre nosotros</h2>
        </div>

        <div class="row content">
          <div class="col-center">
          <p>
          La Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas – APP-, es un ente con carácter descentralizado adscrito a la Alcaldía de Medellín; Una unidad administrativa especial, del orden municipal, con personería jurídica, autonomía administrativa, financiera, presupuestal y patrimonial, que hace parte del Presupuesto General del Distrito Especial de Ciencia, Tecnología e Innovación de Medellín con lo establecido en el artículo 3 del Decreto 006 de 1998.

Tenemos como misión gestionar y promover acciones que den sostenibilidad al espacio público, al paisaje y al patrimonio. Además, responsables de promover la generación de recursos a través de la implementación de los instrumentos de financiación definidos en el Plan de Ordenamiento Territorial y fomentar la incorporación de capitales privados a proyectos de inversión para beneficio público.
            </p>

         
        </div>

      </div>
    </section> -->

    <!-- ======= Why Us Section ======= -->
   <!-- End Why Us Section -->


    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset('assets/img/skills.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Gestionado</h3>
            <p class="fst-italic">
            Avance general de la información disponible para la consulta ciudadana
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">Mapas <i class="val">30</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Mapa Web <i class="val">30</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Dashboard <i class="val">30</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Equipo</h2>
          <p>El proceso SIG de la Subdirección Paisaje y Patrimonio, está conformado por profesionales en el área de la geomática y que bajo el esquema de trabajo en el que desde el proceso se establece un enlace técnico en cada equipo o proyecto para la implementación de estándares geográficos y orientar los procesos desde la visión estratégica del uso de la información geográfica se garantiza una adecuada gestión de la misma y un conjunto de datos geográficos interoperables.</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-6">
            <div class="member d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100"> 
              <div class="pic"><img src="assets/img/team/anibal.olarte.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Anibal Olarte Valbuena</h4>
                <span>Contratista – Profesional de apoyo técnico</span>
                <p>anibal.olarte@app.gov.co</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mauricio Correa</h4>
                <span>Arquitecto</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Alexis Espinosa</h4>
                <span>Desarrollador</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Aldemar Echavarria</h4>
                <span>Comunicaciones</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
             
                </div>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Team Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Glosario</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>       

      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

   

  </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer">


<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-2 footer-contact">
        <h3>Agencia APP</h3>
        <p>
        Medellin / Antioquia <br>
        Carrera 55 # 42-180 Local 203 Edificio Plaza de La Libertad<br>  
          <strong>Telefono:</strong> +57 604 448 1740<br>
          <strong>Correo:</strong> info@app.gov.co<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-2 footer-links">
        <h4>Mapa del sitio</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Expediente geografico</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Datos abiertos</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Contacto</a></li>
        </ul>
      </div>


 
    <div class="col-lg-2 col-md-2 footer-links">
        <h4>Geoportales</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="https://play.google.com/store/apps/details?id=co.com.hyg.HuecosMed&hl=es&gl=US" target="_blank">Reportes Med</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="https://www.medellin.gov.co/sau/" target="_blank">Árbol Urbano – SAU</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="https://www.medellin.gov.co/mapgis9/mapa.jsp?aplicacion=1&css=css/app_mapas_medellin.css" target="_blank">MapGIS</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="https://geomedellin-m-medellin.opendata.arcgis.com/" target="_blank">OpenData Medellín</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="https://www.medellin.gov.co/giscatalogacion/srv/spa/catalog.search#/home" target="_blank">GIS Catalogación Medellín</a></li>
        </ul>
      </div>
      
      <div class="col-lg-2 col-md-2 footer-links">
        <h4>Geoportales</h4>
        <ul>

          <li><i class="bx bx-chevron-right"></i> <a href="https://geoportal.dane.gov.co/" target="_blank">DANE</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="https://gobantioquia.maps.arcgis.com/apps/webappviewer/index.html?id=e7909ee1328b455e96a862dd28c6de0d" target="_blank">Gobernación Antioquia</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="https://www.datos.gov.co/" target="_blank">Datos Abierto Gobierno</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="https://play.google.com/store/apps/details?id=co.com.hyg.mpio.urbamed&hl=es_CO&gl=US" target="_blank">UrbaMED</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="https://cu.epm.com.co/clientesyusuarios/geoportal" target="_blank">EPM</a></li>
        </ul>
      </div>



      <div class="col-lg-2 col-md-2 footer-links align-items-center">
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
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>


<!-- Template Main JS File -->
<script src="{{ asset('assets/js/patrimonio.js')}}"></script>



</body>

</html>