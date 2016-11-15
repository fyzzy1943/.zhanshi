<?php

Route::get('/', 'MainController@index');
Route::get('/home', 'MainController@home');
Route::get('products', 'MainController@products');
Route::get('vision', 'MainController@vision');
Route::get('about', 'MainController@about');

Route::get('product/{code}', 'MainController@product');
