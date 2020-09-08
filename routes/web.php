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
Route::get('/blood_bank', 'PagesController@blood_bank');
Route::post('/send_request_mail', 'PagesController@send_request_mail');
Route::get('/myprofile', 'PagesController@pro');
Route::get('/doctors', 'PagesController@doctors');
Route::post('/update', 'PagesController@update');
Auth::routes();
Route::get('/account_set_up', 'PagesController@reg_patient');
Route::post('/sign_up', 'PagesController@sign_up')->name('sign_up');
Route::post('/complete_sign_up', 'PagesController@complete_sign_up')->name('complete_sign_up');
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
Route::resource('/prescriptions', 'PrescriptionController');
Route::post('/NA', 'PrescriptionController@NA');
Route::resource('/chat', 'MessagingController');
Route::get('/add_drug', 'PatientsController@add_drug');
Route::get('/pharmacy', 'PatientsController@pharmacy');
Route::get('/myshop', 'PatientsController@myshop');
Route::post('/delete_drug', 'PatientsController@destroy_drug');
Route::post('/store_drug', 'PatientsController@store_drug');
Route::post('/mark_as_sold_out', 'PatientsController@status_change');
Route::post('/edit_drug', 'PatientsController@edit_drug');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
//Route::get('/dashboard', 'PagesController@index')->name('dashboard');

//shopping cart

Route::get('/add-to-cart/{drug}', 'CartController@add')->name('cart.add');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
Route::get('/delete', 'CartController@delete');

//calender & events manager
Route::resource('/events', 'EventsController');

//todo
Route::resource('/schedule', 'TodoController');
Route::post('/done', 'TodoController@done');
Route::get('/schedule_yesterday', 'TodoController@yesterday');
Route::get('/schedule_tomorrow', 'TodoController@tomorrow');

//Hospitals
Route::resource('/hospitals', 'HospitalController');
Route::post('/add_staff', 'HospitalController@add_staff');
Route::post('/store_staff', 'HospitalController@store_staff');
Route::post('/store_op', 'HospitalController@store_op');
Route::post('/store_message', 'HospitalController@store_message');
Route::post('/doctors', 'HospitalController@doctors');
Route::post('/search', 'HospitalController@search');
Route::get('/send_message', 'HospitalController@message');
Route::get('/add_op', 'HospitalController@add_op');
Route::post('/remove', 'HospitalController@destroyy');

//Q&S

Route::resource('/questions', 'QuestionsController');
Route::post('/answer', 'QuestionsController@store_answer');
Route::post('/edit_answer', 'QuestionsController@edit_answer');
Route::post('/update_answer', 'QuestionsController@update_answer');
Route::post('/delete', 'QuestionsController@destroyy');

//appointments
Route::resource('/appointments', 'AppointmentsController');

//consortations
Route::resource('/consortations', 'ConsortationsController');

//consortations
Route::resource('/lab', 'LabsController');
Route::get('/record_lab', 'ConsortationsController@diag');