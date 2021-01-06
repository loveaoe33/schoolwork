<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('article','ArticleController');
Route::get('/live_search', 'LiveSearch@index');
Route::post('/sample', 'SampleController@store');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');
Route::post('/update/{ id }', 'SampleController@update');
Route::get('/article/{ id }/article', 'SampleController@backup');
Route::get('/test', 'LiveSearch@test');