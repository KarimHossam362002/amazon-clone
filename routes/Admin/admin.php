<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ShipmentController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view(view: 'Admin.index');
});

Route::resources([
    'categories' => CategoryController::class,
    'products' => ProductController::class,
    'orders' => OrderController::class,
    'order-items' => OrderItemController::class,
    'carts' => CartController::class,
    'cart-items' => CartItemController::class,
    'reviews' => ReviewController::class,
    'payments' => PaymentController::class,
    'shipments' => ShipmentController::class,
]);



