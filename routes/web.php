<?php

use Illuminate\Support\Facades\Route;

// main
Route::domain(config('domains.main'))->group(function () {
    Route::get('/', fn () => 'main');
    Route::get('products', fn () => 'main.products');
    Route::get('contacts', fn () => 'main.contacts');
});

// admin
Route::domain(config('domains.admin.domain'))
    ->prefix(config('domains.admin.prefix'))
    ->group(function () {
        Route::get('/', fn () => 'admin');
        Route::get('users', fn () => 'admin.users');
        Route::get('orders', fn () => 'admin.orders');
    });
