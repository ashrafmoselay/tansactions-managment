<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('vendors/css/forms/selects/select2.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assetHelper('vendors/css/ui/dragula.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    
    <?php echo $__env->make('backend.includes.cards.table-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <div class="card-content collpase show">
        <div class="card-body">

            <div class="d-flex justify-content-between mb-1">
                <?php if(canUser('menus.create')): ?>
                    <a href="<?php echo e(routeHelper('menus.create')); ?>" class="btn btn-primary btn-sm show-modal-form"> <i class="fa fa-plus"></i> <?php echo app('translator')->get('menu.create-row', ['model' => trans('menu.menu')]); ?></a>
                <?php endif; ?>

                <?php if(canUser('menus.syncMenus')): ?>
                    <a href="<?php echo e(routeHelper('menus.sync')); ?>" class="btn btn-dark btn-sm"> <i class="fas fa-sync-alt"></i> <?php echo app('translator')->get('buttons.sync menus'); ?></a>
                <?php endif; ?>
            </div>

            <ul class="list-group drag-drop nested-sortable" id="list-group-tags" data-url="<?php echo e(routeHelper('menus.reorder')); ?>" data-parent-id='null'>
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('backend.menus.list-menus', ['menu' => $menu], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(assetHelper('vendors/js/forms/extended/maxlength/bootstrap-maxlength.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(assetHelper('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(assetHelper('js/scripts/forms/select/form-select2.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(assetHelper('js/scripts/forms/input-groups.js')); ?>"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>

    <script>

        $(function() {

            var sortablelist = document.getElementById('list-group-tags');
            var nestedSortables = document.getElementsByClassName('nested-sortable');

            for (var i = 0; i < nestedSortables.length; i++) {
                new Sortable(nestedSortables[i], {
                    group: 'nested',
                    animation: 150,
                    fallbackOnBody: true,
                    swapThreshold: 0.65,
                    onEnd: function (/**Event*/evt) {
                        let orders = createSortArray();
                        saveOrdring(orders);
                    },
                });
            }

            function createSortArray()
            {
                let orders = [];
                $('li.list-group-item').each(function (index) {
                    let id = $(this).data('id');
                    let parent_id = $(this).closest('.nested-sortable').data('parent-id');
                    if(typeof orders[id] !== 'undefined') return true;
                    orders[id] = {parent_id: parent_id, order: (index + 1)}
                });
                return orders;
            }

            function saveOrdring(orders)
            {
                $.ajax({
                    type: "post",
                    url: `${$('.drag-drop').data('url')}`,
                    data: {orders: orders},
                    success: function (response) {
                    let order = 1;
                    $('.order').each(function () {
                        $(this).text(order++);
                    });
                    }
                });
            }
        });

        $(function() {
            $('body').on('keyup', 'input[name="icon"]', function() {
                let icon = $(this).closest('.input-group').find('.input-group-text');
                icon.html(`<i class="${$(this).val()}"></i>`);
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/transactions-mangament/resources/views/backend/menus/index.blade.php ENDPATH**/ ?>