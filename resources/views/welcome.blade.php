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
<style type="text/css">
/* Full-width input fields */
input[type=text],
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #FFBCB1;
    color: black;
    /*  padding: 14px 20px;*/
    /*  margin: 8px 0;*/
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%;
    /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {
        -webkit-transform: scale(0)
    }

    to {
        -webkit-transform: scale(1)
    }
}

@keyframes animatezoom {
    from {
        transform: scale(0)
    }

    to {
        transform: scale(1)
    }
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }

    .cancelbtn {
        width: 100%;
    }
}
</style>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('Common/Header')
        <!-- header section ends -->
        <!-- slider section -->

        <div class="container-fluid" style="padding: 0px;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{asset('public/images/slider1.png')}}" style="width:100%;" alt="Los Angeles">
                    </div>

                    <div class="item">
                        <img src="{{asset('public/images/f2.png')}}" alt="Chicago" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="{{asset('public/images/ff.png')}}" alt="New york" style="width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- end slider section -->
    </div>

    <!-- detail section -->
    <section class="detail_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="detail_img-box">
                        <img src="{{asset('public/images/detail.png')}}" alt="" class="w-100" />
                    </div>
                </div>
                <div class=" col-lg-9">
                    <div class="detail_container">
                        <div class="detail-box d-box-1">
                            <a href="">
                                <div class="detail-content">
                                    <img src="{{asset('public/images/d-1.png')}}" alt="" />
                                    <h5>
                                        Care kids
                                    </h5>
                                </div>
                            </a>
                        </div>
                        <div class="detail-box d-box-2">
                            <a href="">
                                <div class="detail-content">
                                    <img src="{{asset('public/images/d-2.png')}}" alt="" />
                                    <h5>
                                        Baby boy
                                    </h5>
                                </div>
                            </a>
                        </div>
                        <div class="detail-box d-box-3">
                            <a href="">
                                <div class="detail-content">
                                    <img src="{{asset('public/images/d-3.png')}}" alt="" />
                                    <h5>
                                        Baby girl
                                    </h5>
                                </div>
                            </a>
                        </div>
                        <div class="detail-box d-box-4">
                            <a href="">
                                <div class="detail-content">
                                    <img src="{{asset('public/images/d-4.png')}}" alt="" />
                                    <h5>
                                        Sale
                                    </h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end detail section -->

    <!-- products section -->
    <section class="products_section">
        <div class="heading_container">
            <h2>
                New Products In Store
            </h2>
            <p>
                Featured Product Just Arrived
            </p>
        </div>
        <div class="container layout_padding">
            <div class="product_container">
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
                                                <a href="{{ route('single',['id' => $product->id]) }}">Suits(todos)</a>
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
                                        <!--<button type="submit" class="
                                                    -->
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
                <!--<a href="">-->
                <!--    <div class="product_box">-->
                <!--        <div class="product_img-box">-->
                <!--            <img src="public/storage/{{$product->image}}" alt="" />-->
                <!--            <span>-->
                <!--                Sale-->
                <!--            </span>-->
                <!--        </div>-->
                <!--        <div class="product_detail-box">-->
                <!--            <span>-->
                <!--                ${{$product->price}}-->
                <!--            </span>-->
                <!--            <p>-->
                <!--                {{$product->description}}-->
                <!--            </p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</a>-->
                @endforeach
            </div>
        </div>
    </section>

    <!-- end products section -->

    <!-- find section -->
    <section class="find_section layout_padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-8 offset-md-2">
                    <div class="find_container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="find_container-img">
                                    <img src="{{asset('public/images/find-img.png')}}" alt="" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h3>
                                    Find Everything <br />
                                    From A to Z
                                </h3>
                                <p>
                                    Shop Back to school
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="shop_container">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>
                                    Shoes
                                </p>
                                <h3>
                                    Shop by catagories
                                </h3>
                                <div>
                                    <a href="">
                                        View More
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="shoe_img-box">
                                    <img src="{{asset('public/images/shoes.png')}}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="find_img-box">
                        <img src="{{asset('public/images/find-hero.png')}}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end find section -->
    <!-- client section -->
    <section class="client_section layout_padding">
        <div class="container">
            <h2>
                What our Customer says
            </h2>
            <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row layout_padding2">
                            <div class="col-md-6">
                                <div class="client_box">
                                    <div class="client_id-box">
                                        <div class="client_img-box">
                                            <img src="{{asset('public/images/client.png')}}" alt="" />
                                        </div>
                                        <h4>Carlac liyo</h4>
                                    </div>
                                    <div class="client_detail">
                                        <p>
                                            There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some
                                            form, by injected humour, or randomised words which don't look
                                            even slightly believable. If you are going to use a passage of
                                            Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="client_box">
                                    <div class="client_id-box">
                                        <div class="client_img-box">
                                            <img src="{{asset('public/images/client.png')}}" alt="" />
                                        </div>
                                        <h4>Carlac liyo</h4>
                                    </div>
                                    <div class="client_detail">
                                        <p>
                                            There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some
                                            form, by injected humour, or randomised words which don't look
                                            even slightly believable. If you are going to use a passage of
                                            Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row layout_padding2">
                            <div class="col-md-6">
                                <div class="client_box">
                                    <div class="client_id-box">
                                        <div class="client_img-box">
                                            <img src="{{asset('public/images/client.png')}}" alt="" />
                                        </div>
                                        <h4>Carlac liyo</h4>
                                    </div>
                                    <div class="client_detail">
                                        <p>
                                            There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some
                                            form, by injected humour, or randomised words which don't look
                                            even slightly believable. If you are going to use a passage of
                                            Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="client_box">
                                    <div class="client_id-box">
                                        <div class="client_img-box">
                                            <img src="{{asset('public/images/client.png')}}" alt="" />
                                        </div>
                                        <h4>Carlac liyo</h4>
                                    </div>
                                    <div class="client_detail">
                                        <p>
                                            There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some
                                            form, by injected humour, or randomised words which don't look
                                            even slightly believable. If you are going to use a passage of
                                            Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row layout_padding2">
                            <div class="col-md-6">
                                <div class="client_box">
                                    <div class="client_id-box">
                                        <div class="client_img-box">
                                            <img src="{{asset('public/images/client.png')}}" alt="" />
                                        </div>
                                        <h4>Carlac liyo</h4>
                                    </div>
                                    <div class="client_detail">
                                        <p>
                                            There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some
                                            form, by injected humour, or randomised words which don't look
                                            even slightly believable. If you are going to use a passage of
                                            Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="client_box">
                                    <div class="client_id-box">
                                        <div class="client_img-box">
                                            <img src="{{asset('public/images/client.png')}}" alt="" />
                                        </div>
                                        <h4>Carlac liyo</h4>
                                    </div>
                                    <div class="client_detail">
                                        <p>
                                            There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some
                                            form, by injected humour, or randomised words which don't look
                                            even slightly believable. If you are going to use a passage of
                                            Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">

                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">

                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
        <!--   <div class="container">
      <div class="item_container">
        <div class="row">
          <div class="col-sm-7">
            <h3>
              Best offers on any makeup items
            </h3>
            <p>
              Contrary to popular belief, Lorem Ipsum is not simply random
              text. It has roots in a piece of classical
            </p>
            <div>
              <a href="">
                Shop Now
              </a>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="item_img-box">
              <img src="images/items.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div> -->
    </section>
    <!-- end client section -->

    <!-- sign section -->
    <section class="sign_section layout_padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3>
                        Sign up for Newsletter
                    </h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered
                    </p>
                </div>
                <div class="col-md-7">
                    <form action="">
                        <input type="email" placeholder="Enter your email" />
                        <button>
                            Sign Up
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- end sign section -->

    <!-- info section -->
    @include('Common/footer')
    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
</body>

</html>