    
    <footer class="footer footer-static footer-light navbar-border navbar-shadow" style="position: relative; z-index: 1;">

        <div class="text-center">
            <?php $__currentLoopData = $social_medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_media_id => $social_media_btn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $social_media_btn; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <p style="color: black;" class="clearfix text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">
                حقوق الملكية &copy; <?php echo e(date('Y')); ?>

                <a class="text-bold-800 grey darken-2"
                    target="_blank"><?php echo e(getSettingKey('site_name', env('APP_NAME'))); ?></a>
                , جميع الحقوق محفوظة للمبرمج.
            </span>

            <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">
                تصميم وبرمجة م/أشرف حسان للتواصل <a href="tel:+201061048481"><i class="fa fa-phone"></i> 01061048481</a>
            </span>
        </p>
    </footer>

    

    
    <script>
        const ENDPOINT = "<?php echo e(routeHelper('/')); ?>"; // Main project url
        const main_path = "<?php echo e(url('/')); ?>"; // Main project url
        var notificationAudio = "<?php echo e(asset($notificationAudio)); ?>"; // Notification audio from setting or from defualt value
        var successAudio = "<?php echo e(asset($successAudio)); ?>"; // Success audio from setting or from defualt value
        var warrningAudio = "<?php echo e(asset($warrningAudio)); ?>"; // Warring or error audio from setting or from defualt value
        var RUN_SOUND = true;
        var SWAL_TITLE = "<?php echo app('translator')->get('title.are you sure'); ?>";
        var SWAL_MESSAGE = "<?php echo app('translator')->get('title.you wont be able to revert this'); ?>";
        var SWAL_DELETE_BUTTON = "<?php echo app('translator')->get('buttons.yes delete'); ?>";
        var SWAL_CANCEL_BUTTON = "<?php echo app('translator')->get('buttons.cancel'); ?>";
        var SWAL_FAILED_TITLE = "<?php echo app('translator')->get('title.please select some rows'); ?>";
        const AUTH_USER_ID = <?php echo e(auth()->id()); ?>;
        const APP_LOCALE = '<?php echo e(app()->getLocale()); ?>';
    </script>

    
    <script type="text/javascript" src="<?php echo e(assetHelper('build/js/main.js')); ?>"></script>

    
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <?php echo $__env->yieldContent('script'); ?>
    <?php echo $__env->yieldPushContent('script'); ?>

    <script type="text/javascript">
        $(function() {
            if ($('.swal2-icon-success').length || "<?php echo e(session()->has('success')); ?>") playAudio('success');
            if ($('.swal2-icon-error').length || "<?php echo e(session()->has('failed')); ?>" ||
                "<?php echo e(session()->has('warning')); ?>" || "<?php echo e(session()->has('error')); ?>") playAudio('warning');

            $('.has-sub').filter(function() {
                if ($.trim($(this).find('.menu-content').text()).length == 0) $(this).remove();
            });

            $('.has-sub').filter(function() {
                if ($.trim($(this).find('.menu-content').text()).length == 0) $(this).remove();
            });

            $(`li[data-route="<?php echo e(request()->route()->action['as']); ?>"]`).addClass('active').closest('.has-sub')
                .addClass('active open');

            $('#body-loading').fadeOut(350, function() {
                $(this).remove();
            });
        });

        $(document).on('click', ".deleteImg", function(e) {
            e.preventDefault();
            var mediaId = $(this).attr('rel');
            var parent = $(this).closest('.imageContainer');
            parent.closest('form').append('<input type="hidden" value="' + mediaId +
                '" class="form-control" name="mediaTodelete[]">');
            parent.fadeOut();
        });

        $(document).on('click', '.remoteModal', function(e) {
            e.preventDefault();
            // reset modal body with a spinner or empty content
            spinner = "<div class='text-center'><i class='fa fa-circle-notch fa-spin fa-5x fa-fw'></i></div>"
            var url = $(this).attr('href');
            $("#load-form .modal-body").html(spinner)
            $("#load-form .modal-body").load(url);
            $("#load-form").modal("show");
        });
    </script>

    <?php if(Route::has('messenger')): ?>
        <script>
            $(function() {
                let new_message_remove_time = null;
                let new_message_element = $('#all-unread-messages');

                window.Echo.private(`new-message.<?php echo e(auth()->id()); ?>`)
                    .listen('<?php echo e(config('messenger.event-name')); ?>', (data) => {
                        let counter = Number.parseInt(new_message_element.text());

                        new_message_element.text(counter + 1).attr('data-original-title', data.message.user.name)
                            .attr('data-content', data.message.message).click();
                        if (new_message_remove_time) clearTimeout(new_message_remove_time);

                        new_message_remove_time = setTimeout(() => {
                            $('body').find(`#${new_message_element.attr('aria-describedby')}`).remove();
                            new_message_element.click().removeAttr('data-original-title').removeAttr(
                                'data-content').removeAttr('aria-describedby');
                        }, 3000);

                        sound = true;
                        playAudio();
                    });

                window.Echo.join(`chat`).listenForWhisper('unread-count', (e) => {
                    if (<?php echo e(auth()->id()); ?> != e.auth_id) return;
                    $('#all-unread-messages').text(e.count)
                });
            });
        </script>
    <?php endif; ?>



    </body>

    </html>
<?php /**PATH /var/www/html/elansari/resources/views/layouts/includes/backend/footer.blade.php ENDPATH**/ ?>