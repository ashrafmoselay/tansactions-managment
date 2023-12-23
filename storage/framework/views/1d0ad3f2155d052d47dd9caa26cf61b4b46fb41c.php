<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="<?php echo e(routeHelper('customers.index')); ?>" class="btn btn-primary ">
                                كل العملاء
                            </a>
                            <a href="<?php echo e(routeHelper('customers.index')); ?>?is_dept=1" class="btn btn-warning ">
                                العملاء المدينون
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">

        
        <?php echo $__env->make('backend.includes.cards.table-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        


        <div class="card-content collpase show">
            <div id="search-form-body"></div>

            <div class="card-body" id="load-data"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    
<?php $__env->stopPush(); ?>
<?php if (! $__env->hasRenderedOnce('b302550d-7842-49d4-b182-d78cd97cff54')): $__env->markAsRenderedOnce('b302550d-7842-49d4-b182-d78cd97cff54'); ?>
    <?php $__env->startPush('script'); ?>
        
        <script>
            function setAllEmpty() {
                var inputs = document.getElementsByTagName("input");
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].value = "";
                }
                $("#type").val("").trigger("change");
                $("#statuses").val("").trigger("change");
            }
        </script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/elansari/resources/views/backend/customers/index.blade.php ENDPATH**/ ?>