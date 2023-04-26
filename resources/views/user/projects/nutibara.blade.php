<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nutibara</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css') }}">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/css/nut.css')}}">
  <style>

.historia-imagen img {
  width: 100%; /* Ajustar la imagen al ancho del contenedor */
  height: 100%; /* Ajustar la imagen al alto del contenedor */
  border-radius: 30px;
  object-fit: cover;
}
.img-fluid {
    max-width: 355px;
    height: 285px;
}
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="#">Hotel Nutibara</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Historia</a></li>
          <li><a class="nav-link scrollto" href="#why-us">Categorías</a></li>
          <li><a class="nav-link scrollto " href="#services">Términos y condiciones</a></li>
          <li><a class="nav-link scrollto " href="#gallery">Galería</a></li>    
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
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
          </li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Iluminamos el corazón patrimonial de Medellín</h1>
      <h2>Rescata el valor histórico y patrimonial del Hotel Nutibara con tus mejores fotografías.</h2>
      <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
      <button id="abrir-modal" class="btn-get-started scrollto">Descubre</button>

            <!-- El modal -->
            <div id="mi-modal" class="modal">
            <div class="modal-content">
            <!-- <span class="cerrar">&times;</span>
           <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/Co8jZX9vcLy/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/Co8jZX9vcLy/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Ver esta publicación en Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/Co8jZX9vcLy/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Una publicación compartida de Agencia APP Medellín (@agenciaappmed)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script> -->
            <span class="cerrar">&times;</span>
            <div id="video-container"></div>
            </div>
            </div>

         

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <span>Historia</span>
          <h2>Historia</h2>
        </div>

        <div class="row align-items-center" style="font-size: 18px;">

            <div class="historia-imagen col-lg-6 order-1 order-lg-2">
            <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/0/07/Hotel_Nutibara-Fachada-Medellin.JPG" alt="Descripción de la imagen"> -->
            <img src="assets/images/HotelNuti.jpg" alt="Descripción de la imagen">
            </div>

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <p>
            En sus 78 años de historia, el Hotel Nutibara ha recibido a miles de viajeros, turistas, aclamados artistas y personalidades de la época. Hasta 1972, algunos de los
            presidentes de Colombia se hospedaron en él cuando venían a la capital antioqueña.
            </p>
            <p>
            Esta imponente edificación de estilo californiano hace parte del Centro tradicional de
            Medellín con otros edificios como La Naviera, Palacé, Constain y Cárdenas, el
            Palacio Rafael Uribe Uribe y el Museo de Antioquia.
            </p>
            <p>
            El hotel es hoy un importante protagonista y referente de la ciudad, y un atractivo
            destino para visitar, no sólo por lo que representa la tradición de un lugar de estas
            características, también por el privilegio de encontrar un maravilloso lugar para
          hospedarse en el corazón patrimonial de Medellín.
            </p>
          </div>
        </div>

       

        <div class="row pt-5" style="font-size: 18px;">
        <div class="section-title">
          <span>Datos curiosos</span>
          <h2>Datos curiosos</h2>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" style="    padding-right: 30px;
" >
            <ul style="text-align:justify;">
              <li><i class="ri-check-double-line"></i> Jorge Eliécer Gaitán visitó al Hotel Nutibara en 1947 y en su terraza le tomaron un retrato emblemático que sirvió de base para el billete de 1.000 pesos Colombiano.</li>
              <li><i class="ri-check-double-line"></i>
              Entre 1948 y 1950, el compositor Lucho Bermúdez fue el músico de planta del hotel, donde se presentó semanalmente con su orquesta.
              </li>
              <li><i class="ri-check-double-line"></i>
              En sus salones se realizaron las fiestas del reinado de belleza de Antioquia, los remates de las corridas de toros y los bailes de Año Nuevo.
              </li>
           
              <li><i class="ri-check-double-line"></i>
              El diseño del Hotel Nutibara fue encargado al arquitecto norteamericano Paul
              Williams, famoso por trabajar en Hollywood haciendo mansiones para actores
              de cine y hoteles como el Beverly Hills, que aparece en la portada de <span style="italic">Hotel
              California</span> , el álbum de The Eagles.
              </li>
     
            </ul>

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <ul style="text-align:justify;">
            <li><i class="ri-check-double-line"></i>  
              El edificio fue el más alto de la ciudad por unos años, y su estilo supo mezclar lo
              tradicional y lo californiano.
              </li>
              <li><i class="ri-check-double-line"></i>
              El Hotel Nutibara costó 15.000 millones de pesos de la época.
              </li>
              <li><i class="ri-check-double-line"></i>
              Con la iluminación arquitectónica realizada por la Agencia para la Gestión del
              Paisaje, el Patrimonio y las Alianzas Público Privadas -Agencia APP, se busca
              recuperar el paisaje arquitectónico, fomentar la mejora y la conservación de
              edificaciones patrimoniales, aportar a la renovación y seguridad del Centro de
              la ciudad y mejorar la infraestructura de los edificios históricos.
              </li>
              <li><i class="ri-check-double-line"></i>
              El Hotel Nutibara era, junto al Club Unión, el núcleo de la cultura y el
              entretenimiento de la clase alta de Medellín hasta los años ochenta.
              </li>
            </ul>

          </div>
        </div>   

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

      <div class="section-title">
          <span>Categorías</span>
          <h2>Categorías</h2>
        </div>

        <div class="row align-items-stretch" style="justify-content: space-around;">

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box  h-100 d-flex flex-column justify-content-between">
              <h4 style="text-align:center;">Histórica</h4>
              <p>Comparte tus mejores momentos en el Hotel Nutibara entre 1945 y el año 2000.</p>
              <img src="assets/images/HotelNutibara10.jpg" alt="Nutibara" height="100%" width="100%" style="padding-top: 10px;">
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
            <div class="box">
              <h4 style="text-align:center;">Nocturna</h4>
              <p>Toma la mejor fotografía nocturna de la actual iluminación arquitectónica del Hotel Nutibara.</p>
              <img src="assets/images/HotelNutibara.jpg" alt="Nutibara" height="100%" width="100%" style="padding-top: 10px;">
            </div>
          </div>

        </div>
            
        <div class="row pt-5">
        <div class="section-title">
          <span>Fechas</span>
          <h2>Fechas</h2>
        </div>
        <p><strong>Postulación:</strong>  entre el 26 de abril y el 3 de mayo de 2023.</p>
        <p><strong>Premiación:</strong>  viernes 5 de mayo.</p>

          <div class="section-title">
          <span>Reconocimientos</span>
          <h2>Reconocimientos</h2>
          </div>
          <p>El ganador de cada categoría disfrutará del privilegio de una noche por pareja, todo incluido, en la suite presidencial del Hotel Nutibara.</p>
          <p><strong>Qué incluye: </strong>alojamiento por noche, por pareja; seguro hotelero por persona, desayuno tipo americano servido bufete y parqueadero (sujeto a disponibilidad).</p>
          </div>
  
      </div>
    </section>

    <section class="gallery">
              <div class="container-fluid">
                  <div class="row gy-4 justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                          <div class="gallery-item">
                            <img src="assets/images/2.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                              <a href="assets/images/2.jpg" title="Suite presidencial - Foto: Omar Portela"  class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                              
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-xl-3 col-lg-4 col-md-6">
                          <div class="gallery-item">
                            <img src="assets/images/3.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                              <a href="assets/images/3.jpg" title="Suite presidencial - Foto: Omar Portela"  class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                              
                            </div>
                          </div>
                        </div>
              
               
                     
                        <div class="col-xl-3 col-lg-4 col-md-6">
                          <div class="gallery-item">
                            <img src="assets/images/5.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                              <a href="assets/images/5.jpg" title="Suite presidencial - Foto: Omar Portela" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                              
                            </div>
                          </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                          <div class="gallery-item">
                            <img src="assets/images/6.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                              <a href="assets/images/6.jpg" title="Suite presidencial - Foto: Omar Portela" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                              
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-xl-3 col-lg-4 col-md-6">
                          <div class="gallery-item">
                            <img src="assets/images/7.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                              <a href="assets/images/7.jpg" title="Suite presidencial - Foto: Omar Portela" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                              
                            </div>
                          </div>
                        </div>
              
                    
                     
                        <div class="col-xl-3 col-lg-4 col-md-6">
                          <div class="gallery-item">
                            <img src="assets/images/9.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                              <a href="assets/images/9.jpg" title="Suite presidencial - Foto: Omar Portela" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                              
                            </div>
                          </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                          <div class="gallery-item">
                            <img src="assets/images/10.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                              <a href="assets/images/10.jpg" title="Suite presidencial - Foto: Omar Portela" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                              
                            </div>
                          </div>
                        </div>
                        
     
              
                        <div class="col-xl-3 col-lg-4 col-md-6">
                          <div class="gallery-item">
                            <img src="assets/images/12.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                              <a href="assets/images/12.jpg" title="Suite presidencial - Foto: Omar Portela" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                              
                            </div>
                          </div>
                        </div>
                     

                   
                  </div>
                
                        
                   
               
              </div>
        </section>    


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Postulación</h3>
          <p>Recuerda seguir las cuentas en Instagram de la Agencia APP (@agenciaappmed) y del Hotel Nutibara (@hotelnutibara) para que tus obras participen del concurso.</p>
          <a class="cta-btn" href="https://docs.google.com/forms/d/1b29OQJTLdsty5s9kY8YtYiyBu_AoxmiwK2zbw47kcs4/viewform?ts=6441b40a&edit_requested=true" target="_blank">Inscríbete</a>
        </div>

      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Términos y condiciones</span>
          <h2>Términos y condiciones</h2>
        </div>

       <div class="row" style="font-size: 18px;">
       <div  class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <ul style="text-align:justify;">
              <li><i class="ri-check-double-line"></i>En la categoría Histórica se tendrán en cuenta fotografías tomadas entre 1945 y el año 2000.</li>
              <li ><i class="ri-check-double-line"></i>
              En la categoría Nocturna se tendrán en cuenta fotografías tomadas entre el 26 de abril y el 3 de mayo de 2023. 
              </li>
              <li ><i class="ri-check-double-line"></i>
              Plazo máximo de envío de fotografías: miércoles 3 de mayo de 2023 a las 11:59 p. m.
              </li>
              <li ><i class="ri-check-double-line"></i>
              Podrás participar máximo con tres (3) fotografías en cada una de las categorías. 
              </li>
              <li ><i class="ri-check-double-line"></i>
              No se admiten montajes, transformaciones, alteraciones a la imagen ni ayudas con IA (Inteligencia Artificial).
              </li>
              <li ><i class="ri-check-double-line"></i>
              Se admiten ajustes básicos de revelado como exposición, iluminaciones, sombras, contraste, brillo, entre otros.
              </li>
              <li ><i class="ri-check-double-line"></i>
              Las fotos deben conservar sus metadatos originales (aplica para celular como para cámara profesional, semiprofesional, analógica (negativo), entre otros).
              </li>
              <li ><i class="ri-check-double-line"></i>
              Las fotografías no pueden tener marcas de agua, marcos, ni firmas.
              </li>
              <li ><i class="ri-check-double-line"></i>
              El peso de las fotografías debe ser máximo de 10 mb.
              </li>
              <li ><i class="ri-check-double-line"></i>
              La fotografía debe ser enviada únicamente en formato JPG. 
              </li>
           
            </ul>
        </div>
        <div  class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <ul style="text-align:justify;">           
              <li ><i class="ri-check-double-line"></i>
              Se prohíbe la participación de menores de edad en el contenido fotográfico de la categoría Nocturna.
              </li>
              <li ><i class="ri-check-double-line"></i> <strong>
              Para poder participar debes seguir las cuentas en Instagram de la Agencia APP (@agenciaappmed) y del Hotel Nutibara (@hotelnutibara).</strong>
              </li>
              <li ><i class="ri-check-double-line"></i>
              Diligencia el <a href="https://docs.google.com/forms/d/1b29OQJTLdsty5s9kY8YtYiyBu_AoxmiwK2zbw47kcs4/viewform?ts=6441b40a&edit_requested=true" target="_blank"><strong>formulario</strong></a>  y adjunta hasta tres fotografías en la(s) categoría(s) en la que deseas participar. 
              </li>
              <li ><i class="ri-check-double-line"></i>
              Al compartir tus fotografías permites la publicación del material en redes sociales, exposiciones, y otros espacios de la Agencia APP y del Hotel Nutibara. 
              </li>
              <li ><i class="ri-check-double-line"></i>
              Las fotografías son sin ánimo de lucro y en ningún momento serán utilizadas con fines comerciales.  La Agencia APP y el Hotel Nutibara quedan exentos de cualquier responsabilidad que se pueda derivar de la presente actividad.
              </li>
              <li ><i class="ri-check-double-line"></i>
              Declaro que las fotografías concursantes y los datos suscritos en el formulario son veraces. De lo contrario, el concursante (mayor de edad) deberá responder legalmente ante cualquier acción o reclamación que se instaure por la utilización y publicación de la fotografía, eximiendo de cualquier responsabilidad a la Agencia APP y al Hotel Nutibara. 
              </li>
              <li ><i class="ri-check-double-line"></i>
              Sólo se recibirán fotografías enviadas al formulario publicado en la página web.
              </li>
           
            </ul>
        </div>
       </div>

      </div>
    </section>
    <!-- End Services Section -->

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
      <div class="container-fluid">

      <div class="section-title">
          <span>Galería</span>
          <h2>Galería</h2>
        </div>

        <div class="row gy-4 justify-content-center">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/images/Hotel.jpg" class="img-fluid img-responsive" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/images/Hotel.jpg"  class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/images/HotelNutibara.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/images/HotelNutibara.jpg"  class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
   
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item" style="height:285px;">
              <img src="assets/images/HotelNutibara02.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/images/HotelNutibara02.jpg"  class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div>
          <!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/images/HotelNutibara03.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/images/HotelNutibara03.jpg"  class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div>
          <!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/images/HotelNutibara04.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/images/HotelNutibara04.jpg"  class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div>
          <!-- End Gallery Item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/images/HotelNutibara06.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/images/HotelNutibara06.jpg"  class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div>
          <!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/images/HotelNutibara07.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/images/HotelNutibara07.jpg"  class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div>
          <!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/images/HotelNutibara08.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/images/HotelNutibara08.jpg"  class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div>
          <!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/images/HotelNutibara09.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/images/HotelNutibara09.jpg"  class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div>
          <!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/images/HotelNutibara10.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/images/HotelNutibara10.jpg"  class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div>
          <!-- End Gallery Item -->

        </div>

      </div>
    </section>
    <!-- End Gallery Section -->



  </main>
  <!-- End #main -->
<img src="assets/images/Banner-logos.jpg" alt="" width="100%">
  <!-- ======= Footer ======= -->
  <footer id="footer">

        <div class="footer-top" style="text-align:left;">
            <div class="container">
                <div class="row">

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h3><strong>Agencia APP</strong></h3>
                    <p>Medellín / Antioquia <br>
                    Carrera 55 # 42-180 Local 203 Edificio Plaza de La Libertad<br>
                    </p>   

                </div>

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h4><strong>Contacto</strong></h4>
                    <p> <strong> Teléfono: </strong> +57 604 448 1740</p>
                    <p><strong>Correo:</strong> info@app.gov.co</p>
                    <p> <strong>Información general:</strong>  info@app.gov.co</p>     
                
                </div>

            

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h4><strong>Redes sociales</strong></h4>
                    <p>Síguenos y entérate de todo</p>
                    <div class="social-links mt-3">
                    <a href="https://twitter.com/agenciaappmed?lang=es" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>

                    <a href="https://www.facebook.com/Agenciaappmede" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                    
                    <a href="https://www.instagram.com/agenciaappmed/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>

                    <a href="https://co.linkedin.com/company/agencia-app-de-alcald%C3%ADa-de-medell%C3%ADn" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
                    
                    <a href="https://www.youtube.com/channel/UCV1jArK6Q8cgXX7ESNocJxA" class="youtube" target="_blank"><i class="bx bxl-youtube"></i></a>
                    </div>
                </div>

                <!-- <div class="col-lg-3 col-md-6 footer-contact">
                    <div class="row" style="flex-wrap:nowrap;">
                        <a href="{{ url('/') }}" style="width: 174px; padding-top: 22px;" target="_blank"><img class="logo me-auto" src="assets/img/carcel/Logo-Agencia-APP-morado.png" width="240px;" height="110px;"  style="padding-right: 45px;"></a>
                        
                        
                        <a href="https://www.medellin.gov.co/" style="width: 174px" target="_blank"><img class="logo me-auto" src="assets/img/carcel/Distrito.png" width="180px;" height="150px;"  style="padding-left: 10px; padding-right: 10px;"></a>
                    </div>
            
                </div> -->

            
                </div>
            </div>
        </div>

</footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Agregar la API de YouTube Player -->
<script src="https://www.youtube.com/iframe_api"></script>
<script>
// Obtener el elemento del botón y el modal
var boton = document.getElementById("abrir-modal");
var modal = document.getElementById("mi-modal");

// Cuando se haga clic en el botón, mostrar el modal y cargar el video
boton.onclick = function() {
  modal.style.display = "block";
  cargarVideo();
}

// Cargar el video en el contenedor del video
function cargarVideo() {
  // Obtener el contenedor del video
  var contenedor = document.getElementById("video-container");

  // Crear el objeto del reproductor de YouTube
  var reproductor = new YT.Player(contenedor, {
    videoId: "pVwAAnoEbxs",
    height: '400',
    width: '100%',
    events: {
      onReady: function() {
        reproductor.playVideo();
      }
    }
  });

  // Almacenar el objeto del reproductor en la variable global
  window.reproductor = reproductor;
}

// Cuando se haga clic en la "x" para cerrar el modal, ocultarlo y pausar el video
var cerrarBoton = document.getElementsByClassName("cerrar")[0];
cerrarBoton.onclick = function() {
  modal.style.display = "none";
  reproductor.pauseVideo();
}



</script>

<script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>


  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/nutibara.js')}}"></script>

</body>

</html>