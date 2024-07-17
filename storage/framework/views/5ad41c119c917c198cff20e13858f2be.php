<?php $__env->startSection('title', __('Edit Leadership')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Edit Leadership')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), ['']); ?></li>
            <li class="breadcrumb-item"><?php echo Html::link(route('leadership.index'), __('Leadership'), ['']); ?></li>
            <li class="breadcrumb-item"><?php echo e(__('Edit Leadership')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="section-body">
            <div class="col-md-6 m-auto">
                <div class="card ">
                    <div class="card-header">
                        <h5> <?php echo e(__('Edit Leadership')); ?></h5>
                    </div>
                    <?php echo Form::model($leadership, [
                        'route' => ['leadership.update', $leadership->id],
                        'method' => 'post',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]); ?>



                    <div class="card-body">
                        <div class="row">



                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('name', __('Name'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::text('name', null, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Name'),
                                        'required' => 'required',
                                    ]); ?>

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('position', __('position'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::text('position', null, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Position'),
                                        'required' => 'required',
                                    ]); ?>

                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('photo', __('Photo'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::file('photo', ['class' => 'form-control']); ?>

                                    <?php if(isset($leadership->photo)): ?>
                                        <img src="<?php echo e(Illuminate\Support\Facades\Storage::url($leadership->photo)); ?>"
                                            width="100" height="100" alt="" class="mt-2">
                                    <?php endif; ?>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('bio', __('Bio'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::textarea('bio', null, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter Bio'),
                                    ]); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-flt float-end mb-3">
                            <?php echo Html::link(route('leadership.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                            <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <link href="<?php echo e(asset('vendor/jqueryform/css/jquery.rateyo.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('vendor/jqueryform/js/jquery.rateyo.min.js')); ?>"></script>
    <script>
        var $starRating = $('.starRating');
        if ($starRating.length) {
            $starRating.each(function() {
                var val = $(this).attr('data-value');
                var num_of_star = $(this).attr('data-num_of_star');
                $(this).rateYo({
                    rating: val,
                    halfStar: true,
                    numStars: num_of_star,
                    precision: 2,
                    onSet: function(rating, rateYoInstance) {
                        num_of_star = $(rateYoInstance.node).attr('data-num_of_star');
                        var input = ($(rateYoInstance.node).attr('id'));
                        if (num_of_star == 10) {
                            rating = rating * 2;
                        }
                        $('input[name="' + input + '"]').val(rating);
                    }
                })
            });
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/leadrship/edit.blade.php ENDPATH**/ ?>