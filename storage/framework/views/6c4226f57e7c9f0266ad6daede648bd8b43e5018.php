
<?php if (! $__env->hasRenderedOnce('e8d7a637-1de0-4f88-bfaa-d1787b1cbad2')): $__env->markAsRenderedOnce('e8d7a637-1de0-4f88-bfaa-d1787b1cbad2'); ?>
    <?php $__env->startPush('style'); ?>
        <style>
            
        </style>
    <?php $__env->stopPush(); ?>
<?php endif; ?>





<div class='row'>

    <div class="col-md-6">
        
        <div class="form-group">
            <label><?php echo app('translator')->get('inputs.select-data', ['data' => trans('menu.the customer')]); ?></label>
            <select data-url="<?php echo e(route('dashboard.customers.getList')); ?>"  required class=" form-control select2Ajax" id="customers" name="customer_id" data-placeholder="--- <?php echo app('translator')->get('inputs.select-data', ['data' => trans('menu.the customer')]); ?> ---" >
                <?php if(isset($order) && !empty($order)): ?>
                    <option selected value="<?php echo e($order->customer_id); ?>"><?php echo e(optional($order->customer)->name); ?></option>
                <?php endif; ?>
                <?php if(isset($row) && !empty($row)): ?>
                    <option selected value="<?php echo e($row->customer_id); ?>"><?php echo e(optional($row->customer)->name); ?></option>
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
    
    <div class="col-md-6">
        
        <div class="form-group">
            <label><?php echo app('translator')->get('inputs.select-data', ['data' => trans('menu.the order')]); ?></label>
            <select data-url="<?php echo e(route('dashboard.customers.getOrdersList')); ?>" class="form-control select2Ajax" id="orders" name="order_id" data-placeholder="--- <?php echo app('translator')->get('inputs.select-data', ['data' => trans('menu.the order')]); ?> ---" required>
                <?php if(isset($order) && !empty($order)): ?>
                    <option selected value="<?php echo e($order->id); ?>"><?php echo e($order->id.' ('.$order->created_date.')'); ?></option>
                <?php endif; ?>
                <?php if(isset($row) && !empty($row)): ?>
                    <option selected value="<?php echo e($row->order_id); ?>"><?php echo e($row->order_id.' ('.optional($row->order)->created_date.')'); ?></option>
                <?php endif; ?>
            </select>
            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'order_id'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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


<div class="col-md-6">
    
    <div class="form-group">
        <label class="required"><?php echo app('translator')->get('inputs.title'); ?></label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-pencil"></i> </span>
            </div>
            <input type="text" class="form-control" name="title" required value="<?php echo e($row->title ?? old('title')); ?>"  placeholder="<?php echo app('translator')->get('inputs.title'); ?>">
        </div>
        <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'title'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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


<div class="col-md-6">
    
    <div class="form-group">
        <label class="required"><?php echo app('translator')->get('inputs.customer_value'); ?></label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-pencil"></i> </span>
            </div>
            <input type="number" class="form-control" name="customer_value" required value="<?php echo e($row->customer_value ?? old('customer_value')); ?>"  placeholder="<?php echo app('translator')->get('inputs.customer_value'); ?>">
        </div>
        <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'customer_value'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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


<div class="col-md-6">
    
    <div class="form-group">
        <label class="required"><?php echo app('translator')->get('inputs.company_value'); ?></label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-pencil"></i> </span>
            </div>
            <input type="number" class="form-control" name="company_value" required value="<?php echo e($row->company_value ?? old('company_value')); ?>"  placeholder="<?php echo app('translator')->get('inputs.company_value'); ?>">
        </div>
        <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'company_value'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<script>
     $(function() {
        $('.select2Ajax').select2({
            allowClear: true,
            ajax: {
                url: function () {
                    return $(this).attr('data-url');
                },
                dataType: 'json',
                data: function (params) {
                    return {
                        term: params.term,
                        customer_id:$('#customers').val(),
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true,
                width:"100%",
            }
        });
    });
</script>
<?php if (! $__env->hasRenderedOnce('d135883c-b57a-4896-b746-b47b6bd0854c')): $__env->markAsRenderedOnce('d135883c-b57a-4896-b746-b47b6bd0854c'); ?>
    <?php $__env->startPush('script'); ?>
        <script>
            $(function() {
                
            })
        </script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/backend/fees/form.blade.php ENDPATH**/ ?>