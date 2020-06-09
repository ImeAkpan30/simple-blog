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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/iphone', 'IphoneController@iphone')->name('iphone');
Route::post('/store', 'IphoneController@store')->name('store');
Route::get('/database', 'IphoneController@database')->name('database');
Route::get('/database/{id}/show', 'IphoneController@show')->name('show');
Route::get('/database/{id}/edit','IphoneController@edit')->name('edit');
Route::put('/update/{id}','IphoneController@update')->name('update');
Route::delete('/delete/{id}','IphoneController@delete')->name('delete');

                    #AUTH
Route::get('/', 'IphoneController@auth')->name('auth.view');
Route::post('/register', 'IphoneController@register')->name('register');

Route::post('/login', 'IphoneController@login')->name('login');
Route::get('/logout', 'IphoneController@logout')->name('logout');