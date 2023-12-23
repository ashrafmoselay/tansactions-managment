<div class="card-header <?php echo e($bg); ?>">
    <span class="white"><?php echo app('translator')->get("title.change $form_type"); ?></span>
</div>

<div class="card-body">
    <form action="<?php echo e(routeHelper("profile.$form_type")); ?>" method="post" class="submit-form" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="form_type" value="<?php echo e($form_type); ?>">
        <?php echo method_field("PUT"); ?>

        
        <?php echo $__env->make("backend.profile.$form_type", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

        
        <?php if (isset($component)) { $__componentOriginale8340eb01f00535543c6958ab683a31712450bfd = $component; } ?>
<?php $component = App\View\Components\FormButtons::resolve(['submit' => 'save'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormButtons::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale8340eb01f00535543c6958ab683a31712450bfd)): ?>
<?php $component = $__componentOriginale8340eb01f00535543c6958ab683a31712450bfd; ?>
<?php unset($__componentOriginale8340eb01f00535543c6958ab683a31712450bfd); ?>
<?php endif; ?>
        
    </form>
</div>
<?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/backend/profile/form.blade.php ENDPATH**/ ?>