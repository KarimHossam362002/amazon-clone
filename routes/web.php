<?php

use Illuminate\Support\Facades\Route;

include __DIR__.'/Admin/admin.php';
include __DIR__.'/Front/front.php';

Route::get('/', function () {
    return view('index');
})->name('index');


