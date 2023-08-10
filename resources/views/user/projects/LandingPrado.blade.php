<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Prado Patrimonial</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="{{ asset('prado/lib/animate/animate.min.css')}}">
        <link rel="stylesheet" href="{{ asset('prado/lib/owlcarousel/assets/owl.carousel.min.css')}}">

        <!-- Customized Bootstrap Stylesheet -->
        <link rel="stylesheet" href="{{ asset('prado/css/bootstra.css')}}">

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="{{ asset('prado/css/stylo.css')}}">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <div class="container-fluid bg-primary">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                <a href="{{ url('/') }}" class="navbar-brand">
                <img class="logo me-auto" src="{{ asset('assets/img/Proyectos/logo-landing.png')}}" style=" width: 200px; height: 90px;">
                </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav ms-auto mx-xl-auto p-0">
                            <a href="#inicio" class="nav-item nav-link active text-secondary">Inicio</a>
                            <a href="#historia" class="nav-item nav-link">Historia</a>
                            <a href="#recorre" class="nav-item nav-link">Recorre</a>
                            <a href="#eventos" class="nav-item nav-link">Eventos</a>
                            <div class="nav-item dropdown">
                                <a href="#inmo" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Inmobiliaria</a>
                                <div class="dropdown-menu rounded">
                                    <a href="#" class="dropdown-item">BIC</a>
                                    <a href="#" class="dropdown-item">Portal</a>
                                </div>
                            </div>
                            <a href="#galeria" class="nav-item nav-link">Galería</a>
                        
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="container-fluid px-0" id="inicio">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                    <img src="{{ asset('assets/img/Galeria/prado/6.jpg')}}" class="img-fluid" alt="First slide">
                        <!-- <img src="{{ asset('prado/img/carousel-1.jpg') }}" class="img-fluid" alt="First slide"> -->
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h1 class="text-white display-1 mb-4 animated fadeInRight">¡Bienvenido al Barrio Patrimonial Prado!</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Descubre la belleza histórica y cultural de este encantador rincón lleno de tradiciones y arquitectura única. ¡Explora la historia que vive en cada calle y edificación!</p>
                                <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Opción 1</button></a>
                                <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Opción 2</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/Galeria/prado/5.jpg')}}" class="img-fluid" alt="Second slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h1 class="text-white display-1 mb-4 animated fadeInRight">¡Bienvenido al Barrio Patrimonial Prado!</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Descubre la belleza histórica y cultural de este encantador rincón lleno de tradiciones y arquitectura única. ¡Explora la historia que vive en cada calle y edificación!</p>
                                <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Opción 1</button></a>
                                <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Opción 2</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- About Start -->
        <div class="container-fluid py-5 my-5" id="historia">
            <div class="container pt-5">
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                        <div class="h-100 position-relative">
                            <img src="{{ asset('assets/img/Galeria/prado/1.jpg')}}" class="w-75 rounded" alt="" style="margin-bottom: 25%;">
                            <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                                <img src="{{ asset('assets/img/Galeria/prado/1.jpg')}}" class="w-100 rounded" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                        <h5 class="text-primary">Historia</h5>
                        <h1 class="mb-4">El barrio Prado </h1>
                        <p>Es un barrio patrimonial de Medellín debido a su importancia histórica, cultural y arquitectónica. El barrio fue fundado en 1926 por el industrial Ricardo Olano, quien compró un terreno de 100 hectáreas al norte de la ciudad y lo loteó para construir viviendas de lujo. El barrio se inspiró en el movimiento de la ciudad jardín, que buscaba crear barrios residenciales con espacios verdes y áreas comunes.</p>
                        <p class="mb-4">Las primeras casas del barrio Prado fueron construidas en los estilos Art Deco, Neocolonial y Modernista. Estas casas fueron habitadas por las familias más ricas de Medellín, que buscaban un lugar exclusivo y tranquilo para vivir. El barrio Prado se convirtió rápidamente en uno de los barrios más exclusivos de Medellín. En la década de 1930, el barrio fue el hogar de varios personajes importantes de la historia de Colombia, como el escritor Gabriel García Márquez y el político Jorge Eliecer Gaitán.</p>
                        <a href="" class="btn btn-secondary rounded-pill px-5 py-3 text-white">Más detalles</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Project Start -->
        <div class="container-fluid project py-5 mb-5" id="recorre">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Recorre</h5>
                    <h1>Explora las casas patrimoniales a traves de tecnología 3D</h1>
                </div>
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/Galeria/prado/1.jpg')}}" class="w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Casa 1</h4>
                                        <p class="m-0 text-white">Casa patrimonial</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/Galeria/prado/2.jpg')}}" class="w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Casa 2</h4>
                                        <p class="m-0 text-white">Casa patrimonial</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/Galeria/prado/7.jpg')}}" class="w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Casa 3</h4>
                                        <p class="m-0 text-white">Casa patrimonial</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/Galeria/prado/4.jpg')}}" class="w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Casa 4</h4>
                                        <p class="m-0 text-white">Casa patrimonial</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/Galeria/prado/5.jpg')}}" class="w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Casa 5</h4>
                                        <p class="m-0 text-white">Casa patrimonial</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/Galeria/prado/6.jpg')}}" class="w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Casa 6</h4>
                                        <p class="m-0 text-white">Casa patrimonial</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project End -->

         <!-- Team Start -->
         <div class="container-fluid py-5 mb-5 team" id="eventos">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Eventos</h5>
                    <h1>Conoce todos los eventos disponibles en el mes del patrimonio</h1>
                </div>
                <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{ asset('assets/img/Galeria/prado/6.jpg')}}" class="w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Recorrido</h4>
                                    <p class="m-0">Evento Patrimonial</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{ asset('assets/img/Galeria/prado/6.jpg')}}" class="w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Concierto</h4>
                                    <p class="m-0">Evento Patrimonial</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{ asset('assets/img/Galeria/prado/6.jpg')}}" class="w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Votación</h4>
                                    <p class="m-0">Evento Patrimonial</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Services Start -->
        <div class="container-fluid services py-5 mb-5" id="inmo">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Inmobiliaria</h5>
                    <h1>Conoce sobre los bienes inmuebles patrimoniales</h1>
                </div>
                <div class="row g-5 services-inner">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fa fa-code fa-7x mb-4 text-primary"></i>
                                    <h4 class="mb-3">Proyecto 1</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                    <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Conocer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fa fa-file-code fa-7x mb-4 text-primary"></i>
                                    <h4 class="mb-3">Proyecto 2</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                    <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Conocer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fa fa-external-link-alt fa-7x mb-4 text-primary"></i>
                                    <h4 class="mb-3">Proyecto 3</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                    <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Conocer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Project Start -->
        <div class="container-fluid project py-5 mb-5" id="galeria">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Galería</h5>
                    <h1>Explora la galeria del barrio patrimonial</h1>
                </div>
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/Galeria/prado/1.jpg')}}" class="w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Casa 1</h4>
                                        <p class="m-0 text-white">Casa patrimonial</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/Galeria/prado/2.jpg')}}" class="w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Casa 2</h4>
                                        <p class="m-0 text-white">Casa patrimonial</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/Galeria/prado/7.jpg')}}" class="w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Casa 3</h4>
                                        <p class="m-0 text-white">Casa patrimonial</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/Galeria/prado/4.jpg')}}" class="w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Casa 4</h4>
                                        <p class="m-0 text-white">Casa patrimonial</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/Galeria/prado/5.jpg')}}" class="w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Casa 5</h4>
                                        <p class="m-0 text-white">Casa patrimonial</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/Galeria/prado/6.jpg')}}" class="w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Casa 6</h4>
                                        <p class="m-0 text-white">Casa patrimonial</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project End -->

        <!-- Contact Start -->
        <div class="container-fluid py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Contáctanos</h5>
                    <h1 class="mb-3">Conoce nuestros canales de atención</h1>
                    <p class="mb-2">Tambien puedes enviarnos tus comentarios.</p>
                </div>
                <div class="contact-detail position-relative p-5">
                    <div class="row g-5 mb-5 justify-content-center">
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Dirección</h4>
                                    <a href="#"class="h5">Carrera 55 # 42-180 Local 203 Edificio Plaza de La Libertad</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Teléfono</h4>
                                    <a class="h5" href="tel:+0123456789" target="_blank">+57 604 448 1740</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fa fa-envelope text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Correo</h4>
                                    <a class="h5" href="mailto:info@app.gov.co" target="_blank">info@app.gov.co</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                            <div class="p-5 h-100 rounded contact-map">
                                <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3966.1453795305424!2d-75.57708752500947!3d6.244564343743791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x8e4429ab2970b791%3A0x95b171797472ba8a!2sPlaza%20de%20La%20Libertad%2C%20Cra.%2054%20%2342188%2C%20La%20Candelaria%2C%20Medell%C3%ADn%2C%20La%20Candelaria%2C%20Medell%C3%ADn%2C%20Antioquia!3m2!1d6.2458526999999995!2d-75.5746612!5e0!3m2!1ses-419!2sco!4v1691503297099!5m2!1ses-419!2sco" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                            <div class="p-5 rounded contact-form">
                                <div class="mb-4">
                                    <input type="text" class="form-control border-0 py-3" placeholder="Nombre">
                                </div>
                                <div class="mb-4">
                                    <input type="email" class="form-control border-0 py-3" placeholder="Correo electrónico">
                                </div>
                                <div class="mb-4">
                                    <input type="text" class="form-control border-0 py-3" placeholder="Asunto">
                                </div>
                                <div class="mb-4">
                                    <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" placeholder="Descripción"></textarea>
                                </div>
                                <div class="text-start">
                                    <button class="btn bg-primary py-3 px-5" type="button">Enviar mensaje</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
         <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
            <div class="container pt-5 pb-4">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <a href="">
                            <h1 class=" fw-bold d-block">Agencia<span class="text-secondary">APP</span> </h1>
                        </a>
                        <p class="mt-4 text-light">La Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas – APP-, es un ente con carácter descentralizado adscrito a la Alcaldía de Medellín.</p>
                        <div class="d-flex hightech-link">
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-twitter text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="#" class="h3 text-secondary">Horario de atención</a>
                        <div class="mt-4 d-flex flex-column short-link">
                            <a href="" class="mb-2 "><i class="fas fa-angle-right text-secondary me-2"></i>Lunes - Jueves: 7:30 AM a 12:30 PM y de 1:30 PM a 5:30 PM</a>
                            <a href="" class="mb-2 "><i class="fas fa-angle-right text-secondary me-2"></i>Viernes: 7:30 AM a 12:30 PM y de 1:30 PM a 4:30 PM</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="#" class="h3 text-secondary">Contáctanos</a>
                        <div class=" mt-4 d-flex flex-column contact-link">
                            <a href="#" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i> Medellin / Antioquia</a>
                            <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i> +57 604 448 1740</a>
                            <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i> info@app.gov.co</a>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up "></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('prado/lib/wow/wow.min.js')}}"></script>
        <script src="{{ asset('prado/lib/easing/easing.min.js')}}"></script>
        <script src="{{ asset('prado/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{ asset('prado/lib/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('prado/js/main.js')}}"></script>
    </body>

</html>