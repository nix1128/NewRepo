<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use App\Model\Hause_users;
use App\Model\Post;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;






class userController extends Controller
{




 function others (Request $request)
    {
        $name = $request->session()->get('name');

        if ($name) {
            return view('frontview.layouts.others', ['others' => [' one', ' two', ' three', ' four']],['username'=>$name]);
        } else {
            return view ('frontview.layouts.login');
        }
    }

    function landing (){

     return view ('frontview.layouts.landing',[]);

        }

    function home (Request $request){

        $name = $request->session()->get('name');
        if ($name) {
            return view('frontview.layouts.home', ['username' => $name],[]);

        } else {
            return view('frontview.layouts.login');
        }
    }

   function logout(Request $request) {

       //Auth::logout();
       Session::flush();
       Session::forget('name');
           return redirect('/');

       }




//    function misc (Request $request){
//
//
//       $posts = Post::orderBy('created_at','desc')->paginate(5);
//        $name = $request->session()->get('name');
//        $misc = array ('misc' => [ 'Последни' , 'Гласувания' , 'Приети', 'Отхвърлени']);
//        $user = Hause_users::where('username', $request->session()->get('name'))->first();
//
////        $post_names = Post::select("user_id", $request->session()->get('id'))->first();
////        dd($post_names);
//
//
//
//
//       // $users = $user->posts()->get();
////         dd($user->username);
//
//        if ($name) {
//            return view ('frontview.layouts.misc', compact( 'misc', 'posts','user'),['username'=>$name]);
//    }else {
//            return view('frontview.layouts.login');
//        }
//    }


    function hausemasters (Request $request){

        $name = $request->session()->get('name');
        $user = Hause_users::all();

        if ($name) {
        return view ('frontview.layouts.hausemaster', ['user'=> $user], ['username'=>$name]);
        }else {
            return view('frontview.layouts.login');
        }
     }

    function contacts (){
        return view ('frontview.layouts.userView',  ['contacts' => ['Home','About','Contacts','Misc','Others']]);
    }


    function about(Request $request){


        $name = $request->session()->get('name');

        if ($name) {
        return view ('frontview.layouts.about',  ['about' => ['about us','About you','...Them','..and the Others']],
            ['username'=>$name]);
    }
        else {
            return view('frontview.layouts.login');
        }
    }

}
