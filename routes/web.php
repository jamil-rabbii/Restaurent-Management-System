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
/* Order Route */

Route::POST('feedback','FeedbackController@insert');
Route::get('/feedback/edit/{id}','FeedbackController@edit');
Route::POST('/feedback/edit','FeedbackController@update');

/* Order Route */
Route::POST('reservation','ReservationController@insert');
/* feedback view */
