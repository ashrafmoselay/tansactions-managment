
<?php if (! $__env->hasRenderedOnce('9d53be8c-e115-44de-bdd8-596a2a967fa9')): $__env->markAsRenderedOnce('9d53be8c-e115-44de-bdd8-596a2a967fa9'); ?>
    <?php $__env->startPush('style'); ?>
        <style>
            
        </style>
    <?php $__env->stopPush(); ?>
<?php endif; ?>


<div class='row'>
    <div class="col-md-12">
    
    <div class="form-group">
        <label class="required"><?php echo app('translator')->get('inputs.name'); ?></label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-pencil"></i> </span>
            </div>
            <input type="text" class="form-control" name="name" required value="<?php echo e($row->name ?? old('name')); ?>"  placeholder="<?php echo app('translator')->get('inputs.name'); ?>">
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



</div>


<?php if (! $__env->hasRenderedOnce('bb781f9e-a22e-4006-b1d3-8ac7a971a3db')): $__env->markAsRenderedOnce('bb781f9e-a22e-4006-b1d3-8ac7a971a3db'); ?>
    <?php $__env->startPush('script'); ?>
        <script>
            $(function() {
                
            })
        </script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/backend/lookups/form.blade.php ENDPATH**/ ?>