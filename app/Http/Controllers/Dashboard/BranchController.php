<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::latest()->get();
        return view('dashboard.branches.index', compact('branches'));
    }

    public function create()
    {
        return view('dashboard.branches.create');
    }

    public function store(Branch $branch)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'nullable',
            'email' => 'nullable|email',
            'lat' => 'nullable',
            'lng' => 'nullable',
        ]);

        Branch::create($attributes);
        return redirect('admin/branches')->with('message', 'branches added successfully !!');
    }

    public function show(Branch $branch)
    {
        return view('dashboard.branches.show', compact('branch'));
    }

    public function edit(Branch $branch)
    {
        return view('dashboard.branches.edit', compact('branch'));
    }

    public function update(Branch $branch)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'nullable',
            'email' => 'nullable|email',
            'lat' => 'nullable',
            'lng' => 'nullable',
        ]);
        $branch->update($attributes);
        return redirect('admin/branches')->with('message','branch updated successfully');
    }

    public function destroy(Branch $branch)
    {
        $branch->delete();
        return redirect('admin/branches')->with('message', 'branch deleted');
    }
}
