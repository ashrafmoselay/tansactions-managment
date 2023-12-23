<?php $__env->startPush('style'); ?>
    <style>
        @media print {

            a,
            .header-navbar,
            .main-menu,
            .hideprint,
            footer,
            .breadcrumb-wrapper,
            .content-header-left {
                visibility: hidden;
                display: none;
                margin: 0;
                padding: 0;
            }

            age {
                size: auto;
                height: auto;
                margin-left: 0.2cm;
                margin-right: 0.2cm;
                margin-top: 0.2cm;
                margin-bottom: 1cm;
                padding: 0cm !important;
                counter-increment: page;
                counter-reset: page 1;
            }

            .table,
            tr,
            td {
                text-align: center;
            }

            html,
            body {
                height: max-content;
                width: 100vh;
                margin: 0 !important;
                padding: 0 !important;
            }

            @page {
                margin: .1cm !important;
                ;
            }

            body {
                margin: .1cm !important;
            }

            .col-md-2,
            .col-md-3,
            .col-md-4,
            .col-md-6,
            .col-md-8,
            .col-md-12,
            .col-xl-3,
            .col-lg-6,
            .col-12 {
                float: right !important;
            }

            .col-md-3 {
                width: 25%;
            }

            .col-md-4,
            .col-xl-3 {
                width: 33% !important;
            }

            .col-md-12,
            .col-12 {
                width: 100%;
            }

            .card-title {
                color: #000 !important;
                font-weight: bold;
                font-size: 16px !important;
            }

            .card-header {
                padding: 0 !important;
            }
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card hideprint">
        <div class="card-header ">
            <form id="myForm" action="" method="get">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group ">
                            <input placeholder="الفترة من" autocomplete="off" style="direction: rtl;" id="fromdate"
                                name="fromdate" value="<?php echo e(request()->fromdate); ?>" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input placeholder="الفترة إلى" autocomplete="off" style="direction: rtl;" id="todate"
                                name="todate" value="<?php echo e(request()->todate); ?>" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary ">بحث</button>
                        <button onclick="setAllEmpty()" type="button" class="btn btn-warning ">إعادة تعيين</button>
                    </div>
                </div>
            </form>
            <button onclick="window.print()" type="button" class="btn btn-success pull-left "><i class="fa fa-print">
                    طباعه</i></button>
        </div>
    </div>
    <div class="card hideprint">
        <div class="card-header ">
            <h3>المرفقات
                <a style="margin-right: 10px" class="remoteModal btn btn-primary btn-sm"
                    href="<?php echo e(routeHelper('customers.edit', $row)); ?>?upload=1"><i class="fa fa-plus"></i></a>
            </h3>
        </div>
        <div class="card-content">
            <?php if(isset($row)): ?>
                <div class="row">
                    <?php $__currentLoopData = $row->getMedia('attachments'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div style="padding: 30px" class="col-md-3">
                            <?php
                                $filepath = $file->getUrl();
                                $extension = $file->mime_type;
                            ?>
                            <?php if(in_array($extension, ['image/jpeg', 'image/png'])): ?>
                                <img src="<?php echo e($filepath); ?>" loading="lazy" alt="dfewds"
                                    class="cursor-pointer preview-modal-image " data-toggle="tooltip" title="عرض الصورة"
                                    width="200px">
                            <?php else: ?>
                                <a target="_blank" href="<?php echo e($filepath); ?>" class="btn btn-sm btn-warning">View </a>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h1><?php echo e(setting('site_name')); ?></h1>
                    <h1><?php echo e(setting('address') ?? 'المنزلة - الدقهلية'); ?></h1>
                    <h1><?php echo e(setting('mobile') ?? '01273335777'); ?></h1>
                </div>
                <div class="col-md-6">
                    <img style="float:left;width: 200px;margin-left: 25px;" src="/<?php echo e(setting('logo')); ?>" />
                </div>
            </div>
        </div>
    </div>
    <div class="card ">
        <div class="card-header ">
            <h3>
                <?php echo e($row->name); ?>

            </h3>
        </div>
        <?php
            //$orders=$row->total_orders;
            $fees = $row->total_fees;
            $collections = $row->total_collections;
            $due = $fees - $collections;
        ?>
        <div class="card-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="success"><?php echo e($fees); ?></h3>
                                        <h6>إجمالي الرسوم</h6>
                                    </div>
                                    <div>
                                        <i class="fas fa-file-invoice success font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo e(route('dashboard.fees.index')); ?>?customer_id=<?php echo e($row->id); ?>"
                                class="btn btn-sm btn-success btn-block mt-1">
                                <i class="fa fa-eye"></i> <b> التفاصيل</b>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="warning"><?php echo e($collections); ?></h3>
                                        <h6>إجمالي التحصيلات</h6>
                                    </div>
                                    <div>
                                        <i class="fas fa-money-bill warning font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo e(route('dashboard.collections.index')); ?>?customer_id=<?php echo e($row->id); ?>"
                                class="btn btn-sm btn-warning btn-block mt-1">
                                <i class="fa fa-eye"></i> <b> التفاصيل</b>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="danger"><?php echo e($due); ?></h3>
                                        <h6>المتبقي</h6>
                                    </div>
                                    <div>
                                        <i class="fas fa-money-bill danger font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo e(route('dashboard.orders.index')); ?>?customer_id=<?php echo e($row->id); ?>"
                                class="btn btn-sm btn-danger btn-block mt-1">
                                <i class="fa fa-eye"></i> <b> التفاصيل</b>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="card">
        <div class="card-header bg-danger white">
            <h4 class="card-title white">
                الرسوم
            </h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>رقم الطلب</th>
                            <th>التاريخ</th>
                            <th>البيان</th>
                            <th>السعر</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $row->fees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($reco->order_id); ?></td>
                                <td><?php echo e($reco->created_at->format('Y-m-d')); ?></td>
                                <td><?php echo e($reco->title); ?></td>
                                <td><?php echo e($reco->customer_value); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header bg-success white">
            <h4 class="card-title white">
                التحصيلات
            </h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>رقم الطلب</th>
                            <th>التاريخ</th>
                            <th>البيان</th>
                            <th>السعر</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $row->collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($reco->order_id); ?></td>
                                <td><?php echo e($reco->created_at->format('Y-m-d')); ?></td>
                                <td><?php echo e($reco->title); ?></td>
                                <td><?php echo e($reco->value); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-info white">
            <h4 class="card-title white">
                التعاقدات
            </h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>رقم الطلب</th>
                            <th>التاريخ</th>
                            <th>نوع الطلب</th>
                            <th>الحالة</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $row->orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($reco->id); ?></td>
                                <td><?php echo e($reco->created_date); ?></td>
                                <td><?php echo e($reco->type); ?></td>
                                <td><?php echo e(optional($reco->status)->name); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php if (! $__env->hasRenderedOnce('d717861c-7d41-4e37-800f-d94bd04e4d47')): $__env->markAsRenderedOnce('d717861c-7d41-4e37-800f-d94bd04e4d47'); ?>
    <?php $__env->startPush('script'); ?>
        <script>
            function setAllEmpty() {
                var inputs = document.getElementsByTagName("input");
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].value = "";
                }
            }
        </script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dftrecom/elansari.dftre.com/resources/views/backend/customers/show.blade.php ENDPATH**/ ?>