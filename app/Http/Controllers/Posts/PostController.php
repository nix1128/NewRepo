<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Model\Comment;
use App\Model\Post;
use App\Model\Vote;
use App\User_card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Hause_users;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Carbon;
use DateTime;


//1.Like dislike vote system  OK
//2.posts delete ??
//total comments show in a badge - OK
// delete update buttons to show up just for self posts/comments
// make femaile choosable and random pic add by registering - OK
// create post to be only bettween availible posts - to be choosable
// post update button to be only for the creator of the post  - ok 20 min
//pagination hausemaster page




class PostController extends Controller
{




    public function index(Request $request)


    {
        $posts = Post::with('user')->withCount(['likes', 'dislikes','comments'])->paginate(1);
        $name = $request->session()->get('name');
        //dd($posts);
        $misc = array('misc');
        $user = Hause_users::where('username', $request->session()->get('name'))->first();

        if ($name) {
            return view('frontview.layouts.misc', compact('misc','user'), ['username' => $name])
                ->with('posts',$posts);
        } else {
            return view('frontview.layouts.login');
       }

    }

    public function create(Request $request)
    {

        $card = Hause_users::with('card')->first();
        $user = Hause_users::where('username', $request->session()->get('name'))->first();
        $name = $request->session()->get('name');
        $post = Post::where('id', request('post_id'))->get();


        // dd($date);
        return view('posts.create', compact('name', 'post','card','user'));

    }




    public function store(Request  $request)

    {


        $user = Hause_users::where('username', session()->get('name'))->first();

        $request->validate([
            'title' => 'required',
            'subject' => 'required',
            'body' => 'required',
        ]);

        $date = request('data');
        $dates = Carbon::parse($date)->format('Y-m-d H:i:s');

        //dd($dates);

        $post = new Post();
        $post->subject = request('subject');
        $post->title = request('title');
        $post->body = request('body');

        $post->created_for = $dates;
        //$post->save(['timestamps' => false]);

        $post->user()->associate($user);
        $user->posts()->save($post);

//        $now  = Carbon::now();
//        $end  = request('data');
//
//        // show difference in days between now and end dates
//        dd( $now->diffInDays($end));


//        $counter = Carbon::now();
//        $to = Carbon::createFromFormat('Y-m-d H:i:s', $dates);
//        $from =Carbon::createFromFormat('Y-m-d H:i:s', $counter);
//        $diff = $to->diffInDays($from);



        $start = new DateTime(request('data'));
        $end = new DateTime($post->created_for);
        $result = $start->diff($end);
        $result->format("%H:%I:%S");







        return redirect('posts')->with('success','');

        }



    public function edit(Request $request)
    {
        $user = Hause_users::where('username', session()->get('name'))->first();
        $username = $user->username;
        $post = Post::where('id', request('post_id'))->first();



        //dd($post->user_id);
        if($post->user_id != $user->id)
        {
            return back()->with('post_edit_error','');
        }
        else {
            return view('posts.edit', compact('user','post','username',''));
        }

        //dd($post);

    }


    public function update(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'subject' => 'required',
            'body' => 'required',
        ]);


        $user = Hause_users::where('username', session()->get('name'))->first();
        $post = Post::where('id', request('post_id'))->first();
        //$post = Post::with('id');
       //dd($post);

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
