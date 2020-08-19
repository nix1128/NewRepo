<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    {{----}}
    {{--bootstraped link   <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

</head>
<body>


<div class="alert alert-primary " role="alert">
    Здравей, <a href="profile" class="alert-link"  > @yield('name')
    </a>

</div>

    <hr>

<div class = "container"  >

    <div class="alert alert-secondary" role="alert">

        <ul class="nav"  >
            {{ csrf_field()}}

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
                {{--<a class="nav-link" href="/posts">Коментари</a>--}}
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

    @yield('content')


</div>




{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>--}}

</body>
</html>