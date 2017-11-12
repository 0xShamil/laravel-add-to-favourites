<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/products/favourites', 'ProductController@index')->name('product.fav');
Route::get('/products/{product}', 'ProductController@show')->name('product.show');
Route::post('/products/{product}/favourites', 'ProductController@store')->name('product.fav.store');	
Route::delete('/products/{product}/favourites', 'ProductController@destroy')->name('product.fav.destroy');