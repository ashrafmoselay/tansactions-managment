<?php if(canUser("$table-index")): ?>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <a href="<?php echo e(routeHelper("$table.index")); ?>">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="<?php echo e($info['color']); ?>"><?php echo e($info['count']); ?></h3>
                                <h6><?php echo app('translator')->get("menu.$table"); ?></h6>
                            </div>
                            <div> <i class="<?php echo e($icons[ ucwords( str_replace('_', ' ', $table) ) ]); ?> <?php echo e($info['color']); ?> font-large-2 float-right"></i> </div></div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-<?php echo e($info['color']); ?>" role="progressbar" style="width: <?php echo e($info['count']); ?>%" aria-valuenow="<?php echo e($info['count']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </a>
                <?php if(canUser("$table-create") && Route::has(getRoutePrefex('.')."$table.create")): ?>
                    <a href="<?php echo e(routeHelper("$table.create")); ?>" class="btn btn-sm show-modal-form btn-<?php echo e($info['color']); ?> btn-block mt-1">
                        <i class="fa fa-plus"></i> <b> <?php echo app('translator')->get('buttons.create'); ?></b>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/elansari/resources/views/backend/home/statistics.blade.php ENDPATH**/ ?>