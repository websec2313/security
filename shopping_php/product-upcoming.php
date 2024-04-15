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
        <link rel="stylesheet" href="css/jquery-ui.css">
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
                                <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                            </div>

                            <div class="category-menu">
                                <h4>Category</h4>
                                <ul>
                                    <li><a href="shop.html"><i class="flaticon-shopping-cart-1"></i> Table lamp</a></li>
                                    <li><a href="shop.html"><i class="flaticon-shopping-cart-1"></i> Furniture</a></li>
                                    <li><a href="shop.html"><i class="flaticon-shopping-cart-1"></i> Chair</a></li>
                                    <li><a href="shop.html"><i class="flaticon-shopping-cart-1"></i> Men</a></li>
                                    <li><a href="shop.html"><i class="flaticon-shopping-cart-1"></i> Women</a></li>
                                    <li><a href="shop.html"><i class="flaticon-shopping-cart-1"></i> Cloth</a></li>
                                    <li><a href="shop.html"><i class="flaticon-shopping-cart-1"></i> Trend</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-6 col-md-8 col-8 d-none d-xl-block">
                            <div class="main-menu text-center">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a href="index.html">Home</a>
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
                                            <a href="shop.html">Shop</a>
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
                                            <a href="shop-filter.html">Products </a>
                                        </li>
                                        <li>
                                            <a href="blog.html">Blog</a>
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
                                            <a href="#">Pages</a>
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
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 col-5 col-sm-7 pl-0">
                            <div class="header-right f-right">
                                <ul>
                                    <li class="search-btn">
                                        <a class="search-btn nav-search search-trigger" href="#"><i
                                                class="fas fa-search"></i></a>
                                    </li>
                                    <li class="login-btn"><a href="login.html"><i class="far fa-user"></i></a></li>
                                    <li class="d-shop-cart"><a href="#"><i class="flaticon-shopping-cart"></i> <span
                                                class="cart-count">3</span></a>
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
        </header>
        <!-- header end -->


        <main>

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area" data-background="img/bg/page-title.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1>Our Shop</h1>
                            <ul class="breadcrumb-menu">
                                <li><a href="index.html">home</a></li>
                                <li><span>shop details</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- shop-area start -->
        <section class="shop-details-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-4">
                        <div class="product-details-img mb-10">
                            <div class="tab-content" id="myTabContentpro">
                                <div class="tab-pane fade show active" id="home" role="tabpanel">
                                    <div class="product-large-img">
                                        <img src="img/product/pro1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel">
                                    <div class="product-large-img">
                                        <img src="img/product/pro2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile1" role="tabpanel">
                                    <div class="product-large-img">
                                        <img src="img/product/pro3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-thumb-tab mb-30">
                            <ul class="nav" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-selected="true"><img
                                            src="img/product/pro1.jpg" alt=""> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-selected="false"><img
                                            src="img/product/pro2.jpg" alt=""></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile1" role="tab" aria-selected="false"><img
                                            src="img/product/pro3.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8">
                        <div class="product-details mb-30 pl-30">
                            <div class="details-cat mb-20">
                                <a href="#">decor,</a>
                                <a href="#">furniture</a>
                            </div>
                            <h2 class="pro-details-title mb-15">Limonda Women Winter Cloth</h2>
                            <div class="details-price mb-20">
                                <span>$119.00</span>
                                <span class="old-price">$246.00</span>
                            </div>
                            <div class="product-variant">

                                <div class="product-color variant-item">
                                    <div class="variant-name">
                                        <span>Colors</span>
                                    </div>
                                    <ul class="shop-link shop-color">
                                        <li><a href="shop.html"><span class="blue"></span></a></li>
                                        <li><a href="shop.html"><span class="green"></span> </a></li>
                                        <li><a href="shop.html"><span class="orange"></span> </a></li>
                                        <li><a href="shop.html"><span class="navy"></span> </a></li>
                                        <li><a href="shop.html"><span class="pinkish"></span> </a></li>
                                        <li><a href="shop.html"><span class="vista"></span> </a></li>
                                    </ul>
                                </div>

                                <div class="product-coming variant-item">
                                    <div class="variant-name">
                                        <span>time left</span>
                                    </div>
                                    <div class="event-timer details-timer">
                                        <div data-countdown="2019/04/01"></div>
                                    </div>
                                </div>

                                <div class="product-desc variant-item">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                </div>

                                <div class="product-info-list variant-item">
                                    <ul>
                                        <li><span>Brands:</span> Hewlett-Packard</li>
                                        <li><span>Product Code:</span> d12</li>
                                        <li><span>Stock:</span> <span class="in-stock">In Stock</span></li>
                                    </ul>
                                </div>

                                <div class="product-action-details variant-item">
                                    <div class="product-details-action">
                                        <form action="#">
                                            <div class="plus-minus">
                                                <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                            </div>
                                            <button class="details-action-icon" type="submit"><i class="fas fa-heart"></i></button>
                                            <button class="details-action-icon" type="submit"><i class="fas fa-hourglass"></i></button>
                                            <div class="details-cart mt-40">
                                                <button class="btn theme-btn">purchase now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-50">
                    <div class="col-xl-8 col-lg-8">
                        <div class="product-review">
                            <ul class="nav review-tab" id="myTabproduct" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab6" data-toggle="tab" href="#home6" role="tab" aria-controls="home"
                                        aria-selected="true">Description </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab6" data-toggle="tab" href="#profile6" role="tab" aria-controls="profile"
                                        aria-selected="false">Reviews (2)</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="home6" role="tabpanel" aria-labelledby="home-tab6">
                                    <div class="desc-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                                        unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                        illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                        ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile6" role="tabpanel" aria-labelledby="profile-tab6">
                                    <div class="desc-text review-text">
                                        <div class="product-commnets">
                                            <div class="product-commnets-list mb-25 pb-15">
                                                <div class="pro-comments-img">
                                                    <img src="img/product/comments/01.png" alt="">
                                                </div>
                                                <div class="pro-commnets-text">
                                                    <h4>Roger West -
                                                        <span>June 5, 2018</span>
                                                    </h4>
                                                    <div class="pro-rating">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt
                                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation.</p>
                                                </div>
                                            </div>
                                            <div class="product-commnets-list mb-25 pb-15">
                                                <div class="pro-comments-img">
                                                    <img src="img/product/comments/02.png" alt="">
                                                </div>
                                                <div class="pro-commnets-text">
                                                    <h4>Roger West -
                                                        <span>June 5, 2018</span>
                                                    </h4>
                                                    <div class="pro-rating">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt
                                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-box mt-50">
                                            <h4>Add a Review</h4>
                                            <div class="your-rating mb-40">
                                                <span>Your Rating:</span>
                                                <div class="rating-list">
                                                    <a href="#">
                                                        <i class="far fa-star"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="far fa-star"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="far fa-star"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="far fa-star"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="far fa-star"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <form class="review-form" action="#">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <label for="message">YOUR REVIEW</label>
                                                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <label for="r-name">Name</label>
                                                        <input type="text" id="r-name">
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <label for="r-email">Email</label>
                                                        <input type="email" id="r-email">
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <button class="btn theme-btn">Add your Review</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="pro-details-banner">
                            <a href="shop.html"><img src="img/banner/pro-details.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-area end -->

            <!-- product-area start -->
            <section class="product-area pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="area-title text-center mb-50">
                                <h2>Releted Products</h2>
                                <p>Browse the huge variety of our products</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-slider-2 owl-carousel">
                        <div class="pro-item">
                            <div class="product-wrapper">
                                <div class="product-img mb-25">
                                    <a href="product-details.html">
                                        <img src="img/product/pro4.jpg" alt="">
                                        <img class="secondary-img" src="img/product/pro5.jpg" alt="">
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
                            <div class="product-wrapper">
                                <div class="product-img mb-25">
                                    <a href="product-details.html">
                                        <img src="img/product/pro5.jpg" alt="">
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
                            <div class="product-wrapper">
                                <div class="product-img mb-25">
                                    <a href="product-details.html">
                                        <img src="img/product/pro7.jpg" alt="">
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
                            <div class="product-wrapper">
                                <div class="product-img mb-25">
                                    <a href="product-details.html">
                                        <img src="img/product/pro9.jpg" alt="">
                                        <img class="secondary-img" src="img/product/pro10.jpg" alt="">
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
                        </div>
                        <div class="pro-item">
                            <div class="product-wrapper">
                                <div class="product-img mb-25">
                                    <a href="product-details.html">
                                        <img src="img/product/pro1.jpg" alt="">
                                        <img class="secondary-img" src="img/product/pro11.jpg" alt="">
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
                        </div>
                    </div>
                </div>
            </section>
            <!-- product-area end -->


        </main>

        <!-- footer start -->
        <footer class="footer-area pl-100 pr-100">
            <div class="footer-area box-90 pt-100 pb-60" data-background="img/bg/footer.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6 ">
                            <div class="footer-widget mb-40 pr-70">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="img/logo/footer-logo.png" alt=""></a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore mag na
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat.
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
                        <div class="col-xl-3 col-lg-2 col-md-3 d-md-none d-xl-block">
                            <div class="footer-widget pl-50 mb-40">
                                <h3>Location</h3>
                                <ul class="footer-link">
                                    <li><a href="#">New York</a></li>
                                    <li><a href="#">Tokyo</a></li>
                                    <li><a href="#">Dhaka</a></li>
                                    <li><a href="#">Chittagong</a></li>
                                    <li><a href="#">China</a></li>
                                    <li><a href="#">Japan</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3">
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
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
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
