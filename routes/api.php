<?php

use App\Http\Controllers\Auth\AuthenticatedTokenController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('/verify_token', [AuthenticatedTokenController::class, 'verifyToken']);
});

Route::group(['middleware' => 'guest'], function () {
    Route::post('/token', [AuthenticatedTokenController::class, 'store'])
                ->name('login.token');

    Route::apiResource('order/items', OrderItemController::class);

    Route::apiResources(
        [
            'categories' => CategoryController::class,
            'products' => ProductController::class,
            'orders' => OrderController::class
        ],
  // ['only' => ['index', 'show']]
    );
});
