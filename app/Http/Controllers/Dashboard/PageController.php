<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::latest()->get();
        return view('dashboard.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Page $page)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => 'unique:pages,slug,' . $page->id . ',id' ,
            'except' => 'required' ,
            'body' => 'required' ,
            'thumbnail' => ['nullable', 'mimes:jpg,jpeg,png,gif', 'max:2048'],
        ]);

        $attributes['slug'] =  request()->slug ? Str::slug(request()->slug, '-') :  Str::slug(request()->title, '-') ;

        $avatarPath = null;
        if (request()->hasFile('thumbnail')) {

            $avatarName = pathinfo(request()->file('thumbnail')->getClientOriginalName(), PATHINFO_FILENAME);
            $avatarExt = request()->file('thumbnail')->getClientOriginalExtension();
            $avatarNewName = $avatarName . '-' . uniqid() . '.' . $avatarExt;

            $avatarPath = request()->file('thumbnail')->storeAs(
                'uploads/pages',
                $avatarNewName,
                'public',
            );

        }
        $attributes['thumbnail'] = $avatarPath;

        Page::create($attributes);
        return  redirect('admin/pages')->with('message', 'Page Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('dashboard.pages.show',compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('dashboard.pages.edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Page $page)
    {
        //dd(request());
        $attributes = request()->validate([
            'title' => 'required' ,
            'slug' => 'unique:pages,slug,' . $page->id . ',id' ,
            'except' => 'required' ,
            'body' => 'required' ,
            'thumbnail' => ['nullable', 'mimes:jpg,jpeg,png,gif', 'max:2048'],
        ]);



        $attributes['slug'] =  request()->slug ? Str::slug(request()->slug, '-') :  Str::slug(request()->title, '-') ;

        $avatarPath = null;
        if (request()->hasFile('thumbnail')) {

            $avatarName = pathinfo(request()->file('thumbnail')->getClientOriginalName(), PATHINFO_FILENAME);
            $avatarExt = request()->file('thumbnail')->getClientOriginalExtension();
            $avatarNewName = $avatarName . '-' . uniqid() . '.' . $avatarExt;

            $avatarPath = request()->file('thumbnail')->storeAs(
                'uploads/pages',
                $avatarNewName,
                'public',
            );
            $attributes['thumbnail'] = $avatarPath;
        }

        $page->update($attributes);

        return  redirect('admin/pages')->with('message', 'Page updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
       if(is_file($page->thumbnail)) unlink($page->thumbnail);
        $page->delete();
        return redirect('admin/pages');
    }
}
