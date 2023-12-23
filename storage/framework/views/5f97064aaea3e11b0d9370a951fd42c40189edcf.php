<?php $alert_dir = app()->getLocale() == 'ar' ? 'right' : 'left'; ?>

<?php if(session()->has('success')): ?>
    <div class="alert bg-success alert-icon-<?php echo e($alert_dir); ?> alert-arrow-<?php echo e($alert_dir); ?> alert-dismissible mb-2" role="alert">
        <span class="alert-icon"><i class="fas fa-thumbs-up"></i></span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <?php echo session()->get('success'); ?>

    </div>
<?php endif; ?>

<?php if(session()->has('status')): ?>
    <div class="alert bg-primary alert-icon-<?php echo e($alert_dir); ?> alert-arrow-<?php echo e($alert_dir); ?> alert-dismissible mb-2" role="alert">
        <span class="alert-icon"><i class="fas fa-thumbs-up"></i></span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <?php echo session()->get('status'); ?>

    </div>
<?php endif; ?>

<?php if(session()->has('failed')): ?>
    <div class="alert bg-danger alert-icon-<?php echo e($alert_dir); ?> alert-arrow-<?php echo e($alert_dir); ?> alert-dismissible mb-2" role="alert">
        <span class="alert-icon"><i class="fas fa-thumbs-down"></i></span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <?php echo session()->get('failed'); ?>

    </div>
<?php endif; ?>

<?php if(session()->has('error')): ?>
    <div class="alert bg-danger alert-icon-<?php echo e($alert_dir); ?> alert-arrow-<?php echo e($alert_dir); ?> alert-dismissible mb-2" role="alert">
        <span class="alert-icon"><i class="fas fa-thumbs-down"></i></span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <?php echo session()->get('error'); ?>

    </div>
<?php endif; ?>

<?php if(session()->has('info')): ?>
    <div class="alert bg-info alert-icon-<?php echo e($alert_dir); ?> alert-arrow-<?php echo e($alert_dir); ?> alert-dismissible mb-2" role="alert">
        <span class="alert-icon"><i class="fas fa-info-circle"></i></span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <?php echo session()->get('info'); ?>

    </div>
<?php endif; ?>

<?php if(session()->has('warning')): ?>
    <div class="alert bg-warning alert-icon-<?php echo e($alert_dir); ?> alert-arrow-<?php echo e($alert_dir); ?> alert-dismissible mb-2" role="alert">
        <span class="alert-icon"><i class="fas fa-warning"></i></span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <?php echo session()->get('warning'); ?>

    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/elansari/resources/views/layouts/includes/backend/alerts.blade.php ENDPATH**/ ?>