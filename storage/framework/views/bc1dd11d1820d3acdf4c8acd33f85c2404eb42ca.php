<?php if($row->status == 'قبول'): ?> 
<div class="alert alert-danger" role="alert">
    <h4 style=" color: #0f0e0e; font-weight: bold; ">لا يمكن تغيير حالة هذا التحويل لانه تم قبوله </h4>
  </div>
<?php else: ?>
<form action="<?php echo e(routeHelper('transfers.updateStatus', $row->id)); ?>" method="post">
    <div class="card">
        <div class="card-header bg-main">
            <h3 class="card-title white">تعديل حالة التحويل</h3>
        </div>
        <div class="card-content">
            <div class="card-body">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="form-group">
                            <label><?php echo app('translator')->get('inputs.select-data', ['data' => trans('menu.the status')]); ?></label>
                            <?php
                                $typeList = ['إنتظار', 'قبول', 'رفض'];
                            ?>
                            <select name="status" class="form-control">
                                <?php $__currentLoopData = $typeList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e(isset($row) && $row->status == $type ? 'selected' : ''); ?>

                                        value="<?php echo e($type); ?>">
                                        <?php echo e($type); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-md-12">
                        
                        <div class="form-group mb-5">
                            <label class=''><?php echo app('translator')->get('inputs.status_note'); ?></label>
                            <textarea class="form-control" rows="5" name="status_note" placeholder="<?php echo app('translator')->get('inputs.status_note'); ?>"><?php echo e($row->status_note ?? old('status_note')); ?></textarea>
                            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'status_note'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399)): ?>
<?php $component = $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399; ?>
<?php unset($__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399); ?>
<?php endif; ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" data-toggle="tooltip" title=""
                data-original-title="تقديم النموذج" aria-describedby="tooltip507624">
                <i class="fas fa-save"></i> حفظ
            </button>
        </div>
    </div>
</form>
<?php endif; ?><?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/transfers/status.blade.php ENDPATH**/ ?>