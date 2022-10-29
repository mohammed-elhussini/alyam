<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Site\SiteHomeController;
use \App\Http\Controllers\Site\LoginController;
use \App\Http\Controllers\Site\ProfileController;
use \App\Http\Controllers\Site\BrandController;
use \App\Http\Controllers\Site\CarController;
use \App\Http\Controllers\Site\ContactController;
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


//
Route::get('/', [SiteHomeController::class,'home'])->name('home');
Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/users/login', [LoginController::class,'authenticate']);
Route::post('/users/create', [LoginController::class,'create']);
Route::post('/logout', [LoginController::class,'destroy']);
Route::get('/profile', [ProfileController::class,'profile'])->name('profile');
Route::put('/profile/update', [ProfileController::class,'update']);
Route::get('/brands/{brand:id}', [BrandController::class,'brand']);
Route::get('/cars/', [CarController::class,'index'])->name('cars');
Route::get('/cars/{car:id}', [CarController::class,'show']);
Route::get('/contact', [ContactController::class,'show'])->name('contact');
Route::post('/contact/', [ContactController::class,'store']);

//
//Route::get('/membership', function () {
//    return view('site.users.membership');
//})->name('membership');
////
//Route::get('/cars', function () {
//    return view('site.cars.index');
//})->name('cars');
////

////
//Route::get('/pages/page', function () {
//    return view('site.pages.page');
//})->name('page');
////
//Route::get('/pages/contact', function () {
//    return view('site.pages.contact');
//})->name('contact');
////
//Route::get('/payment', function () {
//    return view('site.order.payment');
//})->name('payment');
//
////
//Route::get('/info', function () {
//    return view('site.order.info');
//})->name('info');
////
//Route::get('/done', function () {
//    return view('site.order.done');
//})->name('done');
//

