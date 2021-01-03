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

Route::get('/', function () {
    return view('admindash');
});
Route::get('/doctor/new', function () {
    return view('add-doctor');
});
Route::post('/doctor', 'UserController@store');
Route::get('/doctors', 'DoctorController@index');
Route::post('/status/{user}', 'UserController@updateStatus');
