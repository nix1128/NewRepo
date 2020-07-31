<?php $__env->startSection('title','Nix Page'); ?>




  <?php $__currentLoopData = $header; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <p>This is 1st loop <?php echo e($v); ?></p>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<hr>






<?php echo $__env->make('frontview.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\blog\resources\views/bladeView.blade.php ENDPATH**/ ?>