@extends('frontview.layouts.userView')
@extends('frontview.layouts.default')



{{--@if (session('image'))--}}
    {{--<div class="alert alert-success">--}}

    {{--</div>--}}
{{--@endif--}}



@section('title')
    Home
    @endsection

@section('content')

<h2>Welcome to Home page</h2>

@endsection


@section('name')

        {{ $username }}
        <img src="{{asset('storage/'.$profileImage->card->image)}} "  class="img-fluid" alt="" height="20" width="20" >

@endsection



