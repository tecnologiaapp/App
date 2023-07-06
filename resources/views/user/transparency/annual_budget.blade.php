@extends('layouts.app')
@section('body_color', '#f3f5fa;')
@section('content')
<head>
<style>
.accordion {
  background-color: transparent;
  color: #444;
  cursor: pointer;
  padding: 22px;
  width: 100%;
  border: 1px;
  text-align: left;
  outline: none;
  font-size: 14px;
  font-family:arial;
  font-weight: bold;
  transition: 0.4s;
  background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
	
  
}

.accordion:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  color: #777;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}

.active, .accordion:hover {
  background-color: rgba(0,0,0,.03); 
}

.panel {
  padding: 12px 20px;
  display: none;
  background-color: transparent;
  overflow: hidden;
}
</style>
</head>
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img class="jarallax-img" src="{{ asset('assets/img/bg/5.jpg')}}" alt="">
			<div class="vlt-page-title-hero__content">

							<h1 style="color:white;">
							Presupuesto general asignado
							</h1>
		
			</div>

		</div>
		
	</section>


<section>
	<div class="vlt-gap-120"></div>

	<div class="container mt-5">
		<h5 class="mt-5 mb-5">Aquí encontrarás la información relacionada con la ejecución presupuestal anual de la Agencia APP</h5>
	</div>
	
	<div class="container mt-5">

	<button class="accordion">Presupuesto 2023 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
								<tr>
									<td>Ejecución presupuestal de gastos Mayo 2023</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2023/Gastos-mayo-2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Mayo 2023</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2023/Ingresos-mayo-2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
							<tr>
								
								<tr>
									<td>Ejecución presupuestal de gastos Abril 2023</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2023/gastos-abril-2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Abril 2023</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2023/ingresos-abril-2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
							<tr>
	<tr>
									<td>Ejecución presupuestal de gastos Marzo 2023</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2023/Gastos-Marzo-2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Marzo 2023</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2023/Ingresos-Marzo-2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
							<tr>
									<td>Ejecución presupuestal de gastos Febrero 2023</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2023/gastos-febrero-2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Febrero 2023</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2023/ingresos-febrero-2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							<tr>
									<td>Ejecución presupuestal de gastos Enero 2023</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2023/Gastos-enero-2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Enero 2023</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2023/ingresos-enero-2023.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

                          

								</tbody> 
</table>
</div>


	<button class="accordion">Presupuesto 2022 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
									<td>Ejecución presupuestal de gastos Diciembre 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/gastos-diciembre-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Diciembre 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/ingresos-diciembre-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
	<tr>
									<td>Ejecución presupuestal de gastos Noviembre 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/Gastos-Noviembre-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Noviembre 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/Ingresos-Noviembre-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							<tr>
									<td>Ejecución presupuestal de gastos Octubre 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/gastos-octubre-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Octubre 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/Ingresos-octubre-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							<tr>
									<td>Ejecución presupuestal de gastos Septiembre 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/Gastos-septiembre-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Septiembre 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/Ingresos-septiembre-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							<tr>
									<td>Ejecución presupuestal de gastos Agosto 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/Gastos-Agosto-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Agosto 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/Ingresos-agosto-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							<tr>
									<td>Ejecución presupuestal de gastos Julio 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/gastos-julio-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Julio 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/ingresos-julio-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							<tr>
									<td>Ejecución presupuestal de gastos Junio 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/gastos-junio-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Junio 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/ingresos-junio-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							<tr>
									<td>Ejecución presupuestal de gastos Mayo 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/Gastos-mayo-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Mayo 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/Ingresos-mayo-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							<tr>
									<td>Ejecución presupuestal de gastos Abril 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/gastos-abril-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Abril 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/ingresos-abril-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							<tr>
									<td>Ejecución presupuestal de gastos Marzo 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/Gastos-Marzo-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Marzo 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/Ingresos-Marzo-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							<tr>
									<td>Ejecución presupuestal de gastos Febrero 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/Gastos-Febrero-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Febrero 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/Ingresos-Febrero-2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							<tr>
									<td>Ejecución presupuestal de gastos Enero 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/Presupuesto de Gastos enero de 2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								


							<tr>
									<td>Ejecución presupuestal de ingresos Enero 2022</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2022/Presupuesto de Ingresos enero de 2022.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

                          

								</tbody> 
</table>
</div>

	<button class="accordion">Presupuesto 2021 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
									<td>Ejecución presupuestal de gastos diciembre 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/Presupuestos de gastos diciembre 31 de 2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>



							<tr>
									<td>Ejecución presupuestal de ingresos diciembre 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/Presupuesto de ingresos diciembre de 2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							<tr>
									<td>Ejecución presupuestal de gastos noviembre 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/Presupuesto-Gastos-Noviembre-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>



							<tr>
									<td>Ejecución presupuestal de ingresos noviembre 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/Presupuesto-Ingresos-Noviembre-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							
							<tr>
									<td>Ejecución presupuestal de gastos octubre 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/Presupuesto-gastos-Octubre-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>



							<tr>
									<td>Ejecución presupuestal de ingresos octubre 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/Presupuesto-Ingresos-Octubre-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							<tr>
									<td>Ejecución presupuestal de gastos septiembre 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/Presupuesto de Gastos septiembre.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>



							<tr>
									<td>Ejecución presupuestal de ingresos septiembre 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/Presupuesto de ingresos septiembre.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para agosto 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/Gastos-Agosto-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos agosto 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/Ingresos-Agosto-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							
							<tr>
									<td>Ejecución presupuestal de gastos e ingresos para julio 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/presupuesto-julio-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

		
								
								<tr>
									<td>Ejecución presupuestal de gastos para junio 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/Gastos-Junio-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos junio 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/Ingresos-Junio-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para mayo 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/Gastos-Mayo-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos mayo 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/Ingresos-Mayo-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para abril 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/Gastos-Abril-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos abril 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/Ingresos-Abril 30-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>



								<tr>
									<td>Ejecución presupuestal de gastos para marzo 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/ejecucion-presupuestal-de-gastos-marzo-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos marzo 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/ejecucion-presupuestal-de-ingresos-marzo-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

							    <tr>
									<td>Ejecución presupuestal de gastos para febrero 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/ejecucion-presupuestal-de-gastos-febrero-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos febrero 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/ejecucion-presupuestal-de-ingresos-febrero-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
							
							
							
							<tr>
									<td>Ejecución presupuestal de gastos para enero 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/ejecucion-presupuestal-de-gastos-enero-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos enero 2021</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2021/ejecucion-presupuestal-de-ingresos-enero-2021.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								
								</tbody> 
</table>
</div>
<button class="accordion">Presupuesto 2020 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
									<td>Resolución 312 diciembre 19 de 2019 Presupuesto 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/resolucion-312-diciembre-19-de-2019-presupuesto-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para enero 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-gastos-enero-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos enero 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-ingresos-enero-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para febrero 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-gastos-febrero-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos febrero 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-ingresos-febrero-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para marzo 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-gastos-marzo-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos marzo 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-ingresos-marzo-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para abril 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-gastos-abril-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos abril 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-ingresos-abril-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para mayo 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-gastos-mayo-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos mayo 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-ingresos-mayo-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para junio 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-gastos-junio-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos junio 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-ingresos-junio-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para julio 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-gastos-julio-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos julio 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-ingresos-julio-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para agosto 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-gastos-agosto-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos agosto 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-ingresos-agosto-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para septiembre 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-gastos-septiembre-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos septiembre 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-ingresos-septiembre-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para octubre 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-gastos-octubre-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos octubre 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-ingresos-octubre-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para noviembre 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-gastos-noviembre-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos noviembre 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/ejecucion-presupuestal-de-ingresos-noviembre-2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos e ingresos diciembre 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/Presupuesto de Gastos  e Ingresos Diciembre 2020.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Justificación de reservas - 2020</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2020/justificacion-de-reservas.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								
								</tbody> 
</table>
</div>
<button class="accordion">Presupuesto 2019 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
									<td>Ejecución presupuestal de gastos enero 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-gastos-enero-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos enero 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-ingresos-enero-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para febrero 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-gastos-febrero-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos febrero 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-ingresos-febrero-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para marzo 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-gastos-marzo-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos marzo 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-ingresos-marzo-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para abril 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-gastos-abril-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos abril 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-ingresos-abril-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para mayo 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-gastos-mayo-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos mayo 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-ingresos-mayo-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para junio 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-gastos-junio-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos junio 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-ingresos-junio-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para julio 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-gastos-julio-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos julio 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-ingresos-julio-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para agosto 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-gastos-agosto-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos agosto 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-ingresos-agosto-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para septiembre 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-gastos-septiembre-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos septiembre 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-ingresos-septiembre-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para octubre 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-gastos-octubre-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos octubre 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-ingresos-octubre-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para noviembre 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-gastos-noviembre-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos noviembre 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-ingresos-noviembre-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para diciembre 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-gastos-diciembre-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos diciembre 2019</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2019/ejecucion-presupuestal-de-ingresos-diciembre-2019.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								
								</tbody> 
</table>
</div>
<button class="accordion">Presupuesto 2018 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
									<td>Ejecución presupuestal de gastos para enero 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-gastos-enero-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos enero 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-ingresos-enero-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para febrero 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-gastos-febrero-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos febrero 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-ingresos-febrero-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para marzo 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-gastos-marzo-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos marzo 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-ingresos-marzo-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para abril 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-gastos-abril-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos abril 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-ingresos-abril-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para mayo 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-gastos-mayo-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos mayo 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-ingresos-mayo-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para junio 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-gastos-junio-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos junio 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-ingresos-junio-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para julio 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-gastos-julio-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos julio 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-ingresos-julio-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para agosto 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-gastos-agosto-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos agosto 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-ingresos-agosto-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para septiembre 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-gastos-septiembre-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos septiembre 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-ingresos-septiembre-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para octubre 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-gastos-octubre-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos octubre 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-ingresos-octubre-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para noviembre 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-gastos-noviembre-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos noviembre 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-ingresos-noviembre-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para diciembre 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-gastos-diciembre-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos diciembre 2018</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2018/ejecucion-presupuestal-de-ingresos-diciembre-2018.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								
								</tbody> 
</table>
</div>
<button class="accordion">Presupuesto 2017 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
									<td>Ejecución presupuestal de gastos para enero 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-gastos-enero-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos enero 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-ingresos-enero-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para febrero 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-gastos-febrero-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos febrero 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-ingresos-febrero-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para marzo 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-gastos-marzo-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos marzo 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-ingresos-marzo-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para abril 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-gastos-abril-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos abril 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-ingresos-abril-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para mayo 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-gastos-mayo-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos mayo 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-ingresos-mayo-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para junio 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-gastos-junio-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos junio 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-ingresos-junio-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para julio 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-gastos-julio-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos julio 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-ingresos-julio-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para agosto 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-gastos-agosto-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos agosto 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-ingresos-agosto-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para septiembre 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-gastos-septiembre-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos septiembre 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-ingresos-septiembre-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para octubre 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-gastos-octubre-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos octubre 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-ingresos-octubre-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para noviembre 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-gastos-noviembre-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos noviembre 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-ingresos-noviembre-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para diciembre 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-gastos-diciembre-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos diciembre 2017</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2017/ejecucion-presupuestal-de-ingresos-diciembre-2017.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								
								</tbody> 
</table>
</div>
<button class="accordion">Presupuesto 2016 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
									<td>Ejecución presupuestal de ingresos y gasto a marzo</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2016/ejecucion-presupuestal-de-ingresos-y-gastos-a-marzo.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos y gasto a junio</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2016/ejecucion-presupuestal-de-ingresos-y-gastos-a-junio.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos y gasto a septiembre</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2016/ejecucion-presupuestal-de-ingresos-y-gastos-a-septiembre.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos y gasto a diciembre</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2016/ejecucion-presupuestal-de-ingresos-y-gastos-a-diciembre.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								
								</tbody> 
</table>
</div>
<button class="accordion">Presupuesto 2015 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
									<td>Ejecución presupuestal de ingresos y gasto a marzo</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2015/ejecucion-presupuestal-de-ingresos-y-gastos-a-marzo.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos y gasto a junio</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2015/ejecucion-presupuestal-de-ingresos-y-gastos-a-junio.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos y gasto a septiembre</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2015/ejecucion-presupuestal-de-ingresos-y-gastos-a-septiembre.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos y gasto a diciembre</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2015/ejecucion-presupuestal-de-ingresos-y-gastos-a-diciembre.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								
								</tbody> 
</table>
</div>
<button class="accordion">Presupuesto 2014 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
									<td>Ejecución presupuestal de gastos para enero 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-gastos-enero-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos enero 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-ingresos-enero-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para febrero 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-gastos-febrero-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos febrero 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-ingresos-febrero-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para marzo 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-gastos-marzo-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos marzo 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-ingresos-marzo-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para abril 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-gastos-abril-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos abril 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-ingresos-abril-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para mayo 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-gastos-mayo-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos mayo 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-ingresos-mayo-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para junio 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-gastos-junio-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos junio 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-ingresos-junio-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para julio 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-gastos-julio-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos julio 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-ingresos-julio-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para agosto 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-gastos-agosto-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos agosto 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-ingresos-agosto-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para septiembre 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-gastos-septiembre-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos septiembre 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-ingresos-septiembre-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para octubre 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-gastos-octubre-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos octubre 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-ingresos-octubre-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para noviembre 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-gastos-noviembre-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos noviembre 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-ingresos-noviembre-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para diciembre 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-gastos-diciembre-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos diciembre 2014</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2014/ejecucion-presupuestal-de-ingresos-diciembre-2014.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>
								
								</tbody> 
</table>
</div>
<button class="accordion">Presupuesto 2013 </button>
	<div class="panel">

<table class="table table-bordered table-striped custom-table">
	<tbody>
	<tr>
									<td>Ejecución presupuestal de gastos para junio 2013</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2013/ejecucion-presupuestal-de-gastos-junio-2013.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos junio 2013</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2013/ejecucion-presupuestal-de-ingresos-junio-2013.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para julio 2013</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2013/ejecucion-presupuestal-de-gastos-julio-2013.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos julio 2013</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2013/ejecucion-presupuestal-de-ingresos-julio-2013.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para agosto 2013</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2013/ejecucion-presupuestal-de-gastos-agosto-2013.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos agosto 2013</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2013/ejecucion-presupuestal-de-ingresos-agosto-2013.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para septiembre 2013</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2013/ejecucion-presupuestal-de-gastos-septiembre-2013.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos septiembre 2013</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2013/ejecucion-presupuestal-de-ingresos-septiembre-2013.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para octubre 2013</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2013/ejecucion-presupuestal-de-gastos-octubre-2013.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos octubre 2013</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2013/ejecucion-presupuestal-de-ingresos-octubre-2013.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para noviembre 2013</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2013/ejecucion-presupuestal-de-gastos-noviembre-2013.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos noviembre 2013</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2013/ejecucion-presupuestal-de-ingresos-noviembre-2013.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de gastos para diciembre 2013</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2013/ejecucion-presupuestal-de-gastos-diciembre-2013.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
								</tr>

								<tr>
									<td>Ejecución presupuestal de ingresos diciembre 2013</td>
									<td>
										<a href="{{ asset('assets/pdf/budget/2013/ejecucion-presupuestal-de-ingresos-diciembre-2013.pdf')}}" class="btn btn-primary btn-block" target="_blank">
											Ver documento
										</a>
									</td>
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
		                 		<h5 class="vlt-display-1">Compártelo
		                              		</h5>
				<a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/ejecución-presupuestal-histórica-anual" rel="nofollow" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>

				<a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/ejecución-presupuestal-histórica-anual" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>

				
			                     </div>
	                	</div>
	                 </div>
	                      <div class="vlt-gap-100"></div>   
              </section>						</footer>
@endsection

@push('scripts')
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endpush