<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

define('AUTH_AIRLOCK', "auth:airlock");
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

Route::middleware(AUTH_AIRLOCK)->get('/profile','ProfileController@index');

Route::get('filial/{filial}', 'FilialDoctorsController@filial')->name('filial');

Route::get('filials', 'FilialDoctorsController@index')->name('filials');

Route::get('events/{filial}', 'EventController@index')->middleware(AUTH_AIRLOCK);
Route::get('doctors/{filial}', 'FilialDoctorsController@doctors')->middleware(AUTH_AIRLOCK);

Route::post('event', 'EventController@store');

Route::post('schedule', 'FilialDoctorsController@storeSchedule')->middleware(AUTH_AIRLOCK);

Route::post('spec', 'SpecController@store');
//    ->middleware(AUTH_AIRLOCK);
Route::put('spec/{spec}', 'SpecController@update')->middleware(AUTH_AIRLOCK);
