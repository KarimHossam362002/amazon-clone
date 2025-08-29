<?php
// Front Routes
use App\Http\Controllers\Front\ProfileController;

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
});
