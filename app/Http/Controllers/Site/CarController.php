<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function show($id){
        $car = Car::findOrFail($id);
        return view('site.cars.show',compact('car'));
    }
}
