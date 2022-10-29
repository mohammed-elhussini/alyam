<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->get();
        return view('dashboard.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //dd(request());
        $attributes = request()->validate([
           'name'=> 'required|unique:users,name',
           'first_name'=> 'nullable',
           'last_name'=> 'nullable',
           'nationality'=> 'required',
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
        return redirect('admin/users')->with('message', 'user added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
       return view('dashboard.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        $attributes = request()->validate([
            'name'=> 'required|unique:users,name,' .$user->id . ',id',
            'first_name'=> 'nullable',
            'last_name'=> 'nullable',
            'nationality'=> 'required',
            'birthday'=> 'required',
            'phone'=> 'required|unique:users,phone,' .$user->id . ',id',
            'driving_license'=> 'required|unique:users,driving_license,' .$user->id . ',id',
            'driving_license_exp'=> 'required',
            'id_number'=> 'required|unique:users,id_number,' .$user->id . ',id',
            'email'=> 'required|email|unique:users,email,' .$user->id . ',id',
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
            $attributes['avatar'] = $avatarPath;
        }

        $attributes['birthday'] = Carbon::parse(request('birthday'))->format('y-m-d');
        $attributes['driving_license_exp'] =  Carbon::parse(request('driving_license_exp'))->format('y-m-d');
        if (request('password')) {
//            $attributes['password'] = bcrypt($attributes['password']);
            $attributes['password'] = Hash::make(request('password'));
        }

        $user->update($attributes);
        return redirect('admin/users')->with('message', 'user updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (is_file($user->avatar)) unlink($user->avatar);
        $user->delete();
        return back();
    }
}
