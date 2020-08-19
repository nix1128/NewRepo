

<head>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


</head>



<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('frontview.layouts.userView')
@extends('frontview.layouts.default')






<link href="{{(asset(('css/misc.css')))}}">

<script src ="{{mix('js/app.js')}}" defer></script>
<link href="{{mix('css/app.css')}}" rel="stylesheet">

@section('title')
    Misc
@endsection




@section('content')


    <h2 >Предложения</h2>

    <p>

    {{--create Post--}}
    <form  method="get" id ="create" action="posts/create">
        @csrf
        <input name="create" type="hidden" value="create"/>
        <button  form = "create" type="submit">Create Post</button>
    </form>

    <div class="row container">
        <div class="col">


{{--colapse--}}


                    {{--<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">--}}
                        {{--<div class="panel panel-default">--}}
                            {{--<div class="panel-heading" role="tab" id="headingOne">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
                                        {{--Collapsible Group Item #1--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">--}}
                                {{--<div class="panel-body">--}}
                                    {{--1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="panel panel-default">--}}
                            {{--<div class="panel-heading" role="tab" id="headingTwo">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
                                        {{--Collapsible Group Item #2--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">--}}
                                {{--<div class="panel-body">--}}
                                    {{--2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="panel panel-default">--}}
                            {{--<div class="panel-heading" role="tab" id="headingThree">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
                                        {{--Collapsible Group Item #3--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">--}}
                                {{--<div class="panel-body">--}}
                                    {{--3. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="panel panel-default">--}}
                            {{--<div class="panel-heading" role="tab" id="headingFour">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">--}}
                                        {{--Collapsible Group Item #4--}}
                                    {{--</a>--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                            {{--<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">--}}
                                {{--<div class="panel-body">--}}
                                    {{--4. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

            {{--Warnings--}}
{{-------------------------------------------}}

            @if(session()->has('deleted'))
                <div class="alert alert-warning" role="alert">
                Коментара е изтрит
            </div>
@endif

            @if(session()->has('added'))
                <div class="alert alert-success" role="alert">
                    Добавихте коментар!
                </div>
               @endif
            @if(session()->has('wrong_user'))
                <div class="alert alert-danger" role="alert">
                    Не можете да триете чужд коментар
                </div>
                @endif

            @if(session()->has('post_edit_error'))
                <div class="alert alert-danger" role="alert">
                    Това е чужд пост!
                    </div>
                @endif


            @if(session()->has('success'))

                <div class="alert alert-success" role="alert">
                    Създадохте нова тема
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
            @endif

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








            @foreach($posts as $v)




                @if(is_null($v->title) )
                    <div>No posts yet</div>
                            @else

                        <div class="row post-detail container">

                            <div class="col-lg-12 col-sm-12 col-12">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img src="https://dummyimage.com/20x20/a8a1a8/0f0f12" class="rounded-circle" width="20px">
                                        <span>От</span> <span class="text-info">{{ $v->user->first_last_name }}</span>
                                    </li>
                                    <li class="list-inline-item">

                                        <i class="fa fa-calendar" aria-hidden="true"></i> <span> {{ \Carbon\Carbon::parse($v->created_at)->format('d.m.Y T H:i:s')}}</span>



                                    </li>
                                <li class="list-inline-item">
                                    <i class="fa fa-comment" aria-hidden="true"></i> <span class="text-info">{{$v->comments->count()}}</span>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i> <span class="text-info">0 Shares</span>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-tags" aria-hidden="true"></i>
                                        <span>Tags:</span>
                                        <span class="badge badge-dark float-bottom">{{$v->subject}}</span>
                                        <span class="badge badge-dark">{{$v->title}}</span>
                                        <span class="badge badge-dark">{{$username}}</span>
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

                                            @if(isset($v->user->card->image))
                                                <img src="{{asset('storage/'.$v->user->card->image)}} "  class="img-fluid  border border-warning" alt="" height="150" width="150" >

                                            @elseif($v->user->sex == 1)
                                                <img src="{{asset('storage/avatars/male.jpeg')}} "  class="img-fluid border  border border-warning"
                                                     alt="" height="150" width="150" >

                                            @elseif($v->user->sex == 0)
                                                <img src="{{asset('storage/avatars/female.jpeg')}} "  class="img-fluid border  border border-warning"
                                                     alt="" height="150" width="150" >

                                            @else

                                            @endif
                                                <div class = "text-center" style="color: grey">
                                                    <small> @include("frontview.styles.rating")</small>
                                                </div>

                                            </div>

                                            <br>


                                                <div class="text-md-center  ">


                                                    {{--<img src="{{asset('storage/medals/gold.jpg')}} " class="img-fluid" alt="" height="20" width="20">--}}


                                                    @if( $v->user->posts->count() <= 3 )
                                                        <small class = " text-center"> "Новобранец "
                                                        <i class='fas fa-medal ' style='font-size:20px;color:greenyellow'></i>
                                                        </small>


                                                    @elseif($v->user->posts->count() >= 4 && $v->user->comments->count() <= 7 )
                                                        <small class = " text-center"> "Член "
                                                                    <i class='fas fa-medal ' style='font-size:20px;color:greenyellow'></i>
                                                                    <i class='fas fa-medal text-center' style='font-size:25px;color:darkred'></i>
                                                                </small>
                                                                    @elseif($v->user->posts->count() >= 7 && $v->user->comments->count() <= 10 )
                                                                        <small class = " text-center"> "Борец "

                                                                            <i class='fas fa-medal ' style='font-size:20px;color:greenyellow'></i>
                                                                            <i class='fas fa-medal text-center' style='font-size:25px;color:darkred'></i>
                                                                            <i class='fas fa-medal text-center' style='font-size:30px;color:gold'></i>
                                                                    @endif
                                                                    @if($v->user->posts->count() >= 11 && $v->user->comments->count() >= 20 )


                                                                    @else

                                                                    @endif
                                                                </small>



                                                     <br>


                                                    <small class ="font-italic"> Брой коментари: {{$v->user->comments->count()}} </small>
                                                    <br>
                                                    <small class ="font-italic"> Брой предложения: {{$v->user->posts->count()}} </small>

                                                </div>
                                        </div>



                                        <div class="col-lg-10  col-9 card-body ">

                                            {{--counter--}}
                                            <p class = "float-right">
                                                <label class="invisible"> {{  $diff = Carbon\Carbon::parse(\Carbon\Carbon::now())->diffInDays($v->created_for)

                                                }}

                                                </label>
                                                    @if($diff == 0)
                                                        <div class = "float-right"><span>Гласуването изтече: </span>днес</div>
                                                    @else
                                                        <div class = "float-right"><span>Гласуването изтича след:</span>


                                                                <div class="row justify-content-center border rounded-pill text-danger" >  ({{$diff}}) <span> дни</span></div>

                                                        </div>
                                                    @endif







                                            <label>По Тема:  </label>

                                            <span class = "font-italic font-weight-normal ">"{{ $v->subject }}"
                                                <h5 class="text-primary"><label > Заглaвие:</label> {{ $v->title }}</h5>
                                                <p> {{ $v->body }} <span class="float-right">  </span>
                                                </p>
                                                </span>

                                                <div class="container">
                                                    @yield('counter')


                                                        <div class="row justify-content-center mt-5 mb-2  font-weight-light">
                                                            <h5>Оставащо време!</h5>



                                                    </div>

                                                     <div class="row justify-content-center border rounded-pill text-danger" id="countdown"></div>
                                                    <div class="row justify-content-center mt-2">
                                                        <p>

                                                        </p>


                                                        <script>
                                                            var yourDateToGo = new Date(); //here you're making new Date object
                                                            yourDateToGo.setDate(yourDateToGo.getDate() + {{$diff}}); //your're setting date in this object 1 day more from now
                                                            //you can change number of days to go by putting any number in place of 1

                                                            var timing = setInterval( // you're making an interval - a thing, that is updating content after number of miliseconds, that you're writing after comma as second parameter

                                                                    function () {
                                                                        new Date (localStorage.setItem('for', yourDateToGo.toDateString()));
                                                                        var now = new Date();
                                                                        new Date(localStorage.setItem('now', now.toDateString()));
                                                                        var goal_date = new Date(localStorage.getItem('for'));
                                                                        var timeLeft =  goal_date - now;


                                                                        var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24)); //conversion miliseconds on days
                                                                        if (days < 10) days="0"+days; //if number of days is below 10, programm is writing "0" before 9, that's why you see "09" instead of "9"
                                                                        var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)); //conversion miliseconds on hours
                                                                        if (hours < 10) hours="0"+hours;
                                                                        var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60)); //conversion miliseconds on minutes
                                                                        if (minutes < 10) minutes="0"+minutes;
                                                                        var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);//conversion miliseconds on seconds
                                                                        if (seconds < 10) seconds="0"+seconds;

                                                                        document.getElementById("countdown").innerHTML = days + "д " + hours + "ч " + minutes + "м " + seconds + "с"; // putting number of days, hours, minutes and seconds in div,
                                                                        //which id is countdown

                                                                        if (timeLeft <= 0) {
                                                                            clearInterval(timing);
                                                                            document.getElementById("countdown").innerHTML = "Край"; //if there's no time left, programm in this 2 lines is clearing interval (nothing is counting now)
                                                                            //and you see "It's over" instead of time left
                                                                        }

                                                                    }, 1000);




                                                        </script>









                                                    </div>

                                                    </div>




<script>
    // Check browser support
//    if (typeof(Storage) !== "undefined") {
//        // Store
//        localStorage.setItem("lastname", "Smith");
//        // Retrieve
//        document.getElementById("result").innerHTML = localStorage.getItem("lastname");
//    } else {
//        document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
    }
</script>




                                         {{--<p> Гласуването изтича след: <span id="countdowntimer">{{$diff}} </span> </p>--}}
                                                {{--<script type="text/javascript">--}}
                                                {{--var timeleft = $diff;--}}
                                                {{--var downloadTimer = setInterval(function(){--}}
                                                    {{--timeleft--;--}}
                                                    {{--document.getElementById("countdowntimer").textContent = timeleft;--}}
                                                    {{--if(timeleft <= 0)--}}
                                                        {{--clearInterval(downloadTimer);--}}
                                                {{--},1000);--}}
                                            {{--</script>--}}       {{--Posts views counter    --}}
                                                {{--Local storage - counter - reload the page several times--}}

                                                {{--<script>--}}
                                                {{--console.log('Start');--}}

                                                {{--var n = localStorage.getItem('counter');--}}
                                                {{--if (n === null) {--}}
                                                {{--n = 0;--}}
                                                {{--} else {--}}
                                                {{--n++;--}}
                                                {{--}--}}
                                                {{--console.log(n);--}}
                                                {{--localStorage.setItem("counter", n);--}}

                                                {{--console.log('End');--}}
                                                {{--</script>--}}





                                            </span>

                                            <div >
                                                    <div class="row justify-content-md-center">
                                                        <form method = "POST" action="votes/{{$v->id}}/like" >
                                                            @csrf
                                                            <div class="col col-md-1 ">
                                                                <button type="submit" class="btn btn-outline-success">
                                                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i> <span class="badge badge-light">{{$v->likes_count  }} </span>
                                                            </button>
                                                        </div>
                                                        </form>
                                                        <div class="col col-md-1 align-items-lg-center">

                                                            <form method = "POST" action="votes/{{$v->id}}/dislike" >
                                                                @csrf
                                                                <button  type = "submit" class="btn btn-outline-danger" >
                                                                    <i class="fa fa-thumbs-down" aria-hidden="true"><label > </label></i> <span class="badge badge-light">{{$v->dislikes_count}}</span>
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


                            {{--Post update--}}
                            <form  method="get"  id="formUpdate" action="{{route('post.edit')}}">
                                @csrf
                                <input name="post_id" type="hidden" value="{{ $v->id }}" />

                            </form>




                            {{--Pagination--}}

                        <p class="font-weight-light ">
                        <div class="row">
                                <div class="col-5 text-center">
                                    {{$posts->links()}}
                                </div>
                            </div>



                            {{--Comments--}}

                    <div id="app">

                        {{-- ADD COMMENTS FORM--}}
                        <p> <comments text = "Добави Коментар"> </comments></p>

                        <form  action="{{ route('comments.add') }}" method="post">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $v->id }}" />

                            {{--Vue--}}

                            <p> <textarea class="form-control"  name="comment"></textarea></p>

                            <button  type="submit" >Comment</button>
                            <button  form = "formUpdate" type="submit" >Post Update</button>
                            <button  form = "Vote" type="submit">Vote</button>


                            {{--Vue--}}
                            <label><my-button   text="Create post" type="submit"></my-button></label>


                            {{--end vue button--}}
                        </form>
                        <label> <comments text = " Коментари"> </comments></label>
                    </div>





                            <div class="row bootstrap snippets">
                                <div class="col-md-6 col-md-offset-2 col-md-10">
                                    <div class="comment-wrapper">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">

                                                <hr>



                            @foreach($v->comments as $comment)
                                                    <ul class="media-list card align-middle">
                                                        <br>
                                                    {{--<small class="font-italic col-2 ">{{$comment->user->username}}</small>--}}
                                                    <li class="media ">
                                                        <a  class="pull-right">
                                                            @if(isset($comment->user->card->image))
                                                                <img src="{{asset('storage/'.$comment->user->card->image)}} "  class="img-fluid shadow border border-warning"
                                                                     style = "border-radius: 60%;height: 60px;width: 60px;">
                                                            @elseif($comment->user->sex == 1)
                                                                <img src="{{asset('storage/avatars/male.jpeg')}} "
                                                                      class="img-fluid shadow border border-warning" style = "border-radius: 60%;height: 60px;width: 60px;" >
                                                            @elseif($comment->user->sex == 0)
                                                                <img src="{{asset('storage/avatars/female.jpeg')}} "
                                                                     class="img-fluid shadow border border-warning" style = "border-radius: 60%;height: 60px;width: 60px;" >
                                                            @else
                                                            @endif
                                                        </a>
                                                        <div class="media-body">
                                                            <br>
                                                            <strong class="text-success ">@ {{$comment->user->first_last_name}}</strong>
                                                            <br>

                                                                <small class="text-muted">На: {{$comment->created_at->isoFormat('D/M/YY HH:mm')}} </small>
                                                                <br>
                                                                <small class="text-muted"> Публикува коментар № {{$comment->id}}</small>

                                                            <p class = "font-italic text-left card-body" >"{{ $comment->content }}"</p>

       <span class="text-muted pull-right p-8">
                                    <label class="container">
                                        <form action="{{route('comments.delete', $comment->id)}}" value ="comment_id" method="post">
                                            @csrf
                                            @if($comment->user_id == $user->id)
                                                <small ><button class=" btn small col-md-12 text-right" type="submit" >Delete</button></small>
                                            @endif

                                        </form>
                                    </label>
                                </span>



                                                            <div class="p-3">
                                                                <hr >
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tags-fill " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M3 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 7.586 1H3zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                                                <path d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
                                                            </svg>

                                                            <span >Tags:</span>
                                                  <span class="badge badge-dark float-bottom">{{$v->subject}}</span>

                                                        </div>

                                                            <div >
                                                                {{--<small>  @include("frontview.styles.stars_rating")</small>--}}
                                                                </div>

                                                        </div>
                                                     </li>


                                                    </ul>




                            @endforeach


                                                 </div>

                            {{--end comments add--}}

                                        </div>
                                    </div>
                                </div>
                            </div>


                        @endif
@endforeach







    {{--<!-- Modal -->--}}
    {{--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
        {{--<div class="modal-dialog" role="document">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="container">--}}
                    {{--<div class="row justify-content-center">--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<div class="card">--}}
                                {{--<div class="card-header">Create Post</div>--}}
                                {{--<div class="card-body">--}}
                                    {{--<form method="post" action="{{ route('post.store') }}">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<input name="_method" type="hidden" value="{{ csrf_token() }}"/>--}}
                                            {{--<label class="label">Post Title: </label>--}}
                                            {{--<input type="text" name="title" class="form-control" required/>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label class="label">Post Body: </label>--}}
                                            {{--<textarea name="body" rows="10" cols="30" class="form-control" required></textarea>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group">--}}
                                            {{--<input type="submit" class="btn btn-success" />--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
        {{--</div>--}}


        <div class="col">

            <div class="collapse multi-collapse"  id="multiCollapseExample2" >
                <div class="card card-body">




                        <form class="was-validated" action = "{{url('/misc')}}"  >
                            {{ csrf_field()}}


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




@endsection




{{--@section ('content-suggestions')--}}
    {{--<ul class="nav nav-tabs" id="myTab" role="tablist">--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>--}}
        {{--</li>--}}
    {{--</ul>--}}
    {{--<div class="tab-content" id="myTabContent">--}}
        {{--<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>--}}
        {{--<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>--}}
        {{--<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>--}}
    {{--</div>--}}

    {{--@endsection--}}


        @section('name')
            {{ $username }}
            @if(isset($profileImage->card->image))
                <img src="{{asset('storage/'.$profileImage->card->image)}} "  class="img-fluid border border-warning" alt="" height="20" width="20" >
            @elseif($user->sex == 1)
                <img src="{{asset('storage/avatars/male.jpeg')}} "  class="img-fluid border border-warning "
                     alt="" height="20" width="20" >
            @elseif($user->sex == 0)
                <img src="{{asset('storage/avatars/female.jpeg')}} "  class="img-fluid border border-warning  "
                     alt="" height="20" width="20" >

            @else

            @endif
        @endsection



        {{----}}


        <script src='https://kit.fontawesome.com/a076d05399.js'></script>


        {{--избор качване на файл--}}
{{--<div class="form-group">--}}
    {{--<label for="exampleFormControlFile1">Example file input</label>--}}
    {{--<input type="file" class="form-control-file" id="exampleFormControlFile1">--}}
{{--</div>--}}
        {{--<script src = "http://unpkg.com/turbolinks"></script>--}}
</div>


