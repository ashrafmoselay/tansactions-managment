<?php $__env->startSection('content'); ?>
    <?php $check_permission = canUser(getModel()."-create"); ?>
    <div class="content-detached <?php echo e($check_permission ? "content-right" : ""); ?>">
        <div class="content-body">
            <div class="card">
                
                <?php echo $__env->make('backend.includes.cards.table-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                

                <div class="card-content collpase show">

                    <div id="search-form-body"></div>

                    <div class="card-body" id="load-data"></div>
                </div>
            </div>
        </div>
    </div>

    
    <?php if($check_permission): ?>
        <?php echo $__env->make('backend.includes.cards.sidebare', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/backend/includes/pages/crud-index-page.blade.php ENDPATH**/ ?>