<?php if (! $__env->hasRenderedOnce('8dcfd122-67f6-431a-b96c-c6b98dee580d')): $__env->markAsRenderedOnce('8dcfd122-67f6-431a-b96c-c6b98dee580d'); ?>
    <?php $__env->startPush('style'); ?>
        <style>

        </style>
    <?php $__env->stopPush(); ?>
<?php endif; ?>


<div class='row'>

    <input type="hidden" name="upload" value="<?php echo e(request()->has('upload')); ?>" />
    <input type="hidden" name="noredirect" value="<?php echo e(request()->has('noredirect')); ?>" />
    <div style="<?php echo e(request('upload') ? 'display: none' : ''); ?>" class="col-md-6">
        
        <div class="form-group">
            <label class="required"><?php echo app('translator')->get('inputs.name'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-pencil"></i> </span>
                </div>
                <input type="text" class="form-control" name="name" required
                    value="<?php echo e($row->name ?? old('name')); ?>" placeholder="<?php echo app('translator')->get('inputs.name'); ?>">
            </div>
            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399)): ?>
<?php $component = $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399; ?>
<?php unset($__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399); ?>
<?php endif; ?>
        </div>
        
    </div>


    <div style="<?php echo e(request('upload') ? 'display: none' : ''); ?>" class="col-md-6">
        
        <div class="form-group">
            <label class="required"><?php echo app('translator')->get('inputs.mobile'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa-solid fa-phone-volume"></i> </span>
                </div>
                <input type="text" class="form-control" name="mobile" required
                    value="<?php echo e($row->mobile ?? old('mobile')); ?>" placeholder="<?php echo app('translator')->get('inputs.mobile'); ?>">
            </div>
            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'mobile'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399)): ?>
<?php $component = $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399; ?>
<?php unset($__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399); ?>
<?php endif; ?>
        </div>
        
    </div>


    <div style="<?php echo e(request('upload') ? 'display: none' : ''); ?>" class="col-md-6">
        
        <div class="form-group">
            <label class="required"><?php echo app('translator')->get('inputs.nid'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-pencil"></i> </span>
                </div>
                <input type="text" class="form-control" name="nid" required value="<?php echo e($row->nid ?? old('nid')); ?>"
                    placeholder="<?php echo app('translator')->get('inputs.nid'); ?>">
            </div>
            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'nid'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399)): ?>
<?php $component = $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399; ?>
<?php unset($__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399); ?>
<?php endif; ?>
        </div>
        
    </div>


    <div style="<?php echo e(request('upload') ? 'display: none' : ''); ?>" class="col-md-6">
        
        <div class="form-group">
            <label class=""><?php echo app('translator')->get('inputs.phone'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-fax"></i> </span>
                </div>
                <input type="text" class="form-control" name="phone" value="<?php echo e($row->phone ?? old('phone')); ?>"
                    placeholder="<?php echo app('translator')->get('inputs.phone'); ?>">
            </div>
            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'phone'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399)): ?>
<?php $component = $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399; ?>
<?php unset($__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399); ?>
<?php endif; ?>
        </div>
        
    </div>


    <div style="<?php echo e(request('upload') ? 'display: none' : ''); ?>" class="col-md-12">
        
        <div class="form-group">
            <label class=""><?php echo app('translator')->get('inputs.region'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-pencil"></i> </span>
                </div>
                <input type="text" class="form-control" name="region" value="<?php echo e($row->region ?? old('region')); ?>"
                    placeholder="<?php echo app('translator')->get('inputs.region'); ?>">
            </div>
            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'region'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ValidationError::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399)): ?>
<?php $component = $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399; ?>
<?php unset($__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399); ?>
<?php endif; ?>
        </div>
        
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label>المرفقات</label>
            <input multiple name="attachments[]" type="file" class="form-control ">
            <?php if(isset($row)): ?>
                <div class="row">
                    <?php $__currentLoopData = $row->getMedia('attachments'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-2 imageContainer">
                            <?php
                                $filepath = $file->getUrl();
                                $extension = $file->mime_type;
                            ?>
                            <?php if(in_array($extension, ['image/jpeg', 'image/png'])): ?>
                                <img style="width: 100px;" src="<?php echo e($filepath); ?>">
                            <?php else: ?>
                                <a style="margin-bottom: 5px;" target="_blank" href="<?php echo e($filepath); ?>"
                                    class="btn btn-sm btn-warning">View </a>
                            <?php endif; ?>
                            <a class="btn btn-danger btn-sm deleteImg" rel="<?php echo e($file->id); ?>" href="#"><i
                                    class="fa fa-trash close_button"></i></a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>


</div>



<?php if(request()->has('noredirect') && request('noredirect') == 1): ?>
    <script>
        $('#load-form button[type="submit"]').click(function(e) {
            e.preventDefault();
            var form = $(this).closest('form');
            var url = form.attr('action');
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                success: function(data) {
                    $("#customer_id").empty();
                    $("#customer_id").append(data);
                    $("#customer_id option:first").attr("selected", "selected");
                    $('#load-form').modal('toggle');
                    $("#customer_id").trigger('change');
                },
                error: function(reject) {
                    var response = $.parseJSON(reject.responseText);
                    var errors = response.errors;
                    $.each(errors, function(key, val) {
                        $("#" + key + "_error").text(val[0]);
                    });

                }
            });
        });
    </script>
<?php endif; ?>
<?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/backend/customers/form.blade.php ENDPATH**/ ?>