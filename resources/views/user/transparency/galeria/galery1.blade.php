@extends('layouts.app')
@section('content')
@section('body_color', '#ffffff;')

<head>
  <link rel="stylesheet" href="{{ asset('assets/css/galeria.css')}}">
</head>

<div class="section-title" style="padding-top: 130px;">
          <h2>Rendición de cuentas 2021</h2>
        </div>

<div class="container">
{{--<!-- ======= Gallery Section ======= -->
 <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/p2.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/p2.jpg')}}" title="Rendición de cuentas 2021" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/p1.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/p1.jpg')}}" title="Rendición de cuentas 2021" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
    
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/p4.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/p4.jpg')}}" title="Rendición de cuentas 2021" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
               
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/p5.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/p5.jpg')}}" title="Rendición de cuentas 2021" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/p6.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/p6.jpg')}}" title="Rendición de cuentas 2021" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/p7.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/p7.jpg')}}" title="Rendición de cuentas 2021" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/p8.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/p8.jpg')}}" title="Rendición de cuentas 2021" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            
              </div>
            </div>
          </div><!-- End Gallery Item -->
    
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/p10.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/p10.jpg')}}" title="Rendición de cuentas 2021" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/p11.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/p11.jpg')}}" title="Rendición de cuentas 2021" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/p12.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/p12.jpg')}}" title="Rendición de cuentas 2021" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/p12.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/p12.jpg')}}" title="Rendición de cuentas 2021" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/p13.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/p13.jpg')}}" title="Rendición de cuentas 2021" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/p14.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/p14.jpg')}}" title="Rendición de cuentas 2021" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/p15.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/p15.jpg')}}" title="Rendición de cuentas 2021" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            
              </div>
            </div>
          </div><!-- End Gallery Item -->--}}
          

        </div>

      </div>
    </section><!-- End Gallery Section -->
    </div>



@endsection
