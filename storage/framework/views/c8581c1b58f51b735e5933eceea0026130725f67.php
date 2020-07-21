<div class="banner-top container-fluid" id="home">
    
    <header>
        <div class="row">
            <div class="col-md-3 top-info text-left mt-lg-4">
                <h6>Need Help</h6>
                <ul>
                    <li>
                        <i class="fas fa-phone"></i> Call</li>
                    <li class="number-phone mt-3">12345678099</li>
                </ul>
            </div>
            <div class="col-md-6 logo-w3layouts text-center">
                <h1 class="logo-w3layouts">
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        Teashop </a>
                </h1>
            </div>

            <div class="col-md-3 top-info-cart text-right mt-lg-4">
                <ul class="cart-inner-info">
                    <li class="button-log">
                    <?php if(auth()->guard()->check()): ?>
                        <?php echo e(ucfirst(Auth::user()->name )); ?>


                            <a class="btn btn-default" style="margin-bottom: 10px;" href="<?php echo e(route('logout')); ?>"

                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                             <i class="fa fa-user fa-fw " aria-hidden="true"></i>
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>

                    <?php endif; ?>
                     <?php if(auth()->guard()->guest()): ?>
                     <a   class="btn btn-default"  href="<?php echo e(route('login')); ?>">
                        <i class="fa fa-user fa-fw " aria-hidden="true"></i>Login
                    </a>

                     <?php endif; ?>

                    </li>

                    <li class="galssescart galssescart2 cart cart box_1">
                        <form action="#" method="post" class="last">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <button class="top_googles_cart" type="submit" name="submit" value="">
                                My Cart
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                        </form>
                    </li>
                </ul>

            </div>
        </div>
        <div class="search">
            <div class="mobile-nav-button">
                <button id="trigger-overlay" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <!-- open/close -->
            <div class="overlay overlay-door">
                <button type="button" class="overlay-close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
                <form action="#" method="post" class="d-flex">
                    <input class="form-control" type="search" placeholder="Search here..." required="">
                    <button type="submit" class="btn btn-primary submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>

            </div>
            <!-- open/close -->
        </div>
        <label class="top-log mx-auto"></label>
        <nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

            <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">

                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-mega mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link ml-lg-0" href="<?php echo e(url('/')); ?>">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/about')); ?>">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Features
                        </a>
                        <ul class="dropdown-menu mega-menu ">
                            <li>
                                <div class="row">
                                    <div class="col-md-4 media-list span4 text-left">
                                        <h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
                                        <ul>
                                            <li class="media-mini mt-3">
                                                <a href="shop.html">Designer Glasses</a>
                                            </li>
                                            <li class="">
                                                <a href="shop.html"> Ray-Ban</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Prescription Glasses</a>
                                            </li>
                                            <li class="mt-3">
                                                <h5>View more pages</h5>
                                            </li>
                                            <li class="mt-2">
                                                <a href="about.html">About</a>
                                            </li>
                                            <li>
                                                <a href="customer.html">Customers</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 media-list span4 text-left">
                                        <h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
                                        <div class="media-mini mt-3">
                                            <a href="shop.html">
                                                <img src="<?php echo e(asset('frontend/images/g2.jpg')); ?>" class="img-fluid" alt=""  lazy="loading">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 media-list span4 text-left">
                                        <h5 class="tittle-w3layouts-sub">Tittle goes here </h5>
                                        <div class="media-mini mt-3">
                                            <a href="shop.html">
                                                <img src="<?php echo e(asset('frontend/images/g3.jpg')); ?>" class="img-fluid" alt=""  lazy="loading">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu mega-menu ">
                            <li>
                                <div class="row">
                                    <div class="col-md-4 media-list span4 text-left">
                                        <h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
                                        <ul>
                                            <li class="media-mini mt-3">
                                                <a href="shop.html">Designer Glasses</a>
                                            </li>
                                            <li class="">
                                                <a href="shop.html"> Ray-Ban</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Prescription Glasses</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Rx Sunglasses</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Contact Lenses</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Multifocal Glasses</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Kids Glasses</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Lightweight Glasses</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Sports Glasses</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 media-list span4 text-left">
                                        <h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
                                        <ul>
                                            <li class="media-mini mt-3">

                                                <a href="shop.html">Brooks Brothers</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Persol</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Polo Ralph Lauren</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Prada</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Ray-Ban Jr</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Sferoflex</a>
                                            </li>
                                        </ul>
                                        <ul class="sub-in text-left">

                                            <li>
                                                <a href="shop.html">Polo Ralph Lauren</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Prada</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Ray-Ban Jr</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-md-4 media-list span4 text-left">

                                        <h5 class="tittle-w3layouts-sub-nav">Tittle goes here </h5>
                                        <div class="media-mini mt-3">
                                            <a href="shop.html">
                                                <img src="<?php echo e(asset('frontend/images/g1.jpg')); ?>" class="img-fluid" alt=""  lazy="loading">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/contact')); ?>">Contact</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>


</div>
<?php /**PATH C:\laragon\www\ecom\resources\views/frontend/include/nav.blade.php ENDPATH**/ ?>