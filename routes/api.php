<?php

use Illuminate\Support\Facades\Route;

define('AUTH_SANCTUM', "auth:sanctum");
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

Route::middleware(AUTH_SANCTUM)->get('/profile', 'ProfileController@index');

Route::get('filial/{filial}', 'FilialDoctorsController@filial')->name('filial');

Route::get('filials', 'FilialDoctorsController@index')->name('filials');

Route::get('events/{filial}', 'EventController@index');


Route::get('doctors/{filial}', 'FilialDoctorsController@doctors');
Route::post('doctors/{filial}', 'FilialDoctorsController@store')->middleware(AUTH_SANCTUM);
Route::put('doctor/{doctor}', 'FilialDoctorsController@updateDoctor')->middleware(AUTH_SANCTUM);

Route::post('assign-spec', 'FilialDoctorsController@assignSpec')->middleware(AUTH_SANCTUM);

Route::post('event', 'EventController@store');
Route::delete('event/{event}', 'EventController@destroy')->middleware(AUTH_SANCTUM);

Route::post('schedule', 'FilialDoctorsController@storeSchedule')->middleware(AUTH_SANCTUM);

Route::get('specs', 'SpecController@index')->middleware(AUTH_SANCTUM);
Route::post('spec', 'SpecController@store')->middleware(AUTH_SANCTUM);
Route::put('spec/{spec}', 'SpecController@update')->middleware(AUTH_SANCTUM);

Route::get('services', 'ServiceController@index')->middleware(AUTH_SANCTUM);
Route::post('assign-service', 'ServiceController@assignServiceToDoctors')->middleware(AUTH_SANCTUM);
Route::post('service', 'ServiceController@store')->middleware(AUTH_SANCTUM);

Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
Route::get('csrf-cookie', '\Laravel\Sanctum\Http\Controllers\CsrfCookieController@show');

Route::post('email', 'MessageController@sendMessage');
Route::post('record-email', 'MessageController@sendRecordMessage');
