<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- slider area start -->
    <div class="h2_slider_area">
        <div class="container">
            <div class="row">
                <div class="h2-main-slider ">
                    <?php echo $__env->make('partials._categories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <?php echo $__env->make('partials._slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <div class="row">
                            <!-- add area start -->
                            <div class="electronics-bottom-bannar-area">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <a href="#"><img alt="" src="<?php echo e(URL::to('assets/img/promo_discount.jpg')); ?>"></a>
                                </div>
                                <div class="col-sm-6  col-md-6 col-lg-6">
                                    <a href="#"><img alt="" src="<?php echo e(URL::to('assets/img/discount_banner.jpg')); ?>"></a>
                                </div>
                            </div>


                            <!-- add area end -->
                        </div>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="h2-new-arrivals-area">
                            <div class="h2-arviel-title h17t"><h3><?php echo e($category->name); ?></h3></div>
                            <div class="clear"></div>
                            <div class="row">
                                <div class="h2-products nrb-next-prev">
                                    <?php $__currentLoopData = $category->products()->inRandomOrder()->take(3)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="t-all-product-info">
                                            
                                            <div class="t-product-img">
                                                <a href="<?php echo e(route('product.single', $product->slug)); ?>">
                                                    <img src="<?php echo e(URL::to($product->thumb1)); ?>" alt="" />

                                                </a>
                                            </div>
                                            <div class="tab-p-info">
                                                <a href="<?php echo e(route('product.single', $product->slug)); ?>"><?php echo e($product->title); ?> </a>
                                                <h3>₦<?php echo e(number_format($product->price)); ?> <?php echo e($product->unit ? '/' . $product->unit : ''); ?></h3>
                                                <div class="star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                                <div class="al-btns">
                                                    <a href="<?php echo e(route('cart.add', ['id' => $product->id])); ?>"> <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button></a>
                                                    <ul class="add-to-links">
                                                        <li><a href="<?php echo e(route('product.single', $product->slug)); ?>" class="link-wishlist" title="Wishlist"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>

            <!-- footer product area  -->
            
        </div>
    </div>
    <!-- slider area End -->



    <!--home blog area start -->
    <div class="h8-blog-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="new-title-wrap">
                        <div class="h2-arviel-title h17b"><h3>From Our Blog </h3></div>
                    </div>
                </div>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6  col-md-6 col-lg-6">
                    <div class="singl-h-blog">

                        <div class="h-b-img">
                            <a href="<?php echo e(route('blog.details', $post->slug)); ?>"><img src="<?php echo e(URL::to($post->thumb)); ?>" alt="" /></a>
                        </div>
                        <div class="h-blog-info">
                            <h2><a href="<?php echo e(route('blog.details', $post->slug)); ?>"><?php echo e($post->title); ?></a></h2>
                            <?php echo str_limit($post->description, 120); ?>

                            <a href="<?php echo e(route('blog.details', $post->slug)); ?>"><span><i class="fa fa-angle-double-right"></i></span>Read more</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
    <!--home blog area end -->

<?php $__env->stopSection(); ?>









<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>