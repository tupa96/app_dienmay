<?php

include_once 'api_builder.php';
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('sigin', 'ApiController@createMember');

Route::group(['middleware' => 'auth:api'], function () {
//    Route::get('/posts', 'PostsController@index');
});
