<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <form id="myForm" action="" method="get">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <input placeholder="الفترة من" autocomplete="off" style="direction: rtl;" id="fromdate" name="fromdate" value="<?php echo e(request()->fromdate); ?>" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input placeholder="الفترة إلى" autocomplete="off" style="direction: rtl;" id="todate" name="todate" value="<?php echo e(request()->todate); ?>" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select id="statuses" class="form-control" name="lookup_id" data-placeholder="--- <?php echo app('translator')->get('inputs.select-data', ['data' => trans('menu.the statuse')]); ?> ---" >
                                    <option value="">All</option>
                                    <?php $__currentLoopData = $lookups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>" <?php if(request('lookup_id') == $id): echo 'selected'; endif; ?>><?php echo e($name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            
                            <div class="col-md-3">
                                <button  type="submit" class="btn btn-primary ">بحث</button>
                                <button onclick="setAllEmpty()" type="button" class="btn btn-warning "><i class="fa fa-undo"></i></button>
                            </div>
                        </div>
                    </form>
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
<?php if (! $__env->hasRenderedOnce('d14859c6-8df7-4f16-b788-dde964db0ed6')): $__env->markAsRenderedOnce('d14859c6-8df7-4f16-b788-dde964db0ed6'); ?>
<?php $__env->startPush('script'); ?>
    
    <script>
        function setAllEmpty() {
            var inputs = document.getElementsByTagName("input");
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].value = "";
            }
            $("#type").val("").trigger( "change");
            $("#statuses").val("").trigger( "change");
        }
    </script>
<?php $__env->stopPush(); ?>
<?php endif; ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/backend/expenses/index.blade.php ENDPATH**/ ?>