<?php
    // print_r(request()->id);
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
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
    <link href="{{asset('public/css/style1.css')}}" rel="stylesheet" />
    <!-- font-awesome icons -->
    <link href="{{asset('public/css/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <!-- //font-awesome icons -->
    <!--Shoping cart-->
    <link rel="stylesheet" href="{{asset('public/css/shop.css')}}" type="text/css" />
    <!--//Shoping cart-->
    <!--price range-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/jquery-ui1.css')}}">
    <!--//price range-->
    <!-- responsive style -->
    <link href="{{asset('public/css/responsive.css')}}" rel="stylesheet" />
    <!--Shoping cart-->

    <!--//Shoping cart-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/jquery-ui1.css')}}">
    <link href="{{asset('public/css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('public/css/flexslider.css')}}" type="text/css" media="screen" />
    <!--stylesheets-->
    <link href="{{asset('public/css/style.css')}}" rel='stylesheet' type='text/css' media="all">

    <!--//stylesheets-->
    <style>
    a.two {
        color: white;
        background-color: black;
        padding: 10px;
        font-size: 17px;
    }

    body {

        background-color: rgb(233, 236, 239);
    }

    a.two:hover {
        color: white;
        background-color: #26BB48;
        padding: 10px;
        font-size: 17px;
    }
    </style>
</head>

<body onload="{{ ('cartCheckout') }}">
    <div class="hero_area">
        <!-- header section strats -->
        @include('Common/Header')
        <!-- header section ends -->

    </div>




    <div class="jumbotron text-center" style="
    margin: 20px; background-color:#ffffff;
">
        <h1 class="display-3">Thank You!</h1>
        <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your
            account setup.</p>
        <hr>
        <p>
            Having trouble?
        </p>
        <p class="lead">
            <a class="two" href="{{ route('Home') }}" role="button">Continue to
                homepage</a>
        </p>
    </div>



    @include('Common/footer')




    @include('Common/Scripts')
    <script>
    addToCart = (product_id) => {
        axios.post('AddToCard', {
                product_id
            })
            .then((res) => {
                console.log(res.data)
            })
            .catch((err) => {
                console.log(err)
            });
    }
    </script>

    <!--jQuery-->
    <script src="{{asset('public/js/jquery-2.2.3.min.js')}}"></script>
    <!-- newsletter modal -->
    <!-- cart-js -->
    <!--<script src="{{asset('public/js/minicart.js')}}"></script>-->
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
    <!-- //cart-js -->
    <!-- price range (top products) -->
    <script src="{{asset('public/js/jquery-ui.js')}}"></script>
    <script>
    //<![CDATA[ 
    $(window).load(function() {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [50, 6000],
            slide: function(event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider(
            "values", 1));

    }); //]]>
    </script>
    <!-- //price range (top products) -->
    <!-- single -->
    <script src="{{asset('public/js/imagezoom.js')}}"></script>
    <!-- single -->
    <!-- script for responsive tabs -->
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
    <!-- FlexSlider -->
    <script src="{{asset('public/js/jquery.flexslider.js')}}"></script>
    <script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider1').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
    </script>
    <!-- //FlexSlider-->
    <!-- start-smoth-scrolling -->
    <script src="{{asset('public/js/move-top.js')}}"></script>
    <script src="{{asset('public/js/easing.js')}}"></script>
    <script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- here stars scrolling icon -->
    <script>
    $(document).ready(function() {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };


        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
    </script>
    <!-- //here ends scrolling icon -->
    <!-- //smooth-scrolling-of-move-up -->
    <!--bootstrap working-->
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <!-- //bootstrap working-->
</body>

</html>