<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminIndexController;
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

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', [AdminIndexController::class, 'index'])->name('admin.index');

    Route::resource('users', UserController::class)->only(['index', 'show', 'update']);

    Route::resources([
        'admin/categories' => CategoryController::class,
        'admin/products' => ProductController::class,
        'admin/reviews' => ReviewController::class,
        'admin/payments' => PaymentController::class,
        'admin/shipments' => ShipmentController::class,
        'admin/orders' => OrderController::class,
    ]);
});









