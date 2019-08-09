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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:api')->prefix('/v1')->group(function(){
    Route::resource('users', 'UserController');
    Route::resource('organizations', 'OrganizationController');


    /*
   Route::get('/users', 'UserController@index');
   Route::post('/users', 'UserController@store');
   Route::get('/users/{user}', 'UserController@show');
   Route::put('/users/{user}', 'UserController@update');
   Route::delete('/users/{user}', 'UserController@destroy');*/
});
