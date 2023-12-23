<div class="card-header content-table-header white">
    <h4 class="card-title white">
        <?php echo $title ?? trans('menu.'.getModel())." : <span id='recourds-count'>".($count ?? '')."</span>"; ?>

    </h4>

    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
    <div class="heading-elements">
        <ul class="list-inline mb-0">
            <li><a data-action="collapse" data-toggle="tooltip" title="<?php echo app('translator')->get('title.minus-section'); ?>" ><i class="fas fa-minus"></i></a></li>
            <li><a data-btn-action="reload" data-toggle="tooltip" title="<?php echo app('translator')->get('title.reload-table'); ?>" ><i class="fas fa-undo"></i></a></li>
            <li><a data-action="expand" data-toggle="tooltip" title="<?php echo app('translator')->get('title.full-page'); ?>" ><i class="fas fa-maximize"></i></a></li>
            <li><a data-action="close" data-toggle="tooltip" title="<?php echo app('translator')->get('title.remove-section'); ?>" ><i class="fas fa-times"></i></a></li>
        </ul>
    </div>
</div>
<?php /**PATH /var/www/html/elansari/resources/views/backend/includes/cards/table-header.blade.php ENDPATH**/ ?>