<form method='post' action='<?php echo e(routeHelper(getModel().'.column.toggle', [$id, $column])); ?>' class='submit-form'>
    <?php echo csrf_field(); ?>

    <div class="form-check form-switch form-check-custom form-check-solid">
        <input type="checkbox" class="switchery checkbox-change-status" <?php if($value): echo 'checked'; endif; ?>>
    </div>
</form>
<?php /**PATH /var/www/html/transactions-mangament/resources/views/components/toggle-column.blade.php ENDPATH**/ ?>