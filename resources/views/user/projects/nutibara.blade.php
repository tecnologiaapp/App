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
  <link rel="stylesheet" href="{{ asset('assets/css/nutib.css')}}">
  <style>
    .contenedor-imagen {
  width: 600px; /* Ancho del contenedor */
  height: 400px; /* Alto del contenedor */
  overflow: hidden; /* Ocultar la parte de la imagen que se salga del contenedor */
}

.contenedor-imagen img {
  width: 100%; /* Ajustar la imagen al ancho del contenedor */
  height: 100%; /* Ajustar la imagen al alto del contenedor */
  border-radius: 30px;
  object-fit: cover; /* Escalar la imagen sin deformarla y recortando lo que sobre */
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
      <h1>Deslumbra tus sentidos</h1>
      <h2>Explora la belleza de la luz en la arquitectura: Un evento imperdible</h2>
      <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
      <button id="abrir-modal" class="btn-get-started scrollto">Descubrir</button>

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
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <!-- <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="http://agencia.test/assets/img/Galeria/nutibara/Nutibara_Portela.jpg" class="img-fluid" alt="" height="100%" width="300px">
          </div> -->

            <div class="contenedor-imagen col-lg-6 order-1 order-lg-2">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/07/Hotel_Nutibara-Fachada-Medellin.JPG" alt="Descripción de la imagen">
            </div>

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

      <div class="section-title">
          <span>Categorias</span>
          <h2>Categorias</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row" style="justify-content: space-around;">

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box">
              <span>01</span>
              <h4>Categoria</h4>
              <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
              <div id="myCarousel" class="carousel slide mt-3" data-bs-ride="carousel">
                    <!-- Indicadores -->
                    <ol class="carousel-indicators">
                        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                    </ol>

                    <!-- Imágenes -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/07/Hotel_Nutibara-Fachada-Medellin.JPG" alt="Imagen 1" height="300px" width="100%">
                        </div>
                        <div class="carousel-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/07/Hotel_Nutibara-Fachada-Medellin.JPG" alt="Imagen 2" height="300px" width="100%">
                        </div>
                        <div class="carousel-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/07/Hotel_Nutibara-Fachada-Medellin.JPG" alt="Imagen 3" height="300px" width="100%">
                        </div>
                    </div>

                    <!-- Controles -->
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
            <div class="box">
              <span>02</span>
              <h4>Categoria</h4>
              <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
              <div id="myCarousel" class="carousel slide mt-3" data-bs-ride="carousel">
                    <!-- Indicadores -->
                    <ol class="carousel-indicators">
                        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                    </ol>

                    <!-- Imágenes -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/07/Hotel_Nutibara-Fachada-Medellin.JPG" alt="Imagen 1" height="300px" width="100%">
                        </div>
                        <div class="carousel-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/07/Hotel_Nutibara-Fachada-Medellin.JPG" alt="Imagen 2" height="300px" width="100%">
                        </div>
                        <div class="carousel-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/07/Hotel_Nutibara-Fachada-Medellin.JPG" alt="Imagen 3" height="300px" width="100%">
                        </div>
                    </div>

                    <!-- Controles -->
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
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
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem at accusamus enim ea dolorem optio rerum facilis cupiditate vitae necessitatibus ut quis mollitia ratione quos atque perspiciatis voluptate, nam impedit, dolorum voluptatum sed facere nemo! Pariatur distinctio autem quisquam ad cumque? Ratione molestiae architecto, harum adipisci cumque odio veritatis, doloribus quae aperiam similique minima repellendus ipsam nulla voluptates recusandae? Saepe ullam delectus et laborum enim consectetur? Eius eos quia iusto debitis maxime animi sunt laborum aspernatur dolorem tenetur natus quod provident nihil officia magnam iure, repudiandae delectus. Culpa, dolores nam. Provident, illo. Assumenda eaque doloremque commodi dolores architecto totam quis, laborum, quia repellat nam impedit excepturi natus deserunt quisquam, dolor voluptatem. Fugit, officiis est. Ab placeat quia facilis quisquam explicabo debitis eveniet provident. Excepturi, facere maxime. Odit neque odio accusantium vel, repellendus aspernatur tempora deserunt cum possimus consequatur nam iste vero, voluptatum deleniti dolore libero earum provident, aliquam voluptas? Vitae doloribus maiores nobis animi eligendi minus voluptatibus eum enim quisquam quo dicta molestiae, aperiam ab voluptatem officiis optio eos. Repellendus dolore consectetur nemo asperiores sed deleniti ipsum eligendi fugiat corrupti dolorem! Sapiente voluptas obcaecati iste minima, praesentium modi! Dicta, recusandae omnis maiores saepe nemo error dolore cum deleniti, earum, amet unde vitae eius doloribus suscipit. Maxime atque similique vel explicabo eius eos sit recusandae. Dolore sed corrupti repellendus soluta aliquam eveniet itaque vero facere repudiandae laborum, iure necessitatibus esse quaerat mollitia nihil quo ducimus beatae exercitationem doloremque tempore aperiam corporis. Aperiam veniam, minima, possimus laborum ad qui iusto laboriosam aut fugit dolorem rerum tempore temporibus aliquid officia placeat sequi debitis suscipit eum dolor reiciendis maiores recusandae. Eum delectus blanditiis a animi perspiciatis! Voluptatum voluptates, dolorem omnis dicta praesentium ipsam, neque totam repellendus hic facilis odit molestias cum aspernatur dolore animi, est atque culpa optio! Quaerat, dolor repellat. Iusto explicabo voluptas corrupti animi dolor. Nesciunt nobis assumenda rerum eos odit at? Eos corrupti hic nemo quibusdam sit optio commodi provident suscipit, sunt minus odio! Ipsam cumque optio esse culpa, corporis laborum in illo saepe reprehenderit accusamus qui soluta sint ratione molestias exercitationem, ducimus unde, excepturi aliquam commodi ab velit nobis quam eum sequi? Sapiente, tempora. Molestiae id laboriosam architecto est quaerat ab? Alias nostrum beatae perferendis vitae officia impedit doloremque ducimus facilis quis maxime iste, sint cum blanditiis quidem maiores repellat nesciunt! Ut voluptate ea dicta expedita ipsam eum, totam magnam, eveniet tempora, explicabo facilis non veniam officiis vel laudantium architecto?</p>

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
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row gy-4 justify-content-center">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-1.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-2.jpg" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-3.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-4.jpg" title="Gallery 4" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-5.jpg" title="Gallery 5" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-6.jpg" title="Gallery 6" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-7.jpg" title="Gallery 7" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-8.jpg" title="Gallery 8" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-9.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-9.jpg" title="Gallery 9" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-10.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-10.jpg" title="Gallery 10" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-11.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-11.jpg" title="Gallery 11" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-12.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-12.jpg" title="Gallery 12" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-13.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-13.jpg" title="Gallery 13" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-14.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-14.jpg" title="Gallery 14" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-15.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-15.jpg" title="Gallery 15" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-16.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-16.jpg" title="Gallery 16" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                
              </div>
            </div>
          </div><!-- End Gallery Item -->

        </div>

      </div>
    </section>
    <!-- End Gallery Section -->



  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

        <div class="footer-top" style="text-align:left;">
            <div class="container">
                <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3><strong>Agencia APP</strong></h3>
                    <p>Medellín / Antioquia <br>
                    Carrera 55 # 42-180 Local 203 Edificio Plaza de La Libertad<br>
                    </p>   

                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4><strong>Contacto</strong></h4>
                    <p> <strong> Teléfono: </strong> +57 604 448 1740</p>
                    <p><strong>Correo:</strong> info@app.gov.co</p>
                    <p> <strong>Información general:</strong>  info@app.gov.co</p>     
                
                </div>

            

                <div class="col-lg-3 col-md-6 footer-contact">
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

                <div class="col-lg-3 col-md-6 footer-contact">
                    <div class="row" style="flex-wrap:nowrap;">
                        <a href="{{ url('/') }}" style="width: 174px; padding-top: 22px;" target="_blank"><img class="logo me-auto" src="assets/img/carcel/Logo-Agencia-APP-morado.png" width="240px;" height="110px;"  style="padding-right: 45px;"></a>
                        
                        
                        <a href="https://www.medellin.gov.co/" style="width: 174px" target="_blank"><img class="logo me-auto" src="assets/img/carcel/Distrito.png" width="180px;" height="150px;"  style="padding-left: 10px; padding-right: 10px;"></a>
                    </div>
            
                </div>

            
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
    videoId: "NhfuTWgzxGg",
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