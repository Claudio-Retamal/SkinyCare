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
                                            <li><a href="{{ url('Individuales-Masculino') }}">Certificaciones</a></li>
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

        <div class="container-xxl d-flex align-items-md-center">
            <form class="bd-search position-relative me-auto">
              <span class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;"><input type="search" class="form-control ds-input" id="search-input" placeholder="Search docs..." aria-label="Search docs for..." autocomplete="off" data-bd-docs-version="5.0" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="ds-dropdown-menu" role="listbox" id="algolia-autocomplete-listbox-0" style="position: absolute; top: 100%; z-index: 100; display: none; left: 0px; right: auto;"><div class="ds-dataset-1"></div></span></span>
            </form>
        
            <div class="dropdown ms-3">
          <button class="btn btn-bd-light dropdown-toggle" id="bd-versions" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">
            <span class="d-none d-lg-inline">Bootstrap</span> v5.0
          </button>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-versions">
            <li><h6 class="dropdown-header">v5 releases</h6></li>
            <li>
              <a class="dropdown-item" href="https://getbootstrap.com/docs/5.2/components/navbar/">
                Latest (5.2.x)
              </a>
            </li>
            <li>
                <a class="dropdown-item" href="https://getbootstrap.com/docs/5.1/components/navbar/">v5.1.3</a>
            </li>
            <li>
                <a class="dropdown-item current" aria-current="true" href="/docs/5.0/components/navbar/">v5.0.2</a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://getbootstrap.com/docs/4.6/">v4.6.x</a></li>
            <li><a class="dropdown-item" href="https://getbootstrap.com/docs/3.4/">v3.4.1</a></li>
            <li><a class="dropdown-item" href="https://getbootstrap.com/2.3.2/">v2.3.2</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/docs/versions/">All versions</a></li>
          </ul>
        </div>
        
        
            <button class="btn bd-sidebar-toggle d-md-none py-0 px-1 ms-3 order-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-expand" fill="currentColor" viewBox="0 0 16 16">
          <title>Expand</title>
          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zM7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10z"></path>
        </svg>
        
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-collapse" fill="currentColor" viewBox="0 0 16 16">
          <title>Collapse</title>
          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zm7-8a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 4.293V.5A.5.5 0 0 1 8 0zm-.5 11.707l-1.146 1.147a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 11.707V15.5a.5.5 0 0 1-1 0v-3.793z"></path>
        </svg>
        
            </button>
          </div>
         
    </header>
