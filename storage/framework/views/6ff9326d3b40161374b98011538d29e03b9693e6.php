<header>
    <!-- header top area start -->
    <div class="header_top_area" style="margin-top:-21px">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <p> <i class="fa fa-phone"></i> hotline: 01922262289</p>
                </div>
                <div class="col-sm-6 col-md-8 col-lg-9">
                    <div class="right-menus">
                        <ul>
                            <?php if(Auth::check()): ?>

                            <li><a href="#"><span> <i class="fa fa-user"></i></span>
                                Welcome <?php echo e(ucfirst(Auth::User()->name)); ?> </a>
                            </li>
                            <li><a href="/logout"><span> <i class="fa fa-sign-out"></i></span> Logout  </a>
                            </li>
                            <?php else: ?>
                            <li><a href="/login"><span> <i class="fa fa-sign-in"></i></span> Login  </a>
                            </li>
                            <li><a href="/register"><span><i class="fa fa-key"></i></span>  Register</a></li>
                            <li><a href="#"><span> <i class="fa fa-heart"></i> </span>Wishlist</a></li>
                            <?php endif; ?>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header main area start -->
    <div class="header_main_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="h2-logo">
                        <a href="<?php echo e(route('index')); ?>"><img src="<?php echo e(URL::to('assets/img/logos/logo.png')); ?>" alt="" height="110" width="220" /></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="h2-cat-search">
                        <div class="em-category-search">
                            <form action="<?php echo e(route('search')); ?>" method="GET">
                                <div class="form-search cate_search">
                                    <div class="input_cat hidden-xs">
                                        <div class="catsearch-dropdown over">
                                            <span class="current">&nbsp;&nbsp;&nbsp; All Categories</span>
                                            <ul >
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="#"> &nbsp;&nbsp;&nbsp; <?php echo e($category->name); ?> </a></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-search">
                                        <input type="search" name="query" placeholder="Search entire store here..." class="input-text">
                                        <button class="button" title="Search" type="submit"><span><span>Search</span></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="cart-area">
                        <div class="main-cart-area">
                            <div class="cart-icon">
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>My Cart: <?php echo e(Cart::count()); ?>

                                </a>
                            </div>
                            <div class="cart-sub">
                                <div class="all_carts_item">
                                    <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row mini-cart-item ">
                                        <a href="#" class="cart_list_product_img">
                                            <img class="attachment-shop_thumbnail" src="<?php echo e(asset($cart->model->small1)); ?>" alt="04">
                                        </a>
                                        <div class="mini-cart-info">
                                            <a href="#" class="cart_list_product_title"><?php echo e($cart->name); ?></a>
                                            <div class="cart_list_product_quantity"><?php echo e($cart->qty); ?> x <span class="amount">₦<?php echo e(number_format($cart->price)); ?></span></div>
                                        </div>
                                        <a title="Remove this item" class="remove" href="<?php echo e(route('cart.delete', $cart->rowId)); ?>"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                                <div class="minicart_total_checkout">
                                    Subtotal<span><span class="amount">₦<?php echo e(Cart::total()); ?></span></span>
                                </div>
                                <div class="btn-mini-cart inline-lists">
                                    <a class="button btn-viewcart" href="<?php echo e(route('cart')); ?>">View Cart</a>
                                    <a title="Checkout" class="button btn-checkout" href="<?php echo e(route('checkout')); ?>">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header main area end -->
</header>