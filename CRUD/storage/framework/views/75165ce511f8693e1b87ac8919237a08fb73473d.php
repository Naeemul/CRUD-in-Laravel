<?php $__env->startSection('title'); ?>
    Update Blog
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 offset-md-2 ">
                    <form action="<?php echo e(route('updateBlogComplete', [$blog->id])); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="title" class="form-label text-primary-emphasis fs-4">Title*</label>
                            <input class="form-control" type="text" name="title" id="title" value="<?php echo e($blog->title); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label text-primary-emphasis fs-4">Description*</label>
                            <input class="form-control" type="text" name="description" id="description" value="<?php echo e($blog->description); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label text-primary-emphasis fs-4">Image*</label><br>
                            <img src="<?php echo e(asset("/$blog->image")); ?>" width="250px" height="120px" >
                            <input class="form-control" type="file" name="image" id="image" value="<?php echo e($blog->image); ?>" required>
                        </div>
                        <br>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Batch-21\day-47\Project\resources\views/updateBlog.blade.php ENDPATH**/ ?>