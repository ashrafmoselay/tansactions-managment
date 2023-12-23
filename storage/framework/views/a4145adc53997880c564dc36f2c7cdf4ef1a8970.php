<?php $__env->startSection('content'); ?>
    <?php $check_permission = canUser(getModel()."-create"); ?>
    <div class="content-detached <?php echo e($check_permission ? 'content-right' : ''); ?>">
        <div class="content-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <form id="myForm" action="" method="get">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group ">
                                            <input placeholder="الفترة من" autocomplete="off" style="direction: rtl;"
                                                id="fromdate" name="fromdate" value="<?php echo e(request()->fromdate); ?>"
                                                type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input placeholder="الفترة إلى" autocomplete="off" style="direction: rtl;"
                                                id="todate" name="todate" value="<?php echo e(request()->todate); ?>" type="date"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <?php
                                            $statusList = ['pending', 'completed', 'in-progress'];
                                        ?>
                                        <select id="statuses" class="form-control" name="status">
                                            <option value="">--- إخنر الحالة ---</option>
                                            <?php $__currentLoopData = $statusList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(request('status') == $status ? 'selected' : ''); ?>

                                                    value="<?php echo e($status); ?>">
                                                    <?php echo e($status); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-primary ">بحث</button>
                                        <button onclick="setAllEmpty()" type="button" class="btn btn-warning "><i
                                                class="fa fa-undo"></i></button>
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
        </div>
    </div>

    
    <?php if($check_permission): ?>
        <?php echo $__env->make('backend.includes.cards.sidebare', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
<?php $__env->stopSection(); ?>



<?php if (! $__env->hasRenderedOnce('90a84165-e5ae-410b-a6eb-598f13d08e62')): $__env->markAsRenderedOnce('90a84165-e5ae-410b-a6eb-598f13d08e62'); ?>
    <?php $__env->startPush('script'); ?>
        
        <script>
            function setAllEmpty() {
                var inputs = document.getElementsByTagName("input");
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].value = "";
                }
                $("#statuses").val("").trigger("change");
            }
        </script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/backend/tasks/index.blade.php ENDPATH**/ ?>