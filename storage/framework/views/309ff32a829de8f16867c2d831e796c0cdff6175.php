<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $per): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($per->id); ?>">
        <?php echo e($per->name); ?>

    </option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/backend/customers/dropdown.blade.php ENDPATH**/ ?>