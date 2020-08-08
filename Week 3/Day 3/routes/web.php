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

// Route::get('/', function () {
//     return view('adminlte/master');
// });

// Route::get('/items', function(){
//     return view('items.index');
// });

// Route::get('/items/create', function(){
//     return view('items.create');
// });

// Route::get('/', function(){
//     return view('tugas2/index');
// });

// Route::get('/data-tables', function(){
//     return view('tugas2/data-tables');
// });

Route::get('/', 'PertanyaanController@index');
Route::get('/crud/create', 'PertanyaanController@create');
Route::post('/', 'PertanyaanController@store');
Route::get('/crud/{pertanyaan}', 'PertanyaanController@show');
Route::delete('/crud/{pertanyaan}', 'PertanyaanController@destroy');
Route::get('/crud/{pertanyaan}/edit', 'PertanyaanController@edit');
Route::put('/crud/{pertanyaan}', 'PertanyaanController@update');
