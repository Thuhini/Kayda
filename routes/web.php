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
Route::get('/reservation', function () {
    return view('reservation');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/aboutUs', function () {
    return view('aboutUs');
});

// route to handle report payments
Route::post('addReservation', [
    'uses' => 'ReservationController@addReservtionDetail',
    'as' => 'addReservation'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
