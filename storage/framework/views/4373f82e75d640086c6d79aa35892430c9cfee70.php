<div class="mb-2 d-flex justify-content-between">
    <?php if(canUser('users-edit')): ?>
        <a href="<?php echo e(routeHelper('users.edit', $row)); ?>" class="btn btn-sm btn-primary <?php echo e($use_button_ajax ? 'show-modal-form' : ''); ?>"> <i class="fa fa-edit"></i> <?php echo app('translator')->get('buttons.edit'); ?> </a>
    <?php endif; ?>
</div>

<div class="d-flex">
    <img src="<?php echo e(asset($row->image ?? "app-assets/backend/images/portfolio/portfolio-1.jpg")); ?>" class="img-thumbnail preview-modal-image">
    
    <div class="table-responsive w-100 ml-2">
        <table class="table table-bordered mb-0">
            <thead>
                <tr>
                    <th><?php echo app('translator')->get('inputs.code'); ?></th>
                    <th><?php echo e($row->code); ?></th>
                </tr>
                <tr>
                    <th><?php echo app('translator')->get('inputs.name'); ?></th>
                    <th><?php echo e($row->name); ?></th>
                </tr>
                <tr>
                    <th><?php echo app('translator')->get('inputs.balance'); ?></th>
                    <th><?php echo e($row->balance); ?></th>
                </tr>
                <tr>
                    <th><?php echo app('translator')->get('inputs.email'); ?></th>
                    <th><?php echo e($row->email); ?></th>
                </tr>
                <tr>
                    <th><?php echo app('translator')->get('menu.department'); ?></th>
                    <th>
                        <?php if($row->department_id): ?>
                            <a href="<?php echo e(routeHelper('departments.edit', $row->department_id)); ?>" data-toggle="tooltip" data-original-title="Edit Department Details">
                                <?php echo e($row->department->title); ?>

                            </a>
                        <?php endif; ?>
                    </th>
                </tr>
                <tr>
                    <th><?php echo app('translator')->get('menu.roles'); ?></th>
                    <th>
                        <?php $__empty_1 = true; $__currentLoopData = $row->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php echo e($role->name); ?> <?php echo e($loop->last ? '' : ' | '); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            No Roles
                        <?php endif; ?>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/users/show.blade.php ENDPATH**/ ?>