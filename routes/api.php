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

Route::group([
    'prefix' => 'auth',
    'middleware' => 'cors'
], function () {
    Route::post('login', 'AuthController@login')->middleware('cors');
    Route::post('signup', 'AuthController@signup');
  
    Route::group([
      'middleware' => ['auth:api','cors']
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});
    Route::group([
      'middleware' => 'cors',
      'prefix' => 'field'
    ], function() {
        Route::post('create', 'UserExpenseCategoryController@create');
    });

