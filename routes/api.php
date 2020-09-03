<?php

use Illuminate\Http\Request;

Route::post('login','AuthController@login');
Route::get('me','AuthController@me');
Route::post('login-refresh','AuthController@refresh');
Route::post('logout', 'AuthController@logout');


Route::group(['namespace'=>'Api','middleware'=>'auth:api'],function(){
    Route::resource('credito', 'CreditoApiController',['only'=>['index','show','update']]);
});

