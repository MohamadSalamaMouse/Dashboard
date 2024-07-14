<?php $__env->startSection('title', __('Users')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('View')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('View')); ?></li>
        </ul>

        <div class="float-end">
            <div class="d-flex align-items-center">
                <a href="<?php echo e(route('grid.view')); ?>" data-bs-toggle="tooltip" title="<?php echo e(__('List View')); ?>"
                    class="btn btn-sm btn-primary" data-bs-placement="bottom">
                    <i class="ti ti-list"></i>
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-3 col-lg-4 col-me-6 col-sm-6 col-12 d-flex">
                        <div class="text-center text-white card w-100 h-100">
                            <div class="pb-0 border-0 card-header">
                                <div class="d-flex align-items-center">
                                    <span class="p-2 px-3 rounded badge bg-primary"><?php echo e($user->type); ?></span>
                                </div>
                                <div class="card-header-right">
                                    <div class="btn-group card-option">
                                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-user')): ?>
                                                <a class="dropdown-item" href="javascript:void(0);" id="edit-user"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    data-bs-original-title="<?php echo e(__('Edit')); ?>"
                                                    data-url="<?php echo e(route('users.edit', $user->id)); ?>"><i class="ti ti-edit"></i>
                                                    <span><?php echo e(__('Edit')); ?></span></a>
                                            <?php endif; ?>


                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('impersonate-user')): ?>
                                                <a class="dropdown-item" target="_new"
                                                    href="<?php echo e(route('users.impersonate', $user->id)); ?>" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" data-bs-original-title="<?php echo e(__('Impersonate')); ?>"
                                                    aria-label="<?php echo e(__('Impersonate')); ?>">
                                                    <i class="ti ti-new-section"><span
                                                            class="font-fmaily"><?php echo e(__('Impersonate')); ?></span></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-user')): ?>
                                                <?php echo Form::open([
                                                    'method' => 'DELETE',
                                                    'route' => ['users.destroy', $user->id],
                                                    'id' => 'delete-form-' . $user->id,
                                                    'class' => 'd-inline',
                                                ]); ?>

                                                <a href="#" class="dropdown-item show_confirm"
                                                    id="delete-form-<?php echo e($user->id); ?>" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" data-bs-original-title="<?php echo e(__('Delete')); ?>"><i
                                                        class="mr-0 ti ti-trash"></i><span>Delete</span></a>
                                                <?php echo Form::close(); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <img src="<?php echo e(Storage::exists(Auth::user()->avatar) ? Storage::url(Auth::user()->avatar) : Auth::user()->avatar_image); ?>"
                                    alt="user-image" width="100px" class="rounded-circle">
                                <h4 class="mt-2 text-dark"><?php echo e($user->name); ?></h4>
                                <small class="text-dark"><?php echo e($user->email); ?></small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="col-xl-3 col-lg-4 col-me-6 col-sm-6 col-12 d-flex create-grid-user">
                    <a class="btn-addnew-project h-100 w-100 add_user">
                        <div class="bg-primary add_user proj-add-icon">
                            <i class="ti ti-plus"></i>
                        </div>
                        <h6 class="mt-4 mb-2"><?php echo e(__('New User')); ?></h6>
                        <p class="text-center text-muted"><?php echo e(__('Click here to add new User')); ?></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('assets/js/plugins/choices.min.js')); ?>"></script>
    <script>
        $(function() {
            $('body').on('click', '.add_user', function() {
                var modal = $('#common_modal');
                $.ajax({
                    type: "GET",
                    url: '<?php echo e(route('users.create')); ?>',
                    data: {},
                    success: function(response) {
                        modal.find('.modal-title').html('<?php echo e(__('Create User')); ?>');
                        modal.find('.body').html(response.html);
                        modal.modal('show');
                        var multipleCancelButton = new Choices('#roles', {
                            removeItemButton: true,
                        });
                        var multipleCancelButton = new Choices('#country_code', {
                            removeItemButton: true,
                        });
                    },
                    error: function(error) {}
                });
            });

            $('body').on('click', '#edit-user', function() {
                var action = $(this).attr('data-url');
                var modal = $('#common_modal');
                $.get(action, function(response) {
                    modal.find('.modal-title').html('<?php echo e(__('Edit User')); ?>');
                    modal.find('.body').html(response.html);
                    modal.modal('show');
                    var multipleCancelButton = new Choices('#roles', {
                        removeItemButton: true,
                    });
                    var multipleCancelButton = new Choices('#country_code', {
                        removeItemButton: true,
                    });
                })
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/back/users/grid-view.blade.php ENDPATH**/ ?>