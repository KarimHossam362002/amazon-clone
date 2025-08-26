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
    'admin/categories' => CategoryController::class,
    'admin/products' => ProductController::class,
    'admin/orders' => OrderController::class,
    'admin/order-items' => OrderItemController::class,
    'admin/carts' => CartController::class,
    'admin/cart-items' => CartItemController::class,
    'admin/reviews' => ReviewController::class,
    'admin/payments' => PaymentController::class,
    'admin/shipments' => ShipmentController::class,
]);



