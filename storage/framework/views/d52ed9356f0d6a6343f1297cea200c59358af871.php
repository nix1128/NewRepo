<?php $__env->startSection('title'); ?>
    Home
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<h2>Welcome to Home page</h2>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('name'); ?>
    <?php echo e($username); ?>



    


    
        
             
    
        
             
   
        
             

<?php $__env->stopSection(); ?>




<?php echo $__env->make('frontview.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontview.layouts.userView', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\blog\resources\views/frontview/layouts/home.blade.php ENDPATH**/ ?>