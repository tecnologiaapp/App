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
</head>

		<section style="padding-top: 131px;">
										<div class="embed-responsive embed-responsive-16by9">
											<video id="homeVideo1" autoplay muted loop style="width: 100%; height:100%;">
												<source src="{{ asset('assets/videos/home-1.mp4')}}" type="video/mp4">
											</video>
										</div>

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
         
            <!-- <div align="center">
            <a href="#" class="btn-learn-more">Leer más</a>
            </div> -->
        </div>

		
      </div>
    </div>
	
</section>

<!-- <a href="https://www.instagram.com/agenciaappmed/" target="_blank"><img src="https://i.ibb.co/j6wz1Px/Banner-Internas2.jpg" style="width:100%; height:auto;"></a> -->



    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
	  <div class="section-title">
          <h2>Novedades</h2>
        </div>
        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

        <div class="col-md-5">
      <a href="{{ route('user.noticias.new44') }}" target="_blank"> 	<img src="https://i.ibb.co/Fg943nf/recorte.png" class="img-fluid"> </a>
			</div>
			<div class="col-md-7">
			<h3>Palacé, Constain y Cárdenas renuevan el paisaje urbano del Centro Histórico de Medellín</h3>
			<p>
      Con una inversión superior a los $1.000 millones, se adelantaron actividades de embellecimiento de fachadas y medianeros de tres Bienes de Interés Cultural. Durante 2022, la Agencia APP gestionó el patrimonio de Medellín con actividades de mejoramiento de fachadas en Prado, La Alhambra y el Centro Histórico.
			</p>
			</div>
			</div>

          
            <br>

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2">
            <a href="{{ route('user.noticias.new43') }}" target="_blank"> <img src="{{ asset('assets/img/news/unidad.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Más de 150 venteros conocieron avances y logros en la modernización de la Unidad Deportiva Atanasio Girardot</h3>
            <p>
            Como una oportunidad para mejorar las ventas de comidas y productos, contar con espacios más óptimos para recibir a visitantes y turistas, y estar cerca de zonas con mayor circulación y de múltiples escenarios deportivos, parqueaderos y ciclorrutas, ante más de 150 comerciantes fue presentado el proyecto de modernización de la Unidad Deportiva Atanasio Girardot.
            </p>
      
          </div>
           </div>
            <br>

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

            <div class="col-md-5">
               <a href="{{ route('user.noticias.new42') }}" target="_blank"> <img src="{{ asset('assets/img/news/Foto-3.jpg')}}" class="img-fluid" alt=""></a>
            </div>
            <div class="col-md-7">
                <h3>771 habitantes de bienes patrimoniales del barrio Prado se beneficiarán con la reducción en las tarifas de servicios públicos</h3>
            <p>771 Bienes de Interés Cultural (BIC) de uso residencial de Prado, barrio patrimonial de Medellín, se beneficiarán gracias a la asimilación por estratificación, que no significa el cambio de estrato pero que sí permitirá que se calculen las tarifas de servicios públicos con base en uno más bajo, según lo reglamenta el Decreto Municipal 0227 de 2022.</p>
            </div>
            </div>
           


			

          




      </div>
    </section><!-- End Features Section -->

	


      </div>
    </section><!-- End About Us Section -->

	
   <!-- ======= Counts Section ======= -->
   <!-- <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box" align="center">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Contratistas</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Proyectos</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Equipos</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Eventos</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Counts Section -->


@endsection

@push('scripts')
<script type="text/javascript">
	document.getElementById('homeVideo1').play();

</script>

	
@endpush
