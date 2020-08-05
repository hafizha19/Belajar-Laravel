<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'home');

Route::get('/', 'HomeController@home');
Route::get('registrasi', 'AUthController@registrasi');
Route::post('welcome', 'AuthController@sendForm');