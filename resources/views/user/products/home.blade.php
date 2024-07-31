@extends('user.layouts.index')
@section('title')
    @parent
    Trang chủ
@endsection
@section('content')
<!-- new-products section start -->
<section class="featured-products single-products section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h3>Sản phẩm</h3>
                    <div class="section-icon">
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="product-tab nav nav-tabs">
                    <ul>                                        
                        <li class="active"><a data-toggle="tab" href="#all">All</a></li>
                        <li><a data-toggle="tab" href="#clothings">Quần áo</a></li>
                        <li><a data-toggle="tab" href="#shoes">Giầy</a></li>
                        <li><a data-toggle="tab" href="#bags">Găng tay</a></li>
                        <li><a data-toggle="tab" href="#accessories">Quả bóng</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row tab-content">
            <div class="tab-pane fade in active" id="all">
                <div id="tab-carousel-1" class="re-owl-carousel owl-carousel product-slider owl-theme">
                    @foreach($allProducts as $product)
                        <div class="col-xs-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <div class="pro-type">
                                        <span>new</span>
                                    </div>
                                    <a href="#">
                                        <img src="{{ asset('tasnm/img/vn-11134201-23020-hi9apscn3tnv17.jpg') }}" alt="{{ $product->name }}" />
                                        <img class="secondary-image" alt="{{ $product->name }}" src="{{ asset('tasnm/img/sg-11134201-22120-tkvugc4k6alv47.jpg') }}">
                                    </a>
                                </div>
                                <div class="product-dsc">
                                    <h3><a href="#">{{ $product->name }}</a></h3>
                                    <div class="star-price">
                                        <span class="price-left">${{ $product->price }}</span>
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
                                    <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                    <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                    <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- all shop product end -->
            <!-- other tabs content can go here, similar to 'all' tab -->
        </div>
    </div>
</section>
<!-- new-products section end -->

<!-- new-products section start -->
<section class="new-products single-products section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h3>Sản phẩm mới</h3>
                    <div class="section-icon">
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="new-products" class="owl-carousel product-slider owl-theme">
                @foreach($newProducts as $product)
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>new</span>
                                </div>
                                <a href="#">
                                    <img src="{{ asset('tasnm/img/sg-11134201-22120-tkvugc4k6alv47.jpg') }}" alt="{{ $product->name }}" />
                                    <img class="secondary-image" alt="{{ $product->name }}" src="{{ asset('tasnm/img/vn-11134201-23020-hi9apscn3tnv17.jpg') }}">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">{{ $product->name }}</a></h3>
                                <div class="star-price">
                                    <span class="price-left">${{ $product->price }}</span>
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
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- new-products section end -->
@endsection