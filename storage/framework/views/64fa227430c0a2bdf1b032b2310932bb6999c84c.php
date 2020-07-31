<?php $__env->startSection('title'); ?>
    Other
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<h2>Лични колони</h2>
<?php $__currentLoopData = $others; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container">
        <article class="row single-post mt-5 no-gutters">
            <div class="col-md-6">
                <div class="image-wrapper float-left pr-3">
                    <img src="https://placeimg.com/150/150/animals" alt="">
                </div>
                <div class="single-post-content-wrapper p-3">

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ad, ex eaque fuga minus reprehenderit asperiores earum incidunt. Possimus maiores dolores voluptatum enim soluta omnis debitis quam ab nemo necessitatibus.

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ad, ex eaque fuga minus reprehenderit asperiores earum incidunt. Possimus maiores dolores voluptatum enim soluta omnis debitis quam ab nemo necessitatibus.
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ad, ex eaque fuga minus reprehenderit asperiores earum incidunt. Possimus maiores dolores voluptatum enim soluta omnis debitis quam ab nemo necessitatibus.

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ad, ex eaque fuga minus reprehenderit asperiores earum incidunt. Possimus maiores dolores voluptatum enim soluta omnis debitis quam ab nemo necessitatibus.

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ad, ex eaque fuga minus reprehenderit asperiores earum incidunt. Possimus maiores dolores voluptatum enim soluta omnis debitis quam ab nemo necessitatibus.
                </div>
            </div>
        </article>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('name'); ?>
    <?php echo e($username); ?>

    <?php if(isset($profileImage->card->image)): ?>
        <img src="<?php echo e(asset('storage/'.$profileImage->card->image)); ?> "  class="img-fluid border border-warning" alt="" height="20" width="20" >
    <?php elseif($user->sex == 1): ?>
        <img src="<?php echo e(asset('storage/avatars/male.jpeg')); ?> "  class="img-fluid border border-warning"
             alt="" height="20" width="20" >
    <?php elseif($user->sex == 0): ?>
        <img src="<?php echo e(asset('storage/avatars/female.jpeg')); ?> "  class="img-fluid border border-warning"
             alt="" height="20" width="20" >
    <?php else: ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontview.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontview.layouts.userView', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\blog\resources\views/frontview/layouts/others.blade.php ENDPATH**/ ?>