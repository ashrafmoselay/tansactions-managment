<script>if ( document.getElementsByClassName("app-content")[0] == undefined ) location.reload();</script>

<?php if(isset($summery)): ?>
    <div class="row">
    <?php $__currentLoopData = $summery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xl-3 col-lg-6 col-12">
            <div style="background:#F4F5FA" class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="info"><?php echo e($v); ?></h3>
                                <h6><?php echo e($k); ?></h6>
                            </div>
                            <div> 
                                <i class="fa-solid fa-money-bill  info font-large-2 float-right"></i> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<div class="table-responsive">
    <?php echo e($dataTable->table([], true)); ?>

</div>

<?php echo e($dataTable->scripts()); ?>

<?php /**PATH /var/www/html/elansari/resources/views/backend/includes/tables/table.blade.php ENDPATH**/ ?>