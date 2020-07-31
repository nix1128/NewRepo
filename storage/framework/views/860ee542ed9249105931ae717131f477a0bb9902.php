    
    
 


    <?php $__env->startSection('welcome'); ?>

<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="<?php echo e(URL::asset('css/registrationForm.css')); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center text-black-50">Вход</div>

                    <div class="card-body">

                        <form  method="post" action="/login" name ="name">
                            <?php echo csrf_field(); ?>
                            <h6 class="text-center text-xs text-success" ><?php echo e(session('status')); ?></h6>

                            <div class="input-container">
                                <i class="fa fa-at icon"></i>
                                <input class="input-field" type="text" placeholder="Псевдоним" name="username" value="<?php echo e(old('username')); ?>">
                            </div>
                            <div  style="text-align: center;color: #6f1C00;"> <?php echo e($errors -> first('username')); ?></div>

                            <div class="input-container">
                                <i class="fa fa-key icon"></i>
                                <input class="input-field" type="password" placeholder="Парола" name="password"/>

                            </div>
                            <div style="text-align: center;color: #6f1C00;"> <?php echo e($errors -> first('password')); ?></div>

                            <div style="text-align: center;color: #6f1C00;"> <?php echo e($errors->first('')); ?></div>
                            <div style="text-align: center;color: #6f1C00;"> <?php echo e($errors->first('status')); ?></div>

                            <button type="submit" class="btn" >Влез</button>
                            <div>

<hr>
                                <p  style="font-size: 12px; text-align: center;" > <a href="passReset">Забравена Парола</a></p>

                            </div>


                        </form>



                    </div>
                </div>
            </div>
    </body>
<?php $__env->stopSection(); ?>

    <!-- Default form login -->

    <!-- Default form login -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php echo $__env->make('frontview.layouts.welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\blog\resources\views/frontview/layouts/login.blade.php ENDPATH**/ ?>