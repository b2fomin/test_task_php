<?php

use App\Http\Controllers\Notebook\DeleteController;
use App\Http\Controllers\Notebook\EditController;
use App\Http\Controllers\Notebook\IndexController;
use App\Http\Controllers\Notebook\ShowController;
use App\Http\Controllers\Notebook\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/v1/notebook'], function () {
        Route::get('/', IndexController::class);
        Route::get('/{id}', ShowController::class);
        Route::post('/', StoreController::class);
        Route::put('/{id}', EditController::class);
        Route::delete('/{id}', DeleteController::class);
    }
);