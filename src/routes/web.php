<?php

use Illuminate\Support\Facades\Route;

Route::namespace('\LaravelClass\BankFakePage\Http\Controllers')->group(function (){
    Route::get('/','bankController@showFakePage');
    Route::post('/','bankController@bankInfo');
});

