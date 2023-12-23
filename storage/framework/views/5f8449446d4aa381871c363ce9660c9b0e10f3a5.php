<div class="form-group">
    <label class="<?php echo e($class ?? ''); ?>"><?php echo app('translator')->get('inputs.upload-image'); ?></label>
    <div id="file-preview">
        <input type="file" name="image" class="form-control input-image" accept="image/*" onchange="previewFile(this)" <?php echo e(isset($required) && $required ? "required" : ""); ?>>
        <div>
            <img src="<?php echo e($image ?? 'https://www.lifewire.com/thmb/2KYEaloqH6P4xz3c9Ot2GlPLuds=/1920x1080/smart/filters:no_upscale()/cloud-upload-a30f385a928e44e199a62210d578375a.jpg'); ?>"
                class="img-border img-thumbnail" id="show-file" alt="<?php echo e($alt ?? "Image"); ?>">
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'image'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/includes/forms/input-file.blade.php ENDPATH**/ ?>