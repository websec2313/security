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
                                            <a href="index.html">Home</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="index.php">Home Style 1</a>
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
                                                    <a href="reser-password.php">logout</a>
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
                                        <a class="search-btn nav-search search-trigger" href="#"><i
                                                class="fas fa-search"></i></a>
                                    </li>
                                    <li class="login-btn"><a href="index.php"><i class="far fa-user"></i></a></li>
                                    <li class="d-shop-cart"><a href="#"><i class="flaticon-shopping-cart"></i> <span
                                                class="cart-count">3</span></a>
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

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area" data-background="img/bg/page-title.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1>About Us</h1>
                            <ul class="breadcrumb-menu">
                                <li><a href="welcome.php">home</a></li>
                                <li><span>About</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

            <!-- page-title-area end -->
            <section class="about-area pt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="section-title mb-25">
                                <p><span></span> Community</p>
                                <h1>Get Every Updates</h1>
                            </div>
                            <div class="about-community mb-30">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    ali qua. Ut enim ad minim veniam, quis nostrud exercit ation ullamco laboris nisi ut aliquip ex
                                    ea commodo consequat.
                                    Duis aute irure dolor veniam.</p>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="about-community-text mb-30">
                                <p>Vue is an Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                    ea commodo consequat.
                                    Duis aute irure dolor.</p>
                                <p>Korem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="overview text-center mt-90">
                                <p>Vue helps artists, musicians, filmmakers,
                                designers, and other creators find the resources ideas a
                                reality. To date, tens of
                                thousands of creative projects big and small have come to life with the support of the
                                vue special community.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="video-area">
                <div class="bakix-video">
                    <img src="img/bg/video.jpg" alt="">
                    <a class="popup-video" href="https://www.youtube.com/watch?v=Y6MlVop80y0"><i class="fas fa-play"></i></a>
                </div>
            </section>
            <section class="mission-area pt-100 pb-70 ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 d-lg-none d-xl-block">
                            <div class="mission-img mb-30">
                                <img src="img/bg/mission.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="mission-text mb-30">
                                <div class="mission-title mb-30">
                                    <p><span></span> Our Mission</p>
                                    <h1>Our Mission Is To
                                        Help Bring Creative
                                        Project To Life.</h1>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                    ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                    in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia
                                    deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                    voluptatem accusantium
                                    doloremque laudantium.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="big-team-area">
                <div class="big-image">
                    <img src="img/bg/banner.jpg" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-active owl-carousel theme-bg">
                                <div class="testimonial-item text-center">
                                    <p>“Vue is one of those platforms that gives you space to work with people who know you, love
                                        you, and support you.”</p>
                                    <span>- Salim Rana</span>
                                </div>
                                <div class="testimonial-item text-center">
                                    <p>“Vue is one of those platforms that gives you space to work with people who know you, love
                                        you, and support you.”</p>
                                    <span>- Jason Derula</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- team-area start -->
            <section class="team-area pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="area-title text-center mb-50">
                                <h2>Awesome Team</h2>
                                <p>Our one of the best team members</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="team mb-30">
                                <div class="team__img">
                                    <img src="img/team/team4.jpg" alt="">
                                </div>
                                <div class="team__content text-center white-bg">
                                    <h4>Salim Rana</h4>
                                    <span>Founder</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="team mb-30">
                                <div class="team__img">
                                    <img src="img/team/team5.jpg" alt="">
                                </div>
                                <div class="team__content text-center white-bg">
                                    <h4>James Tablon</h4>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="team mb-30">
                                <div class="team__img">
                                    <img src="img/team/team6.jpg" alt="">
                                </div>
                                <div class="team__content text-center white-bg">
                                    <h4>Mikado Rikoda</h4>
                                    <span>marketing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- team-area end -->


        </main>

        <!-- footer start -->
        <footer class="footer-area pl-100 pr-100">
            <div class="footer-area box-90 pt-100 pb-60" data-background="img/bg/footer.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6 ">
                            <div class="footer-widget mb-40 pr-70">
                                <div class="footer-logo">
                                    <a href="index.php"><img src="img/logo/footer-logo.png" alt=""></a>
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
