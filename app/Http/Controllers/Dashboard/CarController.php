<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Picture;
use App\Models\Tax;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::latest()->get();
        return view('dashboard.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $taxes = Tax::all();
        return view('dashboard.cars.create', compact('brands', 'taxes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(Request());
        $attributes = request()->validate([
            'name' => 'required',
            'except' => 'nullable',
            'description' => 'nullable',
            'model' => 'nullable',
            'manufacture' => 'nullable',
            'brand_id' => 'nullable',
            'price' => 'nullable',
            'tax_id' => 'nullable',
            'picture' => ['nullable','mimes:jpg,jpeg,png', 'max:4096'],
            'photos'   => ['nullable', 'array'],
            'photos.*' => ['nullable','image','mimes:jpg,jpeg,png','max:4096'],
            'title' => ['nullable', 'array'],
            'title.*' => ['nullable', 'string'],
        ]);

        if (request()->hasFile('picture')) {
            //$avatarPath = null;
            $avatarName = pathinfo(request()->file('picture')->getClientOriginalName(), PATHINFO_FILENAME);
            $avatarExt = request()->file('picture')->getClientOriginalExtension();
            $avatarNewName = $avatarName . '-' . uniqid() . '.' . $avatarExt;

            $avatarPath = request()->file('picture')->storeAs(
                'uploads/cars',
                $avatarNewName,
                'public',
            );
            $attributes['picture'] = $avatarPath;
        }

        $car = Car::create($attributes);

        if (request()->hasFile('photos')) {
            //$avatarPathPhoto = null;
            foreach (request()->file('photos') as $photo) {

                $avatarNamePhoto = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                $avatarExtPhoto = $photo->getClientOriginalExtension();
                $avatarNewNamePhoto = $avatarNamePhoto . '-' . uniqid() . '.' . $avatarExtPhoto;
                $avatarPathPhoto = $photo->storeAs(
                    'uploads/cars',
                    $avatarNewNamePhoto,
                    'public',
                );

                $car->pictures()->create([
                    'car_id' => $car->id,
                    'title' => $attributes['title'],
                    'picture' => $avatarPathPhoto,
                ]);

            }
        }

        return redirect('admin/cars')->with('message', 'Car added successfully!');


//        $this->validate(request(), [
//            'name' => 'required',
//            'except' => 'nullable',
//            'description' => 'nullable',
//            'model' => 'nullable',
//            'manufacture' => 'nullable',
//            'brand_id' => 'required',
//            'price' => 'required',
//            'tax_id' => 'nullable',
//            'picture' => ['nullable', 'mimes:jpg,jpeg,png,gif', 'max:2048'],
//            'photos' => ['nullable', 'mimes:jpg,jpeg,png,gif', 'max:2048'],
//            'title' => 'nullable',
//        ]);
//
//        $car = new Car;
//        $car->name = $request->name;
//        $car->except = $request->except;
//        $car->description = $request->description;
//        $car->model = $request->model;
//        $car->manufacture = $request->manufacture;
//        $car->brand_id = $request->brand_id;
//        $car->price = $request->price;
//        $car->tax_id = $request->tax_id;
//
//        $avatarPath = null;
//        if (request()->hasFile('picture')) {
//            $avatarName = pathinfo(request()->file('picture')->getClientOriginalName(), PATHINFO_FILENAME);
//            $avatarExt = request()->file('picture')->getClientOriginalExtension();
//            $avatarNewName = $avatarName . '-' . uniqid() . '.' . $avatarExt;
//            $avatarPath = request()->file('picture')->storeAs(
//                'uploads/cars',
//                $avatarNewName,
//                'public',
//            );
//            $car->picture = $avatarPath;
//        }
//
//        $newcar = $car->save();
//        $title = $request->title;
//
//        foreach($request->photos as $k => $photo){
//            $pic = new Picture;
//            $pic->car_id = $car->id;
//            $pic->title = $title[$k];
//            $avatarName = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
//            $avatarExt = $photo->getClientOriginalExtension();
//            $avatarNewName = $avatarName . '-' . uniqid() . '.' . $avatarExt;
//            $avatarPath = $photo->storeAs(
//                'uploads/cars',
//                $avatarNewName,
//                'public',
//            );
//            $pic->picture = $avatarPath;
//            $pic->save();
//        }
//
//        return redirect('admin/cars')->with('message', 'Car added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('dashboard.cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $brands = Brand::all();
        $taxes = Tax::all();
        return view('dashboard.cars.edit', compact('car', 'brands', 'taxes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
