<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\dashboardAuthController;
use App\Http\Controllers\Dashboard\ManagerController;
use \App\Http\Controllers\Dashboard\ContactController;
use \App\Http\Controllers\Dashboard\UserController;
use \App\Http\Controllers\Dashboard\PageController;

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
Route::middleware('dashboardAuthLogin')->group(function () {

    Route::get('/dashboard/login', [dashboardAuthController::class, 'login']);
    Route::post('/dashboard/login', [dashboardAuthController::class, 'authenticate']);
    Route::get('/forget', function () {
        return view('dashboard.authentication.forget');
    })->name('forget');

});


Route::group(['prefix' => 'admin', 'middleware' => 'dashboardAuth'], function () {

    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard');

    //
    Route::get('/logout', [dashboardAuthController::class, 'logout'])->name('logout');
//

    Route::resource('managers', ManagerController::class);
    Route::resource('contacts', ContactController::class)->only(['index', 'show', 'destroy']);
    Route::resource('users', UserController::class);
    Route::resource('pages', PageController::class);
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
    Route::get('/orders', function () {
        return view('dashboard.orders.index');
    })->name('orders');

    Route::get('/orders/show', function () {
        return view('dashboard.orders.show');
    })->name('view-order');
//

});
