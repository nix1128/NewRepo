
@extends('frontview.layouts.userView')
@extends('frontview.layouts.default')

{{--@if ($errors->any())--}}
{{--<div class="alert alert-danger">--}}
{{--<ul>--}}
{{--@foreach ($errors->all() as $error)--}}
{{--<li>{{ $error }}</li>--}}
{{--@endforeach--}}
{{--</ul>--}}
{{--</div>--}}
{{--@endif--}}







@section('title')

@endsection



@section('image')

    <img src="{{asset('storage/'.$user->card->image)}} "  class="img-thumbnail" alt=""  >
@endsection

@section('content')


    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            Промените са запазени успешно
        </div>


        <script >

            $(document).ready(function () {

                window.setTimeout(function() {
                    $(".alert-success").fadeTo(1000, 0).slideUp(1000, function(){
                        $(this).remove();
                    });
                }, 5000);

            });
        </script>
    @endif


    <form enctype ="multipart/form-data" class = "pb2 " method="POST" name = 'profile' action=''  >
        <h4 >Здравей, {{$username}} </h4>
        @yield('image')
        <div class="  py-1 ">
                <a href="{{ action('userController\\profileEdit@delete', $user->card->image) }}"
                   class="btn btn-outline-danger btn-sm">Премахни снимката</a>

            </div>




        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        {{-- ime parlola cont--}}
        <div class="form-row py-2">

            <div class="form-group col-md-6">
                <label for="validationServer01">Поща</label>
                <input type="Email" class="form-control " name = "Email" id="inputEmail4"
                       value="{{$user->Email}}"
                       placeholder="{{$user->Email}}">
            </div>
            

            <div class="form-group col-md-6">
                <label for="inputPassword4">Промени Парола</label>
                <input type="password" class="form-control" name = "password_update" id="inputPassword4" placeholder="Парола">
            </div>
        </div>

        {{-- krai ime parlola cont--}}

        {{-- tel address cont--}}
        <div class="form-row">
            <div class="form-group  col-md-6">
                <label for="inputAddress 1">Телефон</label>
                <input class="form-control" type= 'tel' name = 'tel' value="{{$user->phone['phone']}}"
                       placeholder="{{$user->phone['phone']}}"
                       id="example-tel-input" >

                @if ($errors -> first('tel'))
                    <li class="text-danger" >Невалиден телефон </li>
                @endif
            </div>





        <div class="form-group  col-md-6">
            <label for="inputAddress">Адрес</label>
            <input type="text" class="form-control" name = "Address" value="{{$user->card->adr}}" id="inputAddress" placeholder="Снежанка 2">
            @if ($errors -> first('Address'))
                <li class="text-danger" >Неправилен адрес</li>
            @endif
        </div>

        </div>
        {{-- krai kraj adress contt--}}

        <div class="form-row ">
            <div class="form-group col-md-6">
                <label for="inputCity">Град</label><input type="text" class="form-control" name=" town" id="inputCity"
                value="{{$user->card->city}}"  >

               </div>

            <div class="form-group col-md-6" >
                <label for="inputCity">Квартал</label><input type="text" class="form-control" name = "kvar"  id="inputCity"
                value="{{$user->card->kvar}}">
               </div>
            </div>

            {{--</div>--}}

        <div  class= "py-2 text-danger">

        </div>

        <div class = " float-sm-middle ">
            <input type="file" name = "image">
        </div>

        <div  class="text-danger">

            @if ($errors -> first('image.sometimes'))
                <li class="text-danger" > Липсва снимка</li>
            @else
                {{$errors->first('image')}}
            @endif


            @if ($errors -> first('image.image'))
                <li class="text-danger" >{{''}} </li>

                {{$errors->first('image')}}
            @endif


                <div >
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong> {{session()->get('message')}}</strong>
                        </div>

                        </div>
                    @endif
                </div>




        <div class="form-group py-1">
            <div class="form-check">
                {{--<input class="form-check-input" type="checkbox" id="gridCheck">--}}

                {{--<label class="form-check-label" for="gridCheck">--}}
                    {{--Запомни ме!--}}

                {{--</label>--}}
            </div>


        </div>

        <button type="submit" class="btn btn-outline-primary">Запази промените</button>

        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
          Изтрий профила
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-md-center" id="exampleModalLabel">Изтриване на профила на:
                      <p class="text-primary text-center " >{{$username}}</p></h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body text-dark">
                        Сигурен ли сте,че искате да изтриете всички свои данни и съобщения?
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Опa, НЕ!</button>
                        <a href="{{ action('userController\\profileEdit@profile_delete') }}"
                                class="btn btn-danger">Да, махам се!</a>
                    </div>
                </div>
            </div>
        </div>







    </form>

@endsection
@section('name')
    {{ $username }}
    <img src="{{asset('storage/'.$profileImage->card->image)}} "  class="img-fluid" alt="" height="2" width="20" >

@endsection


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>