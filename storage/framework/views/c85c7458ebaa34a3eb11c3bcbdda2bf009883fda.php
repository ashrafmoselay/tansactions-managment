
<?php echo $__env->make('layouts.includes.backend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        
        <?php echo $__env->make('layouts.includes.backend.loading', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        


<?php echo $__env->make('layouts.includes.backend.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<?php echo $__env->make('layouts.includes.backend.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<div class="app-content content">
    <div class="content-wrapper">

        
        <?php if(stripos(request()->route()->action['controller'], 'EmailController') === false): ?>
            <?php echo $__env->make('layouts.includes.backend.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        

        <div class="content-body">
            
            <?php echo $__env->make('layouts.includes.backend.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            


            
            <?php echo $__env->yieldContent('content'); ?>
            


            <?php if(Route::has('messenger')): ?>
                <div id="messenger-icon">
                    <span class="badge badge-primary badge-up badge-glow" id='all-unread-messages' data-toggle="popover" data-placement="left">
                        <?php echo e(auth()->user()->unreadMessages()); ?>

                    </span>
                    <a href="<?php echo e(route('messenger')); ?>"> <i class="fa-brands fa-facebook-messenger"></i> </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>



<?php echo $__env->make('layouts.includes.backend.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<?php echo $__env->make('layouts.includes.backend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/layouts/backend.blade.php ENDPATH**/ ?>