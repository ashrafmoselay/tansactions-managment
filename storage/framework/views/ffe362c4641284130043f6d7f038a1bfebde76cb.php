<span class="dropdown">
    <button id="table-optins" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
        class="btn semi-blue dropdown-toggle dropdown-menu-right"> <i class="fa-solid fa-screwdriver-wrench"></i> </button>
    <span aria-labelledby="table-optins" class="dropdown-menu mt-1 dropdown-menu-left" x-placement="bottom-end">

        <?php if(canUser(getModel()."-edit") && Route::has(getRoutePrefex('.').getModel().'.edit')): ?>
            <a href="<?php echo e(routeHelper(getModel().'.edit', $id)); ?>" data-toggle="tooltip" title="<?php echo app('translator')->get('buttons.edit'); ?>"
                class="btn semi-blue-link <?php echo e($use_button_ajax ? 'show-modal-form' : ''); ?> dropdown-item">
                <i class="fas fa-edit"></i> <?php echo app('translator')->get('buttons.edit'); ?>
            </a>
        <?php endif; ?>

        <?php if(canUser(getModel()."-destroy") && Route::has(getRoutePrefex('.').getModel().'.destroy')): ?>
            <form action="<?php echo e(routeHelper(getModel().'.destroy', $id)); ?>" method="POST" class="form-destroy">
                <?php echo e(csrf_field()); ?>

                <?php echo method_field('delete'); ?>
                <button type="submit" class="btn btn-outline-danger dropdown-item delete" data-toggle="tooltip" title="<?php echo app('translator')->get('buttons.delete'); ?>">
                    <i class="fas fa-trash"></i> <?php echo app('translator')->get('buttons.delete'); ?>
                </button>
            </form>
        <?php endif; ?>

        <?php echo $__env->yieldContent('table-buttons'); ?>
    </span>
</span>
<?php /**PATH /var/www/html/elansari/resources/views/backend/includes/buttons/table-buttons.blade.php ENDPATH**/ ?>