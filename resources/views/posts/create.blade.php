



@extends('frontview.layouts.userView')
@extends('frontview.layouts.default')


@section('content')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
{{--<style>--}}
    {{--.require {--}}
        {{--color: #666;--}}
    {{--}--}}
    {{--label small {--}}
        {{--color: #999;--}}
        {{--font-weight: normal;--}}
    {{--}--}}
{{--</style>--}}



    @if(session()->has('success'))

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
    @endif



<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h3>Създай нова тема</h3>

            <form action="/posts/store" method="POST">


                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-error">

                    @foreach($post as $v=>$c)
                    @endforeach
                    <label for="slug" class="text-primary" >Тема</label> <span class="require">*</span> <small>(не се позволява дублиране на теми)</small></label>
                        <input type="text" class="form-control"   name="subject" value="{{old('subject')}} @if(empty($c->subject) ) @else{{$c->subject}} @endif"  />
                    <span class="help-block"></span>
                    @if($errors->first('subject'))
                        <div>Полето е задължително
                            <label class="text-success"><svg class="bi bi-emoji-smile" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683z"/>
                                <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/></label>
                            </svg>
                        </div>
                        @endif
                </div>




                <div class="form-group">
                    <label for="title"><label class="text-primary">Заглавие</label> <span class="require">*</span></label>
                    <input type="text" class="form-control" name="title"  value="{{old('title')}} @if(empty($c->title)) @else{{$c->title}} @endif">
                    @if($errors->first('title'))
                        <div>Ами заглавие? <label class="text-warning"><svg class="bi bi-emoji-neutral" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path fill-rule="evenodd" d="M4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
                                    <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                                </svg></label></div>
                        @endif
                </div>

                <div class="form-group">
                    <label for="description"  class = "text-primary">Описание</label>
                    <textarea rows="5" class="form-control"  name="body" value = "{{old('body')}}"> @if(empty($c->body)) @else {{$c->body}} @endif</textarea>
                    @if($errors->first('body'))
                        <div>Забравихте и описание <label class="text-danger"><svg class="bi bi-emoji-frown" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/>
                                    <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                                </svg></label>
                            </div>
                    @endif
                </div>

                <div class="form-group">
                    <p><span class="require text-danger">*</span> - задължителни полета</p>
                </div>

                <div class="form-group">
                    <button type="submit" id="submit" class="btn btn-primary">
                        <a> Създай</a></button>
                    <button class="btn btn-default">
                        <a href="{{ url()->previous() }}">Назад  </a>
                    </button>

                </div>

            </form>




        </div>

    </div>
</div>


@endsection

@section('name')
    {{ $name }}
    <img src="{{asset('storage/'.$profileImage->card->image)}} "  class="img-fluid" alt="" height="20" width="20" >

@endsection

