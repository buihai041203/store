<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/login');
});

// Hiển thị form login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// Xử lý đăng nhập
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Dashboard sau khi đăng nhập
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

// Đăng xuất
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');