<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from preview.hasthemes.com/tasnm-preview/tasnm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 06:51:56 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chi tiết sản phẩm</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
  ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- google fonts -->
    <link href='{{ asset('../../../fonts.googleapis.com/css9b11.css?family=Poppins:400,300,500,600,700') }}'
        rel='stylesheet' type='text/css'>
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ asset('tasnm/css/bootstrap.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('tasnm/css/animate.css') }}">
    <!-- pe-icon-7-stroke -->
    <link rel="stylesheet" href="{{ asset('tasnm/css/pe-icon-7-stroke.min.css') }}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{ asset('tasnm/css/jquery-ui.min.css') }}">
    <!-- Image Zoom CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('tasnm/css/img-zoom/jquery.simpleLens.css') }}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="tasnm/css/meanmenu.min.css">
    <!-- nivo slider CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('tasnm/lib/css/nivo-slider.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('tasnm/lib/css/preview.css') }}" type="text/css" media="screen" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('tasnm/css/owl.carousel.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('tasnm/css/font-awesome.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('tasnm/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('tasnm/css/responsive.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('tasnm/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
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
                        <h2 class="page-title">Single Product</h2>
                        <p><a href="#">Home</a> | Single Product</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pages-title-end -->
    <!-- single peoduct content section start -->
<section class="single-product-area sit">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6 col-sm-6 none-si-pro">
                        <div class="pro-img-tab-content tab-content">
                            <div class="tab-pane active" id="image-1">
                                <div class="simpleLens-big-image-container">
                                    <a class="simpleLens-lens-image" data-lightbox="roadtrip" data-lens-image="{{ $product->image }}" href="{{ $product->image }}">
                                        <img src="{{ $product->image }}" alt="" class="simpleLens-big-image">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="pro-img-tab-slider indicator-style2">
                            <div class="item"><a href="#image-1" data-toggle="tab"><img src="{{ $product->image }}" alt="" /></a></div>
                            <div class="item"><a href="#image-2" data-toggle="tab"><img src="{{ $product->image }}" alt="" /></a></div>
                            <div class="item"><a href="#image-3" data-toggle="tab"><img src="{{ $product->image }}" alt="" /></a></div>
                            <div class="item"><a href="#image-4" data-toggle="tab"><img src="{{ $product->image }}" alt="" /></a></div>
                            <div class="item"><a href="#image-5" data-toggle="tab"><img src="{{ $product->image }}" alt="" /></a></div>
                            <div class="item"><a href="#image-6" data-toggle="tab"><img src="{{ $product->image }}" alt="" /></a></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="cras">
                            <div class="product-name">
                                <h2>{{ $product->name }}</h2>
                            </div>
                            <div class="short-description">
                                <p>{{ $product->description }}</p>
                            </div>
                            <div class="pre-box">
                                <span class="special-price">${{ $product->price }}</span>
                            </div>
                            <div class="add-to-box1">
                                <div class="add-to-box add-to-box2">
                                    <div class="add-to-cart">
                                        <div class="input-content">
                                            <label>Quantity:</label>
                                            <div class="quantity">
                                                <div class="cart-plus-minus">
                                                  <input type="text" value="0" name="qtybutton" class="cart-plus-minus-box">
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-retweet"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="s-cart-img">
                                <a href="#">
                                    <img alt="" src="img/icon-img/screenshot_2.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="text">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Product Description</a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews (1)</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tab-con2">
                                <div role="tabpanel" class="tab-pane active" id="home">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue. Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <form class="form-horizontal">
                                        <div id="review">
                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <td style="width: 50%;">
                                                        <strong>demo</strong>
                                                    </td>
                                                    <td class="text-right">25/01/2016</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p class="text an-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet sem varius, fringilla erat a, blandit arcu. Cras sit amet justo eu erat imperdiet dictum ac eget nulla. Aliquam erat volutpat.</p>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                            <i class="fa fa-star-o fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                            <i class="fa fa-star-o fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star-o fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star-o fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star-o fa-stack-2x"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div class="text-right"></div>
                                        </div>
                                        <h2 class="write">Write a review</h2>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label" for="input-name">Your Name</label>
                                                <input id="input-name" class="form-control" type="text" value="" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label" for="input-review">Your Review</label>
                                                <textarea id="input-review" class="form-control" rows="5" name="text"></textarea>
                                                <div class="help-block">
                                                    <span class="text-danger">Note:</span>
                                                    HTML is not translated!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label">Rating</label>
                                                    Bad 
                                                <input type="radio" value="1" name="rating">
                                                <input type="radio" value="2" name="rating">
                                                <input type="radio" value="3" name="rating">
                                                <input type="radio" value="4" name="rating">
                                                <input type="radio" value="5" name="rating">
                                                 Good
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label" for="input-captcha">Enter the code in the box below</label>
                                                <input id="input-captcha" class="form-control" type="text" value="" name="captcha">
                                            </div>
                                        </div>
                                        <div class="buttons si-button">
                                            <div class="pull-right">
                                                <button id="button-review" class="btn btn-primary" data-loading-text="Loading..." type="button">Continue</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-sidebar">
                    <div class="single-sidebar an-shop">
                        <h3 class="wg-title">BEST SELLER</h3>
                        <ul>
                           <li class="b-none7">
                                <div class="tb-recent-thumbb">
                                    <a href="#">
                                        <img class="attachment" src="img/products/6.jpg" alt="">
                                    </a>
                                </div>
                                <div class="tb-recentb7">
                                    <div class="tb-beg">
                                        <a href="#">Lambskin Shoe</a>
                                    </div>
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount">$180.00</span>
                                    </div>
                                </div>
                            </li>
                            <li class="b-none7">
                                <div class="tb-recent-thumbb">
                                    <a href="#">
                                        <img class="attachment" src="img/products/10.jpg" alt="">
                                    </a>
                                </div>
                                <div class="tb-recentb7">
                                    <div class="tb-beg">
                                        <a href="#">Lambskin Shoe</a>
                                    </div>
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount">$180.00</span>
                                    </div>
                                </div>
                            </li>
                            <li class="b-none7">
                                <div class="tb-recent-thumbb">
                                    <a href="#">
                                        <img class="attachment" src="img/products/8.jpg" alt="">
                                    </a>
                                </div>
                                <div class="tb-recentb7">
                                    <div class="tb-beg">
                                        <a href="#">Lambskin Shoe</a>
                                    </div>
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount">$180.00</span>
                                    </div>
                                </div>
                            </li>
                            <li class="b-none7">
                                <div class="tb-recent-thumbb">
                                    <a href="#">
                                        <img class="attachment" src="img/products/9.jpg" alt="">
                                    </a>
                                </div>
                                <div class="tb-recentb7">
                                    <div class="tb-beg">
                                        <a href="#">Lambskin Shoe</a>
                                    </div>
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount">$180.00</span>
                                    </div>
                                </div>
                            </li>
                       </ul>
                    </div>
                    <div class="ro-info-box-wrap tpl3 st">
                        <div class="tb-image">
                            <img src="img/products/a1.jpg" alt="">
                        </div>
                        <div class="tb-content">
                            <div class="tb-content-inner an-inner">
                                <h5>WOMEN'S FASHION</h5>
                                <h3>MID SEASON SALE</h3>
                                <h6>
                                    <a href="#">SHOP NOW</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- footer section start -->
    <footer class="re-footer-section">
        <!-- footer-top area start -->
        @include('user.partials.footer')
        <!-- footer-bottom area end -->
    </footer>
    <!-- footer section end -->

    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="{{ asset('tasnm/js/vendor/jquery-1.12.0.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('tasnm/js/bootstrap.min.js') }}"></script>
    <!-- parallax js -->
    <script src="{{ asset('tasnm/js/parallax.min.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('tasnm/js/owl.carousel.min.js') }}"></script>
    <!-- Img Zoom js -->
    <script src="{{ asset('tasnm/js/img-zoom/jquery.simpleLens.min.js') }}"></script>
    <!-- meanmenu js -->
    <script src="{{ asset('tasnm/js/jquery.meanmenu.js') }}"></script>
    <!-- jquery.countdown js -->
    <script src="{{ asset('tasnm/js/jquery.countdown.min.js') }}"></script>
    <!-- Nivo slider js
  ============================================ -->
    <script src="{{ asset('tasnm/lib/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('tasnm/lib/home.js') }}" type="text/javascript"></script>
    <!-- jquery-ui js -->
    <script src="{{ asset('tasnm/js/jquery-ui.min.js') }}"></script>
    <!-- sticky js -->
    <script src="{{ asset('tasnm/js/sticky.js') }}"></script>
    <!-- plugins js -->
    <script src="{{ asset('tasnm/js/plugins.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('tasnm/js/main.js') }}"></script>
</body>

<!-- Mirrored from preview.hasthemes.com/tasnm-preview/tasnm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 06:51:56 GMT -->

</html>