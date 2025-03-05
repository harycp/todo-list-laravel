<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [UserController::class, 'viewLogin'])->name('login.view');
Route::post('/login', [UserController::class, 'login'])->name('login');
