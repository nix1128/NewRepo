<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    

</head>
<body>


<div class="alert alert-primary " role="alert">
    Здравей, <a href="profile" class="alert-link"  > <?php echo $__env->yieldContent('name'); ?>
    </a>

</div>

    <hr>

<div class = "container"  >

    <div class="alert alert-secondary" role="alert">

        <ul class="nav"  >
            <?php echo e(csrf_field()); ?>


                <li class="nav-item"  >
                    <a class="nav-link active" href="/home" >Дом</a>

                </li>

            <li class="nav-item">
                <a class="nav-link" href="/contacts">Домоуправители</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/posts">Предложения</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="other">Колонки</a>
            </li>

            <li class="nav-item">
                
            </li>



            <li class="nav-item" >
                <a class="nav-link" href="about">За нас</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="profile"> Профил</a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="logout"> Изход</a>

            </li>

        </ul>

</div>

    <?php echo $__env->yieldContent('content'); ?>


</div>






</body>
</html><?php /**PATH C:\xampp\Laravel\blog\resources\views/frontview/layouts/userView.blade.php ENDPATH**/ ?>