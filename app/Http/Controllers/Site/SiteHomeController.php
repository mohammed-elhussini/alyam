<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;

class SiteHomeController extends Controller
{
    public function home(){
        $brands = Brand::withCount('cars')->get();
        $cars = Car::all();
        return view('site.index',compact('brands','cars'));
    }
}
