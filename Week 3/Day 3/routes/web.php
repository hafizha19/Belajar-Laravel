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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', 'PertanyaanController@index');
// Route::get('/crud/create', 'PertanyaanController@create');
// Route::post('/', 'PertanyaanController@store');
// Route::get('/crud/{pertanyaan}', 'PertanyaanController@show');
// Route::delete('/crud/{pertanyaan}', 'PertanyaanController@destroy');
// Route::get('/crud/{pertanyaan}/edit', 'PertanyaanController@edit');
// Route::put('/crud/{pertanyaan}', 'PertanyaanController@update');

Route::resource('pertanyaans', 'PertanyaanController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
