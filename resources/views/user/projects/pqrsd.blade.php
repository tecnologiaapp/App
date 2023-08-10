@extends('layouts.app')
@section('body_color', '#ffffff;')
@push('styles')

@endpush
@section('content')
<head>
	<style>
		section {
	padding: 100px 0;
	overflow: hidden;
  }
	</style>
</head>

<section class="about" id="about">
		<div align="center"><img class="logo me-auto" src="https://app.gov.co/assets/img/Proyectos/logo-landing.png" style="width: 380px; height: 250px;"></div>
		<div class="container aos-init aos-animate" data-aos="fade-up">
			<div class="section-title">
				<h1>Atención PQRSD</h1><br>
				<h2>Peticiones, Quejas, Reclamos, Sugerencias, Denuncias</h2>
			</div>
			<div class="row content">
				<div class="col-center">
					<p>La Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas – APP-, es un ente con carácter descentralizado adscrito a la Alcaldía de Medellín; Una unidad administrativa especial, del orden municipal, con personería jurídica, autonomía administrativa, financiera, presupuestal y patrimonial, que hace parte del Presupuesto General del Distrito Especial de Ciencia, Tecnología e Innovación de Medellín con lo establecido en el artículo 3 del Decreto 006 de 1998.</p>
					<p>Tenemos como misión gestionar y promover acciones que den sostenibilidad al espacio público, al paisaje y al patrimonio. Además, responsables de promover la generación de recursos a través de la implementación de los instrumentos de financiación definidos en el Plan de Ordenamiento Territorial y fomentar la incorporación de capitales privados a proyectos de inversión para beneficio público.</p>
				</div>
			</div>
		</div>
	</section>
	<div>
		<div class="section-title">
			<h2>Respetado ciudadano:</h2>
		</div>
		<div class="container aos-init aos-animate" data-aos="fade-up">
			<div class="row content">
				<div class="col-center">
					<p>Por favor ingrese los datos solicitados con el fin de enviarle al correo electrónico, un número de verificación con el cual podrá terminar su radicación. Es importante señalar que los datos facilitados en este formulario pasarán a formar parte de los archivos automatizados propiedad de la Agencia APP y podrán ser utilizados para el ejercicio de las competencias asignadas por ley. Lo anterior, de conformidad con la Ley 1581 de 2012, "Por la cual se dictan disposiciones generales para la protección de datos personales</p>
				</div>
			</div>
		</div>
	</div><!-- ======= Features Section ======= -->
	<section class="features" id="features">
		<div class="container">
			<form class="row g-3">
				<div class="col-md-3">
					<label class="form-label" for="validationServer04">Tipo de documento:</label> <select class="form-control" required="">
						<option disabled selected value="">
							Seleccionar
						</option>
						<option value="Cedula_C">
							Cédula de ciudadanía
						</option>
						<option value="Cedula_E">
							Cédula de extranjería
						</option>
						<option value="Tarjeta_I">
							Tarjeta de identidad
						</option>
						<option value="Pasaporte">
							Pasaporte
						</option>
						<option value="Nit">
							Nit
						</option>
					</select>
				</div>
				<div class="col-md-3">
					<label class="form-label" for="validationServer01">Numero de documento</label> <input class="form-control" min="1" pattern="^[0-9]+" type="number">
				</div>
				<div class="col-md-3">
					<label class="form-label" for="validationServer02">Primer Nombre</label> <input class="form-control" required="" type="text">
				</div>
				<div class="col-md-3">
					<label class="form-label" for="validationServer02">Segundo Nombre</label> <input class="form-control" type="text">
				</div>
				<div class="col-md-3">
					<label class="form-label" for="validationServer02">Primer Apellido</label> <input class="form-control" required="" type="text">
				</div>
				<div class="col-md-3">
					<label class="form-label" for="validationServer02">Segundo Apellido</label> <input class="form-control" required="" type="text">
				</div>
				<div class="col-md-3">
					<label class="form-label" for="validationServer02">Correo electrónico</label> <input class="form-control" required="" type="text">
				</div>
				<div class="col-md-3">
					<label class="form-label" for="validationServer02">Confirmar correo electrónico</label> <input class="form-control" required="" type="text">
				</div>
				<div class="col-md-4">
					<label class="form-label" for="validationServer02">Descripción</label> 
					<textarea class="form-control" cols="30" required="" rows="8"></textarea>
				</div>
				<div class="col-12">
					<div class="form-check">
						<input class="form-check-input" required="" type="checkbox"> <label class="form-check-label" for="invalidCheck3">Acepto los terminos y condiciones</label>
					</div>
				</div>
				<div class="col-12">
					<button class="btn btn-primary" type="submit">Enviar</button>
				</div>
			</form>
		</div>
	</section>

@endsection
