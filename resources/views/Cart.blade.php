 @include('Common/Scripts')
 <script>
DeleteCartItem = (item_id) => {
    axios.post('deleteCartItem', {
            item_id
        })
        .then((res) => {
            window.location.reload();
            console.log(res.data);
        }).catch((err) => {
            console.log(err);
        })
}
UpdateCartItem = (item_id, two) => {
    axios.post('UpdateCartItem', {
            item_id,
            two
        })
        .then((res) => {

            console.log(res.data);
            window.location.reload();
        }).catch((err) => {
            console.log(err);
        })
}
 </script>


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
     <link rel="stylesheet" type="text/css" href="{{asset('public/css/checkout.css')}}">
     <!--Shoping cart-->
     <link rel="stylesheet" href="{{asset('public/css/shop.css')}}" type="text/css" />
     <!--//Shoping cart-->
     <!--price range-->
     <link rel="stylesheet" type="text/css" href="{{asset('public/css/jquery-ui1.css')}}">
     <!--//price range-->
     <!-- responsive style -->
     <link href="{{asset('public/css/responsive.css')}}" rel="stylesheet" />
     <style>
     .two {
         color: white;
         background-color: #000000;
         padding: 5px;
         font-size: 17px;
         border: none;
     }

     /* .two:hover {
         color: white;
         background-color: #26BB48;
         padding: 5px;
         font-size: 17px;
         border: none;
     } */

     .two1 {
         color: white;
         background-color: #000000;
         padding: 8px;
         font-size: 17px;
         border: none;
     }

     .two1:hover {
         color: white;
         background-color: #26BB48;
         padding: 8px;
         font-size: 17px;
         border: none;
     }
     </style>
 </head>
 <div class="hero_area">

     @php($count=0)

     @foreach($data as $row)

     @php($count= $count+$row->product_price * $row->quantity)



     @php($count)



     @endforeach
     <!-- header section strats -->
     @include('Common/Header')
 </div>
 <!-- //banner -->
 <!-- top Products -->
 <section class="checkout py-lg-4 py-md-3 py-sm-3 py-3">
     <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
         <div class="shop_inner_inf">
             <div class="privacy about">
                 <h3>Chec<span>kout</span></h3>
                 <div class="checkout-right">
                     <!--<h4>Your shopping cart contains: <span>3 Products</span></h4>-->
                     <table class="timetable_sub">
                         <thead>
                             <tr>
                                 <th>SL No.</th>
                                 <th>Product</th>
                                 <th>Quality</th>
                                 <th>Product Name</th>
                                 <th>Price</th>
                                 <th>Remove</th>
                                 <th>Update</th>
                             </tr>
                         </thead>
                         <?php $counter=1; ?>
                         @foreach($data as $row)
                         <tbody>
                             <tr class="rem1">
                                 <td class="invert"><?php echo $counter?></td>
                                 <td class="invert-image"><a href=""><img src="public/storage/{{$row->product_image}}"
                                             alt=""></a>
                                 </td>
                                 <td class="invert">
                                     <div class="quantity">
                                         <div class="quantity-select">
                                             <div class="entry value-minus">&nbsp;</div>
                                             <div class="entry value" id="<?php echo 'up'.$counter ?>">
                                                 <span>{{$row->quantity}}</span>
                                             </div>
                                             <div class="entry value-plus active">&nbsp;</div>
                                         </div>
                                     </div>
                                 </td>
                                 <td class="invert">{{$row->product_name}}</td>
                                 <td class="invert">${{$row->product_price}}</td>
                                 <td class="invert">
                                     <div class="rem">
                                         <div class="close1" onclick="DeleteCartItem({{$row->id}})"> </div>
                                     </div>
                                 </td>
                                 <td>
                                     <div class="rem">
                                         <button class="two"
                                             onclick="UpdateCartItem({{$row->id}},document.getElementById(`<?php echo 'up'.$counter ?>`).innerHTML)">Update</button>
                                     </div>
                                 </td>
                             </tr>
                             <?php $counter++; ?>
                             @endforeach

                         </tbody>
                     </table>
                 </div>
                 <div class="checkout-left">
                     <div class="col-md-4 checkout-left-basket">

                         <h4>Continue to basket</h4>
                         <ul>
                             @foreach($data as $row)

                             <li>{{$row->product_name}} <i>-</i> <span
                                     name='subtotal'>${{$row->product_price*$row->quantity}}</span>
                             </li>

                             @endforeach
                             <li class='new_total' name='total'>Total <i>-</i> <span>${{$count}}</span></li>

                         </ul>
                     </div>
                     <div class="col-md-8 address_form">
                         <h4>Add a new Details</h4>
                         <form action="{{ route('payment') }}" method="POST" class="creditly-card-form agileinfo_form">
                             @csrf
                             <section class="creditly-wrapper wrapper">
                                 <div class="information-wrapper">
                                     <div class="first-row form-group">
                                         <div class="controls">
                                             <label class="control-label">Full name: </label>
                                             <input class="billing-address-name form-control" type="text" name="name"
                                                 placeholder="Full name" required>
                                         </div>
                                         <input type="hidden" name="price" value="{{ $count }}" />
                                         <div class="card_number_grids">
                                             <div class="card_number_grid_left">
                                                 <div class="controls">
                                                     <label class="control-label">E-mail</label>
                                                     <input class="form-control" type="email" placeholder="E-mail"
                                                         name="email" required>
                                                 </div>
                                             </div>
                                             <div class="card_number_grid_left">
                                                 <div class="controls">
                                                     <label class="control-label">Mobile number:</label>
                                                     <input class="form-control" type="text" placeholder="Mobile number"
                                                         name="phno" required>
                                                 </div>
                                             </div>

                                             <input type="hidden" name="allData" value="{{json_encode($data)}}" />


                                             <div class="card_number_grid_right">
                                                 <div class="controls">
                                                     <label class="control-label">Postalcode </label>
                                                     <input class="form-control" type="text" placeholder="Postalcode"
                                                         name="pcode" required>
                                                 </div>
                                             </div>
                                             <div class="clear"> </div>
                                         </div>
                                         <div class="controls">
                                             <label class="control-label">Address: </label>
                                             <input class="form-control" type="text" placeholder="Address"
                                                 name="address" required>
                                         </div>
                                         <div class="controls">
                                             <label class="control-label">City: </label>
                                             <input class="form-control" type="text" placeholder="Town/City" name="city"
                                                 required>
                                         </div>
                                         <!-- <div class="controls">
                                             <label class="control-label">Address type: </label>
                                             <select class="form-control option-w3ls" name="location">
                                                 <option>Office</option>
                                                 <option>Home</option>
                                                 <option>Commercial</option>
                                             </select>
                                         </div>
                                     </div> -->
                                         <!--<button class="submit check_out">Delivery to this Address</button>-->
                                     </div>
                             </section>
                             <div class="checkout-right-basket">
                                 <button type="submit" class="two1">Make a Payment</button>
                             </div>
                         </form>
                     </div>
                     <div class="clearfix"> </div>
                     <div class="clearfix"></div>
                 </div>
             </div>
         </div>
         <!-- //top products -->
     </div>
 </section>


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
 <!-- //Modal 1-->







 @include('Common/footer')












 <!--js working-->
 <script src='{{asset("public/js/jquery-2.2.3.min.js")}}'></script>
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
 <!--quantity-->
 <script>
$('.value-plus').on('click', function() {
    var divUpd = $(this).parent().find('.value'),
        newVal = parseInt(divUpd.text(), 10) + 1;
    divUpd.text(newVal);
});

$('.value-minus').on('click', function() {
    var divUpd = $(this).parent().find('.value'),
        newVal = parseInt(divUpd.text(), 10) - 1;
    if (newVal >= 1) divUpd.text(newVal);
});
 </script>
 <!--quantity-->
 <!--closed-->
 <script>
$(document).ready(function(c) {
    $('.close1').on('click', function(c) {
        $('.rem1').fadeOut('slow', function(c) {
            $('.rem1').remove();
        });
    });
});
 </script>
 <script>
$(document).ready(function(c) {
    $('.close2').on('click', function(c) {
        $('.rem2').fadeOut('slow', function(c) {
            $('.rem2').remove();
        });
    });
});
 </script>
 <script>
$(document).ready(function(c) {
    $('.close3').on('click', function(c) {
        $('.rem3').fadeOut('slow', function(c) {
            $('.rem3').remove();
        });
    });
});
 </script>
 <!--//closed-->
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



 <!-- end info section -->

 <!-- footer section -->







 </body>

 </html>