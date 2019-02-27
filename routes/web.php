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

//rsvp controller
Route::get('/rsvp', 'AttendController@index');

//Attend controller
Route::post('/Attend/update', 'AttendController@update');

//Report controller
Route::get('/report', 'AttendController@indexReport');
Route::get('/report/view', 'AttendController@viewReport');
