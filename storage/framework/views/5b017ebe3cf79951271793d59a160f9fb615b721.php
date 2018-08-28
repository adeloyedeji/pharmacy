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
        <div class="card card-inverse card-flat table-responsive col-md-6 text-center">

            <h2 class="">Product Details</h2><br /><br />
            <table class="table-bordered">
                <tr>
                    <td>Product Name: </td>                  
                    <td><?php echo e($product->title); ?></td>            
                </tr>
                    <td>Price: </td>                  
                    <td><?php echo e($product->price); ?></td>            
                </tr>
                 </tr>
                    <td>Overview: </td>                  
                    <td><?php echo e($product->overview); ?></td>            
                </tr>

                 </tr>
                    <td>Description: </td>                  
                    <td><?php echo e(strip_tags($product->description)); ?></td>            
                </tr>

                 </tr>
                    <td>Availability: </td>                  
                    <td><?php echo e($product->availability); ?></td>            
                </tr>
            </table>
            <div class="col-md-2"><br /><br />
                <a href="/cms/product" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-arrow-right"></span>Back</a>
            </div>

            <br /><br />

        </div>
        <!-- /Individual column searching (text fields) -->


    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts'); ?>
    <script src="<?php echo e(URL::to('cms_assets/lib/js/plugins/tables/datatables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('cms_assets/lib/js/pages/tables/datatable_advanced.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>