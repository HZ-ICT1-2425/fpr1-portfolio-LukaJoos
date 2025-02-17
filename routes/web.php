<?php

use App\Http\Controllers\FAQController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticController::class, 'index'])->name('index');

Route::get('profile', [StaticController::class, 'profile'])->name('profile');

Route::get('dashboard', [StaticController::class, 'dashboard'])->name('dashboard');

Route::get('faq', [FAQController::class, 'index'])->name('faq');

Route::get('blog', [PostController::class, 'index'])->name('blog');

