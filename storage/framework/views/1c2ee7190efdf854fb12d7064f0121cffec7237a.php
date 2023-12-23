<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-1">
        <h2 class="content-header-title"><?php echo e(request('alert') ? 'التنبيهات اليومية' : strtoupper(trans('menu.' . getModel()))); ?>

        </h2>
    </div>

    <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12"">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <?php $full_url = ""; ?>
                <?php $__currentLoopData = convertUrlToArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $full_url .= "/$link"; ?>

                    <?php if($loop->last || stripos($link, '{') !== false): ?>
                        <li class="breadcrumb-item active">
                            <?php if(stripos($link, '{') !== false): ?>
                                <?php $full_url = str_replace($link, getModelSlug($link, true), $full_url); ?>
                                <?php echo getModelSlug($link); ?>

                            <?php else: ?>
                                <?php echo app('translator')->get("menu.$link"); ?>
                            <?php endif; ?>
                        </li>
                    <?php else: ?>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(url($full_url)); ?>">
                                <?php if($link == ''): ?>
                                    <?php echo app('translator')->get('menu.dashboard'); ?>
                                <?php elseif(Lang::has("menu.$link")): ?>
                                    <?php echo app('translator')->get("menu.$link"); ?>
                                <?php else: ?>
                                    <?php echo e($link); ?>

                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/transactions-mangament/resources/views/layouts/includes/backend/breadcrumb.blade.php ENDPATH**/ ?>