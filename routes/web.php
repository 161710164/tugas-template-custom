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
Route::get('tabel','AbouteController@tabel');
Route::get('/gambar', function () {
    return view('test2');
});
Route::get('template2','AbouteController@template2');
Route::get('template3','AbouteController@template3');
Route::get('template4','AbouteController@template4');
Route::get('template5','AbouteController@template5');

Route::get('/', function () {
    return view('welcome');
    
Route::get('aboute','AbouteController@index');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
