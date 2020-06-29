@extends('frontview.layouts.userView')
@extends('frontview.layouts.default')


@section('title')
    Other
@endsection

@section('content')

<h2>Лични колони</h2>
@foreach($others as $v)
    <li>This is {{$v}}</li>
@endforeach


@endsection
@section('name')
    {{ $username }}
    <img src="{{asset('storage/'.$profileImage->card->image)}} "  class="img-fluid" alt="" height="20" width="20" >

@endsection
