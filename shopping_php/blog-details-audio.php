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
                            <h1>Login</h1>
                            <ul class="breadcrumb-menu">
                                <li><a href="index.html">home</a></li>
                                <li><span>Login</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-area start -->
        <section class="blog-area pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <article class="postbox post format-image mb-40">
                            <div class="postbox__audio embed-responsive embed-responsive-16by9 mb-35">
                                <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/469608615&amp;color=%23ff0000&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                            </div>
                            <div class="postbox__text bg-none">
                                <div class="post-meta mb-15">
                                    <span><i class="far fa-calendar-check"></i> September 15, 2018 </span>
                                    <span><a href="#"><i class="far fa-user"></i> Diboli B. Joly</a></span>
                                    <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                                </div>
                                <h3 class="blog-title">
                                    Lorem ipsum dolor sit amet, consectetur adipisic
                                    eiusmod tempor incididunt ut labore et dolore
                                </h3>
                                <div class="post-text mb-20">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea commodo.</p>
                                    <p>Bccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        laborum. Sed ut perspiciatis
                                        unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                                        aperiam, eaque ipsa quae ab
                                        illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
                                        enim ipsam voluptatem quia
                                        voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                        ratione voluptatem sequi
                                        nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non
                                        numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                        voluptatem.</p>
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur
                                            cing elit, sed do eiusmod tempor.</p>
                                        <footer>- Rosalina Pong</footer>
                                    </blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>

                                    <div class="blog-inner-img mb-30 mt-30">
                                        <img src="img/blog/b2.jpg" alt="blog image">
                                    </div>

                                    <div class="inner-content">
                                        <h4>A cleansing hot shower or bath</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur
                                            sint
                                            occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                    </div>
                                    <div class="inner-content">
                                        <h4>Setting the mood with incense</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur
                                            sint
                                            occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                    </div>
                                </div>
                                <div class="row mt-50">
                                    <div class="col-xl-8 col-lg-8 col-md-8 mb-15">
                                        <div class="blog-post-tag">
                                            <span>Releted Tags</span>
                                            <a href="#">organic</a>
                                            <a href="#">Foods</a>
                                            <a href="#">tasty</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 mb-15">
                                        <div class="blog-share-icon text-left text-md-right">
                                            <span>Share: </span>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="navigation-border pt-50 mt-40"></div>
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-5">
                                        <div class="bakix-navigation b-next-post text-left mb-30">
                                            <span><a href="#">Prev Post</a></span>
                                            <h4><a href="#">Tips on Minimalist</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 ">
                                        <div class="bakix-filter text-left text-md-center mb-30">
                                            <a href="#"><img src="img/icon/filter.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-5">
                                        <div class="bakix-navigation b-next-post text-left text-md-right  mb-30">
                                            <span><a href="#">Next Post</a></span>
                                            <h4><a href="#">Tips on Minimalist</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="author mt-80 mb-40">
                                <div class="author-img text-center">
                                    <img src="img/blog/details/author.png" alt="">
                                </div>
                                <div class="author-text text-center">
                                    <h3>MD. Salim Rana</h3>
                                    <div class="author-icon">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-behance-square"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex
                                        ea commodo consequa aute irure dolor. </p>
                                </div>
                            </div>
                            <div class="post-comments">
                                <div class="blog-coment-title mb-30">
                                    <h2>03 Comments</h2>
                                </div>
                                <div class="latest-comments">
                                    <ul>
                                        <li>
                                            <div class="comments-box">
                                                <div class="comments-avatar">
                                                    <img src="img/blog/details/comments1.png" alt="">
                                                </div>
                                                <div class="comments-text">
                                                    <div class="avatar-name">
                                                        <h5>Karon Balina</h5>
                                                        <span>19th May 2018</span>
                                                        <a class="reply" href="#"><i class="fas fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt
                                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation
                                                        ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="children">
                                            <div class="comments-box">
                                                <div class="comments-avatar">
                                                    <img src="img/blog/details/comments1.png" alt="">
                                                </div>
                                                <div class="comments-text">
                                                    <div class="avatar-name">
                                                        <h5>Julias Roy</h5>
                                                        <span>19th May 2018</span>
                                                        <a class="reply" href="#"><i class="fas fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt
                                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation
                                                        ullamco laboris nisi ut aliquip.</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="comments-box">
                                                <div class="comments-avatar">
                                                    <img src="img/blog/details/comments2.png" alt="">

                                                </div>
                                                <div class="comments-text">
                                                    <div class="avatar-name">
                                                        <h5>Arista Williamson</h5>
                                                        <span>19th May 2018</span>
                                                        <a class="reply" href="#"><i class="fas fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt
                                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation
                                                        ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-comments-form">
                                <div class="post-comments-title">
                                    <h2>Post Comments</h2>
                                </div>
                                <form id="contacts-form" class="conatct-post-form" action="#">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="contact-icon contacts-message">
                                                <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Your Comments...."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-icon contacts-name">
                                                <input type="text" placeholder="Your Name.... ">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-icon contacts-email">
                                                <input type="email" placeholder="Your Email....">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-icon contacts-website">
                                                <input type="text" placeholder="Your Website....">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <button class="btn theme-btn" type="submit">Post comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget mb-40">
                            <div class="widget-title-box mb-30">
                                <span class="animate-border"></span>
                                <h3 class="widget-title">Search Objects</h3>
                            </div>
                            <form class="search-form">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget mb-40">
                            <div class="widget-title-box mb-30">
                                <span class="animate-border"></span>
                                <h3 class="widget-title">About Me</h3>
                            </div>
                            <div class="about-me text-center">
                                <img src="img/blog/details/me.png" alt="">
                                <h4>Zulia Maron Duo</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut labore.</p>
                                <div class="widget-social-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="widget mb-40">
                            <div class="widget-title-box mb-30">
                                <span class="animate-border"></span>
                                <h3 class="widget-title">Popular Feeds</h3>
                            </div>
                            <ul class="recent-posts">
                                <li>
                                    <div class="widget-posts-image">
                                        <a href="#"><img src="img/blog/details/img1.jpg" alt=""></a>
                                    </div>
                                    <div class="widget-posts-body">
                                        <h6 class="widget-posts-title"><a href="#">Lorem ipsum dolor sit
                                                cing elit, sed do.</a></h6>
                                        <div class="widget-posts-meta">October 18, 2018 </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-posts-image">
                                        <a href="#"><img src="img/blog/details/img2.jpg" alt=""></a>
                                    </div>
                                    <div class="widget-posts-body">
                                        <h6 class="widget-posts-title"><a href="#">Lorem ipsum dolor sit
                                                cing elit, sed do.</a></h6>
                                        <div class="widget-posts-meta">October 24, 2018 </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-posts-image">
                                        <a href="#"><img src="img/blog/details/img3.jpg" alt=""></a>
                                    </div>
                                    <div class="widget-posts-body">
                                        <h6 class="widget-posts-title"><a href="#">Lorem ipsum dolor sit
                                                cing elit, sed do.</a></h6>
                                        <div class="widget-posts-meta">October 28, 2018 </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget mb-40">
                            <div class="widget-title-box mb-30">
                                <span class="animate-border"></span>
                                <h3 class="widget-title">Categories</h3>
                            </div>
                            <ul class="cat">
                                <li>
                                    <a href="#">Lifestyle <span class="f-right">78</span></a>
                                </li>
                                <li>
                                    <a href="#">Travel <span class="f-right">42</span></a>
                                </li>
                                <li>
                                    <a href="#">Fashion <span class="f-right">32</span></a>
                                </li>
                                <li>
                                    <a href="#">Music <span class="f-right">85</span></a>
                                </li>
                                <li>
                                    <a href="#">Branding <span class="f-right">05</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget mb-40">
                            <div class="widget-title-box mb-30">
                                <span class="animate-border"></span>
                                <h3 class="widget-title">Social Profile</h3>
                            </div>
                            <div class="social-profile">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="widget mb-40">
                            <div class="widget-title-box mb-30">
                                <span class="animate-border"></span>
                                <h3 class="widget-title">Instagram Feeds</h3>
                            </div>
                            <ul id="Instafeed"></ul>
                        </div>
                        <div class="widget mb-40">
                            <div class="widget-title-box mb-30">
                                <span class="animate-border"></span>
                                <h3 class="widget-title">Instagram Feeds</h3>
                            </div>
                            <div class="tag">
                                <a href="#">Popular</a>
                                <a href="#">desgin</a>
                                <a href="#">usability</a>
                                <a href="#">develop</a>
                                <a href="#">consult</a>
                                <a href="#">icon</a>
                                <a href="#">HTML</a>
                                <a href="#">ux</a>
                                <a href="#">business</a>
                                <a href="#">kit</a>
                                <a href="#">keyboard</a>
                                <a href="#">tech</a>
                            </div>
                        </div>
                        <div class="widget mb-40 p-0 b-0">
                            <div class="banner-widget">
                                <a href="#"><img src="img/blog/details/banner.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area end -->


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
