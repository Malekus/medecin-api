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

Route::get('medecins','MedecinController@index')
    ->name('index');
Route::get('medecin/{id}','MedecinController@show')
    ->name('show');
Route::post('medecin','MedecinController@store')
    ->name('store');
Route::put('medecin/{id}','MedecinController@store')
    ->name('store');
Route::delete('medecin/{id}','MedecinController@destroy')
    ->name('destroy');

Route::get('medicaments','MedicamentController@index')
    ->name('index');
Route::get('medicament/{id}','MedicamentController@show')
    ->name('show');
Route::post('medicament','MedicamentController@store')
    ->name('store');
Route::put('medicament/{id}','MedicamentController@store')
    ->name('store');
Route::delete('medicament/{id}','MedicamentController@destroy')
    ->name('destroy');
