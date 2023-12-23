<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title><?php echo $__env->yieldContent('page_title'); ?></title>
    <link rel="apple-touch-icon" href="<?php echo e(asset(setting('favicon', 'samples/images/favicon.png'))); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset(setting('favicon', 'samples/images/favicon.png'))); ?>">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css/fontawesome-all.min.css')); ?>">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css/vendors.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('vendors/css/forms/icheck/icheck.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('vendors/css/forms/icheck/custom.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css/core/colors/palette-tooltip.css')); ?>">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('build/css/app/app.css')); ?>">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css/core/menu/menu-types/vertical-menu.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css/core/colors/palette-gradient.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css/pages/login-register.css')); ?>">
    <!-- END Page Level CSS-->

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('customs/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('customs/css/loading.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('customs/css/preview-file.css')); ?>">
    
</head>
<body class="vertical-layout blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content login-page">
        <div class="content-wrapper h-100">
            <div class="content-body h-100">
                <section class="container h-100">
                    <div class="col-12 h-100 d-flex align-items-center justify-content-center">
                        <div class="col-md-8 col-10 box-shadow-2 p-0">
                            <div class="card  border-grey border-lighten-3 m-0" id="login-card">
                                <div class="card-header border-0 pb-0">
                                    <div class="card-title text-center">

                                            <?php if(auth()->guard()->check()): ?>
                                            <img alt="<?php echo e(auth()->user()->name); ?>" src="<?php echo e(auth()->user()->image); ?>" class="rounded-circle img-fluid center-block" style="width: 100px; height: 100px;">
                                            <h5 class="card-title mt-1"><?php echo e(auth()->user()->name); ?></h5>
                                            <?php else: ?>
                                            <img class="login-logo" alt="<?php echo app('translator')->get('menu.logo'); ?>" src="<?php echo e(asset(setting('logo', 'samples/logo/ivas.png'))); ?>" style="max-width: 100px;">
                                            <?php endif; ?>

                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-medium-2 p-0">
                                        <span><?php echo $__env->yieldContent('title'); ?></span>
                                    </h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <?php echo $__env->make('layouts.includes.backend.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->yieldContent('content'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- BEGIN VENDOR JS-->
    <script type="text/javascript" src="<?php echo e(assetHelper('vendors/js/vendors.min.js')); ?>"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script type="text/javascript" src="<?php echo e(assetHelper('vendors/js/forms/icheck/icheck.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(assetHelper('vendors/js/forms/validation/jqBootstrapValidation.js')); ?>"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script type="text/javascript" src="<?php echo e(assetHelper('js/core/app-menu.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(assetHelper('js/core/app.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(assetHelper('js/scripts/fontawesome-all.min.js')); ?>"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script type="text/javascript" src="<?php echo e(assetHelper('js/scripts/forms/form-login-register.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(assetHelper('js/scripts/tooltip/tooltip.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(assetHelper('customs/js/show-password.js')); ?>"></script>
    <!-- END PAGE LEVEL JS-->

    <script>
        $(function() {
            $('form').submit(function (e) { $(this).closest('.card').addClass('load'); });
        });
    </script>

    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH /var/www/html/elansari/resources/views/layouts/auth.blade.php ENDPATH**/ ?>