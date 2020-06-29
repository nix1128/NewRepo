<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Model\Comment;
use App\Model\Post;
use Illuminate\Http\Request;

use App\Model\Hause_users;






class PostController extends Controller


{

    public function index(Request $request)


    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        $name = $request->session()->get('name');
        $misc = array('misc' => ['Последни', 'Гласувания', 'Приети', 'Отхвърлени']);
        $user = Hause_users::where('username', $request->session()->get('name'))->first();

//        $post_names = Post::select("user_id", $request->session()->get('id'))->first();
//        dd($post_names);

        // $users = $user->posts()->get();
//         dd($user->username);

        if ($name) {
            return view('frontview.layouts.misc', compact('misc', 'posts', 'user'), ['username' => $name]);
        } else {
            return view('frontview.layouts.login');
        }

    }

    public function create(Request $request)
    {


        //проверка на съществуваща тема
        //пост рекуест и сейф
        //post update


        $name = $request->session()->get('name');
        $post = Post::where('id', request('post_id'))->get();

       //dd($post);

        return view('posts.create', compact('name', 'post'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)

    {

        $user = Hause_users::where('username', session()->get('name'))->first();

        $post = Post::where('id', request('post_id'))->get();
//dd($post);


        //dd($post);
        //dd($post);
//        $post_id = $user->posts()->where('id',request('post_id'))->first();
//        dd($post_id);
//        $post = Post::find(1);
//
//        dd($user->posts()->where('id')->get());
//        //dd($user->posts->first());
////dd($post);
//        $gg = $user->posts()->find(1);
//dd($gg);
//dd($request->all());

        $request->validate([
            'title' => 'required',
            'subject' => 'required',
            'body' => 'required',
        ]);

            $post = new Post();
        $post->subject = request('subject');
        $post->title = request('title');
        $post->body = request('body');
        $post->user()->associate($user);
        $user->posts()->save($post);


            return back()->with('success', '');
        }

    public function edit(Request $request)
    {

        $name = $request->session()->get('name');
        $post = Post::where('id', request('post_id'))->get();

        //dd($post);

        return view('posts.edit', compact('name', 'post'));

    }


    public function update(Request $request)
    {
        $user = Hause_users::where('username', session()->get('name'))->first();
        $post = Post::where('id', request('post_id'))->first();


        if($post->user_id !== $user->id){ abort(403);}
        else {
            $post->subject = request('subject');
            $post->title = request('title');
            $post->body = request('body');
            $post->update();


            return back()->with('success','');

        }

    }







}
