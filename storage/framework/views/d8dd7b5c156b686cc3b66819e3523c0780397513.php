<?php $__env->startSection('page_title', 'Reset Password'); ?>
<?php $__env->startSection('title', 'We will send you a link to reset password'); ?>

<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(route('password.email')); ?>">
    <?php echo csrf_field(); ?>

    <!-- BEGIN USER NAME INPUT -->
    <fieldset class="form-group">
        <label for="email" class="required">Email</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa-solid fa-envelope"></i> </span>
            </div>
            <input required type="email" id="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>"
                    autofocus placeholder="Type your email..." autocomplete="email" required>
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
    </fieldset>
    <!-- END USER NAME INPUT -->

    <button type="submit" class="btn submit-button btn-lg btn-block" data-toggle="tooltip" data-original-title="Send to me email">
        <i class="fa fa-unlock-alt"></i> Send Password Reset Link
    </button>
</form>

<div class="card-footer">
    <p class="m-0">Back to <a href="<?php echo e(url('login')); ?>" class="card-link">Login</a> ?</p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>