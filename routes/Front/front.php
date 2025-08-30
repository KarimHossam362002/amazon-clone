<?php
// Front Routes
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\ProfileController;
use App\Http\Controllers\Front\OrderController;
use App\Http\Controllers\ReviewController;

//-- 1- Product ---
Route::get('/product', function () {
    return view(view: 'product');
})->name(name: 'product');

//-- 2- Customer Service ---
Route::get('/customer-service', function () {
    return view(view: 'customer_service');
})->name(name: 'customer_service');

//-- 3- Search page ---
Route::get('/search', function () {
    return view(view: 'search');
})->name(name: 'search');

// Profile Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/update/{item}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove/{item}', [CartController::class, 'remove'])->name('cart.remove');

    // Orders
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('orders.checkout');
    Route::post('/checkout', [OrderController::class, 'placeOrder'])->name('orders.place');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}', action: [OrderController::class, 'show'])->name('orders.show');
});
