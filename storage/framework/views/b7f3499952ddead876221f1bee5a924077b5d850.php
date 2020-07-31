<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>
<div class="alert alert-primary" role="alert">

    <?php echo e(csrf_field()); ?>

</div>

<?php echo $__env->yieldContent('welcome'); ?>









</body>
</html><?php /**PATH C:\xampp\Laravel\blog\resources\views/frontview/layouts/welcome.blade.php ENDPATH**/ ?>