<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>SkinyCare - Fototerapia y Fotodepilación</title>
    <meta name="author" content="">
    <!-- site metas -->
    <!-- site icons -->
    <link rel="icon" href="assets-2/images/fevicon/fevicon.png" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets-2/css/bootstrap.min.css" />
    <!-- Site css -->
    <link rel="stylesheet" href="assets-2/css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="assets-2/css/responsive.css" />
    <!-- colors css -->
    <link rel="stylesheet" href="assets-2/css/colors1.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="assets-2/dists/css/custom.css" />
    <!-- wow Animation css -->
    <link rel="stylesheet" href="assets-2/css/animate.css" />
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="assets-2/revolution/css/settings.css" />
    <link rel="stylesheet" type="text/css" href="assets-2/revolution/css/layers.css" />
    <link rel="stylesheet" type="text/css" href="assets-2/revolution/css/navigation.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <link rel="stylesheet" type="text/css" href="assets-2/css/dropdown.css">

    <link rel="stylesheet" href="assets-2/css/style-wsp.css">
</head>

<body id="default_theme" class="it_service">
    <!-- loader -->
    <div class="bg_load"> <img class="loader_animation" src="assets-2/images/loaders/loader_1.png" alt="#" />
    </div>
    <!-- end loader -->
    <!-- header -->
    <header id="default_header" class="header_style_1">
        <!-- header top -->
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="full">
                            <div class="topbar-left">
                                <ul class="list-inline">
                                    <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span
                                            class="topbar-hightlight">540 Lorem Ipsum New York, AB 90218</span> </li>
                                    <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span
                                            class="topbar-hightlight"><a
                                                href="mailto:info@yourdomain.com">info@yourdomain.com</a></span> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 right_section_header_top">
                        <div class="float-left">
                            <div class="social_icon">
                                <ul class="list-inline">
                                    <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook"
                                            target="_blank"></a></li>
                                    <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+"
                                            target="_blank"></a></li>
                                    <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter"
                                            target="_blank"></a></li>
                                    <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn"
                                            target="_blank"></a></li>
                                    <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram"
                                            target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="float-right">
                            <div class="make_appo"> <a class="btn white_btn" href="make_appointment.html">Mas info
                                </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header top -->
        <!-- header bottom -->
        <div class="header_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <!-- logo start -->
                        <div class="logo"> <a href="it_home.html"><img src="assets-2/images/logos/logo-min.png"
                                    alt="logo" /></a> </div>
                        <!-- logo end -->
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <!-- menu start -->
                        <div class="menu_side">
                            <div id="navbar_menu">
                                <ul class="first-ul">
                                    <li> <a class="active" href="it_home.html">Inicio</a>
                                        <ul>
                                            <li><a href="it_home.html">It Home Page</a></li>
                                            <li><a href="it_home_dark.html">It Dark Home Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="it_blog.html">Nosotros</a>
                                        <ul>
                                            <li><a href="{{ url('') }}">Nuestra Tecnología</a></li>
                                            <li><a href="{{ url('Individuales-Masculina') }}">Certificaciones</a></li>
                                        </ul>
                                    </li>


                                    <li class="nav-item dropend">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Servicios
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="it_blog.html">Fotodepilación Masculina</a>
                                                <ul>
                                                    <li><a href="{{ url('Promocion-Masculina') }}">Promociónes</a></li>
                                                    <li><a href="{{ url('Individuales-Masculino') }}">Precios
                                                            Individuales</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="it_blog.html">Fotodepilación Femenina</a>
                                                <ul>
                                                    <li><a href="{{ url('Promocion-Femenina') }}">Promociónes</a></li>
                                                    <li><a href="{{ url('Individuales-Femenino') }}">Precios
                                                            Individuales</a></li>
                                                </ul>
                                            </li>

                                    </li>
                                </ul>
                                <li><a href="{{ url('Tratamientos') }}">Fototerapia</a></li>

                                <li><a href="{{ url('Contacto') }}">Contacto</a></li>
                            </div>

                        </div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header bottom end -->
    </header>