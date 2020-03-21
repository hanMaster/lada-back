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

Route::middleware('auth:airlock')->get('/profile','ProfileController@index');

Route::get('filial/{filial}', 'FilialDoctorsController@filial')->name('filial');

Route::get('filials', 'FilialDoctorsController@index')->name('filials');

Route::get('events/{filial}', 'EventController@index')->middleware('auth:airlock');
Route::get('doctors/{filial}', 'FilialDoctorsController@doctors')->middleware('auth:airlock');

Route::post('event', 'EventController@store');

Route::post('schedule', 'FilialDoctorsController@storeSchedule')->middleware('auth:airlock');
