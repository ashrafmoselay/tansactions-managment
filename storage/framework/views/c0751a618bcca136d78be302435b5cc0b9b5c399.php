<li class="dropdown dropdown-notification nav-item">
    <a class="nav-link nav-link-label" href="#" id="get-emails-count" data-toggle="dropdown">
        <i class="fa-solid fa-bell" style="font-size: 23px"></i>
        <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow unread-notifications-count"> <b class="emails-unread-count" id="emails-unread-count"><?php echo e($emails_not_seen_count); ?></b> </span>
    </a>
    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
        <li class="dropdown-menu-header">
            <h6 class="dropdown-header m-0">
                <a href="<?php echo e(routeHelper('emails.index')); ?>" class="grey darken-2"><?php echo app('translator')->get('menu.notifications'); ?></a>
            </h6>
            <span class="notification-tag badge badge-default badge-danger float-right m-0 unread-notifications-count">
                <b class="emails-unread-count"><?php echo e($emails_not_seen_count); ?></b> <?php echo app('translator')->get('menu.news'); ?>
            </span>
        </li>

        <li class="scrollable-container media-list w-100" style="max-height: 300px" id="list-emails" data-route="<?php echo e(routeHelper('emails.list')); ?>"></li>

        <li class="dropdown-menu-footer">
            <a class="dropdown-item text-muted text-center read-unread-notifications" href="<?php echo e(routeHelper('emails.read')); ?>"><?php echo app('translator')->get('menu.read all notifications'); ?></a>
        </li>
    </ul>
</li>
<?php /**PATH /var/www/html/transactions-mangament/resources/views/layouts/includes/backend/sections/emails.blade.php ENDPATH**/ ?>