<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');
Route::get('/search','HomeController@search')->name('home');
Route::get('/create-inventory', 'HomeController@create')->name('create-inventory');
Route::post('/store-inventory', 'HomeController@store')->name('store-inventory');;
Route::get('/edit-inventory/{id}', 'HomeController@edit')->name('edit-inventory');
Route::post('/update-inventory/{id}', 'HomeController@update')->name('update-inventory');;
