<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('test/{id}', 'TestController@test');
Route::get('list', 'ObjController@getList');
Route::get('show/{id}', 'ObjController@show');
Route::get('country', 'CountryController@getList');
Route::get('region/{id}', 'RegionController@getList');
Route::get('area/{id}', 'AreaController@getList');
Route::get('city/{id}', 'CityController@getList');
Route::get('street/{id}', 'StreetController@getList');