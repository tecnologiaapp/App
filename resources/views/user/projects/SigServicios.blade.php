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
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('assets/img/city.png')}}" class="img-fluid animated" alt="">
          
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->

  <main id="main">

 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Herramientas moviles y web al servicio ciudadano</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
         
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Proyectos APP</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Bienes fiscales</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Estudios tecnicos</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Cifras AEEP</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Services Section -->

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


  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/landing.js')}}"></script>
</body>

</html>