<?php $__env->startSection('title', __('Landing Page')); ?>
<?php $__env->startSection('breadcrumb'); ?>
<div class="col-md-12">
    <div class="page-header-title">
        <h4 class="m-b-10"><?php echo e(__('Feature Settings')); ?></h4>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><?php echo Html::link(route('home'),__('Dashboard'),['']); ?></li>
        <li class="breadcrumb-item"><?php echo e(__('Feature Settings')); ?></li>
    </ul>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="menu-setting" role="tabpanel"
                                aria-labelledby="landing-menu-setting">
                                <?php echo Form::open([
                                    'route' => ['landing.feature.store'],
                                    'method' => 'Post',
                                    'id' => 'froentend-form',
                                    'data-validate',
                                    'no-validate',
                                ]); ?>

                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <h5 class="mb-0"><?php echo e(__('Feature Setting')); ?></h5>
                                        </div>
                                        <div class="col-lg-4 d-flex justify-content-end">
                                            <div class="form-switch custom-switch-v1 d-inline-block">
                                                <?php echo Form::checkbox(
                                                    'feature_setting_enable',
                                                    null,
                                                    Utility::getsettings('feature_setting_enable') == 'on' ? true : false,
                                                    [
                                                        'class' => 'custom-control custom-switch form-check-input input-primary',
                                                        'id' => 'featureSettingEnableBtn',
                                                        'data-onstyle' => 'primary',
                                                        'data-toggle' => 'switchbutton',
                                                    ],
                                                ); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('feature_name', __('Feature Name'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('feature_name', Utility::getsettings('feature_name'), [
                                                    'class' => 'form-control',
                                                    'rows' => '1',
                                                    'placeholder' => __('Enter feature name'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('feature_bold_name', __('Feature Bold Name'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('feature_bold_name', Utility::getsettings('feature_bold_name'), [
                                                    'class' => 'form-control',
                                                    'rows' => '3',
                                                    'placeholder' => __('Enter feature bold Name'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('feature_detail', __('Feature Detail'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::textarea('feature_detail', Utility::getsettings('feature_detail'), [
                                                    'class' => 'form-control',
                                                    'rows' => '3',
                                                    'placeholder' => __('Enter feature detail'),
                                                ]); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-end">
                                        <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

                                    </div>
                                </div>
                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h5><?php echo e(__('Feature')); ?></h5>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 justify-content-end d-flex">
                                    <a href="javascript:void(0);" data-url="<?php echo e(route('feature.create')); ?>"
                                        data-ajax-popup="true" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        class="btn btn-sm btn-primary mx-1 feature-create"
                                        data-bs-original-title="<?php echo e(__('Create')); ?>">
                                        <i class="ti ti-plus text-light"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><?php echo e(__('Name')); ?></th>
                                            <th><?php echo e(__('Bold Text')); ?></th>
                                            <th><?php echo e(__('Action')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(is_array($featureSettings) || is_object($featureSettings)): ?>
                                            <?php
                                                $ff_no = 1;
                                            ?>
                                            <?php $__currentLoopData = $featureSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $featureSetting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($ff_no++); ?></td>
                                                    <td><?php echo e($featureSetting['feature_name']); ?></td>
                                                    <td><?php echo e($featureSetting['feature_bold_name']); ?></td>
                                                    <td>
                                                        <span>
                                                            <a href="javascript:void(0);"
                                                                data-url="<?php echo e(route('feature.edit', $key)); ?>"
                                                                data-ajax-popup="true" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                class="btn btn-sm btn-primary mx-1 feature-edit"
                                                                data-bs-original-title="<?php echo e(__('Create')); ?>">
                                                                <i class="ti ti-pencil text-light"></i>
                                                            </a>
                                                            <?php echo Form::open([
                                                                'method' => 'DELETE',
                                                                'class' => 'd-inline',
                                                                'route' => ['feature.delete', $key],
                                                                'id' => 'delete-form-' . $key,
                                                            ]); ?>

                                                            <a href="javascript:void(0);" class="btn btn-sm small btn btn-danger show_confirm" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom" id="delete-form-1" data-bs-original-title="<?php echo e(__('Delete')); ?>">
                                                                <i class="ti ti-trash text-white"></i>
                                                            </a>
                                                            <?php echo Form::close(); ?>

                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/bootstrap-switch-button.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('assets/js/plugins/bootstrap-switch-button.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('body').on('click', '.feature-create', function() {
                var action = $(this).data('url');
                var modal = $('#common_modal');
                $.get(action, function(response) {
                    modal.find('.modal-title').html('<?php echo e(__('Create Feature')); ?>');
                    modal.find('.body').html(response);
                    modal.modal('show');
                })
            });
        });
        $(document).ready(function() {
            $('body').on('click', '.feature-edit', function() {
                var action = $(this).data('url');
                var modal = $('#common_modal');
                $.get(action, function(response) {
                    modal.find('.modal-title').html('<?php echo e(__('Edit Feature')); ?>');
                    modal.find('.body').html(response);
                    modal.modal('show');
                })
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/feature/index.blade.php ENDPATH**/ ?>