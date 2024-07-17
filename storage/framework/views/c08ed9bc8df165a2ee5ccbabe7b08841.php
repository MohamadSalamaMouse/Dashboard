


<?php $__env->startSection('content'); ?>
    <section id="blog" class="w-100 mt-0 p-1 overflow-hidden">
        <div class="container-fluid">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    Blog
                </h1>
                <small class="content-section__description fs-6">HOME / BLOG</small>
            </div>
            <div style="background-color: #191919" class="blog-content m-5 p-5 ms-0 ps-0 me-0 pe-0">
                <div class="container">
                    <div class="row gy-4">
                        <?php if(isset($allBlogs)): ?>
                        <?php $__currentLoopData = $allBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                            <div style="min-height: 345px" class="card p-5">
                                <div class="card-body">
                                    <p class="w-75 fs-6 content-section__subtitle ui heading size-headingmd">
                                        <?php echo e($blog->category->getTranslation('name', app()->getLocale())); ?>: <?php echo e($blog->getTranslation('title', app()->getLocale())); ?>

                                    </p>
                                    <br>
                                    <div style="height: 3px" class="section__divider"></div>
                                    <br>
                                    <p class="w-100 fs-6 content-section__description"><?php echo e($blog->getTranslation('short_description', app()->getLocale())); ?></p>
                                    <br>
                                    <p>Learn more <span class="arrow">→</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>



                    </div>
                </div>
            </div>
        </div>
        
        
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/blog/view-all-blogs.blade.php ENDPATH**/ ?>