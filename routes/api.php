<?php

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

Route::resource('house', 'ApiHouseController');
Route::resource('post', 'ApiPostController');
Route::resource('comment', 'ApiCommentController');
Route::resource('badge', 'BadgesController');
Route::get('students', 'UsersController@getStudents');
Route::get('student/{id}', 'UsersController@getStudent');
Route::get('studentranking/{number}', 'UsersController@getRanking');

Route::get('news', 'NewsController@all');