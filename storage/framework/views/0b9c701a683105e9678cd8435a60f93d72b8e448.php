<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <?php if(session()->has('success')): ?>

        <div class="alert alert-success" role="alert">
            Съобщението е създадено!
        </div>


        <script >

            $(document).ready(function () {

                window.setTimeout(function() {
                    $(".alert-success").fadeTo(1000, 0).slideUp(1000, function(){
                        $(this).remove();
                    });
                }, 2000);

            });
        </script>
    <?php endif; ?>



<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h3>Създай нова тема</h3>

            <form action="/posts/store" method="POST">


                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="form-group has-error">

                    <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <label for="slug" class="text-primary" >Тема</label> <span class="require">*</span> <small>(не се позволява дублиране на теми)</small></label>
                        <input type="text" class="form-control"   name="subject" value="<?php echo e(old('subject')); ?> <?php if(empty($c->subject) ): ?> <?php else: ?><?php echo e($c->subject); ?> <?php endif; ?>"  />
                    <span class="help-block"></span>
                    <?php if($errors->first('subject')): ?>
                        <div>Полето е задължително
                            <label class="text-success"><svg class="bi bi-emoji-smile" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683z"/>
                                <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/></label>
                            </svg>
                        </div>
                        <?php endif; ?>
                </div>




                <div class="form-group">
                    <label for="title"><label class="text-primary">Заглавие</label> <span class="require">*</span></label>
                    <input type="text" class="form-control" name="title"  value="<?php echo e(old('title')); ?> <?php if(empty($c->title)): ?> <?php else: ?><?php echo e($c->title); ?> <?php endif; ?>">
                    <?php if($errors->first('title')): ?>
                        <div>Ами заглавие? <label class="text-warning"><svg class="bi bi-emoji-neutral" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path fill-rule="evenodd" d="M4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
                                    <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                                </svg></label></div>
                        <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="description"  class = "text-primary">Описание</label>
                    <textarea rows="5" class="form-control"  name="body" value = "<?php echo e(old('body')); ?>"> <?php if(empty($c->body)): ?> <?php else: ?> <?php echo e($c->body); ?> <?php endif; ?></textarea>
                    <?php if($errors->first('body')): ?>
                        <div>Забравихте и описание <label class="text-danger"><svg class="bi bi-emoji-frown" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/>
                                    <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                                </svg></label>
                            </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <p><span class="require text-danger">*</span> - задължителни полета</p>
                </div>

                <div class="form-group">
                    <button type="submit" id="submit" class="btn btn-primary">
                        <a> Създай</a></button>
                    <button class="btn btn-default">
                        <a href="<?php echo e(url()->previous()); ?>">Назад  </a>
                    </button>

                </div>

            </form>




        </div>

    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('name'); ?>
    <?php echo e($name); ?>

    <?php if(isset($profileImage->card->image)): ?>
        <img src="<?php echo e(asset('storage/'.$profileImage->card->image)); ?> "  class="img-fluid" alt="" height="20" width="20" >
    <?php elseif($user->sex == 1): ?>
        <img src="<?php echo e(asset('storage/avatars/male.jpeg')); ?> "  class="img-fluid"
             alt="" height="20" width="20" >
    <?php elseif($user->sex == 0): ?>
        <img src="<?php echo e(asset('storage/avatars/female.jpeg')); ?> "  class="img-fluid"
             alt="" height="20" width="20" >

    <?php else: ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontview.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontview.layouts.userView', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\blog\resources\views/posts/create.blade.php ENDPATH**/ ?>