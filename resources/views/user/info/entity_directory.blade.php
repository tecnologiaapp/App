@extends('layouts.app')
@section('content')
@section('body_color', '#f3f5fa;')


<head>
	
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
	padding-top: 5px;

}

.content{
	display:grid;
	grid-template-columns: repeat(4,1fr);
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
</head>

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">
		
							<h1 style="color:white;">
							Directorio de entidades
							</h1>
		
			</div>

		</div>
		
	</section>
	<!--Content-->
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container">
		

			<section class="mb-5 pb-5">

				<h4 class="text-center mb-5">Listado del gabinete Municipal y entidades descentralizadas</h4>
				<div  class="field-items"><div class="field-item even" property="content:encoded"><h3 style="text-align:center;"><strong>Listado del Gabinete Municipal y Entidades Descentralizadas</strong></h3>
				<h2 style="text-align:center;"><strong>Gabinete Municipal</strong></h2>
				<body>
	<section class="post-list">

<div class="content">
	 

<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://22f443776fb0582b13fe613a2ba2b30b" target="_blank" title="Ir a Alcalde de Medellín">Alcalde de Medellín</a>
		<h6></h6>
	<h6>Daniel Quintero Calle	</h6>
	<h6>Calle 44 N 52 – 165 Centro Administrativo La Alpujarra </h6>
	<h6>Palacio Municipal / Piso 12</h6>
	<h6>  (604) 385 52 08</h6>	
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://1ed3a2094f054633c08d473ea7807be3" target="_blank" title="Ir a Primera Dama">Gestora Social</a>
		<h6></h6>
	<h6>Diana Marcela Osorio Vanegas</h6>
<h6>Calle 44 N 52 – 165</h6>
<h6>Palacio Municipal / Piso 12</h6>
	<h6>(604) 385 6434</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://4121c26ad1714afe2e330a526eda1007" target="_blank" title="Ir a Director Departamento Administrativo de Planeación">Director D.A de Planeación</a>
		<h6></h6>
	<h6>Jorge Mejía Martínez</h6>
<h6>Calle 44 N 52 – 165</h6>
<h6>CAM – piso 12</h6>
	<h6>(604) 385 5555 ext.&nbsp; 6564</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://698156a0192ca7655ab2cce3bc9291c7" target="_blank" title="Ir a Departamento Administrativo de Gestión del Riesgo de Emergencias y Desastres">Directora DAGRD</a>
		<h6></h6>
	<h6>Alethia Arango Gil</h6>
<h6>Edificio Plaza de la Libertad</h6>
<h6>Piso 16 Oficina DAGRD</h6>
	<h6>(604) 385 50 67</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://0255ce2d38916a7dd4ce134115c6d5e9" target="_blank" title="Ir a Secretaría de Gestión Humana y Servicio a la Ciudadanía">Secretaria de Gestión Humana y Servicio a la Ciudadanía</a>
		<h6></h6>
	<h6>Ana Camila Salazar Palacio</h6>
<h6>Calle 44 N 52 – 165</h6>
<h6>Palacio Municipal</h6>

	<h6>(604) 44 44 144</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://ff57daa7aa3c6dc03b31d14034a6e6ab" target="_blank" title="Ir a Secretaría de Comunicaciones">Secretario de Comunicaciones</a>
		<h6></h6>
	<h6>Juan José Aux Trujillo</h6>
<h6>CAM - Piso 10</h6>
<h6>Oficina 1008</h6>

	<h6>(604) 385 5555 ext. 5199</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://bedb18958bf89bc676d8c849aa6ba4f0" target="_blank" title="Ir a Secretaría de Cultura Ciudadana">Secretaria de Cultura Ciudadana</a>
		<h6></h6>
	<h6>Álvaro Ósmar Narváez Díaz</h6>
<h6>Ed. Plaza de la Libertad Piso 13. Torre B</h6>

	<h6>(604) 385 5406</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://9495ec1433648996d8375b4a98fb4835" target="_blank" title="Ir a Secretaría de Desarrollo Económico">Secretario de Desarrollo Económico</a>
		<h6></h6>
	<h6>Alejandro Arias García</h6>
<h6>Carrera 53 #42-161. Plaza de la Libertad. Piso 11. Torre A</h6>


	<h6>(604) 385 5824</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://a5388add4db9990bda2999fbeb80c4bd" target="_blank" title="Ir a Secretaría de Educación">Secretaria de Educación</a>
		<h6></h6>
	<h6>Martha Alexandra Agudelo Ruíz</h6>
<h6>Edificio Carré - Carrera 52 44 B – 17 – Of. 301</h6>


	<h6>(604) 514 8306</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://8d99f87aa1e80fd18591b8f02c66db27" target="_blank" title="Ir a Secretaría de Evaluación y Control">Secretario de Evaluación y Control</a>
		<h6></h6>
	<h6>Juan David Calle Tobón</h6>
<h6>Dirección: Calle 44 N° 52 – 165</h6>
<h6>Palacio Municipal / Piso 11 - oficina 1129</h6>


	<h6>(604) 3855555 ext. 6437 – 5956</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://9c3b16b4f5a902c3d1eb0d83e7f2e867#" target="_blank" title="Ir a Secretaria General">Secretario General</a>
		<h6></h6>
	<h6>Raul Morales Vallejo</h6>
<h6>Calle 44 N 52 – 165</h6>
	<h6>CAM – piso 11 - Of. 1129</h6>
	<h6>(604) 385 5555 ext. 6437</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://cafc02e4b84eec2f0bf34d34150959b9" target="_blank" title="Ir a Secretaría de Gestión y Control Territorial">Secretario de Gestión y Control Territorial</a>
		<h6></h6>
	<h6>Carlos Mario Montoya Serna</h6>
<h6>Edificio Plaza de la Libertad</h6>
	<h6>piso 8- torre B</h6>
	<h6>(604) 385 5555 ext 4333</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://c2db387232876566c8c67ca05c30c36e" target="_blank" title="Ir a Secretaria de Gobierno y Gestión del Gabinete">Secretario de Gobierno y Gestión del Gabinete</a>
		<h6></h6>
	<h6>Esteban Restrepo Taborda</h6>
<h6>Calle 44 N° 52 – 165, Palacio Municipal, piso 12</h6>
	
	<h6>(604) 44 44 144</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://9b75d3e539e6c6b06a9d4b569fabd333" target="_blank" title="Ir a Secretaría de Hacienda">Secretario de Hacienda</a>
		<h6></h6>
	<h6>Óscar Hurtado Pérez</h6>
<h6>Calle 44 N 52 – 165</h6>

	<h6>(604) 44 44 144</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://392b27b480ae54e0986f48bb1d207598" target="_blank" title="Ir a Secretaría de Inclusión Social, Familia y Derechos Humanos">Secretaria de Inclusión Social, Familia y DDHH</a>
		<h6></h6>
	<h6>Mónica Alejandra Gómez Laverde</h6>
<h6>Carrera 53 #42-161. Plaza de la Libertad. Piso 1. Torre A</h6>
	<h6>(604) 38555545 ext. 5405</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://6a659a4667ee7ef69d6c51c746444778" target="_blank" title="Ir a Secretaria de Infraestructra Física">Secretaria de Infraestructura Física</a>
		<h6></h6>
	<h6>Natalia Urrego Arias</h6>
<h6>Calle 44 N° 52 – 165</h6>
	<h6>Palacio Municipal. Piso 9</h6>
	<h6>(604) 385 5555 ext. 5908</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://781f952fe3a44678ad5bec43d08dfeaa" target="_blank" title="Ir a Secretaria de Juventud">Secretario de Juventud</a>
		<h6></h6>
	<h6>Alejandro Matta Herrera</h6>
<h6>Carrera 53 #42-161</h6>
	<h6> Plaza de la Libertad. Piso 10. Torre B</h6>
	<h6>(604) 385 5555 ext. 5368</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://9b937f31c0d37b8674e905af2c81327b" target="_blank" title="Ir a Secretaria del Medio Ambiente">Secretaria del Medio Ambiente</a>
		<h6></h6>
	<h6>Diana María Montoya Velilla</h6>
<h6>Carrera 53 #42-161. Plaza de la Libertad. Piso 7. Torre A.</h6>
	
	<h6>(604) 385 6582</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=contenido/9645-Secretaria-de-Movilidad" target="_blank" title="Ir a Secretaria de Movilidad">Secretario de Movilidad</a>
		<h6></h6>
	<h6>Carlos Mario Mejía Múnera</h6>
<h6>Carrera 64 C - Calle 72 - 58</h6>
<h6>Barrio Caribe</h6>
	
	<h6>(604) 445 7701</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://c3c4447639774aefda543ffcaeec9f8e" target="_blank" title="ir a Secretaría de las Mujeres">Secretaria de las Mujeres</a>
		<h6></h6>
	<h6>Juliana Martínez Londoño</h6>
<h6> Carrera 53 #42-161</h6>
	<h6>Plaza de la Libertad. Piso 12. Torre B</h6>
	<h6>(604) 385 5555 ext. 5481</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://7f846d847a22fd9d9256dffa3ff30ba4" target="_blank" title="ir a Secretaría de Participación Ciudadana">Secretario de Participación Ciudadana</a>
		<h6></h6>
	<h6>Juan Pablo Ramírez Álvarez</h6>
<h6> Cra 53A N° 42-161</h6>
<h6>Piso 15 torre B - Plaza de la Libertad</h6>
	
	<h6>(604)  385 55 55 ext. 5294</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://ac63cef6233f685da6aca31c56786b67" target="_blank" title="ir a Secretaría Privada">Secretaria Privada</a>
		<h6></h6>
	<h6>Maria Camila Villamizar Assaf</h6>
<h6> Calle 44 N° 52 – 165</h6>
<h6>Palacio Municipal / Piso 12</h6>
	
	<h6>(604)  385 5555 ext. 5145</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://d3fadbb4057b5347b1fa1496936df468" target="_blank" title="ir a Secretaría de Salud">Secretaria de Salud</a>
		<h6></h6>
	<h6>Jennifer Andree Uribe Montoya</h6>
<h6>Carrera 53 #42-161</h6>
	<h6>Plaza de la Libertad. Piso 20. Torre A</h6>
	<h6>(604) 3855555 Ext. 6414</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://7d0b6040724c6a7b3d95c4cc53e13fe3" target="_blank" title="ir a Secretaría de Seguridad y Convivencia">Secretario de Seguridad y Convivencia</a>
		<h6></h6>
	<h6>José Gerardo Acevedo Ossa</h6>
<h6>Calle 44ª # 55-44</h6>
<h6>Edificio Business Plaza-Piso 15</h6>

	<h6>(604) 3855555 ext. 8460</h6>
	</div>

</article>


<article class="post">
	<div class="post-body">
	<a href="https://www.medellin.gov.co/irj/portal/medellin?NavigationTarget=navurl://1eede8ad3f9c761ac1b156ed5718582f" target="_blank" title="ir a Secretaría de Servicios y Suministros">Secretaria de Suministros&nbsp;y Servicios</a>
		<h6></h6>
	<h6>Karen Bibiana Delgado Manjarres</h6>
<h6>Calle 44 N° 52 – 165</h6>
<h6>Centro Administrativo La Alpujarra – Piso 7</h6>

	<h6>(604) 3855555 ext. 5164</h6>
	</div>

</article>



</div>

	</section>

	<script src="main.js"></script>
</body>

				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							
<h3 style="text-align:center;">Gerencias</h3>
<h3 style="text-align:center;"><strong>Listado Subsecretarios de despacho</strong></h3>
<p><strong>Departamento Administrativo de la Gestión del Riesgo de Desastres - DAGRD</strong><br>
	• Subdirectora de Manejo de Desastres || Astrid Helena Barrera Roldán ||&nbsp;<a href="mailto:astrid.barrera@medellin.gov.co" target="_blank" title="astrid.barrera@medellin.gov.co">astrid.barrera@medellin.gov.co</a><br>
	• Subdirector de Conocimiento y Reducción del Riesgo de Desastres || Rafael Rincón Patiño ||&nbsp;<a href="mailto:rafael.rincon@medellin.gov.co" target="_blank" title="rafael.rincon@medellin.gov.co">rafael.rincon@medellin.gov.co</a>&nbsp;&nbsp;</p>
<p><strong>Departamento Administrativo de Planeación</strong><br>
	• Subdirector de Información y Evaluación Estratégica || Juan Camilo Oliveros Vélez ||&nbsp;<a href="mailto:juan.oliveros@medellin.gov.co">juan.oliveros@medellin.gov.co</a><br>
	• Subdirector de Planeación Social y Económica || Diego Fernando Franco Moreno ||&nbsp;<a href="mailto:diego.franco@medellin.gov.co">diego.franco@medellin.gov.co</a><br>
	• Subdirector de Planeación Territorial y Estratégica de Ciudad || Sebastián Muñoz Zuluaga ||&nbsp;<a href="mailto:sebastian.munoz@medellin.gov.co">sebastian.munoz@medellin.gov.co</a></p>
<p><strong>Secretaría de Comunicaciones</strong><br>
	• Subsecretario de Comunicación Estratégica || Johana Jaramillo Palacio ||&nbsp;</p>
<p><strong>Secretaría de Educación</strong><br>
	• Subsecretaria de Planeación Educativa || Alejandra Márquez Mejía ||&nbsp;<a href="mailto:alejandra.marquez@medellin.gov.co" target="_blank" title="alejandra.marquez@medellin.gov.co">alejandra.marquez@medellin.gov.co</a><br>
	• Subsecretario de Prestación del Servicio Educativo || José Wilmar Sánchez Duque ||&nbsp;<a href="mailto:josew.sanchez@medellin.gov.co" target="_blank" title="josew.sanchez@medellin.gov.co">josew.sanchez@medellin.gov.co</a><br>
	• Subsecretario Administrativo y Financiero || Juan David Agudelo Restrepo ||&nbsp;<a href="mailto:juand.agudelor@medellin.gov.co" target="_blank" title="juand.agudelor@medellin.gov.co">juand.agudelor@medellin.gov.co</a></p>
<p><strong>Secretaría de General</strong><br>
	• Subsecretaría de Defensa y Protección de lo Público || Clara Elízabeth Ramirez Castañeda ||&nbsp;<a href="mailto:clarae.ramirez@medellin.gov.co" target="_blank" title="clarae.ramirez@medellin.gov.co">clarae.ramirez@medellin.gov.co</a><br>
	• Subsecretaría de Prevención del Daño Antijurídico || María Teresa Muñoz Jaramillo ||&nbsp;<a href="mailto:mariam.jaramillo@medellin.gov.co" target="_blank" title="mariam.jaramillo@medellin.gov.co">mariam.jaramillo@medellin.gov.co</a></p>
<p><strong>Secretaría de Gestión Humana y Servicio a la Ciudadanía</strong><br>
	• Subsecretaria de Desarrollo Institucional || Diana Patricia Anaya Hoyos ||&nbsp;<a href="mailto:diana.anaya@medellin.gov.co" target="_blank" title="diana.anaya@medellin.gov.co">diana.anaya@medellin.gov.co</a><br>
	•&nbsp;Subsecretaria de Gestión Humana || Melfy del Socorro Gonzalez Herrera ||&nbsp;<a href="mailto:melfy.gonzalez@medellin.gov.co" target="_blank" title="melfy.gonzalez@medellin.gov.co">melfy.gonzalez@medellin.gov.co</a><br>
	• Subsecretario de Servicio a la Ciudadanía || Jorge David Tamayo Gonzalez ||&nbsp;<a href="mailto:jorged.tamayo@medellin.gov.co" target="_blank" title="jorged.tamayo@medellin.gov.co">jorged.tamayo@medellin.gov.co</a><br>
	• Subsecretario de Tecnología y Gestión de la Información || Juan Sebastián Gonzalez Florez ||&nbsp;<a href="mailto:sebastian.gonzalez@medellin.gov.co" target="_blank" title="sebastian.gonzalez@medellin.gov.co">sebastian.gonzalez@medellin.gov.co</a></p>
<p><strong>Secretaría de Gestión y Control Territorial</strong><br>
	• Subsecretario de Catastro || Iván Mauricio Salazar ||&nbsp;<a href="mailto:ivan.salazar@medellin.gov.co" target="_blank" title="ivan.salazar@medellin.gov.co">ivan.salazar@medellin.gov.co</a><br>
	• Subsecretario de Control Urbanístico || Mauricio Esteban Vergara Montoya ||&nbsp;<a href="mailto:mauricio.vergara@medellin.gov.co" target="_blank" title="mauricio.vergara@medellin.gov.co">mauricio.vergara@medellin.goc.co</a><br>
	• Subsecretario de Servicios Públicos || Roger Alejandro Jiménez ||&nbsp;<a href="mailto:mariam.jaramillo@medellin.gov.co" target="_blank" title="mariam.jaramillo@medellin.gov.co">roger.jimenez@medellin.gov.co</a></p>
<p><strong>Secretaría de Hacienda</strong><br>
	• Subsecretario de Ingresos || Henry Alejandro Morales Gómez ||&nbsp;<a href="mailto:henry.morales@medellin.gov.co" target="_blank" title="henry.morales@medellin.gov.co">henry.morales@medellin.gov.co</a><br>
	• Subsecretario de Presupuesto y Gestión Financiera || Giovanny Ávila Gómez ||&nbsp;<a href="mailto:giovanny.avila@medellin.gov.co" target="_blank" title="giovanny.avila@medellin.gov.co">giovanny.avila@medellin.gov.co</a><br>
	• Subsecretaria de Tesorería || Marcela González Aguilar&nbsp;||&nbsp;<a href="mailto:marcela.gonzalez@medell%C3%ADn.gov.co" target="_blank" title="marcela.gonzalez@medellín.gov.co">marcela.gonzalez@medellín.gov.co</a></p>
<p><strong>Secretaría de Medio Ambiente</strong><br>
	• Subsecretario de Gestión Ambiental (E) || Tomás Felipe Tintinago Vásquez ||&nbsp;<a href="mailto:tomas.tintinago@medellin.gov.co" target="_blank" title="tomas.tintinago@medellin.gov.co">tomas.tintinago@medellin.gov.co</a><br>
	• Subsecretario de Recursos Naturales || Carlos Esteban Lara Vásquez ||&nbsp;<a href="mailto:carlos.lara@medellin.gov.co" target="_blank" title="carlos.lara@medellin.gov.co">carlos.lara@medellin.gov.co</a></p>
<p>&nbsp;</p>
<p><strong>&nbsp;Secretaría de las Mujeres</strong><br>
	• Subsecretaria de Derechos || Ana Milena Montoya Ruiz ||&nbsp;<a href="mailto:ana.montoyar@medellin.gov.co" target="_blank" title="ana.montoyar@medellin.gov.co">ana.montoyar@medellin.gov.co</a><br>
	• Subsecretaria de Transversalización || Claudia Elena Restrepo Rendón ||&nbsp;<a href="mailto:claudiae.restrepo@medellin.gov.co" target="_blank" title="claudiae.restrepo@medellin.gov.co">claudiae.restrepo@medellin.gov.co</a></p>
<p><strong>Secretaría de Participación Ciudadana</strong><br>
	• Subsecretario de Formación || Santiago Preciado Gallego ||&nbsp;<a href="mailto:santiago.preciado@medellin.gov.co" target="_blank" title="santiago.preciado@medellin.gov.co">santiago.preciado@medellin.gov.co</a><br>
	• Subsecretario de Organización Social || Alexis Mejía Echeverry ||&nbsp;<a href="mailto:alexis.mejia@medellin.gov.co" target="_blank" title="alexis.mejia@medellin.gov.co">alexis.mejia@medellin.gov.co</a><br>
	• Subsecretario de Planeación Local y Presupuesto Participativo || Andrés Santiago Arroyave ||&nbsp;<a href="mailto:andres.arroyave@medellin.gov.co" target="_blank" title="andres.arroyave@medellin.gov.co">andres.arroyave@medellin.gov.co</a></p>
<p>&nbsp;<strong>Secretaría de Salud</strong><br>
	• Subsecretaria Administrativa y Financiera || Narda Constanza Moreno Benitez ||&nbsp;&nbsp;<a href="mailto:narda.moreno@medellin.gov.co" target="_blank" title="narda.moreno@medellin.gov.co">narda.moreno@medellin.gov.co</a><br>
	• Subsecretaria de Acceso a Servicios de Salud || Ruth Helena Mena Pino ||&nbsp;<a href="mailto:ruth.mena@medellin.gov.co" target="_blank" title="ruth.mena@medellin.gov.co">ruth.mena@medellin.gov.co</a><br>
	• Subsecretaria de Salud Pública || Natalia López Delgado ||&nbsp;<a href="mailto:natalia.lopezd@medellin.gov.co" target="_blank" title="natalia.lopezd@medellin.gov.co">natalia.lopezd@medellin.gov.co</a></p>
<p><strong>Secretaría de Seguridad y Convivencia</strong><br>
	• Subsecretario de Espacio Público || Yomar Andrés Benítez Álvarez ||&nbsp;<a href="mailto:yomar.benitez@medellin.gov.co" target="_blank" title="yomar.benitez@medellin.gov.co">yomar.benitez@medellin.gov.co</a><br>
	• Subsecretario de Gobierno Local y Convivencia || Juan Camilo López Bermúdez||&nbsp;<a href="mailto:juan.lopezb@medellin.gov.co" target="_blank" title="juan.lopezb@medellin.gov.co">juan.lopezb@medellin.gov.co</a><br>
	• Subsecretario Operativo || Leonardo Buitrago León ||&nbsp;<a href="mailto:leonardo.buitrago@medellin.gov.co" target="_blank" title="leonardo.buitrago@medellin.gov.co">leonardo.buitrago@medellin.gov.co</a><br>
	• Subsecretario de Planeación || Santiago Palacio González ||&nbsp;<a href="mailto:santiago.palacio@medellin.gov.co" target="_blank" title="santiago.palacio@medellin.gov.co">santiago.palacio@medellin.gov.co</a><br>
	• Director Técnico del SISC &nbsp;|| Sergio Andrés Urán Ocampo ||&nbsp;<a href="mailto:sergio.uran@medellin.gov.co" target="_blank" title="sergio.uran@medellin.gov.co">sergio.uran@medellin.gov.co</a></p>
<p><strong>Secretaría de Suministros y Servicios</strong><br>
	• Subsecretario de Bienes || Andrés Fernando Benavides Corrales ||&nbsp;<a href="mailto:andres.benavides@medellin.gov.co" target="_blank" title="andres.benavides@medellin.gov.co">andres.benavides@medellin.gov.co</a><br>
	• Subsecretaria de Ejecución de la Contratación || Catalina Rozo Villegas ||&nbsp;<a href="mailto:catalina.rozo@medellin.gov.co" target="_blank" title="catalina.rozo@medellin.gov.co">catalina.rozo@medellin.gov.co</a><br>
	• Subsecretario de Planeación y Evaluación || Hernán Alonso Uribe Marulanda ||&nbsp;<a href="mailto:hernan.uribe@medellin.gov.co" target="_blank" title="hernan.uribe@medellin.gov.co">hernan.uribe@medellin.gov.co</a><br>
	• Subsecretaría de Selección y Gestión de Proveedores || Leidy Jiménez Echavarría ||&nbsp;<a href="mailto:leidy.jimenez@medellin.gov.co" target="_blank" title="leidy.jimenez@medellin.gov.co">leidy.jimenez@medellin.gov.co</a></p>
<h3 style="text-align:center;">Entidades Descentralizadas y cercanas</h3>
</div>
</div>
</div>


<section class="post-list" style="padding-bottom: 5px;">

<div class="content">


<article class="post">
	<div class="post-body">
	<a href="http://www.acimedellin.org/" target="_blank" title="Ir Agencia de Coop. e Inversión de Medellín y el Área Metropolitana"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/SubportaldelCiudadano_2/AtencinCiudadana1/InformacinSecretaras/Shared%20Content/Imagenes/Descentralizados/aci.jpg" width="172"></a><br>
			<strong>Agencia de Cooperación e Inversión de Medellín y el Área Metropolitana</strong><br>
			Directora Ejecutiva <br>
			Eleonora<br>
			Betancur González<br>
			Calle 41 #55-80 Plaza Mayor,<br>
			oficina 303. Tel:(604) 3203430.
</article>


<article class="post">
	<div class="post-body">
	<a href="http://www.aeropuertoolayaherrera.gov.co/" target="_blank" title="ir a Aeropuerto Olaya Herrera"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/SubportaldelCiudadano_2/AtencinCiudadana1/InformacinSecretaras/Shared%20Content/Imagenes/Descentralizados/aropuertoOE.jpg" width="172"></a><br>
			<strong>Aeropuerto Olaya Herrera</strong><br>
			Gerente General <br>
			Jesús Alberto<br>
			Sánchez<br>
			Restrepo<br>
			Carrera 65A # 13 – 157.<br>
			Tercer piso.<br>
			(604) 403 6780<br>
			<a href="http://www.aeropuertoolayaherrera.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.metropol.gov.co/" target="_blank" title="Ir a DeÁrea Metropolitana del Valle de Aburrá"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/SubportaldelCiudadano_2/AtencinCiudadana1/InformacinSecretaras/Shared%20Content/Imagenes/Descentralizados/areametropolitana.jpg" width="172"></a><br>
			<strong>Área Metropolitana del Valle de Aburrá</strong><br>
			Director <br>
			Juan David<br>
			Palacio Cardona<br>
			Calle 41 # 53 - 07<br>
			(604) 385 6000 ext. 703<br>
			01800042224<br>
			<a href="http://www.metropol.gov.co/" target="_blank">web</a>
</article>


<article class="post">
	<div class="post-body">
	<a href="http://www.bibliotecapiloto.gov.co/" target="_blank" title="Ir a Biblioteca Pública Piloto"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/bibliotecapublicapiloto.jpg" width="172"></a><br>
			Directora<br>
			<strong>Biblioteca<br>
			Pública Piloto</strong><br>
			Shirley Milena<br>
			Zuluaga<br>
			Cosme<br>
			Carrera 64 Nº 50 -32<br>
			Tel: (604) 4600590<br>
			<a href="http://www.bibliotecapiloto.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.colmayor.edu.co/" target="_blank" title="Ir a Institución Universitaria Colegio Mayor de Antioquia"><img alt="" height="100" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/colmayordeantioquia.jpg" width="175"></a><br>
			<strong>Colegio Mayor de Antioquia</strong><br>
			Rector <br>
			Bernardo<br>
			Arteaga<br>
			Velásquez<br>
			Carrera&nbsp;78&nbsp;No.65 - 46<br>
			Tel: (604) 444&nbsp;5611<br>
			Fax: (604) 421&nbsp;9947&nbsp;<br>
			<a href="http://www.colmayor.edu.co/" target="_blank" title="Ir a Institución Universitaria Colegio Mayor de Antioquia">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.concejodemedellin.gov.co/" target="_blank" title="Ir a Concejo de Medellín"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/cocejodemedellin.jpg" width="172"></a><br>
			Presidente<br>
			<strong>Concejo de<br>
			Medellín</strong><br>
			Luis Bernardo<br>
			Vélez Montoya<br>
			Calle 44 # 52-165<br>
			Ed. Concejo de Medellín<br>
			Tel: (604) 384 6868 ext 4102<br>
			Fax: (604) 2 62 7749<br>
			<a href="http://www.concejodemedellin.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.cgm.gov.co/" target="_blank" title="Ir a Contralora Municipal"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/contraloriagdem.jpg" width="172"></a><br>
			<strong>Contralora Municipal</strong><br>
			Patricia<br>
			Bonilla Sandoval<br>
			Calle 53 Nro. 52-16<br>
			Edificio Miguel de Aguinaga<br>
			Tel: (604) 514 7701<br>
			Fax: (604) 512 0025<br>
			<a href="http://www.cgm.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.medellin.gov.co/" target="_blank" title="Ir a Corregimientos"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/medellin/Temas/AtencionCiudadana/InformacionGeneral/Shared%20Content/Imagenes/2019/LogoAlcald%C3%ADa.png" width="172"></a><br>
			Gerente de<br>
			<strong>Corregimientos</strong><br>
			Cristian<br>
			Camilo<br>
			Sánchez<br>
			Calle 44 N 52 – 165<br>
			Tel: (604) 385 5528<br>
			Fax: (604) 385 5128<br>
			<a href="http://www.medellin.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.edu.gov.co/" target="_blank" title="Ir a Empresa de Desarrollo Urbano - EDU"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/edu.jpg" width="172"></a><br>
			<strong>Empresa de Desarrollo Urbano - EDU</strong><br>
			Gerente <br>
			Wilder Wiler&nbsp;Echavarría Arango<br>
			Carrera 49 Nº 44 - 94, local 194, Parque San Antonio<br>
			Tel (604) 576 7630<br>
			018000410926<br>
			<a href="http://www.edu.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.emvarias.com.co/" target="_blank" title="Ir a Empresas Varias de Medellín"><img alt="" height="102" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/SubportaldelCiudadano_2/AtencinCiudadana1/InformacinSecretaras/Shared%20Content/Imagenes/Descentralizados/emvarias.jpg" width="175"></a><br>
			<strong>Empresas Varias de Medellín</strong><br>
			Gerente <br>
			Jorge Lenín Urrego Angel<br>
			Carrera 58 # 42 -125<br>
			Edificio EPM - Piso 7<br>
			Tel: (604) 470 5000<br>
			018000410400<br>
			<a href="http://www.emvarias.com.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.epm.com.co/" target="_blank" title="Ir a Empresas Públicas de Medellín"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/epm.jpg" width="172"></a><br>
			<strong>Empresas Públicas de Medellín</strong><br>
			Gerente <br>
			Álvaro Guillermo<br>
			Rendón López<br>
			Carrera 58 No. 42 - 125<br>
			(604) 380 8080<br>
			(604) 380 6730<br>
			<a href="http://www.epm.com.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.esu.com.co/" target="_blank" title="Ir a ESU - Empresa para la Seguridad Urbana"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/esu.jpg" width="172"></a><br>
			<strong>ESU - Empresa para la Seguridad Urbana</strong><br>
			Gerente <br>
			Diego Alexánder González Flórez<br>
			Calle 16 # 41-210 / Edificio<br>
			La Compañía oficina 106<br>
			(604) 444 3448<br>
			(604) 444 3438<br>
			<a href="http://www.esu.com.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://fonvalmed.gov.co/" target="_blank" title="Ir a Fondo de Valorización de Medellín"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/fonval.jpg" width="172"></a><br>
			<strong>Fondo de Valorización de Medellín</strong><br>
			Director Ejecutivo <br>
			Vilmer René<br>
			Hoyos Hoyos<br>
			Cra 65 #13-157<br>
			Aeropuerto Olaya Herrera<br>
			Tele fax: (604) 557 0246<br>
			<a href="http://fonvalmed.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.hgm.gov.co/" target="_blank" title="Ir a Hospital General de Medellín"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/hgm.jpg" width="172"></a><br>
		<strong>Hospital General de Medellín</strong><br>
		Gerente <br>
			Jesús Eugenio<br>
			Bustamante Cano<br>
			Carrera 48 No.32 - 102<br>
			Tel: (604) 384 7300<br>
			Fax: (604) 232 0227<br>
			<a href="http://www.hgm.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.hospinfantilcm.org/" target="_blank" title="Ir a Hospital Infantil Concejo de Medellín"><img alt="" height="106" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/SubportaldelCiudadano_2/AtencinCiudadana1/InformacinSecretaras/Shared%20Content/Imagenes/Descentralizados/hospitalinfant.png" width="181"></a><br>
			<strong>Hospital Infantil Concejo de Medellín</strong><br>
			Director Ejecutivo <br>
			Fernando Hincapié Agudelo<br>
			Calle 72 a&nbsp;No.48a - 70<br>
			Campo Valdés<br>
			Tel: (604) 444 6425&nbsp;<br>
			<a href="http://www.hospinfantilcm.org/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.inder.gov.co/" target="_blank" title="Ir a Inder"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/SubportaldelCiudadano_2/AtencinCiudadana1/InformacinSecretaras/Shared%20Content/Imagenes/Descentralizados/indermed16.jpg" width="172"></a><br>
			<strong>Inder</strong><br>
			Gerente <br>
			Diana<br>
			Paola Toro<br>
			Calle 47D No. 75 - 276<br>
			Tel: (604) 369 9000<br>
			Fax: (604) 369 9000<br>
			<a href="http://www.inder.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.itm.edu.co/" target="_blank" title="Ir a ITM"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/itm.jpg" width="172"></a><br>
			&nbsp;<strong>ITM</strong><br>
			Rector <br>
			Juan Guillermo<br>
			Pérez Rojas<br>
			Calle 73 No 76A -354<br>
			Tel: (604) 440 5100<br>
			Fax: (604) 440 5103<br>
			<a href="http://www.itm.edu.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.isvimed.gov.co/" target="_blank" title="Ir a Isvimed "><img alt="Isvimed" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/medellin/Temas/AtencionCiudadana/InformacionGeneral/Shared%20Content/Imagenes/2017/Isvimed.png" title="Isvimed" width="172"></a><br>
			<strong>Isvimed</strong><br>
			Director General <br>
			Instituto Social de Vivienda y<br>
			Hábitat de Medellín<br>
			Jorge Torres Ramírez<br>
			Calle 47D No. 75 - 240<br>
			Tel: (604) 430 4310<br>
			<a href="http://www.isvimed.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.botanicomedellin.org/" target="_blank" title="Ir a Jardín Botánico de Medellín"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/jardinbotanico.jpg" width="172"></a><br>
			<strong>Jardín Botánico de Medellín</strong><br>
			Directora <br>
			Diana Milena Arango Uribe<br>
			Calle 73 N 51D - 14<br>
			Pbx: (604) 444 55 00<br>
			Fax: (604) 571 89 67<br>
			<a href="http://www.botanicomedellin.org/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://medellinconventionbureau.com/" target="_blank" title="Ir a Medellín Convention &amp; Visitors Bureau"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/SubportaldelCiudadano_2/AtencinCiudadana1/InformacinSecretaras/Shared%20Content/Imagenes/Descentralizados/bureau.jpg" width="172"></a><br>
			<strong>Medellín Convention &amp; Visitors Bureau</strong><br>
			Directora Ejecutiva <br>
			Sandra Howard Taylor<br>
			Calle 41 # 55 - 80 / Of. 302<br>
			Tele fax: (604) 261 6060<br>
			<a href="http://medellinconventionbureau.com/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="https://www.metrodemedellin.gov.co/" target="_blank" title="Ir a Metro de Medellín"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/metrodemedellin.jpg" width="172"></a><br>
			<strong>Metro de Medellín</strong><br>
			Gerente <br>
			Tomás Elejalde Escobar<br>
			Calle 44 46-001, Bello-Ant.<br>
			(604) 455 5201<br>
			(604) 455 5256<br>
			<a href="https://www.metrodemedellin.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.metroparques.gov.co/" target="_blank" title="Ir a Metroparques"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/metroparques.jpg" width="172"></a><br>
			<strong>Metroparques</strong><br>
			Gerente <br>
			Jorge Enrique Lievano Ospina<br>
			Carrera 70 Nº 16 - 04<br>
			(604) 340 1210<br>
			(604) 341 3500<br>
			<a href="http://www.metroparques.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.metroplus.gov.co/" target="_blank" title="Ir a Metroplús"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/SubportaldelCiudadano_2/PlandeDesarrollo_0_15/ProgramasyProyectos/Shared%20Content/Imagenes/2014/metroplus.jpg" width="172"></a><br>
			<strong>Metroplús</strong><br>
			Gerente <br>
			Andrés<br>
			Moreno Múnera<br>
			Calle 53 (Maracaibo) # 45-77<br>
			Tel: (604) 210 7000&nbsp;<br>
			<a href="http://www.metroplus.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.metrosalud.gov.co/" target="_blank" title="Ir a E.S.E. Metrosalud"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/SubportaldelCiudadano_2/AtencinCiudadana1/InformacinSecretaras/Shared%20Content/Imagenes/Descentralizados/metrosalud.jpg" width="172"></a><br>
			<strong>E.S.E. Metrosalud</strong><br>
			Directora (e) <br>
			Leopoldo<br>
			Giraldo Velásquez<br>
			Carrera 50 N ° 44-27<br>
			Tel: (604) 511 7505<br>
			<a href="http://www.metrosalud.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://personeriamedellin.gov.co/" target="_blank" title="Ir a Personero Municipal"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/SubportaldelCiudadano_2/AtencinCiudadana1/InformacinSecretaras/Shared%20Content/Imagenes/Descentralizados/personeria.jpg" width="172"></a><br>
			<strong>Personero Municipal</strong><br>
			Guillermo<br>
			Durán Uribe<br>
			C.C. Plaza la Libertad<br>
			Carrera 53A No 42 - 101<br>
			(604) 384 9999<br>
			<a href="http://www.personeriamedellin.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.parquearvi.org/" target="_blank" title="Ir a Parque Arvi"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/parquearvi.jpg" width="172"></a><br>
			Directora Ejecutiva<br>
			<strong>Parque Arvi</strong><br>
			Beatriz Elena<br>
			Araque Tobón<br>
			Santa Elena Central - Vereda El Cerro (604) 444 29 79<br>
			<a href="http://www.parquearvi.org/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.parqueexplora.org/" target="_blank" title="Ir a Parque Explora"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/parqueexplora.jpg" width="172"></a><br>
			Director<br>
			<strong>Parque Explora</strong><br>
			Andrés<br>
			Roldán<br>
			Carrera 52 Nº 73 – 75<br>
			(604) 516 83 00<br>
			<a href="http://www.parqueexplora.org/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.plazamayor.com.co/" target="_blank" title="Ir a Plaza Mayor"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/plazamayor.jpg" width="172"></a><br>
			<strong>Plaza Mayor</strong><br>
			Gerente <br>
			Víctor Hugo Zapata Madrigal<br>
			Calle 41 N° 55-80<br>
			Tel: (604) 261 7200<br>
			Fax: (604) 261 7902<br>
			<a href="http://www.plazamayor.com.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.rutanmedellin.org/" target="_blank" title="Ir a Ruta N"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/rutan.jpg" width="172"></a><br>
			Director Ejecutivo de<strong> Ruta N</strong><br>
			Javier Fernández<br>
			Complejo Ruta N. Calle 67 Nº 52-20-Piso 2, torre A.<br>
			Teléfono: (604) 516 7770<br>
			<a href="http://www.rutanmedellin.org/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.pascualbravo.edu.co/" target="_blank" title="Ir a I.U. Pascual Bravoto"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/tecpascualbravo.jpg" width="172"></a><br>
			<strong>I.U. Pascual Bravo</strong><br>
			Rector <br>
			Juan Pablo Arboleda Gaviria<br>
			Calle 73 # 73 a - 226<br>
			Robledo: (604) 448 0520<br>
			Belén: (604) 444 5458<br>
			<a href="http://www.pascualbravo.edu.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.sapiencia.gov.co/" target="_blank"><img alt="Sapiencia" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/medellin/Temas/AtencionCiudadana/InformacionGeneral/Shared%20Content/Imagenes/2017/sapiencia.png" title="Sapiencia" width="172"></a><br>
			<strong>AESM - Sapiencia</strong><br>
			Director <br>
			Carlos Alberto<br>
			Chaparro Sánchez<br>
			Transversal 73 No 65 - 296<br>
			Telefonos&nbsp;444 7947<br>
			<a href="http://www.sapiencia.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://saviasaludeps.com/" target="_blank" title="Ir a Savia Salud EPS"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/SubportaldelCiudadano_2/AtencinCiudadana1/InformacinSecretaras/Shared%20Content/Imagenes/saviasaludeps.jpg" width="172"></a><br>
			Gerente de<br>
			<strong>Savia Salud EPS</strong><br>
			Carlos Mario Montoya Serna<br>
			Calle 44&nbsp;Nro. 55 - 44<br>
			Ed. Businnes Plaza&nbsp;- Piso 13<br>
			Tel: (604) 460 1674<br>
			<a href="http://saviasaludeps.com/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="https://www.museocasadelamemoria.gov.co/" target="_blank" title="Ir a Terminales de Transporte"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/SubportaldelCiudadano_2/AtencinCiudadana1/InformacinSecretaras/Shared%20Content/Imagenes/Descentralizados/museomemoria.jpg" width="172"></a><br>
			&nbsp;<strong>M. Casa de la Memoria</strong><br>
			Director <br>
			Jairo Herrán Vargas<br>
			Calle 51 Nro. 36-66<br>
			Parque Bicentenario<br>
			Tel: (604) 383 4001<br>
			<a href="https://www.museocasadelamemoria.gov.co/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://telemedellin.tv/" target="_blank" title="Ir a Telemedellín"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/SubportaldelCiudadano_2/AtencinCiudadana1/InformacinSecretaras/Shared%20Content/Imagenes/Descentralizados/telemedellin.jpg" width="172"></a><br>
			Gerente de<br>
			<strong>Telemedellín</strong><br>
			Mábel Rocío López<br>
			Barrio El Poblado cra 43 F # 18-60, sector Villa Carlota.<br>
			Tel: (604) 437 3737<br>
			<a href="http://telemedellin.tv/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.terminalesmedellin.com/" target="_blank" title="Ir a Terminales de Transporte"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/wpccontent/Sites/Subportal%20del%20Ciudadano/Nuestro%20Gobierno/Secciones/Plantillas%20Gen%C3%A9ricas/Im%C3%A1genes/2012/Descentralizados/terminalesmedellin.jpg" width="172"></a><br>
			<strong>Terminales de Transporte</strong><br>
			Gerente <br>
			Carlos Mario Mejía Múnera<br>
			Terminal Norte Cr 64C78 580<br>
			Terminal Sur Cr 65 8B 91<br>
			Tel: (604) 267 7716<br>
			Fax: (604) 260 1025<br>
			<a href="http://www.terminalesmedellin.com/" target="_blank">web</a>
</article>

<article class="post">
	<div class="post-body">
	<a href="http://www.medellin.gov.co/" target="_blank" title="Ir a Corregimientos"><img alt="" src="https://www.medellin.gov.co/irj/go/km/docs/pccdesign/medellin/Temas/AtencionCiudadana/InformacionGeneral/Shared%20Content/Imagenes/2019/LogoAlcald%C3%ADa.png" width="172"></a><br>
			Gerente del<br>
			<strong>Centro</strong><br>
			Mónica María Pabón Carvajal<br>
			Camilo<br>
			Sánchez<br>
			Calle 44 N 52 – 165<br>
			Tel: (604) 385 5555<br>
			<a href="mailto:monica.pabon@medellin.gov.co" target="_blank" title="monica.pabon@medellin.gov.co">web</a>
</article>


			</div>

</section>

<script src="main.js"></script>
</body>

	<footer class="vlt-single-post__footer">
				<!--Post Tags-->
				
							<!--Post Share-->
							
				<section style="background-color: transparent;">
	                <div class="vlt-gap-100"></div>
	                   <div class="container">
	                  	<!--Animation Block-->
	                    	<div class="vlt-animation-block aos-init aos-animate" data-aos="fade" data-aos-delay="0">
		             	<!--Social Share-->
		                    	<div class="vlt-social-share text-center">
		                 		<h5 class="vlt-display-1">Compártelo
		                              		</h5>
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/directorio-de-entidades" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/directorio-de-entidades" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
			                     </div>
	                	</div>
	                 </div>
	                      <div class="vlt-gap-100"></div>   
              </section>						</footer>
@endsection