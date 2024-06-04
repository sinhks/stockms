<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
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

Route::get('/wel', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('child.home');
})->name('home');
Route::get('/create_product', function () {
    return view('child.create_product');
})->name('create_product');

Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');

Route::get('suppliers/create', [SupplierController::class, 'create'])->name('suppliers.create');
Route::post('suppliers', [SupplierController::class, 'store'])->name('suppliers.store');