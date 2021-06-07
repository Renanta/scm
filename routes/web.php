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

Route::resource('stock', 'StockController');
Route::resource('plan', 'PlanController');
Route::resource('project', 'ProjectController');
Route::resource('suplier', 'SuplierController');
Route::resource('supliers', 'SupplierReadController');
Route::resource('stockToko', 'StockTokoController');
Route::resource('report', 'ReportController');
Route::resource('pesanan', 'PesananController');
Route::resource('report-plan', 'ReportPlanController');
Route::resource('order', 'OrderController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
