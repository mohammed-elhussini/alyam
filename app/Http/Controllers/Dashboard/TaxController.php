<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taxes = Tax::latest()->get();
        return view('dashboard.taxes.index', compact('taxes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('dashboard.taxes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Tax $tax)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'value' => 'required|numeric',
            'type' => 'required',
        ]);

        $tax::create($attributes);
        return redirect('admin/taxes')->with('message','tax added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Tax $tax
     * @return \Illuminate\Http\Response
     */
    public function show(Tax $tax)
    {
        return view('dashboard.taxes.show', compact('tax'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tax $tax
     * @return \Illuminate\Http\Response
     */
    public function edit(Tax $tax)
    {
        return view('dashboard.taxes.edit', compact('tax'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tax $tax
     * @return \Illuminate\Http\Response
     */
    public function update(Tax $tax)
    {
        //dd(request());
        $attributes = request()->validate([
            'name' => 'required',
            'value' => 'required',
            'type' => 'required',
        ]);
        $tax->update($attributes);
        return redirect('admin/taxes')->with('message', 'tax updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tax $tax
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tax $tax)
    {
        $tax->delete();
        return redirect('admin/taxes');
    }
}
