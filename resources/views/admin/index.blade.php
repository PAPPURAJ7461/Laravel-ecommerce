<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('assets/backend/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/backend/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/backend/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/backend/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('assets/backend/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
   <!--  <link href="{{ asset('assets/backend/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/backend/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/backend/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/backend/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/backend/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/backend/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/backend/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
 -->
    <!-- Main CSS-->
    <link href="{{ asset('assets/backend/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                              <!--   <img src="{{ asset('assets/backend/images/icon/logo.png') }}" alt="CoolAdmin"> -->
                              <h1>Admin Login</h1>
                            </a>
                        </div>
                        <div class="login-form">
                        	@if(session('error'))
                              
                              <div class="alert alert-danger">{{ session('error') }}</div>

                        	@endif
                            <form action="{{ route('admin.auth') }}" method="post">
                            	@csrf
                                <div class="form-group">
                                    <label>Email Address<span class="text-danger">*</span></label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
									@error('email')
									<small class="text-danger">{{ $message }}</small>
									@enderror
                                </div>
                                <div class="form-group">
                                    <label>Password<span class="text-danger">*</span></label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                    @error('password')
									<small class="text-danger">{{ $message }}</small>
									@enderror
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                               
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('assets/backend/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('assets/backend/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <!-- <script src="{{ asset('assets/backend/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('assets/backend/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('assets/backend/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('assets/backend/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/select2/select2.min.js') }}">
    </script> -->

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->