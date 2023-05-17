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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/p', function () {
    $products = [
        ['id' => 1, 'name' => 'Product A', 'price' => 100],
        ['id' => 2, 'name' => 'Product B', 'price' => 200],
        ['id' => 3, 'name' => 'Product C', 'price' => 300],
    ];

    return response()->json($products);
});