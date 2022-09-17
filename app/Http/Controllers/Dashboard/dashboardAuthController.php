<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class dashboardAuthController extends Controller
{

    public function login()
    {
        return view('dashboard.authentication.login');
    }

    public function authenticate()
    {
        //dd(request());
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('dashboard')->attempt($attributes)) {
            request()->session()->regenerate();
            // Authentication passed...
            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'email' => 'Invalid credentials'
        ])->onlyInput('email');

    }

    public function logout()
    {
        Auth::guard('dashboard')->logout();
        return redirect('dashboard/login')->with('success','Logout');
    }

}
