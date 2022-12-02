<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FoodController;



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

Route::apiResource('foods',FoodController::class);

Route::group([

    'prefix' => 'auth'
], function () {

Route::post('register', 'App\Http\Controllers\AuthController@register');
Route::post('login', 'App\Http\Controllers\AuthController@authenticate');
Route::post('user','App\Http\Controllers\AuthController@getAuthenticatedUser');
Route::post('logout', 'App\Http\Controllers\AuthController@logout');

});
// Route::group(['middleware' => ['jwt.verify']], function() {

//     Route::post('user','App\Http\Controllers\AuthController@getAuthenticatedUser');

// });

