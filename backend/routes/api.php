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
Route::get('rooms','RoomController@index');
// user
Route::get('users','UserController@index');
Route::post('login','UserController@login');
Route::post('register','UserController@register');

Route::post('addroom','RoomController@create');
Route::get('showroom/{id}','RoomController@show');
Route::put('updateroom/{id}','RoomController@update');
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
