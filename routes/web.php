<?php

Route::get('/', 'MainController@index');
Route::get('/home', 'MainController@home');
Route::get('products', 'MainController@products');
Route::get('vision', 'MainController@vision');
Route::get('about', 'MainController@about');
Route::get('company', 'MainController@company');

Route::get('product/{code}', 'MainController@product');

Route::get('test', function() {
    return view('layout');
});
