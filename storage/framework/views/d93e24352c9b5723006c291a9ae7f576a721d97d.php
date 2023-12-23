<div>
    <div class="form-actions d-flex m-0" style="justify-content: space-evenly;">
        <button type="reset" class="btn btn-warning" data-dismiss="modal" data-toggle="tooltip" title="<?php echo app('translator')->get("buttons.$reset"); ?>">
            <i class="fa-solid fa-rotate-left"></i> <?php echo app('translator')->get("buttons.$reset"); ?>
        </button>

        <button type="submit" class="btn btn-primary" data-toggle="tooltip" title="<?php echo app('translator')->get("buttons.$submit"); ?>">
            <i class="fas fa-save"></i> <?php echo app('translator')->get("buttons.$submit"); ?>
        </button>

        <?php echo $__env->yieldContent('form-buttons'); ?>
    </div>

</div>
<?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/components/form-buttons.blade.php ENDPATH**/ ?>