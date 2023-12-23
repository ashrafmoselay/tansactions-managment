<a class="heading-elements-toggle">
    <i class="fas fa la-ellipsis-h font-medium-3"></i>
</a>
<div class="heading-elements" style="top: 16px">
    <ul class="list-inline mb-0">
        <li>
            <a href="<?php echo e(routeHelper(getModel().'.index')); ?>" data-toggle="tooltip" title="<?php echo app('translator')->get('title.back-to-page', ['model' => trans('menu.'.getModel())]); ?>"
                class="btn btn-primary btn-glow dropdown-item">
                <i class="fas fa-sign-out-alt"></i>  <?php echo app('translator')->get('buttons.back'); ?>
            </a>
        </li>

        <li><a data-action="collapse" data-toggle="tooltip" class="text-white" title="<?php echo app('translator')->get('title.minus-section'); ?>" ><i class="fas fa-minus"></i></a></li>
        <li><a data-action="expand" data-toggle="tooltip" class="text-white" title="<?php echo app('translator')->get('title.full-page'); ?>" ><i class="fas fa-maximize"></i></a></li>
        <li><a data-action="close" data-toggle="tooltip" class="text-white" title="<?php echo app('translator')->get('title.remove-section'); ?>" ><i class="fas fa-times"></i></a></li>
    </ul>
</div>
<?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/includes/cards/form-header.blade.php ENDPATH**/ ?>