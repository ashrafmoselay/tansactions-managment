<?php $__errorArgs = [$input];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span class="text-danger"> <strong><?php echo e($message); ?></strong> </span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

<?php if($input): ?>
    <span class="text-danger error" id="<?php echo e($input); ?>_error"></span>
<?php endif; ?>
<?php /**PATH /var/www/html/transactions-mangament/resources/views/components/validation-error.blade.php ENDPATH**/ ?>