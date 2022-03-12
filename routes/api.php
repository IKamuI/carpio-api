<?php

use Illuminate\Http\Request;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
  return $request->user();
});

Route::apiResource('order/items', OrderItemController::class);

// Route::middleware(['middleware' => 'auth:sanctum'])->group(function () {
//   Route::apiResources(
//     [
//       'categories' => CategoryController::class,
//       'products' => ProductController::class,
//       'orders' => OrderController::class
//     ],
//     ['except' => ['index', 'show']]
//   );
// });

Route::apiResources(
  [
    'categories' => CategoryController::class,
    'products' => ProductController::class,
    'orders' => OrderController::class
  ],
  // ['only' => ['index', 'show']]
);
