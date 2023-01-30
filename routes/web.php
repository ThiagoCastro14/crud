<?php

use Illuminate\Support\Facades\Route;

Route::get('/books', 'BookController@index');
Route::get('/books/create','BookController@create'); 
Route::post('/books', 'BookController@store');
Route::get('/books/{books}', 'BookController@show');
Route::get('/books/{books}/edit', 'BookController@edit');
Route::put('/books/{books}', 'BookController@update');
Route::delete('/books/{books}', 'BookController@destroy');



