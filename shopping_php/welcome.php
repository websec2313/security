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
<html class="no-js" lang="zxx">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SayyamCode</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.php">
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
            <div id="header-sticky" class="header-area box-90">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-6 col-md-6 col-7 col-sm-5 d-flex align-items-center pos-relative">
                            <div class="basic-bar cat-toggle">
                                <span class="bar1"></span>
                                <span class="bar2"></span>
                                <span class="bar3"></span>
                            </div>
                            <div class="logo">
                                <a href="welcome.php"><img src="img/logo/logo.png" alt=""></a>
                            </div>

                            <div class="category-menu">
                                <h4>Category</h4>
                                <ul>
                                    <li><a href="shop.php"><i class="flaticon-shopping-cart-1"></i> Table lamp</a></li>
                                    <li><a href="shop.php"><i class="flaticon-shopping-cart-1"></i> Furniture</a></li>
                                    <li><a href="shop.php"><i class="flaticon-shopping-cart-1"></i> Chair</a></li>
                                    <li><a href="shop.php"><i class="flaticon-shopping-cart-1"></i> Men</a></li>
                                    <li><a href="shop.php"><i class="flaticon-shopping-cart-1"></i> Women</a></li>
                                    <li><a href="shop.php"><i class="flaticon-shopping-cart-1"></i> Cloth</a></li>
                                    <li><a href="shop.php"><i class="flaticon-shopping-cart-1"></i> Trend</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-6 col-md-8 col-8 d-none d-xl-block">
                            <div class="main-menu text-center">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a href="welcome.php">Home</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="welcome.php">Home Style 1</a>
                                                </li>
                                                <li>
                                                    <a href="index-2.php">Home Style 2</a>
                                                </li>
                                                <li>
                                                    <a href="index-3.php">Home Style 3</a>
                                                </li>
                                                <li>
                                                    <a href="index-4.php">Home Style 4</a>
                                                </li>
                                                <li>
                                                    <a href="index-5.php">Home Style 5</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu">
                                            <a href="shop.php">Shop</a>
                                            <ul class="submenu ">
                                                <li>
                                                    <a href="#">Category View</a>
                                                    <ul class="submenu  level-1">
                                                        <li>
                                                            <a href="shop.php">Shop 2 Column</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-filter.php">Shop Filter Style</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-full.php">Shop Full</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-3-col.php">Shop 3 Column</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list.php">List View</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Category View</a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="shop-left-sidebar.php">Sidebar Left</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar-right.php">Sidebar Right</a>
                                                        </li>
                                                        <li>
                                                            <a href="cart.php">Shopping Cart</a>
                                                        </li>
                                                        <li>
                                                            <a href="checkout.php">Checkout</a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php">My Wishlist</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Products Types</a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="product-simple.php">Simple Product</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-variable.php">Variable Product</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-upcoming.php">Product Upcoming</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-up-thumb.php">Thumb Top Product</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-sidebar.php">Product Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-filter.php">Products </a>
                                        </li>
                                        <li>
                                            <a href="blog.php">Blog</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="blog-2-col.php">Blog 2 Column</a>
                                                </li>
                                                <li>
                                                    <a href="blog-2-col-mas.php">Blog 2 Col Masonry</a>
                                                </li>
                                                <li>
                                                    <a href="blog-3-col.php">Blog 3 Column</a>
                                                </li>
                                                <li>
                                                    <a href="blog-3-col-mas.php">Blog 3 Col Masonry</a>
                                                </li>
                                                <li>
                                                    <a href="blog-details.php">Blog Details</a>
                                                </li>
                                                <li>
                                                    <a href="blog-details-audio.php">Blog Details Audio</a>
                                                </li>
                                                <li>
                                                    <a href="blog-details-video.php">Blog Details Video</a>
                                                </li>
                                                <li>
                                                    <a href="blog-details-gallery.php">Blog Details Gallery</a>
                                                </li>
                                                <li>
                                                    <a href="blog-details-left-sidebar.php">Details Left Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="about.php">About Us</a>
                                                </li>

                                                <li>
                                                    <a href="contact.php">Contact Us</a>
                                                </li>
                                                <li>
                                                    <a href="logout.php">logout</a>
                                                </li>
                                                <li>
                                                    <a href="register.php">Register</a>
                                                </li>
                                                <li>
                                                    <a href="cart.php">Shoping Cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.php">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php">Wishlist</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.php">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 col-5 col-sm-7 pl-0">
                            <div class="header-right f-right">
                                <ul>
                                    <li class="search-btn">
                                        <a class="search-btn nav-search search-trigger" href="#"><i class="fas fa-search"></i></a>
                                    </li>
                                    <li class="login-btn"><a href="login.html"><i class="far fa-user"></i></a></li>
                                    <li class="d-shop-cart"><a href="#"><i class="flaticon-shopping-cart"></i> <span class="cart-count">3</span></a>
                                        <ul class="minicart">
                                            <li>
                                                <div class="cart-img">
                                                    <a href="product-details.php">
                                                        <img src="img/product/pro1.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <h3>
                                                        <a href="product-details.php">Black & White Shoes</a>
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
                                                    <a href="product-details.php">
                                                        <img src="img/product/pro2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <h3>
                                                        <a href="product-details.php">Black & White Shoes</a>
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
                                                    <a href="product-details.php">
                                                        <img src="img/product/pro3.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <h3>
                                                        <a href="product-details.php">Black & White Shoes</a>
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
                                                    <a href="cart.php">Shopping Cart</a>
                                                    <a class="red-color" href="checkout.php">Checkout</a>
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
        </header>
        <!-- header end -->

        <main>
            <!-- slider-area start -->
            <section class="slider-area pos-relative">
                <div class="slider-active">
                    <div class="single-slider slide-1-style slide-height d-flex align-items-center" data-background="img/slider/slide1.jpg">
                        <div class="shape-title bounce-animate">
                            <h2>UX</h2>
                        </div>
                        <div class="shape-icon bounce-animate">
                            <img src="img/slider/shape-icon.png" alt="">
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="slide-content">
                                        <span data-animation="fadeInRight" data-delay=".2s">Furniture Collection</span>
                                        <h1 data-animation="fadeInUp" data-delay=".5s">Synnes Dining
                                        Chair Upholstered</h1>
                                        <div class="slide-btn">
                                            <a class="btn theme-btn" href="shop.php" data-animation="fadeInLeft" data-delay=".7s">shop now</a>
                                            <a class="btn white-btn" href="shop.php" data-animation="fadeInRight" data-delay=".9s">category</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="slide-shape1" data-animation="bounceInRight" data-delay=".9s"><img src="img/slider/shape1.png" alt=""></div>
                                    <div class="slide-shape2" data-animation="bounceInRight" data-delay="1.2s"><img src="img/slider/shape2.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slide-1-style slide-height d-flex align-items-center" data-background="img/slider/slide1-1.jpg">
                        <div class="shape-title bounce-animate">
                            <h2>UX</h2>
                        </div>
                        <div class="shape-icon bounce-animate">
                            <img src="img/slider/shape-icon.png" alt="">
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="slide-content">
                                        <span data-animation="fadeInRight" data-delay=".2s">Furniture Collection</span>
                                        <h1 data-animation="fadeInUp" data-delay=".5s">Synnes Dining
                                        Chair Upholstered</h1>
                                        <div class="slide-btn">
                                            <a class="btn theme-btn" href="shop.php" data-animation="fadeInLeft" data-delay=".7s">shop now</a>
                                            <a class="btn white-btn" href="shop.php" data-animation="fadeInRight" data-delay=".9s">category</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="slide-shape1" data-animation="bounceInRight" data-delay=".9s"><img src="img/slider/shape3.png" alt=""></div>
                                    <div class="slide-shape2" data-animation="bounceInRight" data-delay="1.1s"><img src="img/slider/shape4.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider-area end -->

            <!-- banner area start -->
            <section class="banner-area pt-30 pl-15 pr-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="banner mb-30">
                                <a href="shop.php"><img src="img/banner/banner-1/banner1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="banner mb-30">
                                <a href="shop.php"><img src="img/banner/banner-1/banner2.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="banner mb-30">
                                <a href="shop.php"><img src="img/banner/banner-1/banner3.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner area end -->

            <!-- product-area start -->
            <section class="product-area box-90 pt-70 pb-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12">
                            <div class="area-title mb-50">
                                <h2>Brand New Products</h2>
                                <p>Browse the huge variety of our products</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-12">
                            <div class="product-tab mb-40">
                                <ul class="nav product-nav  justify-content-xl-end" id="myTab1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                                            aria-selected="true">table lamp</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                            aria-selected="false">furniture</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                                            aria-selected="false">chair</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#contact9" role="tab" aria-controls="contact"
                                            aria-selected="false">Clock</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="product-tab-content">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="product-slider owl-carousel">
                                            <div class="pro-item">
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro1.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro2.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro2.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro3.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro6.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro4.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro8.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro5.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro2.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro7.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                            <img src="img/product/pro8.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro1.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro6.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro8.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro6.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro3.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="product-slider owl-carousel">
                                            <div class="pro-item">
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro8.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro1.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro6.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro1.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro2.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro2.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro3.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro6.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro4.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro8.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro5.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro2.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro7.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.html">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro8.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro6.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro3.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="product-slider owl-carousel">
                                            <div class="pro-item">
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro8.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro1.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro6.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro8.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro6.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro3.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro1.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro2.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.html">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro2.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro3.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro6.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro4.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro8.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro5.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro2.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro7.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                    <div class="tab-pane fade" id="contact9" role="tabpanel" aria-labelledby="contact-tab1">
                                        <div class="product-slider owl-carousel">
                                            <div class="pro-item">
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro3.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro6.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro4.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro8.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro5.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro2.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro7.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro1.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro2.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro2.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro8.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro1.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro6.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro8.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro6.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro3.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product-area end -->

            <!-- top-seller-area start -->
            <section class="top-seller-area box-90">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-5 col-lg-8 col-md-7">
                            <div class="area-title mb-50">
                                <h2>Top Sellers</h2>
                                <p>Browse the huge variety of our products</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-4 col-md-5">
                            <div class="vue-btn text-left text-md-right mb-50">
                                <a href="shop.php" class="btn theme-btn">Collection</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-5">
                            <div class="top-seller mb-50">
                                <img src="img/banner/top-seller/banner1.jpg" alt="">
                                <div class="seller-box text-center">
                                    <div class="top-seller-content text-left">
                                        <h2><a href="shop.php">Minimal Home Decor</a></h2>
                                        <div class="pro-price mb-25">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                        <div class="top-seller-btn">
                                            <a href="shop.php" class="btn theme-btn">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="top-seller text-right mb-50">
                                <img src="img/banner/top-seller/banner2.jpg" alt="">
                                <div class="sellet-2-content">
                                    <h2><a href="shop.php">Xcross Comoer Furniture</a></h2>
                                    <div class="pro-price mb-25">
                                        <span>$119.00 USD</span>
                                        <span class="old-price">$230.00 USD</span>
                                    </div>
                                    <div class="top-seller-btn">
                                        <a href="shop.php" class="btn theme-btn-2 mr-20">view details</a>
                                        <a href="#" class="shop-btn"><i class="flaticon-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- top-seller-area end -->

            <!-- product-area start -->
            <section class="product-area box-90 pt-45 pb-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12">
                            <div class="area-title mb-50">
                                <h2>Best Sell Products</h2>
                                <p>Browse the huge variety of our products</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-12">
                            <div class="product-tab mb-40">
                                <ul class="nav product-nav justify-content-xl-end" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab"
                                            aria-controls="home" aria-selected="true">table lamp</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1" role="tab"
                                            aria-controls="profile" aria-selected="false">furniture</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab6" data-toggle="tab" href="#contact1" role="tab"
                                            aria-controls="contact" aria-selected="false">chair</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#contact2" role="tab"
                                            aria-controls="contact" aria-selected="false">Clock</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="product-tab-content">
                                <div class="tab-content" id="myTabContent1">
                                    <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="product-slider owl-carousel">
                                            <div class="pro-item">
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro9.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro10.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro11.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro6.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro12.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro8.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro7.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                    <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="product-slider owl-carousel">
                                            <div class="pro-item">
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro2.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro4.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro8.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro3.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro7.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro8.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro1.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                    <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="product-slider owl-carousel">
                                            <div class="pro-item">
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro2.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro4.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro8.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro3.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro7.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro8.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro1.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                    <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab1">
                                        <div class="product-slider owl-carousel">
                                            <div class="pro-item">
                                                <div class="product-wrapper mb-50">
                                                    <div class="product-img mb-25">
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro8.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro1.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro3.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <span class="sale">sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-cat mb-10">
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro2.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.html">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro4.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro8.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                                        <a href="product-details.php">
                                                            <img src="img/product/pro7.jpg" alt="">
                                                            <img class="secondary-img" src="img/product/pro4.jpg" alt="">
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
                                                            <a href="shop.php">decor, </a>
                                                            <a href="shop.php">furniture</a>
                                                        </div>
                                                        <h4>
                                                            <a href="product-details.php">Minimal Troma Furniture</a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product-area end -->

            <!-- upcoming-product-area start -->
            <section class="upcoming-product-area pos-relative box-90 pt-120 pb-120" data-background="img/bg/bg.jpg">
                <div class="upc-shape d-none d-xl-block">
                    <div class="bakix-marker map-c1">
                        <div class="bakix-map-icon">
                            <i class="flaticon-add"></i>
                        </div>
                        <div class="bakix-map-address">
                            <p>Lodge Flush Mount</p>
                        </div>
                    </div>
                    <div class="bakix-marker map-c2">
                        <div class="bakix-map-icon">
                            <i class="flaticon-add"></i>
                        </div>
                        <div class="bakix-map-address">
                            <p>Lodge Flush Mount</p>
                        </div>
                    </div>
                    <div class="bakix-marker map-c3">
                        <div class="bakix-map-address">
                            <p>Lodge Flush Mount</p>
                        </div>
                        <div class="bakix-map-icon">
                            <i class="flaticon-add"></i>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-6">
                            <div class="upcoming-product">
                                <div class="upc-price">$500.00</div>
                                <h1><a href="product-details.html">Lodge Flush Mount</a></h1>
                                <ul class="upc-pro-info fix">
                                    <li class="d-flex">
                                        <i class="flaticon-layers"></i>
                                        <div class="upc-info">
                                            <h4>Origin From</h4>
                                            <span>Sweden</span>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <i class="flaticon-layers"></i>
                                        <div class="upc-info">
                                            <h4>Material</h4>
                                            <span>Aluminum</span>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <i class="flaticon-layers"></i>
                                        <div class="upc-info">
                                            <h4>Designer</h4>
                                            <span>SayyamCode</span>
                                        </div>
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                                <div class="upc-btn">
                                    <a class="btn theme-btn" href="shop.php" data-animation="fadeInLeft" data-delay=".7s">shop now</a>
                                    <a class="btn white-btn" href="shop.php" data-animation="fadeInRight" data-delay=".9s">Details</a>
                                </div>
                                <div class="event-timer">
                                    <div class="mt-40" data-countdown="2019/04/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- upcoming-product-area end -->

            <!-- latest-blog-area start -->
            <section class="latest-blog-area pt-95 pb-60 box-90">
                <div class="container-fluid">
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
                                    <img src="img/blog/latest/lb1.jpg" alt="">
                                </div>
                                <div class="news__caption white-bg">
                                    <div class="news-meta mb-15">
                                        <span><i class="far fa-calendar-check"></i> Sep 15, 2018 </span>
                                        <span><a href="#"><i class="far fa-user"></i> Diboli</a></span>
                                        <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                                    </div>
                                    <h2><a href="blog-details.php">Inspiration Is Under Construction Business &
                                    Fashion 2019. In this situation we do that..</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="latest-news mb-40">
                                <div class="news__thumb mb-25">
                                    <img src="img/blog/latest/lb2.jpg" alt="">
                                </div>
                                <div class="news__caption white-bg">
                                    <div class="news-meta mb-15">
                                        <span><i class="far fa-calendar-check"></i> Sep 15, 2018 </span>
                                        <span><a href="#"><i class="far fa-user"></i> Joly</a></span>
                                        <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                                    </div>
                                    <h2><a href="blog-details.php">Inspiration Is Under Construction Business &
                                    Fashion 2019. In this situation we do that..</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="latest-news mb-40">
                                <div class="news__thumb mb-25">
                                    <img src="img/blog/latest/lb3.jpg" alt="">
                                </div>
                                <div class="news__caption white-bg">
                                    <div class="news-meta mb-15">
                                        <span><i class="far fa-calendar-check"></i> Sep 15, 2018 </span>
                                        <span><a href="#"><i class="far fa-user"></i> Joly</a></span>
                                        <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                                    </div>
                                    <h2><a href="blog-details.php">Inspiration Is Under Construction Business &
                                    Fashion 2019. In this situation we do that..</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- latest-blog-area end -->

            <!-- subscribe-area start -->
            <section class="subscribe-area box-105">
                <div class="subscribe-inner black-bg pt-70 pb-20">
                    <div class="container-fluid">
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
        <footer>
            <div class="footer-area box-90 pt-100 pb-60">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-5 col-md-6 ">
                            <div class="footer-widget mb-40">
                                <div class="footer-logo">
                                    <a href="index.php"><img src="img/logo/footer-logo.png" alt=""></a>
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
                        <div class="col-xl-2 col-lg-2 col-md-3 d-lg-none d-xl-block">
                            <div class="footer-widget pl-50 mb-40">
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
                        <div class="col-xl-2 col-lg-2 col-md-3 d-lg-none d-xl-block">
                            <div class="footer-widget pl-30 mb-40">
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
                        <div class="col-xl-2 col-lg-2 col-md-3">
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
                        <div class="col-xl-3 col-lg-5 col-md-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-banner">
                                    <a href="shop.php"><img src="img/banner/add.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area box-105">
                <div class="container-fluid">
                    <div class="copyright-border pt-30 pb-30">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="copyright text-center text-md-left">
                                    <p>Copyright © 2019 <a href="#">SayyamCode</a>. All Rights Reserved</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="footer-icon text-center text-md-right ">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
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
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
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
