<?php ?>

<body">
<div class="container-fluid px-0">
<!--==========================
       Top Bar
     ============================-->
<section id="" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info float-left">
            <i class="fa fa-envelope-o"></i> <a href="mailto:info@wtsvoip.com">info@wtsvoip.com</a>
            <i class="fa fa-phone"></i> +32 496 39 30 28
        </div>
        <div class="social-links float-right">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
</section>


    <!--==========================
          Header
        ============================-->
    <header id="header">
        <div class="container ">

            <div id="" class="pull-left position-absolute">
                <a href="#body" class="scrollto"><img class="w-50" src="img/logo_104x104.png" alt="" title="" /></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="gts_index.php">GTS</a></li>

                    <li class="">
                        <a href="index.php" class="" data-toggle="">Smart Shop</a>
                        <ul class="bg-transparent">
                            <li><a href="" class="text-white">Smartphons</a></li>
                            <li><a href="gts_index.php" class="text-white">Laptops</a></li>
                            <li><a href="gts_index.php" class="text-white">Smart Home</a></li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="diensten.php" class="" data-toggle="">Diensten</a>
                        <ul class="bg-transparent">
                            <li><a href="gts_index.php" class="text-white">Telecomdiensten</a></li>
                            <li><a href="gts_index.php" class="text-white">Energie</a></li>
                            <li><a href="gts_index.php" class="text-white">Zonnenpanelen</a></li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="klant_info.php" class="" data-toggle="">Klant</a>
                        <ul class="bg-transparent">
                            <li><a href="klant_worden.php" class="text-white">Login in</a></li>
                            <li><a href="klant_worden.php" class="text-white">Registreren</a></li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="partner_info.php" class="" data-toggle="">Partner</a>
                        <ul class="bg-transparent">
                            <li><a href="partner_worden.php" class="text-white">Login in</a></li>
                            <li><a href="partner_worden.php" class="text-white">Registreren</a></li>
                        </ul>
                    </li>


                    <li><a href="over.php">Over</a></li>
                    <li><a href="contact.php">Contact</a></li>


                    <li><?php
                    if(!empty($_SESSION["shopping_cart"])) {
                        $cart_count = count(array_keys($_SESSION["shopping_cart"]));
                        ?>
                        <div class="">
                            <a href="cart.php"><img src="cart-icon.png" alt="cart"/> Cart<span>
<?php echo $cart_count; ?></span></a>
                        </div>
                        <?php
                    }
                    ?></li>

                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->


<!-- Search Wrapper Area Start -->
<div class="search-wrapper section-padding-100">
    <div class="search-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-content">
                    <form action="#" method="get">
                        <input type="search" name="search" id="search" placeholder="Type your keyword...">
                        <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Wrapper Area End -->

<!-- ##### Main Content Wrapper Start ##### -->
<div class="main-content-wrapper d-flex clearfix ">

    <!-- Mobile Nav (max width 767px)-->
    <div class="mobile-nav">
        <!-- Navbar Brand -->
        <div class="amado-navbar-brand">
            <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
        </div>
        <!-- Navbar Toggler -->
        <div class="amado-navbar-toggler">
            <span></span><span></span><span></span>
        </div>
    </div>


<!-- Header Area Start -->
<header class="header-area clearfix">
    <!-- Close Icon -->
    <div class="nav-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <!-- Logo -->
    <!--<div class="logo">
        <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
    </div>-->
    <!-- Amado Nav -->
    <nav class="amado-nav">
        <ul>
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="product-details.php">Product</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="checkout.php">Checkout</a></li>
        </ul>
    </nav>
    <!-- Button Group -->
    <div class="amado-btn-group mt-30 mb-100">
        <a href="#" class="btn amado-btn mb-15">%Discount%</a>
        <a href="#" class="btn amado-btn active">New this week</a>
    </div>
    <!-- Cart Menu -->
    <div class="cart-fav-search mb-100">
        <a href="cart.php" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Cart <span>(0)</span></a>
        <a href="#" class="fav-nav"><img src="img/core-img/favorites.png" alt=""> Favourite</a>
        <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
    </div>
    <!-- Social Button -->
    <div class="social-info d-flex justify-content-between">
        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    </div>
</header>

<!-- Header Area End -->
