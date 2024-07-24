<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController; // Ensure ProductController is imported

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/submit_form', [UserController::class, 'store'])->name('user.store');
Route::get('/json/{id}', [ProductController::class,'showCountry'])->name('showCountry');

// Correct the routes for ProductController
Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/country/{id?}', [ProductController::class, 'showCountry'])->name('country.show');
Route::get('/region/{code?}', [ProductController::class, 'showRegion'])->name('ip.show');
