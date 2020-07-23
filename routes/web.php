<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

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

/*Auth*/

Auth::routes();

Route::get('logout', function () {
    Auth::logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

/*Main*/
Route::get('/', 'HomeController@index')->name('index');

/*Estates*/
Route::get('/estates', 'EstateController@index')->name('estates.index');
Route::get('/estate/{id}', 'EstateController@show')->name('estates.show');

/*Admin*/
Route::get('/admin-panel', 'AdminController@index')->name('admin.index');
Route::post('/admin-panel/store', 'AdminController@store')->name('admin.store');
Route::get('/admin-panel/estate/{id}/edit', 'AdminController@edit')->name('admin.edit');
Route::put('/admin-panel/estate/{id}/update', 'AdminController@update')->name('admin.update');
Route::get('/admin-panel/estate/{id}/destroy', 'AdminController@destroy')->name('admin.destroy');

/*Customer*/
Route::get('/customer/estate/{id}/select', 'CustomerController@select')->name('customer.select');
Route::get('/customer/estate/{id}/unselect', 'CustomerController@unselect')->name('customer.unselect');
