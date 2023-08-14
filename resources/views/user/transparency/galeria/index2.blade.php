@extends('layouts.app')
@section('content')
@section('body_color', '#ffffff;')
<head>
  <link rel="stylesheet" href="{{ asset('assets/css/galeriaPrincipal.css')}}">
</head>

<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/galeria.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Galería fotográfica</h1>
			</div>
		</div>
	</section><!--Content-->
	<section>
		<div class="vlt-gap-0"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 offset-md-9"></div>
			</div>
			<div class="vlt-single-post-wrapper vlt-single-post-wrapper--style-1">
				<div class="container">
					<article class="vlt-single-post">
						<div class="galeria">
							<div class="linea"></div>
							<div class="contenedor-imagenes">
								<div class="imagen">
									<img alt="" src="{{asset('assets/img/Galeria/punto_cero/1.jpg')}}">
									<div class="overlay">
										<a href="{{route('user.transparency.galeria.galery7')}}">
										<h2>Punto Cero</h2></a>
									</div>
								</div>
								<div class="imagen">
									<img alt="" src="{{asset('assets/img/Galeria/olano/1.jpg')}}">
									<div class="overlay">
										<a href="{{route('user.transparency.galeria.galery6')}}">
										<h2>Parque Olano</h2></a>
									</div>
								</div>
								<div class="imagen">
									<img alt="" src="{{asset('assets/img/Galeria/naviera/1.jpg')}}">
									<div class="overlay">
										<a href="{{route('user.transparency.galeria.galery5')}}">
										<h2>La Naviera</h2></a>
									</div>
								</div>
								<div class="imagen">
									<img alt="" src="{{asset('assets/img/Galeria/p2.jpg')}}">
									<div class="overlay">
										<a href="{{route('user.transparency.galeria.galery1')}}">
										<h2>Rendición de cuentas 2021</h2></a>
									</div>
								</div>
							</div>
							<div class="vlt-gap-30"></div>
							<div class="linea"></div>
						</div>
					</article>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center" style="padding-bottom: 40px;">
                            <li class="page-item">
                                <a class="page-link" href="javascript:history.back()">Anterior</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="{{route('user.transparency.galery')}}">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="{{route('user.transparency.galeria.index2')}}">2</a>
                            </li>
                        </ul>
                    </nav>
				</div>
			</div>
		</div>
	</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection