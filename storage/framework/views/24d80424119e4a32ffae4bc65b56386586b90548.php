<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <form id="myForm" action="" method="get">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select style="height: 52px;" class="form-control" name="from_user_id">
                                        <option value="">"--- <?php echo app('translator')->get('inputs.select-data', ['data' => trans('menu.from_users')]); ?> ---"</option>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($id); ?>" <?php if(request()->from_user_id == $id): echo 'selected'; endif; ?>>
                                                <?php echo e($name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select style="height: 52px;" class="form-control" name="to_user_id">
                                        <option value="">"--- <?php echo app('translator')->get('inputs.select-data', ['data' => trans('menu.to_users')]); ?> ---"</option>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($id); ?>" <?php if(request()->to_user_id == $id): echo 'selected'; endif; ?>>
                                                <?php echo e($name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <input placeholder="الفترة من" autocomplete="off" style="direction: rtl;" id="fromdate"
                                        name="fromdate" value="<?php echo e(request()->fromdate); ?>" type="date"
                                        class="form-control">
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
                                <div class="form-group">
                                    <?php
                                        $typeList = ['إنتظار', 'قبول', 'رفض'];
                                    ?>
                                    <select style="height: 52px;" name="status" class="form-control">
                                        <option value="">--- إختر الحالة ---</option>
                                        <?php $__currentLoopData = $typeList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php echo e(request()->status == $type ? 'selected' : ''); ?>

                                                value="<?php echo e($type); ?>">
                                                <?php echo e($type); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
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
<?php $__env->stopSection(); ?>
<?php if (! $__env->hasRenderedOnce('56039043-bb02-41a5-8b56-01b9ae5520ad')): $__env->markAsRenderedOnce('56039043-bb02-41a5-8b56-01b9ae5520ad'); ?>
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

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/transfers/index.blade.php ENDPATH**/ ?>