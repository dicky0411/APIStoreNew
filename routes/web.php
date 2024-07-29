<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Post routes for form submissions
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// View routes for displaying register and login pages
Route::view('/register', 'auth.register')->name('register');
Route::view('/login', 'auth.login')->name('login');

// Other routes...
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/submit_form', [UserController::class, 'store'])->name('user.store');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{code}', [ProductController::class, 'show'])->name('products.show');
Route::get('/json/{id?}', [ProductController::class, 'showCountry'])->name('country.show');
Route::get('/region/{code?}', [ProductController::class, 'showRegion'])->name('ip.show');
Route::get('/areacode/{ac?}', [ProductController::class, 'showAreaCode'])->name('areacode.show');