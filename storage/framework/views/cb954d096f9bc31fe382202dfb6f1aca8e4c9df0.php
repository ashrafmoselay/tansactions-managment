<?php $__env->startSection('content'); ?>
<div class="card">
    
    <?php echo $__env->make('backend.includes.cards.table-header', ['title' => trans('title.show-row-details', ['model' => trans('menu.'.getModel(true))])], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <div class="card-content collpase show">
        <div class="card-body">
            <?php echo $__env->make('backend.'.getModel(view:true).'.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(function() {
            $(`li[data-route="<?php echo e(getRoutePrefex('.').getModel().'.index'); ?>"]`).addClass('active').closest('.has-sub').addClass('active open');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/includes/pages/show-page.blade.php ENDPATH**/ ?>