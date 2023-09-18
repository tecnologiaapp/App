<!DOCTYPE html>
<html lang="es">
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
            <button class="tab btn-tab" data-target="tab-8">Colecciones</button>
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
                          <div class="portfolio-img">
                          @if (isset($story->enlace) && !empty($story->enlace))
                          <a href="{{$story->enlace}}" target="_blank"><img class="static-image" src="{{ asset('storage/recurso/' . $story->imagen) }}" class="img-fluid" alt=""><img class="gif-image"  src="{{ asset('storage/recurso/' . $story->gif) }}" class="img-fluid" alt=""> </a>
                          @else
                          <img class="static-image" src="{{ asset('storage/recurso/' . $story->imagen) }}" alt="">
                          <img class="gif-image" src="{{ asset('storage/recurso/' . $story->gif) }}" alt="">
                          @endif                          
                        </div>
                            <div class="portfolio-info">
                              <h4>{{$story->titulo}}</h4>
                              <!-- <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dashboard 1"><i class="bx bx-plus"></i></a> -->
                              @if($story->recurso)
                              <div class="text-center">
                              <a href="{{ $story->recurso }}" target="_blank" class="btn-blue">Descargar</a>
                              </div>
                              @endif
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
                        <div class="portfolio-img">
                        @if (isset($mapa->enlace) && !empty($mapa->enlace))
                        <a href="{{$mapa->enlace}}" target="_blank"><img class="static-image" src="{{ asset('storage/recurso/' . $mapa->imagen) }}" class="img-fluid" alt=""><img class="gif-image"  src="{{ asset('storage/recurso/' . $mapa->gif) }}" class="img-fluid" alt=""> </a>
                          @else
                          <img class="static-image" src="{{ asset('storage/recurso/' . $mapa->imagen) }}" alt="">
                          <img class="gif-image" src="{{ asset('storage/recurso/' . $mapa->gif) }}" alt="">
                          @endif 
                         
                        </div>
                            <div class="portfolio-info">
                              <h4>{{$mapa->titulo}}</h4>
                              <!-- <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dashboard 1"><i class="bx bx-plus"></i></a> -->
                              @if($mapa->recurso)
                              <div class="text-center">
                              <a href="{{ $mapa->recurso }}" target="_blank" class="btn-blue">Descargar</a>
                              </div>
                              @endif
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
                          <div class="portfolio-img">
                          @if (isset($apli->enlace) && !empty($apli->enlace))
                          <a href="{{$apli->enlace}}" target="_blank"><img class="static-image" src="{{ asset('storage/recurso/' . $apli->imagen) }}" class="img-fluid" alt=""><img class="gif-image"  src="{{ asset('storage/recurso/' . $apli->gif) }}" class="img-fluid" alt=""> </a>
                          @else
                          <img class="static-image" src="{{ asset('storage/recurso/' . $apli->imagen) }}" alt="">
                          <img class="gif-image" src="{{ asset('storage/recurso/' . $apli->gif) }}" alt="">
                          @endif 
                          </div>
                            <div class="portfolio-info">
                              <h4>{{$apli->titulo}}</h4>
                              <!-- <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dashboard 1"><i class="bx bx-plus"></i></a> -->
                              @if($apli->recurso)
                              <div class="text-center">
                              <a href="{{ $apli->recurso }}" target="_blank" class="btn-blue">Descargar</a>
                              </div>
                              @endif
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
                          <div class="portfolio-img">
                          @if (isset($dash->enlace) && !empty($dash->enlace))
                          <a href="{{$dash->enlace}}" target="_blank"><img class="static-image" src="{{ asset('storage/recurso/' . $dash->imagen) }}" class="img-fluid" alt=""><img class="gif-image"  src="{{ asset('storage/recurso/' . $dash->gif) }}" class="img-fluid" alt=""> </a>
                          @else
                          <img class="static-image" src="{{ asset('storage/recurso/' . $dash->imagen) }}" alt="">
                          <img class="gif-image" src="{{ asset('storage/recurso/' . $dash->gif) }}" alt="">
                          @endif
                          </div>
                            <div class="portfolio-info">
                              <h4>{{$dash->titulo}}</h4>
                              <!-- <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dashboard 1"><i class="bx bx-plus"></i></a> -->
                              @if($dash->recurso)
                              <div class="text-center">
                              <a href="{{ $dash->recurso }}" target="_blank" class="btn-blue">Descargar</a>
                              </div>
                              @endif
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
                          <div class="portfolio-img">
                          @if (isset($app->enlace) && !empty($app->enlace))
                          <a href="{{$app->enlace}}" target="_blank"><img class="static-image" src="{{ asset('storage/recurso/' . $app->imagen) }}" class="img-fluid" alt=""><img class="gif-image"  src="{{ asset('storage/recurso/' . $app->gif) }}" class="img-fluid" alt=""> </a>
                          @else
                          <img class="static-image" src="{{ asset('storage/recurso/' . $app->imagen) }}" alt="">
                          <img class="gif-image" src="{{ asset('storage/recurso/' . $app->gif) }}" alt="">
                          @endif   
                          </div>
                            <div class="portfolio-info">
                              <h4>{{$app->titulo}}</h4>
                              <!-- <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dashboard 1"><i class="bx bx-plus"></i></a> -->
                              @if($app->recurso)
                              <div class="text-center">
                              <a href="{{ $app->recurso }}" target="_blank" class="btn-blue">Descargar</a>
                              </div>
                              @endif
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
                          <div class="portfolio-img">
                          @if (isset($orto->enlace) && !empty($orto->enlace))
                          <a href="{{$orto->enlace}}" target="_blank"><img class="static-image" src="{{ asset('storage/recurso/' . $orto->imagen) }}" class="img-fluid" alt=""><img class="gif-image"  src="{{ asset('storage/recurso/' . $orto->gif) }}" class="img-fluid" alt=""> </a>
                          @else
                          <img class="static-image" src="{{ asset('storage/recurso/' . $orto->imagen) }}" alt="">
                          <img class="gif-image" src="{{ asset('storage/recurso/' . $orto->gif) }}" alt="">
                          @endif     
                          </div>
                            <div class="portfolio-info">
                              <h4>{{$orto->titulo}}</h4>
                              <!-- <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dashboard 1"><i class="bx bx-plus"></i></a> -->
                              @if($orto->archivo)                              
                              <div class="text-center pb-1">
                                <a href="{{ asset('storage/recurso/' . $orto->archivo) }}" target="_blank" class="btn-blue">Descargar</a>
                              </div>
                              @endif
                              @if($orto->recurso)
                              <div class="text-center">
                              <a href="{{ $orto->recurso }}" target="_blank" class="btn-blue">Descargar</a>
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
                          <div class="portfolio-img">
                          @if (isset($mode->enlace) && !empty($mode->enlace))
                          <a href="{{$mode->enlace}}" target="_blank"><img class="static-image" src="{{ asset('storage/recurso/' . $mode->imagen) }}" class="img-fluid" alt=""><img class="gif-image"  src="{{ asset('storage/recurso/' . $mode->gif) }}" class="img-fluid" alt=""> </a>
                          @else
                          <img class="static-image" src="{{ asset('storage/recurso/' . $mode->imagen) }}" alt="">
                          <img class="gif-image" src="{{ asset('storage/recurso/' . $mode->gif) }}" alt="">
                          @endif                            
                                                       
                          </div>
                            <div class="portfolio-info">
                              <h4>{{$mode->titulo}}</h4>
                              <!-- <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dashboard 1"><i class="bx bx-plus"></i></a> -->
                              @if($mode->archivo)                              
                              <div class="text-center pb-1">
                                <a href="{{ asset('storage/recurso/' . $mode->archivo) }}" target="_blank" class="btn-blue">Descargar</a>
                              </div>
                              @endif
                              @if($mode->recurso)
                              <div class="text-center">
                              <a href="{{ $mode->recurso }}" target="_blank" class="btn-blue">Descargar</a>
                              </div>
                              @endif                              
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

              <div id="tab-8" class="tab-pane">
              <div class="row mt-3" style="text-align:justify;">
                <h5>Descubre el poder de nuestras 'Colecciones' en ArcGIS Online, donde te presentamos un conjunto de StoryMaps que abarcan diversas temáticas geográficas. Con esta funcionalidad, tendrás acceso a un amplio expediente geográfico organizado por temas, facilitando la exploración y el conocimiento detallado de cada uno de ellos.</h5>
              </div>
              @if(count($Colecciones) > 0)
                  <div class="row">
                      @foreach($Colecciones as $colec)
                        @if($colec->categoria == 'colecciones')
                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-4 portfolio-item" data-aos="fade-up" data-aos-delay="400">
                          <div class="portfolio-img">
                          @if (isset($colec->enlace) && !empty($colec->enlace))
                          <a href="{{$colec->enlace}}" target="_blank"><img class="static-image" src="{{ asset('storage/recurso/' . $colec->imagen) }}" class="img-fluid" alt=""><img class="gif-image"  src="{{ asset('storage/recurso/' . $colec->gif) }}" class="img-fluid" alt=""> </a>
                          @else
                          <img class="static-image" src="{{ asset('storage/recurso/' . $colec->imagen) }}" alt="">
                          <img class="gif-image" src="{{ asset('storage/recurso/' . $colec->gif) }}" alt="">
                          @endif
                          </div>
                            <div class="portfolio-info">
                              <h4>{{$colec->titulo}}</h4>
                              @if($colec->archivo)                              
                              <div class="text-center pb-1">
                                <a href="{{ asset('storage/recurso/' . $colec->archivo) }}" target="_blank" class="btn-blue">Descargar</a>
                              </div>
                              @endif
                              @if($colec->recurso)
                              <div class="text-center">
                              <a href="{{ $colec->recurso }}" target="_blank" class="btn-blue">Descargar</a>
                              </div>
                              @endif                              
                            </div>
                          </div>
                        @endif   
                      @endforeach
                  </div>
                  <div class="d-flex justify-content-center pt-5">
                  {{ $Colecciones->links() }}
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

</footer>
<!-- End Footer -->

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

    // Forzar la página a "1" cuando se hace clic en un tab
    var page = 1;

    // Actualizar la URL de la página con el nuevo tab y la página 1
    var url = new URL(window.location.href);
    url.searchParams.set('page', page);
    history.replaceState(null, '', url.toString());

    // Forzar la recarga de la página
    window.location.reload();

    // Almacenar el tab activo en localStorage
    localStorage.setItem('activeTab', target);
  });
});
</script>

<script>
    // Este código utiliza jQuery, asegúrate de tenerlo incluido en tu página
    $(document).ready(function() {
        $(".portfolio-img").each(function() {
            var staticImage = $(this).find(".static-image");
            var gifImage = $(this).find(".gif-image");
            var img = new Image();

            // Verifica si la imagen del GIF se ha cargado
            img.onload = function() {
                // Si el GIF existe, muestra la imagen estática inicialmente
                staticImage.show();
                gifImage.hide();
            };

            // En caso de error al cargar la imagen (el GIF no existe), muestra solo la imagen estática
            img.onerror = function() {
                staticImage.show();
                gifImage.hide();
            };

            img.src = gifImage.attr("src");

            // Asigna los eventos hover solo si la imagen del GIF existe
            if (img.complete) {
                $(this).hover(
                    function() {
                        staticImage.hide();
                        gifImage.show();
                    },
                    function() {
                        staticImage.show();
                        gifImage.hide();
                    }
                );
            }
        });
    });
</script>

</body>

</html>