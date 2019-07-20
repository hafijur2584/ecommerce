<?php


Route::get('/', 'HomeController@index')->name('home');

Route::get('/cart', function () {
    return view('user.cart');
});
Route::get('/singleProduct', function () {
    return view('user.singleProduct');
});
