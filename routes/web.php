<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


include __DIR__.'/Admin/admin.php';
include __DIR__.'/Front/front.php';

Route::get('/', function () {
    return view('index');
})->name('index');




Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [ AuthController::class, 'login']);

Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



