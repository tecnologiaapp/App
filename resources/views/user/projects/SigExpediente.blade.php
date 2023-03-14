<!DOCTYPE html>
<html lang="es">



<body>

@include('includes.header.navsig')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Agencia APP</h1>
          <h2>Medellín, Colombia</h2>
          <!-- <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div> -->
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
          
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeria de mapas</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Todo</li>
          <li data-filter=".filter-mapa">Mapa</li>
          <li data-filter=".filter-escena">Escena</li>
          <li data-filter=".filter-dashboard">Dashboard</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-mapa">  
            <div class="portfolio-img"><img src="https://i.ibb.co/Zm9DmDq/mapa.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Mapa 1</h4>
              <p>App</p>
              <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Mapa 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-escena"> 
            <div class="portfolio-img"><img src="https://i.ibb.co/Zm9DmDq/mapa.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Escena 1</h4>
              <p>App</p>
              <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Escena 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-dashboard"> 
            <div class="portfolio-img"><a href="https://www.arcgis.com/apps/dashboards/135b9dce2374440cb2d16b272c22194d" target="_blank"><img src="https://i.ibb.co/Zm9DmDq/mapa.png" class="img-fluid" alt=""></a></div>
            <div class="portfolio-info">
              <h4>Sistema gerencial para el monitoreo</h4>
              <p>Web</p>
              <a href="https://i.ibb.co/Zm9DmDq/mapa.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dashboard 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>

     

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    



  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Agencia APP</h3>
        <p>
        Medellin / Antioquia <br>
        Carrera 55 # 42-180 Local 203 Edificio Plaza de La Libertad<br>  
          <strong>Telefono:</strong> +57 604 448 1740<br>
          <strong>Correo:</strong> info@app.gov.co<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Mapa del sitio</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Expediente geografico</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Datos abiertos</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Contacto</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>AEEP</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('user.projects.aeep') }}" target="_blank">Conocer más</a></li>
 
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Redes Sociales</h4>
        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          
          <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
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
</body>

</html>