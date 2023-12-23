<?php if($visible): ?>
    <a href="<?php echo e($route); ?>" <?php echo e($attributes->merge(['class' => "btn btn-sm $classess"])); ?> data-toggle="tooltip" title="<?php echo e($title); ?>">
        <i class="<?php echo e($icon); ?>"></i> <?php echo e($text); ?>

    </a>
<?php endif; ?>
<?php /**PATH /var/www/html/transactions-mangament/resources/views/components/link-tag.blade.php ENDPATH**/ ?>