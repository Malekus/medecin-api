<?php

use Illuminate\Http\Request;

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

Route::get('configurations','ConfigurationController@index')
    ->name('index');
Route::get('configuration/{id}','ConfigurationController@show')
    ->name('show');
Route::post('configuration','ConfigurationController@store')
    ->name('store');
Route::put('configuration/{id}','ConfigurationController@store')
    ->name('store');
Route::delete('configuration/{id}','ConfigurationController@destroy')
    ->name('destroy');
