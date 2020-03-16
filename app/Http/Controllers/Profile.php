<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Profile extends Controller
{
    public function index()
    {
        //
    }

    public function Login()
    {
        return view('auth.login');
    }

    public function login_user()
    {
        if (!session()->has('user')) {
            $user = DB::table('users')
                ->where('email', Input::input("email"))
                ->where('password', Input::input("password"))
                ->first();
            session()->put('user', $user);
        }
        return redirect('Dashboard');
    }

    public function lock()
    {
        return view('auth.lock')->with('user', session()->get('user'));
    }

    public function unlock()
    {
        if(session()->get('user')->password===Input::input('password'))
            return redirect()->route('Dashboard')->with('user', session()->get('user'));
        else
            return redirect()->back();

    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
