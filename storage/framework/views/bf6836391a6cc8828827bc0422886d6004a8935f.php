<head>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>



<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">







<link href="<?php echo e((asset(('css/misc.css')))); ?>">

<script src ="<?php echo e(mix('js/app.js')); ?>" defer></script>
<link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">

<?php $__env->startSection('title'); ?>
    Misc
<?php $__env->stopSection(); ?>

<?php if(session()->has('deleted')): ?>

<?php endif; ?>


<?php $__env->startSection('content'); ?>

    <?php $__currentLoopData = $misc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



        
            
            
            
            
        

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <h2 >Предложения</h2>

    <p>

    
    <form  method="get" id ="create" action="posts/create">
        <?php echo csrf_field(); ?>
        <input name="create" type="hidden" value="create"/>
        <button  form = "create" type="submit">Create Post</button>
    </form>

    <div class="row container">
        <div class="col">





                    
                        
                            
                                
                                    
                                        
                                    
                                
                            
                            
                                
                                    
                                
                            
                        
                        
                            
                                
                                    
                                        
                                    
                                
                            
                            
                                
                                    
                                
                            
                        
                        
                            
                                
                                    
                                        
                                    
                                
                            
                            
                                
                                    
                                
                            
                        
                        
                            
                                
                                    
                                        
                                    
                                
                            
                            
                                
                                    
                                
                            
                        
                    

            


            <?php if(session()->has('deleted')): ?>
                <div class="alert alert-warning" role="alert">
                Коментара е изтрит
            </div>
<?php endif; ?>

            <?php if(session()->has('added')): ?>
                <div class="alert alert-success" role="alert">
                    Добавихте коментар!
                </div>
               <?php endif; ?>
            <?php if(session()->has('wrong_user')): ?>
                <div class="alert alert-danger" role="alert">
                    Не можете да триете чужд коментар
                </div>
                <?php endif; ?>

            <?php if(session()->has('post_edit_error')): ?>
                <div class="alert alert-danger" role="alert">
                    Това е чужд пост!
                    </div>
                <?php endif; ?>



            <script >

                $(document).ready(function () {

                    window.setTimeout(function() {
                        $(".alert-success").fadeTo(1000, 0).slideUp(1000, function(){
                            $(this).remove();
                        });
                    }, 2000);

                });

                $(document).ready(function () {

                    window.setTimeout(function() {
                        $(".alert-warning").fadeTo(1000, 0).slideUp(1000, function(){
                            $(this).remove();
                        });
                    }, 2000);

                });

                $(document).ready(function () {

                    window.setTimeout(function() {
                        $(".alert-danger").fadeTo(1000, 0).slideUp(1000, function(){
                            $(this).remove();
                        });
                    }, 2000);

                });

                $(document).ready(function () {

                    window.setTimeout(function() {
                        $(".alert-danger").fadeTo(1000, 0).slideUp(1000, function(){
                            $(this).remove();
                        });
                    }, 2000);

                });


            </script>

            


            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <?php if(is_null($v->title) ): ?>
                    <div>No posts yet</div>
                            <?php else: ?>


                        <div class="row post-detail container">

                            <div class="col-lg-12 col-sm-12 col-12">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img src="https://dummyimage.com/20x20/a8a1a8/0f0f12" class="rounded-circle" width="20px">
                                        <span>От</span> <span class="text-info"><?php echo e($v->user->first_last_name); ?></span>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-calendar" aria-hidden="true"></i> <span> <?php echo e(\Carbon\Carbon::parse($v->created_at)->format('d/m/Y')); ?></span>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-comment" aria-hidden="true"></i> <span class="text-info"><?php echo e($v->comments->count()); ?></span>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i> <span class="text-info">0 Shares</span>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-tags" aria-hidden="true"></i>
                                        <span>Tags:</span>
                                        <span class="badge badge-dark float-bottom"><?php echo e($v->subject); ?></span>
                                        <span class="badge badge-dark">laravel</span>
                                        <span class="badge badge-dark">html</span>
                                        <span class="badge badge-dark">css</span>
                                    </li>
                                </ul>
                            </div>
                        </div>





                        <div class=" main-section card  ">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="row">

                                        <div class="col-lg-2 col-md-2 col-5">


                                            <div class = "card shadow" >

                                            <?php if(isset($v->user->card->image)): ?>
                                                <img src="<?php echo e(asset('storage/'.$v->user->card->image)); ?> "  class="img-fluid  border border-warning" alt="" height="150" width="150" >

                                            <?php elseif($v->user->sex == 1): ?>
                                                <img src="<?php echo e(asset('storage/avatars/male.jpeg')); ?> "  class="img-fluid border  border border-warning"
                                                     alt="" height="150" width="150" >

                                            <?php elseif($v->user->sex == 0): ?>
                                                <img src="<?php echo e(asset('storage/avatars/female.jpeg')); ?> "  class="img-fluid border  border border-warning"
                                                     alt="" height="150" width="150" >

                                            <?php else: ?>

                                            <?php endif; ?>
                                                <div class = "text-center" style="color: grey">
                                                    <small> <?php echo $__env->make("frontview.styles.rating", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></small>
                                                </div>

                                            </div>

                                            <br>


                                                <div class="text-md-center  ">


                                                    


                                                    <?php if( $v->user->posts->count() <= 3 ): ?>
                                                        <small class = " text-center"> "Новобранец "
                                                        <i class='fas fa-medal ' style='font-size:20px;color:greenyellow'></i>


                                                        </small>


                                                    <?php elseif($v->user->posts->count() >= 4 && $v->user->comments->count() <= 7 ): ?>


                                                                <small class = " text-center"> "Член "
                                                                    <i class='fas fa-medal ' style='font-size:20px;color:greenyellow'></i>
                                                                    <i class='fas fa-medal text-center' style='font-size:25px;color:darkred'></i>


                                                                             </small>
                                                                    <?php elseif($v->user->posts->count() >= 7 && $v->user->comments->count() <= 10 ): ?>
                                                                        <small class = " text-center"> "Борец "

                                                                            <i class='fas fa-medal ' style='font-size:20px;color:greenyellow'></i>
                                                                            <i class='fas fa-medal text-center' style='font-size:25px;color:darkred'></i>
                                                                            <i class='fas fa-medal text-center' style='font-size:30px;color:gold'></i>
                                                                    <?php endif; ?>
                                                                    <?php if($v->user->posts->count() >= 11 && $v->user->comments->count() >= 20 ): ?>


                                                                    <?php else: ?>

                                                                    <?php endif; ?>
                                                                </small>



                                                     <br>


                                                    <small class ="font-italic"> Брой коментари: <?php echo e($v->user->comments->count()); ?> </small>
                                                    <br>
                                                    <small class ="font-italic"> Брой предложения: <?php echo e($v->user->posts->count()); ?> </small>

                                                </div>
                                        </div>



                                        <div class="col-lg-10  col-9 card-body ">
                                            <label>По Тема: </label> <span class = "font-italic font-weight-light ">"<?php echo e($v->subject); ?>"
                                            <h5 class="text-primary"><label > Заглaвие:</label> <?php echo e($v->title); ?></h5>
                                                <p > <?php echo e($v->body); ?></p></span>
                                            <div >
                                                    <div class="row justify-content-md-center">
                                                        <form method = "POST" action="votes/<?php echo e($v->id); ?>/like" >
                                                            <?php echo csrf_field(); ?>
                                                            <div class="col col-md-1 ">
                                                                <button type="submit" class="btn btn-outline-success">
                                                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i> <span class="badge badge-light"><?php echo e($v->likes_count); ?> </span>
                                                            </button>
                                                        </div>
                                                        </form>

                                                        <div class="col col-md-1 align-items-lg-center">

                                                            <form method = "POST" action="votes/<?php echo e($v->id); ?>/dislike" >
                                                                <?php echo csrf_field(); ?>
                                                                <button  type = "submit" class="btn btn-outline-danger" >
                                                                    <i class="fa fa-thumbs-down" aria-hidden="true"><label > </label></i> <span class="badge badge-light"><?php echo e($v->dislikes_count); ?></span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                            
                            <form  method="get"  id="formUpdate" action="<?php echo e(route('post.edit')); ?>">
                                <?php echo csrf_field(); ?>
                                <input name="post_id" type="hidden" value="<?php echo e($v->id); ?>" />

                            </form>




                            

                        <p class="font-weight-light ">
                        <div class="row">
                                <div class="col-5 text-center">
                                    <?php echo e($posts->links()); ?>

                                </div>
                            </div>



                            

                    <div id="app">

                        
                        <p> <comments text = "Добави Коментар"> </comments></p>

                        <form  action="<?php echo e(route('comments.add')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="post_id" value="<?php echo e($v->id); ?>" />

                            

                            <p> <textarea class="form-control"  name="comment"></textarea></p>

                            <button  type="submit" >Comment</button>
                            <button  form = "formUpdate" type="submit" >Post Update</button>
                            <button  form = "Vote" type="submit">Vote</button>


                            
                            <label><my-button   text="Create post" type="submit"></my-button></label>


                            
                        </form>
                        <label> <comments text = " Коментари"> </comments></label>
                    </div>





                            <div class="row bootstrap snippets">
                                <div class="col-md-6 col-md-offset-2 col-md-10">
                                    <div class="comment-wrapper">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">

                                                <hr>



                            <?php $__currentLoopData = $v->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <ul class="media-list card align-middle">
                                                        <br>
                                                    
                                                    <li class="media ">
                                                        <a  class="pull-right">
                                                            <?php if(isset($comment->user->card->image)): ?>
                                                                <img src="<?php echo e(asset('storage/'.$comment->user->card->image)); ?> "  class="img-fluid shadow border border-warning" style = "border-radius: 60% ;height: 60px;width: 60px;"
                                                                      >
                                                            <?php elseif($comment->user->sex == 1): ?>
                                                                <img src="<?php echo e(asset('storage/avatars/male.jpeg')); ?> "
                                                                     alt="" class="img-fluid shadow border border-warning" style = "border-radius: 50%;height: 50px;width: 60px;" >
                                                            <?php elseif($comment->user->sex == 0): ?>
                                                                <img src="<?php echo e(asset('storage/avatars/female.jpeg')); ?> "
                                                                     class="img-fluid shadow border border-warning" style = "border-radius: 60%;height: 60px;width: 60px;" >
                                                            <?php else: ?>
                                                            <?php endif; ?>
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="container row-cols-1">



                                                                
                                <span class="text-muted pull-right">
                                    <label class="container">
                                        <form action="<?php echo e(route('comments.delete', $comment->id)); ?>" value ="comment_id" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php if($comment->user_id == $user->id): ?>
                                                <small ><button class=" btn small col-lg-12 text-right" type="submit">Delete</button></small>
                                                <?php endif; ?>

                                        </form>
                                    </label>
                                </span>
                                                                

                                                            </div>


                                                            <strong class="text-success text-center">@ <?php echo e($comment->user->first_last_name); ?></strong>

                                                                <small class="text-muted">На: <?php echo e($comment->created_at->isoFormat('D/M/YY HH:mm')); ?> </small>
                                                                <br>
                                                                <small class="text-muted"> Публикува коментар № <?php echo e($comment->id); ?></small>

                                                            <p class = "font-italic text-left card-body" >"<?php echo e($comment->content); ?>"</p>
                                                        <li class="list-inline-item">

                                                            <hr >
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tags-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M3 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 7.586 1H3zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                                                <path d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
                                                            </svg>
                                                            <span >Tags:</span>
                                                  <span class="badge badge-dark float-bottom"><?php echo e($v->subject); ?></span>
                                                     </li>
                                                            

                                                    </ul>



                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                 </div>

                            

                                        </div>
                                    </div>
                                </div>
                            </div>


                        <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>







    
    
        
            
                
                    
                        
                            
                                
                                
                                    
                                        
                                            
                                            
                                            
                                        
                                        
                                            
                                            
                                        
                                        
                                            
                                        
                                    
                                
                            
                        
                    
                
        
    
        


        <div class="col">

            <div class="collapse multi-collapse"  id="multiCollapseExample2" >
                <div class="card card-body">




                        <form class="was-validated" action = "<?php echo e(url('/misc')); ?>"  >
                            <?php echo e(csrf_field()); ?>



                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Гласува ЗА</label>
                            </div>



                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Против съм</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline3">Не знам</label>
                            </div>

                            <br><br>

                            <div class="mb-3">

                                <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Ще го коментирам" required></textarea>
                                <div class="invalid-feedback">
                                    Преди да го кажеш, напиши го..!
                                </div>
                            </div>

                            <div class="form-group">
                                <select class="custom-select" required>
                                    <option value="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>



                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" >
                                <label class="custom-file-label" for="validatedCustomFile">Подпис</label>
                                <div class="invalid-feedback">..Подпиши го..</div>
                            </div>

                            <br><br><br>
                            <button type="submit" class="btn btn-primary" >Изпрати</button>
                        </form>





                </div>

            </div>
        </div>
    </div>




<?php $__env->stopSection(); ?>





    
        
            
        
        
            
        
        
            
        
    
    
        
        
        
    

    


        <?php $__env->startSection('name'); ?>
            <?php echo e($username); ?>

            <?php if(isset($profileImage->card->image)): ?>
                <img src="<?php echo e(asset('storage/'.$profileImage->card->image)); ?> "  class="img-fluid border border-warning" alt="" height="20" width="20" >
            <?php elseif($user->sex == 1): ?>
                <img src="<?php echo e(asset('storage/avatars/male.jpeg')); ?> "  class="img-fluid border border-warning "
                     alt="" height="20" width="20" >
            <?php elseif($user->sex == 0): ?>
                <img src="<?php echo e(asset('storage/avatars/female.jpeg')); ?> "  class="img-fluid border border-warning  "
                     alt="" height="20" width="20" >

            <?php else: ?>

            <?php endif; ?>
        <?php $__env->stopSection(); ?>



        
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>


        

    
    

        

<?php echo $__env->make('frontview.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontview.layouts.userView', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\blog\resources\views/frontview/layouts/misc.blade.php ENDPATH**/ ?>