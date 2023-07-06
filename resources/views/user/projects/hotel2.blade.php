@include('includes.header.mudag')
  <body id="page-top">
        <!-- Mashead header-->
        <section style="padding-bottom: 0rem;">
        <picture>
            <source media="(min-width: 800px)" srcset="{{ asset('assets/img/Proyectos/header-hote.png') }}">
            <source media="(min-width: 330px)" srcset="{{ asset('assets/img/Proyectos/MOBILE-3.png') }}">
            <img src="{{ asset('assets/img/Proyectos/header-hote.png') }}" style="width:100% " alt="Ejemplo">
        </picture>
        <!-- <img src="{{ asset('assets/img/Proyectos/header-hote.png') }}" style="position: relative; width:100%; height:700px; background-size: 100% 100%;" /> -->
        </section>
        <!-- Quote/testimonial aside-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    
                 

                     
                            <h6 class="display-1 lh-1 mb-3" style="font-size: 2rem;">@lang('messages.parrafo32')</h6>
                            <p class="lead fw-normal text-muted mb-5">@lang('messages.parrafo33')</p>
                            

                            
                    
                     
                </div>
            </div>
        </header>
        <img src="{{ asset('assets/img/Proyectos/banner-hotel.png') }}" style="width:100%;" />
        <!-- App features section-->
        <section>
        <div class="container px-5">
                <div class="row gx-5 align-items-center">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.ibb.co/JxV97Bk/hotel-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/ZNKt9LG/hotel-2.jpg" class="d-block w-100" alt="...">
    </div>
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div><p>Imágenes de referencia sujetas a cambios.</p>
                </div>
        </div>
        </section> 
        <img src="{{ asset('assets/img/Proyectos/banner-hotel2.png') }}" style=" width:100%;" />
     

        

        <section id="features"><section class="section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <p>¿Qué opina la gente?</p>
                        <h2>Testimonios</h2>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <!-- <div class="col-sm-4">
                    <div class="team-box">
                    <center><img src="{{ asset('assets/img/Proyectos/gilberto.png') }}" class="rounded-circle" ></center>
                        <h4>Gilberto de Jesús Giraldo Buitrago</h4>
                        <h6 class="text-muted">Gerente de la estructuración del proyecto</h6>
                        <p style="font-size:22px;">"Proyectamos un hotel con atención especializada en deporte para atender deportistas de alta competencia que visiten Medellín"</p>
                        <ul class="list-inline social">
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" class="bg-twitter"><i class="ti-twitter-alt"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" class="bg-dribbble"><i class="ti-dribbble"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" class="bg-linkedin"><i class="ti-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div> -->
               <img src="https://i.ibb.co/sb44Gd9/Testimonio-hotel.png" alt="">
            </div>
            <!-- end row -->

        </div>
        <!-- end container -->
    </section>
        </section>

   
        <!-- Footer-->
        <footer id="footer">


<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Agencia APP</h3>
        <p>
        Medellin / Antioquia <br>
        Carrera 55 # 42-180 Local 203 Edificio Plaza de La Libertad<br></p>
       <a href="{{ route('user.projects.mapa') }}"><p><strong>Mapa del sitio</strong></p></a>
       

      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Contacto</h4>
        <p> <strong> Telefono: </strong> +57 604 448 1740</p>
         <p><strong>Correo:</strong> info@app.gov.co</p>
        <p> <strong>Información general:</strong>  info@app.gov.co</p>
        <p> <strong> Notificaciones judiciales:</strong> procesosjudiciales@app.gov.co</p>
     
      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Horario de atención</h4>
       <p> <strong> Lunes - Jueves: </strong> 7:30 AM - 5:30 PM</p>
       <p> <strong> Viernes: </strong> 7:30 AM - 4:30 PM</p>
     
      </div>

        

      <div class="col-lg-3 col-md-6 footer-contact">
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
        <!-- Feedback Modal-->
      
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="{{ asset('assets/js/mudag.js')}}"></script>
    </body>
</html>