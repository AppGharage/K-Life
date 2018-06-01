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

Route::get('/', 'DashboardController@index');
Route::resource('students','StudentsController');
Route::get('/create', 'StudentsController@create');
Route::get('/students', 'StudentsController@index');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
