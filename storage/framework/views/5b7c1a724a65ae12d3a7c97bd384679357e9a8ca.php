
<div class="form-group">
    <label class="required"><?php echo app('translator')->get('inputs.title'); ?></label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa-solid fa-building-user"></i> </span>
        </div>
        <input type="text" class="form-control" name="title" value="<?php echo e($row->title ?? old('title')); ?>" placeholder="<?php echo app('translator')->get('inputs.title'); ?>" required>
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



<div class="form-group">
    <label class="required"><?php echo app('translator')->get('inputs.email'); ?></label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
        </div>
        <input type="email" class="form-control" name="email" value="<?php echo e($row->email ?? old('email')); ?>" placeholder="<?php echo app('translator')->get('inputs.email'); ?>" required>
    </div>
    <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'email'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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



<?php if (isset($component)) { $__componentOriginalb8781bb3916d84129d989465bf31332ffd2d4246 = $component; } ?>
<?php $component = App\View\Components\Html\Select::resolve(['name' => 'manager_id','list' => $users,'selected' => old('manager_id', ($row->manager_id ?? null)),'label' => trans('inputs.select-data', ['data' => trans('inputs.manager')])] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('html.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Html\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb8781bb3916d84129d989465bf31332ffd2d4246)): ?>
<?php $component = $__componentOriginalb8781bb3916d84129d989465bf31332ffd2d4246; ?>
<?php unset($__componentOriginalb8781bb3916d84129d989465bf31332ffd2d4246); ?>
<?php endif; ?>

<?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/departments/form.blade.php ENDPATH**/ ?>