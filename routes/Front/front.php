<?php

Route::get('/product', function () {
    return view(view: 'product');
})->name(name: 'product');

Route::get('/customer-service', function () {
    return view(view: 'customer_service');
})->name(name: 'customer_service');