<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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
        //dd(request());
        $attributes = request()->validate([
            'name' => 'required|unique:users,name',
            'first_name' => 'nullable',
            'last_name' => 'nullable',
            'nationality' => 'nullable',
            'birthday'=> 'required',
            'phone'=> 'required|unique:users,phone',
            'driving_license'=> 'required|unique:users,driving_license',
            'driving_license_exp'=> 'required',
            'id_number'=> 'required|unique:users,id_number',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|confirmed',
            'avatar' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $avatarPath = null;
        if (request()->hasFile('avatar')) {

            $avatarName = pathinfo(request()->file('avatar')->getClientOriginalName(), PATHINFO_FILENAME);
            $avatarExt = request()->file('avatar')->getClientOriginalExtension();
            $avatarNewName = $avatarName . '-' . uniqid() . '.' . $avatarExt;

            $avatarPath = request()->file('avatar')->storeAs(
                'uploads/users',
                $avatarNewName,
                'public',
            );

        }
        $attributes['avatar'] = $avatarPath;
        $attributes['birthday'] = Carbon::parse(request('birthday'))->format('y-m-d');
        $attributes['driving_license_exp'] =  Carbon::parse(request('driving_license_exp'))->format('y-m-d');
        $attributes['password'] = bcrypt($attributes['password']);
//         $attributes['password'] = Hash::make(request('password'));

        $user = User::create($attributes);
        auth()->login($user);
        return redirect()->route('profile')->with('message', 'user added successfully!');
    }

    public function destroy(){

        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/')->with('message', 'you have been logout');
    }

}
