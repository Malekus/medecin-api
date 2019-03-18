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

Route::get('configurations', 'ConfigurationController@index')
    ->name('index');
Route::get('configuration/{id}', 'ConfigurationController@show')
    ->name('show');
Route::post('configuration', 'ConfigurationController@store')
    ->name('store');
Route::put('configuration/{id}', 'ConfigurationController@store')
    ->name('store');
Route::delete('configuration/{id}', 'ConfigurationController@destroy')
    ->name('destroy');

Route::get('medecins', 'MedecinController@index')
    ->name('index');
Route::get('medecin/{id}', 'MedecinController@show')
    ->name('show');
Route::post('medecin', 'MedecinController@store')
    ->name('store');
Route::put('medecin/{id}', 'MedecinController@store')
    ->name('store');
Route::delete('medecin/{id}', 'MedecinController@destroy')
    ->name('destroy');

Route::get('medicaments', 'MedicamentController@index')
    ->name('index');
Route::get('medicament/{id}', 'MedicamentController@show')
    ->name('show');
Route::post('medicament', 'MedicamentController@store')
    ->name('store');
Route::put('medicament/{id}', 'MedicamentController@store')
    ->name('store');
Route::delete('medicament/{id}', 'MedicamentController@destroy')
    ->name('destroy');

Route::get('patients', 'PatientController@index')
    ->name('index');
Route::get('patient/{id}', 'PatientController@show')
    ->name('show');
Route::post('patient', 'PatientController@store')
    ->name('store');
Route::put('patient/{id}', 'PatientController@store')
    ->name('store');
Route::delete('patient/{id}', 'PatientController@destroy')
    ->name('destroy');

Route::get('consultations', 'ConsultationController@index')
    ->name('index');
Route::get('consultation/{id}', 'ConsultationController@show')
    ->name('show');
Route::post('consultation', 'ConsultationController@store')
    ->name('store');
Route::put('consultation/{id}', 'ConsultationController@store')
    ->name('store');
Route::delete('consultation/{id}', 'ConsultationController@destroy')
    ->name('destroy');
Route::post('consultation/addMedicament', 'ConsultationController@addMedicament')
    ->name('addMedicament');
Route::post('consultation/removeMedicament', 'ConsultationController@removeMedicament')
    ->name('removeMedicament');

Route::get('centres', 'CentreController@index')
    ->name('index');
Route::get('centre/{id}', 'CentreController@show')
    ->name('show');
Route::post('centre', 'CentreController@store')
    ->name('store');
Route::put('centre/{id}', 'CentreController@store')
    ->name('store');
Route::delete('centre/{id}', 'CentreController@destroy')
    ->name('destroy');
Route::post('centre/addPatient', 'CentreController@addPatient')
    ->name('addPatient');
Route::post('centre/removePatient', 'CentreController@removePatient')
    ->name('removePatient');

Route::get('form/centres', 'FormController@getCentres');
Route::get('form/patients', 'FormController@getPatients');
Route::get('form/medecins', 'FormController@getMedecins');
Route::get('form/medicaments', 'FormController@getMedicaments');
Route::get('form/diplomes', 'FormController@getDiplomes');
Route::get('form/specialites', 'FormController@getSpecialites');
Route::get('form/types', 'FormController@getTypes');
Route::get('form/centreTypes', 'FormController@getCentreTypes');
Route::get('form/consultationTypes', 'FormController@getConsultationTypes');

Route::get('statistique', 'StatistiqueController@index')
    ->name('index');
