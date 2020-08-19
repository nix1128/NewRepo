@extends('frontview.layouts.userView')
@extends('frontview.layouts.default')


@section('title')
    Home
    @endsection

@section('content')

<h2>Welcome to Home page</h2>

@endsection



@section('name')
    {{ $username }}

{{--{{$user->sex}}--}}
    {{--{{$user->sex}}--}}


    {{--@if($data->sex == 0 )--}}
        {{--<img src="{{asset('storage/avatars/1.jpeg')}} "  class="img-fluid"--}}
             {{--alt="" height="20" width="20" >--}}
    {{--@elseif($data->sex == 1)--}}
        {{--<img src="{{asset('storage/avatars/male.jpeg')}} "  class="img-fluid"--}}
             {{--alt="" height="20" width="20" >--}}
   {{--@else--}}
        {{--<img src="{{asset('storage/'.$profileImage->card->image)}} "  class="img-fluid"--}}
             {{--alt="" height="20" width="20" >--}}
{{--@endif--}}
@endsection



