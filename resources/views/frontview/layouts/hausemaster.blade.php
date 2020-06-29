@extends('frontview.layouts.userView')
@extends('frontview.layouts.default')


@section('title')
    Contacts
@endsection




@section('content')


    <form class = "pb2" method="POST" name = 'hausmasters' action='{{url('/contacts')}}'  >

        {{ csrf_field()}}
    <h3>Списък домоуправители</h3>

    <table class="table table-hover">

            <thead>

            <tr>
                <th scope="col">U#</th>
                <th scope="col">Име</th>
                <th scope="col">Псевдоним</th>
                <th scope="col">Имейл</th>
                <th scope="col">Телефон</th>
                <th scope="col">Снимка</th>

            </tr>
          </thead>


            @foreach($user as $v)



            <tbody>
            <tr>
                <th scope="row">{{$v ->id}}</th>
                <td>{{$v ->first_last_name}}</td>
                <td>{{$v ->username}}</td>
                <td>{{$v ->Email}}</td>
               <td>{{$v->phone['phone']}}</td>
                <td>  <img src="{{asset('storage/'.$v->card->image)}}" class="img-fluid"
                    alt="" height="30" width="30"> </td>


            </tr>
        </tbody>
            @endforeach
        </table>
    </form>

@endsection
@section('name')
    {{ $username }}
    <img src="{{asset('storage/'.$profileImage->card->image)}} "  class="img-fluid"
         alt="" height="20" width="20" >

@endsection

