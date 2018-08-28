<!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#1C2B36" />
    <title>Dollar Pharmacy Admin Login</title>

    <!-- Favicon -->
    <link href="<?php echo e(URL::to('cms_assets/img/favicon.ico')); ?>" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="<?php echo e(URL::to('cms_assets/img/favicon.ico')); ?>" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="<?php echo e(URL::to('cms_assets/img/favicon.ico')); ?>" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="<?php echo e(URL::to('cms_assets/img/favicon.ico')); ?>" rel="apple-touch-icon" type="image/png">
    <link href="<?php echo e(URL::to('cms_assets/img/favicon.ico')); ?>" rel="icon" type="image/png">
    <link href="<?php echo e(URL::to('cms_assets/img/favicon.ico')); ?>" rel="shortcut icon">
    <!-- /Favicon -->

    <!-- Global stylesheets -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::to('cms_assets/lib/css/bootstrap.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::to('cms_assets/lib/css/animate.min.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::to('cms_assets/lib/css/main.css')); ?>">
    <!-- /Global stylesheets -->
</head>

<body>

<div class="auth-container">
    <div class="center-block">
        <div class="auth-module">
            <div class="toggle">
                <i class="icon-user-plus"></i>
            </div>

            <!-- Login form -->
            <div class="form">
                <h1 class="text-light">Admin Login</h1>

                <form class="form-horizontal" method="POST" action="<?php echo e(route('admin.login.submit')); ?>">
                    <?php echo e(csrf_field()); ?>
                    <div class="form-group ">

                        <div class="input-group m-b-15 p-t-20 <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <div class="input-group-addon"><i class="icon-user"></i></div>
                            <input type="email" class="form-control" id="inlineFormInputGroup" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required>
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="input-group m-b-15 <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <div class="input-group-addon"><i class="icon-key"></i></div>
                            <input type="password" class="form-control" id="inlineFormInputGroup" name="password" placeholder="Password" required>
                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="styled" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember me
                            </label>
                        </div>

                        <button class="btn btn-info btn-block m-t-20">Sign In</button>
                    </div>
                </form>
            </div>
            <!-- /Login form -->


            <div class="forgot">
                <a href="#">Forgot your password?</a>
            </div>
        </div>
        <div class="footer">
            <div class="float-left">
                ©  <?php echo e(Date('Y')); ?> Dollar Pharmacy&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp; by <a href="http://www.istrategytech.com" target="_blank">Infostrategy Technology</a>.				</div>
            <div class="float-right">
                <div class="label label-info">Version: 1.0.0</div>
            </div>
        </div>
    </div>
</div>



</body>

</html>
