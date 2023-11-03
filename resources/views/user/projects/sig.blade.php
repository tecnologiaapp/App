
<!DOCTYPE html>
<html lang="es">
<body>

@include('includes.header.navsig')

  <section id="hero" class="d-flex align-items-center" style="padding-top: 120px;">

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

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style="padding-top: 70px;">
          <img src="{{ asset('assets/img/fon.png')}}" class="img-fluid animated" alt="">
          </div>
        </div>

      </div>
    </section>

  </section>

  <main id="main">

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset('assets/img/cantidad.png')}}" alt="" width="100%">
          </div>
          <div class="col-lg-4 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Gestionado</h3>
            <p class="fst-italic">
            Avance general de la información disponible para la consulta ciudadana
            </p>

            <div class="skills-content">
            @php
                $story = App\Models\SIG::where('categoria', 'Story Maps')->count();
                $mapa = App\Models\SIG::where('categoria', 'Mapa Web')->count();
                $aplicacion = App\Models\SIG::where('categoria', 'Aplicacion Web')->count();
                $dashboard = App\Models\SIG::where('categoria', 'Dashboard')->count();
                $movil = App\Models\SIG::where('categoria', 'App Movil')->count();
                $ortofoto = App\Models\SIG::where('categoria', 'Ortofoto')->count();
                $modelo = App\Models\SIG::where('categoria', 'Modelo 3D')->count();
                $colecciones = App\Models\SIG::where('categoria', 'Colecciones')->count();
            @endphp
              <div class="progress">
                <span class="skill">Story Maps <i class="val">{{ $story }}</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $story }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Mapa Web <i class="val">{{ $mapa }}</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $mapa }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Aplicación Web <i class="val">{{ $aplicacion }}</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $aplicacion }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Dashboard <i class="val">{{ $dashboard }}</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $dashboard }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">App Móvil <i class="val">{{ $movil }}</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $movil }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Ortofoto <i class="val">{{ $ortofoto }}</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $ortofoto }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Modelo 3D <i class="val">{{ $modelo }}</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $modelo }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Colecciones <i class="val">{{ $colecciones }}</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $colecciones }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>


            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- End Skills Section -->

<a href="{{ asset('assets/pdf/Glosario.xlsx')}}">
<img src="{{ asset('assets/img/Banners/sig.png')}}" alt="" width="100%">
</a>

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
        </div>

      </div>
    </section>
    <!-- End Team Section -->

  </main>
  <!-- End #main -->
  @include('includes.footer.footsig')

</body>

</html>