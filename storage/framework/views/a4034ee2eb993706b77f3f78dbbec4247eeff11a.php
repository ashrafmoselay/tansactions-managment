<div class="row">
    
    <div class="col-md-8">
        <div class="form-group">
            <label><?php echo app('translator')->get('inputs.email'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-envelope"></i> </span>
                </div>
                <input type="text" disabled readonly class="form-control" value="<?php echo e(auth()->user()->email); ?>">
            </div>
        </div>
    </div>
    

    
    <div class="col-md-4">
        <div class="form-group">
            <label><?php echo app('translator')->get('inputs.code'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa-solid fa-barcode"></i> </span>
                </div>
                <input type="text" disabled readonly class="form-control" value="<?php echo e(auth()->user()->code); ?>">
            </div>
        </div>
    </div>
    

    
    <div class="col-md-6">
        <div class="form-group">
            <label><?php echo app('translator')->get('menu.department'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-building-user"></i> </span>
                </div>
                <input type="text" disabled readonly class="form-control" value="<?php echo e(auth()->user()->department->title ?? ''); ?>">
            </div>
        </div>
    </div>
    

    
    <div class="col-md-6">
        <div class="form-group">
            <label class="required"><?php echo app('translator')->get('inputs.name'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-user"></i> </span>
                </div>
                <input type="text" name="name" class="form-control" value="<?php echo e(auth()->user()->name); ?>">
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


<div class="form-group">
    <label><?php echo app('translator')->get('menu.roles'); ?></label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-shield"></i> </span>
        </div>
        <input type="text" disabled readonly class="form-control" value="<?php echo e(implode(' | ', auth()->user()->roles()->pluck('name')->toArray())); ?>">
    </div>
</div>

<?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/backend/profile/info.blade.php ENDPATH**/ ?>