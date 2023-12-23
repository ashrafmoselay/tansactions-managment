<!DOCTYPE html>
<html class="loading" lang="<?php echo e(App::getLocale()); ?>"
    data-textdirection="<?php echo e(LaravelLocalization::getCurrentLocaleDirection()); ?>"
    dir="<?php echo e(LaravelLocalization::getCurrentLocaleDirection()); ?>">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="سيستم إدارة مكاتب وشركات السياحه الخاصة بالعماله والزيارات">
    <meta name="keywords"
        content="سهل للحسابات ,customers , orders,fees,expenses">
    <meta name="author" content="Ashraf Hassan">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo app('translator')->get('menu.dashboard'); ?> <?php echo e(getModel() == 'dashboard' ? '' : ' | ' . trans('menu.'.getModel())); ?></title>

    
    <link rel="apple-touch-icon" href="<?php echo e(asset(setting('favicon', 'samples/images/favicon.png'))); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset(setting('favicon', 'samples/images/favicon.png'))); ?>">
    

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('fonts/line-awesome/css/line-awesome.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('build/css/main.css')); ?>">
    

    
    <?php if(App::isLocale('ar')): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css-rtl/vendors.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('build/css/main-rtl.css')); ?>">
    <?php else: ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('css/vendors.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('build/css/main-ltr.css')); ?>">
        <?php echo e(config()->set('sweetalert.toast_position', 'top-end')); ?>

    <?php endif; ?>
    

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('build/css/custom.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('build/css/app/app.css')); ?>">
    <?php if(App::isLocale('ar')): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('build/css/app/app-rtl.css')); ?>">
    <?php else: ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('build/css/app/app-ltr.css')); ?>">
    <?php endif; ?>
    

    <?php echo $__env->yieldContent('style'); ?>
    <?php echo $__env->yieldPushContent('style'); ?>

</head>


<body id="loader-progress" class="vertical-layout vertical-menu content-left-sidebar email-application fixed-navbar menu-expanded pace-done" data-open="click" data-menu="vertical-menu" data-col="content-left-sidebar">

    
<div id="body-loading"> <span> ... Loading ...</span> </div>


    





<?php /**PATH /var/www/html/transactions-mangament/resources/views/layouts/includes/backend/header.blade.php ENDPATH**/ ?>