<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function profile()
    {
        //dd(auth()->user()->id);
        $user_id = auth()->user()->id;
        return view('site.users.profile',compact('user_id'));
    }

    public function update(){

        $user_id = auth()->user()->id;

        $attributes = request()->validate([
            'first_name' => 'nullable',
            'last_name' => 'nullable',
            'nationality' => 'nullable',
            'id_number' => 'required|unique:users,id_number,'.$user_id.',id',
            'phone' => 'required|unique:users,phone,'.$user_id.',id',
            'driving_license' => 'required|unique:users,driving_license,'.$user_id.',id',
            'driving_license_exp' => 'required',
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
            $attributes['avatar'] = $avatarPath;
        }

        $attributes['birthday'] = Carbon::parse(request('birthday'))->format('y-m-d');
        $attributes['driving_license_exp'] =  Carbon::parse(request('driving_license_exp'))->format('y-m-d');
        if (request('password')) {
//            $attributes['password'] = bcrypt($attributes['password']);
            $attributes['password'] = Hash::make(request('password'));
        }

        $user = auth()->user();
        $user->update($attributes);
        return redirect('')->with('message', 'profile updated successfully!');

    }
}
