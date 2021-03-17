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
</head>

<body onload="{{ ('cartCheckout') }}">
    <div class="hero_area">
        <!-- header section strats -->
        @include('Common/Header')
        <!-- header section ends -->

    </div>
    <!-- banner -->
    <!--   <div class="inner_page-banner one-img">
      </div> -->
    <!--//banner -->
    <!-- short -->
    <!--   <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.html">Home</a>
                  <span>/ /</span>
               </li>
               <li>Single Page</li>
            </ul>
         </div>
      </div> -->
    <!-- //short-->
    <!--//banner -->
    <!--/shop-->

    <section class="banner-bottom py-lg-5 py-3" style="padding: 0px !important;">
        <div class="container">
            <div class="inner-sec-shop pt-lg-4 pt-3">
                <div class="row">
                    @foreach($data as $product)
                    <div class="col-lg-4 single-right-left ">
                        <div class="grid images_3_of_2">
                            <div class="flexslider1">
                                <ul class="slides">
                                    <li
                                        data-thumb="http://harman.webcodice.com/laravel/public/storage/{{$product->image}}">
                                        <div class="thumb-image">
                                            <img src="http://harman.webcodice.com/laravel/public/storage/{{$product->image}}"
                                                data-imagezoom="true" class="img-fluid" alt="" />
                                        </div>
                                    </li>
                                    <?php 
                                    $sub_images = json_decode($product->sub_images);
                                    foreach($sub_images as $sub_image){
                                        ?>
                                    <li data-thumb="http://harman.webcodice.com/laravel/public/storage/{{$sub_image}}">
                                        <div class="thumb-image">
                                            <img src="http://harman.webcodice.com/laravel/public/storage/{{$sub_image}}"
                                                data-imagezoom="true" class="img-fluid" alt="" />
                                        </div>
                                    </li>
                                    <?php
                                    }
                                ?>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                        <h3>Suit</h3>
                        <p><span class="item_price">${{$product->price}}</span>
                            <del>$1,199</del>
                        </p>
                        <!--<div class="rating1">-->
                        <!--    <ul class="stars">-->
                        <!--        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>-->
                        <!--        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>-->
                        <!--        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>-->
                        <!--        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>-->
                        <!--        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                        <!--<div class="description">-->
                        <!--    <h5>Check delivery, payment options and charges at your location</h5>-->
                        <!--    <form action="#" method="post">-->
                        <!--        <input class="form-control" type="text" name="Email" placeholder="Please enter..."-->
                        <!--            required="">-->
                        <!--        <input type="submit" value="Check">-->
                        <!--    </form>-->
                        <!--</div>-->
                        <!--<div class="color-quality">-->
                        <!--    <div class="color-quality-right">-->
                        <!--        <h5>Size :</h5>-->
                        <!--        <select id="country1" onchange="change_country(this.value)"-->
                        <!--            class="frm-field required sect">-->
                        <!--            <option value="null">2 Feet</option>-->
                        <!--            <option value="null">3 Feet</option>-->
                        <!--            <option value="null">4 Feet</option>-->
                        <!--            <option value="null">5 Feet</option>-->
                        <!--        </select>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="occasional">-->
                        <!--    <h5>Types :</h5>-->
                        <!--    <div class="colr ert">-->
                        <!--        <label class="radio"><input type="radio" name="radio" checked=""><i></i> Soft Teddy Bear-->
                        <!--            (Black)</label>-->
                        <!--    </div>-->
                        <!--    <div class="colr">-->
                        <!--        <label class="radio"><input type="radio" name="radio"><i></i>Soft Teddy Bear-->
                        <!--            (Brown)</label>-->
                        <!--    </div>-->
                        <!--    <div class="colr">-->
                        <!--        <label class="radio"><input type="radio" name="radio"><i></i>Pink Teddy Bear-->
                        <!--            (Pink)</label>-->
                        <!--    </div>-->
                        <!--    <div class="clearfix"> </div>-->
                        <!--</div>-->
                        <div class="occasion-cart">
                            <div class="toys single-item singlepage">
                                <!--<form action="#" method="post">-->
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="toys_item" value="Farenheit">
                                <input type="hidden" name="amount" value="575.00">
                                <a href="{{ route('measurementpage',['id' => request()->id]) }}"> <button
                                        class="toys-cart ptoys-cart add">
                                        Select your size</button>
                                </a>
                                <!--</form>-->
                            </div>
                        </div>
                        <br>
                        <!--   <ul class="footer-social text-left mt-lg-4 mt-3">
                        <li>Share On : </li>
                        <li class="mx-1">
                           <a href="#">
                           <span class="fab fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="">
                           <a href="#">
                           <span class="fab fa-twitter"></span>
                           </a>
                        </li>
                        <li class="mx-1">
                           <a href="#">
                           <span class="fab fa-google-plus-g"></span>
                           </a>
                        </li>
                        <li class="">
                           <a href="#">
                           <span class="fab fa-linkedin-in"></span>
                           </a>
                        </li>
                        <li class="mx-1">
                           <a href="#">
                           <span class="fas fa-rss"></span>
                           </a>
                        </li>
                     </ul> -->
                    </div>
                    <div class="clearfix"> </div>

                    @endforeach


                    <!-- Modal 1-->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <input type="text" placeholder="Your Name" name="Your Name"
                                                        required="">
                                                </div>
                                                <div class="styled-input">
                                                    <input type="email" placeholder="Your Email" name="Your Email"
                                                        required="">
                                                </div>
                                                <div class="styled-input">
                                                    <input type="password" placeholder="password" name="password"
                                                        required="">
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

                </div>
            </div>
        </div>

        <!-- info section -->
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