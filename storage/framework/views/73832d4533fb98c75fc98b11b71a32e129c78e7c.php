<div class="row">
    <div class="offset-md-4 col-md-3">
        
        <?php echo $__env->make('backend.includes.forms.input-file', ['image' => asset($user->image), 'class' => 'required', 'alt' => $user->name], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
    </div>
</div>
<?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/backend/profile/avatar.blade.php ENDPATH**/ ?>