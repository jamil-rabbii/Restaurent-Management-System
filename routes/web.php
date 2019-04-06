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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','FrontController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/* Order Route */
Route::POST('order','OrderController@insert');
Route::get('/order/edit/{id}','OrderController@edit');
Route::POST('/order/edit','OrderController@update');
Route::get('/order/delete/{id}','OrderController@deleteorder');
/* Order Route */

/* Feedback Route */
Route::POST('feedback','FeedbackController@insert');
Route::get('/feedback/edit/{id}','FeedbackController@edit');
Route::POST('/feedback/edit','FeedbackController@update');
Route::get('/feedback/delete/{id}','FeedbackController@deletefeed');


/* Feedback Route */

/* Rservation Route */
Route::POST('reservation','ReservationController@insert');
Route::get('/reservation/edit/{id}','ReservationController@edit');
Route::POST('/reservation/edit','ReservationController@update');
Route::get('/reservation/delete/{id}','ReservationController@deleteresv');
/* Rservation Route */

/* Menu Route */
Route::POST('menuinsert','MenuController@save');
Route::get('/menu/edit/{id}','MenuController@edit');
Route::POST('/menu/edit/','MenuController@update');
Route::get('/menu/delete/{id}','MenuController@deletemenu');


/* Menu Route */

