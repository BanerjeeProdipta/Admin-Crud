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

Route::get('/', 'UserController@index')->name('admin-dashboard');
Route::get('/doctor/new', function () {
    return view('add-doctor');
});
Route::post('/doctor', 'UserController@store');
Route::get('/doctors', 'DoctorController@index')->name('doctor-list');
Route::post('/status/{user}', 'UserController@updateStatus');
Route::get('/doctor/{user}/edit', 'UserController@edit');
Route::post('/doctor/{user}', 'UserController@update');
Route::delete('/doctor/{user}', 'UserController@destroy');
