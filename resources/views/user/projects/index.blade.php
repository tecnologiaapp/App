@extends('layouts.app')
@section('body_color', '#ffffff;')
@section('content')
<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div><img alt="" class="jarallax-img" src="{{asset('assets/img/Banners/imgProyectos.jpg')}}">
			<div class="vlt-page-title-hero__content ocultPosition">
				<h1 style="color:white;">Proyectos</h1>
			</div>
		</div>
	</section>
	<div class="vlt-gap-60"></div>
	<div class="container">
		<div align="center">
			<iframe allowfullscreen frameborder="0" height="600px" src="https://storymaps.arcgis.com/stories/55aa962ad6f44735a7d0300fba02e3b2" width="100%"></iframe>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
	</script>
</body>

@endsection
