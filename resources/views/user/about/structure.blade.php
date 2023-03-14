@extends('layouts.app')

@section('content')

<section>
		
		<div class="embed-responsive embed-responsive-16by9">
			<div class="vlt-page-title-hero__overlay"></div>
			<video width="800" id="homeVideoMobile" playsinline autoplay muted loop>
				<source src="{{ asset('assets/videos/promo.mp4')}}" type="video/mp4">
			</video>
		</div>
		<div id="content"></div>


</section>


	<div class="vlt-single-post-wrapper vlt-single-post-wrapper--style-1">
		<div class="container">
			<article class="vlt-single-post">
				<div class="vlt-animation-block mb-5 text-center" data-aos="fade" data-aos-delay="0">
					<h1 style="font-size: 8rem;" class="m-0"><span class="vlt-highlight">Nuestra estructura.</span></h1>
				</div>



                    <div class="row">
						<div class="col-md-8 offset-md-2 text-justify">

							<p>
								Para liderar los procesos que requiere la ciudad y que gestionan los proyectos definidos por el Plan de Desarrollo de la Administración Municipal, la Agencia APP cuenta con tres subdirecciones:
							</p>

							<p>
								- Subdirección de Gestión de Alianzas Público Privadas: es un área que busca planear y promover proyectos de infraestructura a gran escala vinculando capital privado a través de iniciativas públicas e iniciativas privadas. Trabaja en sectores como educación, salud, renovación urbana y vivienda, entre otros.
							</p>

							<p>
								- Subdirección de Gestión Inmobiliaria: esta dependencia se encarga de viabilizar oportunidades inmobiliarias y estructurar proyectos en bienes fiscales que son propiedad del Municipio de Medellín. Esto se logra por medio de modelos novedosos que faciliten la vinculación de capital privado y la generación de recursos que se destinan a la cualificación, sostenibilidad y mantenimiento de los mismos.
							</p>

							<p>
								- Subdirección de Gestión del Paisaje y el Patrimonio: trabaja en dos líneas. La primera de ellas, opera instrumentos de financiación del Plan de Ordenamiento Territorial, como el Aprovechamiento Económico del Espacio Público y las Transferencias de los Derechos de Construcción con Destinación Ambiental o Patrimonial. La segunda línea hace referencia a iniciativas de paisaje urbano donde la subdirección plantea los proyectos de Cualificación del Espacio Público en los que hay una inversión compartida entre la administración y los privados.
							</p>

						</div>
					</div>

		



			</article>

		</div>

	</div>

	
	@endsection