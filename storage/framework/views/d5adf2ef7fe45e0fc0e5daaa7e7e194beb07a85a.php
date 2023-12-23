<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow menu-bordered">
    <div class="main-menu-content ps-container ps-theme-dark ps-active-y">
        <form style="border-radius: 3px; border: 1px solid #b0bec5; margin: 10px 10px;" action="<?php echo e(routeHelper('orders.index')); ?>" method="get" class="sidebar-form">
            <div class="input-group">
                <input autocomplete="off" type="text" name="q" class="form-control" placeholder="البحث اسم العميل - رقم الجواز">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <ul class="navigation navigation-main mb-5 pb-5" id="main-menu-navigation">

            <?php $__currentLoopData = $list_menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('layouts.includes.backend.sections.list-menu', ['menu' => $row], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
    </div>
</div>
<?php /**PATH /var/www/html/elansari/resources/views/layouts/includes/backend/sidebar.blade.php ENDPATH**/ ?>