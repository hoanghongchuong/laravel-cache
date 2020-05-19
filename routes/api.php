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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/posts', 'Api\PostController@index')->name('api.list.post');
Route::get('/post/{id}', 'Api\PostController@getPostById')->name('getPostById');
Route::post('create/post', 'Api\PostController@createPost');
Route::put('update/{id}', 'Api\PostController@update');
Route::delete('/delete/{id}', 'Api\PostController@delete');
