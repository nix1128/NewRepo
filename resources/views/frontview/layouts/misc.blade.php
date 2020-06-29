
<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('frontview.layouts.userView')
@extends('frontview.layouts.default')




@section('title')
    Misc
@endsection



@section('content')

    @foreach($misc as $v )



        {{--<ul class="list-group"  >--}}
            {{--<li id="multiCollapseExample1" class="list-group-item"> <a  href="#" > {{$v[0]}} </a> </li>--}}
            {{--<li class="list-group-item" > <a href="#"> {{$v[1]}} </a></li>--}}
            {{--<li class="list-group-item" ><a href="#"> {{$v[2]}} </a></li>--}}
            {{--<li class="list-group-item" ><a href="#"> {{$v[3]}} </a></li>--}}
        {{--</ul>--}}

    @endforeach

    {{--<link rel="stylesheet" href="{{URL::asset('css/randomstyles.css')}}">--}}



    <h2>Предложения  </h2>
    <p>
        {{--<a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>--}}
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample2"> {{$v[0]}}</button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2"  aria-expanded="false" aria-controls="multiCollapseExample2 ">{{$v[1]}}</button>


    {{--create Post--}}
    <form  method="get" action="posts/create">
        @csrf
        <input name="create" type="hidden" value="create"/>
        <button  type="submit">Create Post</button>
    </form>





    </p>
    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse p-1" id="multiCollapseExample1">





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

{{-------------------------------------------}}




@foreach($posts as $v)
                        @if(is_null($v->created_at) )
        <div class = "font-italic">No posts yet</div>
                        @else



                    <div class=" p-3 mb-5 bg-white rounded">
                        <div class="card-body">

                        <p class="list-group">Тема: </p><p class = "font-italic font-weight-light ">"{{ $v->subject }}"</p>
                    <td > <label class="p-0"> Заглавие:</label> {{ $v->title }}</td>


   <p >{{ $v->body }}</p>
                            {{--Post update--}}
                            <form  method="get" action="{{route('post.edit')}}">
                                @csrf
                                <input name="post_id" type="hidden" value="{{ $v->id }}" />
                                <button  type="submit">Post Update</button>
                            </form>
                            {{--Post update--}}

                        <p class="font-weight-light float-right "> Author: <label >{{$v->user['username']}}, От: {{ $v->created_at }}</label></p>



                        <h5>Display Comments</h5>
                        @foreach($v->comments as $comment)
                            <div class="display-comment">

                                Потребител: <label class="font-italic">{{$comment->user_id}}</label>
                                <p class="font-weight-normal"> Отговори: : {{$comment->created_at->diffForHumans()}}</p>
                                <p class = font-italic>"{{ $comment->content }}"</p>
                            </div>
                        @endforeach


                            {{-- coments add--}}
                        <h6>Add comment</h6>
                            <form  action="{{ route('comments.add') }}" method="post">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $v->id }}" />
                                {{--<input type="hidden" name="username" value="{{ $v->user['username'] }}" />--}}
                    <textarea class="form-control" name="comment"></textarea>
                    <button  type="submit" >Comment</button>
                        </form>
                            {{--end comments add--}}



                            {{--vote code--}}

                    <form action="post/{{ $v->id }} " method="">

                        <input name="_method" type="hidden" value="vote"/>
                        <button  type="submit">Vote</button>
                    </form>

{{--end vote code--}}


                    </div>
                    </div>

                        @endif
@endforeach



                    {{--@foreach($comment as $v)--}}
                        {{--<div>{{$v}}</div>--}}
                    {{--@endforeach--}}



                {{-------------------------------------------}}
                {{--<table class="friends-list table table-bordered width100" id="table1">--}}

                    {{--<thead>--}}
                    {{--@foreach($posts as $v)--}}
                    {{--@endforeach--}}
                    {{--</thead>--}}



                    {{--<tbody>--}}
                    {{--<tr role="row">--}}

                        {{--<td>--}}

                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}

                                {{--</div>--}}
                                {{--<div id="collapseOne" aria-expanded="false" class="collapse">--}}
                                    {{--<div class="form-group">--}}


                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}





                        {{--</td>--}}
                        {{--<td><input class="form-control" id="about_friend" name="about_friend"></td>--}}

                    {{--</tr>--}}
                    {{--</tbody>--}}


                {{--</table>--}}
                {{--<a href="#" title="" class="add-friend">Read</a>--}}

                {{--<script>--}}
                    {{--var counter = 1;--}}
                    {{--jQuery('a.add-friend').click(function(event){--}}
                        {{--event.preventDefault();--}}
                        {{--counter++;--}}
                        {{--var newRow = jQuery('<tr><td><input type="text" name="name' +--}}



                                {{--counter + '"/></td></tr>');--}}
                        {{--jQuery('table.friends-list').append(newRow);--}}
                    {{--});--}}
                {{--</script>--}}


    <div class="row justify-content-center">
        <div class="col-sm-10">

                                {{--@foreach($posts as $v)--}}

                                {{--@if(is_null($v->body ))--}}

                             {{--@else--}}

                                    {{--<div class="list-group shadow p-3 mb-5 bg-white rounded">--}}
                                    {{--<div class="container">--}}



                                            {{--<p class="list-group">Тема: </p><p class = "font-italic font-weight-light ">"{{ $v->title }}"</p>--}}
                                                {{--<td > <label class="p-0"> Заглавие:</label> {{ $v->title }}</td>--}}
                                                {{--<p class="font-weight-light "> Author: <label >{{$v->id}}</label></p>--}}

                                                {{--<td class="float-right">{{ $v->created_at }}</td>--}}
                                        {{--<hr>--}}


                                                {{--<div id="collapseOne" class="collapse hidden" aria-labelledby="headingOne" data-parent="#accordion">--}}
                                                    {{--<div class="card-body">--}}
                                                        {{--<ul class="list-group">--}}
                                                        {{--<li class="list-group-item">{{$v->body}}</li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                            {{--</div>--}}

                                        {{--</dl>--}}


                                    {{--</div>--}}
                                        {{--<div id="collapseOne" class="collapse hidden" aria-labelledby="headingOne" data-parent="#accordion">--}}
                                            {{--<div class="card-body">--}}
                                                {{--<ul class="list-group">--}}
                                                    {{--<li class="list-group-item">{{$v->body}}</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}


                                        {{--<td> <button class="btn btn-link" data-toggle="collapse"--}}
                                                     {{--data-target="#collapseOne" aria-expanded="true"--}}
                                                     {{--aria-controls="collapseOne">Read</button>  </td>--}}
                                        {{--<a class="btn btn-primary" data-toggle="collapse"--}}
                                           {{--href="#multiCollapseExample1" role="button" aria-expanded="true"--}}
                                           {{--aria-controls="multiCollapseExample1">X</a>--}}
                                    {{--</div>--}}

                                    {{--@endif--}}

                                {{--@endforeach--}}


                        {{--</div>--}}
                    {{--</div>--}}



                    {{--</div>--}}




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
  <img src="{{asset('storage/'.$profileImage->card->image)}} "  class="img-fluid" alt="" height="20" width="20" >

@endsection



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


{{--избор качване на файл--}}
{{--<div class="form-group">--}}
    {{--<label for="exampleFormControlFile1">Example file input</label>--}}
    {{--<input type="file" class="form-control-file" id="exampleFormControlFile1">--}}
{{--</div>--}}

