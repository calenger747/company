    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <ul class="offcanvas__widget">
            <li><a href="#" class="search-switch"><span class="icon_search"></span></a></li>
            <li><a href="#"><span class="icon_cart_alt"></span></a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="<?= base_url(); ?>Home"><img src="<?= base_url(); ?>assets/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__date">
            <li><span class="icon_mobile"></span> (+123) 4567-7890-123</li>
            <li><span class="icon_clock_alt"></span> Mon-Sat: 10:00 - 16:00 / Sunday Close</li>
        </ul>
        <div class="offcanvas__social">
            <a href="#" class="map-btn">Find us on map <span class="arrow_right"></span></a>
            <div class="header__right__social">
                <a href="#"><span class="social_facebook"></span></a>
                <a href="#"><span class="social_twitter"></span></a>
                <a href="#"><span class="social_vimeo"></span></a>
                <a href="#"><span class="social_pinterest"></span></a>
            </div>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__left">
                            <li><span class="icon_mobile"></span> (+123) 4567-7890-123</li>
                            <li><span class="icon_clock_alt"></span> Mon-Sat: 10:00 - 16:00 / Sunday Close</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <a href="#" class="map-btn">Find us on map <span class="arrow_right"></span></a>
                            <div class="header__right__social">
                                <a href="#"><span class="social_facebook"></span></a>
                                <a href="#"><span class="social_twitter"></span></a>
                                <a href="#"><span class="social_vimeo"></span></a>
                                <a href="#"><span class="social_pinterest"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="<?= base_url(); ?>Home"><img src="<?= base_url(); ?>assets/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="<?php if($this->uri->segment(2) == '' || $this->uri->segment(2) == 'index' ) {echo'active';} ?>"><a href="<?= base_url(); ?>Home">Home</a></li>
                            <li class="<?php if($this->uri->segment(2) == 'services' ) {echo'active';} ?>"><a href="<?= base_url(); ?>Home/services">Services</a></li>
                            <li class="<?php if( $this->uri->segment(2) == 'shop' ) {echo'active';} ?>"><a href="<?= base_url(); ?>Home/shop">Shop</a></li>
                            <li class="<?php if($this->uri->segment(2) == 'about' || $this->uri->segment(2) == 'services_detail' || $this->uri->segment(2) == 'shop_detail' || $this->uri->segment(2) == 'blog_detail' || $this->uri->segment(2) == 'contact' ) {echo'active';} ?>"><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="<?= base_url(); ?>Home/about">About Us</a></li>
                                    <li><a href="<?= base_url(); ?>Home/services_detail">Services Details</a></li>
                                    <li><a href="<?= base_url(); ?>Home/shop_detail">Shop Details</a></li>
                                    <li><a href="<?= base_url(); ?>Home/blog_detail">Blog Details</a></li>
                                    <li><a href="<?= base_url(); ?>Home/contact">Contact</a></li>
                                </ul>
                            </li>
                            <li class="<?php if($this->uri->segment(2) == 'blog' ) {echo'active';} ?>"><a href="<?= base_url(); ?>Home/blog">Blog</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2">
                    <ul class="header__right">
                        <li><a href="#" class="search-switch"><span class="icon_search"></span></a></li>
                        <li><a href="#"><span class="icon_cart_alt"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->