<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="stylesheet" href="{{ asset('assets/img/favicon.png') }}">

  <link rel="stylesheet" href="{{ asset('assets/img/apple-touch-icon.png') }}">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">


  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/css/geografico.css') }}">

</head>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

     <a href="{{ url('/') }}">
     <img class="logo me-auto" src="https://app.gov.co/assets/img/Proyectos/logo-landing.png" style=" width: 200px; height: 90px;">
     </a>
   


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ route('user.projects.sig')}}">Inicio</a></li>
          <li><a class="nav-link scrollto" href="{{ route('SIG.index')}}">Expediente geografico</a></li>
          <li><a class="nav-link scrollto" href="{{ route('user.projects.SigDatos')}}">Datos abiertos</a></li>
          <!-- <li><a class="nav-link scrollto " href="{{ route('user.projects.SigServicios')}}">Servicios</a></li> -->
          <li><a class="nav-link scrollto " href="{{ route('user.projects.SigContacto')}}">Contacto</a></li>   
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


