
<?php if(!$menu->route || canUser( str_replace('.', '-', $menu->route) )): ?>
<li class="nav-item <?php echo e($menu->visibleSubs->Count() ? "has-sub" : ""); ?> <?php echo e(activeMenu($menu->route)); ?>" data-route="<?php echo e(getRoutePrefex('.').$menu->route); ?>">
    <a href="<?php echo e($menu->route && Route::has(getRoutePrefex('.').$menu->route) ? routeHelper($menu->route) : "#"); ?>" style="color: <?php echo e($menu->color); ?> !important">
        <i class="<?php echo e($menu->icon); ?>"></i> <span class="menu-title"><?php echo e($menu->name); ?></span>
    </a>

    <?php if($menu->visibleSubs->Count()): ?>
    <ul class="menu-content">
        <?php $__currentLoopData = $menu->visibleSubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('layouts.includes.backend.sections.list-menu', ['menu' => $sub], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php endif; ?>
</li>
<?php endif; ?>

<?php /**PATH /var/www/html/elansari/resources/views/layouts/includes/backend/sections/list-menu.blade.php ENDPATH**/ ?>