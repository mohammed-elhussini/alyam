<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;

class SiteHomeController extends Controller
{
    public function home(){
        $brands = Brand::withCount('cars')->get();
        $cars = Car::all();
        $branches = Branch::all();
        return view('site.index',compact('brands','cars','branches'));
    }
}
