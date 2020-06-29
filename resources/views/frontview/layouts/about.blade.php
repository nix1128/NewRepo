@extends('frontview.layouts.userView')
@extends('frontview.layouts.default')




@section('title')
    About
    @endsection

@section('content')

    <h2>За нас</h2>
    @foreach($about as $v)

        <li>{{$v}}</li>



    @endforeach


@endsection
@section('name')

     {{ $username }}
     <img src="{{asset('storage/'.$profileImage->card->image) }} "  class="img-fluid" alt="" height="20" width="20" >

@endsection








