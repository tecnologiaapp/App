@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')
<head>
<link rel="stylesheet" href="{{ asset('assets/css/transparency.css')}}">
</head>
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/bg/5.jpg')}}">
			<div class="vlt-page-title-hero__content">
				<h1 style="color:white;">Preguntas frecuentes</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container mt-5">
		<button class="accordion">Proyectos por Asociación Público Privada - APP.</button>
		<div class="panel">
			<table class="table table-bordered table-striped custom-table">
				<tbody>
					<tr>						
					<h4>¿Qué son las Asociaciones Público Privadas?</h4>
							<p class="text-justify">Las APP son un mecanismo que permite vincular al sector privado para proveer bienes y servicios públicos. La relación se establece a través de un contrato de largo plazo para el desarrollo de diseños definitivos, construcción o reconstrucción, operación, mantenimiento y reversión. En este tipo de contratos, es fundamental la adecuada retención y transferencia de riesgos entre las partes y la definición de los mecanismos de pago, relacionados con la disponibilidad de la infraestructura y el nivel de servicio del bien provisto.</p>
							<p class="text-justify">Las Asociaciones Público Privadas tienen como objetivo mejorar el entorno institucional, económico y normativo para incentivar la participación del sector privado en el desarrollo de la infraestructura que requiere el país, tanto productiva como social.</p>
							<p class="text-justify">En Colombia hay dos tipos de APP: iniciativa pública e iniciativa privada.</p>
							<h4>¿Qué es una APP por iniciativa pública?</h4>
							<p class="text-justify">Son aquellas iniciativas promovidas y estructuradas desde las entidades públicas. La fuente de pago del proyecto puede ser a través de aportes de recursos públicos, de la explotación económica del APP o una combinación de estas.</p>
							<h4>¿Qué es una APP por iniciativa privada?</h4>
							<p class="text-justify">Son las iniciativas promovidas y estructuradas desde el sector privado, el cual tiene la responsabilidad de realizar los estudios del proyecto, por cuenta propia y riesgo, sin que el sector público esté en la obligación de reconocer los costos asociados.</p>
							<p class="text-justify">Las fuentes de pago tienen las siguientes limitaciones:</p>
							<ul>
								<li>· Podrá contar con recursos públicos, hasta del 20% o 30% del valor de la inversión total, (dependerá del tipo de infraestructura). Si se considera esta fuente de pago, la modalidad de selección del contratista se realizará a través de licitación pública.</li>
								<li>· Cuando los costos del servicio que se presta no requieren desembolso de recursos públicos, es decir, se cubren en su totalidad a través de la explotación económica del proyecto, el mecanismo de elección del contratista será el procedimiento de selección abreviada de menor cuantía.</li>
							</ul>
							<p></p>
							<h4>¿Para qué sirven las Asociaciones Público Privadas?</h4>
							<p class="text-justify">Las APP facilitan la provisión de los bienes públicos y el mantenimiento de la infraestructura en el largo plazo, considerando unos parámetros de disponibilidad y calidad pactados.</p>
							<h4>¿En qué momento se pueden desarrollar las APP en Medellín?</h4>
							<p class="text-justify">Las iniciativas se pueden estructurar en cualquier momento. Por el lado público dependerá de un proceso de planeación y disponibilidad de recursos.</p>
							<h4>¿Cuál es el rol del sector público en las APP?</h4>
							<p class="text-justify">En el caso de iniciativas públicas: identificar las necesidades de desarrollo de infraestructura y sus servicios asociados de acuerdo con las políticas y planes de la ciudad. Posteriormente, priorizar los proyectos y el nivel de estudios a desarrollar para cada uno. Por último, el Municipio de Medellín deberá adelantar los procesos de licitación y adjudicación para dar paso a la ejecución de la APP.</p>
							<p class="text-justify">En iniciativas privadas: acompañar al sector privado en la obtención de información, realizar la evaluación del proyecto, emitir las observaciones necesarias al originador privado y, en caso de ser aprobado, adelantar el proceso de selección y adjudicación.</p>
							<h4>¿En cuáles sectores funcionan las APP?</h4>
							<p class="text-justify">En infraestructura productiva: conformado por todas aquellas obras físicas que permiten elevar los niveles de producción y eficiencia productiva de un país, contribuyendo al crecimiento de la economía. Algunos ejemplos de proyectos de este tipo se encuentran: transporte, movilidad urbana, comunicaciones y logística.</p>
							<p class="text-justify">En infraestructura social: conformado por las obras y servicios que permiten incrementar el capital social de una comunidad y su posibilidad de acceder a mayores servicios y de mejor calidad. Hacen parte de la infraestructura social proyectos como:</p>
							<ul>
								<li>· Educación: colegios para preescolar, básica y media; establecimientos e institutos de educación superior.</li>
								<li>· Salud: hospitales y centros de salud primaria.</li>
								<li>· Edificaciones públicas: para oficinas.</li>
								<li>· Deporte y cultura: escenarios deportivos, artísticos y culturales.</li>
								<li>· Defensa y penitenciaría: cárceles y centros de detención preventiva.</li>
							</ul>
							<p></p>
							<h4>¿La Ley permite adiciones?</h4>
							<p class="text-justify">Según la tipología de APP, sí se permiten. En las iniciativas públicas las adiciones de recursos públicos o las prórrogas en plazo para este tipo de contratos tiene un límite del 20%, sobre el valor de los recursos públicos inicialmente estipulado, o del 20% sobre el plazo inicialmente pactado.</p>
							<p class="text-justify">En iniciativas privadas que requieren de aportes públicos, las adiciones de recursos y el valor de las prórrogas en tiempo sumadas no podrán superar el 20% de los desembolsos de los recursos públicos inicialmente pactados para el proyecto.</p>
							<h4>¿Cuál es el plazo máximo para estos proyectos?</h4>
							<p class="text-justify">El plazo máximo es de 30 años, incluidas las prórrogas. Excepcionalmente se podrá contar con un plazo superior en la etapa de estructuración del proyecto, previo concepto favorable del Consejo Municipal de Política Económica y Social (CONPES). Para el caso de Medellín, el Consejo de gobierno actuará como Consejo Municipal de Política Económica y Social-COMPES, bajo la coordinación técnica del Departamento Administrativo de Planeación.</p>
							<h4>¿Cómo se evalúan las iniciativas privadas?</h4>
							<p class="text-justify">Las iniciativas privadas presentadas inicialmente en etapa de pre factibilidad serán evaluadas en un plazo máximo de tres meses. La entidad pública evaluará si la propuesta se ajusta a sus intereses, a las políticas sectoriales, a su priorización de proyectos, y si la participación de recursos del Estado no supera el 20% o el 30% del valor del proyecto, dependiendo del sector que se trate. En caso de responder afirmativamente, la entidad dispondrá del plazo para que el originador privado realice los estudios de factibilidad, como un máximo de 24 meses.</p>
							<h4>¿Cómo garantizar la transparencia en las iniciativas privadas?</h4>
							<p class="text-justify">Si la APP de iniciativa privada requiere recursos públicos, se abrirá una licitación pública publicada en el Sistema Electrónico de Contratación Pública - SECOP para seleccionar el contratista que lleve adelante el proyecto. Si no lo requiere, igualmente el proyecto será publicado en el SECOP para que otros interesados puedan manifestar su intención de participar como ejecutores del proyecto y generar un proceso de selección competitivo.</p>
							<h4>¿Existe un inventario de las iniciativas presentadas?</h4>
							<p class="text-justify">Sí. La Ley creó el Registro Único de Asociación Público Privada (RUAPP), administrado por el Departamento Nacional de Planeación, en el que se lleva un registro de los proyectos que el Gobierno Nacional o las entidades territoriales se encuentran estructurando y/o evaluando. Este inventario puede ser consultado por cualquier ciudadano.</p>
							<p class="text-justify">De Igual manera, la Agencia APP es la entidad especializada del Municipio en proyectos bajo el modelo APP y consolida en su banco de proyectos las iniciativas públicas y privadas que se han estudiado.</p>
							<h4>¿Cómo se garantiza que las APP sean la forma más eficiente de utilizar los recursos públicos?</h4>
							<p class="text-justify">Las entidades estatales deben presentar al Departamento Nacional de Planeación (o a la entidad de planeación respectiva) una justificación técnica, que permita identificar que el desarrollo del proyecto por medio de APP es la forma más eficiente en términos económicos y sociales con respecto al desarrollo del mismo por medio de obra pública.</p>
							<h4>¿Cómo se comprometen los recursos públicos para este tipo de proyectos?</h4>
							<p class="text-justify">Para Medellín, la Ley APP permite realizar los desembolsos de recursos públicos durante el plazo para el desarrollo de proyectos. Las autorizaciones para comprometer vigencias futuras serán impartidas por la asamblea o concejo respectivo, a iniciativa del gobierno local, con previa aprobación por parte del CONFIS territorial (o el órgano que haga sus veces), según lo establece la Ley 819 de 2003.</p>
						
					</tr>
				</tbody>
			</table>
		</div>
		<button class="accordion">Normatividad para Proyectos APP</button>
		<div class="panel">
			<table class="table table-bordered table-striped custom-table">
				<tbody>
					<tr>		
					<h4>documentos relacionados a la Normatividad de Proyectos APP en Colombia</h4>
							<h4>Ley 1508:</h4>
							<p><a href="http://www.app.gov.co/index.php/subdirecciones/subdireccion-alianzas-publico-privadas/item/88-preguntas-aprovechamieno" target="_blank">http://www.app.gov.co/index.php/subdirecciones/subdireccion-alianzas-publico-privadas/item/88-preguntas-aprovechamieno</a></p>
							<h4>Decreto 1082 de 2015:</h4>
							<p><a href="https://www.dnp.gov.co/Paginas/Normativa/Decreto-1082-de-2015.aspx" target="_blank">https://www.dnp.gov.co/Paginas/Normativa/Decreto-1082-de-2015.aspx</a></p>
							<h4>Ley 1753 de 2015:</h4>
							<p><a href="http://www.secretariasenado.gov.co/senado/basedoc/ley_1753_2015.html" target="_blank">http://www.secretariasenado.gov.co/senado/basedoc/ley_1753_2015.html</a></p>
							<h4>Guías y Resoluciones del DNP:</h4>
							<p><a href="https://www.dnp.gov.co/programas/participaci%C3%B3n-privada-y-en-proyectos-de-infraestructura/asociaciones-publicoprivadas/Paginas/asociaciones-publico-privadas.aspx" target="_blank">https://www.dnp.gov.co/programas/participaci%C3%B3n-privada-y-en-proyectos-de-infraestructura/asociaciones-publicoprivadas/Paginas/asociaciones-publico-privadas.aspx</a></p>				
					</tr>
				</tbody>
			</table>
		</div>
		<button class="accordion">Aprovechamiento Económica del Espacio Público (AEEP).</button>
		<div class="panel">
			<table class="table table-bordered table-striped custom-table">
				<tbody>
					<tr>		
					<h4>La información la puedes revisar a través del SUIT</h4>
							<p><a href="{{route('user.transparency.suit')}}" target="_blank">Haz clic aquí para continuar.</a></p>				
					</tr>
				</tbody>
			</table>
		</div>
		<button class="accordion">Bienes Fiscales Inmuebles</button>
		<div class="panel">
			<table class="table table-bordered table-striped custom-table">
				<tbody>
					<tr>	
					<h4>¿Qué son bienes fiscales?</h4>
							<p class="text-justify">Los bienes fiscales son aquellos inmuebles que pertenecen a las Entidades del estado y que están destinados a servir en el ejercicio de funciones públicas (Alcaldías, Concejos Municipales, empresas del estado, etc.) o para la prestación de servicios colectivos (recreación, salud, educación, cultura, etc.). El Estado puede gestionarlos como si se tratase de un bien de propiedad particular, es decir, venderlos, arrendarlos, desarrollarlos constructivamente, etc.</p>
							<h4>¿Qué son bienes de uso público?</h4>
							<p class="text-justify">Los bienes de uso público son aquellos que pertenecen al Estado y que se destinan al uso y disfrute de todos los habitantes de un territorio sin excepción. Forman parte del espacio público y son administrados bajo el principio del interés general, por lo que no pueden ser vendidos, donados, embargados o usurpados. Por esta razón, su destinación como bien de uso público solo puede ser modificada por los Concejos Municipales.</p>
							<h4>¿Qué tipo de bienes del estado pueden comercializarse?</h4>
							<p class="text-justify">Solo los bienes inmuebles fiscales pueden comercializarse, debido a que son los únicos que pueden ser adjudicados a las personas a través de un proceso descrito por la ley, es decir, el Estado puede comercializarlos de forma similar a como lo hacen los particulares con los bienes de su propiedad.</p>
							<h4>¿Qué tipos de contratos se pueden celebrar para la explotación de un bien fiscal?</h4>
							<p class="text-justify">Dentro de los contratos más relevantes que se pueden celebrar con un bien fiscal, se encuentran: el contrato de arrendamiento, en la mayoría de casos con destinaciones comerciales; el contrato de compraventa del bien, cuyo proceso es a través de una subasta pública; el contrato de concesión, con el fin de explotar económicamente el bien, cuyo proceso es a través de licitación pública, por regla general.</p>
							<h4>¿Cuál es el proceso para enajenar un bien fiscal?</h4>
							<p class="text-justify">Es necesario contar con un avalúo comercial a través del cual se identifique el valor real del bien inmueble. Luego, se inicia un proceso público, denominado "Enajenación de Bienes del Estado a través de Subasta Pública", el cual tiene todas las etapas de un proceso licitatorio, y donde las personas interesadas en el bien pueden presentar ofertas económicas. Estas, se entregan en sobre cerrado y la entidad pública, elige la oferta que contenga el valor más alto sobre el avalúo comercial realizado. Es importante precisar que para poder participar en el proceso de selección, se debe consignar un porcentaje del valor del bien, lo cual constituye un requisito habilitante para participar en el proceso de enajenación.</p>
							<h4>¿Cuál es el precio de referencia para comercialización de un bien fiscal?</h4>
							<p class="text-justify">Este precio parte del avalúo comercial realizado por un avaluador debidamente autorizado por la Ley. Dicho avalúo comercial determina el valor de enajenación, el valor de la renta en caso de celebración de un contrato de arrendamiento, o incluso el valor del aprovechamiento económico y frutos percibidos a futuro, en el evento que la comercialización se dé a través de otro tipo de contrato como es la concesión.</p>					
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
		
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/preguntas-y-respuestas-frecuentes" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/preguntas-y-respuestas-frecuentes" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-100"></div>
		</section>
	</footer>

@endsection

@push('scripts')
<script src="{{ asset('assets/js/acordion.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endpush