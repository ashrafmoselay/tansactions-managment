<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('vendors/css/forms/selects/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    
    <?php echo $__env->make('backend.includes.cards.table-header', ['title' => trans('menu.profile')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <div class="card-content collpase show">
        <div class="content-body">
            <div class="card p-2">
                <?php echo $__env->make('backend.profile.form', ['form_type' => 'info', 'bg' => 'bg-gradient-directional-teal'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('backend.profile.form', ['form_type' => 'avatar', 'bg' => 'bg-gradient-directional-cyan'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('backend.profile.form', ['form_type' => 'password', 'bg' => 'bg-gradient-directional-grey-blue'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasAnyRole', SUPERADMIN_ROLES)): ?>
                    <?php echo $__env->make('backend.profile.form', ['form_type' => 'roles', 'bg' => 'bg-gradient-directional-blue-grey'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo $__env->make('backend.profile.form', ['form_type' => 'permissions', 'bg' => 'bg-gradient-directional-blue-grey'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(assetHelper('customs/js/show-password.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(assetHelper('js/scripts/forms/select/form-select2.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/backend/profile/index.blade.php ENDPATH**/ ?>