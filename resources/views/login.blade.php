
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from preview.hasthemes.com/tasnm-preview/tasnm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 06:51:56 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
		<!-- google fonts -->
		<link href='{{asset('../../../fonts.googleapis.com/css9b11.css?family=Poppins:400,300,500,600,700')}}' rel='stylesheet' type='text/css'>
		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{asset('tasnm/css/bootstrap.min.css')}}">
		<!-- animate css -->
        <link rel="stylesheet" href="{{asset('tasnm/css/animate.css')}}">
		<!-- pe-icon-7-stroke -->
		<link rel="stylesheet" href="{{asset('tasnm/css/pe-icon-7-stroke.min.css')}}">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{asset('tasnm/css/jquery-ui.min.css')}}">
        <!-- Image Zoom CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('tasnm/css/img-zoom/jquery.simpleLens.css')}}">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="tasnm/css/meanmenu.min.css">
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="{{asset('tasnm/lib/css/nivo-slider.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('tasnm/lib/css/preview.css')}}" type="text/css" media="screen" />
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset('tasnm/css/owl.carousel.css')}}">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="{{asset('tasnm/css/font-awesome.min.css')}}">
		<!-- style css -->
		<link rel="stylesheet" href="{{asset('tasnm/style.css')}}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{asset('tasnm/css/responsive.css')}}">
		<!-- modernizr css -->
        <script src="{{asset('tasnm/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header section start -->
        <header>
            @include('user.partials.header')
		</header>
        <!-- header section end -->
        <!-- pages-title-start -->
		<section class="contact-img-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="con-text">
                            <h2 class="page-title">Login</h2>
                            <p><a href="#">Home</a> | Login</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- pages-title-end -->
		<!-- login content section start -->
		<div class="login-area" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="tb-login-form ">
                            <h5 class="tb-title">ĐĂNG NHẬP</h5>
                            <p>XIN CHÀO, MỜI BẠN ĐĂNG NHẬP</p>
                            <div class="tb-social-login">
                                <a class="btn btn-primary" href="{{route('login')}}">ĐĂNG NHẬP</a>
                                <a class="btn btn-success" href="{{route('register')}}">ĐĂNG KÝ</a>
                            </div>
                            @if (session('message'))
                                <p class="text-danger">{{session('message')}}</p>
                            @endif
                            <form action="{{route('postLogin')}}" method="POST">
                                @csrf
                                <p class="checkout-coupon top log a-an">
                                    <label class="l-contact">
                                        Email Address:
                                        <em>*</em>
                                    </label>
                                    <input type="email" name="email">
                                </p>
                                @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror <br>
                                <p class="checkout-coupon top-down log a-an">
                                    <label class="l-contact">
                                        Password
                                        <em>*</em>
                                    </label>
                                    <input type="password" name="password">
                                </p>
                                @error('password')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror <br>
                                <div class="forgot-password1">
                                    <label class="inline2">
                                        <input type="checkbox" name="rememberme7">
                                        Remember me! <em>*</em>
                                    </label>
                                    <a class="forgot-password" href="#">Forgot Your password?</a>
                                </div>
                                <p class="login-submit5" style="padding-bottom: 50px">
                                    <input class="button-primary" type="submit" value="đăng nhập">
                                </p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
		<!-- login  content section end -->
        <!-- footer section start -->
		<footer class="re-footer-section">
			<!-- footer-top area start -->
            @include('user.partials.footer')
			<!-- footer-bottom area end -->
		</footer>
        <!-- footer section end -->
        
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="{{asset('tasnm/js/vendor/jquery-1.12.0.min.js')}}"></script>
		<!-- bootstrap js -->
        <script src="{{asset('tasnm/js/bootstrap.min.js')}}"></script>
        <!-- parallax js -->
        <script src="{{asset('tasnm/js/parallax.min.js')}}"></script>
		<!-- owl.carousel js -->
        <script src="{{asset('tasnm/js/owl.carousel.min.js')}}"></script>
        <!-- Img Zoom js -->
		<script src="{{asset('tasnm/js/img-zoom/jquery.simpleLens.min.js')}}"></script>
		<!-- meanmenu js -->
        <script src="{{asset('tasnm/js/jquery.meanmenu.js')}}"></script>
		<!-- jquery.countdown js -->
        <script src="{{asset('tasnm/js/jquery.countdown.min.js')}}"></script>
		<!-- Nivo slider js
		============================================ --> 		
		<script src="{{asset('tasnm/lib/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
		<script src="{{asset('tasnm/lib/home.js')}}" type="text/javascript"></script>
		<!-- jquery-ui js -->
        <script src="{{asset('tasnm/js/jquery-ui.min.js')}}"></script>
		<!-- sticky js -->
        <script src="{{asset('tasnm/js/sticky.js')}}"></script>
		<!-- plugins js -->
        <script src="{{asset('tasnm/js/plugins.js')}}"></script>
		<!-- main js -->
        <script src="{{asset('tasnm/js/main.js')}}"></script>
    </body>

<!-- Mirrored from preview.hasthemes.com/tasnm-preview/tasnm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 06:51:56 GMT -->
</html>
