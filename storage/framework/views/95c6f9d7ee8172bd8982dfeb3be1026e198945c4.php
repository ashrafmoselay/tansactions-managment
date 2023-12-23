<?php $__env->startPush('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('vendors/css/pickers/daterange/daterangepicker.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('vendors/css/pickers/pickadate/pickadate.css')); ?>">
<?php $__env->stopPush(); ?>

<div class="row">

    
    <div class="col-md-12">
        <div class="form-group">
            <label class="required"><?php echo app('translator')->get('inputs.key'); ?></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-blue-grey bg-lighten-1 white"> <i class="la la-pencil"></i> </span>
                </div>
                <input type="text" class="form-control badge-text-maxlength" maxlength="30" name="key"
                    value="<?php echo e($row->key ?? old('key')); ?>" placeholder="<?php echo app('translator')->get('inputs.key'); ?>" autocomplete="off" required>
            </div>
            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'key'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
    

    
    <div class="col-md-6">
        <div class="form-group">
            <label class="required"><?php echo app('translator')->get('inputs.select-data', ['data' => trans('inputs.active')]); ?></label>
            <select class="select2 form-control" name="active" id="active" data-placeholder="--- <?php echo app('translator')->get('inputs.select-data', ['data' => trans('menu.content_type')]); ?> ---" >
                <?php $__currentLoopData = [1 => 'YES', 0 => 'NO']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($index); ?>" <?php if(isset($row) && $row->active === $index || old('active') === $index): echo 'selected'; endif; ?>><?php echo e($name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'active'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
    

    
    <div class="col-md-6">
        <div class="form-group">
            <label class="required"><?php echo app('translator')->get('inputs.select-data', ['data' => trans('menu.content_type')]); ?></label>
            <select class="select2 form-control" name="content_type_id" id="content_type_id" data-placeholder="--- <?php echo app('translator')->get('inputs.select-data', ['data' => trans('menu.content_type')]); ?> ---" >
                <option value=""><?php echo app('translator')->get('inputs.please-select'); ?></option>
                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($id); ?>" <?php if(isset($row) && $row->content_type_id == $id || old('content_type_id') == $id): echo 'selected'; endif; ?>><?php echo e($name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php if (isset($component)) { $__componentOriginalc98491cb9bb70c86f130d42eb4cfbfb99411b399 = $component; } ?>
<?php $component = App\View\Components\ValidationError::resolve(['input' => 'content_type_id'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
    
</div>

<div id="load-content-type-input" class="pt-2" style="border-top: 1px solid #d5d5d5"></div>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(assetHelper('vendors/js/pickers/pickadate/picker.js')); ?>"></script>
    <script src="<?php echo e(assetHelper('vendors/js/pickers/pickadate/picker.date.js')); ?>"></script>
    <script src="<?php echo e(assetHelper('vendors/js/pickers/pickadate/picker.time.js')); ?>"></script>

    <script>
        $(function() {
            $(document).ready(function() {
                if ($('#content_type_id').val() > 0) { $('#content_type_id').change() }
            });

            let content_type_input = $('#load-content-type-input');
            let content_id = "<?php echo e($row->id ?? null); ?>";
            $('body').on('change', '#content_type_id', function() {
                let url = "<?php echo e(routeHelper('settings.type.input')); ?>";
                let content_type_id = $(this).val();
                content_type_input.addClass('load').fadeOut(300, function () { $(this).empty() });

                $.ajax({
                    url: url,
                    type: "POST",
                    data: {content_type_id: content_type_id, content_id: content_id},
                    success: function (response, textStatus, jqXHR) {
                        content_type_input.fadeIn(300, function() { $(this).html(response); });
                    },
                    error: function (jqXHR, textStatus, errorMessage) {
                        handleErrors(jqXHR);
                    },
                    complete: function() { content_type_input.removeClass('load'); }
                });

            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(assetHelper('vendors/js/pickers/pickadate/picker.js')); ?>"></script>
    <script src="<?php echo e(assetHelper('vendors/js/pickers/pickadate/picker.date.js')); ?>"></script>

    <script>
        $(function() {
            let min = '2022-06-20';
            let max = '2022-06-24';
            $('.pickadate-selectors').pickadate({
                labelMonthNext: 'Next month',
                labelMonthPrev: 'Previous month',
                labelMonthSelect: 'Pick a Month',
                labelYearSelect: 'Pick a Year',
                selectMonths: true,
                selectYears: true,
                format: 'yyyy-mm-dd',
                min: min,
                max: max,
                today: 'Today',
                close: 'Close',
                clear: 'Clear'
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/backend/settings/form.blade.php ENDPATH**/ ?>