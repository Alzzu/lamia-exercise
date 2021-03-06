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

Route::get('places', 'PlaceController@index');
Route::get('places/{id}', 'PlaceController@show');
Route::post('places', 'PlaceController@store');
Route::put('places/{id}', 'PlaceController@update');
Route::patch('places/{id}', 'PlaceController@update');
Route::delete('places/{id}', 'PlaceController@destroy');

Route::get('tags', 'TagController@index');
Route::post('tags', 'TagController@store');