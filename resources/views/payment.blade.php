<!DOCTYPE html>
<html>

<head>
    <meta charset="shift_jis">
    <!-- Basic -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <title>Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.css')}}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('public/css/responsive.css')}}" rel="stylesheet" />


    <!--Shoping cart-->
    <link rel="stylesheet" href="{{asset('public/css/shop.css')}}" type="text/css" />
    <!--//Shoping cart-->
    <!--checkout-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/checkout.css')}}">
    <!--//checkout-->
    <link href="{{asset('public/css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css' />

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('Common/Header')
        <!-- end header section -->
    </div>

    <!-- top Products -->
    <section class="checkout py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="ads-grid_shop">
                <div class="shop_inner_inf">
                    <div class="privacy about">
                        <h3>Pay<span>ment</span></h3>
                        <!--/tabs-->
                        <div class="responsive_tabs">
                            <div id="horizontalTab">
                                <ul class="resp-tabs-list">
                                    <!--<li>Cash on delivery (COD)</li>-->
                                    <!--<li>Credit/Debit</li>-->
                                    <!--<li>Net Banking</li>-->
                                    <li>Payment With Stripe Gateway</li>
                                </ul>
                                <div class="resp-tabs-container">
                                    <!--/tab_one-->
                                    <!--<div class="tab1">-->
                                    <!--    <div class="pay_info">-->
                                    <!--        <div class="vertical_post check_box_agile">-->
                                    <!--            <h5>COD</h5>-->
                                    <!--            <div class="checkbox">-->
                                    <!--                <div class="check_box_one cashon_delivery">-->
                                    <!--                    <label class="anim">-->
                                    <!--                        <input type="checkbox" class="checkbox">-->
                                    <!--                        <span> We also accept Credit/Debit card on delivery. Please-->
                                    <!--                            Check with the agent.</span>-->
                                    <!--                    </label>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--//tab_one-->
                                    <!--<div class="tab2">-->
                                    <!--    <div class="pay_info">-->
                                    <!--        <form action="#" method="post" class="creditly-card-form agileinfo_form">-->
                                    <!--            <section class="creditly-wrapper wthree, w3_agileits_wrapper">-->
                                    <!--                <div class="credit-card-wrapper">-->
                                    <!--                    <div class="first-row form-group">-->
                                    <!--                        <div class="controls">-->
                                    <!--                            <label class="control-label">Name on Card</label>-->
                                    <!--                            <input class="billing-address-name form-control"-->
                                    <!--                                type="text" name="name" placeholder="John Smith">-->
                                    <!--                        </div>-->
                                    <!--                        <div class="w3_agileits_card_number_grids">-->
                                    <!--                            <div class="w3_agileits_card_number_grid_left">-->
                                    <!--                                <div class="controls">-->
                                    <!--                                    <label class="control-label">Card Number</label>-->
                                    <!--                                    <input-->
                                    <!--                                        class="number credit-card-number form-control"-->
                                    <!--                                        type="text" name="number"-->
                                    <!--                                        inputmode="numeric" autocomplete="cc-number"-->
                                    <!--                                        autocompletetype="cc-number"-->
                                    <!--                                        x-autocompletetype="cc-number"-->
                                    <!--                                        placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">-->
                                    <!--                                </div>-->
                                    <!--                            </div>-->
                                    <!--                            <div class="w3_agileits_card_number_grid_right">-->
                                    <!--                                <div class="controls">-->
                                    <!--                                    <label class="control-label">CVV</label>-->
                                    <!--                                    <input class="security-code form-control" Â·-->
                                    <!--                                        inputmode="numeric" type="text"-->
                                    <!--                                        name="security-code"-->
                                    <!--                                        placeholder="&#149;&#149;&#149;">-->
                                    <!--                                </div>-->
                                    <!--                            </div>-->
                                    <!--                            <div class="clear"> </div>-->
                                    <!--                        </div>-->
                                    <!--                        <div class="controls">-->
                                    <!--                            <label class="control-label">Expiration Date</label>-->
                                    <!--                            <input class="expiration-month-and-year form-control"-->
                                    <!--                                type="text" name="expiration-month-and-year"-->
                                    <!--                                placeholder="MM / YY">-->
                                    <!--                        </div>-->
                                    <!--                    </div>-->
                                    <!--                    <button class="submit"><span>Make a payment </span></button>-->
                                    <!--                </div>-->
                                    <!--            </section>-->
                                    <!--        </form>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="tab3">-->
                                    <!--    <div class="pay_info">-->
                                    <!--        <div class="vertical_post">-->
                                    <!--            <form action="#" method="post">-->
                                    <!--                <h5>Select From Popular Banks</h5>-->
                                    <!--                <div class="swit-radio">-->
                                    <!--                    <div class="check_box_one">-->
                                    <!--                        <div class="radio_one"> <label><input type="radio"-->
                                    <!--                                    name="radio" checked=""><i></i>Syndicate-->
                                    <!--                                Bank</label> </div>-->
                                    <!--                    </div>-->
                                    <!--                    <div class="check_box_one">-->
                                    <!--                        <div class="radio_one"> <label><input type="radio"-->
                                    <!--                                    name="radio"><i></i>Bank of Baroda</label>-->
                                    <!--                        </div>-->
                                    <!--                    </div>-->
                                    <!--                    <div class="check_box_one">-->
                                    <!--                        <div class="radio_one"> <label><input type="radio"-->
                                    <!--                                    name="radio"><i></i>Canara Bank</label> </div>-->
                                    <!--                    </div>-->
                                    <!--                    <div class="check_box_one">-->
                                    <!--                        <div class="radio_one"> <label><input type="radio"-->
                                    <!--                                    name="radio"><i></i>ICICI Bank</label> </div>-->
                                    <!--                    </div>-->
                                    <!--                    <div class="check_box_one">-->
                                    <!--                        <div class="radio_one"> <label><input type="radio"-->
                                    <!--                                    name="radio"><i></i>State Bank Of India</label>-->
                                    <!--                        </div>-->
                                    <!--                    </div>-->
                                    <!--                    <div class="clearfix"></div>-->
                                    <!--                </div>-->
                                    <!--                <h5>Or SELECT OTHER BANK</h5>-->
                                    <!--                <div class="section_room_pay">-->
                                    <!--                    <select class="year">-->
                                    <!--                        <option value="">=== Other Banks ===</option>-->
                                    <!--                        <option value="ALB-NA">Allahabad Bank NetBanking</option>-->
                                    <!--                        <option value="ADB-NA">Andhra Bank</option>-->
                                    <!--                        <option value="BBK-NA">Bank of Bahrain and Kuwait NetBanking-->
                                    <!--                        </option>-->
                                    <!--                        <option value="BBC-NA">Bank of Baroda Corporate NetBanking-->
                                    <!--                        </option>-->
                                    <!--                        <option value="BBR-NA">Bank of Baroda Retail NetBanking-->
                                    <!--                        </option>-->
                                    <!--                        <option value="BOI-NA">Bank of India NetBanking</option>-->
                                    <!--                        <option value="BOM-NA">Bank of Maharashtra NetBanking-->
                                    <!--                        </option>-->
                                    <!--                        <option value="CSB-NA">Catholic Syrian Bank NetBanking-->
                                    <!--                        </option>-->
                                    <!--                        <option value="CBI-NA">Central Bank of India</option>-->
                                    <!--                        <option value="CUB-NA">City Union Bank NetBanking</option>-->
                                    <!--                        <option value="CRP-NA">Corporation Bank</option>-->
                                    <!--                        <option value="DBK-NA">Deutsche Bank NetBanking</option>-->
                                    <!--                        <option value="DCB-NA">Development Credit Bank</option>-->
                                    <!--                        <option value="DC2-NA">Development Credit Bank - Corporate-->
                                    <!--                        </option>-->
                                    <!--                        <option value="DLB-NA">Dhanlaxmi Bank NetBanking</option>-->
                                    <!--                        <option value="FBK-NA">Federal Bank NetBanking</option>-->
                                    <!--                        <option value="IDS-NA">Indusind Bank NetBanking</option>-->
                                    <!--                        <option value="IOB-NA">Indian Overseas Bank</option>-->
                                    <!--                        <option value="ING-NA">ING Vysya Bank (now Kotak)</option>-->
                                    <!--                        <option value="JKB-NA">Jammu and Kashmir NetBanking</option>-->
                                    <!--                        <option value="JSB-NA">Janata Sahakari Bank Limited</option>-->
                                    <!--                        <option value="KBL-NA">Karnataka Bank NetBanking</option>-->
                                    <!--                        <option value="KVB-NA">Karur Vysya Bank NetBanking</option>-->
                                    <!--                        <option value="LVR-NA">Lakshmi Vilas Bank NetBanking-->
                                    <!--                        </option>-->
                                    <!--                        <option value="OBC-NA">Oriental Bank of Commerce NetBanking-->
                                    <!--                        </option>-->
                                    <!--                        <option value="CPN-NA">PNB Corporate NetBanking</option>-->
                                    <!--                        <option value="PNB-NA">PNB NetBanking</option>-->
                                    <!--                        <option value="RSD-DIRECT">Rajasthan State Co-operative-->
                                    <!--                            Bank-Debit Card</option>-->
                                    <!--                        <option value="RBS-NA">RBS (The Royal Bank of Scotland)-->
                                    <!--                        </option>-->
                                    <!--                        <option value="SWB-NA">Saraswat Bank NetBanking</option>-->
                                    <!--                        <option value="SBJ-NA">SB Bikaner and Jaipur NetBanking-->
                                    <!--                        </option>-->
                                    <!--                        <option value="SBH-NA">SB Hyderabad NetBanking</option>-->
                                    <!--                        <option value="SBM-NA">SB Mysore NetBanking</option>-->
                                    <!--                        <option value="SBT-NA">SB Travancore NetBanking</option>-->
                                    <!--                        <option value="SVC-NA">Shamrao Vitthal Co-operative Bank-->
                                    <!--                        </option>-->
                                    <!--                        <option value="SIB-NA">South Indian Bank NetBanking</option>-->
                                    <!--                        <option value="SBP-NA">State Bank of Patiala NetBanking-->
                                    <!--                        </option>-->
                                    <!--                        <option value="SYD-NA">Syndicate Bank NetBanking</option>-->
                                    <!--                        <option value="TNC-NA">Tamil Nadu State Co-operative Bank-->
                                    <!--                            NetBanking</option>-->
                                    <!--                        <option value="UCO-NA">UCO Bank NetBanking</option>-->
                                    <!--                        <option value="UBI-NA">Union Bank NetBanking</option>-->
                                    <!--                        <option value="UNI-NA">United Bank of India NetBanking-->
                                    <!--                        </option>-->
                                    <!--                        <option value="VJB-NA">Vijaya Bank NetBanking</option>-->
                                    <!--                    </select>-->
                                    <!--                </div>-->
                                    <!--                <input type="submit" value="PAY NOW">-->
                                    <!--            </form>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="tab4">
                                        <div class="row pay_info">
                                            <div class="col-md-6 tab-grid">
                                                <!--<img class="pp-img" src="{{asset('public/images/paypal.png')}}"-->
                                                <!--    alt="Image Alternative text" title="Image Title">-->
                                                <!--<p>Important: You will be redirected to PayPal's website to securely-->
                                                <!--    complete your payment.</p>-->
                                                <!--<a class="btn btn-primary">Checkout via Paypal</a>-->
                                                <!DOCTYPE html>
                                                <html>

                                                <head>
                                                    <title>Laravel Stripe Payment Gateway Integrate</title>
                                                    <link rel="stylesheet"
                                                        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
                                                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
                                                    </script>

                                                </head>

                                                <body>

                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-6 col-md-offset-3">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-body">

                                                                        @if (Session::has('success'))
                                                                        <div class="alert alert-primary text-center">
                                                                            <p>{{ Session::get('success') }}</p>
                                                                        </div>
                                                                        @endif

                                                                        <form role="form"
                                                                            action="{{ route('make-payment') }}"
                                                                            method="post" class="stripe-payment"
                                                                            data-cc-on-file="false"
                                                                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                                            id="stripe-payment">
                                                                            @csrf

                                                                            <div class='form-row row'>
                                                                                <div
                                                                                    class='col-xs-12 form-group required'>
                                                                                    <label class='control-label'>Name on
                                                                                        Card</label> <input
                                                                                        class='form-control' size='4'
                                                                                        type='text'
                                                                                        value="Gladys Zulauf">
                                                                                </div>
                                                                            </div>
                                                                            <input type="hidden" name="allData"
                                                                                value="{{json_encode($data)}}" />

                                                                            <div class='form-row row'>
                                                                                <div
                                                                                    class='col-xs-12 form-group card required'>
                                                                                    <label class='control-label'>Card
                                                                                        Number</label> <input
                                                                                        autocomplete='off'
                                                                                        class='form-control card-num'
                                                                                        size='20' type='text'
                                                                                        value="4242424242424242">
                                                                                </div>
                                                                            </div>

                                                                            <div class='form-row row'>
                                                                                <div
                                                                                    class='col-xs-12 col-md-4 form-group cvc required'>
                                                                                    <label
                                                                                        class='control-label'>CVC</label>
                                                                                    <input autocomplete='off'
                                                                                        class='form-control card-cvc'
                                                                                        placeholder='e.g 595' size='4'
                                                                                        type='text' value="132">
                                                                                </div>
                                                                                <div
                                                                                    class='col-xs-12 col-md-4 form-group expiration required'>
                                                                                    <label
                                                                                        class='control-label'>Expiration
                                                                                        Month</label> <input
                                                                                        class='form-control card-expiry-month'
                                                                                        placeholder='MM' size='2'
                                                                                        type='text' value="12">
                                                                                </div>
                                                                                <div
                                                                                    class='col-xs-12 col-md-4 form-group expiration required'>
                                                                                    <label
                                                                                        class='control-label'>Expiration
                                                                                        Year</label> <input
                                                                                        class='form-control card-expiry-year'
                                                                                        placeholder='YYYY' size='4'
                                                                                        type='text' value="2023">
                                                                                </div>
                                                                            </div>

                                                                            <div class='form-row row'>
                                                                                <div
                                                                                    class='col-md-12 hide error form-group'>
                                                                                    <div class='alert-danger alert'>Fix
                                                                                        the errors before you begin.
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <button
                                                                                    class="btn btn-success btn-lg btn-block"
                                                                                    type="submit">Pay
                                                                                    ${{$data['price']}} </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </body>

                                                <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

                                                <script type="text/javascript">
                                                $(function() {
                                                    var $form = $(".stripe-payment");
                                                    $('form.stripe-payment').bind('submit', function(e) {
                                                        var $form = $(".stripe-payment"),
                                                            inputVal = ['input[type=email]',
                                                                'input[type=password]',
                                                                'input[type=text]', 'input[type=file]',
                                                                'textarea'
                                                            ].join(', '),
                                                            $inputs = $form.find('.required').find(
                                                                inputVal),
                                                            $errorStatus = $form.find('div.error'),
                                                            valid = true;
                                                        $errorStatus.addClass('hide');

                                                        $('.has-error').removeClass('has-error');
                                                        $inputs.each(function(i, el) {
                                                            var $input = $(el);
                                                            if ($input.val() === '') {
                                                                $input.parent().addClass(
                                                                    'has-error');
                                                                $errorStatus.removeClass(
                                                                    'hide');
                                                                e.preventDefault();
                                                            }
                                                        });

                                                        if (!$form.data('cc-on-file')) {
                                                            e.preventDefault();
                                                            Stripe.setPublishableKey($form.data(
                                                                'stripe-publishable-key'));
                                                            Stripe.createToken({
                                                                number: $('.card-num').val(),
                                                                cvc: $('.card-cvc').val(),
                                                                exp_month: $(
                                                                        '.card-expiry-month')
                                                                    .val(),
                                                                exp_year: $('.card-expiry-year')
                                                                    .val()
                                                            }, stripeRes);
                                                        }
                                                    });

                                                    function stripeRes(status, response) {
                                                        if (response.error) {
                                                            $('.error')
                                                                .removeClass('hide')
                                                                .find('.alert')
                                                                .text(response.error.message);
                                                        } else {
                                                            var token = response['id'];
                                                            $form.find('input[type=text]').empty();
                                                            $form.append(
                                                                "<input type='hidden' name='stripeToken' value='" +
                                                                token + "'/>");
                                                            $form.get(0).submit();
                                                        }
                                                    }

                                                });
                                                </script>

                                                </html>
                                            </div>
                                            <!--<div class="col-md-6">-->
                                            <!--<form class="cc-form">-->
                                            <!--    <div class="clearfix">-->
                                            <!--        <div class="form-group form-group-cc-number">-->
                                            <!--            <label>Card Number</label>-->
                                            <!--            <input class="form-control"-->
                                            <!--                placeholder="xxxx xxxx xxxx xxxx" type="text"><span-->
                                            <!--                class="cc-card-icon"></span>-->
                                            <!--        </div>-->
                                            <!--        <div class="form-group form-group-cc-cvc">-->
                                            <!--            <label>CVV</label>-->
                                            <!--            <input class="form-control" placeholder="xxxx" type="text">-->
                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--    <div class="clearfix">-->
                                            <!--        <div class="form-group form-group-cc-name">-->
                                            <!--            <label>Card Holder Name</label>-->
                                            <!--            <input class="form-control" type="text">-->
                                            <!--        </div>-->
                                            <!--        <div class="form-group form-group-cc-date">-->
                                            <!--            <label>Valid Thru</label>-->
                                            <!--            <input class="form-control" placeholder="mm/yy" type="text">-->
                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--    <div class="checkbox checkbox-small">-->
                                            <!--        <label>-->
                                            <!--            <input class="i-check" type="checkbox" checked="">Add to My-->
                                            <!--            Cards</label>-->
                                            <!--    </div>-->
                                            <!--    <input class="btn btn-primary submit" type="submit"-->
                                            <!--        value="Proceed Payment">-->
                                            <!--</form>-->
                                            <!--</div>-->
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--//tabs-->
                    </div>
                </div>
                <!-- //payment -->
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <!--subscribe-address-->







    <!-- info section -->
    @include('Common/footer')
    <!-- end info section -->


















    <!-- footer section -->

    <!-- footer section -->

















    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="register-form">
                        <form action="#" method="post">
                            <div class="fields-grid">
                                <div class="styled-input">
                                    <input type="text" placeholder="Your Name" name="Your Name" required="">
                                </div>
                                <div class="styled-input">
                                    <input type="email" placeholder="Your Email" name="Your Email" required="">
                                </div>
                                <div class="styled-input">
                                    <input type="password" placeholder="password" name="password" required="">
                                </div>
                                <button type="submit" class="btn subscrib-btnn">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal 1-->

    <!-- end info section -->

    <!-- footer section -->


    <!--js working-->
    <!--     <script src='js/jquery-2.2.3.min.js'></script> -->
    <!--//js working-->
    <!-- cart-js -->
    <script src="{{asset('public/js/minicart.js')}}"></script>
    <script>
    toys.render();

    toys.cart.on('toys_checkout', function(evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
    </script>
    <!--// cart-js -->
    <!-- easy-responsive-tabs -->
    <script src="{{asset('public/js/easy-responsive-tabs.js')}}"></script>
    <script>
    $(document).ready(function() {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
    </script>



</body>

</html>