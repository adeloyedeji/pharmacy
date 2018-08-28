<?php $__env->startSection('content'); ?>


    <!--Page Header-->
    <div class="header">
        <div class="header-content">
            <div class="page-title">
                <i class="icon-table2 position-left"></i> Manage Products
            </div>
            <ul class="breadcrumb">
                <li><a href="index.html"></a></li>
                <li>Products</li>
                <li class="active">All Products</li>
            </ul>
        </div>
    </div>
    <!--/Page Header-->

    <div class="container-fluid page-content">

        <!-- Individual column searching (text fields) -->
        <div class="card card-inverse card-flat table-responsive">

            <table class="table datatable datatable-column-search-inputs">

                <col width="10">
                <col width="300">
                <thead>
                <tr>
                    <th class="no-m">#</th>
                    <th colspan="">Title</th>
                    <th>Pulished date</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(++$key); ?></td>
                    <td><?php echo e($product->title); ?></td>

                    <td>
                        <?php echo e($product->created_at->toDayDateTimeString()); ?>

                    </td>
                    <td>
                        <?php if($product->availability): ?>
                        <span class="badge badge-success">In Stock</span>
                        <?php else: ?>
                            <span class="badge badge-danger">Out of Stock</span>
                        <?php endif; ?>
                    </td>
                    <td class="text-center">
                        <ul class="icons-list">
                            <li><a href="/cms/product/<?php echo e($product->id); ?>" data-toggle="" data-target=""><i class="icon-eye2"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    
                                    <a href="<?php echo e(route('product.edit', $product->id)); ?>" class="dropdown-item"><i class="icon-pencil6"></i> Edit</a>
                                    <a href="<?php echo e(route('product.delete', $product->id)); ?>" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
                <tfoot>
                <tr>
                    <td>#</td>
                    <td>Period</td>
                    <td>Issue date</td>
                    <td>Due Date</td>
                    <td></td>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /Individual column searching (text fields) -->


    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts'); ?>
    <script src="<?php echo e(URL::to('cms_assets/lib/js/plugins/tables/datatables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('cms_assets/lib/js/pages/tables/datatable_advanced.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>