<?php $__env->startSection('title'); ?>
    Manage Blog
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <h3 class="text-primary-emphasis" align="center"><?php echo e(Session::get('msg')); ?></h3><br>
                <table class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <img src="<?php echo e(asset("/$blog->image")); ?>" width="250px" height="120px">
                            </td>
                            <td><?php echo e($blog['title']); ?></td>
                            <td><?php echo e($blog->description); ?></td>
                            <td><?php echo e($blog->created_at); ?></td>
                            <td>
                                <a class="btn btn-primary" href="<?php echo e(route('updateBlog', [$blog->id])); ?>">Update</a>
                                <a class="btn btn-danger" href="<?php echo e(route('deleteBlog', [$blog->id])); ?>">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Batch-21\day-47\CRUD\resources\views/manageBlog.blade.php ENDPATH**/ ?>