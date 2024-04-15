<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>


<!doctype html>
<html class="no-js" lang="">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SayyamCode</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>


        <!-- preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- preloader end  -->


        <!-- header start -->
        <header>
            <div class="header-area header-3 pt-35 pb-35">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-3 col-md-3 col-7 d-none d-lg-block d-flex align-items-center d-xs-disable">
                            <div class="basic-bar info-bar">
                                <span class="bar1"></span>
                                <span class="bar2"></span>
                                <span class="bar3"></span>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-4 col-5">
                            <div class="logo text-left text-lg-center">
                                <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-8 col-7 pl-0">
                            <div class="header-right header-right-3 f-right">
                                <ul>
                                    <li class="search-btn">
                                        <a class="search-btn nav-search search-trigger" href="#"><i class="fas fa-search"></i></a>
                                    </li>
                                    <li class="login-btn"><a href="login.html"><i class="far fa-user"></i></a></li>
                                    <li class="d-shop-cart"><a href="#"><i class="flaticon-shopping-cart"></i> <span class="cart-count">3</span></a>
                                        <ul class="minicart">
                                            <li>
                                                <div class="cart-img">
                                                    <a href="product-details.html">
                                                        <img src="img/product/pro1.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <h3>
                                                        <a href="product-details.html">Black & White Shoes</a>
                                                    </h3>
                                                    <div class="cart-price">
                                                        <span class="new">$ 229.9</span>
                                                        <span>
                                                            <del>$239.9</del>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-img">
                                                    <a href="product-details.html">
                                                        <img src="img/product/pro2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <h3>
                                                        <a href="product-details.html">Black & White Shoes</a>
                                                    </h3>
                                                    <div class="cart-price">
                                                        <span class="new">$ 229.9</span>
                                                        <span>
                                                            <del>$239.9</del>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-img">
                                                    <a href="product-details.html">
                                                        <img src="img/product/pro3.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <h3>
                                                        <a href="product-details.html">Black & White Shoes</a>
                                                    </h3>
                                                    <div class="cart-price">
                                                        <span class="new">$ 229.9</span>
                                                        <span>
                                                            <del>$239.9</del>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-price">
                                                    <span class="f-left">Total:</span>
                                                    <span class="f-right">$300.0</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkout-link">
                                                    <a href="cart.html">Shopping Cart</a>
                                                    <a class="red-color" href="checkout.html">Checkout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 d-xl-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- side menu -->
            <div class="extra-info">
                <div class="close-icon">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side">
                    <a href="index.html">
                        <img src="img/logo/logo-white.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="main-menu side-menu">
                        <nav id="mobile-menu-3">
                            <ul>
                                <li>
                                    <a href="index.html">Home <i class="flaticon-right-arrow"></i></a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="index.html">Home Style 1</a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">Home Style 2</a>
                                        </li>
                                        <li>
                                            <a href="index-3.html">Home Style 3</a>
                                        </li>
                                        <li>
                                            <a href="index-4.html">Home Style 4</a>
                                        </li>
                                        <li>
                                            <a href="index-5.html">Home Style 5</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-menu">
                                    <a href="shop.html">Shop <i class="flaticon-right-arrow"></i></a>
                                    <ul class="submenu ">
                                        <li>
                                            <a href="#">Category View</a>
                                            <ul class="submenu  level-1">
                                                <li>
                                                    <a href="shop.html">Shop 2 Column</a>
                                                </li>
                                                <li>
                                                    <a href="shop-filter.html">Shop Filter Style</a>
                                                </li>
                                                <li>
                                                    <a href="shop-full.html">Shop Full</a>
                                                </li>
                                                <li>
                                                    <a href="shop-3-col.html">Shop 3 Column</a>
                                                </li>
                                                <li>
                                                    <a href="shop-list.html">List View</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Category View</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="shop-left-sidebar.html">Sidebar Left</a>
                                                </li>
                                                <li>
                                                    <a href="shop-sidebar-right.html">Sidebar Right</a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">Shopping Cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">My Wishlist</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Products Types</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="product-simple.html">Simple Product</a>
                                                </li>
                                                <li>
                                                    <a href="product-variable.html">Variable Product</a>
                                                </li>
                                                <li>
                                                    <a href="product-upcoming.html">Product Upcoming</a>
                                                </li>
                                                <li>
                                                    <a href="product-up-thumb.html">Thumb Top Product</a>
                                                </li>
                                                <li>
                                                    <a href="product-sidebar.html">Product Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop.html">Products <i class="flaticon-right-arrow"></i></a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog <i class="flaticon-right-arrow"></i></a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="blog-2-col.html">Blog 2 Column</a>
                                        </li>
                                        <li>
                                            <a href="blog-2-col-mas.html">Blog 2 Col Masonry</a>
                                        </li>
                                        <li>
                                            <a href="blog-3-col.html">Blog 3 Column</a>
                                        </li>
                                        <li>
                                            <a href="blog-3-col-mas.html">Blog 3 Col Masonry</a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">Blog Details</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-audio.html">Blog Details Audio</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-video.html">Blog Details Video</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-gallery.html">Blog Details Gallery</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-left-sidebar.html">Details Left Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Pages <i class="flaticon-right-arrow"></i></a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="login.html">login</a>
                                        </li>
                                        <li>
                                            <a href="register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="cart.html">Shoping Cart</a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">Checkout</a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">Wishlist</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact <i class="flaticon-right-arrow"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>


                <div class="side-info-bottom">
                    <div class="side-cta">
                        <p><a href="https://wphix.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1970777f76597c61787469757c377a7674">[email&#160;protected]</a></p>
                        <h4>+(090) 8765 86543 85</h4>
                    </div>
                    <div class="social-icon-right mt-20">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        <main>
            <!-- slider-area start -->
            <section class="slider-area pos-relative">
                <div class="container">
                    <div class="slider-active-5 slider-3 ">
                        <div class="single-slider slide-height-5 pos-relative d-flex align-items-center" data-background="img/slider/slide6-3.jpg">
                            <div class="shape-title shape-title-5 bounce-animate">
                                <h2>UX</h2>
                            </div>
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="slide-content slide-content-5  pl-60">
                                        <span data-animation="fadeInRight" data-delay=".4s">winter Collection</span>
                                        <h1 data-animation="fadeInUp" data-delay=".6s">Winter Is
                                        Coming</h1>
                                        <div class="slide-btn">
                                            <a class="btn theme-btn" href="shop.html" data-animation="fadeInLeft" data-delay=".8s">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider slide-height-5 pos-relative d-flex align-items-center" data-background="img/slider/slide6-2.jpg">
                            <div class="shape-title shape-title-5 bounce-animate">
                                <h2>UX</h2>
                            </div>
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="slide-content slide-content-5  pl-60">
                                        <span data-animation="fadeInRight" data-delay=".4s">winter Collection</span>
                                        <h1 data-animation="fadeInUp" data-delay=".6s">Winter Is
                                        Coming</h1>
                                        <div class="slide-btn">
                                            <a class="btn theme-btn" href="shop.html" data-animation="fadeInLeft" data-delay=".8s">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider slide-height-5 pos-relative d-flex align-items-center" data-background="img/slider/slide6.jpg">
                            <div class="shape-title shape-title-5 bounce-animate">
                                <h2>UX</h2>
                            </div>
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="slide-content slide-content-5  pl-60">
                                        <span data-animation="fadeInRight" data-delay=".4s">winter Collection</span>
                                        <h1 data-animation="fadeInUp" data-delay=".6s">Winter Is
                                        Coming</h1>
                                        <div class="slide-btn">
                                            <a class="btn theme-btn" href="shop.html" data-animation="fadeInLeft" data-delay=".8s">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider-area end -->

            <!-- banner area start -->
            <section class="banner-area pt-100 pb-65">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="banner mb-30">
                                <a href="shop.html"><img src="img/banner/banner-5/banner1.jpg" alt=""></a>
                            </div>
                            <div class="banner mb-30">
                                <a href="shop.html"><img src="img/banner/banner-5/banner5.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="banner mb-30">
                                        <a href="shop.html"><img src="img/banner/banner-5/banner2.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner mb-30">
                                        <a href="shop.html"><img src="img/banner/banner-5/banner3.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="banner mb-30">
                                        <a href="shop.html"><img src="img/banner/banner-5/banner4.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner area end -->

            <!-- product-area start -->
            <section class="product-area  pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="area-title text-center mb-50">
                                <h2>Brand New Products</h2>
                                <p>Browse the huge variety of our products</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-slider-2 owl-carousel">
                        <div class="pro-item">
                            <div class="product-wrapper mb-50">
                                <div class="product-img mb-25">
                                    <a href="product-details.html">
                                        <img src="img/product/pro13.jpg" alt="">
                                        <img class="secondary-img" src="img/product/pro14.jpg" alt="">
                                    </a>
                                    <div class="product-action text-center">
                                        <a href="#" title="Shoppingb Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Quick View">
                                            <i class="flaticon-eye"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                    </div>
                                    <div class="sale-tag">
                                        <span class="new">new</span>
                                        <span class="sale">sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="pro-cat mb-10">
                                        <a href="shop.html">decor, </a>
                                        <a href="shop.html">furniture</a>
                                    </div>
                                    <h4>
                                        <a href="product-details.html">Raglan Baseball Style shirt</a>
                                    </h4>
                                    <div class="product-meta">
                                        <div class="pro-price">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                    <div class="product-wishlist">
                                        <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper mb-50">
                                <div class="product-img mb-25">
                                    <a href="product-details.html">
                                        <img src="img/product/pro14.jpg" alt="">
                                        <img class="secondary-img" src="img/product/pro15.jpg" alt="">
                                    </a>
                                    <div class="product-action text-center">
                                        <a href="#" title="Shoppingb Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Quick View">
                                            <i class="flaticon-eye"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                    </div>
                                    <div class="sale-tag">
                                        <span class="new">30%</span>
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="pro-cat mb-10">
                                        <a href="shop.html">decor, </a>
                                        <a href="shop.html">furniture</a>
                                    </div>
                                    <h4>
                                        <a href="product-details.html">Raglan Baseball Style shirt</a>
                                    </h4>
                                    <div class="product-meta">
                                        <div class="pro-price">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                    <div class="product-wishlist">
                                        <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pro-item">
                            <div class="product-wrapper mb-50">
                                <div class="product-img mb-25">
                                    <a href="product-details.html">
                                        <img src="img/product/pro15.jpg" alt="">
                                        <img class="secondary-img" src="img/product/pro16.jpg" alt="">
                                    </a>
                                    <div class="product-action text-center">
                                        <a href="#" title="Shoppingb Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Quick View">
                                            <i class="flaticon-eye"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                    </div>
                                    <div class="sale-tag">
                                        <span class="new">new</span>
                                        <span class="sale">sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="pro-cat mb-10">
                                        <a href="shop.html">decor, </a>
                                        <a href="shop.html">furniture</a>
                                    </div>
                                    <h4>
                                        <a href="product-details.html">Lodge Flush Mount Cloth</a>
                                    </h4>
                                    <div class="product-meta">
                                        <div class="pro-price">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                    <div class="product-wishlist">
                                        <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper mb-50">
                                <div class="product-img mb-25">
                                    <a href="product-details.html">
                                        <img src="img/product/pro16.jpg" alt="">
                                        <img class="secondary-img" src="img/product/pro17.jpg" alt="">
                                    </a>
                                    <div class="product-action text-center">
                                        <a href="#" title="Shoppingb Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Quick View">
                                            <i class="flaticon-eye"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="pro-cat mb-10">
                                        <a href="shop.html">decor, </a>
                                        <a href="shop.html">furniture</a>
                                    </div>
                                    <h4>
                                        <a href="product-details.html">Bakix Fashion Product Man</a>
                                    </h4>
                                    <div class="product-meta">
                                        <div class="pro-price">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                    <div class="product-wishlist">
                                        <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pro-item">
                            <div class="product-wrapper mb-50">
                                <div class="product-img mb-25">
                                    <a href="product-details.html">
                                        <img src="img/product/pro17.jpg" alt="">
                                        <img class="secondary-img" src="img/product/pro18.jpg" alt="">
                                    </a>
                                    <div class="product-action text-center">
                                        <a href="#" title="Shoppingb Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Quick View">
                                            <i class="flaticon-eye"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                    </div>
                                    <div class="sale-tag">
                                        <span class="new">new</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="pro-cat mb-10">
                                        <a href="shop.html">decor, </a>
                                        <a href="shop.html">furniture</a>
                                    </div>
                                    <h4>
                                        <a href="product-details.html">Lodge Flush Mount Style</a>
                                    </h4>
                                    <div class="product-meta">
                                        <div class="pro-price">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                    <div class="product-wishlist">
                                        <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper mb-50">
                                <div class="product-img mb-25">
                                    <a href="product-details.html">
                                        <img src="img/product/pro18.jpg" alt="">
                                        <img class="secondary-img" src="img/product/pro19.jpg" alt="">
                                    </a>
                                    <div class="product-action text-center">
                                        <a href="#" title="Shoppingb Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Quick View">
                                            <i class="flaticon-eye"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                    </div>
                                    <div class="sale-tag">
                                        <span class="sale">60%</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="pro-cat mb-10">
                                        <a href="shop.html">decor, </a>
                                        <a href="shop.html">furniture</a>
                                    </div>
                                    <h4>
                                        <a href="product-details.html">Vue Trendy Product Cloth </a>
                                    </h4>
                                    <div class="product-meta">
                                        <div class="pro-price">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                    <div class="product-wishlist">
                                        <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pro-item">
                            <div class="product-wrapper mb-50">
                                <div class="product-img mb-25">
                                    <a href="product-details.html">
                                        <img src="img/product/pro19.jpg" alt="">
                                        <img class="secondary-img" src="img/product/pro20.jpg" alt="">
                                    </a>
                                    <div class="product-action text-center">
                                        <a href="#" title="Shoppingb Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Quick View">
                                            <i class="flaticon-eye"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="pro-cat mb-10">
                                        <a href="shop.html">decor, </a>
                                        <a href="shop.html">furniture</a>
                                    </div>
                                    <h4>
                                        <a href="product-details.html">Vue Trendy Product Cloth </a>
                                    </h4>
                                    <div class="product-meta">
                                        <div class="pro-price">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                    <div class="product-wishlist">
                                        <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper mb-50">
                                <div class="product-img mb-25">
                                    <a href="product-details.html">
                                        <img src="img/product/pro20.jpg" alt="">
                                        <img class="secondary-img" src="img/product/pro19.jpg" alt="">
                                    </a>
                                    <div class="product-action text-center">
                                        <a href="#" title="Shoppingb Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Quick View">
                                            <i class="flaticon-eye"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                    </div>
                                    <div class="sale-tag">
                                        <span class="new">new</span>
                                        <span class="sale">sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="pro-cat mb-10">
                                        <a href="shop.html">decor, </a>
                                        <a href="shop.html">furniture</a>
                                    </div>
                                    <h4>
                                        <a href="product-details.html">Vue Trendy Product Cloth </a>
                                    </h4>
                                    <div class="product-meta">
                                        <div class="pro-price">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                    <div class="product-wishlist">
                                        <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pro-item">
                            <div class="product-wrapper mb-50">
                                <div class="product-img mb-25">
                                    <a href="product-details.html">
                                        <img src="img/product/pro15.jpg" alt="">
                                        <img class="secondary-img" src="img/product/pro16.jpg" alt="">
                                    </a>
                                    <div class="product-action text-center">
                                        <a href="#" title="Shoppingb Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Quick View">
                                            <i class="flaticon-eye"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                    </div>
                                    <div class="sale-tag">
                                        <span class="new">new</span>
                                        <span class="sale">sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="pro-cat mb-10">
                                        <a href="shop.html">decor, </a>
                                        <a href="shop.html">furniture</a>
                                    </div>
                                    <h4>
                                        <a href="product-details.html">Vue Trendy Product Cloth </a>
                                    </h4>
                                    <div class="product-meta">
                                        <div class="pro-price">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                    <div class="product-wishlist">
                                        <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper mb-50">
                                <div class="product-img mb-25">
                                    <a href="product-details.html">
                                        <img src="img/product/pro16.jpg" alt="">
                                        <img class="secondary-img" src="img/product/pro17.jpg" alt="">
                                    </a>
                                    <div class="product-action text-center">
                                        <a href="#" title="Shoppingb Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Quick View">
                                            <i class="flaticon-eye"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="pro-cat mb-10">
                                        <a href="shop.html">decor, </a>
                                        <a href="shop.html">furniture</a>
                                    </div>
                                    <h4>
                                        <a href="product-details.html">Vue Trendy Product Cloth </a>
                                    </h4>
                                    <div class="product-meta">
                                        <div class="pro-price">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                    <div class="product-wishlist">
                                        <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product-area end -->

            <!-- features-area start -->
            <section class="features-area box-90">
                <div class="container">
                    <div class="theme-soft-bg fix pt-100 pb-50">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="area-title text-center mb-50">
                                    <h2>Special Features</h2>
                                    <p>Get special services from our shop.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-bg" data-background="img/bg/servie-pattern.png">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-seatures mb-50 text-center">
                                        <i class="flaticon-shopping-cart-1"></i>
                                        <span>Free Delivery</span>
                                        <h3>Free Delivery</h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-seatures mb-50 text-center">
                                        <i class="flaticon-good"></i>
                                        <span>100% Customer</span>
                                        <h3>Feedbacks</h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-seatures mb-50 text-center">
                                        <i class="flaticon-return-1"></i>
                                        <span>10 Days</span>
                                        <h3>For Free Return</h3>
                                    </div>
                                </div>

                                <div class="col-xl-4 offset-xl-2 col-lg-4 col-md-6">
                                    <div class="single-seatures mb-50 text-center">
                                        <i class="flaticon-return"></i>
                                        <span>Payment</span>
                                        <h3>Secure System</h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 d-md-none d-lg-none">
                                    <div class="single-seatures mb-50 text-center">
                                        <i class="flaticon-customer-service"></i>
                                        <span>24/7</span>
                                        <h3>Online Supports</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features-area end -->

            <!-- latest-blog-area start -->
            <section class="latest-blog-area pt-95 pb-60 box-90">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="area-title text-center mb-50">
                                <h2>News Feeds</h2>
                                <p>Check it out every updates</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="latest-news mb-40">
                                <div class="news__thumb mb-25">
                                    <img src="img/blog/latest/lb8.jpg" alt="">
                                </div>
                                <div class="news__caption white-bg">
                                    <div class="news-meta mb-15">
                                        <span><i class="far fa-calendar-check"></i> Sep 15, 2018 </span>
                                        <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                                    </div>
                                    <h2><a href="blog-details.html">IInspiration Is Construction
                                    Fashion 2019.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="latest-news mb-40">
                                <div class="news__thumb mb-25">
                                    <img src="img/blog/latest/lb9.jpg" alt="">
                                </div>
                                <div class="news__caption white-bg">
                                    <div class="news-meta mb-15">
                                        <span><i class="far fa-calendar-check"></i> Sep 15, 2018 </span>
                                        <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                                    </div>
                                    <h2><a href="blog-details.html">IInspiration Is Construction
                                    Fashion 2019.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="latest-news mb-40">
                                <div class="news__thumb mb-25">
                                    <img src="img/blog/latest/lb10.jpg" alt="">
                                </div>
                                <div class="news__caption white-bg">
                                    <div class="news-meta mb-15">
                                        <span><i class="far fa-calendar-check"></i> Sep 15, 2018 </span>
                                        <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                                    </div>
                                    <h2><a href="blog-details.html">IIInspiration Is Construction
                                    Fashion 2019.</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- latest-blog-area end -->

            <!-- subscribe-area start -->
            <section class="subscribe-area">
                <div class="container">
                    <div class="subscribe-box black-bg pl-50 pr-50 pt-70 pb-20">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="subscribe d-flex fix">
                                    <div class="subscribe-icon">
                                        <img src="img/icon/subscribe.png" alt="">
                                    </div>
                                    <div class="area-title white-color mb-50">
                                        <h2>Newsletter</h2>
                                        <p>Subsribe here for get every single updates</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="subscribe fix">
                                    <div class="subscribe-form mb-50">
                                        <form action="#">
                                            <input type="text" placeholder="Enter your email address">
                                            <button class="btn theme-btn" type="submit">subscribe now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- subscribe-area end -->
        </main>

        <!-- footer start -->
        <footer class="footer-area pl-100 pr-100 mt-100">
            <div class="container">
                <div class="footer-area pt-100 pb-60 pl-50 pr-50" data-background="img/bg/footer.jpg">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <div class="footer-widget mb-40 pr-70">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="img/logo/footer-logo.png" alt=""></a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore mag na
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <div class="footer-time d-flex mt-30">
                                    <div class="time-icon">
                                        <img src="img/icon/time.png" alt="">
                                    </div>
                                    <div class="time-text">
                                        <span>Got Questions ? Call us 24/7!</span>
                                        <h2>(0600) 874 548</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3">
                            <div class="footer-widget mb-40">
                                <h3>Social Media</h3>
                                <ul class="footer-link">
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Behance</a></li>
                                    <li><a href="#"> Dribbble</a></li>
                                    <li><a href="#">Linkedin</a></li>
                                    <li><a href="#">Youtube</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="footer-widget pl-50 mb-40">
                                <h3>Location</h3>
                                <ul class="footer-link">
                                    <li><a href="#">New York</a></li>
                                    <li><a href="#">Tokyo</a></li>
                                    <li><a href="#">Dhaka</a></li>
                                    <li><a href="#"> Chittagong</a></li>
                                    <li><a href="#">China</a></li>
                                    <li><a href="#">Japan</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 d-md-none d-xl-block">
                            <div class="footer-widget mb-40">
                                <h3>About</h3>
                                <ul class="footer-link">
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#"> Privacy Policy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Wholesale</a></li>
                                    <li><a href="#">Direction</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area box-105">
                <div class="container-fluid">
                    <div class="pt-30 pb-30">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="copyright text-center">
                                    <p>Copyright © 2019 <a href="#">SayyamCode</a>. All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

    <!-- Fullscreen search -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search Entire Store...">
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end fullscreen search -->





		<!-- JS here -->
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/one-page-nav-min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/jquery.final-countdown.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>

</html>
