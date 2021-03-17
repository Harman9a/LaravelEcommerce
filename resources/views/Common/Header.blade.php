@include('Common/Scripts')
<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{ route('Home') }}">
                <img src="{{asset('public/images/logo.png')}}" alt="" /><span>
                    Template
                </span>
            </a>

            <div class="navbar-collapse" id="" style="
    width: 10px;
">
                <div class="container">
                    <div class=" mr-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav justify-content-between ">
                            <div class="d-none d-lg-flex">
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{asset('public/fruit.html')}}">
                                </a>
                                    Customer Number : 01234567890
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{asset('public/service.html')}}">
                                        Demo@gmail.com
                                    </a>
                                </li> -->
                            </div>
                            <div class=" d-none d-lg-flex">

                                <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->

                                <div id="id01" class="modal">

                                    {{-- <form class="modal-content animate" action="{{ route('loginPage') }}"
                                    method="post"> --}}
                                    {{-- @csrf --}}
                                    <div class="modal-content animate">

                                        <div class="imgcontainer">
                                            <span onclick="document.getElementById('id01').style.display='none'"
                                                class="close" title="Close Modal">&times;</span>
                                        </div>

                                        <div class="container">
                                            <label for="uname"><b>Username</b></label>
                                            <input type="text" placeholder="Enter Username" name="uname" required>

                                            <label for="psw"><b>Password</b></label>
                                            <input type="password" placeholder="Enter Password" name="psw" required>

                                            <button onclick="loginUser()" style="padding: 10px;">Login</button>
                                            <label>
                                                <input type="checkbox" checked="checked" name="remember"> Remember me
                                            </label>
                                        </div>

                                        <div class="container" style="background-color:#f1f1f1">
                                            <button type="button"
                                                onclick="document.getElementById('id01').style.display='none'"
                                                class="cancelbtn">Cancel</button>
                                            <!--  <span class="psw">Forgot <a href="#">password?</a></span> -->
                                        </div>
                                    </div>

                                    {{-- </form> --}}
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="custom_menu-btn">
                    <button onclick="openNav()"></button>
                </div>
                <div id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">
                        <a href="{{ route('Home') }}">HOME</a>
                        <a href="{{ route('Products') }}">PRODUCTS</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<script>
loginUser = () => {
    axios.post('login', {
            email: 'admin@g.com',
            password: '132465'
        })
        .then((res) => {
            console.log(res.data)
        })
        .catch((err) => {
            cosnole.log(err)
        })
}
</script>