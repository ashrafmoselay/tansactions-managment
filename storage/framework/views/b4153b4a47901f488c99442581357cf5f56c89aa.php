<?php if($announcement): ?>
    <div class="card m-0" style="position: fixed; bottom: 0; width: 100%; text-align: center; background-image: url(<?php echo e(asset($announcement->image)); ?>)">
        <a href="<?php echo e($announcement->url); ?>" target="<?php echo e($announcement->open_type ? '_blank' : ''); ?>">
            <div class="card-body">
                <h4 class="card-title"><?php echo e($announcement->id); ?> - <?php echo e($announcement->title); ?></h4>
                <p class="card-text"><?php echo $announcement->desc; ?></p>
            </div>
        </a>
    </div>
<?php endif; ?>
<?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/components/announcement.blade.php ENDPATH**/ ?>