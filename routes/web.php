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

Route::get('file/upload', 'FileController@form')->name('file.form');
Route::get('file/index', 'FileController@index')->name('file.index');
Route::post('file/upload', 'FileController@upload')->name('file.upload');

Auth::routes();

Route::get('home', function () {
    return view('home');
});

Route::middleware('auth')->group(function () {
    //Route::get('home', 'HomeController');
    Route::resource('user', 'UserController');
    Route::resource('jenis-surat', 'JenisSuratController');
    Route::get('surat/laporan', 'SuratController@laporan');
    Route::resource('surat', 'SuratController');
    Route::resource('disposisi', 'DisposisiController');
});