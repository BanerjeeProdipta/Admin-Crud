<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'UserController@admindash')->name('admin-dashboard');
Route::get('/user/new', function () {
    return view('add-user');
});
Route::post('/user', 'UserController@store');
Route::get('/users', 'UserController@index')->name('user-list');
Route::post('/status/{user}', 'UserController@updateStatus');
Route::get('/user/{user}/edit', 'UserController@edit');
Route::post('/user/{user}', 'UserController@update');
Route::delete('/user/{user}', 'UserController@destroy');
Route::get('/appointment', 'AppoinmentController@index')->name('appoinment-list');
Route::post('/appointment-status/{appoinment}', 'AppoinmentController@updateAppointmentStatus');
Route::post('/appointment/{appoinment}/approve', 'AppoinmentController@approveAppointmentStatus');
Route::post('/appointment/{appoinment}/cancel', 'AppoinmentController@cancelAppointmentStatus');
Route::get('/appointment-list', 'AppoinmentController@appointments');

//doctor
Route::get('/doctordash/{doctor}', 'DoctorController@show')->name('doctordash');
Route::get('/doctor-table/{doctor}', 'DoctorController@index');
Route::post('/scedule/{doctor}', 'DoctorController@setTime');
Route::post('/appointment/{appoinment}', 'DoctorController@updateAppointmentStatus');



Route::post('/prescription/{appoinment}', 'PrescriptionController@store');
Route::post('/notice', 'NoticeController@store');
