<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fiama - Flower Shop eCommerce HTML Template - shared on themelock.com</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset('assets/landing_page/css/font-icons.css') }}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('assets/landing_page/css/plugins.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/landing_page/css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/landing_page/css/responsive.css') }}">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Body main wrapper start -->
    <div class="body-wrapper">
        @include('layouts.landing_pages.header')


        <!-- Utilize Mobile Menu Start -->
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <div class="site-logo">
                        <a href="index.html"><img src="{{ asset('assets/landing_page/img/logo.png') }}"
                                alt="Logo"></a>
                    </div>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="ltn__utilize-menu-search-form">
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button><i class="icon-magnifier"></i></button>
                    </form>
                </div>
                <div class="ltn__utilize-menu">
                    <ul>
                        <li><a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home Style - 01</a></li>
                                <li><a href="index-2.html">Home Style - 02</a></li>
                                <li><a href="index-3.html">Home Style - 03</a></li>
                                <li><a href="index-4.html">Home Style - 04</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                                <li><a href="product-details.html">Shop details </a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="order-tracking.html">Order Tracking</a></li>
                                <li><a href="account.html">My Account</a></li>
                                <li><a href="login.html">Sign in</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </li>
                        <li><a href="#">News</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">News</a></li>
                                <li><a href="blog-grid.html">News Grid</a></li>
                                <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                                <li><a href="blog-details.html">News details</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="locations.html">Google Map Locations</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                    <ul>
                        <li>
                            <a href="account.html" title="My Account">
                                <span class="utilize-btn-icon">
                                    <i class="icon-user"></i>
                                </span>
                                My Account
                            </a>
                        </li>
                        <li>
                            <a href="wishlist.html" title="Wishlist">
                                <span class="utilize-btn-icon">
                                    <i class="icon-heart"></i>
                                    <sup>3</sup>
                                </span>
                                Wishlist
                            </a>
                        </li>
                        <li>
                            <a href="cart.html" title="Shoping Cart">
                                <span class="utilize-btn-icon">
                                    <i class="icon-handbag"></i>
                                    <sup>5</sup>
                                </span>
                                Shoping Cart
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="ltn__social-media-2">
                    <ul>
                        <li><a href="#" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                        <li><a href="#" title="Pinterest"><i class="icon-social-pinterest"></i></a></li>
                        <li><a href="#" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        <!-- SLIDER AREA START (slider-6) -->
        <div class="ltn__slider-area ltn__slider-3 ltn__slider-6">
            <div class="ltn__slide-two-active slick-slide-arrow-1 slick-slide-dots-1 arrow-white--">
                <!-- ltn__slide-item  -->
                <div class="ltn__slide-item ltn__slide-item-8 ltn__slide-item-9--- text-color-white bg-image bg-overlay-theme-black-10---"
                    data-bs-bg="{{ asset('assets/landing_page/img/slider/11.jpg') }}">
                    <div class="ltn__slide-item-inner text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <div class="slide-item-info">
                                                <div class="slide-item-info-inner ltn__slide-animation">
                                                    <h6
                                                        class="slide-sub-title white-color slide-title-line-2--- animated">
                                                        Flower & Gift</h6>
                                                    <h1 class="slide-title white-color animated">Perfect Bunch <br>For
                                                        Every Occasion</h1>
                                                    <div class="slide-brief animated d-none">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                                            do eiusmod tempor incididunt ut labore.</p>
                                                    </div>
                                                    <div class="btn-wrapper animated">
                                                        <a href="service.html" class="theme-btn-1 btn btn-round">Shop
                                                            Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
        <!-- SLIDER AREA END -->

        @livewire('landing-page.new-arrival')
        <!-- FEATURE AREA START ( Feature - 3) -->
        <div class="ltn__feature-area mb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2 ltn__border section-bg-6">
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="img/icons/svg/8-trolley.svg" alt="#">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>Free shipping</h4>
                                    <p>On all orders over $49.00</p>
                                </div>
                            </div>
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="img/icons/svg/9-money.svg" alt="#">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>15 days returns</h4>
                                    <p>Moneyback guarantee</p>
                                </div>
                            </div>
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="img/icons/svg/10-credit-card.svg" alt="#">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>Secure checkout</h4>
                                    <p>Protected by Paypal</p>
                                </div>
                            </div>
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="img/icons/svg/11-gift-card.svg" alt="#">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>Offer & gift here</h4>
                                    <p>On all orders over</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURE AREA END -->
        @livewire('landing-page.list-product')
        <!-- TEAM AREA END -->
        @include('layouts.landing_pages.footer')
        <!-- MODAL AREA START (Quick View Modal) -->
        <div class="ltn__modal-area ltn__quick-view-modal-area">
            <div class="modal fade" id="quick_view_modal" tabindex="-1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <!-- <i class="fas fa-times"></i> -->
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="ltn__quick-view-modal-inner">
                                <div class="modal-product-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="modal-product-img">
                                                <img src="img/product/4.png" alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="modal-product-info shop-details-info pl-0">
                                                <h3>Pink Flower Tree Red</h3>
                                                <div class="product-price-ratting mb-20">
                                                    <ul>
                                                        <li>
                                                            <div class="product-price">
                                                                <span>$49.00</span>
                                                                <del>$65.00</del>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="product-ratting">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="icon-star"></i></a></li>
                                                                    <li><a href="#"><i
                                                                                class="icon-star"></i></a></li>
                                                                    <li><a href="#"><i
                                                                                class="icon-star"></i></a></li>
                                                                    <li><a href="#"><i
                                                                                class="icon-star"></i></a></li>
                                                                    <li><a href="#"><i
                                                                                class="icon-star"></i></a></li>
                                                                    <li class="review-total"> <a href="#"> (
                                                                            95 Reviews )</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="modal-product-brief">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Dignissimos repellendus repudiandae incidunt quidem pariatur
                                                        expedita, quo quis modi tempore non.</p>
                                                </div>
                                                <div class="modal-product-meta ltn__product-details-menu-1 mb-20">
                                                    <ul>
                                                        <li>
                                                            <div class="ltn__color-widget clearfix">
                                                                <strong class="d-meta-title">Color</strong>
                                                                <ul>
                                                                    <li class="theme"><a href="#"></a></li>
                                                                    <li class="green-2"><a href="#"></a>
                                                                    </li>
                                                                    <li class="blue-2"><a href="#"></a></li>
                                                                    <li class="white"><a href="#"></a></li>
                                                                    <li class="red"><a href="#"></a></li>
                                                                    <li class="yellow"><a href="#"></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ltn__size-widget clearfix mt-25">
                                                                <strong class="d-meta-title">Size</strong>
                                                                <ul>
                                                                    <li><a href="#">S</a></li>
                                                                    <li><a href="#">M</a></li>
                                                                    <li><a href="#">L</a></li>
                                                                    <li><a href="#">XL</a></li>
                                                                    <li><a href="#">XXL</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div
                                                    class="ltn__product-details-menu-2 product-cart-wishlist-btn mb-30">
                                                    <ul>
                                                        <li>
                                                            <div class="cart-plus-minus">
                                                                <input type="text" value="02" name="qtybutton"
                                                                    class="cart-plus-minus-box">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="theme-btn-1 btn btn-effect-1 d-add-to-cart"
                                                                title="Add to Cart" data-bs-toggle="modal"
                                                                data-bs-target="#add_to_cart_modal">
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="btn btn-effect-1 d-add-to-wishlist"
                                                                title="Add to Cart" data-bs-toggle="modal"
                                                                data-bs-target="#liton_wishlist_modal">
                                                                <i class="icon-heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="ltn__social-media mb-30">
                                                    <ul>
                                                        <li class="d-meta-title">Share:</li>
                                                        <li><a href="#" title="Facebook"><i
                                                                    class="icon-social-facebook"></i></a></li>
                                                        <li><a href="#" title="Twitter"><i
                                                                    class="icon-social-twitter"></i></a></li>
                                                        <li><a href="#" title="Pinterest"><i
                                                                    class="icon-social-pinterest"></i></a></li>
                                                        <li><a href="#" title="Instagram"><i
                                                                    class="icon-social-instagram"></i></a></li>
                                                        @livewire('landing-page.new-arrival')
                                                        <!-- FEATURE AREA START ( Feature - 3) -->
                                                        <div class="ltn__feature-area mb-90">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div
                                                                            class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2 ltn__border section-bg-6">
                                                                            <div
                                                                                class="ltn__feature-item ltn__feature-item-8">
                                                                                <div class="ltn__feature-icon">
                                                                                    <img src="img/icons/svg/8-trolley.svg"
                                                                                        alt="#">
                                                                                </div>
                                                                                <div class="ltn__feature-info">
                                                                                    <h4>Free shipping</h4>
                                                                                    <p>On all orders over $49.00</p>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="ltn__feature-item ltn__feature-item-8">
                                                                                <div class="ltn__feature-icon">
                                                                                    <img src="img/icons/svg/9-money.svg"
                                                                                        alt="#">
                                                                                </div>
                                                                                <div class="ltn__feature-info">
                                                                                    <h4>15 days returns</h4>
                                                                                    <p>Moneyback guarantee</p>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="ltn__feature-item ltn__feature-item-8">
                                                                                <div class="ltn__feature-icon">
                                                                                    <img src="img/icons/svg/10-credit-card.svg"
                                                                                        alt="#">
                                                                                </div>
                                                                                <div class="ltn__feature-info">
                                                                                    <h4>Secure checkout</h4>
                                                                                    <p>Protected by Paypal</p>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="ltn__feature-item ltn__feature-item-8">
                                                                                <div class="ltn__feature-icon">
                                                                                    <img src="img/icons/svg/11-gift-card.svg"
                                                                                        alt="#">
                                                                                </div>
                                                                                <div class="ltn__feature-info">
                                                                                    <h4>Offer & gift here</h4>
                                                                                    <p>On all orders over</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- FEATURE AREA END -->

                                                        @livewire('landing-page.list-product')
                                                        <!-- TEAM AREA END -->
                                                        @include('layouts.landing_pages.footer')
                                                        <!-- MODAL AREA START (Quick View Modal) -->
                                                        <div class="ltn__modal-area ltn__quick-view-modal-area">
                                                            <div class="modal fade" id="quick_view_modal"
                                                                tabindex="-1">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                                <!-- <i class="fas fa-times"></i> -->
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="ltn__quick-view-modal-inner">
                                                                                <div class="modal-product-item">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6 col-12">
                                                                                            <div
                                                                                                class="modal-product-img">
                                                                                                <img src="img/product/4.png"
                                                                                                    alt="#">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-12">
                                                                                            <div
                                                                                                class="modal-product-info shop-details-info pl-0">
                                                                                                <h3>Pink Flower Tree Red
                                                                                                </h3>
                                                                                                <div
                                                                                                    class="product-price-ratting mb-20">
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <div
                                                                                                                class="product-price">
                                                                                                                <span>$49.00</span>
                                                                                                                <del>$65.00</del>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <div
                                                                                                                class="product-ratting">
                                                                                                                <ul>
                                                                                                                    <li><a
                                                                                                                            href="#"><i
                                                                                                                                class="icon-star"></i></a>
                                                                                                                    </li>
                                                                                                                    <li><a
                                                                                                                            href="#"><i
                                                                                                                                class="icon-star"></i></a>
                                                                                                                    </li>
                                                                                                                    <li><a
                                                                                                                            href="#"><i
                                                                                                                                class="icon-star"></i></a>
                                                                                                                    </li>
                                                                                                                    <li><a
                                                                                                                            href="#"><i
                                                                                                                                class="icon-star"></i></a>
                                                                                                                    </li>
                                                                                                                    <li><a
                                                                                                                            href="#"><i
                                                                                                                                class="icon-star"></i></a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="review-total">
                                                                                                                        <a
                                                                                                                            href="#">
                                                                                                                            (
                                                                                                                            95
                                                                                                                            Reviews
                                                                                                                            )</a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="modal-product-brief">
                                                                                                    <p>Lorem ipsum dolor
                                                                                                        sit amet,
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Dignissimos
                                                                                                        repellendus
                                                                                                        repudiandae
                                                                                                        incidunt quidem
                                                                                                        pariatur
                                                                                                        expedita, quo
                                                                                                        quis modi
                                                                                                        tempore non.</p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="modal-product-meta ltn__product-details-menu-1 mb-20">
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <div
                                                                                                                class="ltn__color-widget clearfix">
                                                                                                                <strong
                                                                                                                    class="d-meta-title">Color</strong>
                                                                                                                <ul>
                                                                                                                    <li
                                                                                                                        class="theme">
                                                                                                                        <a
                                                                                                                            href="#"></a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="green-2">
                                                                                                                        <a
                                                                                                                            href="#"></a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="blue-2">
                                                                                                                        <a
                                                                                                                            href="#"></a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="white">
                                                                                                                        <a
                                                                                                                            href="#"></a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="red">
                                                                                                                        <a
                                                                                                                            href="#"></a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="yellow">
                                                                                                                        <a
                                                                                                                            href="#"></a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <div
                                                                                                                class="ltn__size-widget clearfix mt-25">
                                                                                                                <strong
                                                                                                                    class="d-meta-title">Size</strong>
                                                                                                                <ul>
                                                                                                                    <li><a
                                                                                                                            href="#">S</a>
                                                                                                                    </li>
                                                                                                                    <li><a
                                                                                                                            href="#">M</a>
                                                                                                                    </li>
                                                                                                                    <li><a
                                                                                                                            href="#">L</a>
                                                                                                                    </li>
                                                                                                                    <li><a
                                                                                                                            href="#">XL</a>
                                                                                                                    </li>
                                                                                                                    <li><a
                                                                                                                            href="#">XXL</a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="ltn__product-details-menu-2 product-cart-wishlist-btn mb-30">
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <div
                                                                                                                class="cart-plus-minus">
                                                                                                                <input
                                                                                                                    type="text"
                                                                                                                    value="02"
                                                                                                                    name="qtybutton"
                                                                                                                    class="cart-plus-minus-box">
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#"
                                                                                                                class="theme-btn-1 btn btn-effect-1 d-add-to-cart"
                                                                                                                title="Add to Cart"
                                                                                                                data-bs-toggle="modal"
                                                                                                                data-bs-target="#add_to_cart_modal">
                                                                                                                <span>ADD
                                                                                                                    TO
                                                                                                                    CART</span>
                                                                                                            </a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#"
                                                                                                                class="btn btn-effect-1 d-add-to-wishlist"
                                                                                                                title="Add to Cart"
                                                                                                                data-bs-toggle="modal"
                                                                                                                data-bs-target="#liton_wishlist_modal">
                                                                                                                <i
                                                                                                                    class="icon-heart"></i>
                                                                                                            </a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="ltn__social-media mb-30">
                                                                                                    <ul>
                                                                                                        <li
                                                                                                            class="d-meta-title">
                                                                                                            Share:</li>
                                                                                                        <li><a href="#"
                                                                                                                title="Facebook"><i
                                                                                                                    class="icon-social-facebook"></i></a>
                                                                                                        </li>
                                                                                                        <li><a href="#"
                                                                                                                title="Twitter"><i
                                                                                                                    class="icon-social-twitter"></i></a>
                                                                                                        </li>
                                                                                                        <li><a href="#"
                                                                                                                title="Pinterest"><i
                                                                                                                    class="icon-social-pinterest"></i></a>
                                                                                                        </li>
                                                                                                        <li><a href="#"
                                                                                                                title="Instagram"><i
                                                                                                                    class="icon-social-instagram"></i></a>
                                                                                                        </li>

                                                                                                    </ul>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="modal-product-meta ltn__product-details-menu-1 mb-30 d-none">
                                                                                                    <ul>
                                                                                                        <li><strong>SKU:</strong>
                                                                                                            <span>12345</span>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <strong>Categories:</strong>
                                                                                                            <span>
                                                                                                                <a
                                                                                                                    href="#">Flower</a>
                                                                                                            </span>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <strong>Tags:</strong>
                                                                                                            <span>
                                                                                                                <a
                                                                                                                    href="#">Love</a>
                                                                                                                <a
                                                                                                                    href="#">Flower</a>
                                                                                                                <a
                                                                                                                    href="#">Heart</a>
                                                                                                            </span>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="ltn__safe-checkout d-none">
                                                                                                    <h5>Guaranteed Safe
                                                                                                        Checkout</h5>
                                                                                                    <img src="img/icons/payment-2.png"
                                                                                                        alt="Payment Image">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- MODAL AREA END -->

                                                        <!-- MODAL AREA START (Add To Cart Modal) -->
                                                        <div class="ltn__modal-area ltn__add-to-cart-modal-area">
                                                            <div class="modal fade" id="add_to_cart_modal"
                                                                tabindex="-1">
                                                                <div class="modal-dialog modal-md" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="ltn__quick-view-modal-inner">
                                                                                <div class="modal-product-item">
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <div
                                                                                                class="modal-add-to-cart-content clearfix">
                                                                                                <div
                                                                                                    class="modal-product-img">
                                                                                                    <img src="img/product/1.png"
                                                                                                        alt="#">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="modal-product-info">
                                                                                                    <h5><a
                                                                                                            href="product-details.html">Heart's
                                                                                                            Desire</a>
                                                                                                    </h5>
                                                                                                    <p
                                                                                                        class="added-cart">
                                                                                                        <i
                                                                                                            class="fa fa-check-circle"></i>
                                                                                                        Successfully
                                                                                                        added to your
                                                                                                        Cart</p>
                                                                                                    <div
                                                                                                        class="btn-wrapper">
                                                                                                        <a href="cart.html"
                                                                                                            class="theme-btn-1 btn btn-effect-1">View
                                                                                                            Cart</a>
                                                                                                        <a href="checkout.html"
                                                                                                            class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- additional-info -->
                                                                                            <div
                                                                                                class="additional-info d-none--">
                                                                                                <p>We want to give you
                                                                                                    <b>10% discount</b>
                                                                                                    for your first
                                                                                                    order,
                                                                                                    <br>
                                                                                                    Use (fiama10)
                                                                                                    discount code at
                                                                                                    checkout
                                                                                                </p>
                                                                                                <div
                                                                                                    class="payment-method">
                                                                                                    <img src="img/icons/payment.png"
                                                                                                        alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- MODAL AREA END -->
                                                        <!-- MODAL AREA START (Add To Cart Modal) -->
                                                        <div class="ltn__modal-area ltn__add-to-cart-modal-area">
                                                            <div class="modal fade" id="add_to_cart_modal"
                                                                tabindex="-1">
                                                                <div class="modal-dialog modal-md" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="ltn__quick-view-modal-inner">
                                                                                <div class="modal-product-item">
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <div
                                                                                                class="modal-add-to-cart-content clearfix">
                                                                                                <div
                                                                                                    class="modal-product-img">
                                                                                                    <img src="img/product/1.png"
                                                                                                        alt="#">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="modal-product-info">
                                                                                                    <h5><a
                                                                                                            href="product-details.html">Heart's
                                                                                                            Desire</a>
                                                                                                    </h5>
                                                                                                    <p
                                                                                                        class="added-cart">
                                                                                                        <i
                                                                                                            class="fa fa-check-circle"></i>
                                                                                                        Successfully
                                                                                                        added to your
                                                                                                        Cart</p>
                                                                                                    <div
                                                                                                        class="btn-wrapper">
                                                                                                        <a href="cart.html"
                                                                                                            class="theme-btn-1 btn btn-effect-1">View
                                                                                                            Cart</a>
                                                                                                        <a href="checkout.html"
                                                                                                            class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- additional-info -->
                                                                                            <div
                                                                                                class="additional-info d-none--">
                                                                                                <p>We want to give you
                                                                                                    <b>10% discount</b>
                                                                                                    for your first
                                                                                                    order,
                                                                                                    <br>
                                                                                                    Use (fiama10)
                                                                                                    discount code at
                                                                                                    checkout
                                                                                                </p>
                                                                                                <div
                                                                                                    class="payment-method">
                                                                                                    <img src="img/icons/payment.png"
                                                                                                        alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- MODAL AREA END -->

                                                        <!-- MODAL AREA START (Wishlist Modal) -->
                                                        <div class="ltn__modal-area ltn__add-to-cart-modal-area">
                                                            <div class="modal fade" id="liton_wishlist_modal"
                                                                tabindex="-1">
                                                                <div class="modal-dialog modal-md" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="ltn__quick-view-modal-inner">
                                                                                <div class="modal-product-item">
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <div
                                                                                                class="modal-product-img">
                                                                                                <img src="img/product/7.png"
                                                                                                    alt="#">
                                                                                            </div>
                                                                                            <div
                                                                                                class="modal-product-info">
                                                                                                <h5><a
                                                                                                        href="product-details.html">Brake
                                                                                                        Conversion
                                                                                                        Kit</a></h5>
                                                                                                <p class="added-cart">
                                                                                                    <i
                                                                                                        class="fa fa-check-circle"></i>
                                                                                                    Successfully added
                                                                                                    to your Wishlist</p>
                                                                                                <div
                                                                                                    class="btn-wrapper">
                                                                                                    <a href="wishlist.html"
                                                                                                        class="theme-btn-1 btn btn-effect-1">View
                                                                                                        Wishlist</a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- additional-info -->
                                                                                            <div
                                                                                                class="additional-info d-none">
                                                                                                <p>We want to give you
                                                                                                    <b>10% discount</b>
                                                                                                    for your first
                                                                                                    order,
                                                                                                    <br>
                                                                                                    Use discount code at
                                                                                                    checkout
                                                                                                </p>
                                                                                                <div
                                                                                                    class="payment-method">
                                                                                                    <img src="img/icons/payment.png"
                                                                                                        alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- MODAL AREA END -->

                                                </div>
                                                <!-- Body main wrapper end -->

                                                <!-- preloader area start -->
                                                <div class="preloader d-none" id="preloader">
                                                    <div class="preloader-inner">
                                                        <div class="spinner">
                                                            <div class="dot1"></div>
                                                            <div class="dot2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- preloader area end -->

                                                <!-- All JS Plugins -->
                                                <script src="{{ asset('assets/landing_page/js/plugins.js') }}"></script>
                                                <!-- Main JS -->
                                                <script src="{{ asset('assets/landing_page/js/main.js') }}"></script>

</body>

</html>
