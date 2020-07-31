<?php $__env->startSection('welcome'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center text-dark mb-1">Промяна на парола</div>

                    <div class="card-body ">

                        <form method="post" action="<?php echo e(route('resetPassword', [$token = 'token'])); ?>">
                            <?php echo csrf_field(); ?>

                            <div class=" align-content-center  form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <label for="password" class=" col-md-4 control-label">Стара Парола</label>

                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                                <label for="password-confirm" class="col-md-4 control-label ">Нова Парола</label>
                                <div class="col-md-8">
                                    <input id="password-confirm" type="password" class="form-control " name="password_confirmation" required>

                                    <?php if($errors->has('password_confirmation')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">
                                       Изпрати
                                    </button>



                                    <div>
                                        <?php if(session('message')): ?>
                                            <div class = " text mt-2 text-xs text-center"><?php echo e(session('message')); ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontview.layouts.welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\blog\resources\views/emails/view/reset.blade.php ENDPATH**/ ?>