<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('dashboard.managers.index', [
//            'managers' => Manager::all()
//        ]);

        $managers = Manager::latest()->get();
        return view('dashboard.managers.index', compact('managers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.managers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Manager $manager)
    {
        $attributes = request()->validate([
            'username' => 'required|unique:managers,username,'. $manager->id . ',id',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:managers,email,' . $manager->id . ',id',
            'password' => 'required|confirmed',
            'avatar' => ['nullable', 'mimes:jpg,jpeg,png,gif', 'max:2048'],
        ]);

        $avatarPath = null;
        if (request()->hasFile('avatar')) {

            $avatarName = pathinfo(request()->file('avatar')->getClientOriginalName(), PATHINFO_FILENAME) ;
            $avatarExt = request()->file('avatar')->getClientOriginalExtension() ;
            $avatarNewName = $avatarName . '-' . uniqid() . '.' . $avatarExt;

            $avatarPath = request()->file('avatar')->storeAs(
                'uploads/managers',
                $avatarNewName,
                'public',
            );
            $attributes['avatar'] = $avatarPath;
        }

        if (request('password')) {
            $attributes['password'] = bcrypt($attributes['password']);
        }

        Manager::create($attributes);

        return redirect('admin/managers')->with('message', 'Manger added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Manager $manager)
    {

        return view('dashboard.managers.show', compact('manager'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Manager $manager)
    {
        //($manager);
        return view('dashboard.managers.edit', ['manager' => $manager]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Manager $manager)
    {
        //dd(request());
        $attributes = request()->validate([
            'username' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:managers,email,' . $manager->id . ',id',
            'avatar' => ['nullable', 'mimes:jpg,jpeg,png,gif', 'max:2048'],
        ]);

        $avatarPath = null;

        if (request()->hasFile('avatar')) {

            $avatarName = pathinfo(request()->file('avatar')->getClientOriginalName(), PATHINFO_FILENAME) ;
            $avatarExt = request()->file('avatar')->getClientOriginalExtension() ;
            $avatarNewName = $avatarName . '-' . uniqid() . '.' . $avatarExt;

            $avatarPath = request()->file('avatar')->storeAs(
                'uploads/managers',
                 $avatarNewName,
                'public',
            );

        }
        $attributes['avatar'] = $avatarPath;
        if (request('password')) {
            $attributes['password'] = bcrypt($attributes['password']);
        }

        $manager->update($attributes);

        return redirect('admin/managers')->with('message', 'Manger updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
