<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Model\Comment;
use App\Model\Hause_users;
use App\Model\Post;
use Illuminate\Http\Request;

class Comments extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {



        $user = Hause_users::where('username',session()->get('name'))->first();
        $post = Post::where('id','=',request('post_id'))->first();

//$comment = Comment::where('username','=',request('username'))->first();
//        dd($comment);


        $name = $request->session()->get('name');


        //$post = Post::where('id','=',$user->id)->first();;
        //$post = Post::find($request->get('post_id'));

        $comment = new Comment();
        $comment->content = request('comment');
        $comment->user()->associate($user);
        $post->comments()->save($comment);

        $comment = new Comment();
        $comment->content = request('comment');
        $comment->post_id = request('post_id');
        $comment->comment()->associate($comment);


        return back();

    }





//       $comment = new Comment();
//        $comment->save();


//        $request->validate([
//            'body' => 'required',
//        ]);




//        public function replyStore(Request $request)
//    {
//        $reply = new Comment();
//
//        $reply->comment = $request->get('comment');
//
//        $reply->user()->associate($request->user());
//
//        $reply->parent_id = $request->get('comment_id');
//
//        $post = Post::find($request->get('post_id'));
//
//        $post->comments()->save($reply);
//
//        return back();
//
//    }



}
