<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brand($id){
        //$brand = Brand::findOrFail($id);
        $brand = Brand::withCount('cars')->where('id', $id)->get()->first();

        $cars = Car::with('brand')->where('brand_id', $id)->latest()->get();
        return view('site.brands.index',compact('brand','cars'));
    }
}
