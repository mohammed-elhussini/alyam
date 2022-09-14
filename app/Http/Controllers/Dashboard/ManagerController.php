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

        $managers = Manager::all();
        return view('dashboard.managers.index', compact('managers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('categories.edit',compact('category'));
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
            $attributes['avatar'] = $avatarPath;
        }

        if (request('password')) {
            $attributes['password'] = Hash::make(request('password'));
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

//    private function storeImage()
//    {
//        $newImageName = uniqid() . '-' . request()->title . '. ' . request()->file->extension();
//        return request()->file->move(public_path('uploads/managers'),$newImageName);
//    }
}
