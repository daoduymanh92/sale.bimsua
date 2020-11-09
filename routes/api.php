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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', 'UserController@index');

Route::prefix('orders')->group(function () {
    Route::get('/', 'Api\OrderController@getList');
    Route::post('/order', 'Api\OrderController@postOrder');
    Route::put('/{id}', 'Api\OrderController@updateOrder');
    Route::delete('/{id}', 'Api\OrderController@deleteOrder');
});

// tickets
Route::prefix('tickets')->group(function () {
    Route::get('/', 'Api\TicketController@getList');
});