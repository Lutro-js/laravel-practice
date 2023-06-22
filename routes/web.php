<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

// Route::get('/shops','ShopController@index')->name('shop.list');
// Route::get('/shops',[ShopController::class, 'shop.list']);
Route::get('/shops','App\Http\Controllers\ShopController@index')->name('shop.list');
Route::get('/shops/new','App\Http\Controllers\ShopController@create')->name('shop.new');
Route::post('/shop','App\Http\Controllers\ShopController@store')->name('shop.store');
Route::get('/shop/edit/{id}','App\Http\Controllers\ShopController@edit')->name('shop.edit');
Route::post('/shop/update/{id}','App\Http\Controllers\ShopController@update')->name('shop.update');

Route::get('/shop/{id}','App\Http\Controllers\ShopController@show')->name('shop.detail');
Route::delete('/shop/{id}','App\Http\Controllers\ShopController@destory')->name('shop.destory');

Route::get('/', function () {
    return redirect('/shops');
});
