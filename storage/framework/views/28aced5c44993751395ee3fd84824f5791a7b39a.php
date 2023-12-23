<?php $__env->startSection('back'); ?>
    <?php echo $__env->make('backend.includes.cards.form-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-body">
    <div class="card">
        <?php if(isset($row)): ?>
        <?php echo $__env->make('backend.includes.forms.form-update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php else: ?>
        <?php echo $__env->make('backend.includes.forms.form-create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(function() {
            if ($(`li[data-route="<?php echo e(getRoutePrefex('.').getModel().'.create'); ?>"]`).length)
                $(`li[data-route="<?php echo e(getRoutePrefex('.').getModel().'.create'); ?>"]`).addClass('active').closest('.has-sub').addClass('active open');
            else
                $(`li[data-route="<?php echo e(getRoutePrefex('.').getModel().'.index'); ?>"]`).addClass('active').closest('.has-sub').addClass('active open');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/includes/pages/form-page.blade.php ENDPATH**/ ?>