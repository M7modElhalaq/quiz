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

Route::get('contacts', 'ContactController@index')->name('contacts');
Route::get('contacts/create', 'ContactController@create')->name('createContact');
Route::post('contacts/store', 'ContactController@store')->name('storeContact');
Route::delete('contacts/delete/{id}', 'ContactController@destroy')->name('deleteContact');
Route::get('contacts/edit/{id}', 'ContactController@edit')->name('editContact');
Route::put('contacts/update/{id}', 'ContactController@update')->name('updateContect');