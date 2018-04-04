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
Route::get('/tasks/{task}', 'TaskController@Show');
Route::post('/tasks/store', 'TaskController@Store');