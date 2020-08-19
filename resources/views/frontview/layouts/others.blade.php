@extends('frontview.layouts.userView')
@extends('frontview.layouts.default')


@section('title')
    Other
@endsection

@section('content')

<h2>Лични колони</h2>
@foreach($others as $v)
    <div class="container">
        <article class="row single-post mt-5 no-gutters">
            <div class="col-md-6">
                <div class="image-wrapper float-left pr-3">
                    <img src="https://placeimg.com/150/150/animals" alt="">
                </div>
                <div class="single-post-content-wrapper p-3">

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ad, ex eaque fuga minus reprehenderit asperiores earum incidunt. Possimus maiores dolores voluptatum enim soluta omnis debitis quam ab nemo necessitatibus.

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ad, ex eaque fuga minus reprehenderit asperiores earum incidunt. Possimus maiores dolores voluptatum enim soluta omnis debitis quam ab nemo necessitatibus.
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ad, ex eaque fuga minus reprehenderit asperiores earum incidunt. Possimus maiores dolores voluptatum enim soluta omnis debitis quam ab nemo necessitatibus.

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ad, ex eaque fuga minus reprehenderit asperiores earum incidunt. Possimus maiores dolores voluptatum enim soluta omnis debitis quam ab nemo necessitatibus.

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ad, ex eaque fuga minus reprehenderit asperiores earum incidunt. Possimus maiores dolores voluptatum enim soluta omnis debitis quam ab nemo necessitatibus.
                </div>
            </div>
        </article>
    </div>
@endforeach


@endsection
@section('name')
    {{ $username }}
    @if(isset($profileImage->card->image))
        <img src="{{asset('storage/'.$profileImage->card->image)}} "  class="img-fluid border border-warning" alt="" height="20" width="20" >
    @elseif($user->sex == 1)
        <img src="{{asset('storage/avatars/male.jpeg')}} "  class="img-fluid border border-warning"
             alt="" height="20" width="20" >
    @elseif($user->sex == 0)
        <img src="{{asset('storage/avatars/female.jpeg')}} "  class="img-fluid border border-warning"
             alt="" height="20" width="20" >
    @else
    @endif
@endsection
