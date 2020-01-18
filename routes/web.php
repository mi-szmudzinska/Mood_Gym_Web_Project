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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/classes', 'Admin\ClassesController@index')->name('classes.index');
Route::get('/admin/classes/edit/{id}', 'Admin\ClassesController@edit')->name('classes.index.edit');
Route::post('/admin/classes/edit/', 'Admin\ClassesController@update')->name('classes.update');
Route::get('/admin/classes/create/', 'Admin\ClassesController@create')->name('classes.create');
Route::post('/admin/classes/create/', 'Admin\ClassesController@store')->name('classes.store');


