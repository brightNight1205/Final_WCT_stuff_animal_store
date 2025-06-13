<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\AvailableController;
use App\Http\Controllers\BillingDetailController;
use App\Http\Controllers\CategoryAnimalController;
use App\Http\Controllers\CustomizeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProductSingleController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\WishlistController;
use Illuminate\Auth\Events\Login;

// Public API routes - index and show, for example, can be accessible to everyone

Route::apiResource('availables', AvailableController::class);
Route::apiResource('billing-details', BillingDetailController::class);
Route::apiResource('category-animals', CategoryAnimalController::class);
Route::apiResource('customizes', CustomizeController::class);
Route::apiResource('orders', OrderController::class);
Route::apiResource('product-details', ProductDetailController::class);
Route::apiResource('product-singles', ProductSingleController::class);
Route::apiResource('shopping-carts', ShoppingCartController::class);
Route::apiResource('wishlists', WishlistController::class);


Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::apiResource('user', AuthController::class);
Route::get('/users', [AuthController::class, 'index']);



Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
  


});




