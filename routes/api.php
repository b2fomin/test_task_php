<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'api/v1/notebook'], function () {
    Route::get('/user', function (Request $request) {
            return $request->user();
    });    
    }
);