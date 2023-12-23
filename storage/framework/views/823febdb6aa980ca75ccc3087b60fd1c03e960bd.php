<?php if (! $__env->hasRenderedOnce('86ea91e5-936f-460a-b5c7-12295f2c7def')): $__env->markAsRenderedOnce('86ea91e5-936f-460a-b5c7-12295f2c7def'); ?>
    <?php $__env->startPush('style'); ?>
        <style>
            
        </style>
    <?php $__env->stopPush(); ?>
<?php endif; ?>


<div class='row'>
    <div class="col-md-12">

        
        <div class="form-group">
            <label><?php echo app('translator')->get('inputs.select-data', ['data' => trans('menu.the customer')]); ?>
                <a style="margin-top: -8px" class="remoteModal addNew btn btn-success btn-sm"
                    href="<?php echo e(routeHelper('customers.create')); ?>?noredirect=1&isajax=1"><i
                        class="fa fa-plus"></i></a></label>
            <select data-placeholder="--- select ---" data-url="<?php echo e(routeHelper('customers.list')); ?>"
                class="select2-ajax-remote form-control" id="customer_id" name="customer_id"
                data-placeholder="--- <?php echo app('translator')->get('inputs.select-data', ['data' => trans('menu.the customer')]); ?> ---">
                <option value=""></option>
                
                <?php if(isset($row) && $row->customer_id): ?>
                    <option value="<?php echo e($row->customer_id); ?>" selected><?php echo e(optional($row->customer)->name); ?></option>
                <?php endif; ?>
            </select>
            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'customer_id'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

    <div class="col-md-12">
        
        <div class="form-group">
            <label class="required"><?php echo app('translator')->get('inputs.status'); ?></label>
            <?php
                $statusList = ['pending', 'completed', 'in-progress'];
            ?>
            <select class="form-control" name="status">
                <?php $__currentLoopData = $statusList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php echo e(isset($row) && $row->status == $status ? 'selected' : ''); ?> value="<?php echo e($status); ?>">
                        <?php echo e($status); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'status'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

    <div class="col-md-12">
        
        <div class="form-group">
            <label class="required"><?php echo app('translator')->get('inputs.name'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-pencil"></i> </span>
                </div>
                <input type="text" class="form-control" name="name" required
                    value="<?php echo e($row->name ?? old('name')); ?>" placeholder="<?php echo app('translator')->get('inputs.name'); ?>">
            </div>
            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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


    <div class="col-md-12">
        
        <div class="form-group mb-5">
            <label class=''><?php echo app('translator')->get('inputs.description'); ?></label>
            <textarea class="form-control" rows="5" name="description" placeholder="<?php echo app('translator')->get('inputs.description'); ?>"><?php echo e($row->description ?? old('description')); ?></textarea>
            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'description'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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


<?php $__env->startPush('script'); ?>
    <script>
        $('.select2-ajax-remote').select2({
            allowClear: true,
            placeholder: 'Search Customer',
            ajax: {
                url: function() {
                    return $(this).attr('data-url');
                },
                dataType: 'json',
                data: function(params) {
                    return {
                        term: params.term // search term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true,
                minimumInputLength: 1,
            }
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/html/elansari/resources/views/backend/tasks/form.blade.php ENDPATH**/ ?>