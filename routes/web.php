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

Route::get('/', 'HomeController@Index')->name('home');

Route::get('/tasks/create', 'TaskController@Create');
Route::post('/tasks/create', 'TaskController@Store');
Route::get('/tasks/{task}', 'TaskController@Show');
Route::post('/tasks/store', 'TaskController@Store');
Route::get('/tasks/edit/{task}', 'TaskController@Edit');
Route::post('/tasks/edit/{task}', 'TaskController@Store');
Route::get('/tasks/delete/{task}', 'TaskController@Destroy');

