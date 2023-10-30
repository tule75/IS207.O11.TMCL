<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WatchController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\AddressController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// HOME route
Route::get('/', function () {
    return view('home');
});

// này là của framework route
Route::get('/dashboard', function () {
    return view('profile');
})->middleware(['auth', 'verified'])->name('dashboard');

// test for fun route
Route::get("/test", function () {
    return view('test');
});
// Lấy danh sách tỉnh
Route::post("/api/get/provinces", [AddressController::class, 'get_provinces']);
// lấy danh sách huyện
Route::post("/api/get/districts", [AddressController::class, 'get_districts']);
//lấy danh sách xã
Route::post("/api/get/wards", [AddressController::class, 'get_wards']);

// test product routes
Route::get("/product/create", [ProductsController::class, 'create'])->middleware('guest');
Route::post("/product/create", [ProductsController::class, 'store'])->middleware('guest')->name('product.store');

//profile user routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Watch routes
Route::post("/watch", [WatchController::class, 'store'])->middleware('auth')->name('watch.store');
Route::get("/watch/{id}", [WatchController::class, 'show'])->name('watch.show');

// cart routes
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartsController::class, 'index'])->name('cart.index');
});
require __DIR__.'/auth.php';
