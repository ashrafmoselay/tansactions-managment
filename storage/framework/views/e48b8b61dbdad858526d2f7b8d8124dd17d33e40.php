<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-shadow navbar-border">
    <div class="navbar-wrapper">
        <div class="navbar-header border-bottom-1 border-bottom-white">
            <ul class="nav navbar-nav flex-row navbar-logo">
                <li class="nav-item mobile-menu d-md-none mr-auto">
                    <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                        <i class="ft-menu font-large-1"></i>
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a class="navbar-brand" href="<?php echo e(routeHelper('/')); ?>">
                        <img class="brand-logo" alt="<?php echo e(setting('site_name', config('app.name'))); ?>" src="<?php echo e(asset(setting('logo', 'samples/logo/ivas.png'))); ?>">
                        <h3 class="brand-text white"><?php echo e(setting('site_name', config('app.name'))); ?></h3>
                    </a>
                </li>

                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                        <i class="la la-ellipsis-v"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs is-active" style="line-height: 1.5" data-toggle="tooltip" title="<?php echo app('translator')->get('title.toggle-menu'); ?>" href="#">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                    </li>

                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-menu-main page-reload hidden-xs" data-toggle="tooltip" title="<?php echo app('translator')->get('title.reload-page'); ?>" href="#">
                            <i class="fa fa-rotate-right"></i>
                        </a>
                    </li>

                    
                    <li class="dropdown dropdown-language nav-item">
                        <a class="dropdown-toggle nav-link" id="dropdown-flag" href="javascript:void(0)" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" title="<?php echo app('translator')->get('title.change-language'); ?>">
                            <i class="<?php echo e($active_languages[ LaravelLocalization::getCurrentLocale() ]['icon']); ?>"></i>
                            <span class="selected-language"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <?php $__currentLoopData = $active_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $short_name => $active_language_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="dropdown-item" rel="alternate" hreflang="<?php echo e($short_name); ?>"
                                href="<?php echo e(App::getLocale() !== $short_name ? LaravelLocalization::getLocalizedURL($short_name, null, [], true) : 'javascript:void(0)'); ?>">
                                <i class="<?php echo e($active_language_data['icon']); ?>"></i>
                                <?php echo e($active_language_data['native']); ?>

                            </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </li>
                    
                </ul>

                <ul class="nav navbar-nav float-right user-menu">
                    

                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="mr-1"><?php echo app('translator')->get('menu.hello'); ?>,
                                <span class="user-name text-bold-700"><?php echo e(auth()->user()->name); ?></span>
                            </span>
                            <span class="avatar avatar-online">
                                <img src="<?php echo e(asset(auth()->user()->image ?? "app-assets/backend/images/portfolio/portfolio-1.jpg")); ?>" alt="avatar" style="max-height: 36px"><i></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="<?php echo e(routeHelper("profile.index")); ?>" class="dropdown-item btn-outline-info"><i class="ft-info"></i> <?php echo app('translator')->get('menu.profile'); ?></a>

                            <div class="dropdown-divider"></div>

                            <a href="<?php echo e(route("lock")); ?>" id="lock-screan" class="dropdown-item btn-outline-primary"><i class="ft-lock"></i> <?php echo app('translator')->get('buttons.lock'); ?></a>

                            <div class="dropdown-divider"></div>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="dropdown-item btn-outline-red cursor-pointer">
                                    <i class="ft-power"></i> <?php echo app('translator')->get('menu.logout'); ?>
                                </button>
                            </form>
                        </div>
                    </li>
                    

                    
                        <?php echo $__env->make('layouts.includes.backend.sections.emails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                </ul>
            </div>
        </div>
    </div>
</nav>

<?php /**PATH /var/www/html/elansari/resources/views/layouts/includes/backend/navbar.blade.php ENDPATH**/ ?>