@include('layouts.header')
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="title-holder">
                        <div class="title-holder-cell text-left">
                            <h1 class="page-title">Shopping Cart</h1>
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Shopping Cart</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section padding_layout_1 product_list_main">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    @foreach ($servicios as $servicio)
                        <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
                            <div class="product_list">
                                <div class="product_img"> <img class="img-responsive"
                                        src="{{ asset($servicio->url_imagen) }}" alt=""> </div>
                                <div class="product_detail_btm">
                                    <div class="center">
                                        <h4><a href="it_shop_detail.html">{{ $servicio->nombre }}</a></h4>
                                    </div>
                                    <div class="starratin">
                                        <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i
                                                class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                                aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                                class="fa fa-star-o" aria-hidden="true"></i> </div>
                                    </div>
                                    <div class="product_price">
                                        <p><span class="old_price">{{ $servicio->precio_min_sesion }}</span> – <span
                                                class="new_price">{{ $servicio->precio_min_sesion }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3">
                <div class="side_bar">


                    <div class="side_bar_blog">
                        <h4>OUR SERVICE</h4>
                        <div class="categary">
                            <ul>
                                <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i>Inicio</a>
                                </li>
                                <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i>Noostros
                                    </a></li>
                                <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i>Servicios
                                    </a></li>
                                <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Fotorerapia
                                    </a></li>
                                <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Contacto
                                    </a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="side_bar_blog">
                        <h4>TAG</h4>
                        <div class="tags">
                            <ul>
                                <li><a href="#">Bootstrap</a></li>
                                <li><a href="#">HTML5</a></li>
                                <li><a href="#">Wordpress</a></li>
                                <li><a href="#">Bootstrap</a></li>
                                <li><a href="#">HTML5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="section padding_layout_1 product_list_main">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    @foreach ($servicios as $servicio)
<div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
                            <div class="product_list">
                                <div class="product_img"> <img class="img-responsive"
                                        src="{{ asset($servicio->url_imagen) }}" alt=""> </div>
                                <div class="product_detail_btm">
                                    <div class="center">
                                        <h4><a href="it_shop_detail.html">{{ $servicio->nombre }}</a></h4>
                                    </div>
                                    <div class="starratin">
                                        <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i
                                                class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                                aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                                class="fa fa-star-o" aria-hidden="true"></i> </div>
                                    </div>
                                    <div class="product_price">
                                        <p><span class="old_price">{{ $servicio->precio_min_sesion }}</span> – <span
                                                class="new_price">{{ $servicio->precio_max_sesion }}</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col text-center">
                                        <a href="{{ url('Carro') }}" class="btn btn-info">Comprar</a>

                                    </div>
                                </div>
                            </div>
                        </div>
@endforeach
                </div>
            </div>


            <div class="col-md-3">
                <div class="side_bar">

                    <div class="side_bar_blog">
                        <h4></h4>
                        <div class="categary">
                            <ul>
                                <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i>Servicios
                                        Femeninos</a></li>
                                <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i>Servicios
                                        Masculinos</a></li>
                                <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Fototerapia</a>
                                </li>

                            </ul>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div> -->

@include('layouts.footer')
