@extends('layouts.app')

@push('styles')
@section('body_color', '#dddef4;')

<style type="text/css">

	.vlt-page-title-hero__overlay{
		background: transparent;
	}

	.vlt-page-title-hero{
		background: transparent;
	}

	.sample-header {
		position: fixed;
		left: 0;
		top: 0;
		width: 100%;
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
	}
	.sample-header::before {
		content: "";
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background-color: #000000;
		opacity: 0.3;
	}

	.sample-header-section {
		position: relative;
		padding: 15% 0 10%;
		max-width: 640px;
		margin-left: auto;
		margin-right: auto;
		color: white;
		text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
		font-family: "Montserrat", sans-serif;
	}

	.sample-section-wrap {
		position: relative;
	}

	.sample-section {
		position: relative;
		max-width: 700px;
		margin-left: auto;
		margin-right: auto;
		padding: 40px;
	}
</style>

@endpush

@section('content')
	<section>
		<!--Page Title Hero-->
		<div class="vlt-page-title-hero vlt-page-title-hero--work vlt-page-title-hero--lg jarallax">
			<div class="vlt-page-title-hero__overlay"></div>
		</div>
		<div id="content"></div>
	</section>

	<div class="sample-header" style="background-image: url({{ asset('assets/img/hagamoslo.jpg')}});">
		<div class="sample-header-section text-center text-white">
			<div class="vlt-page-title-hero__content">
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<h1 class="vlt-page-title-hero__title text-white" style="text-transform: none;">Multimedia
							</h1>
							<div class="vlt-post-meta vlt-display-1 text-white"><span>AGENCIA APP</span></div>
						</div>
					</div>
				</div>
			</div>

			<div class="d-flex justify-content-center">
				<a class="vlt-scroll-to-arrow text-center"  href="#content"><i class="leedo-download-arrow text-center"></i></a>
			</div>
		</div>
	</div>

	<div class="sample-section-wrap" style="background-color: @yield('body_color')">
		<div class="sample-section">
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
	      quis, sem. Nulla consequat massa quis enim. </p>

	      <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
	      vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam
	      ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. </p>

	      <p>Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut.</p>
	   </div>
	</div>
@endsection

