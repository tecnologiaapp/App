@extends('layouts.app')
@section('body_color', '#f3f5fa;')
@push('styles')

@endpush
@section('content')
<head>
	<style>
		section {
	padding: 60px 0;
	overflow: hidden;
  }
	</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

		<section style="padding-top: 131px;">
										<!-- <div class="embed-responsive embed-responsive-16by9">
											<video id="homeVideo1" autoplay muted loop style="width: 100%; height:100%;">
												<source src="{{ asset('assets/videos/home-1.mp4')}}" type="video/mp4">
											</video>
										</div> -->
<a href="{{ route('user.projects.nutibara')}}">
<picture>
  <source media="(max-width: 768px)" srcset="assets/images/Home/banner.jpg" width="100%;">
  <source media="(min-width: 769px)" srcset="assets/images/Home/nutibara.jpg">
  <img src="assets/images/Home/nutibara.jpg" alt="Nutibara" width="100%;">
</picture>
</a>
    <!-- <a href="{{ route('user.projects.nutibara')}}">
    <img src="assets/images/Home/nutibara.jpg" alt="" width="100%;">
    </a> -->
	  </section>

		<section id="about" class="about">
      <div class="container aos-init aos-animate" data-aos="fade-up">

          <div class="section-title">
            <h2>Sobre nosotros</h2>
          </div>

          <div class="row content">
            <div class="col-center">
              <p>La Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas – APP-, es un ente con carácter descentralizado adscrito a la Alcaldía de Medellín; Una unidad administrativa especial, del orden municipal, con personería jurídica, autonomía administrativa, financiera, presupuestal y patrimonial, que hace parte del Presupuesto General del Distrito Especial de Ciencia, Tecnología e Innovación de Medellín con lo establecido en el artículo 3 del Decreto 006 de 1998. </p>

              <p>Tenemos como misión gestionar y promover acciones que den sostenibilidad al espacio público, al paisaje y al patrimonio. Además, responsables de promover la generación de recursos a través de la implementación de los instrumentos de financiación definidos en el Plan de Ordenamiento Territorial y fomentar la incorporación de capitales privados a proyectos de inversión para beneficio público.</p>
            </div>		
          </div>
      </div>
	
    </section>

<!-- <a href="https://www.instagram.com/agenciaappmed/" target="_blank"><img src="{{ asset('assets/images/Home/santa1.jpg')}}" style="width:100%; height:auto;"></a> -->

    
<!-- ======= Counts Section ======= -->
<section id="countas" class="countas">
      <div class="container">
      
        <div class="row counters position-relative">

          <div class="col-lg-4 col-6 text-center">   
              <div align="center">        
              <h2 class="counter-number" style="display: inline-block; margin: 15px 0; font-size: 35px; color: #ffffff;">29544</h2><span style="font-size:25px;padding-left: 5px;"> <b> m²</b></span>
                <p><b>de nuevo arte urbano en Medellín.</b></p>
              </div>            
          </div>

          <div class="col-lg-4 col-6 text-center">
              <div align="center">
              <h2 class="counter-number" style="display: inline-block; margin: 15px 0; font-size: 35px; color: #ffffff;">8337</h2><span style="font-size:25px;padding-left: 5px;"> <b> m²</b></span>
                <p><b>de espacio público para el encuentro y el disfrute ciudadano.</b></p>
              </div>
          </div>

          <div class="col-lg-4 col-6 text-center">
              <div align="center">
              <h2 class="counter-number" style="display: inline-block; margin: 15px 0; font-size: 35px; color: #ffffff;">2</h2>
                <p><b>APP de iniciativa pública estructuradas y en proyecto de pliegos.</b></p>
              </div>
          </div>

        </div>

      </div>
</section>
<!-- End Counts Section -->


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
          <div class="section-title">
            <h2>Novedades</h2>
          </div>
          <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

            <div class="col-md-5">
            <a href="{{ route('user.noticias.new50') }}" target="_blank"> 	<img src="{{ asset('assets/img/galeria/constelaciones/1.jpg')}}" class="img-fluid"> </a>
            </div>

            <div class="col-md-7">
                <h3>Constelaciones, el mural artístico más grande de Medellín, se potencia como nuevo destino turístico y cultural</h3>
                <p>
                La Alcaldía de Medellín entregó a la ciudadanía el mural artístico más grande de la ciudad, Constelaciones, una obra de 14.819 metros cuadrados de nuevo arte urbano que comprende la intervención de más de 500 casas y 30 murales artísticos realizados por cuatro colectivos y dos artistas urbanos.
                </p>
            </div>
			    </div>

          
            <br>

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
              <div class="col-md-5 order-1 order-md-2">
              <a href="{{ route('user.noticias.new49') }}" target="_blank"> <img src="{{ asset('assets/img/galeria/lleras/1.jpg')}}" class="img-fluid" alt=""></a>
              </div>
              <div class="col-md-7 order-2 order-md-1">
                  <h3>Ciudadanos y turistas en Medellín ya disfrutan del abrazo del Parque Lleras</h3>
                  <p>
                  El Parque Lleras, referente comercial y turístico de Medellín, está nuevamente al servicio de los habitantes de la ciudad y de los visitantes que a diario llegan a disfrutar de los atractivos de la capital antioqueña. La Administración Distrital realizó en este sitio una intervención integral que permitió la renovación de 12.859 m2 de espacio público para dar prioridad a la movilidad peatonal, a la cultura, a las zonas verdes y a los espacios para compartir.
                  </p>        
              </div>
            </div>
            <br>

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
              <div class="col-md-5">
                <a href="{{ route('user.noticias.new48') }}" target="_blank"> <img src="{{ asset('assets/img/galeria/nutibara/1.jpg')}}" class="img-fluid" alt=""></a>
              </div>
              <div class="col-md-7">
                  <h3>Con la entrega de la iluminación del Hotel Nutibara, el Distrito promueve el turismo y la seguridad en el Centro de Medellín</h3>
                  <p>En una apuesta por la transformación urbana, el mejoramiento del paisaje urbano y de la seguridad, y la cualificación de fachadas arquitectónicas del Centro tradicional de Medellín, el Distrito, a través de la Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas -Agencia APP-, entregó la iluminación del emblemático Hotel Nutibara.</p>
              </div>
            </div>      

      </div>
    </section>
    <!-- End Features Section -->


@endsection

@push('scripts')
<script type="text/javascript">
	document.getElementById('homeVideo1').play();

</script>
<script>
$(document).ready(function() {
  $('.counter-number').each(function() {
    var countTo = parseInt($(this).text().replace(',', ''));
    $(this).prop('Counter', 0).animate({
      Counter: countTo
    }, {
      duration: 3000,
      easing: 'swing',
step: function(now) {
$(this).text(addCommas(Math.ceil(now)));
}
});
});

function addCommas(nStr) {
nStr += '';
var x = nStr.split('.');
var x1 = x[0];
var x2 = x.length > 1 ? '.' + x[1] : '';
var rgx = /(\d+)(\d{3})/;
while (rgx.test(x1)) {
x1 = x1.replace(rgx, '$1' + ',' + '$2');
}
return x1 + x2;
}
});
</script>

	
@endpush
