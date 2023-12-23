<?php if( isset( $active_announcements ) && count( $active_announcements ) ): ?>
    <div class="card">
        <div class="card-header bg-dark">
            <h3 class="card-title text-white"> <i class="fa-solid fa-bullhorn"></i> <?php echo app('translator')->get('menu.list-rows', ['model' => trans('menu.announcements')]); ?> </h3>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th> <b> <?php echo app('translator')->get('inputs.title'); ?> </b> </th>
                            <th> <b> <?php echo app('translator')->get('inputs.start_date'); ?> </b> </th>
                            <th> <b> <?php echo app('translator')->get('inputs.end_date'); ?> </b> </th>
                            <th> <b> <?php echo app('translator')->get('inputs.url'); ?> </b> </th>
                            <th> <b> <?php echo app('translator')->get('inputs.image'); ?> </b> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $active_announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $active_announcement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="<?php echo e($index % 2 ? '' : 'bg-blue-grey bg-lighten-5'); ?>">
                                <td> <a href='<?php echo e(routeHelper('announcements.show', $active_announcement)); ?>' class="btn btn-sm btn-link"> <?php echo e($active_announcement->title); ?> </a> </td>
                                <td> <?php echo e($active_announcement->formatDate('start_date')); ?> </td>
                                <td> <?php echo e($active_announcement->formatDate('end_date')); ?> </td>
                                <td> <a href='<?php echo e($active_announcement->url); ?>' class='btn btn-sm btn-primary' target='_blank'> <i class='fa fa-link'></i> <?php echo app('translator')->get('inputs.url'); ?></a> </td>
                                <td> <?php if (isset($component)) { $__componentOriginal9bbcb992cc41c3af7f6d8e1288220103f0c29e39 = $component; } ?>
<?php $component = App\View\Components\PreviewImage::resolve(['image' => $active_announcement->image,'title' => $active_announcement->name] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('preview-image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PreviewImage::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9bbcb992cc41c3af7f6d8e1288220103f0c29e39)): ?>
<?php $component = $__componentOriginal9bbcb992cc41c3af7f6d8e1288220103f0c29e39; ?>
<?php unset($__componentOriginal9bbcb992cc41c3af7f6d8e1288220103f0c29e39); ?>
<?php endif; ?> </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/home/announcements.blade.php ENDPATH**/ ?>