<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

// Route::get('/shops','ShopController@index')->name('shop.list');
// Route::get('/shops',[ShopController::class, 'shop.list']);
Route::get('/shops','App\Http\Controllers\ShopController@index')->name('shop.list');


Route::get('/', function () {
    return redirect('/shops');
});
