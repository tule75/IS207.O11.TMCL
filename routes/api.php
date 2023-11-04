<?php

use App\Http\Controllers\AddressController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WatchController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// store brand api
Route::post("/brand", [BrandController::class, 'store'])->middleware('auth:sanctum')->name('brand');
// store category api
Route::post("/category", [CategoryController::class, 'store'])->middleware('auth:sanctum')->name('cate');

Route::post("/register", [RegisteredUserController::class, 'store'])->name('register');

Route::post("/register/admin", [RegisteredUserController::class, 'storeAdmin']);

Route::post('/tokens/create', function (Request $request) {
    $token = User::find(6)->createToken($request->token_name);
 
    return ['token' => $token->plainTextToken];
});

Route::post('login', [AuthenticatedSessionController::class, 'store']);

// Tạo sản phẩm đồng hồ
Route::post('/watch/store', [WatchController::class, 'store'])->middleware('auth:sanctum');

// Tạo address cho user
Route::post('/address/store', [AddressController::class, 'store'])->middleware('auth:sanctum');

// Order
    // Tạo order
Route::post('order/create', [OrderController::class, 'store'])->middleware('auth:sanctum');
// Route::post('order/create', function () {dd(1);});
    // Get Order
Route::post('order/{user_id}/get', [OrderController::class, 'showForUser'])->middleware('auth:sanctum');
    // Delete order
Route::delete('order/delete/{order}', [OrderController::class, 'destroy'])->middleware('auth:sanctum');
