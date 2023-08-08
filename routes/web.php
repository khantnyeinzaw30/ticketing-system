<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'loginView'])->name('loginView');
    Route::get('register', [AuthController::class, 'registerView'])->name('registerView');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('register', [AuthController::class, 'register'])->name('register');
});

// authenticated users can access these routes
Route::middleware('auth')->group(function () {
    Route::get('email/verify', [EmailVerificationController::class, 'notice'])->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', [EmailVerificationController::class, 'verifyEmail'])->middleware('signed')->name('verification.verify');
    Route::post('email/verification-notification', [EmailVerificationController::class, 'resendVerificationNotice'])->middleware('throttle:6,1')->name('verification.resend');

    // logout function for authenticated users
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // only verified user can access these routes
    Route::middleware('verified')->group(function () {
        // home page for application
        Route::redirect('/', 'dashboard', 301);
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        // tickets
        Route::resource('tickets', TicketController::class);

        // users
        Route::get('users', UserController::class)->name('users.index');

        // category resource routes
        Route::resource('categories', CategoryController::class)->except(['create', 'edit']);

        // labels resource routes
        Route::resource('labels', LabelController::class)->except(['create', 'edit']);
    });
});
