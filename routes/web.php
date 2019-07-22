<?php


Route::get('/', 'WellcomeController@index')->name('welcome');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::group(['prefix' => 'cart'],function (){
   Route::get('/','CartController@index')->name('cart');
   Route::post('/store','CartController@store')->name('cart.store');
   Route::post('/delete/{id}','CartController@destroy')->name('cart.delete');
});


//Route::get('/cart', function () {
//    return view('user.cart');
//});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
