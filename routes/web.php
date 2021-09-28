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
Route::get('/store','TutionController@getform')->name('Tution.form');
Route::post('/store/submit','TutionController@submitform')->name('Tution.form.submit');
Route::get('/table','TutionController@gettable')->name('Tution.table');
Route::get('/delete{id}','TutionController@deleteform')->name('Tution.delete');
Route::get('/edit{id}','TutionController@editform')->name('Tution.edit');
Route::post('/update{id}','TutionController@updateform')->name('Tution.update');

