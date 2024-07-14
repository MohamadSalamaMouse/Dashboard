
<?php $__env->startSection('title', __('Contact_us')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Contact_us')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('Contact_us')); ?></li>
        </ul>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <div id="users-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                            <div class="dataTable-container">
                                <div class="col-sm-12">
                                    <table class="table dataTable no-footer" id="users-table" width="100%" role="grid" aria-describedby="users-table_info" style="width: 100%;">
                                        <thead>
                                        <tr role="row">
                                            <th title="Name" ><?php echo e(__('full_name')); ?></th>
                                            <th title="Email"><?php echo e(__('company_name')); ?></th>
                                            <th title="Role"><?php echo e(__('Phone')); ?></th>
                                            <th title="Role"><?php echo e(__('service')); ?></th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $contact_us; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo e($contact->full_name); ?></td>
                                                <td><?php echo e($contact->company_name); ?></td>
                                                <td><?php echo e($contact->phone); ?></td>
                                                <td><?php echo e($contact->service); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>
                    </div>
                    <?php echo e($contact_us->links()); ?>


                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <?php echo $__env->make('layouts.includes.datatable-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\Users\pc\Downloads\Dashboard_Project\resources\views/back/contact_us/index.blade.php ENDPATH**/ ?>