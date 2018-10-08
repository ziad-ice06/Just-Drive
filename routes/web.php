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
    return view('index');
});
Route::get('/payment', 'BasicController@payment')->name('payment');
Route::get('/result', 'BasicController@result')->name('result');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
