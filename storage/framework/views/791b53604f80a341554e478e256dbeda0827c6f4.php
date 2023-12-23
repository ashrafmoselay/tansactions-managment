<!DOCTYPE html>
<html class="loading" lang="<?php echo e(App::getLocale()); ?>"
    data-textdirection="<?php echo e(LaravelLocalization::getCurrentLocaleDirection()); ?>"
    dir="<?php echo e(LaravelLocalization::getCurrentLocaleDirection()); ?>">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description"
            content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
        <meta name="keywords"
            content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
        <meta name="author" content="PIXINVENT">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo $__env->yieldContent('page-title'); ?></title>

        
        <link rel="apple-touch-icon" href="<?php echo e(asset(setting('logo', '/'))); ?>">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset(setting('logo', '/'))); ?>">
        

        
        <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('fonts/line-awesome/css/line-awesome.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css/fontawesome-all.min.css')); ?>">
        

        
        <?php if(App::isLocale('ar')): ?>
            <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css-rtl/vendors.css')); ?>">
            <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css-rtl/app.css')); ?>">
            <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css-rtl/custom-rtl.css')); ?>">
            <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css-rtl/core/menu/menu-types/vertical-menu.css')); ?>">
            <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css-rtl/core/colors/palette-gradient.css')); ?>">
        <?php else: ?>
            <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css/vendors.css')); ?>">
            <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css/app.css')); ?>">
            <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css/core/menu/menu-types/vertical-menu.css')); ?>">
            <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css/core/colors/palette-gradient.css')); ?>">
        <?php endif; ?>
        

        <?php echo $__env->yieldContent('style'); ?>
        <?php echo $__env->yieldPushContent('style'); ?>
    </head>

    <body class="vertical-layout vertical-menu 1-column <?php echo $__env->yieldContent('body-class'); ?> menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column"
            style="background-image: <?php echo $__env->yieldContent('bg', 'none'); ?>">
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <section class="flexbox-container">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="col-md-4 col-10 box-shadow-2 p-0">
                                <div class="card border-grey border-lighten-3 px-1 py-1 box-shadow-3 m-0">
                                    
                                    <?php echo $__env->yieldContent('content'); ?>
                                    
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php if (isset($component)) { $__componentOriginal4aba3cbb39d4a7d1f3abcd50003653760261e963 = $component; } ?>
<?php $component = App\View\Components\Announcement::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('announcement'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Announcement::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4aba3cbb39d4a7d1f3abcd50003653760261e963)): ?>
<?php $component = $__componentOriginal4aba3cbb39d4a7d1f3abcd50003653760261e963; ?>
<?php unset($__componentOriginal4aba3cbb39d4a7d1f3abcd50003653760261e963); ?>
<?php endif; ?>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="<?php echo e(assetHelper('vendors/js/vendors.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(assetHelper('vendors/js/coming-soon/jquery.countdown.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(assetHelper('js/core/app-menu.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(assetHelper('js/core/app.js')); ?>"></script>

        <?php echo $__env->yieldContent('script'); ?>
        <?php echo $__env->yieldPushContent('script'); ?>
    </body>

</html>
<?php /**PATH /var/www/html/transactions-mangament/resources/views/layouts/flat-page.blade.php ENDPATH**/ ?>