<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mhsController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('mhs',mhsController::class);