<div class="row">
    <div class="col-md-12">
        
        <div class="form-group">
            <label><?php echo app('translator')->get('inputs.name'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input type="text" class="form-control" name="name" placeholder="<?php echo app('translator')->get('inputs.name'); ?>">
            </div>
        </div>
        

        
        <div class="form-group">
            <label><?php echo app('translator')->get('inputs.email'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input type="text" class="form-control" name="email" placeholder="<?php echo app('translator')->get('inputs.email'); ?>">
            </div>
        </div>
        
    </div>
</div>
<?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/users/search.blade.php ENDPATH**/ ?>