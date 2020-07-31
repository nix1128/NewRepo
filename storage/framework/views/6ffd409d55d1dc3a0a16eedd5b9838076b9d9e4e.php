<?php $__env->startSection('title','Get Page'); ?>







<?php $__empty_1 = true; $__currentLoopData = $name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <li><?php echo e($user); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p>No users</p>
<?php endif; ?>





<?php echo $__env->make('frontview.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\blog\resources\views/frontview/getcontroller.blade.php ENDPATH**/ ?>