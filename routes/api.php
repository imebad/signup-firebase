<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::group(['prefix' => 'v1'], function () {
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('register', 'App\Http\Controllers\AuthController@register');

});


Route::group(['prefix' => 'v1', 'middleware' => ['auth:api']], function () {
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::get('firebase-quiz-record', 'App\Http\Controllers\FirebaseController@main');
});
