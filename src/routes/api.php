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

Route::group(['middleware' => 'api'], function(){
    Route::get('programs', 'App\Http\Controllers\ProgramController@index');
});
Route::group(['middleware' => 'api'], function(){
    Route::post('update', 'App\Http\Controllers\ProgramController@update');
});

Route::group(['middleware' => 'api'], function(){
    Route::get('timedivs', 'App\Http\Controllers\TimedivController@index');
});
Route::group(['middleware' => 'api'], function(){
    Route::get('timedivs/{id}', 'App\Http\Controllers\TimedivController@show');
});

Route::group(['middleware' => 'api'], function(){
    Route::get('wordclouds', 'App\Http\Controllers\WordcloudController@index');
});
Route::group(['middleware' => 'api'], function(){
    Route::get('wordclouds/{id}', 'App\Http\Controllers\WordcloudController@show');
});