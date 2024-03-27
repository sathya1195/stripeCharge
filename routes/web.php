<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::any('product',[ProductController::class,'product'])->name('product.list');
Route::any('product_show\{product}',[ProductController::class,'show'])->name('product.show');
Route::any('purchase\{product}',[ProductController::class,'purchase'])->name('product.purchase');
Route::get('register',[RegisterController::class,'register'])->name('auth.register');
Route::post('register_sumit',[RegisterController::class,'register_sumit'])->name('auth.store');
Route::get('login',[LoginController::class,'login'])->name('login');
Route::any('authendicate',[LoginController::class,'authendicate'])->name('authendicate');
Route::get('logout',[LoginController::class,'logout'])->name('logout');