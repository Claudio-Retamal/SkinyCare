@include('layouts.header')

<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="title-holder">
                        <div class="title-holder-cell text-left">
                            <h1 class="page-title">Contacto</h1>
                            {{--   <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Contact</li>
                            </ol> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section padding_layout_1">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="form_section">
                    <form class="form_contant" action="index.html">
                        <fieldset>
                            <div class="row">
                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="field_custom" placeholder="Websire URL" type="text" required="">
                                </div>
                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="field_custom" placeholder="Your name" type="text" required="">
                                </div>
                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="field_custom" placeholder="Email adress" type="email"
                                        required="">
                                </div>
                                <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="field_custom" placeholder="Phone number" type="text"
                                        required="">
                                </div>
                                <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="field_custom" placeholder="Messager" required=""></textarea>
                                </div>
                                <div class="center"><a class="btn main_bt" href="#">SUBMIT NOW</a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

            <div class="col-md-5">
              <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps systems</a></iframe></div>
            </div>
        </div>


    </div>
</div>

@include('layouts.footer')
