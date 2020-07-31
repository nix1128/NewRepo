<?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <p><b><?php echo e($post->title); ?></b></p>
                        <p>
                            <?php echo e($post->body); ?>

                        </p>
                        <hr />
                        <h4>Add comment</h4>
                        <form method="post" action="<?php echo e(route('comment.add')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <input type="text" name="comment_body" class="form-control" />
                                <input type="hidden" name="post_id" value="<?php echo e($post->id); ?>" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-warning" value="Add Comment" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php /**PATH C:\xampp\Laravel\blog\resources\views/posts/update.blade.php ENDPATH**/ ?>