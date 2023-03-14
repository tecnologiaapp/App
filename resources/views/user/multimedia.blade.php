<!DOCTYPE html>
<html class="no-js vlt-is--homepage-03 vlt-is--header-slide vlt-is--footer-style-3 vlt-is--footer-fixed vlt-is--lowercase-mode" lang="en">

<head>
	@include('includes.header._meta')
	<style type="text/css">
		.vlt-navbar, .vlt-navbar.vlt-navbar--solid {
			background-color: transparent!important;
		}
	</style>
</head>

<body>
	<!--Preloader-->
	<div class="vlt-site-preloader">
		<div class="image">
			<img src="{{ asset('assets/img/bg/hagamoslo.png')}}" alt="">
		</div>
	</div>
	<!--Site Wrapper-->
	<div class="vlt-site-wrapper">
		<!--Site Wrapper Inner-->
		<div class="vlt-site-wrapper__inner">
			<!--Header-->
			<div class="d-none d-lg-block">
				<div class="vlt-navbar-overlay"></div>
				<header class="vlt-header vlt-header--slide">
					<div class="vlt-navbar vlt-navbar--main vlt-navbar--transparent">
						<div class="container">
							<div class="vlt-navbar-inner">
								<div class="vlt-navbar-inner--left">
									<!--Logo--><a class="vlt-navbar-logo" href="{{url('/')}}"><img class="black" src="{{ asset('assets/img/logo-white.png')}}" alt="" style="height: 120px; margin-top: 10px;"><img class="white" src="{{ asset('assets/img/logo-white.png')}}" alt="" style="height: 120px; margin-top: 10px;"></a>
								</div>
								<div class="vlt-navbar-inner--right">
									<div class="d-flex align-items-center"><a class="vlt-menu-burger" href="#" id="vlt-slide-menu-open"><span class="line line-one"><span></span></span><span class="line line-two"><span></span></span><span class="line line-three"><span></span></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>
				<div class="vlt-slide-navigation-holder">
					<div class="vlt-navbar vlt-navbar--white-text-on-top">
						<div class="vlt-navbar-inner">
							<div></div><a class="vlt-menu-burger vlt-menu-burger--opened" href="#" id="vlt-slide-menu-close"><span class="line line-one"><span></span></span><span class="line line-two"><span></span></span><span class="line line-three"><span></span></span></a>
						</div>
					</div>
					<!--Navigation-->
					<nav class="vlt-slide-navigation">
						<!--Menu-->
						@include('includes.header.navbar')
					</nav>
				</div>
			</div>
			<div class="d-lg-none d-sm-block">
				<header class="vlt-header vlt-header--opaque vlt-header--mobile">
					<nav class="vlt-navbar vlt-navbar--mobile">
						<div class="container">
							<div class="vlt-navbar-inner no-gutters">
								<div class="col text-left"><a class="vlt-menu-burger" href="#" id="vlt-mobile-menu-toggle"><span class="line line-one"><span></span></span><span class="line line-two"><span></span></span><span class="line line-three"><span></span></span></a></div>
								<div class="col text-center">
									<!--Logo--><a class="vlt-navbar-logo" href="{{url('/')}}"><img src="{{ asset('assets/img/logo-white.png')}}" alt="" style="height: 80px; margin-top: 10px;"></a>
								</div>
							</div>
						</div>
					</nav>
					<!--Navigation-->
					<nav class="vlt-mobile-navigation">
						<div class="container">
							<!--Menu-->
							@include('includes.header.navbar')
						</div>
					</nav>
				</header>
			</div>
			<!--Main-->
			<main class="vlt-main">
				<div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_1_1_wrapper" data-alias="homepage-03" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
					<!-- START REVOLUTION SLIDER 5.4.8.1 fullwidth mode-->
					<div class="rev_slider fullwidthabanner" id="rev_slider_1_1" style="display:none;" data-version="5.4.8.1">
						<ul>
							<!-- SLIDE-->
							<li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
								<!-- MAIN IMAGE--><img class="rev-slidebg" src="assets/img/root/transparent.png" data-bgcolor="#ffda88" style="background:#ffda88" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" data-no-retina="">
								<!-- LAYERS-->
								<!-- LAYER NR. 1-->
								<div class="tp-caption rev_group" id="slide-1-layer-7" data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-150','-150','-150','-100']" data-width="282" data-height="28" data-whitespace="nowrap" data-type="group" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; min-width: 282px; max-width: 282px; max-width: 28px; max-width: 28px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
									<!-- LAYER NR. 2-->
									<h2 class="tp-caption" id="slide-1-layer-1" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+490&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: nowrap; font-size: 28px; line-height: 28px; font-weight: 700; color: #1f0e49; letter-spacing: 0px;font-family:Playfair Display;font-style:italic;">Agencia APP</h2>
									<!-- LAYER NR. 3-->
									<div class="tp-caption tp-shape tp-shapewrapper" id="slide-1-layer-5" data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="60" data-height="1" data-whitespace="nowrap" data-type="shape" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+790&quot;,&quot;speed&quot;:600,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;background-color:rgba(31,14,73,0.5);"></div>
								</div>
								<!-- LAYER NR. 4-->
								<div class="tp-caption rs-parallaxlevel-4" id="slide-1-layer-10" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" data-width="full-proportional" data-height="full-proportional" data-whitespace="nowrap" data-visibility="['on','on','on','off']" data-type="image" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;"><img src="assets/img/slider/homepage-03/01.jpg" alt="" data-ww="['full-proportional','full-proportional','full-proportional','full-proportional']" data-hh="['full-proportional','full-proportional','full-proportional','full-proportional']" data-no-retina=""></div>
								<!-- LAYER NR. 5-->
								<div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-9" data-x="['left','left','left','left']" data-hoffset="['-360','-360','-360','-400']" data-y="['top','top','top','top']" data-voffset="['-385','-385','-385','-250']" data-width="830" data-height="830" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:-200px;skX:85px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;easeOutQuad&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgb(253,244,180);border-radius:500px 500px 500px 500px;"></div>

								<div class="row">
									<div class="col-sm-12">
										<div class="embed-responsive embed-responsive-16by9">
											<video id="homeVideoMobile" playsinline  autoplay muted loop>
												<source src="{{ asset('assets/videos/galeria.mp4')}}" type="video/mp4">
											</video>
										</div>
									</div>	
								</div>

								<!-- LAYER NR. 6-->
								<h1 class="tp-caption" id="slide-1-layer-3" data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-15','-15','-15','0']" data-fontsize="['58','58','58','36']" data-lineheight="['70','70','70','50']" data-width="['500','500','500','442']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:500,&quot;split&quot;:&quot;lines&quot;,&quot;splitdelay&quot;:0.05,&quot;speed&quot;:2000,&quot;split_direction&quot;:&quot;forward&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; min-width: 500px; max-width: 500px; white-space: normal; font-size: 58px; line-height: 70px; font-weight: 700; color: #1f0e49; letter-spacing: 0px;font-family:Montserrat;">Multimedia <br>
								</h1>
								<!-- LAYER NR. 7-->
								<div class="tp-caption" id="slide-1-layer-4" data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['175','175','175','140']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:2500,&quot;speed&quot;:600,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;">
									{{-- <a class="vlt-btn vlt-btn--primary vlt-btn--lg vlt-btn--effect" href="http://wp.vlthemes.com/leedo/contact-us-01/"><span>Contact Me</span></a> --}}
								</div>
							</li>
						</ul>


						<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
					</div>
				</div>
				<!-- END REVOLUTION SLIDER-->
				<script>
					var revapi1,
						tpj;
					(function() {
						if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
						else onLoad();

						function onLoad() {
							if (tpj === undefined) {
								tpj = jQuery;
								if ("off" == "on") tpj.noConflict();
							}
							if (tpj("#rev_slider_1_1").revolution == undefined) {
								revslider_showDoubleJqueryError("#rev_slider_1_1");
							} else {
								revapi1 = tpj("#rev_slider_1_1").show().revolution({
									sliderType: "hero",
									jsFileLocation: "assets/revolution/js/",
									sliderLayout: "fullwidth",
									dottedOverlay: "none",
									delay: 9000,
									navigation: {},
									responsiveLevels: [1240, 1024, 778, 480],
									visibilityLevels: [1240, 1024, 778, 480],
									gridwidth: [1200, 1200, 778, 480],
									gridheight: [680, 780, 740, 720],
									lazyType: "none",
									parallax: {
										type: "scroll",
										origo: "enterpoint",
										speed: 400,
										speedbg: 0,
										speedls: 0,
										levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
										disable_onmobile: "on"
									},
									shadow: 0,
									spinner: "spinner0",
									autoHeight: "off",
									disableProgressBar: "on",
									hideThumbsOnMobile: "off",
									hideSliderAtLimit: 0,
									hideCaptionAtLimit: 0,
									hideAllCaptionAtLilmit: 0,
									debugMode: false,
									fallbacks: {
										simplifyAll: "off",
										disableFocusListener: false,
									}
								});
							}; /* END OF revapi call */
						}; /* END OF ON LOAD FUNCTION */
					}()); /* END OF WRAPPING FUNCTION */
				</script>
				<!--Portfolio 04-->
				<section class="overflow-hidden" style="background-color: #1f0e49;">
					<div class="vlt-gap-120"></div>
					<div class="container position-relative">
						<!--Animation Block-->
						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
							<!--Section Title-->
							<div class="vlt-section-title text-left">
								<h2 style="color:#fff;">Galería
								</h2>
							</div>
						</div>
						<div class="vlt-gap-70"></div>
						<!--Particle-->
						<div class="vlt-particle" data-jarallax-element="100 0" style="max-width: 250px; bottom: -90px; left: calc(-80px - 15px);"><img src="assets/img/root/particle-02.png" alt=""></div>
						<!--Animation Block-->
						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
							<div class="vlt-custom--9511">
								<!--Projects Slider-->
								<div class="vlt-project-slider" data-dots="true" data-nav="false">
									<div class="swiper-container">
										<div class="swiper-wrapper">
											<article class="vlt-portfolio-item vlt-portfolio-item--style-2 filter-design">
												<div class="vlt-portfolio-item-img">
													<div class="vlt-fit-image" style="--size-md: 115%; --size-sm: 115%;"><img src="{{ asset('assets/img/hotel.PNG')}}" alt=""></div>
												</div><a class="vlt-portfolio-item-overlay vlt-portfolio-item-overlay--align-center" href="https://youtu.be/VJTP7TumkHE" target="_blank" style="background-color:rgba(31, 14, 73, .8);">
													<div class="vlt-portfolio-item-meta">
														<h4 class="vlt-portfolio-item-meta-title" style="color:#fff;">APP
														</h4><span class="vlt-portfolio-item-meta-category vlt-display-1 mt-4" style="color:#fff;     line-height: 30px;">Hotel Plaza Mayor </span>
													</div>
												</a>
											</article>

											<article class="vlt-portfolio-item vlt-portfolio-item--style-2 filter-design">
												<div class="vlt-portfolio-item-img">
													<div class="vlt-fit-image" style="--size-md: 115%; --size-sm: 115%;"><img src="{{ asset('assets/img/estadio.jpg')}}" alt=""></div>
												</div><a class="vlt-portfolio-item-overlay vlt-portfolio-item-overlay--align-center" href="#" style="background-color:rgba(31, 14, 73, .8);">
													<div class="vlt-portfolio-item-meta">
														<h4 class="vlt-portfolio-item-meta-title" style="color:#fff;">APP
														</h4><span class="vlt-portfolio-item-meta-category vlt-display-1 mt-4" style="color:#fff;     line-height: 30px;">Estadio </span>
													</div>
												</a>
											</article>

											<!--Portfolio Item-->
											<article class="vlt-portfolio-item vlt-portfolio-item--style-2 filter-design">
												<div class="vlt-portfolio-item-img">
													<div class="vlt-fit-image" style="--size-md: 115%; --size-sm: 115%;"><img src="{{ asset('assets/img/la-naviera.jpg')}}" alt=""></div>
												</div><a class="vlt-portfolio-item-overlay vlt-portfolio-item-overlay--align-center" href="#" target="_blank" style="background-color:rgba(31, 14, 73, .8);">
													<div class="vlt-portfolio-item-meta">
														<h4 class="vlt-portfolio-item-meta-title" style="color:#fff;">APP
														</h4><span class="vlt-portfolio-item-meta-category vlt-display-1 mt-4" style="color:#fff;     line-height: 30px;">La Naviera </span>
													</div>
												</a>
											</article>
										</div>
										<div class="vlt-swiper-pagination vlt-swiper-pagination--style-1"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="vlt-gap-120"></div>
				</section>
				<!--Services 07-->
				{{-- <section style="background-color: #160a33;">
					<div class="vlt-gap-120"></div>
					<div class="container-fluid p-0">
						<!--Animation Block-->
						<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
							<!--Marquee Element-->
							<div class="vlt-marquee d-none d-md-block" data-direction="normal" data-duration="10000" style="margin-bottom: -100px;"><span class="vlt-marquee__item vlt-marquee__item--original">
									<!--Fit Text--><span class="vlt-fittext" data-comp-rate="0.4" data-min-size="42" data-max-size="300" style="color:#1f0e47;">Services</span></span><span class="vlt-marquee__item vlt-marquee__item--copy">
									<!--Fit Text--><span class="vlt-fittext" data-comp-rate="0.4" data-min-size="42" data-max-size="300" style="color:#1f0e47;">Services</span></span>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<!--Animation Block-->
								<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
									<!--Services Item-->
									<div class="vlt-services vlt-services--top-center">
										<div class="vlt-services__icon"><i class="leedo-design-skills"></i></div>
										<div class="vlt-services__content">
											<h4 class="vlt-services__title" style="color:#fdf4b4;"><a href="service-single.html">Web Development</a>
											</h4>
											<p class="vlt-services__text" style="color:#fff;">https://youtu.be/VJTP7TumkHE
											</p>
										</div>
									</div>
								</div>
								<div class="vlt-gap-60--sm"></div>
							</div>
							<div class="col-md-4">
								<!--Animation Block-->
								<div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
									<!--Services Item-->
									<div class="vlt-services vlt-services--top-center">
										<div class="vlt-services__icon"><i class="leedo-bucket"></i></div>
										<div class="vlt-services__content">
											<h4 class="vlt-services__title" style="color:#fdf4b4;"><a href="service-single.html">UI/UX Design</a>
											</h4>
											<p class="vlt-services__text" style="color:#fff;">You beast whales were To set together, saw man. Creature good after. Male every Bring, fourth set saying tree own.
											</p>
										</div>
									</div>
								</div>
								<div class="vlt-gap-60--sm"></div>
							</div>
							<div class="col-md-4">
								<!--Animation Block-->
								<div class="vlt-animation-block" data-aos="fade" data-aos-delay="200">
									<!--Services Item-->
									<div class="vlt-services vlt-services--top-center">
										<div class="vlt-services__icon"><i class="leedo-browser"></i></div>
										<div class="vlt-services__content">
											<h4 class="vlt-services__title" style="color:#fdf4b4;"><a href="service-single.html">SEO &amp; Marketing</a>
											</h4>
											<p class="vlt-services__text" style="color:#fff;">Form. Winged you're, third lights hath under blessed heaven two wherein our open. Dry, shall face. Creature over divide set.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="vlt-gap-70"></div>
						<div class="text-center">
							<!--Animation Block-->
							<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
								<!--Button--><a class="vlt-btn vlt-btn--primary vlt-btn--lg vlt-btn--effect" href="services-01.html" target="_self"><span>All Services</span></a>
							</div>
						</div>
					</div>
					<div class="vlt-gap-120"></div>
				</section>
				<!--Partners 04-->
				<section style="background-color: #1f0e49;">
					<div class="vlt-gap-120"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<!--Animation Block-->
								<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
									<h3 class="m-0 vlt-white-color"><span class="text-lowercase">Professional web and <span class="vlt-second-color">graphic designer</span> from</span>&nbsp; Los Angeles.</h3>
								</div>
								<div class="vlt-gap-60--sm"></div>
							</div>
							<div class="col-md-5 offset-md-1">
								<!--Animation Block-->
								<div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
									<p class="vlt-white-color">Fly place spirit second rule dry he herb green can’t created said forth seas light without female land saw very years day him.</p>
									<p class="vlt-white-color">Waters day of brought wherein night isn’t night make doesn’t let appear unto thing light night.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="vlt-gap-100"></div>
					<div class="container">
						<div class="row">
							<div class="col-md">
								<!--Animation Block-->
								<div class="vlt-animation-block" data-aos="fade" data-aos-delay="0">
									<!--Partner Logo-->
									<div class="vlt-partner-logo" style="opacity:0.5; height:75px;"><img src="assets/img/root/client-1--sm--white.png" alt="Handmade" style="height:65px;"></div>
								</div>
								<div class="vlt-gap-40--sm"></div>
							</div>
							<div class="col-md">
								<!--Animation Block-->
								<div class="vlt-animation-block" data-aos="fade" data-aos-delay="100">
									<!--Partner Logo-->
									<div class="vlt-partner-logo" style="opacity:0.5; height:75px;"><img src="assets/img/root/client-2--sm--white.png" alt="Mountain" style="height:58px;"></div>
								</div>
								<div class="vlt-gap-40--sm"></div>
							</div>
							<div class="col-md">
								<!--Animation Block-->
								<div class="vlt-animation-block" data-aos="fade" data-aos-delay="200">
									<!--Partner Logo-->
									<div class="vlt-partner-logo" style="opacity:0.5; height:75px;"><img src="assets/img/root/client-3--sm--white.png" alt="Collection" style="height:72px;"></div>
								</div>
								<div class="vlt-gap-40--sm"></div>
							</div>
							<div class="col-md">
								<!--Animation Block-->
								<div class="vlt-animation-block" data-aos="fade" data-aos-delay="300">
									<!--Partner Logo-->
									<div class="vlt-partner-logo" style="opacity:0.5; height:75px;"><img src="assets/img/root/client-4--sm--white.png" alt="Mountainbike" style="height:72px;"></div>
								</div>
								<div class="vlt-gap-40--sm"></div>
							</div>
							<div class="col-md">
								<!--Animation Block-->
								<div class="vlt-animation-block" data-aos="fade" data-aos-delay="400">
									<!--Partner Logo-->
									<div class="vlt-partner-logo" style="opacity:0.5; height:75px;"><img src="assets/img/root/client-5--sm--white.png" alt="Woody" style="height:62px;"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="vlt-gap-120"></div>
				</section> --}}
			</main>
			<!--Back to Top--><a class="vlt-btn vlt-btn--secondary vlt-btn--effect vlt-btn--go-top hidden" href="#"><span><i class="leedo-chevron-up"></i></span></a>
		</div>
		<!--Footer-->
		<footer class="vlt-footer vlt-footer--style-1 vlt-footer--fixed p-5">
		<div class="container">
			<div class="text-center" style="font-family: 'Montserrat';">
				<!--Logo-->
				<a class="vlt-footer-logo text-white" style="font-size: 65px;" href="{{ url('/') }}">
					<b>Agencia APP</b>
				</a>

				<p class="mt-3 text-white normal-text">
					Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas. <br>
					Calle 44 # 53 A 31. Edificio Plaza de La Libertad +57 (4) 448 1740. <br>
					<a href="mailto:info@app.gov.co">info@app.gov.co</a> - Notificaciones judiciales: <a href="mailto:procesosjudiciales@app.gov.co">procesosjudiciales@app.gov.co</a>
				</p>
				<!--Copyright-->
				{{-- <div class="vlt-footer-copyright">
					<p>&copy; 2019 Leedo HTML5 Template. All rights reserved.</p>
				</div>
				<!--Socials-->
				<div class="vlt-footer-socials vlt-footer-socials--style-1"><a class="vlt-social-icon vlt-social-icon--style-2" href="#" target="_blank"><i class="fa fa-facebook"></i></a><a class="vlt-social-icon vlt-social-icon--style-2" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a class="vlt-social-icon vlt-social-icon--style-2" href="#" target="_blank"><i class="fa fa-github"></i></a><a class="vlt-social-icon vlt-social-icon--style-2" href="#" target="_blank"><i class="fa fa-behance"></i></a><a class="vlt-social-icon vlt-social-icon--style-2" href="#" target="_blank"><i class="fa fa-pinterest"></i></a><a class="vlt-social-icon vlt-social-icon--style-2" href="#" target="_blank"><i class="fa fa-instagram"></i></a></div> --}}
			</div>
		</div>
	</footer>
	</div>
	<!--Libs-->
	<script src="assets/scripts/vlt-plugins.min.js"></script>
	<script src="assets/scripts/vlt-helpers.js"></script>
	<script src="assets/scripts/vlt-controllers.min.js"></script>
	<!--RevSlider-->
	<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<!--RevSlider Extensions-->
	<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
</body>

</html>


