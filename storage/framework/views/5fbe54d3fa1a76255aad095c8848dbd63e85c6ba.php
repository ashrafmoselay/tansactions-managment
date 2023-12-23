<li class="list-group-item cursor-move mb-1" data-id="<?php echo e($menu->id); ?>">
    <span style="color: <?php echo e($menu->color); ?> !important">
        <span class="order"><?php echo e($menu->order); ?></span> -
        <i class="<?php echo e($menu->icon); ?>"></i> <?php echo e($menu->getName()); ?>

    </span>

    <?php echo $__env->make('backend.menus.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <ul class="mt-1 nested-sortable" style="margin-right: 40px; min-height: 20px" data-parent-id="<?php echo e($menu->id); ?>">
        <?php if($menu->subs->count()): ?>
            <?php $__currentLoopData = $menu->subs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('backend.menus.list-menus', ['menu' => $sub], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </ul>
</li>
<?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/menus/list-menus.blade.php ENDPATH**/ ?>