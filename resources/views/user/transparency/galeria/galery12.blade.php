@extends('layouts.app')
@section('content')
@section('body_color', '#ffffff;')


<style>
    

/*--------------------------------------------------------------
# Pricing Section
--------------------------------------------------------------*/
.gallery {
  margin-top: 40px;
  margin-bottom: 40px;
}

.gallery .gallery-item {
  position: relative;
  overflow: hidden;
  border-radius: 10px;
}

.gallery .gallery-item img {
  transition: 0.3s;
}

.gallery .gallery-links {
  position: absolute;
  inset: 0;
  opacity: 0;
  transition: all ease-in-out 0.3s;
  background: rgba(0, 0, 0, 0.6);
  z-index: 3;
}

.gallery .gallery-links .preview-link,
.gallery .gallery-links .details-link {
  font-size: 20px;
  color: rgba(255, 255, 255, 0.5);
  transition: 0.3s;
  line-height: 1.2;
  margin: 30px 8px 0 8px;
}

.gallery .gallery-links .preview-link:hover,
.gallery .gallery-links .details-link:hover {
  color: #fff;
}

.gallery .gallery-links .details-link {
  font-size: 30px;
  line-height: 0;
}

.gallery .gallery-item:hover .gallery-links {
  opacity: 1;
}

.gallery .gallery-item:hover .preview-link,
.gallery .gallery-item:hover .details-link {
  margin-top: 0;
}

.gallery .gallery-item:hover img {
  transform: scale(1.1);
}

.glightbox-clean .gslide-description {
  background:#fff;
}

.glightbox-clean .gslide-title {
  color: black;
  margin: 0;
}

/*--------------------------------------------------------------
# Gallery Single Section
--------------------------------------------------------------*/
.gallery-single .portfolio-details-slider img {
  width: 100%;
}

.gallery-single .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: rgba(255, 255, 255, 0.7);
  opacity: 1;
}

.gallery-single .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: var(--color-primary);
}

.gallery-single .swiper-button-prev,
.gallery-single .swiper-button-next {
  width: 48px;
  height: 48px;
}

.gallery-single .swiper-button-prev:after,
.gallery-single .swiper-button-next:after {
  color: rgba(255, 255, 255, 0.8);
  background-color: rgba(0, 0, 0, 0.2);
  font-size: 24px;
  border-radius: 50%;
  width: 48px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.3s;
}

.gallery-single .swiper-button-prev:hover:after,
.gallery-single .swiper-button-next:hover:after {
  background-color: rgba(0, 0, 0, 0.6);
}

@media (max-width: 575px) {

  .gallery-single .swiper-button-prev,
  .gallery-single .swiper-button-next {
    display: none;
  }
}

.gallery-single .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
  font-family: var(--font-secondary);
}

.gallery-single .portfolio-info h3:after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 3px;
  background: var(--color-primary);
  left: 0;
  bottom: 0;
}

.gallery-single .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.gallery-single .portfolio-info ul li {
  display: flex;
  flex-direction: column;
  padding-bottom: 15px;
}

.gallery-single .portfolio-info ul strong {
  text-transform: uppercase;
  font-weight: 400;
  color: #6b7075;
  font-size: 14px;
}

.gallery-single .portfolio-info .btn-visit {
  padding: 8px 40px;
  background: var(--color-primary);
  color: #fff;
  border-radius: 50px;
  transition: 0.3s;
}

.gallery-single .portfolio-info .btn-visit:hover {
  background: #2cbc85;
}

.gallery-single .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
  color: #fff;
  font-family: var(--font-secondary);
}

.gallery-single .portfolio-description p {
  padding: 0;
}

.gallery-single .portfolio-description .testimonial-item {
  padding: 30px 30px 0 30px;
  position: relative;
  background: var(--color-secondary);
  height: 100%;
  margin-bottom: 50px;
}

.gallery-single .portfolio-description .testimonial-item .testimonial-img {
  width: 90px;
  border-radius: 50px;
  border: 6px solid #2e3133;
  float: left;
  margin: 0 10px 0 0;
}

.gallery-single .portfolio-description .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 15px 0 5px 0;
  padding-top: 20px;
}

.gallery-single .portfolio-description .testimonial-item h4 {
  font-size: 14px;
  color: rgba(255, 255, 255, 0.6);
  margin: 0;
}

.gallery-single .portfolio-description .testimonial-item .quote-icon-left,
.gallery-single .portfolio-description .testimonial-item .quote-icon-right {
  color: #5bd9a9;
  font-size: 26px;
  line-height: 0;
}

.gallery-single .portfolio-description .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.gallery-single .portfolio-description .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
  transform: scale(-1, -1);
}

.gallery-single .portfolio-description .testimonial-item p {
  font-style: italic;
  margin: 0 0 15px 0 0 0;
  padding: 0;
}
</style>



<div class="section-title" style="padding-top: 130px;">
          <h2>Lleras</h2>
        </div>

<div class="container">
 <!-- ======= Gallery Section ======= -->
 <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
   
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/lleras/Lleras.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/lleras/Lleras.jpg')}}" title="AEEP Provenza" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/lleras/Lleras2.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/lleras/Lleras2.jpg')}}" title="AEEP Provenza" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/lleras/Lleras3.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/lleras/Lleras3.jpg')}}" title="AEEP Provenza" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/lleras/Lleras4.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/lleras/Lleras4.jpg')}}" title="AEEP Provenza" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/lleras/Lleras5.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/lleras/Lleras5.jpg')}}" title="AEEP Provenza" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div>
          <!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/lleras/Lleras6.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/lleras/Lleras6.jpg')}}" title="AEEP Provenza" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/lleras/Lleras7.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/lleras/Lleras7.jpg')}}" title="AEEP Provenza" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/lleras/Lleras8.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/lleras/Lleras8.jpg')}}" title="AEEP Provenza" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/lleras/Lleras9.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/lleras/Lleras9.jpg')}}" title="AEEP Provenza" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('assets/img/Galeria/lleras/Lleras10.jpg')}}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('assets/img/Galeria/lleras/Lleras10.jpg')}}" title="AEEP Provenza" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              
              </div>
            </div>
          </div>
          <!-- End Gallery Item -->
          

        </div>

      </div>
    </section><!-- End Gallery Section -->
    </div>

@endsection