<?php


Route::get('/', 'WellcomeController@index')->name('welcome');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
Route::get('/invoice', 'OrderController@invoice')->name('invoice');

Route::group(['prefix' => 'cart'],function (){
   Route::get('/','CartController@index')->name('cart');
   Route::post('/store','CartController@store')->name('cart.store');
   Route::post('/delete/{id}','CartController@destroy')->name('cart.delete');
});

Route::group(['prefix' => 'checkout'],function (){
    Route::get('/','OrderController@index')->name('checkout');
    Route::post('/store','OrderController@store')->name('checkout.store');
});

Route::group(['prefix' => 'admin'],function (){
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
    Route::get('/logout','Auth\Admin\loginController@logout')->name('admin.logout');
    Route::get('/product/create','Admin\ProductController@create')->name('admin.product.create');
});


//Route::get('/cart', function () {
//    return view('user.cart');
//});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
