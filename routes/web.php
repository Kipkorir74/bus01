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

use App\Bus_Schedule;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/admin', 'HomeController@index')->name('home');
});


//operator routes
Route::resource('operators', 'operatorController');


//buses routes
Route::resource('buses', 'busController');


//seats routes
 Route::resource('seats', 'seatsController');

//bus schedule routes

Route::resource('busschedule', 'busScheduleController');

Route::get('busschedule/fetch/{id}', 'busScheduleController@fetch')->name('busschedule.fetch');




//customer routes
Route::resource('book', 'customerController');

Route::get('booking/status','customerController@bookingStatus')->name('booking.index');


//sessions
Route::get('session/get','SessionController@accessSessionData');

Route::get('session/set','SessionController@storeSessionData');

Route::get('session/remove','SessionController@deleteSessionData');

Route::get('session/t','SessionController@show');