<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationController; 
use App\Http\Controllers\YourController;

// مسارات إدارة المنتجات
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// مسارات إدارة الحجوزات
Route::get('/reserve', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reserve', [ReservationController::class, 'store'])->name('reservations.store');

// مسارات أخرى
Route::get('/', [YourController::class, 'index'])->name('home');
Route::post('/submit', [YourController::class, 'submit'])->name('submit');
