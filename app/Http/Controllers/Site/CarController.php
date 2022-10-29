<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $cars = Car::latest()->paginate(4);
        //$cars = Car::all();
        $brands = Brand::all();
        $branches = Branch::all();
        return view('site.cars.index',compact('cars','brands','branches'));
    }
    public function show($id){
        $car = Car::findOrFail($id);
        return view('site.cars.show',compact('car'));
    }
}
