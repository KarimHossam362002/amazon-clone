<?php

use Illuminate\Support\Facades\Route;

include __DIR__.'/Admin/admin.php';

Route::get('/', function () {
    return view('welcome');
});


