<?php

namespace App\Http\Controllers\userController;


use App\Model\Hause_users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;


class loginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authLogin(Request $request)
    {

        $request->validate([

            'username' => 'required|exists:users',
            'password' => 'required',
        ],
            [
                'username.exists' => 'Незивестен потребител',
                'username.required' => 'Псевдоним е задължителен',
                'password.required' => 'Парола е задължителна',

            ]);

        $message = [
            'password' => 'Грешна парола',
        ];

        $data = Hause_users::where('username', '=', request('username'))->first();
        $username = Hause_users::where('username', 'LIKE', request('username'))->first();


        if (!$username) {
            return redirect()->route('login')
                ->withErrors('');

        } elseif (Hash::check($request->password, $data->password)) {
            $request->session()->put('name', request('username'));
            $request->session()->put('id', request('id'));

            $request->session()->put('email', request('email'));
            $request->session()->put('first_name_last_name', request('first_last_name'));
            $request->session()->put('id', request('id'));
            $request->session()->save('name', request('username'));
            return view('frontview.layouts.home',['username'=> request('username')]);

        } else {
            return redirect()->route('login')->withInput()
                ->withErrors($message);
        }
    }



}







