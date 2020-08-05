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

Route::get('/', 'PagesController@index');
Auth::routes();
Route::get('/account_set_up', 'PagesController@reg_patient');
Route::resource('/patients', 'PatientsController');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
//Route::get('/dashboard', 'PagesController@index')->name('dashboard');
