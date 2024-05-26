<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\ProductCreateController;
use App\Http\Controllers\ProductShowController;
use App\Http\Controllers\ProductEditController;
use App\Http\Controllers\ProductUpdateController;
use App\Http\Controllers\ProductDestroyController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'AuthController@login');
Route::post('/login', 'AuthController@authenticate');
Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@store');

Route::get('/products', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::post('/products', 'ProductController@store');
Route::get('/products/{product}', 'ProductController@show');
Route::get('/products/{product}/edit', 'ProductController@edit');
Route::put('/products/{product}', 'ProductController@update');
Route::delete('/products/{product}', 'ProductController@destroy');

Route::get('/orders', 'OrderController@index');
Route::get('/orders/create', 'OrderController@create');
Route::post('/orders', 'OrderController@store');
Route::get('/orders/{order}', 'OrderController@show');
Route::get('/orders/{order}/edit', 'OrderController@edit');
Route::put('/orders/{order}', 'OrderController@update');
Route::delete('/orders/{order}', 'OrderController@destroy');

Route::get('/invoices', 'InvoiceController@index');
Route::get('/invoices/create', 'InvoiceController@create');
Route::post('/invoices', 'InvoiceController@store');
Route::get('/invoices/{invoice}', 'InvoiceController@show');
Route::get('/invoices/{invoice}/edit', 'InvoiceController@edit');
Route::put('/invoices/{invoice}', 'InvoiceController@update');
Route::delete('/invoices/{invoice}', 'InvoiceController@destroy');

Route::get('/super-admin', 'SuperAdminController@index');

Route::get('/import', 'ImportController@index');
Route::post('/import', 'ImportController@import');
Route::get('/export', 'ExportController@index');
Route::post('/export', 'ExportController@export');

Route::get('/products/list', 'ProductListController@index');
Route::get('/products/create', 'ProductCreateController@index');
Route::post('/products', 'ProductCreateController@store');
Route::get('/products/{product}', 'ProductShowController@index');
Route::get('/products/{product}/edit', 'ProductEditController@index');
Route::put('/products/{product}', 'ProductUpdateController@update');
Route::delete('/products/{product}', 'ProductDestroyController@destroy');

Route::resource('products', 'ProductController');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/products', 'ProductController@index');



Route::get('/login', 'LoginController@index');
Route::post('/dologin','LoginController@doLogin');

   
});
