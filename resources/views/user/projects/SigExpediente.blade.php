<!DOCTYPE html>
<html lang="es">
<style>
.tabs {
  display: flex;
  justify-content: center;
}

.tab {
  margin-right: 20px;
}

.tab-button {
  border-radius: 5px;
  background-color: transparent;
  border: 1px solid #ccc;
  padding: 10px 20px;
  margin-right: 10px;
}

.tab-button:hover {
  background-color: #007bff;
  color: #fff;
  border-color: #007bff;
}

.btn-tab {
    font-family: "Raleway", sans-serif;
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 10px 30px;
    border-radius: 50px;
    transition: 0.5s;
    color: #3498db;
    border: 2px solid #3498db;
  }
  
.btn-tab:hover {
    background: #3498db;
    color: #fff;
  }

  .btn-tab.active {
  background-color: #3498db;
  color: #fff;
}


@media only screen and (max-width: 768px) {
  .tabs {
    flex-direction: column;
    align-items: center;
  }

  .tab {
    margin-right: 0;
    margin-bottom: 10px;
  }

  .tab:last-child {
    margin-bottom: 0;
  }
}

.btn-blue {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 30px;
  border-radius: 50px;
  transition: 0.5s;
  color: #ffffff;
  border: 2px solid #fbfbfb;
  
}

.btn-blue:hover {
  background: #3498db;
  color: #fff;
  border: 2px solid #3498db;
}
</style>
<body>

@include('includes.header.navsig')


  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" >
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeria de mapas</h2>
          <p>Bienvenidos al catálogo de herramientas geográficas para consultar la cartografía producida para los diferentes proyectos que gestiona la Agencia APP desde sus distintas Subdirecciones.</p>

        </div>

        <div class="section-subtitle">
          <h2>¿Cómo acceder?</h2>
          <ul>
            <li>
            Seleccione la herramienta de interés.
            </li>
            <li>
            Consúltelo por diferentes categorías, por capas o dirección especifica.
            </li>
            <li>
            Conoce el detalle de los proyectos que cualificaran el paisaje urbano de la ciudad, recuperaran el Patrimonio, los proyectos APP y gestionaran los bienes fiscales.
            </li>
          </ul>
   
        </div>

        <div class="tab-container">
          <div class="tabs">
            <button class="tab btn-tab" data-target="tab-1">Story Maps</button>
            <button class="tab btn-tab" data-target="tab-2">Mapa Web</button>
            <button class="tab btn-tab" data-target="tab-3">Aplicación Web</button>
            <button class="tab btn-tab" data-target="tab-4">Dashboard</button>
            <button class="tab btn-tab" data-target="tab-5">App Móvil</button>
            <button class="tab btn-tab" data-target="tab-6">Ortofoto</button>
            <button class="tab btn-tab" data-target="tab-7">Modelo 3D (Sketchup)</button>
            <!-- <button class="tab btn-tab" data-target="tab-4">Formularios</button> -->
          </div>

          <div class="tab-content">
              <div id="tab-1" class="tab-pane">
              <div class="row mt-3" style="text-align:justify;">
                <h5>Descubre historias extraordinarias de los proyectos de la Agencia APP en Medellín a través de
              nuestros envolventes y visuales StoryMaps. Explora revitalizaciones urbanas, intervenciones
              sociales y desarrollo sostenible en un recorrido interactivo. Sumérgete en un mundo de
              transformación y construcción de un futuro mejor en solo unos clics. ¡Explora ahora!</h5>
              </div>
              @if(count($Story) > 0)
                  <div class="row">
                      @foreach($Story as $story)
                        @if($story->categoria == 'Story Maps')
                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-4 portfolio-item" data-aos="fade-up" data-aos-delay="400">
                          <div class="portfolio-img"><a href="{{$story->enlace}}" target="_blank"><img src="{{ asset('recurso/' . $story->imagen) }}" class="img-fluid" alt=""></a></div>
                            <div class="portfolio-info">
                              <h4>{{$story->titulo}}</h4>
                              <!-- <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dashboard 1"><i class="bx bx-plus"></i></a> -->
                            </div>
                          </div>
                        @endif   
                      @endforeach
                  </div>
                  <div class="d-flex justify-content-center pt-5">
                      {{ $Story->links() }}
                  </div>   
              @else
              <div class="d-flex justify-content-center align-items-center" style="height: 30vh;">
                  <h1>No hay contenido disponible</h1>
              </div>
              @endif
              </div>

              <div id="tab-2" class="tab-pane">
              <div class="row mt-3" style="text-align:justify;">
                <h5>Explora visualizaciones interactivas de gestión de subdirecciones en nuestros Mapas Web de
ArcGIS Online. Accede a información detallada de AEEP, Patrimonio, Gestión Inmobiliaria, Arte
Urbano, Gestión Social, Paisaje Urbano y más. Descubre todo en un solo lugar. ¡Accede ahora a
nuestros Mapas Web!</h5>
              </div>
              @if(count($Mapa) > 0)
                  <div class="row">
                      @foreach($Mapa as $mapa)
                        @if($mapa->categoria == 'Mapa Web')
                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-4 portfolio-item" data-aos="fade-up" data-aos-delay="400">
                          <div class="portfolio-img"><a href="{{$mapa->enlace}}" target="_blank"><img src="{{ asset('recurso/' . $mapa->imagen) }}" class="img-fluid" alt=""></a></div>
                            <div class="portfolio-info">
                              <h4>{{$mapa->titulo}}</h4>
                              <!-- <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dashboard 1"><i class="bx bx-plus"></i></a> -->
                            </div>
                          </div>
                        @endif   
                      @endforeach
                  </div>
                  <div class="d-flex justify-content-center pt-5">
                      {{ $Mapa->links() }}
                  </div>   
              @else
              <div class="d-flex justify-content-center align-items-center" style="height: 30vh;">
                  <h1>No hay contenido disponible</h1>
              </div>
              @endif
              </div>


              <div id="tab-3" class="tab-pane">
              <div class="row mt-3" style="text-align:justify;">
                <h5>Consulta y explora diversas aplicaciones WEB en ArcGIS Online, que almacenan información
valiosa para la gestión diaria de la Agencia APP. Unifica Mapas WEB, datos 2D y 3D en una
plataforma accesible desde dispositivos móviles.</h5>
              </div>
              @if(count($Aplicacion) > 0)
                  <div class="row">
                      @foreach($Aplicacion as $apli)
                        @if($apli->categoria == 'Aplicacion Web')
                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-4 portfolio-item" data-aos="fade-up" data-aos-delay="400">
                          <div class="portfolio-img"><a href="{{$apli->enlace}}" target="_blank"><img src="{{ asset('recurso/' . $apli->imagen) }}" class="img-fluid" alt=""></a></div>
                            <div class="portfolio-info">
                              <h4>{{$apli->titulo}}</h4>
                              <!-- <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dashboard 1"><i class="bx bx-plus"></i></a> -->
                            </div>
                          </div>
                        @endif   
                      @endforeach
                  </div>
                  <div class="d-flex justify-content-center pt-5">
                      {{ $Aplicacion->links() }}
                  </div>   
              @else
              <div class="d-flex justify-content-center align-items-center" style="height: 30vh;">
                  <h1>No hay contenido disponible</h1>
              </div>
              @endif
              </div>


              <div id="tab-4" class="tab-pane">
              <div class="row mt-3" style="text-align:justify;">
                <h5>Sumérgete en visualizaciones de datos intuitivas e interactivas en nuestros Dashboard. Toma
decisiones oportunas, explora cifras relevantes y monitorea proyectos en tiempo real.
Optimizamos la gestión de la Agencia APP con potentes herramientas de visualización.</h5>
              </div>
              @if(count($Dashboard) > 0)
                  <div class="row">
                      @foreach($Dashboard as $dash)
                        @if($dash->categoria == 'Dashboard')
                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-4 portfolio-item" data-aos="fade-up" data-aos-delay="400">
                          <div class="portfolio-img"><a href="{{$dash->enlace}}" target="_blank"><img src="{{ asset('recurso/' . $dash->imagen) }}" class="img-fluid" alt=""></a></div>
                            <div class="portfolio-info">
                              <h4>{{$dash->titulo}}</h4>
                              <!-- <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dashboard 1"><i class="bx bx-plus"></i></a> -->
                            </div>
                          </div>
                        @endif   
                      @endforeach
                  </div>
                  <div class="d-flex justify-content-center pt-5">
                      {{ $Dashboard->links() }}
                  </div>   
              @else
              <div class="d-flex justify-content-center align-items-center" style="height: 30vh;">
                  <h1>No hay contenido disponible</h1>
              </div>
              @endif
              </div>


              <div id="tab-5" class="tab-pane">
              <div class="row mt-3" style="text-align:justify;">
                <h5>Juntos, construimos soluciones. Recopilamos datos georreferenciados a través de formularios
inteligentes hechos con Survey123 para abordar las problemáticas del distrito. ¡Participa en la
recolección de datos de manera sencilla y ágil! Únete a la acción y crea un impacto positivo.</h5>
              </div>
              @if(count($App) > 0)
                  <div class="row">
                      @foreach($App as $app)
                        @if($app->categoria == 'App Movil')
                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-4 portfolio-item" data-aos="fade-up" data-aos-delay="400">
                          <div class="portfolio-img"><a href="{{$app->enlace}}" target="_blank"><img src="{{ asset('recurso/' . $app->imagen) }}" class="img-fluid" alt=""></a></div>
                            <div class="portfolio-info">
                              <h4>{{$app->titulo}}</h4>
                              <!-- <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dashboard 1"><i class="bx bx-plus"></i></a> -->
                            </div>
                          </div>
                        @endif   
                      @endforeach
                  </div>
                  <div class="d-flex justify-content-center pt-5">
                      {{ $App->links() }}
                  </div>   
              @else
              <div class="d-flex justify-content-center align-items-center" style="height: 30vh;">
                  <h1>No hay contenido disponible</h1>
              </div>
              @endif
              </div>

              <div id="tab-6" class="tab-pane">
              <div class="row mt-3" style="text-align:justify;">
                <h5>Información esencial para diseño, planeación y exploración territorial. Acceda a ortofotos de alta
              calidad y precisión con un solo clic. Útiles para ciudadanos y entidades. ¡Descubre el territorio
              distrital de forma visual y detallada!</h5>
              </div>
              @if(count($Ortofoto) > 0)
                  <div class="row">
                      @foreach($Ortofoto as $orto)
                        @if($orto->categoria == 'Ortofoto')
                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-4 portfolio-item" data-aos="fade-up" data-aos-delay="400">
                          <div class="portfolio-img"><a href="{{$orto->enlace}}" target="_blank"><img src="{{ asset('recurso/' . $orto->imagen) }}" class="img-fluid" alt=""></a></div>
                            <div class="portfolio-info">
                              <h4>{{$orto->titulo}}</h4>
                              <!-- <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dashboard 1"><i class="bx bx-plus"></i></a> -->
                              @if($orto->archivo)
                                  <div class="text-center">
                                      <a href="{{ asset('recurso/' . $orto->archivo) }}" target="_blank" class="btn-blue">Descargar</a>
                                  </div>
                              @endif
                            </div>
                          </div>
                        @endif   
                      @endforeach
                  </div>
                  <div class="d-flex justify-content-center pt-5">
                  {{ $Ortofoto->links() }}
                  </div>   
              @else
              <div class="d-flex justify-content-center align-items-center" style="height: 30vh;">
                  <h1>No hay contenido disponible</h1>
              </div>
              @endif
              </div>


            <div id="tab-7" class="tab-pane">
              <div class="row mt-3" style="text-align:justify;">
                <h5>Descubre nuestra colección de modelos 3D (.Skp, versión 2021) de bienes culturales e inmuebles
                destacados. Detalles precisos de fachadas o interiores; construidos para el proceso de diseño en
                proyectos de iluminación arquitectónica y gestión urbana. ¡Explora la belleza arquitectónica de la
                ciudad en formato 3D!</h5>
              </div>
              @if(count($Modelo) > 0)
                  <div class="row">
                      @foreach($Modelo as $mode)
                        @if($mode->categoria == 'Modelo 3D')
                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-4 portfolio-item" data-aos="fade-up" data-aos-delay="400">
                          <div class="portfolio-img"><a href="{{ asset('recurso/' . $mode->archivo) }}" target="_blank"><img src="{{ asset('recurso/' . $mode->imagen) }}" class="img-fluid" alt=""></a></div>
                            <div class="portfolio-info">
                              <h4>{{$mode->titulo}}</h4>
                              <!-- <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dashboard 1"><i class="bx bx-plus"></i></a> -->
                            </div>
                          </div>
                        @endif   
                      @endforeach
                  </div>
                  <div class="d-flex justify-content-center pt-5">
                  {{ $Modelo->links() }}
                  </div>   
              @else
              <div class="d-flex justify-content-center align-items-center" style="height: 30vh;">
                  <h1>No hay contenido disponible</h1>
              </div>
              @endif
              </div>
        
          </div>
        </div>

    </div>
  </section>
    <!-- End Portfolio Section -->

  </main>
  <!-- End #main -->

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
        <h4>Portales</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('user.projects.aeep') }}" target="_blank">Reportes Med</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('user.projects.aeep') }}" target="_blank">SIAMED</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('user.projects.aeep') }}" target="_blank">La Perla</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('user.projects.aeep') }}" target="_blank">Árbol Urbano – SAU</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('user.projects.aeep') }}" target="_blank">MapGIS</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('user.projects.aeep') }}" target="_blank">OpenData Medellín</a></li>
         
        </ul>
      </div>
      
      <div class="col-lg-2 col-md-2 footer-links">
        <h4>Portales</h4>
        <ul>
        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('user.projects.aeep') }}" target="_blank">GIS Catalogación Medellín</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('user.projects.aeep') }}" target="_blank">GISTO</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('user.projects.aeep') }}" target="_blank">DANE</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('user.projects.aeep') }}" target="_blank">Catastro Antioquia</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('user.projects.aeep') }}" target="_blank">Datos Abierto Gobierno</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('user.projects.aeep') }}" target="_blank">UrbaMED</a></li>
        </ul>
      </div>



      <div class="col-lg-2 col-md-2 footer-links">
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
$(document).ready(function() {
  // Obtén el tab activo almacenado en localStorage
  var activeTab = localStorage.getItem('activeTab');
  if (activeTab) {
    $('.btn-tab[data-target="' + activeTab + '"]').addClass('active');
    $('#' + activeTab).addClass('active');
  }

  // Manejar el evento de clic en los botones de tab
  $('.btn-tab').click(function() {
    // Obtener el ID del tab objetivo
    var target = $(this).data('target');

    // Quitar la clase "active" de todos los botones de tab y contenidos de tab
    $('.btn-tab').removeClass('active');
    $('.tab-pane').removeClass('active');

    // Agregar la clase "active" al botón de tab y contenido de tab correspondientes
    $(this).addClass('active');
    $('#' + target).addClass('active');

    // Actualizar la URL de la página con la página 1
    var url = new URL(window.location.href);
    url.searchParams.set('page', 1);
    history.replaceState(null, '', url.toString());

    // Almacenar el tab activo en localStorage
    localStorage.setItem('activeTab', target);
  });

  // Obtener el tab activo de la URL y activarlo
  var urlParams = new URLSearchParams(window.location.search);
  var activeTab = urlParams.get('tab');
  if (activeTab) {
    $('.btn-tab[data-target="' + activeTab + '"]').trigger('click');
  }

  // Manejar el evento de clic en los enlaces del paginador
  $('.pagination-link').click(function(e) {
    e.preventDefault(); // Evitar la acción predeterminada del enlace

    // Obtener el ID del tab objetivo desde el atributo data-tab
    var targetTab = $(this).attr('data-tab');

    // Actualizar la URL de la página con el nuevo tab y la página 1
    var url = new URL(window.location.href);
    url.searchParams.set('page', 1);
    history.replaceState(null, '', url.toString());

    // Activar el tab correspondiente al enlace del paginador
    $('.btn-tab[data-target="' + targetTab + '"]').trigger('click');
  });
});
</script>
</body>

</html>