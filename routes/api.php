<?php

use Illuminate\Http\Request;

// Route::resource('credito', 'Api\CreditoApiController',['only'=>['index','show','update']]);

Route::get('credito', "Api\CreditoApiController@index");
Route::get('credito/{id}', "Api\CreditoApiController@show");
Route::patch('credito/{credito}', "Api\CreditoApiController@update");


Route::get('users', "UsersController@index");
Route::post('users', "UsersController@store");
Route::patch('users/{user}', "UsersController@update");
Route::delete('users/{user}', "UsersController@remove");
