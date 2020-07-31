<?php $__env->startSection('default_set_image'); ?>
    <label class = "action " >
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-alarm-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.5.5A.5.5 0 0 1 6 0h4a.5.5 0 0 1 0 1H9v1.07a7.002 7.002 0 0 1 3.537 12.26l.817.816a.5.5 0 0 1-.708.708l-.924-.925A6.967 6.967 0 0 1 8 16a6.967 6.967 0 0 1-3.722-1.07l-.924.924a.5.5 0 0 1-.708-.708l.817-.816A7.002 7.002 0 0 1 7 2.07V1H5.999a.5.5 0 0 1-.5-.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1zm-5 4a.5.5 0 0 0-1 0v3.882l-1.447 2.894a.5.5 0 1 0 .894.448l1.5-3A.5.5 0 0 0 8.5 9V5z"/>
        </svg>
        <small> Нямате снимка и ви предложихме наша. </small> </label>
<?php $__env->stopSection(); ?>





<?php $__env->startSection('image'); ?>


    <?php if(isset($profileImage->card->image) ): ?>
        <img src="<?php echo e(asset('storage/'.$user->card->image)); ?> "  class="img-thumbnail border border-info" alt=""  >
    <?php elseif($user->sex == 1): ?>
        <img src="<?php echo e(asset('storage/avatars/male.jpeg')); ?> "  class="img-fluid border border-info"
             alt="" height="180" width="180" >
        <p> <?php echo $__env->yieldContent('default_set_image'); ?></p>
    <?php elseif($user->sex == 0): ?>
        <img src="<?php echo e(asset('storage/avatars/female.jpeg')); ?> "  class="img-fluid border border-info"
             alt="" height="180" width="180" >
        <label> <?php echo $__env->yieldContent('default_set_image'); ?></label>

        <?php endif; ?>
<?php $__env->stopSection(); ?>







<?php $__env->startSection('profileImage'); ?>
    <?php if(isset($profileImage->card->image)): ?>
        <img src="<?php echo e(asset('storage/'.$profileImage->card->image)); ?> "  class="img-fluid border border-info" alt="" height="20" width="20" >

    <?php elseif($user->sex == 1): ?>
        <img src="<?php echo e(asset('storage/avatars/male.jpeg')); ?> "  class="img-fluid border border-warning"
             alt="" height="20" width="20" >

    <?php elseif($user->sex == 0): ?>
        <img src="<?php echo e(asset('storage/avatars/female.jpeg')); ?> "  class="img-fluid border border-warning"
             alt="" height="20" width="20" >
    <?php else: ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div >
        <?php if(session()->has('message')): ?>
            <div class="alert alert-success alert-dismissible fade show">
                <div class = "alert-success">Промените са запазени</div>
                <strong> <?php echo e(session()->get('message')); ?></strong>
            </div>

    </div>


    <?php endif; ?>
    
    <script>
            $(document).ready(function () {
                window.setTimeout(function() {
                    $(".action").fadeTo(1000, 0).slideUp(1000, function(){
                        $(this).remove();
                    });
                }, 1112000);
            });

        $(document).ready(function () {
            window.setTimeout(function() {
                $(".alert-success").fadeTo(1000, 0).slideUp(1000, function(){
                    $(this).remove();
                });
            }, 2000);
        });

    </script>



    <form enctype ="multipart/form-data" class = "pb2  " method="POST" name = 'profile' action=''  >
        <h4 >Здравей, <?php echo e($username); ?> </h4>
        <?php echo $__env->yieldContent('image'); ?>

        <br>
        <label  >

                <a href="<?php echo e(action('userController\\profileEdit@delete', $user->card->image )); ?>"
                   class=" btn-sm "> <span class = "text-danger">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-arrow-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
                            <path fill-rule="evenodd" d="M4.646 8.146a.5.5 0 0 1 .708 0L8 10.793l2.646-2.647a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0v-6A.5.5 0 0 1 8 4z"/>
                        </svg>
                       премахни</span>

                </a>
                    <span class='label label-info' id="upload-file-info"></span>

            <a  for="my-file-selector">
                <input id="my-file-selector" type="file" style="display:none" name = "image"
                       onchange="$('#upload-file-info').html(this.files[0].name)">
               <span class = "text-primary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                       <path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
                       <path fill-rule="evenodd" d="M4.646 7.854a.5.5 0 0 0 .708 0L8 5.207l2.646 2.647a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 0 0 0 .708z"/>
                       <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 0 .5.5z"/>
                   </svg>
                   прикачи</span>
            <span class='label label-info' id="upload-file-info"></span>

            </a>
        </label>



        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        

        <div class="form-row py-2   ">

            <div class="form-group col-md-6 ">
                <label  for="validationServer01">Поща</label>
                <input type="Email" class="form-control " name = "Email" id="inputEmail4"
                       value="<?php echo e($user->Email); ?>"
                       placeholder="<?php echo e($user->Email); ?>">
            </div>



            <div class="form-group  col-md-6">
                <label for="inputAddress">Професия</label>
                <input type="text" class="form-control" name = "Address" value="<?php echo e($user->card->adr); ?>" id="inputAddress" placeholder="">
                
                    
                
            </div>

        </div>

        

        
        <div class="form-row">
            <div class="form-group  col-md-6">
                <label for="inputAddress 1">Телефон</label>
                <input class="form-control" type= 'tel' name = 'tel' value="<?php echo e($user->phone['phone']); ?>"
                       placeholder="<?php echo e($user->phone['phone']); ?>"
                       id="example-tel-input" >

                <?php if($errors -> first('tel')): ?>
                    <li class="text-danger" >Невалиден телефон </li>
                <?php endif; ?>
            </div>
            <div class="form-group  col-md-6">
            <label for="inputAddress">Адрес</label>
            <input type="text" class="form-control" name = "Address" value="<?php echo e($user->card->adr); ?>" id="inputAddress" placeholder="Снежанка 2">
            <?php if($errors -> first('Address')): ?>
                <li class="text-danger" >Неправилен адрес</li>
            <?php endif; ?>
        </div>

        </div>
        

        <div class="form-row ">
            <div class="form-group col-md-6">
                <label for="inputCity">Град</label><input type="text" class="form-control" name=" town" id="inputCity"
                value="<?php echo e($user->card->city); ?>"  >

               </div>

            <div class="form-group col-md-6" >
                <label for="inputCity">Квартал</label><input type="text" class="form-control" name = "kvar"  id="inputCity"
                value="<?php echo e($user->card->kvar); ?>">
               </div>
            </div>

            

        <div  class= "py-2 text-danger">

        </div>





        

        
            
                   
            
        
        



        <div  class="text-danger">
            <br>
            <button type="submit" class="btn btn-outline-primary">Запази промените</button>

        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
          Изтрий профила
        </button>



        <!-- Modal триене на профил-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-md-center" id="exampleModalLabel">Изтриване на профила на:
                      <p class="text-primary text-center " ><?php echo e($username); ?></p></h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body text-dark">
                        Сигурен ли сте,че искате да изтриете всички свои данни и съобщения?
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Опa, НЕ!</button>
                        <a href="<?php echo e(action('userController\\profileEdit@profile_delete')); ?>"
                                class="btn btn-danger">Да, махам се!</a>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </form>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('name'); ?>
    <?php echo e($username); ?>


    <?php echo $__env->yieldContent('profileImage'); ?>

<?php $__env->stopSection(); ?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<?php echo $__env->make('frontview.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontview.layouts.userView', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\blog\resources\views/frontview/layouts/profile.blade.php ENDPATH**/ ?>