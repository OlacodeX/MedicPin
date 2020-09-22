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
Route::get('/wards', 'PagesController@wards');
Route::get('/create_ward', 'PagesController@create_ward');
Route::post('/update_ward', 'PagesController@update_ward');
Route::post('/store_ward', 'PagesController@store_ward');
Route::post('/send_request_mail', 'PagesController@send_request_mail');
Route::get('/myprofile', 'PagesController@pro');
Route::get('/doctors', 'PagesController@doctors');
Route::post('/update', 'PagesController@update');
Auth::routes();
Route::get('/account_set_up', 'PagesController@reg_patient');
Route::post('/sign_up', 'PagesController@sign_up');
Route::post('/complete_sign_up', 'PagesController@complete_sign_up');
Route::post('/complete_sign_up_patient', 'PagesController@complete_sign_up_patient');
Route::post('/store_transfer', 'PatientsController@store_transfer');
Route::resource('/patients', 'PatientsController');
Route::post('/search_result', 'PatientsController@search');
Route::post('/result', 'PagesController@search');
Route::post('/reg_patient', 'PatientsController@reg_patient');
Route::post('/transfer_patient', 'PatientsController@transfer');
Route::get('/transfered_patients', 'PatientsController@transfered');
Route::get('/add_record', 'PatientsController@add_record');
Route::post('/store_record', 'PatientsController@store_record');
Route::resource('/notifications', 'NotificationsController');
Route::resource('/records', 'RecordsController');
Route::post('/store_bio', 'RecordsController@store_bio');
Route::resource('/prescriptions', 'PrescriptionController');
Route::post('/NA', 'PrescriptionController@NA');
Route::resource('/chat', 'MessagingController');
Route::get('/add_drug', 'PatientsController@add_drug');
Route::get('/pharmacy', 'PatientsController@pharmacy');
Route::get('/pharmacist_shop', 'PatientsController@pharmacist');
Route::get('/myshop', 'PatientsController@myshop');
Route::post('/delete_drug', 'PatientsController@destroy_drug');
Route::post('/store_drug', 'PatientsController@store_drug');
Route::post('/mark_as_sold_out', 'PatientsController@status_change');
Route::post('/edit_drug', 'PatientsController@edit_drug');
Route::post('/drug_detail', 'PatientsController@get_drug');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');


Route::post('/pay', 'PagesController@payment');
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
Route::get('/schedule_previous', 'TodoController@yesterday');
Route::get('/schedule_tomorrow', 'TodoController@tomorrow');

//Hospitals
Route::resource('/hospitals', 'HospitalController');
Route::post('/hospital_add_staff', 'HospitalController@add_staff');
Route::post('/hospital_store_staff', 'HospitalController@store_staff');
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

//Inpatients
Route::resource('/inpatients', 'AdmissionController');

//visitors
Route::resource('/visitors', 'VisitorController');
Route::post('/visitors_list', 'VisitorController@other');

//hmo
Route::resource('/packages', 'HmoController');
Route::get('/add_hospital', 'HmoController@add_hospital');
Route::get('/add_staff', 'HmoController@create_staff');
Route::post('/store_hospital', 'HmoController@store_hospital');
Route::post('/store_staff', 'HmoController@store_staff');
Route::post('/store_cat', 'HmoController@store_cat');
Route::post('/destroy_cat', 'HmoController@destroy_cat');
Route::post('/store_add', 'HmoController@store_add');
Route::get('/staff_list', 'HmoController@staff_list');
Route::post('/add', 'HmoController@add');
Route::get('/buy_hmo', 'HmoController@buy_hmo');
Route::get('/add_category', 'HmoController@add_cat');
Route::post('/get_category', 'HmoController@get_cat');
Route::post('/complete_add', 'HmoController@complete_add');