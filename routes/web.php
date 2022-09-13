<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/admin', function () {
    return view('dashboard.index');
})->name('admin');

//
Route::get('/admin/cars', function () {
    return view('dashboard.cars.index');
})->name('cars');

Route::get('/admin/cars/create', function () {
    return view('dashboard.cars.create');
})->name('new-car');

//
Route::get('/admin/brands', function () {
    return view('dashboard.brands.index');
})->name('brands');

Route::get('/admin/brands/create', function () {
    return view('dashboard.brands.create');
})->name('new-brand');

//
Route::get('/admin/taxes', function () {
    return view('dashboard.taxes.index');
})->name('taxes');

Route::get('/admin/taxes/create', function () {
    return view('dashboard.taxes.create');
})->name('new-tax');

//
Route::get('/admin/branches', function () {
    return view('dashboard.branches.index');
})->name('branches');

Route::get('/admin/branches/create', function () {
    return view('dashboard.branches.create');
})->name('new-branches');

//
Route::get('/admin/pages', function () {
    return view('dashboard.pages.index');
})->name('pages');

Route::get('/admin/pages/create', function () {
    return view('dashboard.pages.create');
})->name('new-page');

//
Route::get('/admin/users', function () {
    return view('dashboard.users.index');
})->name('users');

Route::get('/admin/users/create', function () {
    return view('dashboard.users.create');
})->name('new-user');
//
Route::get('/admin/orders', function () {
    return view('dashboard.orders.index');
})->name('orders');

Route::get('/admin/orders/show', function () {
    return view('dashboard.orders.show');
})->name('view-order');
//
Route::get('/admin/contacts', function () {
    return view('dashboard.contacts.index');
})->name('contacts');

Route::get('/admin/contacts/show', function () {
    return view('dashboard.contacts.show');
})->name('view-contact');
