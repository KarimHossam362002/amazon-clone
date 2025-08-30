<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ShipmentController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'isAdmin'])->prefix("admin")->group(function () {
    Route::get('/', [AdminIndexController::class, 'index'])->name('admin.index');
    // Users
    Route::resource('users', UserController::class)->only(['index', 'show', 'update']);

    // Reviews
    Route::resource('reviews', ReviewController::class)->only(['index', 'show']);

    // Shipments
    Route::get('shipments', [ShipmentController::class, 'index'])->name('shipments.index');
    Route::get('shipments/{shipment}/edit', [ShipmentController::class, 'edit'])->name('shipments.edit');
    Route::put('shipments/{shipment}', [ShipmentController::class, 'update'])->name('shipments.update');
    

    Route::resources([
        'categories' => CategoryController::class,
        'products' => ProductController::class,
        'payments' => PaymentController::class,
        
    ]);
});









