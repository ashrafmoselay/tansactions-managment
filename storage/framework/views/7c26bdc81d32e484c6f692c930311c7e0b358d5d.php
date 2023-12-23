<?php $__env->startSection('page_title', 'Login'); ?>
<?php $__env->startSection('title', 'Welcome to ' . getSettingKey('site_name', env('APP_NAME'))); ?>

<?php $__env->startSection('content'); ?>
<form class="login-form" action="<?php echo e(route('login')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <!-- BEGIN USER NAME INPUT -->
    <fieldset class="form-group">
        <label for="email" class="required">Email or Code</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa-solid fa-envelope"></i> </span>
                <span class="input-group-text"> <i class="fa-solid fa-barcode"></i> </span>
            </div>
            <input type="text" id="username" name="username" class="form-control" value="<?php echo e(old('username') ?? env('LOGIN_EMAIL', '')); ?>"
                    autofocus placeholder="Type your email or phone..." required>
        </div>
        <?php $__currentLoopData = $errors->getMessages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $input_name => $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => ''.e($input_name).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </fieldset>
    <!-- END USER NAME INPUT -->

    <!-- BEGIN USER PASSWORD INPUT -->
    <fieldset class="form-group">
        <label for="password" class="required">Password</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text show-password" data-toggle="tooltip" data-original-title="Show Password">
                    <i class="fas fa-eye-slash"></i>
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

    <!-- BEGIN OPTIONS INPUT -->
    <div class="form-group row">
        <div class="col-md-6 col-12 text-center text-md-left">
            <fieldset>
                <input type="checkbox" id="remember-me" class="chk-remember" name="remember" <?php if(old('remember')): echo 'checked'; endif; ?>>
                <label for="remember-me" class="px-1" data-toggle="tooltip" data-original-title="The system will remember your login"> Remember Me</label>
            </fieldset>
        </div>
        <?php if(Route::has('password.request')): ?>
            <div class="col-md-6 col-12 text-center text-md-right">
                <a href="<?php echo e(route('password.request')); ?>" class="card-link forget-password text-bold-500" data-toggle="tooltip" data-original-title="Forget and reset password">
                    Forgot Your Password ?
                </a>
            </div>
        <?php endif; ?>
    </div>
    <!-- END OPTIONS INPUT -->

    <button type="submit" class="btn submit-button btn-lg btn-block"><i class="fa fa-unlock-alt"></i> Login</button>
</form>

<div class="card-footer px-0 pb-0 d-lg-flex justify-content-between">
    <p class="text-left mx-auto">
        <?php $__currentLoopData = \App\Models\OauthSocial::active()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $social->getTemplate(true); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>
    <?php if(Route::has('register')): ?>
        <p class="text-right m-0"> New to <?php echo e(getSettingKey('site_name', env('APP_NAME'))); ?> ? <a href="<?php echo e(route('register')); ?>" class="card-link text-bold-500">Sign Up</a> </p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    <script>
        $(function() {
            $('.login-provider').on('click', function() {
                $(this).closest('.card').addClass('load');
            })
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/auth/login.blade.php ENDPATH**/ ?>