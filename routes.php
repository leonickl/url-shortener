<?php

use App\Controllers\UrlController;
use PXP\Core\Lib\Route;

Route::get('/')->do(UrlController::class, 'index');

Route::post('/')->do(UrlController::class, 'shorten');

Route::get('/s/{short}')->do(UrlController::class, 'redirect');

Route::get('/{short}')->do(UrlController::class, 'show');
