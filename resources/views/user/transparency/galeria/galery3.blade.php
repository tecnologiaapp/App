@extends('layouts.app')
@section('content')
@section('body_color', '#ffffff;')

<head>
  <link rel="stylesheet" href="{{ asset('assets/css/galeria.css')}}">
</head>

<div class="section-title" style="padding-top: 130px;">
          <h2>Cárcel Metropolitana para Sindicados</h2>
        </div>

<div class="container">
 <!-- ======= Gallery Section ======= -->
 <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/carcel/1.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/carcel/1.jpg')}}" title="Cárcel Metropolitana para Sindicados" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/carcel/2.png')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/carcel/2.png')}}" title="Cárcel Metropolitana para Sindicados" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/carcel/3.png')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/carcel/3.png')}}" title="Cárcel Metropolitana para Sindicados" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
      
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/carcel/4.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/carcel/4.jpg')}}" title="Cárcel Metropolitana para Sindicados" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
               
              </div>
            </div>
          </div><!-- End Gallery Item -->
  
          

        </div>

      </div>
    </section><!-- End Gallery Section -->
    </div>

@endsection
