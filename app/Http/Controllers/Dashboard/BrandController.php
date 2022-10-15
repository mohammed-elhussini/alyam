<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::latest()->get();
        return view('dashboard.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Brand $brand)
    {
        $attributes = request()->validate([
            'title' => 'required|unique:brands,title,' . $brand->id . ',id',
            'description' => 'nullable',

        ]);
        $avatarPath = null;
        if (request()->hasFile('image')) {
            $avatarName = pathinfo(request()->file('image')->getClientOriginalName(), PATHINFO_FILENAME);
            $avatarExt = request()->file('image')->getClientOriginalExtension();
            $avatarNewName = $avatarName . '-' . uniqid() . '.' . $avatarExt;

            $avatarPath = request()->file('image')->storeAs(
                'uploads/brands',
                $avatarNewName,
                'public',
            );
            $attributes['image'] = $avatarPath;
        }

        $brand::create($attributes);
        return redirect()->route('brands.index')->with('message', 'brand updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //$brand = Brand::findOrFail($id);
        $cars = Car::where('brand_id', $brand)->get();

        return view('dashboard.brands.show', compact('brand','cars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('dashboard.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Brand $brand)
    {
        $attributes = request()->validate([
            'title' => 'required|unique:brands,title,' . $brand->id . ',id',
            'description' => 'nullable',
        ]);

        $avatarPath = null;
        if (request()->hasFile('image')) {
            $avatarName = pathinfo(request()->file('image')->getClientOriginalName(), PATHINFO_FILENAME);
            $avatarExt = request()->file('image')->getClientOriginalExtension();
            $avatarNewName = $avatarName . '-' . uniqid() . '.' . $avatarExt;

            $avatarPath = request()->file('image')->storeAs(
                'uploads/brands',
                $avatarNewName,
                'public',
            );
            $attributes['image'] = $avatarPath;
        }

        $brand->update($attributes);
        return redirect('admin/brands')->with('message', 'brand upadeted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        if (is_file($brand->image)) unlink($brand->image);
        $brand->delete();
        return redirect('admin/brands');
    }
}
