<?php $__env->startSection('title', 'Create client'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('edit client')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('customer.index')); ?>"><?php echo e(__('clients')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('edit client')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="section-body">
            <div class="m-auto col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5> <?php echo e(__('edit client')); ?></h5>
                    </div>
                    <?php echo Form::open([
                        'route' => ['customer.update', 'client' => $client->id], // Adding 'id' => $client->id to pass the ID
                        'method' => 'post',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]); ?>

                    <div class="card-body">
                        <div class="row">


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('Name', __('Name'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::text('name', $client->name, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Name'),
                                        'required' => 'required',
                                    ]); ?>

                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('Cover', __('cover'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::file('cover', ['class' => 'form-control']); ?>

                                    <?php if(isset($client->cover)): ?>
                                        <img src="<?php echo e(Illuminate\Support\Facades\Storage::url($client->cover)); ?>"
                                            width="100" height="100" alt="" class="mt-2">
                                    <?php endif; ?>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('body', __('Description'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::textarea('description', $client->description, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter description'),
                                    ]); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="mb-3 btn-flt float-end">
                            <?php echo Html::link(route('customer.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                            <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('assets/js/plugins/choices.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/ckeditor/ckeditor.js')); ?>"></script>
    <script>
        CKEDITOR.replace('body', {
            filebrowserUploadUrl: "<?php echo e(route('ckeditor.upload', ['_token' => csrf_token()])); ?>",
            filebrowserUploadMethod: 'form'
        });
        document.addEventListener('DOMContentLoaded', function() {
            var genericExamples = document.querySelectorAll('[data-trigger]');
            for (i = 0; i < genericExamples.length; ++i) {
                var element = genericExamples[i];
                new Choices(element, {
                    placeholderValue: 'This is a placeholder set in the config',
                    searchPlaceholderValue: 'This is a search placeholder',
                });
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/client/edit.blade.php ENDPATH**/ ?>