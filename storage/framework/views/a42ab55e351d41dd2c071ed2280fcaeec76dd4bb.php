<div class="card-header bg-main">
    <h4 class="card-title white">
        <i class="fas fa-plus fa-sm"></i><span class="mx-1"><?php echo e($title ?? trans('menu.create-row', ['model' => trans('menu.'.getModel(true))])); ?></span>
    </h4>

    <?php echo $__env->yieldContent('back'); ?>
</div>

<div class="card-content collpase show">
    <div class="card-body">
            <form action="<?php echo e(routeHelper(getModel().".store")); ?>" method="post" class="<?php echo e($use_form_ajax ? 'submit-form' : ''); ?>" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>

            
            <?php echo $__env->make('backend.' . getModel(view:true) . '.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

            
            <?php if (isset($component)) { $__componentOriginale8340eb01f00535543c6958ab683a31712450bfd = $component; } ?>
<?php $component = App\View\Components\FormButtons::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
            

            
            <?php if (isset($component)) { $__componentOriginal1972286af5fd52acef1a4292709ba6162ac39ad5 = $component; } ?>
<?php $component = App\View\Components\Html\Progress::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('html.progress'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Html\Progress::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1972286af5fd52acef1a4292709ba6162ac39ad5)): ?>
<?php $component = $__componentOriginal1972286af5fd52acef1a4292709ba6162ac39ad5; ?>
<?php unset($__componentOriginal1972286af5fd52acef1a4292709ba6162ac39ad5); ?>
<?php endif; ?>
            
        </form>
    </div>
</div>
<?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/includes/forms/form-create.blade.php ENDPATH**/ ?>