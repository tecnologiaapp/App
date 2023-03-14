<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Patrimonio</title>
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


</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

    <a href="{{ url('/') }}">
        <img src="{{ asset('assets/img/Proyectos/logo-landing.png') }}"  style=" width: 200px;  padding-left: 25px;"/> </a>


      <nav id="navbar" class="navbar"> 
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('user.projects.patrimonio') }}">Programación</a></li>
          <li><a class="nav-link scrollto" href="{{ route('user.projects.newsPatrimonio') }}">Noticias</a></li>
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
          <li> <button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="{{ asset('assets/pdf/Programacion-2022.pdf')}}" target="_blank"><b>Descargar</b></a></button></li>
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
              <div><img src="{{ asset('assets/img/patrimonio/San_alejo.jpeg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 3 de septiembre</h6>
              <h3 class="title"><a href="">Mercado Artesanal Sanalejo</a></h3>
              <p class="description">Disfruta de la mejor opción para reconocer el valor patrimonial de nuestros artesanos.</p>
              <p> <b>Hora:</b>  8:00 a.m. - 6:00 p. m.</p>
              <p><b>Lugar:</b> Parque Bolívar</h5>
              <!-- <p>Organiza: Alcaldía de Medellín </h5> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/mujeres-playa.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Martes 6 de septiembre</h6>
              <h3 class="title"><a href="">Las mujeres de La Playa</a></h3>
              <p class="description">Un recorrido para reivindicar la importancia histórica de nuestras mujeres en la construcción del tejido social desde La Conquista hasta nuestros días</p>
              <p> <b>Hora:</b> 2:00 p.m.  </h5>
              <p><b>Lugar:</b> Casa Barrientos, calle 51# 45-57</h5>
              <p><b>Mayores informes:</b> @patianchos</p>
              <!-- <p>Organiza: Grupo de Vigías Patianchos, Espiral de las Memorias y los Patrimonios Culturales de Medellín. </h5> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/Activacion cultural.jpeg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Miércoles 7 de septiembre</h6>
              <h3 class="title"><a href="">Activación cultural para los viajeros</a></h3>
              <p class="description">En los 90 años del aeropuerto celebra, junto a los viajeros, la Fiesta del Patrimonio.</p>
              <p> <b>Hora:</b>  8:00 a.m. - 12:00 p.m.</h5>
              <p><b>Lugar:</b> Salas de espera del Aeropuerto Olaya Herrera.</h5>
              <!-- <p>Organiza: Aeropuerto Olaya Herrera y Airplan.</h5> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0023_Atención a Medios Fiesta del Patrimonio 2022 “Historias por Contar”.- Astor (1).jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Jueves 8 de septiembre</h6>
              <h3 class="title"><a href="">Atención a Medios Fiesta del Patrimonio 2022 “Historias por Contar”.</a></h3>
              <p class="description">Con la presencia de los medios de comunicación, como invitados especiales, daremos a conocer los detalles de las más de 60 actividades y eventos programados.</p>
              <p> <b>Hora:</b> 8:00 a. m.</h5>
              <p><b>Lugar:</b> Carrera 49 # 52-84, Paseo Junín – Repostería Astor</h5>
              <!-- <p>Organiza: Gerencia del Centro - Agencia APP</h5> -->
            </div>
          

        </div>


        <div class="row justify-content-center" style="margin-top: 30px;">
          
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/La historia de Medellín a través de la arquitectura.jpeg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Jueves 8 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido: “La historia de Medellín a través de la arquitectura”</a></h3>
              <p class="description">Una oportunidad para recorrer el patrimonio arquitectónico de nuestro Centro con una mirada a través del tiempo y de los diferentes momentos de la arquitectura de la ciudad. </p>
              <p> <b>Hora:</b> 9:00 a. m.</h5>
              <p><b>Lugar:</b> inicia en la carrera 49 # 52-84, Paseo Junín – Repostería Astor</h5>
              <p><b>Inscrípciones</b>: omar.portela@medellin.gov.co</h5>
              <p><b>Cupos limitados</b></p>
              <!-- <p>Organiza: Gerencia del Centro - Agencia APP</h5> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="https://i.ibb.co/bvDPx5h/Dispositivo-Clar-n-1.jpg" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Jueves 8 de septiembre</h6>
              <h3 class="title"><a href="">Clarín dice lo que otros callan, una máquina para viajar en el tiempo a través de noticias antiguas.</a></h3>
              <p class="description">Experimenta el dispositivo itinerante Radioperiódico Clarín, Casa del Patrimonio y “Abuelos cuenta cuentos” de la Biblioteca León de Greiff - La Ladera.</p>
              <p> <b>Hora:</b>  9:00 a. m. </h5>
              <p><b>Lugar:</b> Casa del Patrimonio.  Avenida Palacé # 59 - 06, barrio Prado Centro.</h5>
              <p> <b> Mayores informes:</b> @patrimonioMDE y 385 55 55, ext. 5775. </h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0022_Doce de Octubre.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Jueves 8 de septiembre</h6>
              <h3 class="title"><a href="">Conversando sobre la historia de la Comuna 6 - Doce de Octubre</a></h3>
              <p class="description">Disfruta de un encuentro para contar la historia de esta zona de la ciudad desde adentro; una versión sentida, no oficial, del trasegar de esta comunidad.</p>
              <p> <b>Hora:</b> 7:00 p.m. </h5>
              <p><b>Lugar:</b> Sede colectivo Cartografiando, carrera 83 # 103 - 8</p>
              <p><b>Mayores informes: </b>@Colectivo Cartografi_ando y 321 758 68 15 </p>
              <!-- <p>Organiza: Colectivo Cartografi_Ando - Espiral de las Memorias y los Patrimonios Culturales de Medellín </h5> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/Parque Berrio.jpeg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 10 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido: “Patrimonio urbanístico y arquitectónico del Centro de Medellín”</a></h3>
              <p class="description">En este recorrido leeremos la transformación y el crecimiento urbano de Medellín, partiendo del Parque Berrío,  corazón de la ciudad, con todos sus elementos arquitectónicos y escultóricos.</p>
              <p> <b>Hora:</b>  9:00 a. m. </h5>
              <p><b>Lugar:</b> Parque Berrío (punto de encuentro)</h5>
              <p><b>Inscrípciones</b>: omar.portela@medellin.gov.co</h5>
              <!-- <p>Organiza: Colectivo Cartografi_Ando - Espiral de las Memorias y los Patrimonios Culturales de Medellín</h5> -->
            </div>
          </div>


        </div>

        <div class="row justify-content-center" style="margin-top: 30px;">

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/Omar Portela (1).jpeg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 10 de septiembre</h6>
              <h3 class="title"><a href="">Exposición fotográfica de edificios patrimoniales</a></h3>
              <p class="description">Entre el 10 y el 30 de septiembre disfruta de las mejores fotografías de Ómar Portela, quien a través de su lente descubre y redescubre los íconos arquitectónicos del Centro Histórico de Medellín.</p>
              <p><b>Fotógrafo:</b> Ómar Portela</p>
              <p> <b>Hora:</b> 11:00 a. m. </h5>
              <p><b>Lugar:</b> Palacio Egipcio, carrera 47 # 59 - 54.</h5>
              <p><b>Inscrípciones</b>: omar.portela@medellin.gov.co</h5>
              <p><b>Cupos limitados</b></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0020_El Picacho.jpg')}} "  class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 10 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido al Cerro El Picacho (dirigido a jóvenes de la Comuna 6)</a></h3>
              <p class="description">Callejea mientras te apropias de los espacios y descubres el patrimonio cultural de la ciudad.</p>
              <p style="font-size:10px;">*Proyecto ganador de la Convocatoria de Fomento y Estímulos para el Arte y la Cultura 2022, modalidad “Apropiación de nuestro Patrimonio Cultural”</p>
              <p> <b>Hora:</b> 3:00 p.m. </h5>
              <p><b>Lugar:</b> Sede colectivo Cartografiando, carrera 83 # 103 - 8</h5>
              <p> <b> Mayores informes:</b> 321 7586815 y @ColectivoCartografi_Ando</h5>
            </div>
          </div>
          
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0016_Laureles.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Domingo 11 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido por árboles patrimoniales en la avenida Jardín, barrio Laureles</a></h3>
              <p class="description">Los árboles son elementos vivos que nos conectan con el pasado. Súmate a este recorrido y conoce su alto valor histórico, simbólico, ecológico y paisajístico para promover su conservación. </p>
              <p> <b>Hora:</b>  9:00 a. m. - 12:00 p.m.</h5>
              <!-- <p><b><b>Lugar:</b></b> Avenida Jardín, segundo Parque de Laureles, en la fuente de Pedro Nel Gómez</h5> -->
              <p> </p>
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href=" https://bit.ly/FiestadelPatrimonio_Arboles_Patrimoniales"><b>Inscríbete aquí</b></a></button></div>
            </div>

          </div>
  
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/Casa Zea.jpeg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Martes 13 de septiembre</h6>
              <h3 class="title"><a href="">Ruta Francisco Antonio Zea</a></h3>
              <p class="description">Una oportunidad para acercarnos de otra manera a la historia de vida de este botánico, periodista y prócer de nuestra independencia.</p>
              <p> <b>Hora:</b>  09:00 a. m.  </h5>
              <p><b>Lugar:</b> Casa Zea, calle 51 # 54 - 71 (calle Boyacá con Tenerife)</h5>
              <p><b>Mayores informes:</b> @patianchos</p>
              <!-- <p>Organiza: Grupo de vigías Patianchos - Espiral de las Memorias y los Patrimonios Culturales de Medellín </h5> -->
            </div>
          </div>

          
          <div class="row justify-content-center" style="margin-top: 30px;">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0013_Activacion cultural 2.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Miércoles 14 de septiembre</h6>
              <h3 class="title"><a href="">Activación cultural para la ciudadanía</a></h3>
              <p class="description">Recorreremos los barrios de la comunidad aledaña al aeropuerto Olaya Herrera como preámbulo a la ceremonia de aniversario del 28 de septiembre.</p>
              <p> <b>Hora:</b> 08:00 a.m. 4:00 p.m. </h5>
              <p><b>Lugar:</b> Comuna 15 Guayabal.</h5>
              <!-- <p>Organiza: Aeropuerto Olaya Herrera y Airplan</h5> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0017_La America.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Miércoles 14 de septiembre</h6>
              <h3 class="title"><a href="">Por los templos de la Comuna 12 La América</a></h3>
              <p class="description">Descubre los valores arquitectónicos, históricos y simbólicos de estos templos.</p>
              <p> <b>Hora:</b> 2:00 p. m.  </h5>
              <p><b>Lugar:</b> Iglesia de Nuestra Señora de los Dolores,  templo principal del barrio La América</h5>
              <!-- <p>Organiza: Colectivo de mujeres de la Comuna 12 - Espiral de las Memorias y los Patrimonios Culturales de Medellín</h5> -->
            </div>
          </div>
  

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0010_Recorrido “Ciudad Museo”.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Miércoles 14 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido: Ciudad Museo</a></h3>
              <p class="description">El recorrido “Ciudad Museo” es una oportunidad de resaltar el momento histórico del desarrollo urbanístico y arquitectónico de Medellín.</p>
              <p> <b>Hora:</b> 5:00 p.m. </h5>
              <p><b>Lugar:</b> Maracaibo (calle 56) con avenida Oriental (carrera 46)</h5>
              <p><b>Inscrípciones</b>: instagram @monpabon00</h5>
              <p><b>Cupos limitados</b></p>
              <!-- <p>Organiza: Colectivo de mujeres de la Comuna 12 - Espiral de las Memorias y los Patrimonios Culturales de Medellín</h5> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0008_Recorrido Aeropuerto.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Miércoles 14 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido patrimonial por el aeropuerto Olaya Herrera</a></h3>
              <p class="description">Conoce nuestro aeropuerto, la arquitectura moderna y el patrimonio de este emblemático lugar.</p>
              <p> <b>Hora:</b> 3:00 p. m. - 5:00 p. m.</h5>
              <!-- <p><b>Lugar:</b> Aeropuerto Olaya Herrera. Punto de encuentro Plaza Gardel</h5> -->
             
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_AOH"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>
          </div>


          </div>

          <div class="row justify-content-center" style="margin-top: 30px;">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/entre rezos.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Jueves 15 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido urbano: “Entre rezos, cuadernos y armas”</a></h3>
              <p class="description">Visita los lugares patrimoniales de la historia educativa y espiritual de la ciudad.</p>
              <p> <b>Hora:</b> 3:00 p. m. - 5:00 p. m.</h5>
              <p><b>Lugar:</b> Claustro de Comfama, carrera 44 # 48 - 18</h5>

              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Recorrido_Urbano"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0006_Recorrido- “Ruta de la paz y el patrimonio”.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Jueves 15 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido: “Ruta de la paz y el patrimonio”</a></h3>
              <p class="description">¿Es la paz un componente de nuestro Patrimonio Cultural Inmaterial?</p>
              <p> <b>Hora:</b> 9:00 a. m.</h5>
              <p><b>Lugar:</b>Puerta principal Museo Casa de la Memoria</h5>
              <p> <b>Mayores informes:</b> @Vigiasasoguian</h5>
              <!-- <p>Organiza: Colectivo de mujeres de la Comuna 12 - Espiral de las Memorias y los Patrimonios Culturales de Medellín</h5> -->
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0012_Maratón fotográfica.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 17 de septiembre</h6>
              <h3 class="title"><a href="">Caminata fotográfica</a></h3>
              <p class="description">Un espacio para resaltar el valor patrimonial del eje vial de Juan del Corral. Inscríbete y toma las mejores fotografías de este maravilloso recorrido.</p>
              <p> <b>Hora:</b> 10:00 a. m. - 12:00 p.m.</h5>
              <p><b>Lugar:</b> Estación Prado del metro</h5>
              <p><b>Teléfono:</b> 3165258540</p>
              <p> <b>Email:</b> viztaz@gmail.com</p>
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://viztaz.org/actividades2022.html"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0008_Recorrido de árboles patrimoniales en el parque del barrio Robledo.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 17 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido de árboles patrimoniales en el parque del barrio Robledo</a></h3>
              <p class="description">Recorridos guiados en los que se sensibiliza a los participantes sobre la historia, la riqueza y la memoria colectiva local a través de sus árboles y palmas.</p>
              <p> <b>Hora:</b> 9:00 a. m. a 12:00 p.m.</h5>
              <p><b>Lugar:</b> Parque de Robledo</h5>         
                          
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://docs.google.com/forms/d/e/1FAIpQLSfFPMaSC6saKAlw91b2G8YNb77uCKpXVxlHCEr7ToWPLpPbxw/viewform"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>

         


            </div>

            <div class="row justify-content-center" style="margin-top: 30px;">

         

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0013_Muestra artesanal 1.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 17 de septiembre</h6>
              <h3 class="title"><a href="">Muestra Artesanal</a></h3>
              <p class="description">Disfruta de la mejor opción para reconocer el valor patrimonial de nuestros artesanos.</p>
              <p> <b>Hora:</b> 8:00 a. m. - 8:00 p. m. </h5>
              <p><b>Lugar:</b> Cerro Nutibara-Pueblito Paisa</h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0012_Muestra artesanal 2.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Domingo 18 de septiembre</h6>
              <h3 class="title"><a href="">Muestra Artesanal</a></h3>
              <p class="description">Disfruta de la mejor opción para reconocer el valor patrimonial de nuestros artesanos.</p>
              <p> <b>Hora:</b> 8:00 a. m. - 8:00 p. m. </h5>
              <p><b>Lugar:</b> Cerro Nutibara-Pueblito Paisa</h5>
            </div>
          </div>

          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0009_Recorrido de árboles patrimoniales en el parque Bolívar.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Domingo 18 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido de árboles patrimoniales en el parque Bolívar</a></h3>
              <p class="description">Los árboles son elementos vivos que nos conectan con el pasado. Súmate a este recorrido y conoce su alto valor histórico, simbólico, ecológico y paisajístico para promover su conservación.</p>
              <p> <b>Hora:</b>  09:00 a. m.  - 12:00 p.m.</h5>
              <!-- <p><b>Lugar:</b> Parque Bolívar, puerta principal de la Catedral Metropolitana</h5> -->
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Arboles_Patrimoniales"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>


            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0001_Conversatorio inaugural de la exposición “Madres de vida” .jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Lunes 19 de septiembre</h6>
              <h3 class="title"><a href="">Conversatorio inaugural de la exposición Madres de Vida </a></h3>
              <p class="description">Un encuentro para reivindicar dos importantes lideresas sociales del barrio Moravia. Proyecto ganador de la Convocatoria de Fomento y Estímulos para el Arte y la Cultura 2022, modalidad Apropiación del Patrimonio Cultural</p>
              <p> <b>Hora:</b>  4:00 p. m. </h5>
              <p><b>Lugar:</b> Casa del Patrimonio, avenida Palacé #59 - 06</h5>
              <!-- <p>Organiza: Colectivo Letras. Colores y Vidas - Espiral de las Memorias y los Patrimonios Culturales de Medellín </h5> -->
            </div>
          </div>
  
          

            </div>

            <div class="row justify-content-center" style="margin-top: 30px;">

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0010_Apertura de la exposición “Arquitectura de nuestra memoria”.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Lunes 19 de septiembre</h6>
              <h3 class="title"><a href="">Apertura de la exposición:  “Arquitectura de nuestra memoria”</a></h3>
              <p class="description">Una muestra gráfica que nos enseña la belleza del pasado a través de representaciones de algunos edificios de nuestra ciudad.</p>
              <p> <b>Hora:</b> 4:00 p. m. - 6:00  p. m. </h5>
              <p><b>Lugar:</b> Casa Prado, carrera 50 (avenida Palacé) # 64 - 00, barrio Prado</h5>
              <!-- <p>Organiza: Agencia APP </h5>
              <p>Aliado: Universidad Santo Tomás. </h5> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0009_Apertura de la exposición Plan Integral de Gestión de Prado” y otros proyectos de la Agencia APP.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Lunes 19 de septiembre</h6>
              <h3 class="title"><a href="">Apertura de la exposición  “Plan integral de gestión de Prado” y otros proyectos de la Agencia APP</a></h3>
              <p class="description">Entérate sobre el “Plan integral de gestión de Prado”; conoce sus avances, objetivos y puesta en valor de su patrimonio cultural, así como los proyectos gestionados por la Agencia APP.</p>
              <p> <b>Hora:</b> 4:00 p. m. - 6:00 p. m. </h5>
              <p><b>Lugar:</b> Casa Prado, carrera 50 (avenida Palacé) # 64 - 00, barrio Prado</h5>
              <!-- <p>Organiza: Agencia APP </h5>
              <p>Aliado: Universidad Santo Tomás. </h5> -->
            </div>
          </div>
          
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0019_Conversatorio “Las calles de Prado, muchos barrios en uno”.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Martes 20 de septiembre</h6>
              <h3 class="title"><a href="">Conversatorio:  Las Calles de Prado, muchos barrios en uno.</a></h3>
              <p class="description">¿Que Prado era el barrio de los ricos? Pues sí, pero su composición es mucho más diversa. Conoce las múltiples historias de este sector patrimonial a partir de los nombres de sus calles.</p>
              <p> <b>Hora:</b> 4:00 p.m.  - 6:00 p.m.</h5>
              <p><b>Lugar:</b> Parque Olano en el barrio Prado, carrera 49 con la calle 65</h5>
             
             <p><b>Cupos limitados</b></p>
             <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Conversatorio_Prado"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div><img src="{{ asset('assets/img/patrimonio/_0005_Recorrido urbano “¿Cómo leemos las relaciones entre la propuesta de la modernidad, la Bauhaus y nuestra identidad.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Martes 20 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido urbano “¿Cómo leemos las relaciones entre la propuesta de la modernidad, la Bauhaus y nuestra identidad?”</a></h3>
              <p class="description">Conoce un  poco más de Medellín desde la mirada Bauhaus, la arquitectura moderna y nuestro patrimonio, en el marco de los 80 años de fundación de la Facultad de Arquitectura de la Universidad Pontificia Bolivariana. </p>
              <p> <b>Hora:</b> 10:00 a. m. - 12:00 p.m.</h5>
              <!-- <p><b>Lugar:</b> Puerta principal del campus Laureles de la Universidad Pontificia Bolivariana, circular 1 # 70 - 01</h5> -->
   
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Recorrido_Bauhaus"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>

          



          </div>

          <div class="row justify-content-center" style="margin-top: 30px;">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0005_Recorriendo la plazuela San Ignacio.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Martes 20 de septiembre</h6>
              <h3 class="title"><a href="">Recorriendo la Plazuela San Ignacio</a></h3>
              <p class="description">Una oportunidad para apreciar la importancia histórica de este complejo arquitectónico y disfrutar de una serenata en la Biblioteca del Paraninfo, a cargo del Maestro Alonso Medina Cifuentes.</p>
              <p> <b>Hora:</b>2:00 p. m.  </h5>
              <p><b>Lugar:</b> Entrada del Paraninfo de la Universidad de Antioquia </h5>
              <!-- <p>Organiza: Grupo de vigías Patianchos - Espiral de las Memorias y los Patrimonios Culturales de Medellín. </h5> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0015_Modelo de intervención estratégica de las economías creativas para el arte y la cultura.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Martes 20 de septiembre</h6>
              <h3 class="title"><a href="">Modelo de intervención estratégica de las economías creativas para el arte y la cultura</a></h3>
              <p class="description">Aprende sobre la estrategia de economías creativas de la Secretaría de Cultura y la forma de abordarla para ser creadores de valor emocional, colectivo, económico y sostenible.</p>
              <p> <b>Hora:</b>  3:00 p. m. - 5:00 p. m.   </h5>
              <p><b>Lugar:</b> Casa Prado, carrera 50 (avenida Palacé) # 64 - 00, barrio Prado</h5>
            
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Charlas_Creativas"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>
          
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0012_Activación cultural_21septiembre.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Miércoles 21 de septiembre</h6>
              <h3 class="title"><a href="">Activación cultural</a></h3>
              <p class="description">Disfruta de una comparsa y de la entrega de souvenires de la Fiesta del Patrimonio en las instalaciones del aeropuerto Olaya Herrera.  </p>
              <p> <b>Hora:</b> 8:00 a. m - 3:00 p. m.</h5>
              <p><b>Lugar:</b> Aeropuerto Olaya Herrera, carrera 65 # 13-157</h5>
              <!-- <p>Organiza: Aeropuerto Olaya Herrera y Airplan </h5> -->
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0000_DisfrutArte Belén.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Miércoles 21 de septiembre</h6>
              <h3 class="title"><a href="">DisfrutArte Belén</a></h3>
              <p class="description">Recorre y aprecia el patrimonio escultórico y otras obras artísticas de gran valor en la comuna 16-Belén. </p>
              <p> <b>Hora:</b> 8:00 a. m.</h5>
              <p><b>Lugar:</b> Parque Biblioteca Belén</h5>
              <p><b>Inscripciones:</b> Sala Mi barrio del parque biblioteca de Belén. </p>
              <p><b>Mayores informes:</b> 3217583738</p>
              <p><b>Cupos limitados</b></p>
              
            </div>
          </div>

          

          </div>


          <div class="row justify-content-center" style="margin-top: 30px;">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0018_Exposición de Bienes de Interés Patrimonial.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Miércoles 21 de septiembre</h6>
              <h3 class="title"><a href="">Exposición de Bienes de Interés Patrimonial</a></h3>
              <p class="description">Recorre esta exhibición para conocer las licencias de construcción, los planos de construcción y las fotografías actuales de estos bienes de la mano de profesionales especializados del Departamento Administrativo de Planeación (DAP).  </p>
              <p> <b>Hora:</b> 08:00 a. m. - 5:00 p.m. </h5>
              <p><b>Lugar:</b> hall de la Alcaldía de Medellín.</h5>
              <!-- <p>Organiza: Departamento Administrativo de Planeación (DAP).  </h5> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0004_Colectivo SiCLas.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Miércoles 21 de septiembre</h6>
              <h3 class="title"><a href="">Colectivo SiCLas</a></h3>
              <p class="description">Disfruta de esta SiCleada para celebrar los 12 años del colectivo. </p>
              <p> <b>Hora:</b> 8:00 p. m. - 10:00 p. m.  </h5>
              <p><b>Lugar:</b> Parque SiCLas, barrio Carlos E. Restrepo.</h5>
              <!-- <p>Organiza: Programa de Memoria, Patrimonio y Archivo Histórico de Medellín. </h5>
              <p>Aliado: Espiral.</h5> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0020_Conferencia_ Investigaciones sobre Medellín y Envigado.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Miércoles 21 de septiembre</h6>
              <h3 class="title"><a href="">Conferencia: investigaciones sobre Medellín y Envigado desde una perspectiva social, arquitectónica, patrimonial e histórica. Un acercamiento desde la academia </a></h3>
              <p class="description">Las arquitectas Tatiana Baquero Yarce y Erika Botero Montoya presentarán una herramienta didáctica para la educación patrimonial desde la arquitectura; y la identidad social urbana.</p>
              <p> <b>Hora:</b> 3:00 p. m. - 5:00 p. m.  </h5>
              <p><b>Lugar:</b>  Casa Prado, carrera 50, avenida Palacé #64 - 00, barrio Prado. </h5>

           <p><b>Cupos limitados</b></p>
           <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Charlas_Creativas"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0013_Exposición de la planoteca antigua del arquitecto Federico Vásquez Uribe.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Miércoles 21 de septiembre</h6>
              <h3 class="title"><a href="">Exposición de la planoteca antigua del arquitecto Federico Vásquez Uribe</a></h3>
              <p class="description">Anímate a ver los planos expuestos que hacen parte del acervo planimétrico donado por el arquitecto Federico Vásquez Uribe y son custodiados en la Biblioteca Central Monseñor Darío Múnera Vélez de la UPB en su Colección Patrimonial. </p>
              <p> <b>Hora:</b>  3:00 p. m. - 5:00 p. m. </h5>
              <p><b>Lugar:</b> Biblioteca central Universidad Pontificia Bolivariana. Sala audiovisual piso 1 </h5>

              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Expo_Planoteca"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>

         

         
          

        </div>

        <div class="row justify-content-center" style="margin-top: 30px;">

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0019_Exposición de Bienes de Interés Patrimonial_jueves22.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Jueves 22 de septiembre</h6>
              <h3 class="title"><a href="">Exposición de Bienes de Interés Patrimonial</a></h3>
              <p class="description">Recorre esta exhibición para conocer las licencias de construcción, los planos de construcción y las fotografías actuales de estos bienes de la mano de profesionales especializados del Departamento Administrativo de Planeación (DAP).  </p>
              <p> <b>Hora:</b> 09:00 a. m. - 5:00 p.m. </h5>
              <p><b>Lugar:</b> Sala de Exposiciones Itinerantes del Edificio Antigua  Estación Medellín (Ferrocarril de Antioquia).</h5>
              <!-- <p>Organiza: Departamento Administrativo de Planeación.  </h5> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0000_Tarde de Prado - Transmisión en vivo.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Jueves 22 de septiembre</h6>
              <h3 class="title"><a href="">Tarde de Prado - Transmisión en vivo. Interpretar para preservar: el Modelo TORA como guía para la conservación preventiva del Patrimonio Cultural </a></h3>
              <p class="description">Aprende sobre el Patrimonio Cultural en el conversatorio virtual con Antonieta Jiménez y Manuel Gandara, dos mexicanos especialistas en Interpretación del Patrimonio Cultural. </p>
              <p> <b>Hora:</b>  4:00 p. m. </h5>
              <p><b>Canal en Youtube:</b> Memorias y Patrimonio Medellín</h5>
              <!-- <p>Organiza: Programa de Memoria, Patrimonio y Archivo Histórico de Medellín.  </h5> -->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0023_Dispositivo artistico sobre las memorias.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Jueves 22 de septiembre</h6>
              <h3 class="title"><a href="">Instalación dispositivo artístico sobre las Memorias de los barrios Prado Centro y Manrique</a></h3>
              <p class="description">¿A qué sabe la memoria?, ¿a qué huele?, ¿cómo se teje?, ¿cómo se narra?, ¿cómo se mueve?  </p>
              <p> <b>Hora:</b> 4:00 p. m.   </h5>
              <p><b>Lugar:</b> Casa de Cultura de Manrique.</h5>
              <!-- <p>Organiza: Cuerpos de Memorias, Proyecto ganador de la Convocatoria de Fomento y Estímulos para el Arte y la Cultura 2022. Modalidad Apropiación del Patrimonio Cultural. </h5> -->
            </div>
          </div>
          
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0002_Taller “Mi Casa, mi museo.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Jueves 22  de septiembre</h6>
              <h3 class="title"><a href="">Taller: Mi Casa Mi Museo. Una experiencia para reconocer nuestro patrimonio personal</a></h3>
              <p class="description">Inicia esta experiencia con un reconocimiento de los objetos que guardas en casa y finaliza con un encuentro emotivo desde la memoria y el recuerdo.</p>
              <p> <b>Hora:</b> 3:00 p. m. - 5:00 p. m. </h5>
              <p><b>Lugar:</b> Biblioteca Central Universidad Pontificia Bolivariana. Sala audiovisual piso 1</h5>
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Micasa_Mimuseo"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>

          

       
         
          

        </div>

        <div class="row justify-content-center" style="margin-top: 30px;">

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0005_Charla sobre estrategia de públicos dinámicos.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Jueves 22 de septiembre</h6>
              <h3 class="title"><a href="">Charla sobre estrategia de públicos dinámicos</a></h3>
              <p class="description">Entérate de cómo fortalecer los actores del sector cultural mediante el diseño y desarrollo de experiencias culturales que mejoren  los procesos de apreciación, apropiación y  consumo responsable de los productos culturales.</p>
              <p> <b>Hora:</b> 2:00 p. m. - 4:00 p. m. </h5>
              <p><b>Lugar:</b> Casa Prado, carrera 50, avenida Palacé #64 - 00, barrio Prado. </h5>
       
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Charlas_Creativas"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0002_Conversatorio “Patrimonios Invisibles de Medellín”.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Jueves 22 de septiembre</h6>
              <h3 class="title"><a href="">Conversatorio “Patrimonios Invisibles de Medellín”</a></h3>
              <p class="description">Este conversatorio será un gran espacio para reconocer y analizar de la mano de expertos en el tema, los retos y el estado actual del Patrimonio en la ciudad.</p>
              <p> <b>Hora:</b> 2:00 p. m. - 4:00 p. m. </h5>
              <p><b>Lugar:</b> Auditorio Luis López de Mesa - Palacio de la Cultura Rafael Uribe Uribe </h5>
            </div>
          </div>

          <!-- <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/Activacion cultural.jpeg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Viernes 23 de septiembre</h6>
              <h3 class="title"><a href="">Celebración 50 años del Edificio Coltejer </a></h3>
              <p class="description">Disfruta de un concierto con la Orquesta Filarmónica de Medellín y celebra el aniversario 50 de este ícono arquitectónico de Medellín.   </p>
              <p> <b>Hora:</b> 11:00 a. m. - 1:00 p. m.  </h5>
              <p><b>Lugar:</b> Plazoleta del Edificio Coltejer.</h5>
           
            </div>
          </div> -->
          
    
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0005_Recorrido urbano “¿Cómo leemos las relaciones entre la propuesta de la modernidad, la Bauhaus y nuestra identidad (1).jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Viernes 23 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido urbano: ¿cómo leemos las relaciones entre la propuesta de la modernidad, la Bauhaus y nuestra identidad?, barrio Suramericana</a></h3>
              <p class="description">Conoce un  poco más de Medellín desde la mirada Bauhaus, la arquitectura moderna y nuestro patrimonio; en el marco de los 80 años de fundación de la Facultad de Arquitectura de la UPB. </p>
              <p> <b>Hora:</b> 10:30 a. m. - 12:00 p.m. </h5>
              <!-- <p><b>Lugar:</b> Puerta principal del Campus Laureles de la Universidad Pontificia Bolivariana, circular 1 #70 - 01.</h5> -->
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Recorrido_Bauhaus"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0004_Recorrido urbano por los bares y restaurantes.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Viernes 23 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido urbano por los Bares y Restaurantes más emblemáticos de nuestra ciudad. </a></h3>
              <p class="description">Visita nueve bares y restaurantes del centro de Medellín, íconos y referentes de nuestra memoria colectiva, y parte innegable de nuestra identidad cultural. </p>
              <p> <b>Hora:</b> 4:00 p. m. - 6:00 p. m. </h5>
              <!-- <p><b>Lugar:</b> Biblioteca Epm. puerta principal. Plaza de Cisneros, Cra. 54 No. 44-48 </h5> -->
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Recorrido_Bares"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>
  
          </div>

        

            <div class="row justify-content-center" style="margin-top: 30px;">

      

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0001_Taller de dibujo presencial a lápiz.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Viernes 23 de septiembre</h6>
              <h3 class="title"><a href="">Taller de dibujo presencial a lápiz: Canto</a></h3>
              <p class="description">Recolecta algunas hojas o flores caídas y luego dibújalas para conectar los hemisferios cerebrales por medio de líneas que perciben la realidad derivada de la observación y el tacto. </p>
              <p> <b>Hora:</b> 3:00 p. m. - 5:00 p. m.  </h5>
              <p><b>Lugar:</b> Parque Prado </h5>
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Taller_Dibujo"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0003_Maratón retro fotográfica.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 24 de septiembre</h6>
              <h3 class="title"><a href="">Maratón Retro de fotografía</a></h3>
              <p class="description">Prepara tu cámara retro para retratar el corredor peatonal de Junín, el cual cuenta con numerosas edificaciones emblemáticas de la historia y la identidad de nuestra ciudad. </p>
              <p> <b>Hora:</b>  10:00 a. m. - 12:00 p.m.  </h5>
              <p><b>Lugar:</b>  Pasaje Junín </h5>
              <p><b>Teléfonos:</b> 3165258540</p>
              <p><b>Email:</b> viztaz@gmail.com</p>
              <p></p>
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://viztaz.org/actividades2022.html"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>
          
            
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0002_Taller “Identidad y memoria de las plantas aromáticas”.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 24 de septiembre</h6>
              <h3 class="title"><a href="">Taller: Identidad y memoria de las plantas aromáticas. Siembra en el Parque Prado</a></h3>
              <p class="description">Conectate con la tierra y siembra aromáticas de romero, limoncillo y ruda, para embellecer el paisaje y favorecer la diversidad de plantas aromáticas.    </p>
              <p> <b>Hora:</b> 09:00 a. m. - 12:00 p.m. </h5>
              <!-- <p> <b>Lugar:</b> Parque Prado, avenida Palace #66 - 54.</h5> -->
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Taller_Siembra"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>
         
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0018_Conversatorio “Parque Berrío_ memoria destruida y reconstruida”.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 24 de septiembre</h6>
              <h3 class="title"><a href="">Conversatorio “Parque Berrío: memoria destruida y reconstruida”  </a></h3>
              <p class="description"> Un diálogo entre tres arquitectos, amantes del dibujo, acerca de la historia arquitectónica del Parque Berrío, enlazada a la afición del maestro Pablo Lalinde por registrar, conservar y representar el pasado a través de la pintura. </p>
              <p> <b>Hora:</b> 10:30 a. m. - 12:00 p.m. </h5>
              <p><b>Lugar:</b>  Casa Prado, carrera 50 (avenida Palacé)  # 64 - 00, barrio Prado </h5>
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Conversatorio_PB"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>
    
            </div>


            <div class="row justify-content-center" style="margin-top: 30px;">

          

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0021_Charla “De la tierra al patrimonio” .jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 24 de septiembre</h6>
              <h3 class="title"><a href="">Charla “De la tierra al patrimonio” </a></h3>
              <p class="description"> Descubre que el suelo como material de construcción ha proporcionado patrimonio para toda la humanidad, aportando a la cultura y al desarrollo de las comunidades. </p>
              <p> <b>Hora:</b>  2:00 p. m. - 4:00 p. m.</h5>
              <p><b>Lugar:</b> Casa Prado, carrera 50, avenida Palacé #64 - 00, barrio Prado. </h5>
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Conversatorio_PB"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0016_Conversemos sobre el Plan Integral de Gestión de Prado.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 24 de septiembre</h6>
              <h3 class="title"><a href="">Conversemos sobre el Plan Integral de Gestión de Prado. </a></h3>
              <p class="description"> Acompáñanos en este espacio para hablar sobre el Plan Integral de Gestión de Prado, conocer sus avances y objetivos para seguir contribuyendo a la puesta en valor de su patrimonio cultural y la conservación de su vocación residencial.</p>
              <p> <b>Hora:</b> 4:00 p. m - 6:00 p. m.  </h5>
              <p><b>Lugar:</b> Casa Prado, carrera 50, avenida Palacé #64 - 00, barrio Prado.</h5>
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Conversatorio_PB"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>
          
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0007_Recorrido nocturno “Prado, un barrio que se lee con los pies”.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 24 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido nocturno: Prado, un Barrio que se lee con los pies.</a></h3>
              <p class="description">Entre historias, mitos urbanos y chismes nos adentramos en el único barrio con declaratoria patrimonial en el mes que resignifica su existencia. </p>
              <p> <b>Hora:</b> 6:30 p. m. - 9:00 p. m.  </h5>
              <!-- <p><b>Lugar:</b> Tienda D1 de la estación Hospital del Metro. </h5> -->
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Recorrido_Nocturno"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>

         
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0014_estampaton.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 24 de septiembre</h6>
              <h3 class="title"><a href="">Estampatón</a></h3>
              <p class="description">Estampa tu camiseta con diseños relacionados con el patrimonio del barrio Prado y lleva contigo todo el estilo de esta celebración.   </p>
              <p> <b>Hora:</b> 11:00 a.m. - 7:00 p. m. </h5>
              <p><b>Lugar:</b>  Casa Prado, carrera 50, avenida Palacé #64 - 00, barrio Prado. </h5>
              
            </div>
          </div>


          </div>

          <div class="row justify-content-center" style="margin-top: 30px;">


          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0009_Poncherazo.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 24 de septiembre</h6>
              <h3 class="title"><a href="">Poncherazo</a></h3>
              <p class="description">Viaja en el tiempo, haz tu mejor pose, captura el momento y lleva a casa un retrato al estilo antiguo. </p>
              <p> <b>Hora:</b>  11:00 a. m.  - 7:00 p. m. </h5>
              <p> <b>Lugar:</b> Casa Prado, Carrera 50 (Palacé) # 64-00, barrio Prado </h5>
              
            </div>
          </div>


          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0010_Mercados Campesinos.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 24 de septiembre</h6>
              <h3 class="title"><a href="">Mercados Campesinos</a></h3>
              <p class="description">Disfruta de productos agrícolas y conoce la gran variedad de alimentos tradicionales de nuestra ciudad que traen nuestros emprendedores.</p>
              <p> <b>Hora:</b> 10:00 a. m. - 6:00 p. m.</h5>
              <p> <b>Lugar:</b> Carrera Palacé, entre las calles 63 y 64</h5>
              
            </div>
          </div>


          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0007_Recorrido de árboles patrimoniales en La Playa-San Ignacio.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Sábado 24 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido de árboles patrimoniales en La Playa-San Ignacio</a></h3>
              <p class="description">Recorridos guiados en los que se sensibiliza a los participantes sobre la historia, la riqueza y la memoria colectiva local a través de sus árboles y palmas. </p>
              <p> <b>Hora:</b> 9:00 a. m. a 12:00 p.m.</h5>
              <p> <b>Lugar:</b> corredor de La Playa-San Ignacio</h5>
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://docs.google.com/forms/d/e/1FAIpQLSel0xs6x3FwtQUdgoPTu10iQNfGnHelKJwFjE5LsRUL--zS5A/viewform"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0003_Sembratón de guayacanes en Prado.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Domingo 25 de septiembre</h6>
              <h3 class="title"><a href="">Sembratón de guayacanes en Prado </a></h3>
              <p class="description"> Hagamos florecer este barrio patrimonial con la siembra de guayacanes, contribuyendo así con el sistema de arborización del sector para revivir el sueño de Don Ricardo Olano.</p>
              <p> <b>Hora:</b> 9:00 a. m - 12:00 p.m.  </h5>
              <p><b>Lugar:</b> calle 63A con carrera 47</h5>
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Sembraton"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>

          </div>



        <div class="row justify-content-center" style="margin-top: 30px;">

     

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0009_Poncherazo.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Domingo 25 de septiembre</h6>
              <h3 class="title"><a href="">Poncherazo</a></h3>
              <p class="description">Viaja en el tiempo, haz tu mejor pose, captura el momento y lleva a casa un retrato al estilo antiguo.</p>
              <p> <b>Hora:</b> 11:00 a. m.  - 7:00 p. m.  </h5>
              <p><b>Lugar:</b> Casa Prado, Carrera 50 (Palacé) # 64-00, barrio Prado </h5>
             
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0001_Taller Star Model de Urrego.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Lunes 26 de septiembre</h6>
              <h3 class="title"><a href="">Taller Star Model de Urrego</a></h3>
              <p class="description">Aprende sobre el diseño conceptual de modelos de negocio,  operatividad, sostenibilidad y valor agregado de las unidades creativas.</p>
              <p> <b>Hora:</b> 10:00 a. m. - 12:00 p.m.  </h5>
              <p><b>Lugar:</b> Casa Prado, carrera 50 (avenida Palacé) # 64 - 00, barrio Prado</h5>
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Charlas_Creativas"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/estacion.jpeg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Martes 27 de septiembre</h6>
              <h3 class="title"><a href="">Visita guiada al Edificio Estación Medellín</a></h3>
              <p class="description"> </p>
              <p> <b>Hora:</b> 10:00 a. m. - 11:00 a. m. </h5>
              <p><b>Lugar:</b> Estación Medellín, oficina 107</h5>
              <p><b>Inscríbete:</b> 448 15 54 (Cupos máximo de 20 personas).</h5>
         

            </div>
          </div>

         
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0021_El Museo de Antioquia y sus alrededores.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Martes 27 de septiembre</h6>
              <h3 class="title"><a href="">El Museo de Antioquia y sus alrededores: vida y obra del maestro Fernando Botero. </a></h3>
              <p class="description">Un encuentro para reconocer la importancia de esta zona de la ciudad, su valor histórico y sus dinámicas desde su creación hasta la donación del maestro Fernando Botero.  </p>
              <p> <b>Hora:</b> 2:00 p. m.  </h5>
              <p><b>Lugar:</b> Entrada principal del Museo de Antioquia</h5>
              
             
              
            </div>
          </div>


        </div>

        <div class="row justify-content-center" style="margin-top: 30px;">

    
          
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0006_Celebración de la Fiesta del Patrimonio.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Miércoles 28 de septiembre</h6>
              <h3 class="title"><a href="">Celebración de la Fiesta del Patrimonio y  90 años del aeropuerto Olaya Hererra</a></h3>
              <p class="description">Descubre lo que hay detrás de la historia del aeropuerto Olaya Herrera, en un evento conmemorativo de sus 90 años, y celebra la Fiesta del Patrimonio de este Bien de Interés Cultural.</p>
              <p> <b>Hora:</b>  7:00 p. m. - 10:00 p. m. </h5>
              <p><b>Lugar:</b> Aeropuerto Olaya Herrera. </h5>
              <p><b>Información</b> 3607080 / info@aeropuertoolayaherrera.gov.co </h5>
             
             
            </div>
          </div>

        

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0013_Exposición de la planoteca antigua del arquitecto Federico Vásquez Uribe.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Miércoles 28 de septiembre</h6>
              <h3 class="title"><a href="">Exposición de la planoteca antigua del arquitecto Federico Vásquez Uribe</a></h3>
              <p class="description"> Anímate a ver los planos expuestos que hacen parte del acervo planimétrico donado por el arquitecto Federico Vásquez Uribe y que son custodiados en la biblioteca central Monseñor Darío Múnera Vélez de la UPB, en su Colección Patrimonial. </p>
              <p> <b>Hora:</b> 3:00 p. m. - 5:00 p. m.  </h5>
              <p><b>Lugar:</b> Biblioteca central Universidad Pontificia Bolivariana. Sala audiovisual piso 1</h5>
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Expo_Planoteca"><b>Inscríbete aquí</b></a></button></div>
              
            </div>
          </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0000_Tarde de Prado - Conversatorio “Alfarería.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Jueves 29 de septiembre</h6>
              <h3 class="title"><a href="">Tarde de Prado - Conversatorio: Alfarería, nuestra inmemorable relación con el barro</a></h3>
              <p class="description"> Un encuentro para reconocer la fuerza patrimonial del universo alfarero</p>
              <p> <b>Hora:</b> 4: 00 p. m.  </h5>
              <p><b>Lugar:</b> Casa del Patrimonio</h5>
          

            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0005_Recorrido urbano “¿Cómo leemos las relaciones entre la propuesta de la modernidad, la Bauhaus y nuestra identidad (1).jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Jueves 29 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido urbano “¿Cómo leemos las relaciones entre la propuesta de la modernidad, la Bauhaus y nuestra identidad?” Centro de Medellín  </a></h3>
              <p class="description">Conoce un poco más de Medellín desde la mirada Bauhaus, la arquitectura moderna y nuestro patrimonio, como parte de los 80 años de fundación de la Facultad de Arquitectura de la UPB. </p>
              <p> <b>Hora:</b> 4:00 p. m. - 6:00 p. m. </h5>
              <!-- <p><b>Lugar:</b> Museo de Antioquia,  calle 52 # 52 - 43</h5> -->
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Recorrido_Bauhaus"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>

          </div>


          <div class="row justify-content-center" style="margin-top: 30px;">

      
  
  

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0004_Recorrido urbano por los bares y restaurantes.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Viernes 30 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido urbano por los bares y restaurantes más emblemáticos del Centro de Medellín. Recorrido # 2 </a></h3>
              <p class="description">Visita nueve bares y restaurantes del Centro de Medellín, íconos y referentes de nuestra memoria colectiva, y parte innegable de nuestra identidad cultural.   </p>
              <p> <b>Hora:</b> 4:00 p. m. - 6:00 p. m. </h5>
              <!-- <p><b>Lugar:</b> Teatro Pablo Tobón Uribe, carrera 40 # 51-24 </h5> -->
              <p><b>Cupos limitados</b></p>
              <div align="center"><button type="button" class="btn btn-outline-secondary btn-lg justify-content-center"><a href="https://bit.ly/FiestadelPatrimonio_Recorrido_Bares"><b>Inscríbete aquí</b></a></button></div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0020_El Picacho.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Viernes 30 de septiembre</h6>
              <h3 class="title"><a href="">Recorrido por el cerro El Picacho, como cierre del proyecto “Cultura y diversión a un solo click”. Cerro El Picacho, un lugar para disfrutar y cuidar. </a></h3>
              <p class="description">Aprecia el patrimonio natural de la ciudad y disfruta de una de las mejores panorámicas de Medellín.   </p>
              <p style="font-size:10px;">*Proyecto ganador de la convocatoria de Fomento y Estímulos para el Arte y la Cultura 2022, modalidad “Apropiación del Patrimonio Cultural”</p>
              <p> <b>Hora:</b> 5:00 p. m.  </h5>
              <p><b>Lugar:</b> Estación El Progreso, metrocable Línea P </h5>
            
              <p><b>Mayores informes:</b>  321 7586815 - 300 7488540</h5>
             
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/mujeres.jpeg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Viernes 30 de septiembre</h6>
              <h3 class="title"><a href="">Noche de conciertos: Mujeres, huellas y raíces.</a></h3>
              <p class="description">Déjate contagiar con la música y el patrimonio en una fiesta con la agrupación Explosión Negra, un homenaje a dos lideresas del barrio Moravia: Mamá Chila y Heroína Córdoba.  </p>
              <p style="font-size:10px;">*Proyecto ganador de la convocatoria de Fomento y Estímulos para el Arte y la Cultura 2022, modalidad “Apropiación del Patrimonio Cultural”</p>
              <p> <b>Hora:</b> 5:00 p. m.  </h5>
              <p><b>Lugar:</b> Auditorio Centro de Desarrollo Cultural de Moravia</h5>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/bauhaus (1).jpeg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Actividades permanentes</h6>
              <h3 class="title"><a href="">Bauhaus Reverberada: 100 años de Bauhaus y 80 años de la Facultad de Arquitectura de Universidad Pontificia Bolivariana </a></h3>
              <p class="description">Descubre hasta el 14 de octubre, lo que la exposición sobre Bauhaus y América Latina tienen para mostrarte.   </p>
              <p> <b>Hora:</b> 8:10 a. m - 5:30 p. m.</h5>
              <p><b>Lugar:</b> Biblioteca EPM.</h5>
              
            </div>
          </div>
             
              
    
            </div>


            <div class="row justify-content-center" style="margin-top: 30px;">

    

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div><img src="{{ asset('assets/img/patrimonio/_0010_Apertura de la exposición “Arquitectura de nuestra memoria”.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Actividades permanentes</h6>
              <h3 class="title"><a href="">“Arquitectura de nuestra memoria”</a></h3>
              <p class="description"> Una muestra gráfica que nos enseña la belleza del pasado a través de representaciones de algunos edificios de nuestra ciudad.</p>
              <p> <b>Hora:</b> 10:00 a. m. -5:30 p. m. </h5>
              <p><b>Lugar:</b> Casa Prado, carrera 50, avenida Palacé #64 - 00, barrio Prado.</h5>
              <p><b>Fecha:</b> Del 20 al 26 de septiembre</h5>
              <p>Horario especial sábado 24  de septiembre: 10:00 a. m - 11:00 p. m.</h5>

            </div>
          </div>

          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100" >
              <div><img src="{{ asset('assets/img/patrimonio/_0009_Apertura de la exposición Plan Integral de Gestión de Prado” y otros proyectos de la Agencia APP.jpg')}}" class="menu-img img-fluid" style="margin-bottom: 10px;"></div>
              <h6>Actividades permanentes</h6>
              <h3 class="title"><a href="">Exposición “Plan Integral de Gestión de Prado” y otros proyectos de la Agencia APP</a></h3>
              <p class="description"> Entérate sobre el Plan Integral de Gestión de Prado, conoce sus avances, objetivos y puesta en valor de su patrimonio cultural, así como los proyectos gestionados por la Agencia APP.</p>
              <p> <b>Hora:</b> 10:00 a. m. - 5:30 p. m. </h5>
              <p><b>Lugar:</b> Casa Prado, carrera 50, avenida Palacé #64 - 00, barrio Prado.</h5>
              <p><b>Fecha:</b> Del 20 al 26 de septiembre</h5>
              <p>Horario especial sábado 24  de septiembre: 10:00 a. m - 11:00 p. m.</h5>

            </div>
          </div>

            </div>

        


      </div>
    </section>
<!-- End Featured Services Section -->
<!-- 
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    

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