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
Route::get('contact','ContactController@index')->name('contact');
Route::get('show','ContactController@show')->name('show');
Route::post('insert','ContactController@insert')->name('insert');
Route::get('delete/{id}','ContactController@destory')->name('delete');
Route::get('edit/{id}','ContactController@ron')->name('edit');
Route::post('update/{id}','ContactController@update')->name('update');
Route::get('view/{id}','ContactController@view')->name('view');
