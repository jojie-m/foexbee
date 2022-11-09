<?php

use App\Http\Controllers\StockController;
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
/*adding to database*/
Route::post('stocks/add', [StockController::class, 'store']);

/**getting from database */

Route::get('stocks/get', [Stock2Controller::class, 'store2']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

