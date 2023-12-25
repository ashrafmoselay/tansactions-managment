<div class="row">
    <div class="col-md-9">

        
        <div class="form-group">
            <label class="required"><?php echo app('translator')->get('inputs.name'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input type="text" class="form-control" name="name" value="<?php echo e($row->name ?? old('name')); ?>"
                    placeholder="<?php echo app('translator')->get('inputs.name'); ?>" required>
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
        

        
        <div class="form-group">
            <label class="required"><?php echo app('translator')->get('inputs.email'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input type="email" class="form-control" name="email" value="<?php echo e($row->email ?? old('email')); ?>"
                    placeholder="<?php echo app('translator')->get('inputs.email'); ?>" required>
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
        



    </div>

    <div class="col-md-3">
        
        <?php echo $__env->make('backend.includes.forms.input-file', [
            'image' => isset($row) && $row->image ? url($row->image) : null,
            'alt' => $row->name ?? null,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
    </div>

</div>

<div class="row">
    <div class="col-md-4">
        
        <div class="form-group">
            <label class="required"><?php echo app('translator')->get('inputs.balance'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input readonly type="number" step="any" class="form-control" name="balance"
                    value="<?php echo e($row->balance ?? 0); ?>" placeholder="<?php echo app('translator')->get('inputs.balance'); ?>" required>
            </div>
            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'balance'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
            <label class="<?php echo e(isset($row) ? '' : 'required'); ?>"><?php echo app('translator')->get('inputs.password'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text show-password"> <i class="fas fa-eye-slash"></i> </span>
                </div>
                <input type="password" class="form-control" name="password" placeholder=" <?php echo app('translator')->get('inputs.password'); ?>"
                    <?php echo e(isset($row) ? '' : 'required'); ?>>
            </div>
            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'password'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
        
        <?php if (isset($component)) { $__componentOriginalb8781bb3916d84129d989465bf31332ffd2d4246 = $component; } ?>
<?php $component = App\View\Components\Html\Select::resolve(['name' => 'department_id','list' => $departments,'selected' => old('department_id', $row->department_id ?? null),'required' => 'required','label' => trans('inputs.select-data', ['data' => trans('menu.department')])] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
        
    </div>
</div>


<div class="form-group">
    <?php if (isset($component)) { $__componentOriginalb8781bb3916d84129d989465bf31332ffd2d4246 = $component; } ?>
<?php $component = App\View\Components\Html\Select::resolve(['name' => 'roles[]','list' => $roles,'selected' => old(
        'roles[]',
        isset($row)
            ? $row
                ->roles()
                ->pluck('id')
                ->toArray()
            : [],
    ),'label' => trans('inputs.select-data', ['data' => trans('menu.roles')])] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('html.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Html\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['multiple' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb8781bb3916d84129d989465bf31332ffd2d4246)): ?>
<?php $component = $__componentOriginalb8781bb3916d84129d989465bf31332ffd2d4246; ?>
<?php unset($__componentOriginalb8781bb3916d84129d989465bf31332ffd2d4246); ?>
<?php endif; ?>
</div>


<?php $__env->startPush('script'); ?>
    <script type="text/javascript" src="<?php echo e(assetHelper('customs/js/show-password.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/users/form.blade.php ENDPATH**/ ?>