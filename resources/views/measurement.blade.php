<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <title>Measurement</title>
    <link rel="stylesheet" href="{{asset('public/measurement/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/measurement/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/measurement/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/measurement/css/bootstrap.min.css')}}">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style type="text/css">
    #show1 {
        display: ruby-base;
    }

    #show2 {
        display: ruby-base;
    }

    #show3 {
        display: ruby-base;
    }

    #show4 {
        display: ruby-base;
    }

    #show5 {
        display: ruby-base;
    }

    #show6 {
        display: ruby-base;
    }

    #show7 {
        display: ruby-base;
    }

    #show8 {
        display: ruby-base;
    }

    #show9 {
        display: ruby-base;
    }

    #show10 {
        display: ruby-base;
    }

    #show11 {
        display: ruby-base;
    }

    #show12 {
        display: ruby-base;
    }

    #show13 {
        display: ruby-base;
    }

    #show14 {
        display: ruby-base;
    }

    #show15 {
        display: ruby-base;
    }

    #show16 {
        display: ruby-base;
    }

    #show17 {
        display: ruby-base;
    }

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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.css')}}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet" />
    <!--<link href="{{asset('public/css/style1.css')}}" rel="stylesheet" />-->
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

    <div class="container-fluid" style="
    padding: 0px;
">
        <div class="demo1">
            <div class="row">

                <div class="col-lg-12 mainpage1">
                    <button id="cartBtn" class="two1" onclick="addToCartfun({{request()->id}})">Add to cart</button>
                    <div class="col-lg-2 outlook">
                        <div class="define" id="show" style="display: none;">
                            <p class="portal">Measurement Details in (Inches)
                                <span id='output'>
                                    <div id="show1">
                                        <p class="sam"><span id="partName1"></span><br /></p>
                                        <p class="leach"><span id="partValue1"></span><br /></p>
                                    </div><br>
                                    <div id="show2">
                                        <p class="sam"><span id="partName2"></span><br /></p>
                                        <p class="leach"><span id="partValue2"></span><br /></p>
                                    </div><br>
                                    <div id="show3">
                                        <p class="sam"><span id="partName3"></span><br /></p>
                                        <p class="leach"><span id="partValue3"></span><br /></p>
                                    </div><br>
                                    <div id="show4">
                                        <p class="sam"><span id="partName4"></span><br /></p>
                                        <p class="leach"><span id="partValue4"></span><br /></p>
                                    </div><br>
                                    <div id="show5">
                                        <p class="sam"><span id="partName5"></span><br /></p>
                                        <p class="leach"><span id="partValue5"></span><br /></p>
                                    </div><br>
                                    <div id="show6">
                                        <p class="sam"><span id="partName6"></span><br /></p>
                                        <p class="leach"><span id="partValue6"></span><br /></p>
                                    </div><br>
                                    <div id="show7">
                                        <p class="sam"><span id="partName7"></span><br /></p>
                                        <p class="leach"><span id="partValue7"></span><br /></p>
                                    </div><br>
                                    <div id="show8">
                                        <p class="sam"><span id="partName8"></span><br /></p>
                                        <p class="leach"><span id="partValue8"></span><br /></p>
                                    </div><br>
                                    <div id="show9">
                                        <p class="sam"><span id="partName9"></span><br /></p>
                                        <p class="leach"><span id="partValue9"></span><br /></p>
                                    </div><br>
                                    <div id="show10">
                                        <p class="sam"><span id="partName10"></span><br /></p>
                                        <p class="leach"><span id="partValue10"></span><br /></p>
                                    </div><br>
                                    <div id="show11">
                                        <p class="sam"><span id="partName11"></span><br /></p>
                                        <p class="leach"><span id="partValue11"></span><br /></p>
                                    </div><br>
                                    <div id="show12">
                                        <p class="sam"><span id="partName12"></span><br /></p>
                                        <p class="leach"><span id="partValue12"></span><br /></p>
                                    </div><br>
                                    <div id="show13">
                                        <p class="sam"><span id="partName13"></span><br /></p>
                                        <p class="leach"><span id="partValue13"></span><br /></p>
                                    </div><br>
                                    <div id="show14">
                                        <p class="sam"><span id="partName14"></span><br /></p>
                                        <p class="leach"><span id="partValue14"></span><br /></p>
                                    </div><br>
                                    <div id="show15">
                                        <p class="sam"><span id="partName15"></span><br /></p>
                                        <p class="leach"><span id="partValue15"></span><br /></p>
                                    </div><br>
                                    <div id="show16">
                                        <p class="sam"><span id="partName16"></span><br /></p>
                                        <p class="leach"><span id="partValue16"></span><br /></p>
                                    </div><br>
                                    <div id="show17">
                                        <p class="sam"><span id="partName17"></span><br /></p>
                                        <p class="leach"><span id="partValue17"></span><br /></p>
                                    </div>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 image">
                        <div class="">
                            <form action="{{route('viewCartPage')}}" method="POST">
                                @csrf
                                <input type="hidden" id="i1" name="i1" />
                                <input type="hidden" id="i2" name="i2" />
                                <input type="hidden" id="i3" name="i3" />
                                <input type="hidden" id="i4" name="i4" />
                                <input type="hidden" id="i5" name="i5" />
                                <input type="hidden" id="i6" name="i6" />
                                <input type="hidden" id="i7" name="i7" />
                                <input type="hidden" id="i8" name="i8" />
                                <input type="hidden" id="i9" name="i9" />
                                <input type="hidden" id="i10" name="i10" />
                                <input type="hidden" id="i11" name="i11" />
                                <input type="hidden" id="i12" name="i12" />
                                <input type="hidden" id="i13" name="i13" />
                                <input type="hidden" id="i14" name="i14" />
                                <input type="hidden" id="i15" name="i15" />
                                <input type="hidden" id="i16" name="i16" />
                                <input type="hidden" id="i17" name="i17" />


                                <input type="submit" id="FSubmit" style="display: none;" />
                            </form>
                            <input type="checkbox" class="input" id="input1" name="inputs">
                            <input type="checkbox" class="input" id="input2" name="inputs">
                            <input type="checkbox" class="input" id="input3" name="inputs">
                            <input type="checkbox" class="input" id="input4" name="inputs">
                            <input type="checkbox" class="input" id="input5" name="inputs">
                            <input type="checkbox" class="input" id="input6" name="inputs">
                            <input type="checkbox" class="input" id="input7" name="inputs">
                            <input type="checkbox" class="input" id="input8" name="inputs">
                            <input type="checkbox" class="input" id="input9" name="inputs">
                            <input type="checkbox" class="input" id="input10" name="inputs">
                            <input type="checkbox" class="input" id="input11" name="inputs">
                            <input type="checkbox" class="input" id="input12" name="inputs">
                            <input type="checkbox" class="input" id="input13" name="inputs">
                            <input type="checkbox" class="input" id="input14" name="inputs">
                            <input type="checkbox" class="input" id="input15" name="inputs">
                            <input type="checkbox" class="input" id="input16" name="inputs">
                            <input type="checkbox" class="input" id="input17" name="inputs">
                            <label for="input1">
                                <div id="b1" class="button">1</div>

                            </label>
                            <label for="input2">
                                <div id="b2" class="button">2</div>
                            </label>
                            <label for="input3">
                                <div id="b3" class="button">3</div>
                            </label>
                            <label for="input4">
                                <div id="b4" class="button">4</div>
                            </label>
                            <label for="input5">
                                <div id="b5" class="button">5</div>
                            </label>
                            <label for="input6">
                                <div id="b6" class="button">6</div>
                            </label>
                            <label for="input7">
                                <div id="b7" class="button">7</div>
                            </label>
                            <label for="input8">
                                <div id="b8" class="button">8</div>
                            </label>
                            <label for="input9">
                                <div id="b9" class="button">9</div>
                            </label>
                            <label for="input10">
                                <div id="b10" class="button">10</div>
                            </label>
                            <label for="input11">
                                <div id="b11" class="button">11</div>
                            </label>
                            <label for="input12">
                                <div id="b12" class="button">12</div>
                            </label>
                            <label for="input13">
                                <div id="b13" class="button">13</div>
                            </label>
                            <label for="input14">
                                <div id="b14" class="button">14</div>
                            </label>
                            <label for="input15">
                                <div id="b15" class="button">15</div>
                            </label>
                            <label for="input16">
                                <div id="b16" class="button">16</div>
                            </label>
                            <label for="input17">
                                <div id="b17" class="button">17</div>
                            </label>


                            <div id="content1" class="content">

                                <div style="text-align: left; margin-left: 22%;">
                                    <label for="input1" class="cross1">X</label>
                                </div>
                                <p class="parag1"><input class="inppo" value="0" type="" id="user1"><label for="input1"
                                        class="but" onclick="checkinput(1,'Neck -')">submit</label></p>


                            </div>

                            <div id="content2" class="content2">
                                <div style="text-align: right;margin-right: 68%;">
                                    <label for="input2" class="cross2">X</label>
                                </div>
                                <p class="parag2"><input class="inppo" value="0" type="" id="user2"><label for="input2"
                                        class="but" onclick="checkinput(2,'Shoulder -')">submit</label></p>

                            </div>
                            <div id="content3" class="content3">
                                <div style="text-align: right;margin-right: 91%;">
                                    <label for="input3" class="cross3">X</label>
                                </div>
                                <p class="parag3"><input class="inppo" value="0" type="" id="user3"><label for="input3"
                                        class="but" onclick="checkinput(3,'X front -')">submit</label></p>

                            </div>
                            <div id="content4" class="content4">
                                <div style="text-align: right;margin-right: 67%;">
                                    <label for="input4" class="cross4">X</label>
                                </div>
                                <p class="parag4"><input class="inppo" value="0" type="" id="user4"><label for="input4"
                                        class="but" onclick="checkinput(4,'Bust -')">submit</label></p>

                            </div>
                            <div id="content5" class="content5">
                                <div style="text-align: right;margin-right: 96%;">
                                    <label for="input5" class="cross5">X</label>
                                </div>
                                <p class="parag5"><input class="inppo" value="0" type="" id="user5"><label for="input5"
                                        class="but" onclick="checkinput(5,'Under bust -')">submit</label></p>

                            </div>

                            <div id="content6" class="content6">
                                <div style="text-align: right;margin-right: 67%;">
                                    <label for="input6" class="cross6">X</label>
                                </div>
                                <p class="parag6"><input class="inppo" value="0" type="" id="user6"><label for="input6"
                                        class="but" onclick="checkinput(6,'Waist -')">submit</label></p>

                            </div>
                            <div id="content7" class="content7">
                                <div style="text-align: right;margin-right: 81%;">
                                    <label for="input7" class="cross7">X</label>
                                </div>
                                <p class="parag7"><input class="inppo" value="0" type="" id="user7"><label for="input7"
                                        class="but" onclick="checkinput(7,'Lower waist -')">submit</label></p>

                            </div>
                            <div id="content8" class="content8">
                                <div style="text-align: right;margin-right: 81%;">
                                    <label for="input8" class="cross8">X</label>
                                </div>
                                <p class="parag8"><input class="inppo" value="0" type="" id="user8"><label for="input8"
                                        class="but" onclick="checkinput(8,'hip -')">submit</label></p>

                            </div>
                            <div id="content9" class="content9">
                                <div style="text-align: right;margin-right: 81%;">
                                    <label for="input9" class="cross9">X</label>
                                </div>
                                <p class="parag9"><input class="inppo" value="0" type="" id="user9"><label for="input9"
                                        class="but" onclick="checkinput(9,'Arm hole -')">submit</label></p>

                            </div>

                            <div id="content10" class="content10">
                                <div style="text-align: right;margin-right: 84%;">
                                    <label for="input10" class="cross10">X</label>
                                </div>
                                <p class="parag10"><input class="inppo" value="0" type="" id="user10"><label
                                        for="input10" class="but" onclick="checkinput(10,'Muscle -')">submit</label></p>

                            </div>
                            <div id="content11" class="content11">
                                <div style="text-align: right;margin-right: 84%;">
                                    <label for="input11" class="cross11">X</label>
                                </div>
                                <p class="parag11"><input class="inppo" value="0" type="" id="user11"><label
                                        for="input11" class="but"
                                        onclick="checkinput(11,'SLV full length -')">submit</label></p>

                            </div>

                            <div id="content12" class="content12">
                                <div style="text-align: right;margin-right: 84%;">
                                    <label for="input12" class="cross12">X</label>
                                </div>
                                <p class="parag12"><input class="inppo" value="0" type="" id="user12"><label
                                        for="input12" class="but" onclick="checkinput(12,'Elbow -')">submit</label></p>

                            </div>
                            <div id="content13" class="content13">
                                <div style="text-align: right;margin-right: 84%;">
                                    <label for="input13" class="cross13">X</label>
                                </div>
                                <p class="parag13"><input class="inppo" value="0" type="" id="user13"><label
                                        for="input13" class="but" onclick="checkinput(13,'Cuff -')">submit</label></p>

                            </div>
                            <div id="content14" class="content14">
                                <div style="text-align: right;margin-right: 82%;">
                                    <label for="input14" class="cross14">X</label>
                                </div>
                                <p class="parag14"><input class="inppo" value="0" type="" id="user14"><label
                                        for="input14" class="but" onclick="checkinput(14,'Thigh -')">submit</label></p>

                            </div>
                            <div id="content15" class="content15">
                                <div style="text-align: right;margin-right: 82%;">
                                    <label for="input15" class="cross15">X</label>
                                </div>
                                <p class="parag15"><input class="inppo" value="0" type="" id="user15"><label
                                        for="input15" class="but" onclick="checkinput(15,'Knee -')">submit</label></p>

                            </div>
                            <div id="content16" class="content16">
                                <div style="text-align: right;margin-right: 82%;">
                                    <label for="input16" class="cross16">X</label>
                                </div>
                                <p class="parag16"><input class="inppo" value="0" type="" id="user16"><label
                                        for="input16" class="but" onclick="checkinput(16,'Calf -')">submit</label></p>

                            </div>
                            <div id="content17" class="content17">
                                <div style="text-align: right;margin-right: 83%;">
                                    <label for="input17" class="cross17">X</label>
                                </div>
                                <p class="parag17"><input class="inppo" value="0" type="" id="user17"><label
                                        for="input17" class="but" onclick="checkinput(17,'Ankle hem -')">submit</label>
                                </p>

                            </div>

                        </div>


                    </div>
                    <div class="col-lg-2 century">
                        <div class="ropu">
                            <p style="color: #D32F2F"><b>Details about measurement</b></p>


                            <p><span style="color: #D32F2F">1-</span>Neck</p>
                            <p><span style="color: #D32F2F">2-</span>Shoulder</p>
                            <p><span style="color: #D32F2F">3-</span>X front</p>
                            <p><span style="color: #D32F2F">4-</span>Bust</p>
                            <p><span style="color: #D32F2F">5-</span>Under bust</p>
                            <p><span style="color: #D32F2F">6-</span>Waist</p>
                            <p><span style="color: #D32F2F">7-</span>Lower waist</p>
                            <p><span style="color: #D32F2F">8-</span>Hip</p>
                            <p><span style="color: #D32F2F">9-</span>Arm hole</p>
                            <p><span style="color: #D32F2F">10-</span>Muscle</p>
                            <p><span style="color: #D32F2F">11-</span>SLV full length</p>
                            <p><span style="color: #D32F2F">12-</span>Elbow</p>
                            <p><span style="color: #D32F2F">13-</span>Cuff</p>
                            <p><span style="color: #D32F2F">14-</span>Thigh</p>
                            <p><span style="color: #D32F2F">15-</span>Knee</p>
                            <p><span style="color: #D32F2F">16-</span>Calf</p>
                            <p><span style="color: #D32F2F">17-</span>Ankle hem</p>


                        </div>
                    </div>





                </div>
            </div>
        </div>
        @include('Common/Scripts')
        <script>
        addToCartfun = (product_id) => {
            axios.post('/laravel/addProductCon', {
                    product_id
                })
                .then((res) => {
                    // console.log(res.data)
                    document.getElementById('FSubmit').click();
                }).catch((err) => {
                    console.log(err);
                })
        }
        </script>

        <script type="text/javascript">
        function checkinput(e, name) {
            if (e == 1) {
                valueOfInput = document.getElementById("user1").value;
                document.getElementById('i1').value = valueOfInput;
                document.getElementById('partName1').textContent = name;
                document.getElementById('partValue1').textContent = valueOfInput;
                document.getElementById("b1").className = "button1";
            }
            if (e == 2) {
                valueOfInput = document.getElementById("user2").value;
                document.getElementById('i2').value = valueOfInput;
                document.getElementById('partName2').textContent = name;
                document.getElementById('partValue2').textContent = valueOfInput;
                document.getElementById("b2").className = "button1";
            }
            if (e == 3) {
                valueOfInput = document.getElementById("user3").value;
                document.getElementById('i3').value = valueOfInput;
                document.getElementById('partName3').textContent = name;
                document.getElementById('partValue3').textContent = valueOfInput;
                document.getElementById("b3").className = "button1";
            }
            if (e == 4) {
                valueOfInput = document.getElementById("user4").value;
                document.getElementById('i4').value = valueOfInput;
                document.getElementById('partName4').textContent = name;
                document.getElementById('partValue4').textContent = valueOfInput;
                document.getElementById("b4").className = "button1";
            }
            if (e == 5) {
                valueOfInput = document.getElementById("user5").value;
                document.getElementById('i5').value = valueOfInput;
                document.getElementById('partName5').textContent = name;
                document.getElementById('partValue5').textContent = valueOfInput;
                document.getElementById("b5").className = "button1";
            }
            if (e == 6) {
                valueOfInput = document.getElementById("user6").value;
                document.getElementById('i6').value = valueOfInput;
                document.getElementById('partName6').textContent = name;
                document.getElementById('partValue6').textContent = valueOfInput;
                document.getElementById("b6").className = "button1";
            }
            if (e == 7) {
                valueOfInput = document.getElementById("user7").value;
                document.getElementById('i7').value = valueOfInput;
                document.getElementById('partName7').textContent = name;
                document.getElementById('partValue7').textContent = valueOfInput;
                document.getElementById("b7").className = "button1";
            }
            if (e == 8) {
                valueOfInput = document.getElementById("user8").value;
                document.getElementById('i8').value = valueOfInput;
                document.getElementById('partName8').textContent = name;
                document.getElementById('partValue8').textContent = valueOfInput;
                document.getElementById("b8").className = "button1";
            }
            if (e == 9) {
                valueOfInput = document.getElementById("user9").value;
                document.getElementById('i9').value = valueOfInput;
                document.getElementById('partName9').textContent = name;
                document.getElementById('partValue9').textContent = valueOfInput;
                document.getElementById("b9").className = "button1";
            }
            if (e == 10) {
                valueOfInput = document.getElementById("user10").value;
                document.getElementById('i10').value = valueOfInput;
                document.getElementById('partName10').textContent = name;
                document.getElementById('partValue10').textContent = valueOfInput;
                document.getElementById("b10").className = "button1";
            }
            if (e == 11) {
                valueOfInput = document.getElementById("user11").value;
                document.getElementById('i11').value = valueOfInput;
                document.getElementById('partName11').textContent = name;
                document.getElementById('partValue11').textContent = valueOfInput;
                document.getElementById("b11").className = "button1";
            }
            if (e == 12) {
                valueOfInput = document.getElementById("user12").value;
                document.getElementById('i12').value = valueOfInput;
                document.getElementById('partName12').textContent = name;
                document.getElementById('partValue12').textContent = valueOfInput;
                document.getElementById("b12").className = "button1";
            }
            if (e == 13) {
                valueOfInput = document.getElementById("user13").value;
                document.getElementById('i13').value = valueOfInput;
                document.getElementById('partName13').textContent = name;
                document.getElementById('partValue13').textContent = valueOfInput;
                document.getElementById("b13").className = "button1";
            }
            if (e == 14) {
                valueOfInput = document.getElementById("user14").value;
                document.getElementById('i14').value = valueOfInput;
                document.getElementById('partName14').textContent = name;
                document.getElementById('partValue14').textContent = valueOfInput;
                document.getElementById("b14").className = "button1";
            }
            if (e == 15) {
                valueOfInput = document.getElementById("user15").value;
                document.getElementById('i15').value = valueOfInput;
                document.getElementById('partName15').textContent = name;
                document.getElementById('partValue15').textContent = valueOfInput;
                document.getElementById("b15").className = "button1";
            }
            if (e == 16) {
                valueOfInput = document.getElementById("user16").value;
                document.getElementById('i16').value = valueOfInput;
                document.getElementById('partName16').textContent = name;
                document.getElementById('partValue16').textContent = valueOfInput;
                document.getElementById("b16").className = "button1";
            }
            if (e == 17) {
                valueOfInput = document.getElementById("user17").value;
                document.getElementById('i17').value = valueOfInput;
                document.getElementById('partName17').textContent = name;
                document.getElementById('partValue17').textContent = valueOfInput;
                document.getElementById("b17").className = "button1";
            }
            var v = document.getElementById("show");
            if (v.style.display === "none") {
                v.style.display = "block";
            }


        }
        </script>



        @include('Common/footer')
</body>

</html>