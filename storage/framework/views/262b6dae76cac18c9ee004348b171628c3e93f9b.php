<?php $__env->startSection('title'); ?>
    <?php echo e($sub_category->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- shop page start  -->
    <div class="shop-product-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="shop-top-bar">
                        <div class="shop-left-short-area sorter">
                            <h3><?php echo e(strtoupper($category->name) . " / " . strtoupper($sub_category->name)); ?></h3>
                            <br>
                        </div>

                    </div>
                    <div class="clear"></div>
                    <div class="shop-products">
                        <div class="row">
                            <div class="tab-single-product">
                                <?php $__empty_1 = true; $__currentLoopData = $products->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products_chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <?php $__currentLoopData = $products_chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-6 col-md-3 col-lg-3">
                                    <div class="t-all-product-info">
                                        <div class="p-sign">    <?php echo e($category->name); ?>

                                        </div>
                                        <div class="t-product-img">
                                            <a href="<?php echo e(route('product.single', $product->slug)); ?>">
                                                <img alt="" src="<?php echo e(URL::to($product->thumb1)); ?>">
                                            </a>
                                        </div>
                                        <div class="tab-p-info">
                                            <a href="<?php echo e(route('product.single', $product->slug)); ?>"><?php echo e($product->title); ?> </a>
                                            <h3>₦<?php echo e(number_format($product->price)); ?> <?php echo e($product->unit ? '/' . $product->unit : ''); ?></h3>

                                            <div class="al-btns">
                                                <a href="<?php echo e(route('cart.add', ['id' => $product->id])); ?>"> <button class="button btn-cart" title="Add to Cart" type="button"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button></a>
                                                <ul class="add-to-links">
                                                    <li><a title="Wishlist" class="link-wishlist" href="<?php echo e(route('product.single', $product->slug)); ?>"><i class="fa fa-eye"></i></a></li>
                                                    <li><a title="Wishlist" class="link-wishlist" href="#"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a title="Wishlist" class="link-wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="clear"></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <h3 class="text-center">
                                        No products in this category yet! Please check back later.
                                    </h3>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop page end  -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>