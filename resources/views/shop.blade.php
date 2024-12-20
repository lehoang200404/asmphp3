<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from preview.hasthemes.com/tasnm-preview/tasnm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 06:51:56 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop</title>
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
                        <h2 class="page-title">Shop</h2>
                        <p><a href="#">Home</a> | shop</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pages-title-end -->
    <!-- shop-style content section start -->
    <section class="pages products-page section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3 col-sm-12">
                    <div class="all-shop-sidebar">
                        <div class="top-shop-sidebar">
                            <h3 class="wg-title">SHOP BY</h3>
                        </div>
                        <div class="shop-one">
                            <h3 class="wg-title2">Categories</h3>
                            <ul class="product-categories">
                                @foreach ($categories as $category)
                                    <li class="cat-item">
                                        <a href="#">{{ $category->name }}</a>
                                        {{-- <span class="count">(10)</span> --}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="shop-one">
                            <h3 class="wg-title2">Our Brand</h3>
                            <ul class="product-categories">
                                <li class="cat-item">
                                    <a href="#">Nike</a>
                                    <span class="count">(1)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Religion</a>
                                    <span class="count">(1)</span>
                                </li>
                                <li class="cat-item-10">
                                    <a href="#">Diesel</a>
                                    <span class="count">(1)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Monki</a>
                                    <span class="count">(1)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-one re-shop-one">
                            <h3 class="wg-title2">Choose Price</h3>
                            <div class="widget shop-filter">
                                <div class="info_widget">
                                    <div class="price_filter">
                                        <div id="slider-range"></div>
                                        <div id="amount">
                                            <input type="text" name="first_price" class="first_price" />
                                            <input type="text" name="last_price" class="last_price" />
                                            <button class="button-shop" type="submit"><i
                                                    class="fa fa-search search-icon"></i></button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-one re-shop-one">
                            <h3 class="wg-title2">Choose Color</h3>
                            <ul class="product-categories">
                                <li class="cat-item cat-item-11">
                                    <a href="#">Black</a>
                                    <span class="count">(1)</span>
                                </li>
                                <li class="cat-item cat-item-8">
                                    <a href="#">Orange</a>
                                    <span class="count">(1)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="top-shop-sidebar sim">
                            <h3 class="wg-title">Compare Products</h3>
                            <ul class="products-list">
                                <li class="cat-item cat-item-11">No products to compare</li>
                            </ul>
                            <a class="clear-all" href="#">Clear all</a>
                            <a class="blog8" href="#">Compare</a>
                        </div>
                        <div class="top-shop-sidebar sim2">
                            <h3 class="wg-title">Community Pool</h3>
                        </div>
                        <div class="shop-one">
                            <ul class="product-categories">
                                <li class="cat-item cat-item-11">
                                    <a href="#">Black</a>
                                    <span class="count">(1)</span>
                                </li>
                                <li class="cat-item cat-item-8">
                                    <a href="#">Orange</a>
                                    <span class="count">(1)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="top-shop-sidebar an-shop">
                            <h3 class="wg-title">TOP SẢN PHẨM</h3>
                            <ul>
                                @foreach ($newProducts as $product)
                                    <li class="b-none">
                                        <div class="tb-recent-thumbb">
                                            <a href="#">
                                                <img src="{{ $product->image }}" alt="{{ $product->name }}" />
                                            </a>
                                        </div>
                                        <div class="tb-recentb">
                                            <div class="tb-beg">
                                                <a href="#">{{ $product->name }}</a>
                                            </div>
                                            <div class="tb-product-price font-noraure-3">
                                                <span class="amount">${{ $product->price }}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9 col-sm-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="features-tab">
                                <!-- Nav tabs -->
                                <div class="shop-all-tab">
                                    <div class="two-part">
                                        <ul class="nav tabs" role="tablist">
                                            <li class="vali">View as:</li>
                                            <li role="presentation" class="active"><a href="#home"
                                                    aria-controls="home" role="tab" data-toggle="tab"><i
                                                        class="fa fa-th-large"></i></a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile"
                                                    role="tab" data-toggle="tab"><i
                                                        class="fa fa-align-justify"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="re-shop">
                                        <div class="sort-by">
                                            <div class="shop6">
                                                <label>Sort By :</label>
                                                <select>
                                                    <option value="">Default sorting</option>
                                                    <option value="">Sort by popularity</option>
                                                    <option value="">Sort by average rating</option>
                                                    <option value="">Sort by newness</option>
                                                    <option value="">Sort by price: low to high</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="shop5">
                                            <label>Show :</label>
                                            <select>
                                                <option value="">12</option>
                                                <option value="">24</option>
                                                <option value="">36</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="row">
                                            <div class="shop-tab">
                                                <!-- single-product start -->
                                                @foreach ($allProducts as $product)
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <div class="pro-type">
                                                                    <span>new</span>
                                                                </div>
                                                                <a href="#">
                                                                    <img src="{{ $product->image }}"
                                                                        alt="{{ $product->name }}" />
                                                                    <img class="secondary-image"
                                                                        alt="{{ $product->name }}"
                                                                        src="{{ $product->image }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-dsc">
                                                                <h3><a href="#">{{ $product->name }}</a></h3>
                                                                <div class="star-price">
                                                                    <span
                                                                        class="price-left">${{ $product->price }}</span>
                                                                    <span class="star-right">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="actions-btn">
                                                                <a href="#" data-placement="top"
                                                                    data-target="#quick-view" data-trigger="hover"
                                                                    data-toggle="modal"
                                                                    data-original-title="Quick View"><i
                                                                        class="fa fa-eye"></i></a>
                                                                <a data-placement="top" data-toggle="tooltip"
                                                                    href="#"
                                                                    data-original-title="Add To Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a title="" data-placement="top"
                                                                    data-toggle="tooltip" href="#"
                                                                    data-original-title="Compare"><i
                                                                        class="fa fa-retweet"></i></a>
                                                                <a href="#" data-toggle="tooltip"
                                                                    data-placement="top" title="Add To Cart"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                                <!-- single-product end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="row">
                                            <div class="li-item">
                                                @foreach ($products as $product)
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="tb-product-item-inner tb2 pct-last">
                                                            <div class="pro-type">
                                                                <span>new</span>
                                                            </div>
                                                            <div class="re-img">
                                                                <a href="#"><img alt=""
                                                                        src="{{ $product->image }}"></a>
                                                            </div>
                                                            <div class="actions-btn">
                                                                <a data-original-title="Quick View"
                                                                    data-toggle="modal" data-trigger="hover"
                                                                    data-target="#quick-view" data-placement="top"
                                                                    href="#">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-sm-8">
                                                        <div class="f-fix">
                                                            <div class="tb-beg">
                                                                <a href="#">{{ $product->name }}</a>
                                                            </div>
                                                            <div class="tb-product-wrap-price-rating">
                                                                <div class="tb-product-price font-noraure-3">
                                                                    <span
                                                                        class="amount2 ana">${{ $product->price }}</span>
                                                                </div>
                                                            </div>
                                                            <p class="desc">{{ $product->description }}</p>
                                                            <div class="last-cart l-mrgn ns">
                                                                <a class="las4" href="#">Add To Cart</a>
                                                            </div>
                                                            <div class="tb-product-btn">
                                                                <a href="#">
                                                                    <i class="fa fa-eye"></i>
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
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-all-tab-cr shop-bottom">
                                    <div class="two-part">
                                        <div class="shop5 page">
                                            <ul>
                                                <!-- Phân trang cho Home -->
                                                @if ($allProducts->hasPages())
                                                    <li>
                                                        <!-- Trang trước -->
                                                        @if ($allProducts->onFirstPage())
                                                            <a class="disabled"><i class="fa fa-arrow-left"></i></a>
                                                        @else
                                                            <a href="{{ $allProducts->previousPageUrl() }}"><i
                                                                    class="fa fa-arrow-left"></i></a>
                                                        @endif

                                                        <!-- Các số trang -->
                                                        @foreach ($allProducts->getUrlRange(1, $allProducts->lastPage()) as $page => $url)
                                                            <a href="{{ $url }}"
                                                                class="{{ $allProducts->currentPage() == $page ? 'active' : '' }}">{{ $page }}</a>
                                                        @endforeach

                                                        <!-- Trang tiếp theo -->
                                                        @if ($allProducts->hasMorePages())
                                                            <a href="{{ $allProducts->nextPageUrl() }}"><i
                                                                    class="fa fa-arrow-right"></i></a>
                                                        @else
                                                            <a class="disabled"><i class="fa fa-arrow-right"></i></a>
                                                        @endif
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="shop-all-tab-cr shop-bottom">
                                    <div class="two-part">
                                        <div class="shop5 page">
                                            <ul>
                                                <!-- Phân trang cho Profile -->
                                                @if ($products->hasPages())
                                                    <li>
                                                        <!-- Trang trước -->
                                                        @if ($products->onFirstPage())
                                                            <a class="disabled"><i class="fa fa-arrow-left"></i></a>
                                                        @else
                                                            <a href="{{ $products->previousPageUrl() }}"><i
                                                                    class="fa fa-arrow-left"></i></a>
                                                        @endif

                                                        <!-- Các số trang -->
                                                        @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                                            <a href="{{ $url }}"
                                                                class="{{ $products->currentPage() == $page ? 'active' : '' }}">{{ $page }}</a>
                                                        @endforeach

                                                        <!-- Trang tiếp theo -->
                                                        @if ($products->hasMorePages())
                                                            <a href="{{ $products->nextPageUrl() }}"><i
                                                                    class="fa fa-arrow-right"></i></a>
                                                        @else
                                                            <a class="disabled"><i class="fa fa-arrow-right"></i></a>
                                                        @endif
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-style  content section end -->
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
