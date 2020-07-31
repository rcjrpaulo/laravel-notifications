<?php

use Illuminate\Support\Facades\Route;

Route::resource('posts', 'PostController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
