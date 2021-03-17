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
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('Common/Header')
        <!-- header section ends -->
    </div>
    <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Suits Shop</h3>
            <div class="row">
                <div class="side-bar col-lg-3">
                    <div class="search-hotel">
                        <h3 class="agileits-sear-head">Search Here..</h3>
                        <form action="#" method="post">
                            <input type="search" placeholder="Product name..." name="search" required="">
                            <input type="submit" value=" ">
                        </form>
                    </div>
                    <!-- price range -->
                    <div class="range">
                        <h3 class="agileits-sear-head">Price range</h3>
                        <ul class="dropdown-menu6">
                            <li>

                                <div id="slider-range"></div>
                                <input type="text" id="amount"
                                    style="border: 0; color: #ffffff; font-weight: normal;" />
                            </li>
                        </ul>
                    </div>
                    <!-- //price range -->
                    <!--preference -->
                    <div class="left-side">
                        <h3 class="agileits-sear-head">Occasion</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Gift</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Kid Play</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Dolls</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Remot</span>
                            </li>
                        </ul>
                    </div>
                    <!-- // preference -->
                    <!-- discounts -->
                    <div class="left-side">
                        <h3 class="agileits-sear-head">Discount</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">5% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">10% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">20% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">30% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">50% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">60% or More</span>
                            </li>
                        </ul>
                    </div>
                    <!-- //discounts -->
                    <!-- reviews -->
                    <div class="customer-rev left-side">
                        <h3 class="agileits-sear-head">Customer Review</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>5.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>4.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                    <i class="far fa-star"></i>
                                    <span>3.5</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>3.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>2.5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- //reviews -->
                    <!-- deals -->
                    <div class="deal-leftmk left-side">
                        <h3 class="agileits-sear-head">Special Deals</h3>
                        <div class="row special-sec1">
                            @foreach($products as $product)
                            <div class="col-xs-4 img-deals">
                                <img src="public/storage/{{$product->image}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-xs-8 img-deal1">
                                <h3>Suits(barbie)</h3>
                                <a href="{{ route('single',['id' => $product->id]) }}">${{$product->price}}</a>
                            </div>
                            @endforeach
                            <div class="clearfix"></div>
                        </div>


                    </div>
                    <!-- //deals -->
                </div>
                <div class="left-ads-display col-lg-9">
                    <div class="row">

                        @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                            <div class="product-Suits-info">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        <img src="public/storage/{{$product->image}}" class="img-thumbnail" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{ route('single',['id' => $product->id]) }}"
                                                    class="link-product-add-cart">Quick
                                                    View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <h4>
                                                        <a
                                                            href="{{ route('single',['id' => $product->id]) }}">Suits(todos)</a>
                                                    </h4>
                                                    <div class="grid-price mt-2">
                                                        <span class="money ">${{$product->price}}</span>
                                                    </div>
                                                </div>
                                                <ul class="stars">
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="far fa-star-half-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="Suits single-item hvr-outline-out">
                                                <!--<form action="#" method="post">-->
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="Suits_item" value="Suits(todos)">
                                                <input type="hidden" name="amount" value="480.00">
                                                <!--<button type="submit" class="Suits-cart pSuits-cart">-->
                                                <!-- <a href="{{ route('measurementpage',['id' => $product->id]) }}">   <i class="fas fa-cart-plus"></i></a>-->
                                                <!--</button>-->
                                                <!--</form>-->
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //show Now-->
    <!--subscribe-address-->

    <!-- footer -->

    <!-- //footer -->
    <!-- Modal 1-->
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
    @include('Common/footer')
    <!-- //Modal 1-->
    <!--js working-->
    <script src='{{asset("public/js/jquery-2.2.3.min.js")}}'></script>
    <!--//js working-->
    <!-- cart-js -->
    <!--<script src="{{asset('public/js/minicart.js')}}"></script>-->
    <script>
    Suits.render();

    Suits.cart.on('Suits_checkout', function(evt) {
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
    <!--bootstrap working-->
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <!-- //bootstrap working-->





    <script type="text/javascript" src="{{asset('public/js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/bootstrap.js')}}"></script>

    <script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
    </script>
</body>

</html>






</body>

</html>