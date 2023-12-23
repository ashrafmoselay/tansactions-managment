<?php $__env->startSection('page_title', 'Lock Screen'); ?>
<?php $__env->startSection('title', trans('title.unlock account')); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.includes.backend.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<form action="<?php echo e(route('unlock')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="email" value="<?php echo e(encrypt(auth()->user()->email) ?? old('email')); ?>" required>

    <!-- BEGIN USER PASSWORD INPUT -->
    <fieldset class="form-group">
        <label for="password" class="required">Password</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text show-password" data-toggle="tooltip" data-original-title="Show Password">
                    <i class="fa-solid fa-eye-slash"></i>
                </span>
            </div>
            <input type="password" id="password" name="password" value="<?php echo e(old('password') ?? env('LOGIN_PASSWORD', '')); ?>"
                autocomplete="current-password" placeholder="Type your password..." class="form-control" required>
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
    </fieldset>
    <!-- END USER PASSWORD INPUT -->

    <button type="submit" class="btn submit-button btn-lg btn-block" data-toggle="tooltip" data-original-title="<?php echo app('translator')->get('title.unlock account'); ?>">
        <i class="fa-sharp fa-solid fa-unlock"></i> <?php echo app('translator')->get('buttons.unlock'); ?>
    </button>
</form>


<!-- BEGIN OPTIONS INPUT -->
<div class="form-group mt-2 row">
    <div class="col-md-6 col-12 text-center text-md-left">
        <fieldset>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger d-block w-100" data-toggle="tooltip" data-original-title="<?php echo app('translator')->get('menu.logout'); ?>">
                    <i class="fa-solid fa-power-off"></i> <?php echo app('translator')->get('menu.logout'); ?>
                </button>
            </form>
        </fieldset>
    </div>
    <?php if(Route::has('password.request')): ?>
    <div class="col-md-6 col-12 text-center text-md-right">
        <a href="<?php echo e(route('password.request')); ?>" class="btn btn-primary d-block w-100" data-toggle="tooltip" data-original-title="Forget and reset password">
            <i class="fa-solid fa-key"></i> Forgot Your Password ?
        </a>
    </div>
    <?php endif; ?>
</div>
<!-- END OPTIONS INPUT -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/auth/lock.blade.php ENDPATH**/ ?>