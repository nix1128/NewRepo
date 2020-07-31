<?php $__env->startSection('title'); ?>
    About
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h2>За нас</h2>
    <?php $__currentLoopData = $about; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <li><?php echo e($v); ?></li>



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
<?php echo $__env->make('frontview.layouts.userView', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\blog\resources\views/frontview/layouts/about.blade.php ENDPATH**/ ?>