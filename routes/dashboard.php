<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ManagerController;
use App\Http\Controllers\Dashboard\dashboardAuthController;

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

Route::get('/dashboard/login',[dashboardAuthController::class,'login']);
Route::post('/dashboard/login',[dashboardAuthController::class,'authenticate']);


Route::get('/forget', function () {
    return view('dashboard.authentication.forget');
})->name('forget');

Route::prefix("admin")->group(function () {


    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard');

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


//    Route::get('/managers',[ManagerController::class,'index'])->name('managers');
//    Route::get('/managers/{manager}/edit',[ManagerController::class,'edit']);
//    Route::put('/managers/{manager}',[ManagerController::class,'update']);
//    Route::get('/managers/create',[ManagerController::class,'create'])->name('new-manager');
//    Route::post('/managers',[ManagerController::class,'store']);
//    Route::get('/managers/{manager}',[ManagerController::class,'show']);
//    Route::delete('/managers/{manager}',[ManagerController::class,'destroy']);


    Route::resource('managers', ManagerController::class);


});
