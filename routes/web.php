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
Route::get('/rss', 'Controller@rss');

Route::get('/', 'Controller@index');
Route::get('/tin-tuc', 'NewsController@index');
Route::get('/tin-tuc/{slug}', 'NewsController@detail');
Route::get('/san-pham/{slug}', 'Controller@production');
Route::get('/tag/{slug}', 'NewsController@tag');
Route::get('/news212264611@', 'NewsAdminController@index');
Route::get('/news212264611@/create', 'NewsAdminController@create');
Route::post('/news212264611@/create', 'NewsAdminController@create');
Route::get('/news212264611@/{id}', 'NewsAdminController@edit');
Route::post('/news212264611@/{id}', 'NewsAdminController@edit');
Route::post('/order', 'Controller@order');
Route::post('/contact', 'Controller@contact');

Route::get('/{category}', 'NewsController@index');
Route::get('/{category}/{slug}', 'NewsController@detail');