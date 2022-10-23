<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('site.users.membership');
    }

    public function authenticate()
    {
        //dd(request());
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            request()->session()->regenerate();
            return redirect()->intended('/')->with('message', 'You Are Log');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials'
        ])->onlyInput('email');
    }

    public function create()
    {
        dd(request());
    }

    public function destroy(){

        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/')->with('message', 'you have been logout');
    }

}
