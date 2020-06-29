<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use App\Model\Comment;
use App\Model\PasswordReset;
use App\Model\Hause_users;

use App\Model\Post;
use App\User_card;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Phone;

use Illuminate\Support\Str;






class regController extends Controller
{


    function registration()
    {
        return view('frontview.layouts.register');
    }


    public function validation(Request $request)
    {
        $request->validate([
            'first_last_name' => 'required|string',
            'username' => 'filled|unique:users',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6',
            'retype_password' => 'same:password'


        ], [
//lang error change

            'first_last_name.required' => 'Полъпнете "Име и Фамилия"',

            'username.filled' => 'Попълнете "Псевдоним" ',
                'username.unique' => 'Съществуващ псевдоним, моля, изберете уникален ',
                'email.email' => 'Попълнете имейл',
                'email.unique' => 'Съществуващ мейл',
                'password.required' => 'Въведете парола',
                 'password.size' => 'Паролата трябва да е поне 6 знака',
                'retype_password.same' => 'Паролата трябва да съвпада',

        ]


    );




        if ($request == false ) {
// return in $error in defaultBlade with added input
            return redirect()->route('registration')->withInput($request)->withErrors($request);
        } else {
            return ($this->store($request));
        }
    }

    function store(Request $request)
    {

               $user = new Hause_users();
               $user->username = request('username');
               $user->Email = request('email');

               $user->password = Hash::make(request('password'));
               $user->First_Last_Name = request('first_last_name');
               $user ->api_token = Str::random(60);

                $user->save();

//        $passwordReset = new passwordReset();
//        $user->passwordReset()->create(['user_id'  =>$passwordReset]);

        $phone = new Phone();
        $user->phone()->create(['user_id'=> $phone]);

//        $posts = new Post();
//        $user->posts()->create(['user_id'=>$posts]);







        $user_card = new User_card();
        $user->card()->create(['user_id'=>$user_card]);
        return redirect('login')->with('status', 'Успешна регистрация!Моля, влезте в профила си!');




           }




}