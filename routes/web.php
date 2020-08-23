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
Route::get('/myprofile', 'PagesController@pro');
Route::post('/update', 'PagesController@update');
Auth::routes();
Route::get('/account_set_up', 'PagesController@reg_patient');
Route::post('/store_transfer', 'PatientsController@store_transfer');
Route::resource('/patients', 'PatientsController');
Route::post('/search_result', 'PatientsController@search');
Route::post('/reg_patient', 'PatientsController@reg_patient');
Route::post('/transfer_patient', 'PatientsController@transfer');
Route::get('/transfered_patients', 'PatientsController@transfered');
Route::post('/add_record', 'PatientsController@add_record');
Route::post('/store_record', 'PatientsController@store_record');
Route::resource('/notifications', 'NotificationsController');
Route::resource('/records', 'RecordsController');
Route::resource('/chat', 'MessagingController');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
//Route::get('/dashboard', 'PagesController@index')->name('dashboard');
