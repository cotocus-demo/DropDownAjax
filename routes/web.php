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
Route::get('/indonesia','CounrtyController@provinces');

Route::get('/json-regencies','CountryController@regencies');

Route::get('/json-districts', 'CountryController@districts');

Route::get('/json-village', 'CountryController@villages');