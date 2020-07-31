<?php $__env->startSection('welcome'); ?>
    <?php echo e(csrf_field()); ?>

    <form method="POST" action="/misc/show">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Create Post</div>
                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    <?php echo csrf_field(); ?>
                                    <label class="label">Post Title: </label>
                                    <input type="text" name="title" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label class="label">Post Body: </label>
                                    <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontview.layouts.welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\blog\resources\views/posts/index.blade.php ENDPATH**/ ?>