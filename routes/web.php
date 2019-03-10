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
Route::redirect('/', '/inicio');
Route::resource('/inicio','InicioController');
Route::resource('/teams','TeamController')->middleware('auth');
Route::resource('/players','PlayerController')->middleware('auth');
Route::resource('/games','GameController')->middleware('auth');
Route::resource('/infogoals','InfoGoalController')->middleware('auth');
Route::resource('/table','TableController')->middleware('auth');
Route::resource('/infogoals/addgoljogo','InfoGoalController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
$this->get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');

Route::group(array('prefix' => 'api'), function()
{Route::get('/', function () {
    return response()->json(['message' => 'Jobs API', 'status' => 'Connected']);
});
    Route::resource('teams','TeamApiController');
    Route::get('playerslist/{id}','TeamApiController@show');
    Route::resource('topscore','TopScoreApiController');
    Route::resource('games','GameApiController');
    Route::get('infogoals/{id}','InfoGoalApiController@show');
    Route::resource('table','TableApiController');
});