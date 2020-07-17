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

/*Admin*/
Route::get('/admin-panel', 'AdminController@index')->name('admin.index')->middleware('App\Http\Middleware\RolesAuth');
Route::post('/admin-panel/store', 'AdminController@store')->name('admin.store')/* ->middleware('App\Http\Middleware\RolesAuth') */;
Route::get('/admin-panel/estate/{id}/edit', 'AdminController@edit')->name('admin.edit');
Route::put('/admin-panel/estate/{id}/update', 'AdminController@update')->name('admin.update');
