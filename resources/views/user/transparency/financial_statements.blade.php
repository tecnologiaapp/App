@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')
<head>
<link rel="stylesheet" href="{{ asset('assets/css/transparency.css')}}">
</head>

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/bannerEstadosFinancieros2.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Estados financieros</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="vlt-gap-120"></div>
		<div class="container mt-5">
			<h5 class="mt-5 mb-5">Aquí encontrarás la información relacionada con la información contable de la Agencia APP</h5>
		</div>
		<div class="container mt-5">
			<button class="accordion">Estados financieros anuales</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Estados Financieros Año 2021</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2021/estados-financieros-del-2021.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Año 2020</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2020/estados-financieros-del-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Año 2019</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2019/estados-financieros-del-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Año 2018</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2018/estados-financieros-del-2018.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Año 2017</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2017/estados-financieros-del-2017.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Año 2016</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2016/estados-financieros-del-2016.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Año 2015</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2015/estados-financieros-del-2015.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Año 2014</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2014/estados-financieros-del-2014.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Año 2013</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2013/estados-financieros-del-2013.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Información contable de 2024</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
					    <tr>
							<td>Estados Financieros - Julio 2024</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2024/JULIO-2024.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros - Junio 2024</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2024/JUNIO-2024.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros - Mayo 2024</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2024/MAYO-2024.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros - Abril 2024</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2024/ABRIL-2024.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros - Marzo 2024</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2024/MARZO-2024.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros - Febrero 2024</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2024/FEBRERO-2024.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros - Enero 2024</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2024/ENERO-2024.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Información contable de 2023</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Estados Financieros Septiembre 2023</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2023/septiembre-2023.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Agosto 2023</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2023/agosto-2023.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Julio 2023</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2023/junio-2023.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Junio 2023</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2023/junio-2023.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Mayo 2023</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2023/mayo-2023.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Abril 2023</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2023/abril-2023.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Marzo 2023</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2023/marzo-2023.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Febrero 2023</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2023/febrero-2023.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Enero 2023</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2023/enero-2023.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Información contable de 2022</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Estados Financieros Diciembre 2022</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2022/Diciembre-2022.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Noviembre 2022</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2022/Noviembre-2022.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Octubre 2022</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2022/octubre-2022.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Septiembre 2022</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2022/septiembre-2022.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Agosto 2022</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2022/agosto-2022.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Julio 2022</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2022/julio-2022.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Junio 2022</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2022/junio-2022.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Mayo 2022</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2022/mayo-2022.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Abril 2022</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2022/abril-2022.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Marzo 2022</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2022/marzo-2022.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Febrero 2022</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2022/febrero-2022.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Enero 2022</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2022/enero-2022.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Información contable de 2021</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Estados Financieros Diciembre 2021</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2021/Dic-2021.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Noviembre 2021</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2021/Noviembre-2021.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Octubre 2021</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2021/Octubre-2021.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Septiembre 2021</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2021/septiembre-2021.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Agosto 2021</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2021/agosto-2021.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Julio 2021</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2021/julio-2021.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Junio 2021</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2021/EstadosFinancierosjunio2021C.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Mayo 2021</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2021/EstadosFinancierosmayo2021C.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Abril 2021</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2021/Estadosfinancierosabril2021C.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Marzo 2021</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2021/Marzo2021.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Febrero 2021</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2021/Febrero2021.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>Estados Financieros Enero 2021</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2021/Enero2021.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Información contable de 2020</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>1. Estado de situación financiera de enero de 2020</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2020/1-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>2. Estado de situación financiera de febrero de 2020</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2020/2-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>3. Estado de situación financiera de marzo de 2020</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2020/3-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>4. Estado de situación financiera de abril de 2020</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2020/4-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>5. Estado de situación financiera de mayo de 2020</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2020/5-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>6. Estado de situación financiera de junio de 2020</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2020/6-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>7. Estado de situación financiera de julio de 2020</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2020/7-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>8. Estado de situación financiera de agosto de 2020</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2020/8-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>9. Estado de situación financiera de septiembre de 2020</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2020/9-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>10. Estado de situación financiera de octubre de 2020</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2020/10-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>11. Estado de situación financiera de noviembre de 2020</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2020/11-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>12. Estado de situación financiera de diciembre de 2020</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2020/12-2020.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Información contable de 2019</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>1. Estado de situación financiera de enero de 2019</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2019/1-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>2. Estado de situación financiera de febrero de 2019</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2019/2-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>3. Estado de situación financiera de marzo de 2019</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2019/3-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>4. Estado de situación financiera de abril de 2019</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2019/4-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>5. Estado de situación financiera de mayo de 2019</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2019/5-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>6. Estado de situación financiera de junio de 2019</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2019/6-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>7. Estado de situación financiera de julio de 2019</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2019/7-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>8. Estado de situación financiera de agosto de 2019</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2019/8-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>9. Estado de situación financiera de septiembre de 2019</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2019/9-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>10. Estado de situación financiera de octubre de 2019</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2019/10-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>11. Estado de situación financiera de noviembre de 2019</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2019/11-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>12. Estado de situación financiera de diciembre de 2019</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2019/12-2019.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Información contable de 2018</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>1. Estado de situación financiera de enero de 2018</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2018/1-2018.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>2. Estado de situación financiera de febrero de 2018</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2018/2-2018.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>3. Estado de situación financiera de marzo de 2018</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2018/3-2018.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>4. Estado de situación financiera de abril de 2018</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2018/4-2018.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>5. Estado de situación financiera de mayo de 2018</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2018/5-2018.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>6. Estado de situación financiera de junio de 2018</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2018/6-2018.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>7. Estado de situación financiera de julio de 2018</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2018/7-2018.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>8. Estado de situación financiera de agosto de 2018</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2018/8-2018.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>9. Estado de situación financiera de septiembre de 2018</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2018/9-2018.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>10. Estado de situación financiera de octubre de 2018</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2018/10-2018.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>11. Estado de situación financiera de noviembre de 2018</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2018/11-2018.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>12. Estado de situación financiera de diciembre de 2018</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2018/12-2018.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Información contable de 2017</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>1. Estado de situación financiera de enero de 2017</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2017/1-2017.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>2. Estado de situación financiera de febrero de 2017</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2017/2-2017.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>3. Estado de situación financiera de marzo de 2017</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2017/3-2017.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>4. Estado de situación financiera de abril de 2017</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2017/4-2017.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>5. Estado de situación financiera de mayo de 2017</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2017/5-2017.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>6. Estado de situación financiera de junio de 2017</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2017/6-2017.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>7. Estado de situación financiera de julio de 2017</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2017/7-2017.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>8. Estado de situación financiera de agosto de 2017</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2017/8-2017.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>9. Estado de situación financiera de septiembre de 2017</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2017/9-2017.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>10. Estado de situación financiera de octubre de 2017</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2017/10-2017.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>11. Estado de situación financiera de noviembre de 2017</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2017/11-2017.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
						<tr>
							<td>12. Estado de situación financiera de diciembre de 2017</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2017/12-2017.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Información contable de 2016</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Estados de situación financiera de todo el 2016</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2016/1-12-2016.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Información contable de 2015</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Estados de situación financiera de todo el 2015</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2015/1-12-2015.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Información contable de 2014</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Estados de situación financiera de todo el 2014</td>
							<td>
								<a class="btn btn-primary btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2014/1-12-2014.pdf')}}" target="_blank">Ver documento</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div><button class="accordion">Información contable de 2013</button>
			<div class="panel">
				<table class="table table-bordered table-striped custom-table">
					<tbody>
						<tr>
							<td>Estados de situación financiera de todo el 2013</td>
							<td>
								<a class="btn btn-primary btn-block btn-block btn-block" href="{{asset('assets/pdf/financial_statements/2013/1-12-2013.pdf')}}" target="_blank">Ver documento</a>
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
						<h5 class="vlt-display-1">Compártelo</h5><a class="vlt-social-icon vlt-social-icon--style-1 twitter" href="https://twitter.com/intent/tweet?text=https://www.app.gov.co/somos-app/informaci%C3%B3n-contable" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> <a class="vlt-social-icon vlt-social-icon--style-1 facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.app.gov.co/somos-app/informaci%C3%B3n-contable" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
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