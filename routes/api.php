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


Route::get('hotels', 'HotelsController@getAllHotels');
Route::get('hotels/{id}', 'HotelsController@getHotel');
Route::post('hotels', 'HotelsController@createHotel');
Route::put('hotels/{id}', 'HotelsController@updateHotel');

/*Route::get('hotels/show/{id}', 'HotelsController@show');
Route::post('hotels/create', 'HotelsController@store');
Route::put('hotels/{id}', 'HotelsController@update');
Route::delete('hotels/{id}','HotelsController@delete');*/