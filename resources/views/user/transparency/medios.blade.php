

@extends('layouts.app')
@section('body_color', '#f3f5fa;')
@section('content')



<style>
*{
	margin:0;
	padding:0;
	box-sizing:border-box;
}

h3{
    font-family: 'arial'!important;
	font-size: 25px;
}

.post-list{
	display:flex;
	min-height:100vh;
	align-items:center;
	justify-content:center;
	padding:170px 15px;
}

.content{
	display:grid;
	grid-template-columns: repeat(3,1fr);
	grid-gap:20px;
	max-width:1000px;
	margin:auto;
}

.post-img-1{    
	background-image: url("{{ asset('assets/img/logo-app.png')}}");
	width:100%;
	height:200px;
	background-size:cover;
	background-position:center;
	transition:-2s;
}


.post{
	box-shadow: 0 1px 6px 1px rgba(0,0,0, .1);
	transition: .2s;
	overflow:hidden;
}
.post:hover{
	transform:translateY(-4px);
	box-shadow: 0 1px 14px 1px rgba(0,0,0, .15);
}

.post-header{
	width:100%;
	height:200px;
	cursor:pointer;
	overflow:hidden;
}
.post:hover .post-img-1,
.post:hover .post-img-2,
.post:hover .post-img-3{
	transform: scale(1.1);
}

.post-body{
	padding:15px;
	text-align:center;
	font-size: 12px;
    font-weight: 300;
}

.post-body span{
	display:inline-block;
	color:#999;
	margin-bottom:10px;
}

.post-body h2{
	margin-bottom:15px;
}

.post-body p{
	line-height:1.5;
	margin-bottom:20px;
}

.post-body .post-link{
	display:block;
	text-decoration:none;
	padding:10px;
	background:#2b6ebb;
	color:#fff;
	width:50%;
	margin:auto;
	border-radius:20px;
	box-shadow:1px 2px 6px 1px rgba(0,0,0, .1);
	transition:.2s;
}

.post-body .post-link:hover{
	background:#3378c7;
	box-shadow:1px 2px 6px 1px rgba(0,0,0, .2);
	transform:translateY(-2px);
}

@media(max-width:840px){
	.content{
		grid-template-columns:repeat(2, 1fr);
	}

}

@media(max-width:600px){
	.content{
		grid-template-columns:repeat(1, 1fr);
	}

}

</style>


<body>
	<section class="post-list">

<div class="content"> 

<article class="post">
	<div class="post-body">
		<span>15/11/2022</span>
		<h3>Hora 13</h3>
		<p classs="descripcion">Rebajas en tarifas de servicios públicos para el barrio Prado en Medellín</p>
	<a href="https://www.h13n.com/rebajas-tarifas-servicios-publicos-prado/153594/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>15/11/2022</span>
		<h3>El Colombiano </h3>
		<p classs="descripcion">Casas patrimoniales del barrio Prado tendrán reducción en la cuenta de servicios públicos</p>
	<a href="https://www.elcolombiano.com/antioquia/casas-patrimoniales-de-barrio-prado-en-medellin-tendran-reduccion-de-servicios-publicos-GL19128349" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>06/11/2022</span>
		<h3>Teleantioquia Noticias</h3>
		<p classs="descripcion">La Alhambra muestra su nueva cara</p>
	<a href="http://www.prensanet.com/boletin_general/?page=&linknoticia=10403236&sector=31164&nombre=Y2FuZGlkYXRvc2FsY21lZGVsbGluMjAxNQ==&codigo=744322341811" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>04/11/2022</span>
		<h3>Caracol Radio </h3>
		<p classs="descripcion">Renovación de La Alhambra </p>
	<a href="http://www.prensanet.com/boletin_general/?page=&&linknoticia=10399758&sector=28769&nombre=Y2FuZGlkYXRvc2FsY21lZGVsbGluMjAxNQ==&codigo=744322341811" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>04/11/2022</span>
		<h3>Hora 13</h3>
		<p classs="descripcion">Entregan renovación de la Alhambra</p>
	<a href="http://www.prensanet.com/boletin_general/?page=&&linknoticia=10399785&sector=28769&nombre=Y2FuZGlkYXRvc2FsY21lZGVsbGluMjAxNQ==&codigo=744322341811" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>04/10/2022</span>
		<h3>Teleantioquia Noticias</h3>
		<p classs="descripcion">Provenza: área de revitalización económica</p>
	<a href="http://www.prensanet.com/boletin_general/?page=&&linknoticia=10319342&sector=36811&nombre=Y2FuZGlkYXRvc2FsY21lZGVsbGluMjAxNQ==&codigo=744322341811" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>04/10/2022</span>
		<h3>Vivir en El Poblado</h3>
		<p classs="descripcion">"Un centro comercial a cielo abierto se habilitará en El Poblado, Medellín"</p>
	<a href="https://vivirenelpoblado.com/provenza-manila-y-el-parque-lleras-en-el-poblado-el-primer-centro-comercial-a-cielo-abierto-de-medellin/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>04/10/2022</span>
		<h3>Minuto 30</h3>
		<p classs="descripcion">Medellín tendrá «centros comerciales a cielo abierto»</p>
	<a href="https://www.minuto30.com/medellin-comerciales-cielo-abierto/1369269/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>04/10/2022</span>
		<h3>Canal UNO</h3>
		<p classs="descripcion">Áreas de revitalización económica en Medellín</p>
	<a href="http://www.prensanet.com/boletin_general/?page=&&linknoticia=10318376&sector=36811&nombre=Y2FuZGlkYXRvc2FsY21lZGVsbGluMjAxNQ==&codigo=744322341811" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>09/09/2022</span>
		<h3>Centrópolis</h3>
		<p classs="descripcion">Así se trabaja para conservar el patrimonio de Medellín</p>
	<a href="https://www.centropolismedellin.com/asi-se-trabaja-para-conservar-el-patrimonio-de-medellin/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>08/09/2022</span>
		<h3>Hora 13</h3>
		<p classs="descripcion">Septiembre es el mes del patrimonio y como parte de la celebración se intervendrán más de 60 esculturas de la ciudad desgastadas o vandalizadas.</p>
	<a href="http://www.prensanet.com/boletin_general/?page=&&linknoticia=10251664&sector=36812&nombre=Y2FuZGlkYXRvc2FsY21lZGVsbGluMjAxNQ==&codigo=744322341811" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>08/09/2022</span> 
		<h3>Minuto 30</h3>
		<p classs="descripcion">En Medellín 60 esculturas serán intervenidas en el marco de la Fiesta del Patrimonio 2022.</p>
	<a href="https://www.minuto30.com/medellin-60-esculturas-intervenidas-patrimonio/1362546/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>08/09/2022</span>
		<h3>Teleantioquia</h3>
		<p classs="descripcion">Septiembre es el mes del patrimonio y como parte de la celebración se intervendrán más de 60 esculturas de la ciudad desgastadas o vandalizadas.</p>
	<a href="http://www.prensanet.com/boletin_general/?page=&&linknoticia=10251219&sector=36812&nombre=Y2FuZGlkYXRvc2FsY21lZGVsbGluMjAxNQ==&codigo=744322341811" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>08/09/2022</span>
		<h3>Telemedellín</h3>
		<p classs="descripcion">En 24 recorridos temáticos, los habitantes de la ciudad podrán conocer las historias y los lugares patrimoniales del centro de Medellín.</p>
	<a href="http://www.prensanet.com/boletin_general/?page=&&linknoticia=10251208&sector=36812&nombre=Y2FuZGlkYXRvc2FsY21lZGVsbGluMjAxNQ==&codigo=744322341811" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>08/09/2022</span>
		<h3>Telemedellín</h3>
		<p classs="descripcion">Más de 60 actividades acompañarán la Fiesta del Patrimonio.</p>
	<a href="http://www.prensanet.com/boletin_general/?page=&&linknoticia=10250797&sector=36812&nombre=Y2FuZGlkYXRvc2FsY21lZGVsbGluMjAxNQ==&codigo=744322341811" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>






<article class="post">
	<div class="post-body">
		<span>01/09/2022</span>
		<h3>Análisis Urbano</h3>
		<p classs="descripcion">Este jueves inicia la Fiesta del Patrimonio 2022 “Historias por Contar”</p>
	<a href="https://analisisurbano.org/este-jueves-inicia-la-fiesta-del-patrimonio-2022-historias-por-contar/233839/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>01/09/2022</span>
		<h3>El Metro</h3>
		<p classs="descripcion">El Aeropuerto Olaya Herrera cumple 90 años y los celebrará con la Fiesta del Patrimonio 2022</p>
	<a href="https://elmetro.com.co/el-aeropuerto-olaya-herrera-cumple-90-anos/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>01/09/2022</span>
		<h3>Infobae</h3>
		<p classs="descripcion">Medellín da inicio a la Fiesta del Patrimonio 2022 ‘Historias por Contar’</p>
	<a href="https://www.infobae.com/america/colombia/2022/09/01/medellin-da-inicio-a-la-fiesta-del-patrimonio-2022-historias-por-contar/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>


<article class="post">
	<div class="post-body">
		<span>02/09/2022</span>
		<h3>vivirenelpoblado</h3>
		<p classs="descripcion">La celebración de los 90 años del Aeropuerto Olaya Herrera</p>
	<a href="https://vivirenelpoblado.com/la-celebracion-de-los-90-anos-del-aeropuerto-olaya-herrera/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>


<article class="post">
	<div class="post-body">
		<span>21/7/2022</span>
		<h3>Hora 13</h3>
		<p classs="descripcion">En marzo comenzaría modernización del Atanasio</p>
	<a href="https://youtu.be/9h3bcnrwR5M" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>17/7/2022</span>
		<h3>Minuto 30</h3>
		<p classs="descripcion">Más de 400 comerciantes participaron en socializaciones del proyecto de modernización de la Unidad Deportiva</p>
	<a href="https://www.minuto30.com/comerciantes-modernizacion-estadio/1348880/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>21/6/2022</span>
		<h3>Centrópolis</h3>
		<p classs="descripcion">Así se restaura la historia en una vía del centro de Medellín </p>
	<a href="https://www.centropolismedellin.com/la-alhambra/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>11/6/2022</span>
		<h3>El metro somos información</h3>
		<p classs="descripcion">Tras modernización del Estadio Atanasio Girardot, este será su nuevo aforo</p>
	<a href="https://elmetro.com.co/modernizacion-estadio-atanasio-girardot-nuevo-aforo/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>8/6/2022</span>
		<h3>EFE</h3>
		<p classs="descripcion">"Medellín advances in having a more modern Atanasio Girardot stadium – Medellín – Colombia
by EFE"</p>
	<a href="https://agencyefe.com/2022/06/08/medellin-advances-in-having-a-more-modern-atanasio-girardot-stadium-medellin-colombia/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>8/6/2022</span>
		<h3>El Tiempo</h3>
		<p classs="descripcion">Más grande y más moderno: así será el nuevo estadio Atanasio Girardot</p>
	<a href="https://www.eltiempo.com/colombia/medellin/medellin-avanza-en-tener-un-estadio-atanasio-girardot-mas-moderno-6785722" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>9/6/2022</span>
		<h3>TVN GLOBAL</h3>
		<p classs="descripcion">Modernización de la Unidad Deportiva Atanasio Girardot</p>
	<a href="https://www.youtube.com/watch?v=KKROAc2b7Io&list=WL&index=37" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>8/6/2022</span>
		<h3>La chiva Alerta</h3>
		<p classs="descripcion">Se cumple un nuevo hito en la modernización del Atanasio Girardot</p>
	<a href="https://www.youtube.com/watch?v=Z3XuK9wXek0&list=WL&index=35" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>8/6/2022</span>
		<h3>Auntiejellysevents</h3>
		<p classs="descripcion">Atanasio Girardot Stadium remodeling of the stage for 2023 | Colombian Soccer | Betplay League</p>
	<a href="https://auntiejellysevents.com/2022/06/09/atanasio-girardot-stadium-remodeling-of-the-stage-for-2023-colombian-soccer-betplay-league/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>8/6/2022</span>
		<h3>Red+</h3>
		<p classs="descripcion">Así se modernizará al viejo estadio Atanasio Girardot en Medellín</p>
	<a href="https://redmas.com.co/w/as%C3%AD-se-modernizar%C3%A1-al-viejo-estadio-atanasio-girardot-en-medell%C3%ADn" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>8/6/2022</span>
		<h3>Futbol red</h3>
		<p classs="descripcion">Estadio Atanasio Girardot puso en marcha su plan de modernización</p>
	<a href="https://www.futbolred.com/futbol-colombiano/liga-betplay/estadio-atanasio-girardot-remodelacion-del-escenario-para-el-2023-159766" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>8/6/2022</span>
		<h3>Telemedellín NTM</h3>
		<p classs="descripcion">Noticias Telemedellín</p>
	<a href="https://youtu.be/edqnjApV-Rs?t=201" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>



<article class="post">
	<div class="post-body">
		<span>8/6/2022</span>
		<h3>El Tiempo</h3>
		<p classs="descripcion">Medellín avanza en tener un estadio Atanasio Girardot más moderno</p>
	<a href="https://www.eltiempo.com/colombia/medellin/medellin-avanza-en-tener-un-estadio-atanasio-girardot-mas-moderno-678572" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>8/6/2022</span>
		<h3>Vivir en el poblado</h3>
		<p classs="descripcion">Va tomando forma el proyecto de modernización del estadio Atanasio Girardot de Medellín</p>
	<a href="https://vivirenelpoblado.com/proyecto-de-modernizacion-del-estadio-atanasio-girardot-de-medellin/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>8/6/2022</span>
		<h3>Teleantioquia</h3>
		<p classs="descripcion">Consejo de Redacción</p>
	<a href="https://youtu.be/sLvbIZNJfa0?t=637" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>7/6/2022</span>
		<h3>Kienyke</h3>
		<p classs="descripcion">De lujo: Así quedará el estadio Atanasio Girardot después de su remodelación</p>
	<a href="https://www.kienyke.com/regiones/de-lujo-asi-quedara-el-estadio-atanasio-girardot-despues-de-su-remodelacion" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>7/6/2022</span>
		<h3>Minuto 30</h3>
		<p classs="descripcion">Unidad Deportiva Atanasio Girardot: inicia su modernización con la publicación del proyecto de pliegos</p>
	<a href="https://www.minuto30.com/atanasio-girardot-modernizacion-2023/1338787/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>7/6/2022</span>
		<h3>El colombiano</h3>
		<p classs="descripcion">Publicado pliego para la modernización de la Unidad Deportiva Atanasio Girardot</p>
	<a href="https://www.elcolombiano.com/deportes/futbol/publicado-pliego-para-la-modernizacion-de-la-unidad-deportiva-atanasio-girardot-EB17702341" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>7/6/2022</span>
		<h3>Telemedellín</h3>
		<p classs="descripcion">Estadio Atanasio Girardot, escenario de grandes eventos en Medellín</p>
	<a href="https://telemedellin.tv/estadio-atanasio-girardot-escenario-medellin/495640/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>



<article class="post">
	<div class="post-body">
		<span>10/12/2021</span>
		<h3>Alcaldía de Medellín</h3>
		<p classs="descripcion">Con 80 fachadas intervenidas se renueva el barrio Prado Centro</p>
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=contenido/11624-Con-80-fachadas-intervenidas-se-renueva-el-barrio-Prado-Centro" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>03/12/2021</span>
		<h3>Vivir en El Poblado</h3>
		<p classs="descripcion">Así es Trenzados, la obra artística que se pintó en el Puente de la 4 Sur</p>
	<a href="https://vivirenelpoblado.com/asi-es-trenzados-la-obra-artistica-que-se-pinto-en-el-puente-de-la-4-sur/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>02/12/2021</span>
		<h3>ADN Medellín</h3>
		<p classs="descripcion">Prado Centro, el nuevo distrito cultural de Medellín </p>
	<a href="https://www.eltiempo.com/colombia/medellin/medellin-prado-centro-area-de-desarrollo-naranja-636576" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>04/11/2021</span>
		<h3>Hora 13</h3>
		<p classs="descripcion">La Naviera ilumina galería a cielo abierto en Medellín</p>
	<a href="https://h13n.com/la-naviera-ilumina-galeria-a-cielo-abierto-en-medellin/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>04/11/2021</span>
		<h3>Blu Radio</h3>
		<p classs="descripcion">Medellín renueva su paisaje urbano con tres intervenciones</p>
	<a href="https://www.bluradio.com/sociedad/cultura/medellin-renueva-su-paisaje-urbano-con-tres-intervenciones" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>03/11/2021</span>
		<h3>Alcaldía de Medellín</h3>
		<p classs="descripcion">Con La Naviera, la Galería Urbana a Cielo Abierto y Palacé se renueva el paisaje urbano de Medellín</p>
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=contenido/11230-Con-La-Naviera-la-Galeria-Urbana-a-Cielo-Abierto-y-Palace-se-renueva-el-paisaje-urbano-de-Medellin" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>02/11/2021</span>
		<h3>Alcaldía de Medellín</h3>
		<p classs="descripcion">En el aniversario 346 de Medellín, el corazón del Centro se llena de luz para celebrar la vida</p>
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=contenido/11226-En-el-aniversario-346-de-Medellin-el-corazon-del-Centro-se-llena-de-luz-para-celebrar-la-vida" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>


<article class="post">
	<div class="post-body">
		<span>02/11/2021</span>
		<h3>Centrópolis</h3>
		<p classs="descripcion">Edificio La Naviera se ilumina para darle otra cara al centro de Medellín</p>
	<a href="https://www.centropolismedellin.com/edificio-la-naviera-se-ilumina-para-darle-otra-cara-al-centro-de-medellin/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>02/11/2021</span>
		<h3>Infobae</h3>
		<p classs="descripcion">En el cumpleaños de Medellín, el emblemático edificio de La Naviera será iluminado</p>
	<a href="https://www.infobae.com/america/colombia/2021/11/02/en-el-cumpleanos-de-medellin-el-emblematico-edificio-de-la-naviera-sera-iluminado/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>08/10/2021</span>
		<h3>Propiedades</h3>
		<p classs="descripcion">Prado: Una ventana a la Medellín de antaño</p>
	<a href="https://propiedades.com.co/abece-de-vivienda/prado-una-ventana-a-la-medellin-de-antano" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>
	 

<article class="post">
	<div class="post-body">
		<span>06/09/2021</span>
		<h3>Las Noticias en Red</h3>
		<p classs="descripcion">El Puente de la calle 4 Sur será intervenido con propuesta de arte urbano en honor a la tradición industrial de Medellín y Antioquia </p>
	<a href="https://www.lasnoticiasenred.com/2021/09/el-puente-de-la-calle-4-sur-sera.html" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>


<article class="post">
	<div class="post-body">
		<span>05/09/2021</span>
		<h3>Teleantioquia Noticias</h3>
		<p classs="descripcion">Con arte urbano intervendrán puente de la 4 Sur </p>
	<a href="https://www.teleantioquia.co/noticias/con-arte-urbano-intervendran-puente-de-la-4-sur/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>


<article class="post">
	<div class="post-body">
		<span>04/09/2021</span>
		<h3>ADN</h3>
		<p classs="descripcion">El puente de la 4 Sur tendrá intervención artística </p>
	<a href="https://www.diarioadn.co/noticias/el-puente-de-la-4-sur-de-medellin-tendra-intervencion-artistica+articulo+52652" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>13/08/2021</span>
		<h3>Noticias Canal 1</h3>
		<p classs="descripcion">La transformación de Provenza y Parque Lleras para la reactivación económica</p>
	<a href="https://noticias.canal1.com.co/nacional/transformacion-de-provenza-y-el-parque-lleras/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>


<article class="post">
	<div class="post-body">
		<span>13/08/2021</span>
		<h3>El Colombiano</h3>
		<p classs="descripcion">Listo plan para reactivar zona de El Poblado Centro</p>
	<a href="https://www.elcolombiano.com/antioquia/plan-para-reactivar-el-poblado-centro-en-medellin-JO15398890" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>


<article class="post">
	<div class="post-body">
		<span>26/07/2021</span>
		<h3>Minuto 30</h3>
		<p classs="descripcion">Gracias a la tecnología, en Medellín se gestiona el uso del espacio público mucho más rápido.</p>
	<a href="https://www.minuto30.com/medellin-espacio-publico-app/1259682/" class="post-link" target="blank">Leer más...</a> 
	
	
	</div>

</article>


<article class="post">
	<div class="post-body">
		<span>01/03/2021</span>
		<h3>El Colombiano</h3>
		<p classs="descripcion">El segundo parque de Laureles y la avenida Jardín fueron renovados</p>
	<a href="https://www.elcolombiano.com/multimedia/imagenes/el-segundo-parque-de-laureles-y-la-avenida-jardin-fueron-renovados-BB14738229" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>


<article class="post">
	<div class="post-body">
		<span>27/02/2021</span>
		<h3>Minuto 30</h3>
		<p classs="descripcion">La avenida Jardín y el segundo parque de Laureles fueron renovados</p>
	<a href="https://www.minuto30.com/buena-noticia-para-medellin-la-avenida-jardin-y-el-segundo-parque-de-laureles-fueron-renovados/1210253/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>


<article class="post">
	<div class="post-body">
		<span>27/02/2021</span>
		<h3>Alcaldía de Medellín</h3>
		<p classs="descripcion">La Avenida Jardín y el segundo parque de Laureles fueron renovados con una inversión de $10.092 millones</p>
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=contenido/9202-La-Avenida-Jardin-y-el-segundo-parque-de-Laureles-fueron-renovados-con-una-inversion-de-10092-millones" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>10/02/2021</span>
		<h3>El Colombiano</h3>
		<p classs="descripcion">La Medellín del siglo pasado revive en las noches de Prado</p>
	<a href="https://www.elcolombiano.com/antioquia/nueva-iluminacion-en-el-barrio-prado-de-medellin-EC14615991" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>


<article class="post">
	<div class="post-body">
		<span>29/11/2020</span>
		<h3>Alcaldía de Medellín</h3>
		<p classs="descripcion">El barrio Prado le da la bienvenida a diciembre con la iluminación de su patrimonio por parte de la Alcaldía de Medellín</p>
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=contenido/3143-El-barrio-Prado-le-da-la-bienvenida-a-diciembre-con-la-iluminaci%C3%B3n-de-su-patrimonio-por-parte-de-la-Alcald%C3%ADa-de-Medell%C3%ADn" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>



<article class="post">
	<div class="post-body">
		<span>15/08/2020</span>
		<h3>El Metro</h3>
		<p classs="descripcion">La Avenida Jardín y el Segundo Parque de Laureles se renuevan</p>
	<a href="https://elmetro.com.co/la-avenida-jardin-y-el-segundo-parque-de-laureles-se-renuevan/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>12/03/2020</span>
		<h3>El Tiempo</h3>
		<p classs="descripcion">Con colores, Prado recupera el esplendor del pasado</p>
	<a href="https://www.eltiempo.com/colombia/medellin/con-colores-prado-recupera-el-esplendor-del-pasado-472066" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>


<article class="post">
	<div class="post-body">
		<span>11/03/2020</span>
		<h3>Telemedellín Noticias</h3>
		<p classs="descripcion">Avanza la renovación de fachadas en el barrio Prado Centro</p>
	<a href="https://www.youtube.com/watch?v=XOI1SBbEstM" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>


<article class="post">
	<div class="post-body">
		<span>27/02/2020</span>
		<h3>El Colombiano</h3>
		<p classs="descripcion">El viejo Prado prepara nueva cara</p>
	<a href="https://www.elcolombiano.com/antioquia/el-viejo-prado-prepara-nueva-cara-NE12527039" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>


<article class="post">
	<div class="post-body">
		<span>07/07/2019</span>
		<h3>Telemedellín Noticias</h3>
		<p classs="descripcion">Avenida Jardín, en Laureles, será intervenida para su renovación</p>
	<a href="https://telemedellin.tv/avenida-jardin-en-laureles-sera-intervenida/339971/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>05/07/2019</span>
		<h3>Minuto 30</h3>
		<p classs="descripcion">Alcaldía de Medellín le dará nueva cara a la tradicional avenida Jardín en Laureles</p>
	<a href="https://www.minuto30.com/alcaldia-de-medellin-le-dara-nueva-cara-a-la-tradicional-avenida-jardin-en-laureles/853172/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>

<article class="post">
	<div class="post-body">
		<span>31/05/2019</span>
		<h3>Hora 13</h3>
		<p classs="descripcion">La Avenida Jardín tendrá otra cara</p>
	<a href="https://h13n.com/la-avenida-jardin-tendra-otra-cara/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>


<article class="post">
	<div class="post-body">
		<span>12/09/2018</span>
		<h3>Gente</h3>
		<p classs="descripcion">La avenida Jardín cambiará de cara</p>
	<a href="https://gente.com.co/cambios-en-la-avenida-jardin-medellin/" class="post-link" target="blank">Leer más...</a>
	
	</div>

</article>







</div>

	</section>

	<script src="main.js"></script>
</body>

@endsection