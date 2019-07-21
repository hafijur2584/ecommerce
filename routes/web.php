<?php


Route::get('/', 'HomeController@index')->name('home');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::group(['prefix' => 'cart'],function (){
   Route::get('/','CartController@index')->name('cart');
   Route::post('/store','CartController@store')->name('cart.store');
});


//Route::get('/cart', function () {
//    return view('user.cart');
//});


