<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('layouts/app');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/customers', 'CustomerController@index');
    Route::get('/orders', 'OrderController@index');
    Route::get('/payments', 'PaymentController@index');
    Route::get('/products', 'ProductController@index');
    Route::get('/product-lines', 'ProductLineController@index');
    Route::get('/employees', 'EmployeesController@index');
    Route::get('/offices', 'OfficesController@index');
    Route::get('/home', 'HomeController@index');
});



