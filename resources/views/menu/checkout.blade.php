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
<div class="section padding_layout_1 checkout_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="full">
                    <div class="tab-info login-section">
                        <p>Returning customer? <a href="#login" class="" data-toggle="collapse">Click here to
                                login</a></p>
                    </div>
                    <div id="login" class="collapse">
                        <div class="login-form-checkout">
                            <p>If you have shopped with us before, please enter your details in the boxes below. If you
                                are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                            <form action="#">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label for="username">Username or email <span
                                                    class="required">*</span></label>
                                            <input class="input-text" name="username" id="username" required=""
                                                type="text">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label for="password">Password <span class="required">*</span></label>
                                            <input class="input-text" name="password" id="password" required=""
                                                type="password">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 btn-login">
                                            <button class="bt_main">Login</button>
                                            <span class="remeber">
                                                <input type="checkbox">
                                                Remember me</span>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="tab-info coupon-section">
                        <p>Have a coupon? <a href="#cupon" class="" data-toggle="collapse">Click here to enter
                                your code</a></p>
                    </div>
                    <div id="cupon" class="collapse">
                        <div class="coupen-form">
                            <form action="#">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <input class="input-text" name="coupon" placeholder="Coupon code"
                                                id="coupon" required="" type="text">
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <button class="bt_main">Login</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="checkout-form">
                    <form action="#">
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <label>First name <span class="red">*</span></label>
                                        <input name="fn" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <label>Last name <span class="red">*</span></label>
                                        <input name="ln" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-field">
                                        <label>Company name</label>
                                        <input name="cm" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-field">
                                        <label>Country</label>
                                        <select name="cn">
                                            <option value="AF">Afghanistan</option>

                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                            <option value="VN">Viet Nam</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-field">
                                        <label>Address <span class="red">*</span></label>
                                        <textarea name="ad"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-field">
                                        <label>Town / City <span class="red">*</span></label>
                                        <input name="tc" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-field">
                                        <label>State / County <span class="red">*</span></label>
                                        <input name="sc" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-field">
                                        <label>Postcode / ZIP <span class="red">*</span></label>
                                        <input name="pz" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <label>Phone <span class="red">*</span></label>
                                        <input name="ph" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <label>Email address <span class="red">*</span></label>
                                        <input name="em" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input name="ck" type="checkbox">
                                        <span class="crte-ac">Create an account?</span>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="shopping-cart-cart">
                    <table>
                        <tbody>
                            <tr class="head-table">
                                <td>
                                    <h5>Cart Totals</h5>
                                </td>
                                <td class="text-right"></td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Subtotal</h4>
                                </td>
                                <td class="text-right">
                                    <h4>$42.00</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Estimated shipping</h5>
                                </td>
                                <td class="text-right">
                                    <h4>$6.00</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Total</h3>
                                </td>
                                <td class="text-right">
                                    <h4>$48.00</h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="payment-form">
                    <div class="col-xs-12 col-md-12">
                        <!-- CREDIT CARD FORM STARTS HERE -->
                        <div class="panel panel-default credit-card-box">
                            <div class="panel-heading display-table">
                                <div class="display-tr">
                                    <h3 class="panel-title display-td">Payment Details</h3>
                                    <div class="display-td"> <img class="img-responsive pull-right"
                                            src="images/it_service/accepted.png" alt="#"> </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form id="payment-form" method="POST" action="index.html">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-field">
                                                <label>Card Number</label>
                                                <div class="form-field cardNumber">
                                                    <input name="cardNumber" placeholder="Valid Card Number"
                                                        required="" type="tel">
                                                    <span class="input-group-addon"><i
                                                            class="fa fa-credit-card"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-7">
                                            <div class="form-field">
                                                <label><span class="hidden-xs">Expiration</span><span
                                                        class="visible-xs-inline">EXP</span> Date</label>
                                                <input name="cardExpiry" placeholder="MM / YY" required=""
                                                    type="tel">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-5 pull-right">
                                            <div class="form-field">
                                                <label>CV Code</label>
                                                <input name="cardCVC" placeholder="CVC" required=""
                                                    type="tel">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-field">
                                                <label>Coupon Code</label>
                                                <input name="couponCode" required="" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 payment-bt">
                                            <div class="center">
                                                <button class="bt_main">Start Subscription</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- CREDIT CARD FORM ENDS HERE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
