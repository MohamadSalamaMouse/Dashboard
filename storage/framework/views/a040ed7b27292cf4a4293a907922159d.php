<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-category')): ?>
    <a class="btn btn-sm small btn btn-primary" href="<?php echo e(route('gallery-category.edit', $category->id)); ?>" data-bs-toggle="tooltip"
        data-bs-placement="bottom" data-bs-original-title="<?php echo e(__('Edit')); ?>">
        <i class="ti ti-edit text-white"></i>
    </a>
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-category')): ?>
    <?php echo Form::open([
        'method' => 'DELETE',
        'class' => 'd-inline',
        'route' => ['gallery-category.destroy', $category->id],
        'id' => 'delete-form-' . $category->id,
    ]); ?>

    <a href="#" class="btn btn-sm small btn btn-danger show_confirm" data-bs-toggle="tooltip" data-bs-placement="bottom"
        id="delete-form-1" data-bs-original-title="<?php echo e(__('Delete')); ?>">
        <i class="ti ti-trash text-white"></i>
    </a>
    <?php echo Form::close(); ?>

<?php endif; ?>
<?php /**PATH D:\company\backend\resources\views/back/gallery-category/action.blade.php ENDPATH**/ ?>