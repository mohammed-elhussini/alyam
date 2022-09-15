<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ManagerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('dashboard.login');
})->name('administrator');

Route::prefix("admin")->group(function(){




    Route::get('/', function () {
        return view('dashboard.index');
    })->name('admin');

//
    Route::get('/cars', function () {
        return view('dashboard.cars.index');
    })->name('cars');

    Route::get('/cars/create', function () {
        return view('dashboard.cars.create');
    })->name('new-car');

//
    Route::get('/brands', function () {
        return view('dashboard.brands.index');
    })->name('brands');

    Route::get('/brands/create', function () {
        return view('dashboard.brands.create');
    })->name('new-brand');

//
    Route::get('/taxes', function () {
        return view('dashboard.taxes.index');
    })->name('taxes');

    Route::get('/taxes/create', function () {
        return view('dashboard.taxes.create');
    })->name('new-tax');

//
    Route::get('/branches', function () {
        return view('dashboard.branches.index');
    })->name('branches');

    Route::get('/branches/create', function () {
        return view('dashboard.branches.create');
    })->name('new-branches');

//
    Route::get('/pages', function () {
        return view('dashboard.pages.index');
    })->name('pages');

    Route::get('/pages/create', function () {
        return view('dashboard.pages.create');
    })->name('new-page');

//
    Route::get('/users', function () {
        return view('dashboard.users.index');
    })->name('users');

    Route::get('/users/create', function () {
        return view('dashboard.users.create');
    })->name('new-user');
//
    Route::get('/orders', function () {
        return view('dashboard.orders.index');
    })->name('orders');

    Route::get('/orders/show', function () {
        return view('dashboard.orders.show');
    })->name('view-order');
//
    Route::get('/contacts', function () {
        return view('dashboard.contacts.index');
    })->name('contacts');

    Route::get('/contacts/show', function () {
        return view('dashboard.contacts.show');
    })->name('view-contact');
//
//    Route::get('/managers', function () {
//        return view('dashboard.managers.index');
//    })->name('managers');

//    Route::get('/managers/create', function () {
//        return view('dashboard.managers.create');
//    })->name('new-manager');

    Route::get('/managers',[ManagerController::class,'index'])->name('managers');
    Route::get('/managers/{manager}/edit',[ManagerController::class,'edit']);
    Route::put('/managers/{manager}',[ManagerController::class,'update']);
    Route::get('/managers/create',[ManagerController::class,'create'])->name('new-manager');
    Route::post('/managers',[ManagerController::class,'store']);
    Route::get('/managers/{manager}',[ManagerController::class,'show']);


});
