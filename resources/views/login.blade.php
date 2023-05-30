<!DOCTYPE html>
<html lang="en">

<head>
    <title>APP - Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/vendor/login_v2/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/assets/vendor/login_v2/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/assets/vendor/login_v2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/assets/vendor/login_v2/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/vendor/login_v2/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/assets/vendor/login_v2/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/assets/vendor/login_v2/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/assets/vendor/login_v2/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/assets/vendor/login_v2/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/vendor/login_v2/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/vendor/login_v2/css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    @include('sweetalert::alert')


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form action="/sesi/login" class="login100-form validate-form" method="post">
                    @csrf
                    <span class="login100-form-title p-b-26">
                        Welcome
                    </span>
                    <span class="login100-form-title p-b-48">
                        <i class="zmdi zmdi-font"></i>
                    </span>
                    @include('component/pesan')
                    <div class="wrap-input100">
                        <input class="input100" type="text" name="email">
                        {{-- value="{{ Session::get('email') }}" ==> jika ingin menggunakan flash massage --}}
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input100 ">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit" value="login">
                                Login
                            </button>
                        </div>
                        <div class="text-center p-t-10">
                            <a class="txt1" href="{{ url('logout') }}">
                                Back To Home?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ '/' }}assets/vendor/login_v2/vendor/bootstrap/js/popper.js"></script>
    <script src="{{ '/' }}assets/vendor/login_v2/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ '/' }}assets/vendor/login_v2/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ '/' }}assets/vendor/login_v2/vendor/daterangepicker/moment.min.js"></script>
    <script src="{{ '/' }}assets/vendor/login_v2/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="{{ '/' }}assets/vendor/login_v2/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="{{ '/' }}assets/vendor/login_v2/js/main.js"></script>

</body>

</html>
