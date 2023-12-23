<div class="float-right overflow-hidden">
    <?php if(Route::has($menu->route)): ?>
        <a href="<?php echo e(routeHelper($menu->route)); ?>" class="btn btn-sm btn-outline-purple" data-toggle="tooltip" title="Show Page">
            <i class="fa fa-eye"></i>
        </a>
    <?php endif; ?>

    <?php if(canUser("menus-edit")): ?>
        <a href="<?php echo e(routeHelper('menus.edit', $menu->id)); ?>" class="btn btn-sm btn-outline-primary show-modal-form" data-toggle="tooltip" title="Edit This Menu">
            <i class="fa fa-edit"></i>
        </a>
    <?php endif; ?>

    <?php if(canUser("menus-create")): ?>
        <a href="<?php echo e(routeHelper('menus.subs.create', $menu->id)); ?>" class="btn btn-sm btn-outline-info show-modal-form" data-toggle="tooltip" title="Create Sub Menu">
            <i class="fa fa-plus"></i>
        </a>
    <?php endif; ?>

    <?php if(canUser("menus-destroy")): ?>
        <form action="<?php echo e(routeHelper('menus.destroy', $menu->id)); ?>" method="POST" class="form-destroy d-inline">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button type="submit" class="btn btn-sm btn-outline-danger delete" data-toggle="tooltip" title="Delete This Menu">
                <i class="fa fa-trash"></i>
            </button>
        </form>
    <?php endif; ?>

    <?php if((isset($menu->parent) && $menu->parent->visible) || ! $menu->parent): ?>
        <form action="<?php echo e(routeHelper('menus.toggle.visible', $menu->id)); ?>" method="POST" class="d-inline">
            <?php echo csrf_field(); ?>
            <?php if($menu->visible): ?>
                <button type="submit" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Make Menu Is Hidden">
                    <i class="fa fa-eye-slash"></i>
                </button>
            <?php else: ?>
                <button type="submit" class="btn btn-success btn-sm" data-toggle="tooltip" title="Make Menu Is Visible">
                    <i class="fa fa-eye"></i>
                </button>
            <?php endif; ?>
        </form>
    <?php else: ?>
        <button class="btn btn-danger btn-sm" data-toggle="tooltip" title="First Parent Must Be Visible">
            <i class="fa fa-hand"></i>
        </button>
    <?php endif; ?>

</div>
<?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/menus/actions.blade.php ENDPATH**/ ?>