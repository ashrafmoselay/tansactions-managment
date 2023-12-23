<div class="card px-2 pt-2 mb-0">
    <div class="card-header bg-blue-grey py-1">
        <h4 class="card-title white">
            <i class="fas fa-search fa-sm"></i><span class="mx-1"><?php echo e($title); ?></span>
        </h4>
    </div>

    <div class="card-body pb-0">
            <form action="<?php echo e(routeHelper(getModel().".index")); ?>" method="get" id="search-form">
                <input type="hidden" name="search" value="1">
            
            <?php echo $__env->make('backend.' . getModel(view:true) . '.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

            
            <?php if (isset($component)) { $__componentOriginale8340eb01f00535543c6958ab683a31712450bfd = $component; } ?>
<?php $component = App\View\Components\FormButtons::resolve(['submit' => 'search'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
</div>
<hr>
<?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/includes/forms/form-search.blade.php ENDPATH**/ ?>