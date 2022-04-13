<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product\product;
use App\Http\Controllers\product\product_add;
use App\Http\Controllers\member\cart;
use App\Http\Controllers\member\home;

//商家Router組
Route::middleware('seller')->group( function(){
    
});

//顧客Route組
Route::middleware('customer')->group( function(){
    Route::get('getAllProduct', 
        [home::class, 'showGoods']
    );
});
?>