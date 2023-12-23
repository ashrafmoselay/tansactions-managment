<?php $__env->startSection('content'); ?>

<!-- eCommerce statistic -->
<div class="row">
    <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table => $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($table !== 'routes'): ?>
            <?php echo $__env->make("backend.home.statistics", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $alerts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $alert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="<?php echo e($alert['color']); ?>"><?php echo e($alert['count']); ?></h3>
                            <h6><?php echo e($alert['title']); ?></h6>
                        </div>
                        <div>
                            <i class="fas fa-bell <?php echo e($alert['color']); ?> font-large-2 float-right"></i>
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-<?php echo e($alert['color']); ?>" role="progressbar" style="width: <?php echo e($alert['count']); ?>%" aria-valuenow="<?php echo e($alert['count']); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <a href="<?php echo e($alert['route']); ?>"
                    class="btn btn-sm btn-<?php echo e($alert['color']); ?> btn-block mt-1">
                    <i class="fa fa-eye"></i> <b>  التفاصيل</b>
                </a>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>


<?php echo $__env->make("backend.home.announcements", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--/ eCommerce statistic -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/home/index.blade.php ENDPATH**/ ?>