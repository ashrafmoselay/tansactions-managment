<form action="<?php echo e(routeHelper('order.updateStatus', $row->id)); ?>" method="post">
    <div class="card">
        <div class="card-header bg-main">
            <h3 class="card-title white">تعديل حالة الطلب</h3>
        </div>
        <div class="card-content">
            <div class="card-body">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-4">
                        
                        <div class="form-group">
                            <label><?php echo app('translator')->get('inputs.select-data', ['data' => trans('menu.the status')]); ?></label>
                            <select class="select2 form-control" id="statuses" name="status_id"
                                data-placeholder="--- <?php echo app('translator')->get('inputs.select-data', ['data' => trans('menu.the status')]); ?> ---" required>
                                <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>" <?php if(isset($row) && $row->status_id == $id): echo 'selected'; endif; ?>><?php echo e($name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'status_id'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <div class="col-md-4">
                        
                        <div class="form-group">
                            <label class="required"><?php echo app('translator')->get('inputs.visa_number'); ?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-pencil"></i> </span>
                                </div>
                                <input type="text" class="form-control" name="visa_number" required
                                    value="<?php echo e($row->visa_number ?? old('visa_number')); ?>"
                                    placeholder="<?php echo app('translator')->get('inputs.visa_number'); ?>">
                            </div>
                            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'visa_number'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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


                    <div class="col-md-4">
                        
                        <div class="form-group">
                            <label class=""><?php echo app('translator')->get('inputs.alert_date'); ?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                                </div>
                                <input type="date" class="form-control" name="alert_date"
                                    value="<?php echo e($row->alert_date ?? old('alert_date')); ?>" placeholder="<?php echo app('translator')->get('inputs.alert_date'); ?>">
                            </div>
                            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'alert_date'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/backend/orders/status.blade.php ENDPATH**/ ?>