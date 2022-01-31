<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home') ->name('home');

Route::get('/comic/show/{id}', 'HomeController@show') ->name('show');

Route::get('/comic/create', 'HomeController@create') ->name('create');

Route::post('/comic/store', 'HomeController@store') ->name('store');

Route::get('/comic/edit/{id}', 'HomeController@edit') ->name('edit');

Route::post('/comic/update/{id}', 'HomeController@update') ->name('update');

Route::get('/comic/delete/{id}', 'HomeController@delete') ->name('delete');